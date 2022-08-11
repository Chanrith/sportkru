</nav>
<!--end navbar-->
<style>
.hero .page-title{padding-top: 3rem;padding-bottom: 0rem;}
.breadcrumb{display:none;}
.hero:after{background-image: url(../img/hero-overlay.png);background-size: contain;content: "";width: 100%;height:0rem;bottom: 0;}
.hero .hero-wrapper{padding-bottom: 3rem;}
.form-check {padding-left:0px;}
.content{margin-bottom:0px !important;}
.navbar-nav,.footer,.navbar-brand{display:none;}
.hero .main-navigation .navbar {border-bottom:0px; padding:0;}
.items:not(.selectize-input).list .item .detail {bottom: 68px;}
@media (max-width: 767px){
.items:not(.selectize-input).list .item .detail {bottom:2rem;}}
.fa-check{ padding: 5px;background: #3c8ef5;color: #fff;border-radius: 11px;font-size: 8px;}
.items:not(.selectize-input).list .item h3 .tag:not(.category) {border:none;}
.items:not(.selectize-input).list .item .description p { width: 100%;}	
	</style>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
                </div>
            </div>
            <div class="page-title">
                <div class="container text-center">
                    <h1 class="mb-1">Sports Guru - Find your guru</h1>
	       		<h3>Badminton coaches in vancouver area</h3>
                </div>
            </div>
            <div class="background"></div>
        </div>
    </header>
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row flex-md-row">
					<div class="col-md-3" style="height: 100% !important;">
                            <aside class="sidebar"style="background: white; padding: 15px;margin-bottom: 10px;">
                                <section>
                                    <h2 class="mb-5">FILTERS</h2>
                                    <form class="form" id="filterForm">
										<h4 class="pb-4">SPORTS TYPE</h4>
                                        <div class="form-group mb-0">
                                            <?php foreach($type as $row){?>
										    <div class="form-check">
                                              <input class="form-check-input" type="radio" value="<?=$row->type_name?>" <?=($_GET['type']==$row->type_name)?'checked':'';?>  name="type" id="<?=$row->type_name?>">
                                              <label class="form-check-label" for="<?=$row->type_name?>"><?=$row->type_name?></label>
                                            </div>
                                            <?php } ?>
                                        </div>
										<h4 class="pb-4 mb-2 mt-4">COACH TIMINGS</h4>
                                        <div class="form-group mb-0">
                                            <?php foreach($timing as $row){?>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" value="<?=$row->type_name?>" <?=($_GET['timings']==$row->type_name)?'checked':'';?>  name="timings" id="<?=$row->type_name?>">
                                              <label class="form-check-label" for="<?=$row->type_name?>"><?=$row->type_name?></label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="form-check">
                                                <input type="hidden" name="per_page" id="per_page" value="">      
                                              <label class="form-check-label" ></label>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </aside>
                        </div>
                        <div class="col-md-9">
                            <div class="" style=" height: 60px; margin-bottom: 3rem; background: #fff;">
							     <h4 class="text-center" style="padding-top: 19px;"><?=$totalRows?> Coaches on-board across all sports</h4>
                            </div>
                            <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                <?php foreach ($list as $row){?>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="javascript:void(0);" class="title"><?=$row->first_name?> <?=$row->last_name?></a>
                                                <?php if($row->verified){?>
                                                <span class="tag"> <span style="font-size: 12px;">NCCP  verified</span> 
                                                <i class="fa fa-check"></i></span>
                                                <?php } ?>
                                            </h3>
                                            <a href="javascript:void(0);" class="image-wrapper background-image">
                                                <img src="https://www.cuteweb.in/sandbox/sports-admin/uploads/coach/<?=$row->image?>" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class=""style="margin-top:8px;">
										<i class="fa fa-phone pr-1" style="color: #858585;"></i><a href="#"><?=$row->mobile_number?>,<?=$row->alternative_number?></a>
                                        </h4>
										<h4 class=""style="margin-top:37px;">
										<i class="fa fa-envelope pr-1" style="color: #858585;"></i><a href="#"><?=$row->email?></a>
                                        </h4>
                                        <div class="description">
                                            <p>Class schedules: <?=$row->class_schedule?></p>
                                        </div>
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
                            <!--end page-pagination-->
                        </div>
                        <!--end col-md-9-->
                        
                        <!--end col-md-3-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
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
    $('.form-check #per_page').val(val);
    setDisable();
    setTimeout(function(){$('#filterForm').submit();},200);
}
$('li.page-item').removeClass("active");


var per_page='<?=$_GET['per_page']?>';
if(per_page==''){$('ul.pagination li:first-child').addClass("active");}
else{$('a[aria-label=<?=$_GET['per_page'];?>]').closest("li").addClass("active");}
$("#filterForm .form-check ,#filterForm .form-check .form-check-label,#filterForm .form-check .iradio ins").click(function() 
{
    var name=$(this).find('input').attr('name');
    var value=$(this).find('input').val();
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
</script>