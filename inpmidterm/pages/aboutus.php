 <!Doctype html>
<html>
<head>
	<title>Martial Artswork - About us</title>
	<link rel="shortcut icon" HREF="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/navbc.css">
	<link rel="stylesheet" type="text/css" href="../style/about.css">
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
					<li><a href="index.html"> HOME </a></li>
					<li><a href="Training.html"> TRAINING </a></li>
					<li><a href="News.html"> NEWS </a></li>
					<li><a href="about us.html" id="onlink"> About US </a></li>
			    </ul>
   			</nav>

		</div>
		<div class="about">
			<p> Our website provides viewers health,fitness and nutrition related advice.through online tutorials,customised dietry charts, and one to one interaction with the experts</p>
<p>This website largely focuses on promoting a healthy body image giving high regards to fitness as the it is a major concern of the 21st centuary. </p>
<p>We provide training videos in martial arts , judo , kickboxing, karate among many others.</p>
<p>A dedicated news page is created on our website to keep our viewers updated thoughout with fitness related articles.
Promoting a healthy mind,body and soul is all our website aims for
Interested viewers can contact us through the following details</p>
		<a href="contact.html">CONTACT US</a>
		</div>
	</div>
</div>
<div class="footer">
  <div class="footer-content">
    <div class="footer-sectionone">
      <h1><br>Feel free to ask us anything</br></h1>
       <h2>If you do like our website submit your feedback in the contact form below</h2>
      <div class="fcontact">
        <span></i> &nbsp;+91-7045020790</span>
        <span></i> &nbsp;martialartswork@maybe.com</span>
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
