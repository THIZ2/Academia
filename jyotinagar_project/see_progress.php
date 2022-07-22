<?php

include("config.php");
$sql="Select * from php where name='".$_REQUEST['name']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);

$sql1="Select * from ds where name='".$_REQUEST['name']."' ";
$run1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_array($run1);

$sql2="Select * from java where name='".$_REQUEST['name']."' ";
$run2=mysqli_query($conn,$sql2);
$data2=mysqli_fetch_array($run2);
/*php table connectivity*/

$sql_pj="Select average from php where name='".$data['name']."' AND month='january' ";
$run_pj=mysqli_query($conn,$sql_pj);
$data_pj=mysqli_fetch_array($run_pj);

$sql_pf="Select average from php where name='".$data['name']."' AND month='feburary' ";
$run_pf=mysqli_query($conn,$sql_pf);
$data_pf=mysqli_fetch_array($run_pf);

$sql_pm="Select average from php where name='".$data['name']."' AND month='march' ";
$run_pm=mysqli_query($conn,$sql_pm);
$data_pm=mysqli_fetch_array($run_pm);

$sql_pa="Select average from php where name='".$data['name']."' AND month='august' ";
$run_pa=mysqli_query($conn,$sql_pa);
$data_pa=mysqli_fetch_array($run_pa);

$sql_ps="Select average from php where name='".$data['name']."' AND month='september' ";
$run_ps=mysqli_query($conn,$sql_ps);
$data_ps=mysqli_fetch_array($run_ps);

$sql_po="Select average from php where name='".$data['name']."' AND month='october' ";
$run_po=mysqli_query($conn,$sql_po);
$data_po=mysqli_fetch_array($run_po);

$sql_pn="Select average from php where name='".$data['name']."' AND month='november' ";
$run_pn=mysqli_query($conn,$sql_pn);
$data_pn=mysqli_fetch_array($run_pn);

$sql_pd="Select average from php where name='".$data['name']."' AND month='december' ";
$run_pd=mysqli_query($conn,$sql_pd);
$data_pd=mysqli_fetch_array($run_pd); 

/*ds table connectivity*/

$sql_dj="Select average from ds where name='".$data1['name']."' AND month='january' ";
$run_dj=mysqli_query($conn,$sql_dj);
$data_dj=mysqli_fetch_array($run_dj);

$sql_df="Select average from ds where name='".$data1['name']."' AND month='feburary' ";
$run_df=mysqli_query($conn,$sql_df);
$data_df=mysqli_fetch_array($run_df);

$sql_dm="Select average from ds where name='".$data1['name']."' AND month='march' ";
$run_dm=mysqli_query($conn,$sql_dm);
$data_dm=mysqli_fetch_array($run_dm);

$sql_da="Select average from ds where name='".$data1['name']."' AND month='august' ";
$run_da=mysqli_query($conn,$sql_da);
$data_da=mysqli_fetch_array($run_da);

$sql_ds="Select average from ds where name='".$data1['name']."' AND month='september' ";
$run_ds=mysqli_query($conn,$sql_ds);
$data_ds=mysqli_fetch_array($run_ds);

$sql_do="Select average from ds where name='".$data1['name']."' AND month='october' ";
$run_do=mysqli_query($conn,$sql_do);
$data_do=mysqli_fetch_array($run_do);

$sql_dn="Select average from ds where name='".$data1['name']."' AND month='november' ";
$run_dn=mysqli_query($conn,$sql_dn);
$data_dn=mysqli_fetch_array($run_dn);

$sql_dd="Select average from ds where name='".$data1['name']."' AND month='december' ";
$run_dd=mysqli_query($conn,$sql_dd);
$data_dd=mysqli_fetch_array($run_dd);

/*java table connectivity*/

$sql_jj="Select average from java where name='".$data2['name']."' AND month='january' ";
$run_jj=mysqli_query($conn,$sql_jj);
$data_jj=mysqli_fetch_array($run_jj);

$sql_jf="Select average from java where name='".$data2['name']."' AND month='feburary' ";
$run_jf=mysqli_query($conn,$sql_jf);
$data_jf=mysqli_fetch_array($run_jf);

$sql_jm="Select average from java where name='".$data2['name']."' AND month='march' ";
$run_jm=mysqli_query($conn,$sql_jm);
$data_jm=mysqli_fetch_array($run_jm);

$sql_ja="Select average from java where name='".$data2['name']."' AND month='august' ";
$run_ja=mysqli_query($conn,$sql_ja);
$data_ja=mysqli_fetch_array($run_ja);

$sql_js="Select average from java where name='".$data2['name']."' AND month='september' ";
$run_js=mysqli_query($conn,$sql_js);
$data_js=mysqli_fetch_array($run_js);

$sql_jo="Select average from java where name='".$data2['name']."' AND month='october' ";
$run_jo=mysqli_query($conn,$sql_jo);
$data_jo=mysqli_fetch_array($run_jo);

$sql_jn="Select average from java where name='".$data2['name']."' AND month='november' ";
$run_jn=mysqli_query($conn,$sql_jn);
$data_jn=mysqli_fetch_array($run_jn);

$sql_jd="Select average from java where name='".$data2['name']."' AND month='december' ";
$run_jd=mysqli_query($conn,$sql_jd);
$data_jd=mysqli_fetch_array($run_jd);



/*php chart values*/
$dataPoints = array(
	array("y" => $data_pa['average'], "label" => "August"),
	array("y" => $data_ps['average'], "label" => "September"),
	array("y" => $data_po['average'], "label" => "October"),
	array("y" => $data_pn['average'], "label" => "November"),
	array("y" => $data_pd['average'], "label" => "December"),
	array("y" => $data_pj['average'], "label" => "January"),
	array("y" => $data_pf['average'], "label" => "Feburary"),
	array("y" => $data_pm['average'], "label" => "March")
);
/*ds chart values*/
$dataPoints1 = array(
	array("y" => $data_da['average'], "label" => "August"),
	array("y" => $data_ds['average'], "label" => "September"),
	array("y" => $data_do['average'], "label" => "October"),
	array("y" => $data_dn['average'], "label" => "November"),
	array("y" => $data_dd['average'], "label" => "December"),
	array("y" => $data_dj['average'], "label" => "January"),
	array("y" => $data_df['average'], "label" => "Feburary"),
	array("y" => $data_dm['average'], "label" => "March")
);
/*java chart values*/
$dataPoints2 = array(
	array("y" => $data_ja['average'], "label" => "August"),
	array("y" => $data_js['average'], "label" => "September"),
	array("y" => $data_jo['average'], "label" => "October"),
	array("y" => $data_jn['average'], "label" => "November"),
	array("y" => $data_jd['average'], "label" => "December"),
	array("y" => $data_jj['average'], "label" => "January"),
	array("y" => $data_jf['average'], "label" => "Feburary"),
	array("y" => $data_jm['average'], "label" => "March")
);
?>
<html lang="en">
	
<head>
	<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1",
	title: {
		
		text: "Progress Report"
	},
	axisY: {
		title: "Average marks of assignments per month"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "bottom",
		horizontalAlign: "center",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		name: "PHP",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK);?>
						
		 
	},
	{
		type: "line",
		name: "DS",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
						
		 
	},
	{
		type: "line",
		name: "JAVA",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
						
		 
	}	]
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
	<?php include("header2.php"); ?>
<body>

	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Hello!</h1>
    <p>The graph below shows your progress in All your subjects. </p>
    <a href="student.php"><button>Back To Profile</button></a>
</div>

</section>

<div id="chartContainer" style="height: 500px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<?php include("footer.php"); ?>
