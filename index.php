<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding-top: 100px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%;  /*Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
	  
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
	  width: 230px;
	  height: auto;
      border: none;
      border-radius: 0;
	  padding: 0;
  }

  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 4px;
      opacity: 0.9;
	  padding: 20px;
	  
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  #logo {
	  max-width: 180px;
	  margin-top: -125px;
	  margin-left: -55px;
  }
  #myCarousel{
	  top: 90px;
  }
  #socialM{
	  width: 30px;
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
		<img class="img-responsive" src="logo.png" alt="logo" id="logo" />
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">COACHES</a></li>
        <li><a href="#tour">GALERY</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown disabled">
          <a class="dropdown-toggle disabled" data-toggle="dropdown" href="#">MORE
          <span class="caret disabled"></span></a>
          <ul class="dropdown-menu disabled">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gym1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ovde moze tipa naslov ya text ispod</h3>
          <p>Ovde moze neki text i i ne mora :D</p>
        </div>      
      </div>

      <div class="item">
        <img src="gym2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ovde moze tipa naslov ya text ispod</h3>
          <p>Ovde moze neki text i i ne mora :D</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="gym3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ovde moze tipa naslov ya text ispod</h3>
          <p>Ovde moze neki text i i ne mora :D</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Treners) -->
<div id="band" class="container text-center">
  <h3>PERSONALNI TRENERI</h3>
  <p><em>We love to train!</em></p>
  <p>Trening sa personalnim trenerom se ne može uporediti ni sa jednim vašim treningom koji ste sami odradili. Dobijate svog partnera za trening čiji je jedini zadatak da vas motiviše i da postignete rezultate koje želite.
		Bez obzira na to da li želite da  povećete mišićnu masu , da postanete zvezda na podijumu za igru, poboljšate zamah u golfu ili bolje vreme u sledećem maratonu , naši lični treneri vam mogu pomoći u tome . Takođe možete dobiti pomoć sa rehabilitacijom od povreda ili sprečavanje problema.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Aleksandar</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="aca1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Bodibilding, fitnes i power lifting trener</p>
        <p>jos nesto o njemu</p>
        <p>Vlasnik teretane</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Predrag</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="peda1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Bodibilding i fitnes trener</p>
        <p>jos nesto o njemu</p>
        <p>Član od 2013</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Miodrag</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="mile1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bodibilding i fitnes trener</p>
        <p>jos nesto o njemu</p>
        <p>Član od 2013</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (GALERY) -->
<div id="tour" class="bg-1">
	<div id="galery" class="container text-center">
		<center><div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">GALERY</h2>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika1">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="aca.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika2">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="peda.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika3">
				<div class="thumbnail">
					<img class="img-responsive" src="mile.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika4">
				<div class="thumbnail">
					<img class="img-responsive" src="aca.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika5">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="peda.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika6">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="mile.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika7">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="aca.jpg" alt=""/>
				</div>
			</div>
			<div class="col-lg-3 col-md-4  col-xs-12" data-toggle="modal" data-target="#slika8">
				<div class="thumbnail">
					<img class="img-responsive" style="display: block;" src="peda.jpg" alt=""/>
				</div>
			</div>
		</div> </center>
	<!-- Modals-->
		<!-- Modal SLIKA 1-->
		<div class="modal fade" id="slika1" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Coa</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="aca.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA1-->
		<!--Modal SLIKA2-->
		<div class="modal fade" id="slika2" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Peda</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="peda.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA2-->
		<!--Modal SLIKA3-->
		<div class="modal fade" id="slika3" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">leMi</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="mile.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA3-->
		<!--Modal SLIKA4-->
		<div class="modal fade" id="slika4" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">coa</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="aca.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA4-->
		<!--Modal SLIKA5-->
		<div class="modal fade" id="slika5" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Peda</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="peda.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA5-->
		<!--Modal SLIKA6-->
		<div class="modal fade" id="slika6" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">leMi</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="mile.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA6-->
		<!--Modal SLIKA7-->
		<div class="modal fade" id="slika7" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">coa</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="aca.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA7-->
		<!--Modal SLIKA8-->
		<div class="modal fade" id="slika8" role="dialog"> 
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Peda</h4>
					</div>
					<div class="modal-body">
						<center><img class="img-responsive" src="peda.jpg" id="modal-img" style="width: 700px;"/> </center>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--Modal END SLIKA8-->
	<!-- Modals end-->
	</div>
</div>
<!-- Container (GALERY END) -->

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Za sve informacije posetite nas na društvenim mrežama ili nam pišite.</em></p>

  <div class="row">
    <div class="col-sm-6 col-sm-3">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Paracin, SRB</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefon: +381 621012408</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: spartacus@mail.com</p>
    </div>
	<div class="col-sm-6 col-sm-3">
      
      <p>
			<a href="https://www.facebook.com/Spartacus-Extreme-1631240810490685/?fref=ts">
				<img class="img-responsive" src="face.png" alt="face" id="socialM" />
			</a>
	  </p>
      <p>
			<a href="https://www.instagram.com/spartacus_extreme/">
				<img class="img-responsive" src="insta.png" alt="instagram" id="socialM" />
			</a>
	  </p>
      <p class="disabled">
			<a href="#myPage disabled">
				<img class="img-responsive disabled" src="youtube.png" alt="youtube" id="socialM" />
			</a>
	  </p>
    </div>
    <div class="col-xs-12 col-lg-6">
	<form method="post" name="emailform" action="form-to-email.php">
      <div class="row">
        <div class="col-md-6 form-group">
          <input for="name" class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-md-6 form-group">
          <input for="email" class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea for="message" class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button value="submit" class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
	  </form>
    </div>
  </div>
  <br>
  

  
</div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
      function initMap() {
        var uluru = {lat: 43.854060, lng: 21.396925};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 15,
          center: uluru,
		  scrollwheel:false,
		  draggable:false,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
		
      }
    </script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO58A3m48z8K58_CTvs2g7GWlWaUkDcPM&callback=initMap"></script>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>This Site Made By: <a href="https://www.facebook.com/nemanja.ilic.1293" data-toggle="tooltip" title="neca :D"><mark>Nemanja</mark></a></p> 
  <p>Copyright © 2017 Spartacus.rs Sva prava zadržana.</p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
