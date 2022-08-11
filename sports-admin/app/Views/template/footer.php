<footer class="footer text-center text-sm-left">&copy; <?=date('Y')?> Cuteweb <span class="d-none d-sm-inline-block float-right">Developed By <i class="mdi mdi-heart text-danger"></i> Cuteweb</span></footer>
</div>
</div>
<!-- Modal -->
<!-- MODAL LG START-->  
<div id="modal_lg" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header bg-info">
      <h4 id="myModalLabel" class="modal-title m-0 text-white"></h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body"></div>
    </div>
  </div>
</div>
    <!-- MODAL LG END-->
<!-- MODAL MD START-->  
<div id="modal_md" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header bg-info">
      <h4 id="myModalLabel" class="modal-title m-0 text-white"></h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body"></div>
    </div>
  </div>
</div>
    <!-- MODAL MD END-->
<!-- MODAL SM START-->  
<div id="modal_sm" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header bg-info">
      <h4 id="myModalLabel" class="modal-title m-0 text-white"></h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body"></div>
    </div>
  </div>
</div>
<!-- MODAL SM END-->
<!-- jQuery  -->
<script src="<?=base_url()?>/assets/js/metismenu.min.js"></script>
<script src="<?=base_url()?>/assets/js/waves.js"></script>
<script src="<?=base_url()?>/assets/js/feather.min.js"></script>
<script src="<?=base_url()?>/assets/js/simplebar.min.js"></script>
<script src="<?=base_url()?>/assets/js/jquery-ui.min.js"></script>
<script src="<?=base_url()?>/assets/js/moment.js"></script>
<script src="<?=base_url()?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<?php if($menu=='dashboard'){?>
<script src="<?=base_url()?>/assets/plugins/apex-charts/apexcharts.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?=base_url()?>/assets/pages/jquery.sales_dashboard.init.js"></script>
<?php } ?>
<!-- App js -->
<script src="<?=base_url()?>/assets/js/app.js"></script>
<script type="text/javascript">
function showLgModal(url, title) {
  jQuery('#modal_lg .modal-body').html('<div style="text-align:center;"><img src="<?=base_url()?>/assets/images/preloader.gif" /></div>');
  jQuery('#modal_lg').modal('show',{backdrop: 'true'});
  $.ajax({
    url: url,
    success: function (response) {
      jQuery('#modal_lg .modal-title').html(title);
      jQuery('#modal_lg .modal-body').html(response);
    }
});}
function showMdModal(url, title) {
  jQuery('#modal_md .modal-body').html('<div style="text-align:center;"><img src="<?=base_url()?>/assets/images/preloader.gif" /></div>');
  jQuery('#modal_md').modal('show',{backdrop: 'true'});
  $.ajax({
    url: url,
    success: function (response) {
      jQuery('#modal_md .modal-title').html(title);
      jQuery('#modal_md .modal-body').html(response);
    }
});}
function showSmModal(url, title) {
  jQuery('#modal_sm .modal-body').html('<div style="text-align:center;"><img src="<?=base_url()?>/assets/images/preloader.gif" /></div>');
  jQuery('#modal_sm').modal('show',{backdrop: 'true'});
  $.ajax({
    url: url,
    success: function (response) {
      jQuery('#modal_sm .modal-title').html(title);
      jQuery('#modal_sm .modal-body').html(response);
    }
});}
function changeStatus(tableName,whereColumn,whereId,updateColumn,updateStatus)
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
$(document).ajaxStart(function() {
    $('.loading').show();
}).ajaxStop(function() {
    $('.loading').hide();
});
</script>
</body>
</html>