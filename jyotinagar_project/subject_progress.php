<?php
 session_start();
include("config.php");
$sql="Select * from sregistration where name='".$_REQUEST['name']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);

$sqlj="Select * from $table where name='".$data['name']."' AND month='january' ";
$runj=mysqli_query($conn,$sqlj);
$dataj=mysqli_fetch_array($runj);

$sqlf="Select * from $table where name='".$data['name']."' AND month='feburary' ";
$runf=mysqli_query($conn,$sqlf);
$dataf=mysqli_fetch_array($runf);

$sqlm="Select * from $table where name='".$data['name']."' AND month='march' ";
$runm=mysqli_query($conn,$sqlm);
$datam=mysqli_fetch_array($runm);

$sqla="Select * from $table where name='".$data['name']."' AND month='august' ";
$runa=mysqli_query($conn,$sqla);
$dataa=mysqli_fetch_array($runa);

$sqls="Select * from $table where name='".$data['name']."' AND month='september' ";
$runs=mysqli_query($conn,$sqls);
$datas=mysqli_fetch_array($runs);

$sqlo="Select * from $table where name='".$data['name']."' AND month='october' ";
$runo=mysqli_query($conn,$sqlo);
$datao=mysqli_fetch_array($runo);

$sqln="Select * from $table where name='".$data['name']."' AND month='november' ";
$runn=mysqli_query($conn,$sqln);
$datan=mysqli_fetch_array($runn);

$sqld="Select * from $table where name='".$data['name']."' AND month='december' ";
$rund=mysqli_query($conn,$sqld);
$datad=mysqli_fetch_array($rund);



$dataPoints1 = array(
	array("y" => $dataa['assign1'], "label" => "August"),
	array("y" => $datas['assign1'], "label" => "September"),
	array("y" => $datao['assign1'], "label" => "October"),
	array("y" => $datan['assign1'], "label" => "November"),
	array("y" => $datad['assign1'], "label" => "December"),
	array("y" => $dataj['assign1'], "label" => "January"),
	array("y" => $dataf['assign1'], "label" => "Feburary"),
	array("y" => $datam['assign1'], "label" => "March")
);
$dataPoints2 = array(
	array("y" => $dataa['assign2'], "label" => "August"),
	array("y" => $datas['assign2'], "label" => "September"),
	array("y" => $datao['assign2'], "label" => "October"),
	array("y" => $datan['assign2'], "label" => "November"),
	array("y" => $datad['assign2'], "label" => "December"),
	array("y" => $dataj['assign2'], "label" => "January"),
	array("y" => $dataf['assign2'], "label" => "Feburary"),
	array("y" => $datam['assign2'], "label" => "March")
);
$dataPoints3 = array(
	array("y" => $dataa['assign3'], "label" => "August"),
	array("y" => $datas['assign3'], "label" => "September"),
	array("y" => $datao['assign3'], "label" => "October"),
	array("y" => $datan['assign3'], "label" => "November"),
	array("y" => $datad['assign3'], "label" => "December"),
	array("y" => $dataj['assign3'], "label" => "January"),
	array("y" => $dataf['assign3'], "label" => "Feburary"),
	array("y" => $datam['assign3'], "label" => "March")
);
$dataPoints4 = array(
	array("y" =>null, "label" => "August"),
	array("y" =>null, "label" => "September"),
	array("y" =>null, "label" => "October"),
	array("y" => $datan['internals'], "label" => "November"),
	array("y" =>null, "label" => "December"),
	array("y" => $dataj['internals'], "label" => "January"),
	array("y" => $dataf['internals'], "label" => "Feburary"),
	array("y" =>null, "label" => "March")
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
	CanvasJS.addColorSet("cShades",
                [//colorSet Array

                "#2ec4b6",
                "#ffe66d",
                "#ff6b6b",
                "#02c39a"
                               
                ]);
var chart = new CanvasJS.Chart("chartContainer", {
	colorSet: "cShades",
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "marks of all assignments per month."
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "bottom",
		horizontalAlign: "center",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Assignment1",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Assignment2",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Assignment3",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Internals",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  