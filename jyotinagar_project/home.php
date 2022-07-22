<?php include("header.php"); ?>
	
<body>


<!-- header section starts  -->

<header>

<a href="#" class="logo"><i class="fas fa-graduation-cap"></i>Academia</a>

<nav class="navbar">
    <ul>
        <li><a href="#home" class="active">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#review">review</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>
	
	<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Welcome to Academia</h1>
    <p>Academia is a site where progress of students in a year is generated.The purpose is to provide a interface to instructor where they can see the progress of student throughout the year. </p>
    <a href="login.php"><button>Log In</button></a>
</div>

<div class="box-container">

    <div class="box">
        <i class="fas fa-chalkboard-teacher"></i>
        <h3>For Teachers</h3>
        <p>Mark your student's assignment.Track their Progress.</p>
    </div>

    <div class="box">
      <image src="images/logo.png" class="logo"></image>
    </div>

    <div class="box">
        <i class="fas fa-user-graduate"></i>
        <h3>For Student</h3>
        <p>Check yor assignment score.Keep up with your progress!</p>
    </div>

</div>

</section>
<!-- about section starts  -->	
	
<section class="about" id="about">

<h1 class="heading">about us</h1>
<h3 class="title">start your journey with us!</h3>

<div class="row">

    <div class="content">
        <h3>Keep up with your year round Progress!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus incidunt dolorum voluptas saepe, animi perspiciatis praesentium ipsa numquam et possimus dolorem enim similique, quod dicta necessitatibus ducimus officiis nemo!</p>
		<br>
		<h4>Register Here!</h4>
		<br>
        <a href="register.php"><button>Tearcher</button></a>
		 <a href="register.php#contact"><button>Student</button></a>
    </div>

    <div class="image">
        <img src="images/about-img.svg" alt="">
    </div>

</div>

</section>	
	
<!-- review section starts  -->

<section id="review" class="review">

<h1 class="heading">User's review</h1>
<h3 class="title">what our users says about us</h3>

<div class="box-container">

    <div class="box">
        <img src="images/teach2.png" alt="">
        <h3>Aparna Singh</h3>
		<h4>Teacher</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, corporis?</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>

    <div class="box">
        <img src="images/teach3.png" alt="">
        <h3>Divya Dutta</h3>
		<h4>Teacher</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, corporis?</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>

    <div class="box">
        <img src="images/stu2.png" alt="">
        <h3>Aditi Gupta</h3>
		<h4>Student</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, corporis?</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>

</div>

</section>	
<!-- contact section starts  -->	
<section class="contact" id="contact">

<h1 class="heading">contact us</h1>
<h3 class="title">we love conversatios & we are here to solve your problems .</h3>

<div class="row">

    <div class="image">
        <img src="images/contact-img.svg" alt="">
    </div>

    <div class="form-container">
        <form action="contact_action.php" method="post">
            <input name="name"  type="text" placeholder="full name">
            <input name="email" type="email" placeholder="enter your email">
            
            <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea>
            <input type="submit" value="message">
        </form>
    </div>

</div>

</section>

<?php include("footer.php"); ?>