 <!Doctype html>
<html>
<head>
	<title>Martial Artswork - Training</title>
	<link rel="shortcut icon" HREF="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/navbc.css">
    <link rel="stylesheet" type="text/css" href="../style/train.css">
</head>
<body>
	<div class="wrapper">
	<div class="bgimage1">
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
					<li><a href="Training.html" id="onlink"> TRAINING </a></li>
					<li><a href="News.html"> NEWS </a></li>
					<li><a href="about us.html"> About US </a></li>
			    </ul>
   			</nav>

		</div>
		<div class="bigdiv">
			<div class="ft">
			  <div class="thefront">
          <div class="ftimage1">
          </div>
					<div class="ftt1">
						<h1>FIGHT AND TRAIN</h1>
					</div>
			    </div>
					<div class="theback">
						<div class="matter">
							<h1>Learn about the basic techniques of martial arts. Hit the Learn more button to know more about Fight and train..</h1>
							<a href="f&t.html"><button a href="f&t.html" target="_blank" id="buttonn"> Learn more</button></a>
						</div>
					</div>
			</div>
			<div class="ft">
				<div class="thefront">
          <div class="ftimage2">
          </div>
					<div class="ftt1">
						<h1>SELF DEFENCE</h1>
					</div>
			    </div>
				<div class="theback">
					<div class="matter">
							<h1>Learn about the lastest Self-Defense techniques on this page. Also find the right move about your favourite fighting style. Hit the Learn more button to know more about Self-Defense..</h1>
							<a href="self-def.html"><button a href="self-def.html" target="_blank" id="buttonn"><span> Learn more</span></button></a>
					</div>
				</div>
			</div>
			<div class="ft">
				<div class="thefront">
          <div class="ftimage3">
          </div>
						<div class="ftt1">
							<h1>NUTRITION</h1>
					    </div>
			    </div>
				<div class="theback">
					<div class="matter">
							<h1>To develop a healthy nutritional program that not only aids in weight loss or gain but improves ones well being, aids in quick recovery from illness, reduces risk of diseases among many others.Hit the Learn more button to know more about Nutrition</h1>
							<a href="nutri.html"><button a href="nutri.html" target="_blank" id="buttonn"> Learn more</button></a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<div class="footer">
  <div class="footer-content">
    <div class="footer-sectionone">
      <p>Feel free to ask us anything . We are engineers ,so we are jobless anyways.</p>
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
