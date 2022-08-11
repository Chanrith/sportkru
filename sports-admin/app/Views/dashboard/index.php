<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?=base_url()?>/assets\css\AdminLTE.min.css">
<style type="text/css">
	.highcharts-credits{display: none;}
	.content::-webkit-scrollbar {
	display: none;
	}
</style>
<!--Dashboard-->
<section class="content-header" style="background:#fff;">
	<h1>Dashboard</h1>
</section>
<!-- Page Content-->
<div class="page-content" style="background:#fff;">
<div class="container-fluid">
<!-- container -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
	Highcharts.setOptions({
	
	    lang: {
	
	        decimalPoint: '.',
	
	        thousandsSep: ','
	
	    }
	
	});
	
	$('#barChart').highcharts({
	
	    chart: {
	
	        type: 'column'
	
	    },
	
	    title: {
	
	        text: 'Booking Report'
	
	    },
	
	    subtitle: {
	
	        text: ''
	
	    },
	
	    xAxis: {
	
	        categories: [
	
	            <?php $j=6;for($i=1;$i<=6;$i++){$month=$j-$i;echo "'".date('M-Y',strtotime("-$month months"))."',"; } ?>
	
	        ],
	
	        crosshair: true
	
	    },
	
	    yAxis: {
	
	        min: 0,
	
	        title: {
	
	            text: 'Report For Last 6 Months'
	
	        }
	
	    },
	
	    tooltip: {
	
	        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	
	        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
	
	            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
	
	        footerFormat: '</table>',
	
	        shared: true,
	
	        useHTML: true
	
	    },
	
	    
	
	    series: [{
	
	        name: 'Bookings',
	
	        data: [
	
	        100,200,240,123,324
	
	        ]
	
	
	
	    }]
	
	});   
	
</script>