<?php $page_title = "Gallery";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	} else {
	$id = rand(1, 9);
	}
	if (isset($_GET['band'])) {
	$band = $_GET['band'];
	} else {
	$band = rand(1, 5);
	}


?>

<?php require_once 'includes/header.php'; ?>

<main>



<?php
		$query = "SELECT * FROM designs WHERE band ='$band'"; //Change to 12 when database complete & band = "Pvris"
		$result = mysqli_query($connection, $query);
		echo "<h2>";
		echo $band;
		echo "</h2>";


		while ($row = mysqli_fetch_assoc($result)) {
?>

		<img src=<?php echo $row['filepath'] ?> alt=<?php echo $row['band'] ?> class="large">

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
