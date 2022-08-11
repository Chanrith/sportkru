<?php
namespace App\Controllers;
use App\Models\UserModel;
class Common extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->users = $this->db->table("users");
    }
	public function changePassword($user_id)
	{
		$input=$this->request->getVar();
		$model = new UserModel();
		$data=$model->changePassword($user_id,$input);
		echo json_encode($data);
	}
    public function changeStatus($tableName,$whereColumn,$whereId,$updateColumn,$updateStatus)
    {
        $this->table = $this->db->table("$tableName");
        $data=$this->table->set($updateColumn,$updateStatus)->where($whereColumn,$whereId)->update();
        echo json_encode($data);
    }
    public function noRights()
	{
        echo view('norights');
	}
}
