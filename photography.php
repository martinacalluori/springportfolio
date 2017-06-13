<?php $page_title = "Photography";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>


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

						while ($row = mysqli_fetch_assoc($result)){
							echo '<a href="fullsize.php?id=';
							echo $row['id'];
							echo '&band=';
							echo urlencode($row['band']);
							echo '"> ';
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
