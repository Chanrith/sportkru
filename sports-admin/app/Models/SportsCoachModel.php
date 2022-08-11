<?php

namespace App\Models;

use CodeIgniter\Model;

class SportsCoachModel extends Model
{

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->coach = $this->db->table("coach");
    }
	public function getSportsCoach($input)
    {
        $data['result']='';$i=1;
        $result=$this->coach->getWhere()->getResult();
        foreach($result as $row)
        {
            $edit="showMdModal('".base_url()."/sportsCoach/editCoach/".$row->id."','Edit Sports Coach')";
            if($row->status=='0')
			{
				$onclick="changeCoachStatus('coach','id',".$row->id.",'status',1)";
				$status='<button class="btn btn-sm btn-danger" type="button" onclick="'.$onclick.'">Inactive</button>';
			}
			else if($row->status=='1')
			{
				$onclick="changeCoachStatus('coach','id',".$row->id.",'status',0)";
				$status='<button class="btn btn-sm btn-success" type="button" onclick="'.$onclick.'">Active</button>';
			}
            $data['result'].='<tr class="items">
                              <td>'.$i.'</td>
                              <td>'.ucwords($row->first_name).' '.ucwords($row->last_name).'</td>
                              <td>'.$row->mobile_number.'
                              '.$row->alternative_number.'</td>
                              <td>'.$row->email.'</td>
                              <td>'.$row->class_schedule.'</td>
                              <td>'.$row->sports_type.'</td>
                              <td>'.$row->couch_timing.'</td>
                              <td>'.$status.'</td>
                              <td width="90px">
                                      <button class="btn btn-sm btn-primary" onclick="'.$edit.'"><i class="fa fa-edit"></i></button>
                                  </td>
                      </tr>';$i++;
        }
    	if($data['result']==''){$data['result']='<tr><th colspan="9" class="text-center"><div class="noresult"> <div class="text-center"> <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"> </lord-icon> <h5 class="mt-2">Sorry! No Record Found.</h5> <p class="text-muted mb-0">Create some new records to list here...</p></div></div></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th><th class="d-none"></th></tr>';}
        return $data;
    }
    public function saveCoach($id,$input)
    {
        if($id>0){$this->coach->where('id!=',$id);}
        $exit=$this->coach->getWhere(['mobile_number'=>$input['mobile_number']])->getResult();
        if(count($exit)==0)
        {
            if($id==0)
            {
                $input['status']=1;
                $input['verified']=1;
                $this->coach->insert($input);
                $result=true;
            }
            else
            {
                if($_FILES["image"]['name'])
                    {
                        $image=$this->coach->getWhere(['id'=>$id])->getRow()->image;
                        $imgUrl='./uploads/coach/'.$image;
                        if(file_exists($imgUrl) && $image!=''){unlink($imgUrl);}
                    }
                    $this->coach->where('id',$id)->update($input);	
                    $result=true;
            }
        }
        else
        {
            $result=false;
        }

        return $result;
    }
}
?>