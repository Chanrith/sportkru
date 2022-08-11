<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquiryModel extends Model
{

	public function __construct()
    {
    	$this->db = \Config\Database::connect();
    	$this->enquiry = $this->db->table("enquiry");
    }
	public function getEnquiry($input)
    {
		$from=explode(' - ',$input['date'])[0];
		$from=str_replace(',','-',$from);
		$from=str_replace(' ','-',$from);
		$to=explode(' - ',$input['date'])[1];
		$to=str_replace(',','-',$to);
		$to=str_replace(' ','-',$to);

		$limit=$input['limit'];
		

		if($input['date'])
		{
			$this->enquiry->where('date(created_on) >=',date('Y-m-d',strtotime($from)));
			$this->enquiry->where('date(created_on) <=',date('Y-m-d',strtotime($to)));
	
		}
    	if($input['status']!='all')
    	{
    		$this->enquiry->where('status',$input['status']);
    	}
		if($input['type']!='all')
    	{
    		$this->enquiry->where('type',$input['type']);
    	}
		if($input['order']==1){$this->enquiry->orderBy('created_on','asc');}
		if($input['order']==2){$this->enquiry->orderBy('created_on','desc');}
		$this->enquiry->limit($limit,0);
    	$result=$this->enquiry->getWhere()->getResult();
    	$data='';$i=1;
    	foreach($result as $row)
    	{
			$view="showMdModal('".base_url()."/view-enquiry/".$row->enquiry_id."','Enquiry : #".$row->enquiry_id."')";
    		if($row->status=='0')
			{
				$onclick="changePartsStatus('enquiry','enquiry_id',".$row->enquiry_id.",'status',1)";
				$status='<button class="btn btn-sm btn-danger" type="button" onclick="'.$onclick.'">Inactive</button>';
			}
			else if($row->status=='1')
			{
				$onclick="changePartsStatus('enquiry','enquiry_id',".$row->enquiry_id.",'status',0)";
				$status='<button class="btn btn-sm btn-success" type="button" onclick="'.$onclick.'">Active</button>';
			}
    		$data.='<tr class="items">
			        <td>'.$i.'</td>
					<td>'.$row->name.'</td>
					<td>'.$row->number.'</td>
					<td>'.$row->email.'</td>
					<td>'.$row->message.'</td>
					<td>'.$row->type.'</td>
					<td>'.$row->created_on.'</td>
					<td>'.$status.'</td>
					<td width="90px">
							<button class="btn btn-sm btn-warning" onclick="'.$view.'"><i class="fa fa-eye"></i></button>
						</td>
    		</tr>';$i++;
    	}
    	if($data==''){$data='<tr><th colspan="9" class="text-center"><div class="noresult"> <div class="text-center"> <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"> </lord-icon> <h5 class="mt-2">Sorry! No Record Found.</h5> <p class="text-muted mb-0">Create some new records to list here...</p></div></div></th></tr>';}
    	return $data;
    }
}