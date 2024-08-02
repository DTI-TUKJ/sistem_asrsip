<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Home extends BaseController
{
   
    protected $validation ;
    protected $session;
    protected $email;
    protected $req ;
    protected $VM ;
    protected $EM ;
    protected $LM ;
    protected $DrM ;

    public function __construct()
    {
        // session_start();
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->req = \Config\Services::request();
        // $this->VM = new VerifyModel($this->req);
        $this->LM = new LoginModel();
        //  $this->EM = new EmployeeModel($this->req);
        // // $this->DIM = new DBigraciasModel();
        // $this->DrM = new DisbursementModel($this->req);
        if (base_url('')!='http://localhost:8080/'){

           helper('cookie');
           set_cookie('my_cookie', 'nilai_cookie', 3600, '', '', false, true);
        }

        $response = service('response');

        // Tambahkan header HSTS
        $response->setHeader('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        $response->setHeader('X-Frame-Options', 'DENY');
    }

    public function index()
    {
          if (session()->nip_emp==null){
                return redirect()->to(base_url('Signin'));
            }
            //print_r(session()->get());
              $data = [
                'titlePage' => 'Dashboards',
                'dataRole'=>$this->LM->getByNip(session()->nip_emp)
              
            ];
       return view('partials/navbar', $data);
    }

    public function contentHome()
    {
        if (session()->nip_emp==null){
                return redirect()->to(base_url('Signin'));
            }
            
        $routes = $this->request->getPost('routes');
         $contenView='<div style="padding-top:250px;">under development</div>';
        if ($routes=='/' || $routes==''){
              $data = [
                'titlePage' => 'Dashboards',
                // 'dataSum'=>$this->VM->GetSumarryDashboard(),
            ];
            // $contenView=view('main/dashboard/index_spa', $data);
        }else if ($routes=='CategoryDoc'){
              $data = [
                    'titlePage' => 'Category Document',
                ];
            $_SERVER['REQUEST_URI']=='/CategoryDoc';
            $contenView=view('main/category/index_spa', $data);
        }else if($routes=='UserAdmin'){
            $data = [
                   'titlePage' => 'User Admin',
               ];
           $_SERVER['REQUEST_URI']=='/UserAdmin';
           $contenView=view('main/user_new/index_spa', $data);
       }

       echo json_encode(array('status' => 'ok;', 'text' => '', 'contentView'=>$contenView));
    }

}
