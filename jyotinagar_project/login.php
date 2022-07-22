<html lang="en">
	
<head>
	<?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_s.css">

</head>
	
<body>

	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Welcome to Academia!</h1>
    <p>Begin your journey Here! </p>
    <a href="home.php"><button>Home</button></a>
</div>

</section>

<!-- signup.html starts  -->	
<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="tlogin_action.php" class="sign-in-form">
            <h2 class="title">Teacher's Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
           <p style="color:red; font-size: 1.4rem; text-align:center"><?php if(isset($_SESSION['lerror'][0]) and $_SESSION['lerror'][0]!="")
						{
							echo $_SESSION['lerror'][0];
							unset($_SESSION['lerror'][0]);
						}?>
						<?php if(isset($_SESSION['lerror'][1]) and $_SESSION['lerror'][1]!="")
						{
							echo $_SESSION['lerror'][1];
							unset($_SESSION['lerror'][1]);
						}?></p>
					
  
          </form>
          <form action="slogin_action.php" class="sign-up-form">
            <h2 class="title">Student's Sign in</h2>
              <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Login" />
           <p style="color:red; font-size: 1.4rem; text-align:center"><?php if(isset($_SESSION['lerror'][2]) and $_SESSION['lerror'][2]!="")
						{
							echo $_SESSION['lerror'][2];
							unset($_SESSION['lerror'][2]);
						}?>
						<?php if(isset($_SESSION['lerror'][3]) and $_SESSION['lerror'][3]!="")
						{
							echo $_SESSION['lerror'][3];
							unset($_SESSION['lerror'][3]);
						}?></p>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Student?</h3>
            <p>
              Click Here to transition to Student Log In.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              STudent
            </button>
          </div>
          <img src="images/login.svg" class="image" alt="" />
        </div>
		  
        <div class="panel right-panel">
          <div class="content">
            <h3>Teacher?</h3>
            <p>
              Click Here to transition to Teacher Log In.
            </p>
            <button class="btn transparent" id="sign-in-btn">
             Teacher
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
	<script src="js/app.js"></script>
<!--ENDS-->

<?php include("footer.php"); ?>	