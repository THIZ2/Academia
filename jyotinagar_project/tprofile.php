<?php include("header.php");
session_start();
include("config.php");
$sql="Select * from tregistration where id='".$_SESSION['user_id']."' ";
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
        <li><a href="#contact">Assment Form</a></li>
        <li><a href="student.php">Students</a></li>
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
    <h2>Hello <?php echo $data['name']; ?> !</h2>
	<?php } ?>
	<p>This is your profile page which also contain an Assesment form.Using this form you can grade your student's assignment month by month.</p>
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
						<td class="first" width="172"><h4>Subject</h4></td>
						<td class="last"><?php echo $data['subject']; ?></td>
            </tr>
		</table>	
    </div>

    <div class="image">
        <img src="images/img1.jpg" alt="">
    </div>

</div>

</section>

<!-- contact section starts  -->	
<section class="contact" id="contact">

<h1 class="heading">Assesment Form</h1>
<h3 class="title">This Form contains the assesment of individual student in <?php echo $data['subject']; ?>.  </h3>

<div class="row">

    <div class="image">
        <img src="images/log.svg" alt="">
    </div>

    <div class="form-container">
		
        <form action="assesment_action.php" method="post">
			
            <input name="name"  type="text" placeholder="enter Student's full name">
        
            <input name="month"  type="text" placeholder="enter the month ">
				
            <input name="assign1"  type="number" placeholder="Marks of Assignment 1">
			<input name="assign2"  type="number" placeholder="Marks of Assignment 2">
			<input name="assign3"  type="number" placeholder="Marks of Assignment 3">
			
            <input type="number" name="internals"placeholder="Marks of Internals">
            
          
            <input type="submit" value="Submit">
        </form>
    </div>

</div>

</section>

<?php include("footer.php"); ?>
