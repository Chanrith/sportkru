<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
 	    public function __construct()
    	{
    		$this->db= \Config\Database::connect();
            $this->coach = $this->db->table("coach");
            $this->type = $this->db->table("sports_type");
            $this->timing = $this->db->table("sports_timings");
    	}
        public function index(){
            $data["menu"] = "List";
            $data["title"] = "List page";
            if($_GET['type']){$this->coach->where('sports_type',$_GET['type']);}
            if($_GET['timings']){$this->coach->where('couch_timing',$_GET['timings']);}
            if($_GET['per_page'] && ($_GET['per_page']!=1)){$this->coach->limit(($_GET['per_page']*10),10);}
            else{$this->coach->limit(10,0);}
            $data['list']=$this->coach->getWhere()->getResult();
            if($_GET['type']){$this->coach->where('sports_type',$_GET['type']);}
            if($_GET['timings']){$this->coach->where('couch_timing',$_GET['timings']);}
            $data['totalRows']=count($this->coach->getWhere()->getResult());
            // echo $totalRows;exit;
            // print_r(count($data['list']));exit;
            // $totalRows=count($data['list']);
            if($data['totalRows']>=10)
            {
            //PAGINATION
            $pager = service('pager');
            $page    = (int) ($this->request->getGet('page') ?? 1);
            $perPage = 10;
            $total   = $data['totalRows'];
            $pager_links = $pager->makeLinks($page, $perPage, $total);
            $data['pager_links']=$pager_links;
            // print_r($data['pager_links']);exit; 
            }
            //PAGINATION END
            $data['type']=$this->type->getWhere(['status'=>1])->getResult();
            $data['timing']=$this->timing->getWhere(['status'=>1])->getResult();
            echo view("template/header", $data);
            if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) 
            {echo view('mlist-page');}
            else{echo view('list-page');}
            echo view("template/footer");
        }
        public function register(){
            $data['menu'] = "Register";
            $data['title'] = "Register Page";
            echo view("template/header", $data);
            echo view("register", $data);
            echo view("template/footer");
        }

        public function saveRegister(){
            $input=$this->request->getvar();
            $modal=new HomeModel();
            $data=$modal->saveRegister($input);
            echo json_encode($data);
        }

}