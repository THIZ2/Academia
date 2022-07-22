<?php session_start(); ?>
<?php include("header2.php"); ?>
	
<body>

	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Welcome to Academia!</h1>
    <p>Begin your journey Here! </p>
    <a href="home.php"><button>Home</button></a>
</div>

</section>

<!-- about section starts  -->	
	
<section class="about" id="about">
<h1 class="heading">Teacher's Registration</h1>
<h3 class="title"><a href="#contact">Student?</a>student registration</h3>

<div class="row">

    <div class="form-container">
        <form action="tregister_action.php" method="post" enctype="multipart/form-data" >
			<table>
            <tr><input name="name"  type="text" placeholder="full name"></tr>
			<tr><?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
									{
										echo $_SESSION['error'][0];
										unset($_SESSION['error'][0]);
									}?></tr>
            <tr><input name="email" type="email" placeholder="enter your email"></tr>
			<tr><?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
									{
										echo $_SESSION['error'][1];
										unset($_SESSION['error'][1]);
									}?>
				<?php if(isset($_SESSION['error'][2]) and $_SESSION['error'][2]!="")
									{
										echo $_SESSION['error'][2];
										unset($_SESSION['error'][2]);
									}?><br></tr>
				
           <tr> <select name="subject">
								<option>Subject</option>
								<option>DS</option>
								<option>PHP</option>
								<option>JAVA</option>
								</select></tr>
			<tr><?php if(isset($_SESSION['error'][3]) and $_SESSION['error'][3]!="")
									{
										echo $_SESSION['error'][3];
										unset($_SESSION['error'][3]);
									}?></tr>	
				
          <tr> <input type="password" class="text" name="password" id="password" value="" placeholder="Password" /></tr>
				<tr><?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
									{
										echo $_SESSION['error'][4];
										unset($_SESSION['error'][4]);
									}?></tr>
				
			<tr><input type="password" class="text" name="con_password" id="con_password" placeholder="Confirm Password" value="" /></tr>
				<tr><?php if(isset($_SESSION['error'][5]) and $_SESSION['error'][5]!="")
									{
										echo $_SESSION['error'][5];
										unset($_SESSION['error'][5]);
									}?></tr>
				
			<tr><input type="file" name="image" id="image" value="" /></tr>
				<tr><?php if(isset($_SESSION['error'][7]) and $_SESSION['error'][7]!="")
									{
										echo $_SESSION['error'][7];
										unset($_SESSION['error'][7]);
									}?>
					<?php if(isset($_SESSION['error'][6]) and $_SESSION['error'][6]!="")
									{
										echo $_SESSION['error'][6];
										unset($_SESSION['error'][6]);
									}?>
				<br></tr>
            <tr><input type="submit" value="submit"></tr>
				</table>
        </form>
    </div>


    <div class="image">
        <img src="images/bg.svg" alt="">
    </div>

</div>


</section>
<!-- contact section starts  -->	
<section class="contact" id="contact">
<h1 class="heading">Student's Registration</h1>


<div class="row">

    <div class="image">
        <img src="images/about-img.svg" alt="">
    </div>
	<div class="form-container">
        <form action="sregister_action.php" method="post" enctype="multipart/form-data" >
		<table>
			<tr><input name="name"  type="text" placeholder="full name"></tr>
			<tr><?php if(isset($_SESSION['error'][10]) and $_SESSION['error'][10]!="")
									{
										echo $_SESSION['error'][10];
										unset($_SESSION['error'][10]);
									}?></tr>
			            		
            <tr><input name="email" type="email" placeholder="enter your email"></tr>
           <tr><?php if(isset($_SESSION['error'][11]) and $_SESSION['error'][11]!="")
									{
										echo $_SESSION['error'][11];
										unset($_SESSION['error'][11]);
									}?> <?php if(isset($_SESSION['error'][12]) and $_SESSION['error'][12]!="")
									{
										echo $_SESSION['error'][12];
										unset($_SESSION['error'][12]);
									}?><br></tr>
			<tr><select name="year">
								<option>Year</option>
								<option>BCA I</option>
								<option>BCA II</option>
								<option>BCA III</option>
								</select></tr>
			<tr><?php if(isset($_SESSION['error'][13]) and $_SESSION['error'][13]!="")
									{
										echo $_SESSION['error'][13];
										unset($_SESSION['error'][13]);
									}?></tr>	
			
             <tr><input type="password" class="text" name="password" id="password" value="" placeholder="Password" /></tr>
				<tr><?php if(isset($_SESSION['error'][14]) and $_SESSION['error'][14]!="")
									{
										echo $_SESSION['error'][14];
										unset($_SESSION['error'][14]);
									}?></tr>
			
			<tr><input type="password" class="text" name="con_password" id="con_password" placeholder="Confirm Password" value="" /></tr>
				<tr><?php if(isset($_SESSION['error'][15]) and $_SESSION['error'][15]!="")
									{
										echo $_SESSION['error'][15];
										unset($_SESSION['error'][15]);
									}?></tr>
			
			<tr><input type="file" name="image" id="image" value="" placeholder="image"/></tr>
				<tr><?php if(isset($_SESSION['error'][17]) and $_SESSION['error'][17]!="")
									{
										echo $_SESSION['error'][17];
										unset($_SESSION['error'][17]);
									}?>
					<?php if(isset($_SESSION['error'][16]) and $_SESSION['error'][16]!="")
									{
										echo $_SESSION['error'][16];
										unset($_SESSION['error'][16]);
									}?>
				<br></tr>
            <tr><input type="submit" value="submit"></tr>
			</table>
        </form>
    </div>
    

</div>

</section>

<?php include("footer.php"); ?>
