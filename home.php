<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	    <link rel="stylesheet" href="css/footer.css">
	    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
	    <script src="https://Kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

		<title>SOLMUSIC</title>
		<link rel="Stylesheet" href="assets/css/indexStyle.css">
	    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
	    <link href='https://fonts.googleapis.com/css?family=Kufam' rel='stylesheet'>
	    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
	    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='Mukta'>     
	</head>
	<body>

	    <div class="logo"><img src="assets/images/index/logo.png" alt="logo"></image></div>

	    <nav >
	    	<ul class="navBarContainer">
		        <li class= "content"><a href="register.php">login/SignUp</a></li>
		        <li class= "content"><a href="homeBrowse.php">Browse</a></li>
		        <li class= "content"><a href="index.html" id="active">Home</a></li>
	        </ul>
	    </nav>

		<div class="slideshow-container">

			<div class="mySlides fade">
			  <img src="assets/images/index/slide1.jpg" style="width:100%; height: 600px">
			  <div class="slide1text">Listen to <br>new music NOW.<br>
	            
	            <a href="register.php" class="button">Try It Now</a>
	          </div>
			</div>   

			<div class="mySlides fade">
			  <img src="assets/images/index/slide2.jpg" style="width:100%; height: 600px">
			  <div class="slide2text">&nbsp;Get Great Music<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOW.<br>
	            
	            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php" class="button">Try It Now</a>
	          </div>		  
			</div>

			<div class="mySlides fade">
			  <img src="assets/images/index/slide3.jpg" style="width:100%; height: 600px">
			  <div class="slide1text">Listen to <br>new music NOW.<br>
	            
	            <a href="register.php" class="button">Try It Now</a>
	          </div>		  
			</div>

		</div>
		<br>

		<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
		</div>

		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 6000); // Change image every 2 seconds
			}
		</script>

		<div class="container1">
	       <table align="center" cellspacing="50">
	            <tr>
	                <td class="leftContainer"><h1>Unlimited Access to 10K+ MUSIC</h1></td>       
	                <td class="rightContainer"><h2>You can access more than 10k music by login to our website for free and can also access to latest MV's which are relised officialy by company's on their websites or on youtube easily.</h2></p>
	                	<p><button onclick="location.href='register.php'" type="Button">Try It Now</button></p>
	                </td>
	         </tr>
	        </table>
	    </div>




	    <div class="table1"><br>
	        <h1 align="center" >Connect with music culture</h1>
	        <table cellspacing="50" align="center" width="1000">
	            <tr>
	                <td>
	                	<div class="flip-card">
						  <div class="flip-card-inner">
						    <div class="flip-card-front">
						      <img src="assets/images/index/kpop.jpg" alt="Avatar">
						      <div class="bottom">K-POP</div>
						    </div>
						    <div class="flip-card-back">
						      <h1>K-POP</h1>
						      <p style="font-size: 20px">K-pop is a genre of popular music originating in South Korea.</p>
						    </div>
						  </div>
						</div>
	                </td>
	                  
	                <td>
	                	<div class="flip-card">
						  <div class="flip-card-inner">
						    <div class="flip-card-front">
						      <img src="assets/images/index/pop1.jpg" alt="Avatar">
						      <div class="bottom">POP</div>
						    </div>
						    <div class="flip-card-back">
						      <h1>POP</h1>  
						      <p>Pop is a genre of popular <br>music that originated in <br>the United States and the United Kingdom</p>
						    </div>
						  </div>
						</div>
	                </td>
	                  
	                <td>
	                  	<div class="flip-card">
						  <div class="flip-card-inner">
						    <div class="flip-card-front">
						      <img src="assets/images/index/Bollywood.jpg" alt="Avatar">
						      <div class="bottom">Bollywood</div>
						    </div>
						    <div class="flip-card-back">
						      <h1>Bollywood</h1> 
						      <p>Bollywood songs, more <br>formally known as Hindi film<br> songs or filmi songs, are songs featured in Bollywood films</p>
						    </div>
						  </div>
						</div>
	                </td>

	                <td>
	                  	<div class="flip-card">
						  <div class="flip-card-inner">
						    <div class="flip-card-front">
						      <img src="assets/images/index/rap.jpg" alt="Avatar">
						      <div class="bottom">Rap</div>
						    </div>
						    <div class="flip-card-back">
						      <h1>Rap</h1>  
						      <p>Rapping is a musical form of vocal delivery that incorporates "rhyme, rhythmic speech, and street vernacular".</p>
						    </div>
						  </div>
						</div>
	                </td>
	            </tr>
	        </table>
	    </div>


	    <br><br><br>


	    <div class= "workContainer">
	    	<h1 align="center" >How it works.</h1>

	        <table cellspacing="50" align="center" width="1000">
		        <tr border="1">
		            <td class="workContainerImage">
		          	    <img src="assets/images/index/noadd_.png" alt="gitter">
		          	    <h2 class="style2">No ad interruptions</h2>
		            </td>

		            <td class="workContainerImage"><br>
			          	<img src="assets/images/index/speaker.jpg" alt="gitter">
			          	<h2 class="style2">High Quality</h2>
		            </td>

		            <td class="workContainerImage">
			          	<img src="assets/images/index/down.jpg" alt="gitter">
			          	<h2 class="style2">Create your playlist</h2>
		            </td>
		        </tr>
	        </table>
	    </div>

	    <footer>
	    	<div class ="footer">
	          
		        <div class="footerImg">
		           <img src="assets/images/index/footerlogo1.png" alt="logo"></image>
		        </div>

		        <div>
		            <table align="center" cellspacing="50">
			            <tr>
			                <td class="footerNav">  

		                        <ul><a class= "navcon">Links</a><br><br>
							        <li class="navContent"><a href="home.php">Home</a></li><br>
							        <li class="navContent"><a href="homeBrowse.php">Browse</a></li><br>
							        <li class="navContent"><a href="register.php">login/SignUp</a></li>
						        </ul>
						    </td>
		                        
					        <td class="contact">
					        	<a >Contact Us:</a><br><br>
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a >+91 9900309062</a><br>
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a >solmusic@gmail.com</a><br>
						        
			                </td>
			            </tr>
		            </table>

		        </div>

		        <div>
		            <div id="social-icons">
		            	<a class="support">Support Us At</a><br>
		              <a href="#" class="icon"><i class="fab fa-facebook facebook"></i> </a>
		              <a href="#" class="icon"><i class="fab fa-twitter twitter"></i> </a>
		              <a href="#" class="icon"><i class="fab fa-instagram instagram"></i> </a>
		              <a href="#" class="icon"><i class="fab fa-google-plus plus"></i> </a>
		            </div>
		        </div>

		    </div>

	    </footer>
	</body>
</html> 