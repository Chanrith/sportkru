<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboard extends BaseController
{
	public function __construct()
 	{
 		if(session('login')['user_name']==''){header("Location:".base_url());exit;}
 		$this->db = \Config\Database::connect();
		$this->fo2 = $this->db->table("fo2_master");
		$this->users = $this->db->table("users");
	}
	public function index()
	{
		$data['menu']='Dashboard';
		$data['title']='Dashboard ('.date('M-Y').')';
		$data['fo2']=$this->fo2->getwhere(['status'=>'1'])->getResult();
		$data['users']=$this->users->getwhere(['status'=>'1'])->getResult();
		echo view('template/header',$data);
		echo view('dashboard/index',$data);
		echo view('template/footer');
	}
	
	public function getNotification()
	{
		$model = new DashboardModel();
		$data=$model->getNotification($model);
		echo json_encode($data);
	}
	public function logout()
	{
		session()->destroy();
		return redirect('login');
	}
}





	