<?php $page_title = "Photography";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photography</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Open+Sans|Raleway|Rosario" rel="stylesheet">
 <noscript>
    <style>
      .visually-hidden {
        clip: none;
        height: auto;
        display: block !important;
        width: auto;
        overflow: auto;
        position: static;
      }
    </style>
  </noscript>

</head>
<body>

<div class="header">
	<div class="row-nav">
		<header>
			<nav>

		        <img src="images/burger.png" alt="hamburger menu" width="50" height="50" class="ham-menu">

				<ul id="nav-list" class="visually-hidden">
					 <li><a href="index.html">Home</a> </li>
					 <li><a href="photography.php">Photography</a>
					 </li>
					 <li><a href="resume.html">Resume</a></li>
					<li><a href="contact.html"> Contact</a> </li>
				</ul>

			</nav>
		</header>
	</div>
</div> -->

<main>
	 <ul class="photo-container">

			<li class="photo">
				<picture>
					<?php
						$query = "SELECT * FROM pictures WHERE home = 1";
						$result = mysqli_query($connection, $query);
						if (!$result) {
							die ("Database query failed");
						}

						// $bottle = $row['band'];

						while ($row = mysqli_fetch_assoc($result)){
							echo '<a href="fullsize.php?id=';
							echo $row['id'];
							echo '&band=';
							// echo $row['band'];
							echo urlencode($row['band']);
							echo '"> ';
							// echo "<li class='photo'";
							// echo "'>";
							echo '<img src="';
							echo $row['filepath'];
							echo '"';
							echo ' alt="' . $row['alttag'] . '"';
							echo ' class="' . $row['class'] . '"';
							echo ' />';
							echo "</li>";
							echo '</a>';
						}
					?>


				</picture>

			</li>

		</ul>

	<?php
	mysqli_close($connection);
	?>
		<script src="js/scripts.js"></script>
</main>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>
