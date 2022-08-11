<?php $this->db = \Config\Database::connect();$this->users = $this->db->table("users");?>
<style type="text/css">
   .avatar-xxs{height: 35px;width: 35px;}
</style>
<div class="page-content">
   <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Role</h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?=base_url()?>/dashboard">Dashboard</a></li>
                     <li class="breadcrumb-item"><a href="<?=base_url()?>/users">Users</a></li>
                     <li class="breadcrumb-item active">Role</li>
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
                     <h5 class="card-title mb-0 flex-grow-1">Role</h5>
                     <div class="flex-shrink-0">
                        <a href="#" class="btn btn-success" id="create-btn" onclick="showLgModal('<?=base_url()?>/user/addRole','Add Role')"><i class="ri-add-line align-bottom me-1"></i>Add Roles</a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div id="customerList">
                     <div class="table-responsive table-card mt-0 mb-1">
                        <table class="table align-middle table-nowrap" id="customerTable">
                           <thead class="text-muted">
                              <tr>
                                 <th scope="col" style="width: 50px;">S.No</th>
                                 <th class="sort text-uppercase" data-sort="id">Role Name</th>
                                 <th class="sort text-uppercase" data-sort="staff">Users</th>
                                 <th class="sort text-uppercase" data-sort="status">Status</th>
                                 <th class="sort text-uppercase" data-sort="action">Action</th>
                              </tr>
                           </thead>
                           <tbody class="list form-check-all">
                              <?php $sno=1;foreach($roles as $row){
                                 $rows=$this->users->getWhere(['role'=>$row->role_id])->getResult();$count=count($rows)?>
                              <tr>
                                 <td><?=$sno?></td>
                                 <td class="user_role"><?=$row->role_name?></td>
                                 <td class="user_name">
                                    <div class="avatar-group">
                                       <?php $i=1;foreach($rows as $user){if($i<=3)
                                          {
                                             $imgUrl='./uploads/user/'.$row->photo;
                                             if($user->photo=='' || !file_exists($imgUrl)){$image=base_url().'/uploads/default-user.jpeg';}
                                             else{$image=base_url().'/uploads/user/'.$user->photo;}
                                       ?>
                                       <div class="avatar-group-item">
                                          <a href="javascript:void(0)" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="<?=$user->user_name?>">
                                             <img src="<?=$image?>" alt="" class="rounded-circle avatar-xxs">
                                          </a>
                                       </div>
                                       <?php $i++;}} ?>
                                       <?php if($count>3){?>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);">
                                             <div class="avatar-xxs">
                                                <span class="avatar-title rounded-circle bg-warning text-white">
                                                +<?=($count-3)?>
                                                </span>
                                             </div>
                                          </a>
                                       </div>
                                       <?php } ?>
                                    </div>
                                 </td>
                                 <td class="user_role">
                                    <?php 
                                          if($row->admin_role==1){$message='Admin role not editable!';}
                                          elseif($count>0){$message='Users mapped this role, we can not edit!';}
                                    ?>
                                    <?php if($row->admin_role==1 || $count>0){?>
                                    <?php if($row->role_status=='1'){?>
                                    <span class="btn btn-sm btn-success text-uppercase" onclick="toastr.warning('<?=$message?>')">Active</span>
                                    <?php }else{ ?>
                                    <span class="btn btn-sm btn-danger text-uppercase"  onclick="toastr.warning('<?=$message?>')">Inactive</span>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <?php if($row->role_status==1){?>
                                    <span class="btn btn-sm btn-success text-uppercase" onclick="changeStatus('roles','role_id','<?=$row->role_id?>','role_status',0)">Active</span>
                                    <?php }else{ ?>
                                    <span class="btn btn-sm btn-danger text-uppercase"  onclick="changeStatus('roles','role_id','<?=$row->role_id?>','role_status',1)">Inactive</span>
                                    <?php } } ?>
                                 </td>
                                 <td>
                                    <div class="d-flex gap-2">
                                       <?php if($row->admin_role==1){?>
                                       <div class="edit avatar-xs">
                                          <a href="javascript:void(0)" onclick="toastr.warning('Admin role not editable!')" class=" avatar-title bg-soft-success text-success fs-15 rounded edit-item-btn"
                                             ><i class="ri-pencil-fill fs-16"></i></a>
                                       </div>
                                       <?php }else{ ?>
                                       <div class="edit avatar-xs">
                                          <a href="javascript:void(0)" onclick="showLgModal('<?=base_url()?>/user/editRole/<?=$row->role_id?>')" class=" avatar-title bg-soft-success text-success fs-15 rounded edit-item-btn"
                                             ><i class="ri-pencil-fill fs-16"></i></a>
                                       </div>
                                       <?php } ?>
                                       <?php if($row->admin_role==1){?>
                                       <div class="remove avatar-xs">
                                          <a href="javascript:void(0)" class="avatar-title bg-soft-danger text-danger fs-15 rounded remove-item-btn" onclick="toastr.warning('Admin Role is not Editable!')"><i class="ri-delete-bin-5-fill fs-16"></i></a>
                                       </div>
                                       <?php }elseif($count>0){?>
                                       <div class="remove avatar-xs">
                                          <a href="javascript:void(0)" class="avatar-title bg-soft-danger text-danger fs-15 rounded remove-item-btn" onclick="toastr.warning('User is mapped. Not allowed to delete','Warning!')"><i class="ri-delete-bin-5-fill fs-16"></i></a>
                                       </div>
                                       <?php }else{ ?>
                                       <div class="remove avatar-xs">
                                          <a href="javascript:void(0)" class="avatar-title bg-soft-danger text-danger fs-15 rounded remove-item-btn" onclick="deleteRole(<?=$row->role_id?>)"><i class="ri-delete-bin-5-fill fs-16"></i></a>
                                       </div>
                                       <?php } ?>
                                    </div>
                                 </td>
                              </tr>
                              <?php $sno++;} ?>
                           </tbody>
                        </table>
                        <div class="noresult" style="display: <?=(count($roles)>0)?"none":"block"?>">
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
   </div>
   <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script>
function deleteRole(id)
{
    jQuery.confirm({
        title: 'Delete role ?',
        content: 'Role & Mapped users will be removed!',
        type: 'red',
        typeAnimated: true,
        closeIcon: true,
        buttons: {
            tryAgain: {
                text: 'Confirm',
                btnClass: 'btn-red',
                action: function(){
                  jQuery.ajax({
                        url: '<?=base_url()?>/user/deleteRole/'+id,
                        type: "post",
                        // data:{deleteproduct:deleteproduct},
                        dataType:'json',
                        success: function(data) 
                        {
                           toastr.success("Role Deleted successfully","Success");
                           setTimeout(function(){location.reload();},1000);
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