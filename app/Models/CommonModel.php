<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->users = $this->db->table('users');
		$this->permission = $this->db->table('role_permission');
    
    }
	public function rights($mod_id)
	{
		$role=session('login')['role'];
		$rights=$this->permission->getWhere(['role_id'=>$role,'module_id'=>$mod_id])->getRow();
		//print_r($rights);exit;
		return $rights;
		
	}
	
}