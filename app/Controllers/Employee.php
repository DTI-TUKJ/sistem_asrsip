<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\EmployeeModel;
use App\Models\LoginModel;

class Employee extends BaseController
{
    protected $validation ;
    protected $session;
    protected $email;
    protected $req ;
    protected $LM ;
    protected $MAM ;
    public function __construct()
    {
        // session_start();
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->req = \Config\Services::request();
        $this->email = \Config\Services::email();
        $this->MAM = new EmployeeModel($this->req);
        $this->LM = new LoginModel();
        $response = service('response');

        // Tambahkan header HSTS
        $response->setHeader('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        $response->setHeader('X-Frame-Options', 'DENY');
 
   
    }

    public function index()
    {
         if (session()->nip_emp==null || session()->type!='superadmin'){
                return redirect()->to(base_url(''));
            }
          $data = [
                'titlePage' => 'Data Employee',
                'dataRole'=>$this->LM->getByNip(session()->nip_emp)
              
            ];
       return view('partials/navbar', $data);
        // print_r(session()->get());
    }

     public function dataJson()
    {
      
            // $periode = $this->request->getPost("periode");
            $lists = $this->MAM->get_datatables();
            //print_r($lists);
            $data = [];
            //$no = $this->request->getPost("start");

            foreach ($lists as $val) {
               // $no++;
                $row = [];
                 $row[]=' <button type="button" onclick="modaleMyunit(\''.$val['nip_emp'].'\')" class="btn btn-outline-dark  btn-xs" title="Edit">
                            <i class="fa-solid fa-pencil"></i>
                         </button>
                         <button type="button" onclick="window.open(\''.base_url('login/tes_login_as/'.$val['nik_emp']).'\', \'_blank\')"  class="btn btn-warning  btn-xs" data-title="'.($val['nik_emp']==null?'NIK is Empty':'Login As').'" '.($val['nik_emp']==null?'disabled':'').'>
                           <i class="fa-solid fa-person-through-window"></i>
                         </button>';
                $row[]='<span class="currency">'.$val['nip_emp'].'</span>';
                $row[]='<span class="currency">'.$val['name_emp'].'</span>';
                 $row[]='<span class="currency">'.$val['nik_emp'].'</span>';
                $row[]=' <span>'.$val['unit_emp'].'</span>';
                $row[]=' <span>'.$val['no_tlp'].'</span>';
                $row[]=' <span class="tb-amount">'.$val['email'].' </span>';
               
                
                $data[] = $row;
            }
            $output = [
                "draw" => $this->request->getPost('draw'),
                "recordsTotal" => $this->MAM->count_all(),
                "recordsFiltered" => $this->MAM->count_filtered(),
                "data" => $data
            ];
            echo json_encode($output);
 
    }





}