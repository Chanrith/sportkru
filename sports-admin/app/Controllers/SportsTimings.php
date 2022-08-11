<?php

namespace App\Controllers;

use App\Models\SportsTimingsModel;

class SportsTimings extends BaseController
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
        $data["menu"] = "Sports Timing";
        $data["submenu"] = "Sports Timing";
        $data["title"] = "Sports Timing list";
        echo view("template/header", $data);
        echo view("sports_timings/index", $data);
        echo view("template/footer");
    }
    public function getSportsTiming()
    {
        $input=$this->request->getVar();
        $model=new SportsTimingsModel();
        $data=$model->getSportsTiming($input);
        echo json_encode($data);
    }
    public function addSportsTiming()
    {
        $data['menu']="Add Sports Timing";
        echo view("sports_timings/modal/add_timings",$data);
    }
    public function editSportsTiming($id)
    {
        $data['menu']="Add Sports Timing";
        $data['edit']=$this->sports_timings->getWhere(['st_id'=>$id])->getRow();
        echo view("sports_timings/modal/edit_timings",$data);
    }
    public function saveSportsTimings($id=0)
    {
        $input=$this->request->getVar();
        $model=new SportsTimingsModel;
        $data=$model->saveSportsTimings($id,$input);
        echo json_encode($data);
    }
    
    public function deleteSportsTiming($id)
    {
        $this->sports_timings->where('st_id',$id)->delete();
        echo true;
    }

}
?>