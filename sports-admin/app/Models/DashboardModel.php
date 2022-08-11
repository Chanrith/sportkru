<?php namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
	public function __construct()
    {
    	$this->db= \Config\Database::connect();
    	$this->customer = $this->db->table('customers');
    	$this->orders = $this->db->table('orders');
    }
	public function getDashboardDetails()
	{
		$supplier_code=session()->get('supplier_code');

		$data['todayOrders'] = count($this->orders->getWhere(['order_status <'=>3,'supplier_code'=>$supplier_code,'date(created_on)'=>date('Y-m-d')])->getResult());
		$data['todayCOD'] = $this->orders->selectSum('total_amount')->where('payment_mode',0)->where('supplier_code',$supplier_code)->where('date(created_on)',date('Y-m-d'))->get()->getRow()->total_amount;
		$data['todayOnline'] = $this->orders->selectSum('total_amount')->where('payment_mode',1)->where('supplier_code',$supplier_code)->where('date(created_on)',date('Y-m-d'))->get()->getRow()->total_amount;
		$data['newCustomer'] = count($this->customer->getWhere(['status'=>0,'supplier_code'=>$supplier_code])->getResult());


		$data['new'] = count($this->orders->getWhere(['order_status '=>0,'supplier_code'=>$supplier_code,'date(created_on)'=>date('Y-m-d')])->getResult());
		$data['outForDelivery'] = count($this->orders->getWhere(['order_status '=>1,'supplier_code'=>$supplier_code,'date(created_on)'=>date('Y-m-d')])->getResult());
		$data['delivered'] = count($this->orders->getWhere(['order_status '=>2,'supplier_code'=>$supplier_code,'date(created_on)'=>date('Y-m-d')])->getResult());
		$data['cancelled'] = count($this->orders->getWhere(['order_status '=>3,'supplier_code'=>$supplier_code,'date(created_on)'=>date('Y-m-d')])->getResult());
		$data['customerList'] = $this->customer->orderBy('cust_id DESC')->getWhere(['status'=>1,'supplier_code'=>$supplier_code],10,0)->getResult();
		$data['orderList'] = $this->orders->orderBy('id DESC')->getWhere(['supplier_code'=>$supplier_code],10,0)->getResult();
		return $data;
	}
	public function getNotification()
	{

		$supplier_code=session()->get('supplier_code');
    	$order = $this->orders->getWhere(['readed '=>0,'supplier_code'=>$supplier_code])->getResult();
		$customer =$this->customer->getWhere(['readed '=>0,'supplier_code'=>$supplier_code])->getResult();
		$data['notification']='';
		foreach($order as $row)
		{
			//$time=$model->getTime(strtotime($row->created_on));
			$data['notification'].='<a href="'.base_url().'/view-order/'.$row->order_id.'" class="dropdown-item items py-3" data-sort="'.strtotime($row->created_on).'">
                            <small class="float-right text-muted pl-2">'.date('d-M-Y',strtotime($row->created_on)).'<br>'.date('h:i A',strtotime($row->created_on)).'</small>
                            <div class="media">
                            <div class="avatar-md bg-soft-primary"><i class="fab fa-opencart"></i></div>
                            <div class="media-body align-self-center ml-2 text-truncate">
                            <h6 class="my-0 font-weight-normal text-dark">#'.$row->order_id.' Order is Placed</h6>
                            <small class="text-muted mb-0">Order total amount is '.number_format($row->total_amount).'</small>
                            </div>
                            </div>
							</a>';

		}
		foreach($customer as $row)
		{
			//$time=$model->getTime(strtotime($row->created_on));
			$data['notification'].='<a href="'.base_url().'/view-customer/'.$row->cust_id.'" class="dropdown-item items py-3" data-sort="'.strtotime($row->created_on).'">
                            <small class="float-right text-muted pl-2">'.date('d-M-Y',strtotime($row->created_on)).'<br>'.date('h:i A',strtotime($row->created_on)).'</small>
                            <div class="media">
                            <div class="avatar-md bg-soft-primary"><i class="far fa-user"></i></div>
                            <div class="media-body align-self-center ml-2 text-truncate">
                            <h6 class="my-0 font-weight-normal text-dark">'.$row->cust_name.' is Created</h6>
                            <small class="text-muted mb-0">Deposit Can : '.$row->deposit_can.' => ₹'.number_format($row->deposit_amount).'</small>
                            </div>
                            </div>
							</a>';

		}
		$data['count']=count($order)+count($customer);
		return $data;
	}
	public function getTime( $time )
	{
		$time_difference = time() - $time;
		if( $time_difference < 1 ) { return 'less than 1 second ago'; }
		$condition = array( 
				12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
		);

		foreach( $condition as $secs => $str )
		{
			$d = $time_difference / $secs;
			if( $d >= 1 ){$t = round( $d );return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';}
		}
	}

}