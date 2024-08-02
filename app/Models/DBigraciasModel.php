<?php

namespace App\Models;

use CodeIgniter\Model;

class DBigraciasModel extends Model
{
	  protected $table = "unit_master";

	 function __construct()
    {
        parent::__construct();
        $this->dbi = \Config\Database::connect('DBIGRACIAS');

 
        $this->tb = $this->db->table($this->table);
    }
    public function getDataUnit()
    {
        
        $query = $this->dbi->query("SELECT * FROM MASTERDATA.ORGANIZATIONSTRUCTURE WHERE ORGSTRUCTURENAME like '%JAKARTA%' and ORGSTRUCTURELEVEL =5");
        return $query->getResultArray();
    }

       public function insertMigrate($data)
    {
        $query = $this->tb->insertBatch($data);
        return $query;
    }

      public function deleteData()
    {
        $query = $this->tb->emptyTable('unit_master');
        return $query;
    }

      public function getAllData()
    {
        return $this->tb->get()->getResultArray();
    }

    public function updateDataUnit($dataEmp, $dataDetail)
    {
        $query =  $this->db->table('employe_master')->update($dataEmp, array('nip_emp' => session()->nip_emp));
        $query2 =  $this->db->table('detail_role')->update($dataDetail, array('nip_pgw_role' => session()->nip_emp));
        return $query2;
    }

}