<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/plugins/datatables/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="<?=base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<style type="text/css">
	@media print{
	h6{font-size: 18px}
	h5{font-size: 22px}
	.printHide{display:none;}
	.printShow{display:table-row !important;}
	table thead{page-break-before: always;}
	.card{border: 0px;}
	.card-body{padding: 0px}
	.bg_blue td, .bg_blue th{background-color:#def0ff !important}
	}
</style>
<div class="page-content">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-title-box pt-3 pb-2">
				<div class="row">
					<div class="col">
						<h4 class="page-title">Enquiry</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
							<li class="breadcrumb-item active">Enquiry</li>
						</ol>
					</div>
					<div class="col-auto align-self-center">
						<!-- <a href="#" onclick="window.print()" class="btn btn-sm btn-outline-primary"><i class="fa fa-file-excel"></i> Export</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card mb-2">
				<div class="card-body">
					<form id="filter">
						<input type="hidden" name="loop" id="loop" value="0">
						<input type="hidden" id="pagelimit" value="1">
						<input type="hidden" id="loading" value="0">
						<div class="row">
							<div class="col-sm-3">
								<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 8px; border: 1px solid #ccc; width: 100%;text-align:center">
									<i class="fa fa-calendar"></i>&nbsp;
									<span><?=date('d M,Y',strtotime('-1 months'))?> - <?=date('d M,Y')?></span> <i class="fa fa-caret-down float-right"></i>
								</div>
							</div>
							<div class="col-sm-2">
								<select class="form-control " name="status" id="status">
									<option value="all">- All Status -</option>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
								</select>
							</div>
                            <div class="col-sm-2">
								<select class="form-control " name="type" id="type">
									<option value="all">- All Type -</option>
									<option value="ecommerce">Ecommerce</option>
									<option value="static">Static</option>
                                    <option value="dynamic">Dynamic</option>
                                    <option value="billing software">Billing software</option>
								</select>
							</div>
							<div class="col-sm-2">
								<select class="form-control" name="order" id="order">
									<option data-value="Date Ascending" value="1">Date Asc</option>
									<option data-value="Date Descending" value="2" selected="">Date Desc</option>
								</select>
							</div>
							<div class="col-sm-1">
								<select class="form-control" name="limit" id="limit">
									<option>10</option>
									<option>20</option>
									<option>50</option>
									<option>100</option>
									<option>150</option>
									<option>200</option>
								</select>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-success" onclick="$('#loop').val(0);$('#prevBtn').removeAttr('disabled',true);$('#prevBtn').addClass('disabled');getEnquiry()">Filter</button>
								<button type="reset" class="btn btn-danger" onclick="clearSearch()">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<table id="datatable" class="table table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Mobile No</th>
								<th>Email Address</th>
								<th>Message </th>
								<th>Type</th>
								<th>Created on</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody id="ajaxList">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.select2').select2();
	$(function() { 
	    var start = moment().subtract(29, 'days');
	    var end = moment();
	    function cb(start, end) {
	        $('#reportrange span').html(start.format('D MMM, YYYY') + ' - ' + end.format('D MMM, YYYY'));
	    }
	    $('#reportrange').daterangepicker({
	        startDate: start,
	        endDate: end,
	        ranges: {
	           'Today': [moment(), moment()],
	           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	           'This Month': [moment().startOf('month'), moment().endOf('month')],
	           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	        }
	    }, cb);
	    cb(start, end);
	});
	getEnquiry();
	function getEnquiry()
	{
	    $('#loading').val(1);
	    $('#ajaxList').css('opacity','0.5');
	    var date=$('#reportrange span').html();
	 $.ajax({
	    url: '<?=base_url()?>/enquiry/getEnquiry',
	    type: "post",
	    data:$('#filter').serialize()+'&date='+date,
	    dataType:'json',
	    success: function(data) 
	    {
           $('#datatable').DataTable().clear().destroy();
           $('#ajaxList').css('opacity','1');
           $('#pagelimit').val(data.pagelimit);
	       $('#ajaxList').html(data);
           $('#datatable').DataTable();
           $('#ajaxList').hide();
           $('#ajaxList').fadeIn('slow');
           $('#loading').val(0);
	    }
	});
	}
	function clearSearch()
	{
	    $('#status').val('').trigger('change');
	    $('#loadMore').show();$('#loadMore').html('Load More');$('#loop').val(0);$('#ajaxList').html('');
	    setTimeout(function(){getEnquiry();},200);
	}
	function noRecords()
	{
	    $('#datatable').DataTable();
	    var itemCount=$('#ajaxList').html().trim();
	    if(itemCount=='')
	    {
	        $('#ajaxList').html('<td colspan="10" class="text-center"><img style="width: 200px;margin: 100px;" src="<?=base_url()?>assets/images/no-records.png"></td>');
	        $('#paginations').fadeOut('slow');
	    }
	    else
	    {
	        var items=parseInt($('#ajaxList tr').length);
	        var pagelimit=parseInt($('#pagelimit').val());
	        var limit=$('#limit').val();
	        if(items<limit){$('#nextBtn').addClass('disabled');}else{$('#nextBtn').removeClass('disabled');}
	        if(items<limit && pagelimit==0){$('#paginations').fadeOut('slow');}else{$('#paginations').fadeIn('slow');}
	    }
	}
	function exportAgent()
	{
	    var date=$('#reportrange span').html();
	    $.ajax({
	        url: "<?=base_url()?>orders/exportAgent",
	        type: "post",
	        dataType:'json',
	        data: $('#formData').serialize()+'&date='+date,
	        success: function(data) 
	        {
	           window.location.href="<?=base_url()?>orders/fileDownload";
	        }
	    });
	}
	
	function changePartsStatus(tableName,whereColumn,whereId,updateColumn,updateStatus)
	{
	$.confirm({
	    title: 'Update Status',
	    content: 'Do you want to update status ?',
	    type: 'green',
	    typeAnimated: true,
	    closeIcon: true,
	    buttons: {
	        tryAgain: {
	            text: 'Confirm',
	            btnClass: 'btn-green',
	            action: function(){
	              $.ajax({
	                type:'POST',
	                url:'<?=base_url()?>/common/changeStatus/'+tableName+'/'+whereColumn+'/'+whereId+'/'+updateColumn+'/'+updateStatus,
	                dataType:'json',
	                success:function(data)                      
	                {
	                  toastr.success("Status has been updated.", "Success");
	                  getEnquiry();
	                } 
	              });
	            }
	        },
	        close:function(){
	          
	        },
	    }
	});
	}
	$(".export").click(function() {
	    window.location = '<?=base_url()?>agent/exportAgent';
	});
	
</script>