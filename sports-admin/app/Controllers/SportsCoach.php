<?php

namespace App\Controllers;

use App\Models\SportsCoachModel;

class SportsCoach extends BaseController
{
	public function __construct()
 	{
 		if(session('login')['user_name']==''){header("Location:".base_url());exit;}
        $this->db = \Config\Database::connect();
        $this->sports_type=$this->db->table('sports_type');
        $this->coach=$this->db->table('coach');
        $this->sports_timings=$this->db->table('sports_timings');
    }
    public function index()
    {
        $data["menu"] = "Sports Coach";
        $data["submenu"] = "Sports Coach";
        $data["title"] = "Sports Coach list";
        echo view("template/header", $data);
        echo view("coach/coach", $data);
        echo view("template/footer");
    }
    public function getSportsCoach()
    {
        $input=$this->request->getVar();
        $model=new SportsCoachModel();
        $data=$model->getSportsCoach($input);
        echo json_encode($data);
    }
    public function addCoach()
    {
        $data['menu']="Add Coach";
        $data['sports_type']=$this->sports_type->getWhere(['status'=>'1'])->getResult();
        $data['sports_timings']=$this->sports_timings->getWhere(['status'=>'1'])->getResult();
        echo view("coach/modal/add_coach",$data);
    }
    public function editCoach($id)
    {
        $data['menu']="Add Coach";
        $data['sports_type']=$this->sports_type->getWhere(['status'=>'1'])->getResult();
        $data['sports_timings']=$this->sports_timings->getWhere(['status'=>'1'])->getResult();
        $data['edit']=$this->coach->getWhere(['id'=>$id])->getRow();
        // print_r($data['edit']->name);
        echo view("coach/modal/edit_coach",$data);
    }
    public function saveCoach($id=0)
    {
        $input=$this->request->getVar();
        $file=$this->request->getFile('image');
        $newName = $file->getRandomName();
		if($_FILES["image"]['name'])
		{
			$file->move('uploads/coach', $newName);
			$input['image']=$newName;
		}
        $model=new SportsCoachModel;
        $data=$model->saveCoach($id,$input);
        echo json_encode($data);
    }
    
}
?>