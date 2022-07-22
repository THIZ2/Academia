<?php session_start(); ?>
<html>
<head>
    <title>Login Page</title>
	<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
    <div class="form">
    <p>Admin Login</p>
    <form action="admin_login_action.php" method="post">
        <input type="text" name="user_name" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>login</button>
        </form>
		<p><?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
									{
										echo $_SESSION['error'][0];
										unset($_SESSION['error'][0]);
									}?></p>
    </div>
	
	
	<?php  
	include("footer.php");
	
	 ?>