<?php

namespace App\Models;

use CodeIgniter\Model;
class HomeModel extends Model
{
 
    public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->coach = $this->db->table("coach");
    }

    public function saveRegister($input){
        $exist=$this->coach->getWhere(['mobile_number'=>$input['mobile_number']]);
        if(count($exist->getResult())==0){
            $result=$this->coach->insert($input);
            $result=true;
        }else{
            $result=false;
        }
       return $result;
    }

}