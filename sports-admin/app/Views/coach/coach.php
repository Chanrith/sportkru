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
						<h4 class="page-title"> Coach</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
							<li class="breadcrumb-item active">Coach</li>
						</ol>
					</div>
					<div class="col-auto align-self-center">
						<a href="#" onclick="showMdModal('<?=base_url()?>/sportsCoach/addCoach','Add  Coach');" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus pr-1"></i>Add Coach</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card mb-2">
			<div class="card">
				<div class="card-body">
					<table id="datatable" class="table table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Email </th>
								<th>Class Schedule </th>
								<th>Sports Type</th>
								<th>Coach Timing</th>
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
	
	getSportsCoach();
	function getSportsCoach()
	{
	    $('#loading').val(1);
	    $('#ajaxList').css('opacity','0.5');
	    var date=$('#reportrange span').html();
	 $.ajax({
	    url: '<?=base_url()?>/sportsCoach/getSportsCoach',
	    type: "post",
	    data:$('#filter').serialize()+'&date='+date,
	    dataType:'json',
	    success: function(data) 
	    {
           $('#datatable').DataTable().clear().destroy();
           $('#ajaxList').css('opacity','1');
           $('#pagelimit').val(data.pagelimit);
	       $('#ajaxList').html(data.result);
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
	    setTimeout(function(){getSportsCoach();},200);
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
	
	function changeCoachStatus(tableName,whereColumn,whereId,updateColumn,updateStatus)
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
	                  getSportsCoach();
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