<?php
namespace App\Controllers;
use App\Models\EnquiryModel;
use App\Models\CommonModel;
class Enquiry extends BaseController
{
    public function __construct()
    {
        if(session("login")["user_name"] == ""){header("Location:" . base_url());exit();}
        $this->db = \Config\Database::connect();
        $this->enquiry = $this->db->table("enquiry");

    }
    /* Enquiry START */
    public function enquiryList()
    {
        $data["menu"] = "Enquiry";
        $data["submenu"] = "Enquiry";
        $data["title"] = "Enquiry list";
        $data["enquiryList"] = $this->enquiry->getWhere()->getResult();
        echo view("template/header", $data);
        echo view("enquiry/enquiry", $data);
        echo view("template/footer");
    }
    public function getEnquiry()
    {
        $input = $this->request->getVar();
        $model = new EnquiryModel();
        $data = $model->getEnquiry($input);
        echo json_encode($data);
    }
    public function viewEnquiry($id)
    {
        $data['enquiry']=$this->enquiry->getwhere(['enquiry_id'=>$id])->getRow();
        echo view('enquiry/view_enquiry',$data);
    }
}