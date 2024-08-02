<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\UserModel;
use App\Models\CategoryDocModel;

class CategoryDoc extends BaseController
{
  
    protected $validation ;
    protected $session;
    protected $email;
    protected $req ;
    protected $LM ;
    protected $UM ;
    protected $CDM ;

    public function __construct()
    {
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->req = \Config\Services::request();
        $this->email = \Config\Services::email();
        $this->LM = new LoginModel();
        $this->UM = new UserModel($this->req);
        $this->CDM = new CategoryDocModel($this->req);
        $response = service('response');

        // Tambahkan header HSTS
        $response->setHeader('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        $response->setHeader('X-Frame-Options', 'DENY');
    }
    public function index()
    {
        // if (session()->nip_emp==null || session()->type!='superadmin'){
        //         return redirect()->to(base_url(''));
        //     }
          $data = [
                'titlePage' => 'User Admin',
                'dataRole'=>$this->LM->getByNip(session()->nip_emp)
              
            ];
       return view('partials/navbar', $data);
        // print_r(session()->get());
    }

    public function dataJson()
    {
      
            // $periode = $this->request->getPost("periode");
            $lists = $this->CDM->get_datatables();
            //print_r($lists);
            $data = [];
            //$no = $this->request->getPost("start");

            foreach ($lists as $val) {
               // $no++;
                $row = [];
            
                $row[]='<span class="currency">'.$val['id_cat_doc'].'</span>';
                $row[]='<span class="currency">'.$val['category_name'].'</span>';
                $row[]=' <span>'.$val['category_type'].'</span>';
                $row[]=' <span>'.$val['head_category'].'</span>';
                $status=$val['category_status']==1?'<span class="badge badge-success" >Active</span>':'<span class="badge badge-success" >Non-Active</span>';
                $row[]=$status;
                $row[]=' <button type="button" onclick="deletedata(\''.$val['id_cat_doc'].'\')" class="btn btn-outline-danger  btn-xs" title="Hapus">
                     <i class="fa-solid fa-trash"></i>
                      </button>';
                $data[] = $row;
            }
            $output = [
                "draw" => $this->request->getPost('draw'),
                "recordsTotal" => $this->CDM->count_all(),
                "recordsFiltered" => $this->CDM->count_filtered(),
                "data" => $data
            ];
            echo json_encode($output);
 
    }

    public function mainCategory(){
        $s = $this->request->getPost('searchTerm');
        $dbs = $this->CDM->getMainCategory($s);

        $result = array();
        foreach ($dbs as $db)
            $result[] = array(
                'id' => $db->id_cat_doc,
                'text' => $db->category_name
            );

        echo json_encode($result);
    }

    public function addDataCategory(){
        if (session()->nip_emp==null){
              return false;
          }

        $type_cat=$this->request->getPost('category_type');
        $rules=array(
                
            'category_name' =>[
                'rules'=>'required',
                // rules greater_than_equal_to sudah dirubah defaultnya
                'errors'=>[
                       'required'=>'Nama Kategori Belum diisi',
                ],
                
            ],
            'category_type'=>[
                 'rules'=>'required',
                 'errors'=>[
                        'required'=>'Type Kategori Belum diisi',
                    ],

                ],
            );

            $subcat_rules=[];
            if ($type_cat=='Sub Category'){
                $subcat_rules=array(
                    'main_category_type' =>[
                        'rules'=>'required',
                        // rules greater_than_equal_to sudah dirubah defaultnya
                        'errors'=>[
                               'required'=>'kategori utama Belum diisi',
                        ],
                        
                    ],
                    );
            }

            $rules=array_merge($rules,$subcat_rules);

            $this->validation->setRules($rules);
            $isDataValid = $this->validation->withRequest($this->request)->run();

            if ($isDataValid) {
                $data =array(
                    'category_name'=>$this->request->getPost('category_name'),
                    'category_type'=>$this->request->getPost('category_type'),
                    'id_cat_doc_fk'=>$type_cat=='Sub Category'?$this->request->getPost('main_category_type'):null,
                );
                $this->CDM->insertDataCategory($data);
                echo json_encode(array('status' => 'ok;', 'text' => ''));
            }else{
                $validation = $this->validation;
                $error=$validation->getErrors();
            
                $dataname=$_POST;

                    //print_r($error);
                echo json_encode(array('status' => 'error;', 'text' => '', 'data'=>$error,'dataname'=>$dataname));
            }
        
    }

    public function deleteCat()
    {

         if (session()->id==null){
            return false;
        }
     
        $id = $this->request->getPost('id');
        $this->CDM->deleteCat($id);

        echo json_encode(array('status' => 'ok;', 'text' => ''));

    }

}
