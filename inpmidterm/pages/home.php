<!DOCTYPE html>
<html>
<head>
	<title>Martial Artswork - Home</title>
	<link rel="shortcut icon" HREF="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/navbc.css">
</head>
<body>
	<div class="wrapper">
	<div class="bgimage">
		<div class="menu">
			<nav>

			    <div class="hamburger">
			    	<div class="line"></div>
			    	<div class="line"></div>
			    	<div class="line"></div>
			    </div>

			    <div class="logod" onclick="home()">
			    </div>
					<script type="text/javascript">
			       function home(){
			         location.href="index.html"
			       }
			    </script>

			    <ul class="nav-links">
					<li><a href="index.html" id="onlink"> HOME </a></li>
					<li><a href="Training.html"> TRAINING </a></li>
					<li><a href="News.html"> NEWS </a></li>
					<li><a href="about us.html"> About US </a></li>
			    </ul>
   			</nav>

		</div>
		<div class="text">
		  <h1> FIGHT | TRAIN | DEFEND </h1>
		  <h4> Push harder than yesterday to make a different tomorrow</h4>
			<div class="ibotton">
		  <a href="Training.html"><button a href="#" target="_blank" id="buttonone"> Learn</button></a>
		 <a href="https://www.facebook.com/groups/141563409300741/"><button id="buttontwo"> Follow Us </button></a>
	 </div>
		</div>
	</div>
	</div>
	<div class="footer">
		<div class="footer-content">
			<div class="footer-sectionone">
				<h1><br>Feel free to ask us anything</br></h1>
				 <h2>If you do like our website submit your feedback in the contact form below</h2>
				<div class="fcontact">
					<span><i/> &nbsp;+91-7045020790</span>
					<span><i/> &nbsp;martialartswork@maybe.com</span>
					<a href="contact.html" style="text-decoration: none">Contact form</a>
				</div>
			</div>
			<div class="footer-sectiontwo">
					<div id="map">
					</div>
			</div>
	  </div>
		<div class="fdown">
			Made by Sarvesh | Shawn | Evita
		</div>

		</div>

	<script src="../jss/nav.js"></script>
	<script>
	function initMap() {
  var uluru = {lat: 19.243400, lng: 72.855832};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
</body>
</html>
