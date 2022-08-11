<div class="page-content">
	<div class="container-fluid">
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Users</h4>
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
							<li class="breadcrumb-item active">Users</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- end page title -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<div class="d-flex align-items-center">
							<h5 class="card-title mb-0 flex-grow-1">Users</h5>
							<div class="flex-shrink-0">
								<a href="<?=base_url()?>/user-role" class="btn btn-primary"  id="roles"><i class="ri-add-line align-bottom me-1"></i> Roles & Premission</a>
								<button type="button" class="btn btn-success" onclick="showLgModal('<?=base_url()?>/user/addUser','Add User')"><i class="ri-add-line align-bottom me-1"></i>Create New</button>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div id="customerList">
							<div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
								<form id="filter">
									<div class="row g-3">
										<div class="col-xxl-1 col-sm-4">
											<div class="input-light">
												<select class="form-control" data-choices="" data-choices-search-false="" name="choices-single-default" id="bulkAction" onchange="bulkUpdate()">
													<option value="" selected>Bulk Action</option>
													<option value="1" >Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-xxl-5 col-sm-4">
											<div class="search-box">
												<input type="text" class="form-control search bg-light border-light" placeholder="Search for user id, mobile or something..." id="search" name="search" onkeyup="getUsers()">
												<i class="ri-search-line search-icon"></i>
											</div>
										</div>
										<div class="col-xxl-3 col-sm-4">
											<div class="input-light">
												<select class="form-control" name="status" id="idStatus" onchange="getUsers()">
													<option value="all" selected>All Status</option>
													<option value="1" >Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="table-responsive table-card mt-0 mb-1">
								<table class="table align-middle table-nowrap" id="customerTable">
									<thead class="text-muted">
										<tr>
											<th scope="col" style="width: 50px;">
												<div class="form-check">
													<input class="form-check-input" type="checkbox"  id="checkAll" value="option">
												</div>
											</th>
											<th class="sort text-uppercase" data-sort="id">Id</th>
											<th class="sort text-uppercase" data-sort="staff">Staff</th>
											<th class="sort text-uppercase" data-sort="email">Email</th>
											<th class="sort text-uppercase" data-sort="mobile">Mobile</th>
											<th class="sort text-uppercase" data-sort="role">Role</th>
											<th class="sort text-uppercase" data-sort="status">Status</th>
											<th class="sort text-uppercase" data-sort="action">Action</th>
										</tr>
									</thead>
									<tbody id="ajaxList">
										
									</tbody>
								</table>
								<div class="noresult" style="display: none">
									<div class="text-center">
										<lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
											colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
										</lord-icon>
										<h5 class="mt-2">Sorry! No Result Found</h5>
										<p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
											orders for you search.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!-- end col -->
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
		<!-- Modal -->
		<!--end modal -->
	</div>
	<!-- container-fluid -->
</div>
<script type="text/javascript">
getUsers();
function getUsers()
{
	$.ajax({
        url: '<?=base_url()?>/user/getUsers',
        type: "post",
        data:$('#filter').serialize(),
        dataType:'json',
        success: function(data) 
        {
           $('#ajaxList').html(data);
        }
    });
}
function deleteUser(id)
{
    jQuery.confirm({
        title: 'Delete user ?',
        content: 'Confirm to delete user',
        type: 'red',
        typeAnimated: true,
        closeIcon: true,
        buttons: {
            tryAgain: {
                text: 'Confirm',
                btnClass: 'btn-red',
                action: function(){
	   				jQuery.ajax({
                        url: '<?=base_url()?>/user/deleteUser/'+id,
                        type: "post",
                        // data:{deleteproduct:deleteproduct},
                        dataType:'json',
                        success: function(data) 
                        {
                           	toastr.success("Success","User Deleted successfully");
			   				location.reload();
                        }
                    });
                }
            },
            close:function(){
                
            },
        }
    });
}
$("#checkAll").change(function() 
{
    if(this.checked){$('.ids').prop("checked",true);}
    else{$('.ids').prop("checked",false);}
});
function bulkUpdate()
{
	var bulkAction=$('#bulkAction').val();
	if(bulkAction!='')
	{
		var users=$("input[name='users[]']:checked").map(function(){return $(this).val();}).get();
		$.ajax({
        	url: '<?=base_url()?>/user/updateUser',
        	type: "post",
        	data:{users:users,action:bulkAction},
        	dataType:'json',
        	success: function(data) 
        	{
        	   	getUsers();
        	   	$('#checkAll').prop("checked",false);
        	}
    	});
	}
}
function changeUserStatus(tableName,whereColumn,whereId,updateColumn,updateStatus)
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
                      getAjaxList();
                    } 
                  });
                }
            },
            close:function(){
              
            },
        }
    });
}
</script>