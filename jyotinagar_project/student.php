<?php session_start();
include("config.php");

$sql0="select * from sregistration";
$run0=mysqli_query($conn,$sql0);

$sql="Select * from tregistration where id='".$_SESSION['user_id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);

$table=strtolower($data['subject']);

$sql="select * from $table order by name asc";
$run=mysqli_query($conn,$sql);

?>
<?php include("header2.php"); ?>
	
<body>

	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Hello!</h1>
    <p>Below is the list of your students with their progress. </p>
    <a href="tprofile.php"><button>Back To Profile</button></a>
</div>

</section>
	
<!-- data section starts  -->	
	
<section class="data" id="data" >

<h1 class="heading">Student Data</h1>
<h3 class="title">Students enrolled in your subject!</h3>

<div class="row">

    <div class="content">
		<table class="listing form" cellpadding="10" cellspacing="10">
        <tr><th>name</th>  <th> email </th><th> year </th><!--<th>Chart</th>--><th>Table</th><th>Chart</th><th>Progress</th></tr>
			
			
			
<?php
while($data0=mysqli_fetch_array($run0))
{   
		?>	<tr><td><?php echo $data0["name"];?> </td>
              <td><?php echo $data0["email"];?></td>
		<td><?php echo $data0["year"]; ?></td>
			
   
	<td><a href="#marks"><img src="images/view.png" /></td>
<!--	here-->
		
		<td><?php if($table=='ds'){  ?>	
		<a href="see_progress_ds.php?name=<?php echo $data0['name']; ?>"><img src="images/view.png" /> <?php } 
	else if($table=='php') {  ?>	
		<a href="see_progress_php.php?name=<?php echo $data0['name']; ?>"><img src="images/view.png" /> <?php } 
	else {  ?>	
		<a href="see_progress_java.php?name=<?php echo $data0['name']; ?>"><img src="images/view.png" /> <?php } ?>
</td>
		<td><a href="see_progress.php?name=<?php echo $data0['name']; ?>"><img src="images/view.png" /></td>
              </tr>

<?php }?>
			
		</table>
    </div>

    <div class="image">
        <img src="images/13038.jpg" alt="">
    </div>

</div>

</section>	

	
	<section class="marks" id="marks" >

<h1 class="heading">Student assesment</h1>
<h3 class="title">Marks obtained by student in your subject.</h3>

<div class="row">

	 <div class="image">
        <img src="images/142.jpg" alt="">
    </div>
	
    <div class="content">
		<table class="listing form" cellpadding="15" cellspacing="10" align="center" border=".5">
        <tr><th>name</th>  <th> month </th><th> assignment1 </th><th>assignment2</th><th>assignment3</th><th>internals</th><th>Average</th></tr>
<?php
while($data=mysqli_fetch_array($run))
{
		?>	<tr align="center"><td><?php echo $data["name"];?> </td>
              <td><?php echo $data["month"];?></td>
		<td><?php echo $data["assign1"]; ?></td>
			
    <td><?php echo $data['assign2']; ?></td> 
	<td><?php echo $data['assign3']; ?></td>
	<td><?php echo $data['internals']; ?></td>
	<td><?php echo $data['average']; ?></td>
              </tr>

<?php }?>
		</table>
    </div>

   

</div>

</section>	
	<?php  
	include("footer.php");
	
	 ?>