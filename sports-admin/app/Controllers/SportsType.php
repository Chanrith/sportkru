<?php

namespace App\Controllers;

use App\Models\SportsTypeModel;

class SportsType extends BaseController
{
	public function __construct()
 	{
 		if(session('login')['user_name']==''){header("Location:".base_url());exit;}
         $this->db = \Config\Database::connect();
        $this->sports_type=$this->db->table('sports_type');
    }
    public function index()
    {
        $data["menu"] = "Sports Type";
        $data["submenu"] = "Sports Type";
        $data["title"] = "Sports Type list";
        echo view("template/header", $data);
        echo view("sports_type/index", $data);
        echo view("template/footer");
    }
    public function getSportsType()
    {
        $model=new SportsTypeModel();
        $data=$model->getSportsType();
        echo json_encode($data);
    }
    public function addSportsType()
    {
        $data['menu']="Add Sports Type";
        echo view("sports_type/modal/add_type",$data);
    }
    public function editSportsType($id)
    {
        $data['menu']="Add Sports Type";
        $data['edit']=$this->sports_type->getWhere(['st_id'=>$id])->getRow();

        echo view("sports_type/modal/edit_type",$data);
    }
    public function saveSportsType($id=0)
    {
        $input=$this->request->getVar();
        $model=new SportsTypeModel;
        $data=$model->saveSportsType($id,$input);
        echo json_encode($data);
    }
    public function deleteSportsType($id)
    {
        $this->sports_type->where('st_id',$id)->delete();
        echo true;
    }
}
?>