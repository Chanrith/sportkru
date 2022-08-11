<div class="page-content">
   <div class="container-fluid">
	<div class="row">
		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-12">
			<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box pt-3 pb-2">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">User Rights</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                    <li class="breadcrumb-item active">User Rights</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="card shadow mb-3">
				<div class="col-sm-12 mt-3">
					<form id="formData" name="formData">
						<input type="hidden" name="role" id="role" value="<?=$userGroup?>">
						<div class="x_content" style="background-color: #fff;padding: 20px;">
							<table class="table table-bordered">
							<thead>
								<tr>
								<th>#</th>
								<th>Session</th>
								<th>Menu Name</th>
								<th class="text-center"><label for="view" onclick="selecBox('view')"><input onchange="selecBox('view')" type="checkbox" id="view"> View</label></th>
								<th class="text-center"><label for="add" onclick="selecBox('add')"><input type="checkbox" id="add"> Add</label></th>
								<th class="text-center"><label for="edit" onclick="selecBox('edit')"><input type="checkbox" id="edit"> Edit</label></th>
								</tr>
							</thead>
							<tbody>
								<?php $sno=1;foreach($menuList->result() as $row){
									$exist=$this->db->get_where('user_rights',array('role'=>$userGroup,'menu_master_id'=>$row->id));
									if($exist->num_rows() > 0){
									$exist=$exist->row();
								?>
								<tr>
								<th scope="row"><?=$sno?><input type="hidden" name="item[<?=$sno?>][user_rights_id]" value="<?=$exist->id?>"></th>
								<td><?=$row->session_number?></td>
								<td><input type="hidden" name="item[<?=$sno?>][menu_master_id]" value="<?=$row->id?>"> <?=$row->menu_name?></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][view]" <?=($exist->view==1)?"checked":""?> id="view" class="custom-checkbox view" ></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][add]" <?=($exist->add==1)?"checked":""?> id="add" class="custom-checkbox add" ></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][edit]" <?=($exist->edit==1)?"checked":""?> id="edit" class="custom-checkbox edit" ></td>
								</tr>
								<?php }else{?>
								<tr>
								<th scope="row"><?=$sno?><input type="hidden" name="item[<?=$sno?>][user_rights_id]" value="0"></th>
								<td><?=$row->session_number?></td>
								<td><input type="hidden" name="item[<?=$sno?>][menu_master_id]" value="<?=$row->id?>"> <?=$row->menu_name?></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][view]" id="view" class="custom-checkbox view" ></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][add]" id="add" class="custom-checkbox add" ></td>
								<td align="center"><input type="checkbox" name="item[<?=$sno?>][edit]" id="edit" class="custom-checkbox edit" ></td>
								</tr>
								<?php } $sno++;} ?>
							</tbody>
							</table>
							<div class="text-center"><button type="button" class="btn btn-success primaryBtn" onclick="submitForm()"><i class="fa fa-save"></i> Save Rights</button></div>
						</div> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function submitForm()
{
	var role=$('#role').val();
	$.ajax({
        url: '<?=base_url()?>user/userRights/'+role,
        type: 'POST',
        data: $('#formData').serialize(),
        success: function(result) {
		if(result)
		{
			toastr.success("Success","Rights saved successfully");
			setTimeout(function(){location.reload();},1000);
		}
		else
		{
			toastr.error("Not Saved","Rights not saved");
			$('#submit').removeAttr('disabled',true);
			$('#submit').removeClass('disabled');
		}
			
		}
    });
}
function selecBox(field)
{
	if($('#'+field).prop("checked") == true)
	{
		$("."+field).prop('checked', true);
	}
	else
	{
		$("."+field).prop('checked', false);
	}
}
</script>
