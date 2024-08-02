<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $column_order = array(null,null,null, null, null,null);
    protected $column_search = array('name_emp');
    protected $order = array('' => '');
    protected $request;
    protected $db;
    protected $dt;
 
    function __construct(RequestInterface $request)
    {
        parent::__construct();
        // $this->db = db_connect();
        $this->request = $request;
 
        $this->dt = $this->db->table($this->table);
    }
    private function _get_datatables_query()
    {
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($this->request->getPost('search')['value']) {
                if ($i === 0) {
                    $this->dt->groupStart();
                    $this->dt->like($item, $this->request->getPost('search')['value']);
                } else {
                    $this->dt->orLike($item, $this->request->getPost('search')['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->dt->groupEnd();
            }
            $i++;
        }
 
        if ($this->request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->request->getPost('length') != -1){
            $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        }
            $this->dt->join('employe_master', 'user.Admin_name=employe_master.id');
            $this->dt->orderBy('nip_emp', 'ASC');
       
        $query = $this->dt->get();
      
        return $query->getResultArray();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        
    
             $this->dt->join('employe_master', 'user.Admin_name=employe_master.id');
            
            $this->dt->orderBy('nip_emp', 'ASC');

        return $this->dt->countAllResults();
    }
    public function count_all()
    {
        $tbl_storage = $this->db->table($this->table);

        return $tbl_storage->countAllResults();
    }
     public function getUsersAll()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
       $builder->join('employe_master', 'user.Admin_name=employe_master.id');
        // $builder->join('ms_unit', 'master_pegawai.id_unit_pgw=ms_unit.kode_unit', 'left');
       
        $builder->orderBy('user.id', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    
    }

         public function getNip($nip)
  {


        $sql ="SELECT * FROM employe_master  where nip_emp like ? or  name_emp like ? and position='Pegawai' and unit_emp is not null order by nip_emp limit 15";
        
        return $query = $this->db->query($sql, ["%".$nip."%","%".$nip."%"])->getResult();
    }

    public function createUser($data)
    {
        $query = $this->dt->insert($data);
        return $query;
    }
}