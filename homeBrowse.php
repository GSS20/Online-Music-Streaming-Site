<?php 

	include("includes/config1.php");

?>


	<html>
	<head>
		<title>Welcome to SoulMusic!</title>

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/browseStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/script.js"></script>
	</head>

	<body>

        <div>
	       <table align="center" cellspacing="10">
	            <tr>
	                <td class="leftNavContainer"><div class="logo"><img src="assets/images/index/blacklogo.png" alt="logo"></image></div></td>                         
	                <td class="rightNavContainer">
	                     <nav >
					    	<ul class="navBarContainer">
						        <li class= "content"><a href="register.php">login/SignUp</a></li>
						        <li class= "content"><a href="browse.php" id="active">Browse</a></li>
						        <li class= "content"><a href="home.php">Home</a></li>
					        </ul>
					    </nav>
	                </td>
	         </tr>
	        </table>
	    </div>

		<div id="mainContainer">

			<div id="topContainer">

				<div id="mainViewContainer">

					<div id="mainContent"> 
                         <br>
						<h1 class="HeadingBig">Discover Your Favourite Albums!</h1><br><br>
						
					<?php
						$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

						while($row = mysqli_fetch_array($albumQuery)) {
			



							echo "<div class='gridViewItem'>
									<a href='browseAlbum.php?id=" . $row['id'] . "'>
										<img src='" . $row['artworkPath'] . "'>

										<div class='gridViewInfo'>"
											. $row['title'] .
										"</div>
									</a>

								</div>";



						}
					?>

				    </div>


			     </div>

		    </div>

		<?php include("includes/nowPlayingBar.php"); ?>

</body>

</html>



