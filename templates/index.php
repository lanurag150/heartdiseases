<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Premedic-Heart Disease Analysis</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="{{ url_for('static', filename='css/small-device.css') }}" />
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
	   <style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
	  </style>
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
          <li class="nav-item"><a href="http://premediccare.rf.gd/doctors-user.php" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/blog-user.php" class="nav-link">Blog</a></li>      
 </ul>
        <div class="dropdown" style="float:right;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION['Name'] ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <a class="dropdown-item" href="http://premediccare.rf.gd/profile-user.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Profile</a>
  <a class="dropdown-item" href="http://premediccare.rf.gd/myblogs-user.php"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;My blogs</a>
    <a class="dropdown-item" href="http://premediccare.rf.gd/dashboard-user.php"><i class="fa fa-upload fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
    <a class="dropdown-item" href="http://premediccare.rf.gd/logout.php" style="color:red;"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Log Out</a>
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
   
      <div class="container col-lg-6"  >
          
          
            <div class="w3-card-4" style="max-width:550px;margin: auto;background-color:White; ">
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
	      <a href="http://premediccare.rf.gd/recommedation.php" target="_top" align="right">  <button class="button button1">Recommend</button></a>

    </section>
		<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    </section>
	  <section class="ftco-section contact-section ftco-degree-bg" style="height: 1500px;background-color:White;">
		   <div class="row justify-content-start mb-5 pb-3 mt-5">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Top Hospitals in India</h2>
		          </div>
		        </div>
            <div class="row">
            	<div class="col-md-6 ftco-animate">
			          <div class="block-2">
			            <div class="flipper">
			              <div class="front" style="background-image: url('{{ url_for('static', filename='images/fortis.jpg') }}'); ">
			                <div class="box">
			                  <h2>Fortis Escorts Heart Institute and Research Center</h2>
			                  <p><b>Address:</b>Okhla Road, New Delhi - 110 025 (INDIA)</p>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                  <pre><b>Salient Features</b>
200 expert doctors and 1600 qualified employees
Hi-tech technology such as Dual CT Scan
More than 14,000 patient admissions and 7000 emergency patients handled each year
Around 285 hospital beds with full occupancy
5 equipped Cath labs
First of its kind E-ICU in India
</pre>
					<pre><b>Esteemed panel of Doctors</b>
Dr. Ashok Seth, Cardiologist
Dr. Ashok Kumar Omar, Cardiologist (Non-invasive)
Dr. S.N. Khanna, Cardiac Surgeon
Dr. Z.S. Meharwal, Surgeon (Cardiovascular)
</pre>
			                </blockquote>
			          	</div>
			            </div>
			          </div> <!-- .flip-container -->
			        </div>
			        <div class="col-md-6 ftco-animate">
			          <div class="block-2">
			            <div class="flipper">
			              <div class="front" style="background-image: url('{{ url_for('static', filename='images/asian.jpg') }}'); ">
			                <div class="box">
			                  <h2>Asian Heart Institute</h2>
			                  <p><b>Address:</b>G / N Block, Bandra Kurla Complex,Bandra (E), Mumbai 400 051, Maharashtra, INDIA.</p>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                 <pre><b>Salient Features</b>
Close to 2.5 lakhs patients treated till date
33,000 angiographies done
22,000 surgeries performed
18,000 bypass patients provided with surgery
Success rate of 99.3% with regards to bypass surgeries
Success rate of 99.83% with regards to Cardiac Surgeries</pre>
					<pre><b>Esteemed panel of Doctors</b>
Dr. Ramakanta Panda, Surgeon (Cardiothoracic & Vascular)
Dr. Tilak Suvarna, Cardiologist (Interventional)
Dr. Prafulla Kerkar, Cardiologist
Dr. Sunil Vanzara, Surgeon (Cardiothoracic & Vascular)	</pre>
 
			                </blockquote>
			   
			            </div>
			            </div>
			          </div> <!-- .flip-container -->
			        </div>
		     <div class="col-md-6 ftco-animate">
			          <div class="block-2">
			            <div class="flipper">
			              <div class="front" style="background-image: url('{{ url_for('static', filename='images/apollo.jpg') }}'); ">
			                <div class="box">
			                  <h2>Apollo Hospitals,Greams Lane</h2>
			                  <p><b>Address:</b>No. 21, Greams Lane,Off.Greams Road, Chennai - 600006</p>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                 <pre><b>Salient Features</b>
More than 1,40,000 heart surgeries performed till date
Success rate of 99.6% achieved
Dedicated and well equipped CCUs in 1:1 ratio.
Latest diagnostic and medical equipment used
Expert team of surgeons and doctors
Saving a child's heart initiative for serving underprivileged.</pre>
					<pre><b>Esteemed panel of Doctors</b>
Dr. Amal Louis, Cardiologist
Dr. Guru Prasad Sogunuru, Cardiology specialist
Dr. Y. Vijaychandra Reddy, Cardiologist (Interventional)
Dr. Asha Mahilmaran, Cardiologist</pre>
 
			                </blockquote>
			   
			            </div>
			            </div>
			          </div> <!-- .flip-container -->
			        </div>
		    <div class="col-md-6 ftco-animate">
			          <div class="block-2">
			            <div class="flipper">
			              <div class="front" style="background-image: url('{{ url_for('static', filename='images/nanavati.jpg') }}'); ">
			                <div class="box">
			                  <h2>Nanavati Super Speciality Hospital,</h2>
			                  <p><b>Address:</b>Swami Vivekanand Rd,LIC Colony,Suresh Colony, Vile Parle West,Mumbai, Maharashtra 400056</p>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                 <pre><b>Salient Features</b>
Highly advanced diagnostic facilities like MrgFUS.
First of its kind fully functional cardiac catheterization lab
Advanced techniques like minimal access bypass surgery
Facilities for patients visiting from abroad
I.C.C.U for heart patients requiring critical care</pre>
					<pre><b>Esteemed panel of Doctors</b>
Dr. Harish Mohanty - Cardiologist
Dr. Akshay Mehta - Cardiologist
Dr. Mahesh Shah - Cardiologist
Dr. Lekha Pathak - Cardiologist
Dr. Rajiv Bhagwat - Cardiologist
			                </blockquote>
			   
			            </div>
			            </div>
			          </div> <!-- .flip-container -->
			        </div>

            </div>
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
            	<h2 class="ftco-heading-2">Have a Question?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">King's Palace 9(a), Kiit University, Patia, Bhubaneshwar,Odisha-751024</span></li>
	                <li><a href="tel:+91 7735866609"><span class="icon icon-phone"></span><span class="text">+91 9798428466</span></a></li>
	                <li><a href="mailto:ankitaditya02@gmail.com"><span class="icon icon-envelope"></span><span class="text">ankitaditya02@gmail.com</span></a></li>
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
