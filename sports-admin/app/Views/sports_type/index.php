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
						<h4 class="page-title">Sports Type</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
							<li class="breadcrumb-item active">Sports Type</li>
						</ol>
					</div>
					<div class="col-auto align-self-center">
						<a href="#" onclick="showMdModal('<?=base_url()?>/sportsType/addSportsType','Add Type');" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus pr-1"></i>Add Type</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">    
			<div class="card">
				<div class="card-body">
					<table id="datatable" class="table table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Type Name</th>
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
	getSportsType();
	function getSportsType()
	{
	    $('#loading').val(1);
	    $('#ajaxList').css('opacity','0.5');
	    var date=$('#reportrange span').html();
	 $.ajax({
	    url: '<?=base_url()?>/sportsType/getSportsType',
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
	
function deleteSportsType(id)
	{
		$.confirm({
			    title: 'Delete Sports Type',
			    content: "Do you want to delete Sports Type ?",
			    type: 'green',
			    typeAnimated: true,
			    closeIcon: true,
			    buttons: {
			        tryAgain: {
			            text: 'Confirm',
			            btnClass: 'btn-green',
			            action: function(){
							$.ajax({
					            url: '<?=base_url()?>/sportsType/deleteSportsType/'+id,
					            type: "post",
					            dataType:'json',
					            success: function(data) 
					            {
					               	toastr.success("Success","Sports Type deleted successfully");
					               	getSportsType();
					            }
					        });
			            }
			        },
			        close:function(){
			        	
			        },
			    }
			});
	};
	function clearSearch()
	{
	    $('#status').val('').trigger('change');
	    $('#loadMore').show();$('#loadMore').html('Load More');$('#loop').val(0);$('#ajaxList').html('');
	    setTimeout(function(){getSportsType();},200);
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
	
	function changeSportsTypeStatus(tableName,whereColumn,whereId,updateColumn,updateStatus)
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
	                  getSportsType();
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