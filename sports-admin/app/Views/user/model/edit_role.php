<?php $this->db = \Config\Database::connect();$this->rights = $this->db->table("role_permission");?>
<style type="text/css">
	.avatar-xxs {
    height: 35px;
    width: 35px;
}
.accordion-header label{
   position: relative;
   bottom: -3px;
}
.has-error .form-control{border-color: red;}
</style>
<form class="row g-3 " id="formData">
	<div class="modal-body mt-0">
		<div class="form-check mb-3 input-group form-group p-0">
			<span class="input-group-text" id="addRoleNameGroup">Enter Role Name</span>
			<input class="form-control" id="addRoleName" placeholder="" name="role_name" autocomplete="off" value="<?=$edit->role_name?>">
		</div>
		<div class="accordion custom-roleCollapse accordion-secondary userRoleAccordion" id="roleCollapse">
			<?php $sno=1;foreach($modules as $row){ $rights=$this->rights->getWhere(['role_id'=>$edit->role_id,'module_id'=>$row->mod_id])->getRow();?>
			<div class="accordion-item">
				<h2 class="accordion-header" id="roleSelectcollapse5">
					<button class="accordion-button collapsed" type="button"  data-bs-target="#accor_<?=$sno?>" aria-expanded="false" aria-controls="accor_<?=$sno?>">
						<div class="form-check ">
							<?php if($rights->allow_view==1 || $rights->allow_create==1 || $rights->allow_edit==1  || $rights->allow_delete==1){$checked='checked';}else{$checked='';}?>
							<input class="form-check-input roleAll" type="checkbox" id="role_<?=$sno?>" <?=$checked?>>
							<label class="form-check-label" for="role_<?=$sno?>">
							<?=$row->mod_name?>
							</label>
						</div>
					</button>
				</h2>
				<div id="accor_<?=$sno?>" class="accordion-collapse collapse show userRoleAccordionCollapse" aria-labelledby="roleSelectcollapse5" data-bs-parent="#role_<?=$sno?>">
					<div class="accordion-body">
						<div class="row">
							<?php if($row->allow_view){?>
							<input type="hidden" name="item[<?=$sno?>][mod_id]" value="<?=$row->mod_id?>">
							<div class="col-sm-3">
								<div class="form-check ">
									<input class="form-check-input" type="checkbox" id="viewUsers_<?=$sno?>" name="item[<?=$sno?>][allow_view]" value="1" <?=($rights->allow_view==1)?"checked":""?> > 
									<label class="form-check-label" for="viewUsers_<?=$sno?>">View</label>
								</div>
							</div>
							<?php } if($row->allow_add){?>
							<div class="col-sm-3">
								<div class="form-check ">
									<input class="form-check-input" type="checkbox" id="createUsers_<?=$sno?>" name="item[<?=$sno?>][allow_create]" value="1" <?=($rights->allow_create==1)?"checked":""?>>
									<label class="form-check-label" for="createUsers_<?=$sno?>">Create</label>
								</div>
							</div>
							<?php } if($row->allow_edit){?>
							<div class="col-sm-3">
								<div class="form-check ">
									<input class="form-check-input" type="checkbox" id="editUsers_<?=$sno?>" name="item[<?=$sno?>][allow_edit]" value="1" <?=($rights->allow_edit==1)?"checked":""?>>
									<label class="form-check-label" for="editUsers_<?=$sno?>">Edit</label>
								</div>
							</div>
							<?php } if($row->allow_delete){?>
							<div class="col-sm-3">
								<div class="form-check ">
									<input class="form-check-input" type="checkbox" id="deleteUsers_<?=$sno?>" name="item[<?=$sno?>][allow_delete]" value="1" <?=($rights->allow_delete==1)?"checked":""?>>
									<label class="form-check-label" for="deleteUsers_<?=$sno?>">Delete</label>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php $sno++;} ?>
		</div>
	</div>
	<div class="modal-footer">
		<div class="hstack gap-2 justify-content-end">
			<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-success" id="add-btn">Save</button>
		</div>
	</div>
</form>
<script>
	jQuery(document).ready(function() {
	    jQuery('#formData').formValidation({
	       framework: 'bootstrap',
	       fields: {
	           role_name: {
	               validators: {
	                   notEmpty: {
	                       message: ' '
	                   }
	               }
	           }
	       }
	   })
    	.on('success.form.fv', function(e) {
			// Prevent form submission
			e.preventDefault();
			var form = document.querySelector('#formData');
			var formData = new FormData(form);
			$.ajax({
            type:'POST',
            url:'<?=base_url()?>/user/saveRole/<?=$edit->role_id?>',
            data:formData,
				cache:false,
				contentType: false,
				processData: false, // serializes the form's elements.
            dataType:'json',
            success:function(result)
				{ 
						if(result==false)
						{
							toastr.warning('Role name already exist','Already Exist');
						}
						else if(result==true)
						{
							 $('.btn-close').trigger('click');
							 toastr.success('Role added successfully','Success');
							 setTimeout(function(){location.reload();},1000);
						}
				}
			});
     	});	
	});
$('.roleAll').click(function() {
	var id=$(this).attr('id').split('_')[1];
  $("#accor_"+id+" input[type=checkbox]").prop("checked", $(this).prop("checked"));
});
</script>