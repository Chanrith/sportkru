<?php

namespace App\Models;

use CodeIgniter\Model;

class SportsTimingsModel extends Model
{

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->coach = $this->db->table("coach");
    	$this->sports_timings = $this->db->table("sports_timings");
    }
	public function getSportsTiming($input)
    {
        $data['result']='';$i=1;
        $result=$this->sports_timings->getWhere()->getResult();
        foreach($result as $row)
        {
            $edit="showMdModal('".base_url()."/sportsTimings/editSportsTiming/".$row->st_id."','Edit Sports Timings')";
            $delete="deleteSportsTiming('".$row->st_id."')";
            if($row->status=='0')
			{
				$onclick="changeSportsTimingsStatus('sports_timings','st_id',".$row->st_id.",'status',1)";
				$status='<button class="btn btn-sm btn-danger" type="button" onclick="'.$onclick.'">Inactive</button>';
			}
			else if($row->status=='1')
			{
				$onclick="changeSportsTimingsStatus('sports_timings','st_id',".$row->st_id.",'status',0)";
				$status='<button class="btn btn-sm btn-success" type="button" onclick="'.$onclick.'">Active</button>';
			}
            $data['result'].='<tr class="items">
                              <td>'.$i.'</td>
                              <td>'.ucwords($row->type_name).'</td>
                              <td>'.$status.'</td>
                              <td width="90px">
                                      <button class="btn btn-sm btn-primary" onclick="'.$edit.'"><i class="fa fa-edit"></i></button>
                                      <button class="btn btn-sm btn-danger" onclick="'.$delete.'"><i class="fa fa-trash"></i></button>
                                      </td>
                      </tr>';$i++;
        }
    	if($data['result']==''){$data['result']='<tr><th colspan="9" class="text-center"><div class="noresult"> <div class="text-center"> <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"> </lord-icon> <h5 class="mt-2">Sorry! No Record Found.</h5> <p class="text-muted mb-0">Create some new records to list here...</p></div></div></th><th class="d-none"></th><th class="d-none"></th></tr>';}
        return $data;
    }
    public function saveSportsTimings($id,$input)
    {
        
        if($id>0){$this->sports_timings->where('st_id!=',$id);}
        $exit=$this->sports_timings->getWhere(['type_name'=>$input['type_name']])->getResult();
        if(count($exit)==0)
        {
            if($id==0)
            {
                $input['status']=1;
                $this->sports_timings->insert($input);
                $result=true;
            }
            else
            {
                    $this->sports_timings->where('st_id',$id)->update($input);	
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