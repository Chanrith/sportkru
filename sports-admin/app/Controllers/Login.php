<?php

namespace App\Controllers;

class Login extends BaseController
{
 	public function __construct()
    	{
    		$this->db= \Config\Database::connect();
    		$this->users = $this->db->table('users');
    	}
	public function index()
	{
		if(session('login')['user_name']==true && session('login')['login_status']=='login'){header("Location:".base_url().'/dashboard');exit;}
		echo view('login');
	}
	public function check_user()
	{	
		$data=$this->request;
		$user_name=$data->getVar('user_name');
		$user_pwd=md5($data->getVar('user_pwd'));
		$loginStat=$this->users->getWhere(['user_name' => $user_name,'user_pwd' => $user_pwd]);
		if(count($loginStat->getResult())>0)
		{
			$user=$loginStat->getRow();
			if($user->status=='1')
			{
				$array=['id'=>$user->user_id,'role'=>$user->role,'name'=>$user->first_name.' '.$user->last_name,'user_name'=>$user_name,'photo'=>$user->photo,'login_status'=>'login'];
				session()->set('login',$array);
				$result=100;
			}
			else{
				$result=300;
			}	
		}
		else
		{
			$result=200;
		}
		echo json_encode($result);
	}

}
