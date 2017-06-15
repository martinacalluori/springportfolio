<?php $page_title = "Web";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<main>

		<div class="webpage">

			<figure>
				<a href="http://martinacalluori.com/zodiac/" target="_blank">
					<picture>
						<source media="(max-width: 400px)" srcset="images/zodiac350.jpg">
						<source media="(max-width: 700px)" srcset="images/zodiac400.jpg">
						<source media="(max-width: 800px)" srcset="images/zodiac600.jpg">
						<source media="(min-width: 1100px)" srcset="images/zodiac1000.jpg">
						<img src="images/zodiac600.jpg" alt="Zodiac">
					</picture>
				</a>
				<figcaption class="caption"> Zodiac Calculator </figcaption>
			</figure>

		</div>

</main>

	<script src="js/scripts.js"></script>
</body>
</html>
