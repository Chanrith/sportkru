<style type="text/css">
.modal-body{
padding:0px  !important;
}
</style>
<div class=" mx-3">
<form action="" id="addSportsTimings">
<div class="row">
    <div class="form-group col-12">
         <label class="mt-3" for="type_name">Type Name *</label>
         <input type="text" class="form-control" id="type_name" placeholder="Type Name" name="type_name" >
     </div>
</div>
</form>
</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button id="submit " form="addSportsTimings" class="btn btn-success">Save</button>
    </div>
<script type="text/javascript">
	$(document).ready(function() {
		 $('#addSportsTimings').formValidation({
	           framework: 'bootstrap',
	           fields: {
                type_name: {
	                   validators: {
	                       notEmpty: {message: 'Type Name is required'},
	                   }
	               	},
	           }
	       })
	       .on('success.form.fv', function(e) { 
	           e.preventDefault(); 
	           var form = document.querySelector('#addSportsTimings');
	           var formData = new FormData(form);
	           $.ajax({
	               type:'POST',
	               url: '<?=base_url()?>/sportsTimings/saveSportsTimings', 
	               data:formData,
	               cache:false,
	               contentType: false,
	               processData: false, // serializes the form's elements.
	               dataType:'json',
	               success:function(result)
	               {
					if(result==true)
					{
                        $('#modal_md').modal('hide');
                        toastr.success('Sports Timings Added Successfully','Success');
                        getSportsTiming()
					}
					else{
						toastr.warning('Type Name Already Exist','Already Exist');
					}
                  
	               }
	           });
	       });
	   });
</script>