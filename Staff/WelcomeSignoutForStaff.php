<!doctype html>
<html lang="en">
<?php
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WelcomeSignout</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
        <a class="navbar-brand" href="#">&nbsp;ILoveDB Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">Page <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Information</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Time Attendance</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Payment Slip</a>
        </li>
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/HRPJ/WelcomeSignin.html">Sign out</a>
            </li>
        </ul>
    </div>
</nav>
  </head>
  <body>
      <br>
      <!-- Welcome message -->
      <marquee direction="left"><font color="#696969" size="5">Welcome K.
	  <?php $id = $_GET["id"];
			$result = mysqli_query($con,"SELECT * FROM staff WHERE staffId LIKE '$id'");
			while ($row = mysqli_fetch_array($result))
			{
				echo $row['staffName'] ; 
			}?> to ILoveDB Company</font></marquee>
      <hr>
      <!-- Start Slide -->
<center>
    <div id="carouselExampleControls" class="carousel slide" style="max-width:1000px" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Present.jpg" width="1000" height="400" alt="Present">
          </div>
    <div class="carousel-item">
        <img src="Company.jpg" width="1000" height="400" alt="Company">
    </div>
    <div class="carousel-item">
        <img src="People.jpg" width="1000" height="400" alt="People">
    </div>
        </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</center>
<!-- Company Information -->
<hr>
<h6>
<div align="center">ILoveDB Company was founded in 2012. Our business is the designer of computer system
    <br>
    <br>and computer communication system in order to be able to work altogether efficiently
    <br>
    <br>and effectively agreeing with the customer’s demand of work.
    <br>
    <br>The components of system consist of computer hardware, system software, application software,
    <br>
    <br>and computer network system equipment. Our sale is in the feature of completeness or Turn Key
    <br>
    <br>including the consultation, project planning, system design, implementation, installation, training, and maintenance.
</div>
</h6>
    <!-- End Slide -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
