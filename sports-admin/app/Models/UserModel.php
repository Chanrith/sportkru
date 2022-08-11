<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->users = $this->db->table('users');
    }
    
	public function saveProfile($user_id,$input)
	{
		$input['user_pwd']=md5($input['user_pwd']);
		$result=$this->users->where('user_id',$user_id)->update($input);
		return $result;
	}
	public function changePassword($user_id,$input)
	{
		$exist=$this->users->getWhere(['user_id'=>$user_id,'user_pwd'=>md5($input['old_password'])])->getRow()->user_name;
		if($exist)
		{
			unset($input['old_password']);
			unset($input['confirm_password']);
			$input['new_password']=md5($input['new_password']);
			$data=array('user_pwd'=>$input['new_password']);
			$this->users->where('user_id',$user_id)->update($data);
			$result=100;
		}
		else{$result=200;}
		return $result;
	}
}