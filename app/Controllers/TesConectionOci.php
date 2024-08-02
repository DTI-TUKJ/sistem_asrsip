<?php

namespace App\Controllers;

use \App\Models\DBigraciasModel;


class TesConectionOci extends BaseController
{
    protected $validation ;
    protected $session;
    protected $email;
    protected $req ;
    protected $VM ;
 
    public function __construct()
    {
        // session_start();
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->req = \Config\Services::request();
        $this->DIM = new DBigraciasModel();
       
   
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
          $dataDummy=$this->DIM->getDataUnit();
          print_r($dataDummy);
    }
}