</nav>
<style>
.form-check {
    padding-left:0px;
}
 .content{
    margin-bottom:0px !important;
}
 .navbar-nav,.footer,.navbar-brand{
    display:none;
}
 .hero .main-navigation .navbar {
    border-bottom:0px;
     padding:0;
}
 .items:not(.selectize-input).list .item .detail {
    bottom: 68px;
}
 @media (max-width: 767px){
     .items:not(.selectize-input).list .item .detail {
        bottom:2rem;
    }
}
 .fa-check{
     padding: 5px;
    background: #3c8ef5;
    color: #fff;
    border-radius: 11px;
    font-size: 8px;
}
 .items:not(.selectize-input).list .item h3 .tag:not(.category) {
    border:none;
}
 .items:not(.selectize-input).list .item .description p {
     width: 100%;
}
 .navbar-toggler:not(:disabled):not(.disabled){
    display: none;
}
 .hero:after {
     background-image: url();
     background-size: contain;
     background-position: bottom center;
     background-repeat: no-repeat;
     position: absolute;
     content: "";
     width: 100%;
     bottom: 0;
}
 .hero .hero-wrapper {
     padding-bottom:0px;
}
 .title1{
     width: 100%;
     background-color: #fff;
     border-radius: 5px;
     padding: 5px 10px !important;
     text-align: left;
     border: 1px solid #ddd;
}
 .block {
     padding-top:1rem;
     padding-bottom: 5rem;
}
 .items:not(.selectize-input).list .item .detail {
     bottom:0px;
     right: -1rem;
}
 .items:not(.selectize-input).list .item .description, .items:not(.selectize-input).list.compact .item .description {
     position: relative;
     left: 0;
     padding: 3rem 1rem;
     height: 14rem;
}
 .items:not(.selectize-input) .item {
     padding-left:0rem;
     padding-right: 0rem;
}
 .modal-dialog {
     margin: 0px;
}
 .modal-footer {
     border-top: 0px;
     justify-content: start;
}
 .modal-content,.modal-header {
    border:none;
}
 .modal-body{
     border: solid 0.5px #ddd;
     margin: 10px;
     padding: 15px;
}
 .close{
     color:red;
     opacity: 1;
}
 .items:not(.selectize-input) {
     margin-left: 0px;
     margin-right: 0px;
}
 .item .wrapper{
    border-radius: 0px !important;
}
 .items:not(.selectize-input).list .item .wrapper .image .background-image, .items:not(.selectize-input).list.compact .item .wrapper .image .background-image{
    border-radius: 0px !important;
}
.topTitle
{
    font-size: 23px;
}
.filBtn{
    font-size:14px;
}
</style>
</div>
</div>
<div class="background"></div>
</div>
</header>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h2 class="text-center mb-2 topTitle">Sports Guru - Find your guru</h2>
                    <p class="text-center">Badminton coaches in vancouver area</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-sm btn-info p-1 mt-4 mr-2 pl-2 pr-2 filBtn" data-toggle="modal" data-target="#exampleModal" onclick="addchecked();">
                <i class="fa fa-caret-down"></i> Sports Type</button>
                <button type="button" class="btn btn-sm btn-warning p-1 mt-4 pl-2 pr-2 filBtn" data-toggle="modal" data-target="#filterModal" onclick="addchecked();">
                <i class="fa fa-caret-down"></i> Coach Timings</button>
            </div>
        </div>
    </div>
    <section class="block">
        <div class="container">
            <div class="row flex-md-row">
                <div class="col-md-9">
                    <!--============ Section Title===================================================================-->
                    <div class="mb-3 p-4 mt-2" style="background: #fff;">
                        <h5 class="text-center mb-0"><?=$totalRows?> Coaches on-board across all sports</h5>
                    </div>
                    <!--============ Items ==========================================================================-->
                    <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                        <?php foreach($list as $row){?>
                        <div class="item">
                            <div class="wrapper" style="padding-bottom: 25px;">
                                <div class="image">
                                    <?php if($row->verified){?>
                                    <h3>
                                        <span class="tag" style="top:-18rem;"> <span style="font-size: 12px;">NCCP  verified</span> <i class="fa fa-check"></i></span>
                                    </h3>
                                    <?php } ?>
                                    <a href="javascript:void(0);" class="image-wrapper background-image">
                                    <img src="https://www.cuteweb.in/sandbox/sports-admin/uploads/coach/<?=$row->image?>" alt="">
                                    </a>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <h5 style="font-size:20px;">  <a href="javascript:void(0);" class="title"><?=$row->first_name?> <?=$row->last_name?></a></h5>
                                    <h5 class="pt-1">
                                        <i class="fa fa-phone pr-1" style="color: #858585;"></i><a href="#"><?=$row->mobile_number?>, <?=$row->alternative_number?></a>
                                    </h5>
                                    <h5 class="pt-1">
                                        <i class="fa fa-envelope pr-1" style="color: #858585;"></i><a href="#"><?=$row->email?></a>
                                    </h5>
                                    <p class="pt-1">Class schedules: <?=$row->class_schedule?></p>
                                </div>
                                <!--end description-->
                                <a href="javascript:void(0);" class="detail text-caps underline">Schedule video call</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!--============ End Items ==============================================================-->
                    <div class="page-pagination">
                        <nav aria-label="Pagination" class="pagination-area">
                            <?=$pager_links?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
<form id="filterForm">
<input type="hidden" id="type" name="type" value="<?=$_GET['type']?>">
<input type="hidden" id="timings" name="timings" value="<?=$_GET['timings']?>">
<input type="hidden" id="per_page" name="per_page" value="<?=$_GET['per_page']?>">
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="background: #fff;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel" style="font-size:16px;">Sports Type</h5> -->
                <button type="button" class="close pt-4 pr-4" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Close<span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="pb-4" style="font-size: 20px;">Sports Type</h5>
                <div style="border:1px soild;">
                    <div class="form-group mb-0">
                        <div class="form-group mb-0">
                            <?php foreach($type as $row){?>
                            <div class="form-check">
                              <input class="form-check-input" value="<?=$row->type_name?>" type="radio" name="type" id="<?=$row->type_name?>">
                              <label class="form-check-label" for="<?=$row->type_name?>"><?=$row->type_name?></label>
                            </div>
                            <?php } ?>
                            <div class="modal-footer pl-0">
                                <button type="button" class="btn btn-sm btn-primary p-2" >Apply Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="background: #fff;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel" style="font-size:16px;">Sports Type</h5> -->
                <button type="button" class="close pt-4 pr-4" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Close<span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="pb-4" style="font-size: 20px;">Coach Timings</h5>
                <div style="border:1px soild;">
                    <div class="form-group mb-0">
                        <div class="form-group mb-0">
                           <?php foreach($timing as $row){?>
                            <div class="form-check">
                              <input class="form-check-input" value="<?=$row->type_name?>" onload="alert();" type="radio" name="timings" id="<?=$row->type_name?>">
                              <label class="form-check-label" for="<?=$row->type_name?>"><?=$row->type_name?></label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer pl-0">
                            <button type="button" class="btn btn-sm btn-primary p-2">Apply Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('.pagination-area li').each(function() 
{
    var href=$(this).find('a').attr('href');
   if(href)
    {
        $(this).addClass("page-item");
        $(this).find('a').addClass("page-link");
        $(this).find('a').removeAttr('href');
        $(this).find('a').attr('href','javascript:void(0)');
        var val=$(this).find('a').html().trim();
        $(this).find('a').attr('aria-label',val);
        $(this).find('a').attr('onclick','pagination('+val+')');

    }
})
 <?php $per_page=$_GET['per_page']?>
$('a[aria-label=Next]').attr('onclick','pagination(<?php if($per_page==''){echo 2;}{ echo $per_page+1;}?>)');
$('a[aria-label=Previous]').attr('onclick','pagination(<?php if($per_page==''){}{ echo $per_page-1;}?>)');
$("a[aria-label=Previous]").html("<i class='fa fa-chevron-left'></i>");
$("a[aria-label=Next]").html("<i class='fa fa-chevron-right'></i>");
$("a[aria-label=First]").addClass("d-none");
$("a[aria-label=Last]").addClass("d-none");

function pagination(val)
{
    $('#per_page').val(val);
    setDisable();
    setTimeout(function(){$('#filterForm').submit();},200);
}
$('li.page-item').removeClass("active");
var per_page='<?=$_GET['per_page']?>';
if(per_page==''){$('ul.pagination li:first-child').addClass("active");}
else{$('a[aria-label=<?=$_GET['per_page'];?>]').closest("li").addClass("active");}


$(".modal-footer button").click(function()
{
    var name=$(this).parent().parent().find('.form-check .iradio.checked input').attr('name');
    var value=$(this).parent().parent().find('.form-check .iradio.checked input').val();
    $('#'+name).val(value);
    setDisable();
    setTimeout(function(){$('#filterForm').submit();},200);
});
function setDisable()
{
    $('#filterForm input').each(function(i) 
    {
        var $input = $(this);
        if($input.val() == ''){$input.attr('disabled', 'disabled');}
        else{$input.removeAttr('disabled',true);}
    });
}
function addchecked()
{
    $('input[id=<?=$_GET['type']?>]').closest('.iradio ').addClass("checked");
    $('input[id=<?=$_GET['timings']?>]').closest('.iradio ').addClass("checked");
}
</script>