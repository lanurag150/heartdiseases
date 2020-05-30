<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Premedic-Heart Disease Analysis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="{{ url_for('static', filename='css/open-iconic-bootstrap.min.css') }}" >
    <link rel="stylesheet"  href="{{ url_for('static', filename='css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url_for('static', filename='css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/owl.theme.default.min.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/magnific-popup.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/aos.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/ionicons.min.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/bootstrap-datepicker.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/flaticon.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/icomoon.css') }}">
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="http://premediccare.rf.gd/mainindex-user.php"><i class="flaticon-pharmacy"></i><span>Pre</span>Medic Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="http://premediccare.rf.gd/mainindex-user.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/about-user.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/departments-user.php" class="nav-link">Departments</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/doctor-user.php" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/blog-user.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/contact-user.php" class="nav-link">Contact</a></li>
        </ul>
        <div class="dropdown" style="float:right;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php $_COOKIE['Name'];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="http://premediccare.rf.gd/logout.php" style="color:red;">Log Out &nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a>
  </div>
</div>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('{{ url_for('static', filename='images/cardio.jpg') }}'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="http://premediccare.rf.gd/index.php">Home</a></span></p>
            <h3 class="mb-3 bread">Cardiovascular-Department</h3>
          </div>
        </div>
      </div>
    </div>

   <section class="ftco-section contact-section ftco-degree-bg" style="height: 1500px;background-color:AntiqueWhite;">
   
      <div class="container col-lg-6" >
          
          
            <div class="w3-card-4" style="width: 550px;background-color:White">
              <div class="w3-container w3-black">
                <h2 style="color:white;">Heart Disease Analysis</h2>
              </div>
              <form class="w3-container" action="{{ url_for('predict')}}"method="post" >
                <br>
                <p>      
                <label class="w3-text-black"><b>Age</b></label>
                <input class="w3-input w3-border w3-sand" name="first" type="text" required="required">     </p>
                <p>      
                <label class="w3-text-black"><b>Resting Blood Pressure</b></label>
                <input class="w3-input w3-border w3-sand" name="trestbps" type="text" required="required">
                </p>
                <p>      
                <label class="w3-text-black"><b>Cholestrol</b></label>
                <input class="w3-input w3-border w3-sand" name="chol" type="text" required="required">     </p>
                <p>      
                <label class="w3-text-black"><b>thalach</b></label>
                <input class="w3-input w3-border w3-sand" name="thalach" type="text" required="required">
                </p>
                <p>      
                <label class="w3-text-black"><b>oldpeak</b></label>
                <input class="w3-input w3-border w3-sand" name="oldpeak" type="text" required="required">
                </p>
                <p>
                <label class="w3-text-black"><b>Gender</b></label>
                <select class="w3-select w3-border w3-sand" name="sex"  required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="1">Male</option>
                <option value="0">Female</option>
                </select>
                </p>
                <p>
                <label class="w3-text-black"><b>Chest Pain</b></label>
                <select class="w3-select w3-border w3-sand" name="cp" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				 <option value="2">Type 3</option>
				  <option value="3">Type 4</option>
                </select>
                </p>
                <p>
                <label class="w3-text-black"><b>Fbs</b></label>
                <select class="w3-select w3-border w3-sand" name="Fbs" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
                </select>
                </p>
                <p>      
                <label class="w3-text-black"><b>Restg</b></label>
                 <select class="w3-select w3-border w3-sand" name="Restg" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				  <option value="2">Type 3</option>
                </select></p>
                <p>      
                <label class="w3-text-black"><b>Exang</b></label>
                <select class="w3-select w3-border w3-sand" name="Exang" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				 
                </select></p>
				<p>
				<label class="w3-text-black"><b>Slope</b></label>
				   <select class="w3-select w3-border w3-sand" name="Slope" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				  <option value="2">Type 3</option>
                </select>
               </p>
                <p>      
                <label class="w3-text-black"><b>Ca</b></label>
					   <select class="w3-select w3-border w3-sand" name="Ca" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				  <option value="2">Type 3</option>
				   <option value="3">Type 4</option>
				  <option value="4">Type 5</option>
                </select>
               </p>
                   
                
                <p>      
                <label class="w3-text-black"><b>Thal</b></label>
               	   <select class="w3-select w3-border w3-sand" name="Thal"  required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 1</option>
                <option value="1">Type 2</option>
				  <option value="2">Type 3</option>
				   <option value="3">Type 4</option>
				 
                </select></p>
             
                <p>
                <button type="submit"class="w3-btn w3-black">Analyse now</button></p>
              </form>
            </div>
            </div>
      {{ prediction_text }}
    </section>
		<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Premedic Care</h2>
              <p>Far far away, behind the word mountains, far from the countries We're here to provide you good care of your health.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="http://premediccare.rf.gd/mainindex-user.php" class="py-2 d-block">Home</a></li>
                <li><a href="http://premediccare.rf.gd/about-user.php" class="py-2 d-block">About</a></li>
                <li><a href="http://premediccare.rf.gd/departments-user.php" class="py-2 d-block">Departments</a></li>
                <li><a href="http://premediccare.rf.gd/doctors-user.php" class="py-2 d-block">Doctors</a></li>
                <li><a href="http://premediccare.rf.gd/blog-user.php" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">King's Palace 9(a), Kiit University, Patia, Bhubaneshwar,Odisha-751024</span></li>
	                <li><a href="tel:+91 7735866609"><span class="icon icon-phone"></span><span class="text">+91 7735866609</span></a></li>
	                <li><a href="mailto:piyushsinghpk21@yahoo.com"><span class="icon icon-envelope"></span><span class="text">piyushsinghpk21@yahoo.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is developed and maintained with<i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Premedic Team</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <!-- Main JS-->
   

  <script src={{ url_for('static', filename='js/jquery.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery-migrate-3.0.1.min.js') }}></script>
  <script src={{ url_for('static', filename='js/popper.min.js') }}></script>
  <script src={{ url_for('static', filename='js/bootstrap.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.easing.1.3.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.waypoints.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.stellar.min.js') }}></script>
  <script src={{ url_for('static', filename='js/owl.carousel.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.magnific-popup.min.js') }}></script>
  <script src={{ url_for('static', filename='js/aos.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.animateNumber.min.js') }}></script>
  <script src={{ url_for('static', filename='js/bootstrap-datepicker.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.timepicker.min.js') }}></script>
  <script src={{ url_for('static', filename='js/scrollax.min.js') }}></script>
  
  <script src={{ url_for('static', filename='js/google-map.js') }}></script>
  <script  src={{ url_for('static', filename='js/main.js') }}></script>
    
  </body>
</html>
