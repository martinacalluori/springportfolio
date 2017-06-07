<?php require_once 'includes/config.php'; ?>

<?php
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	} else {
	$id = rand(1, 9);
	}
	if (isset($_GET['band'])) {
	$band = $_GET['band'];
	} else {
	$band = rand(1, 9);
	}


?>

<!DOCTYPE html>
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
					 <!-- <li><a href="aboutme.html">About Me</a> </li> -->
					 <li><a href="projects.html">Projects</a> <!-- <li><a href="designs.html"></a>Designs</li> -->
					 </li>
					 <li><a href="resume.html">Resume</a></li>
					<li><a href="contact.html"> Contact</a> </li>
				</ul>

			</nav>
		</header>
	</div>
</div>

<main>



<?php
		$query = "SELECT * FROM pictures WHERE band ='$band'"; //Change to 12 when database complete & band = "Pvris"
		$result = mysqli_query($connection, $query);
		echo "<h2>";
		echo $band;
		echo "</h2>";


		while ($row = mysqli_fetch_assoc($result)) {
?>




		<img src=<?php echo $row['filepath'] ?> alt="full size image" class="large">


	<?php
		}
		mysqli_free_result($result);
		?>

		<?php
			mysqli_close($connection);
		?>

		<script src="js/scripts.js"></script>

</main>

</body>
</html>
