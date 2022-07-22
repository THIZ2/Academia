<?php include("header.php");
session_start();
include("config.php");
$sql="Select * from sregistration where id='".$_SESSION['user_id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);
 ?>

<body>
<!-- header section starts  -->

<header>

<a href="#" class="logo"><i class="fas fa-graduation-cap"></i>Academia</a>

<nav class="navbar">
    <ul>
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#about">Profile</a></li>
        <li><a href="#review">subjects</a></li>
        <li><a href="progress.php">Progress</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>
	
	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Welcome to Academia.</h1>
	<?php if(isset($_SESSION['user_id']))
		{
		?>
    <h2>Hello <?php echo $_SESSION['user_name']; ?> !</h2>
	<?php } ?>
	<p>This is your profile page where you can edit your profile.It also contain an links to you progress in each subject and your overall performance.</p>
    <a href="home.php"><button>Home</button></a>
</div>

<div class="box-container">
    <div class="box">
      <image src="register_img/<?php echo $data['image']; ?>" class="logo"></image>
    </div>
    
</div>
</section>
<!-- about section starts  -->	
	
<section class="about" id="about">

<h1 class="heading">Profile</h1>
<h3 class="title">Admin can Edit your Profile!</h3>

<div class="row">

    <div class="content">
        <table class="listing form" cellpadding="10" cellspacing="10">
			<tr>
						<td class="first" width="172"><h4>Name</h4></td>
						<td class="last"><?php echo $data['name']; ?></td> 
            </tr>
			<tr>
						<td class="first" width="172"><h4>Email</h4></td>
						<td class="last"><?php echo $data['email']; ?></td>
			</tr>
			<tr>
						<td class="first" width="172"><h4>Year</h4></td>
						<td class="last"><?php echo $data['year']; ?></td>
            </tr>
		</table>	
    </div>

    <div class="image">
        <img src="images/135.jpg" alt="">
    </div>

</div>

</section>
	
<section id="review" class="review">

<h1 class="heading">Subjects</h1>
<h3 class="title">Click on the box to see your progress!</h3>

<div class="box-container">

    <a href="progress_php.php"><div class="box">
        <img src="images/download (3).png" alt="">
        <h3>Php</h3>
		<p>Progress from august to march</p>
    </div></a>

   <a href="progress_java.php"> <div class="box">
        <img src="images/download (1).png" alt="">
        <h3>Java</h3>
		<p>Progress from august to march</p>
    </div></a>

   <a href="progress_ds.php"> <div class="box">
        <img src="images/download (2).png" alt="">
        <h3>Data Structure</h3>
	   <p>Progress from august to march</p>
		
    </div></a>

</div>

</section>	
	
<?php include("footer.php"); ?>	