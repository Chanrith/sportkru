<style type="text/css">
.modal-body{
padding:0px  !important;
}
</style>
<div class="row mx-3">
<form action="" id="editCoach">
<div class="row mt-2">
    <div class="form-group col-6">
         <label class="" for="first_name">First Name * </label>
         <input type="text" class="form-control"   value="<?=$edit->first_name?>" id="first_name" placeholder="First Name" name="first_name" >
     </div>
    <div class="form-group col-6">
         <label class="" for="last_name">Last Name * </label>
         <input type="text" class="form-control"   value="<?=$edit->last_name?>" id="last_name" placeholder="Last Name" name="last_name" >
     </div>
     <div class="form-group col-6">
         <label class="" for="mobile_number">Mobile Number *</label>
         <input type="text" class="form-control" id="mobile_number" value="<?=$edit->mobile_number?>" placeholder="Mobile Number" name="mobile_number"  maxlenght="20" minlength="10" >
     </div>
     <div class="form-group col-6">
         <label class="" for="alternative_number">Alternative Number *</label>
         <input type="text" class="form-control" id="alternative_number" value="<?=$edit->alternative_number?>" placeholder="Alternative Number" name="alternative_number"  maxlenght="20" minlength="10" >
     </div>
     <div class="form-group col-6">
         <label class="" for="email">Email *</label>
         <input type="email" class="form-control" id="email" value="<?=$edit->email?>" placeholder="Email" name="email" >
     </div>
     <div class="form-group col-6">
         <label class="" for="sports_type">Sports Type *</label>
         <select class="form-control select2" id="sports_type" name="sports_type" >
            <?php foreach($sports_type as $row){?>
            <option value="<?=$row->type_name?>" <?=($row->type_name==$edit->sports_type)?'Selected':''?>><?=$row->type_name?></optoin>
            <?php }?>
        </select>
     </div>
     <div class="form-group col-12">
         <label class="" for="class_schedule">Classs schedule *</label>
         <input type="text" class="form-control" id="class_schedule" value="<?=$edit->class_schedule?>" placeholder="Classs Schedule" name="class_schedule" >
     </div>
     <div class="form-group col-6">
         <label class="" for="couch_timing">Couch Timing *</label>
         <select class="form-control select2" id="couch_timing" name="couch_timing" >
            <?php foreach($sports_timings as $row){?>
            <option value="<?=$row->type_name?>"  <?=($row->type_name==$edit->couch_timing)?'Selected':''?>><?=$row->type_name?></optoin>
            <?php }?>
        </select>
     </div>
     <div class="form-group col-6">
         <label class="" for="image">Profile </label>
         <label class="row  justify-content-center mx-0 floating-label" style="height: 60px;width:50%;border: 1px solid #ced4da;border-radius:4px;background:#fff;top: 23px;left: 4px;" for="image">
            <input type="file" name="image" class="d-none" id="image" accept=".png, .jpg, .jpeg" oninput="document.getElementById('imageImage').src=window.URL.createObjectURL(this.files[0]);" required="required">
            <img id="imageImage" onerror="this.src='<?=base_url()?>/assets/images/default-img.png';" src="<?=base_url()?>/uploads/coach/<?=$edit->image?>" style="max-width:100%;max-height:100%;">
        </label>
     </div>
</div>
</form>
</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button id="submit" form="editCoach" class="btn btn-success">Save</button>
    </div>
<script type="text/javascript">
	$(document).ready(function() {
        $(".select2").select2();
		 $('#editCoach').formValidation({
	           framework: 'bootstrap',
	           fields: {
                first_name: {
	                   validators: {
	                       notEmpty: {message: 'First Name is required'},
	                   }
	               	},
                last_name: {
	                   validators: {
	                       notEmpty: {message: 'Last Name is required'},
	                   }
	               	},
                mobile_number: {
	                   validators: {
	                       notEmpty: {message: 'Mobile Number is required'},
	                   }
	               	},
                alternative_number: {
                        validators: {
                            notEmpty: {message: 'Alternative Number is required'},
                        }
                    },
                email: {
                        validators: {
                            notEmpty: {message: 'Email is required'},
                        }
                    },
                class_schedule: {
	                   validators: {
	                       notEmpty: {message: 'Class Schedule is required'},
	                   }
	               	},
                couch_timing: {
                        validators: {
                            notEmpty: {message: 'Couch Timing is required'},
                        }
                    },
	           }
	       })
	       .on('success.form.fv', function(e) { 
	           e.preventDefault(); 
	           var form = document.querySelector('#editCoach');
	           var formData = new FormData(form);
	           $.ajax({
	               type:'POST',
	               url: '<?=base_url()?>/sportsCoach/saveCoach/<?=$edit->id?>', 
	               data:formData,
	               cache:false,
	               contentType: false,
	               processData: false, // serializes the form's elements.
	               dataType:'json',
	               success:function(result)
	               {
                    if(result==false)
                    {
                        toastr.warning('Mobile Number Already Exist','Already Exist');
                    }
                    else if(result==true)
                    {
                        $('#modal_md').modal('hide');
                        toastr.success('Coach Updated Successfully','Success');
                        getSportsCoach()
                    }
	               }
	           });
	       });
	   });
</script>