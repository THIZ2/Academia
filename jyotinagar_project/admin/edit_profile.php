<?php include("header.php");
include("../config.php");
$sql="Select * from tregistration where id='".$_REQUEST['id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);
?>
<section class="home" id="home">

<div class="content"><script margint-top:10px;></script>
   <br>
	     <h1>Welcome to Academia!</h1>
	<br>
    	 <a href="admin_index.php"><button>Back</button></a>
</div>

</section>

<section class="contact" id="contact">
<h1 class="heading">Edit Profile</h1>
<h3 class="title">You can edit the registered teacher's Profile here!</h3>

<div class="row">
	<div class="image">
        <img src="../images/edit.svg" alt="">
    </div>
    <div class="form-container">
        <form action="edit_profile_action.php" method="post" enctype="multipart/form-data" >
			<table>
            <tr><input name="name"  type="text" placeholder="full name" value="<?php echo $data['name']; ?>"></tr>
			<tr><?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
									{
										echo $_SESSION['error'][0];
										unset($_SESSION['error'][0]);
									}?></tr>
            <tr><input name="email" type="email" placeholder="enter your email" value="<?php echo $data['email']; ?>"></tr>
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
								<option <?php if($data['subject']=='DS') echo "selected"; ?> >DS</option>
								<option <?php if($data['subject']=='PHP') echo "selected"; ?>>PHP</option>
								<option <?php if($data['subject']=='JAVA') echo "selected"; ?>>JAVA</option>
								</select></tr>
			<tr><?php if(isset($_SESSION['error'][3]) and $_SESSION['error'][3]!="")
									{
										echo $_SESSION['error'][3];
										unset($_SESSION['error'][3]);
									}?></tr>	
				
          <tr> <input type="password" class="text" name="password" id="password" value="" placeholder="New Password" /></tr>
				<tr><?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
									{
										echo $_SESSION['error'][4];
										unset($_SESSION['error'][4]);
									}?></tr>
									
			<tr><input type="file" name="image" id="image" value="<?php echo $data['image']; ?>" />
				<img src="../images/<?php echo $data['image']; ?>" width="200px" height="200px"></tr>
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
				<tr><input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
            <input type="submit" value="submit"></tr>
				</table>
        </form>
    </div>


    

</div>

<?php  include("footer.php") ?>