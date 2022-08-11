<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
	protected $table='profile';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

	protected $allowedFields = ['id', 'product_name', 'status'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->supplier = $this->db->table('supplier');
    }
	public function saveProfile($supplier_id,$input)
	{
		$supplier = $this->db->table('supplier');
		$input['status']=1;
		$input['created_on']=date('Y-m-d H:i:s');
		if(trim($input['password'])){$input['password']=md5($input['password']);}
		else{unset($input['password']);}
		unset($input['confirm_password']);
		if($_FILES["supplier_logo"]['name'])
		{
			$supplier_logo=$supplier->getWhere(['supplier_id'=>$supplier_id])->getRow()->supplier_logo;
			$imgUrl='./uploads/supplier/'.$supplier_logo;
			if(file_exists($imgUrl) && $supplier_logo!=''){unlink($imgUrl);}
		}
		$result=$this->supplier->where('supplier_id',$supplier_id)->update($input);
		return $result;

	}
	
}