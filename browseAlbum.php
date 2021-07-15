<?php
	include("includes/config1.php");
	include("includes/classes/BrowseArtist.php");
	include("includes/classes/BrowseAlbum.php");
    include("includes/classes/BrowseSong.php");
    include("includes/classes/BrowsePlaylist.php");

?>

<html>
<head>
	<title>Welcome to SoulMusic!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<div id="mainViewContainer">

				<div id="mainContent">
                <?php 
                    if(isset($_GET['id'])) {
                    	$albumId = $_GET['id'];
                    }
                    else {
                    	echo "Id not set";
                    }


                    $album = new Album($con, $albumId);
					$artist = $album->getArtist();
					$artistId = $artist->getId();
					?>

					<div class="entityInfo">

						<div class="leftSection">
							<img src="<?php echo $album->getArtworkPath(); ?>">
						</div>

						<div class="rightSection">
							<h2><?php echo $album->getTitle(); ?></h2>
							<p role="link" tabindex="0" onclick="openPage('artist.php?id=<?php echo $artistId; ?>')">By <?php echo $artist->getName(); ?></p>
							<p><?php echo $album->getNumberOfSongs(); ?> songs</p>

						</div>

					</div>


					<div class="tracklistContainer">
						<ul class="tracklist">
							
							<?php
							$songIdArray = $album->getSongIds();

							$i = 1;
							foreach($songIdArray as $songId) {

								$albumSong = new Song($con, $songId);
								$albumArtist = $albumSong->getArtist();

								echo "<li class='tracklistRow'>
										<div class='trackCount'>
											<img class='play' src='assets/images/icons/play-white.png' onclick='setTrack(\"" . $albumSong->getId() . "\", tempPlaylist, true)'>
											<span class='trackNumber'>$i</span>
										</div>


										<div class='trackInfo'>
											<span class='trackName'>" . $albumSong->getTitle() . "</span>
											<span class='artistName'>" . $albumArtist->getName() . "</span>
										</div>

										<div class='trackOptions'>
											<input type='hidden' class='songId' value='" . $albumSong->getId() . "'>
											<img class='optionsButton' src='assets/images/icons/more.png' onclick='showOptionsMenu(this)'>
										</div>

										<div class='trackDuration'>
											<span class='duration'>" . $albumSong->getDuration() . "</span>
										</div>


									</li>";

								$i = $i + 1;
							}

							?>

							<script>
								var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
								tempPlaylist = JSON.parse(tempSongIds);
							</script>

						</ul>
					</div>

				</div>


			</div>

		</div>

		<?php include("includes/nowPlayingBar.php"); ?>

	</div>

</body>

</html>