<?php include("header.php");
session_start();
include("../config.php");

$sql="Select * from tregistration where status=1";
$run=mysqli_query($conn,$sql);

$sql0="select * from sregistration where status=1";
$run0=mysqli_query($conn,$sql0);

$sql2="select * from contact";
$run2=mysqli_query($conn,$sql2);

?>
<body>
<!-- header section starts  -->

<header>

<a href="../home.php" class="logo"><i class="fas fa-graduation-cap"></i>Academia</a>

<nav class="navbar">
    <ul>
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#data">User Data</a></li>
        <li><a href="#marks">Queries</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>
	<!-- home section starts  -->

<section class="home" id="home">

<div class="content"><script margint-top:10px;></script>
   <br>
	<br>
	
     <h1>Welcome to Academia!</h1>
    <?php if(isset($_SESSION['admin_id']))
		{
		?>
    <p>Hello <?php echo $_SESSION['admin_name']; ?> !</p>
	<?php } ?>
</div>

</section>
	
<!-- data section starts  -->	
	
<section class="data" id="data" >

<h1 class="heading">User Data</h1>
<h3 class="title">view data of the Students & Teachers!</h3>

<div class="row">
 <div class="content">
		<table class="listing form" cellpadding="10" cellspacing="10">
        <tr><th>name</th>  <th> email </th><th> Subject </th><th>Edit</th><th>Delete</th></tr>
					
<?php
while($data=mysqli_fetch_array($run))
{   
		?>	<tr><td><?php echo $data["name"];?> </td>
              <td><?php echo $data["email"];?></td>
		<td><?php echo $data["subject"]; ?></td>
	
		<td><a href="edit_profile.php?id=<?php echo $data['id']; ?>"><img src="../images/edit.png" /></td> 
		<td><a href="delete_teach.php?id=<?php echo $data['id']; ?>"><img src="../images/delete2.png" /></td>               </tr>

<?php }?>
			
		</table>
    <br>
		<table class="listing form" cellpadding="10" cellspacing="10">
        <tr><th>name</th>  <th> email </th><th> year </th><th>DS</th><th>Php</th><th>Java</th><th>Progress</th><th>Delete</th></tr>
			
			
			
<?php
while($data0=mysqli_fetch_array($run0))
{   
		?>	<tr><td><?php echo $data0["name"];?> </td>
              <td><?php echo $data0["email"];?></td>
		<td><?php echo $data0["year"]; ?></td>
	
		<td><a href="../see_progress_ds.php?name=<?php echo $data0['name']; ?>"><img src="../images/view.png" /></td> 
		<td><a href="../see_progress_php.php?name=<?php echo $data0['name']; ?>"><img src="../images/view.png" /></td> 
		<td><a href="../see_progress_java.php?name=<?php echo $data0['name']; ?>"><img src="../images/view.png" /></td> 
		<td><a href="../see_progress.php?name=<?php echo $data0['name']; ?>"><img src="../images/view.png" /></td>
   <td><a href="delete_stu.php?name=<?php echo $data0['name']; ?>"><img src="../images/delete2.png" /></td>            </tr>

<?php }?>
			
		</table>
    </div>

    <div class="image">
        <img src="../images/143.jpg" alt="">
    </div>

</div>

</section>
	
	<section class="marks" id="marks" >

<h1 class="heading">Queries!</h1>
<h3 class="title">Queries asked through contact form can be seen here.</h3>

<div class="row">

	 <div class="image">
        <img src="../images/658.jpg" alt="">
    </div>
	
    <div class="content">
		<table class="listing form" cellpadding="15" cellspacing="10" align="center">
        <tr><th>name</th>  <th> email </th><th> Query/Message </th><th>Delete</th></tr>
<?php
while($data2=mysqli_fetch_array($run2))
{
		?>	<tr align="center">
			<td><?php echo $data2["name"];?> </td>
              <td><?php echo $data2["email"];?></td>
		<td><?php echo $data2["message"]; ?></td>
	 <td><a href="delete_query.php?id=<?php echo $data2['id']; ?>"><img src="../images/delete2.png" /></td>
   </tr>

<?php }?>
		</table>
    </div>
</div>

</section>	
	<?php  include("footer.php") ?>