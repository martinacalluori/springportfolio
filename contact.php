<?php $page_title = "Contact";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<div class="contact">
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

			<div class="row">

				<label for="name">Your name:</label><br />

				<input id="name" class="input" name="name" type="text" value="" size="60" /><br />
			</div>
			<div class="row">
				<label for="email">Your email:</label><br />
				<input id="email" class="input" name="email" type="text" value="" size="60" /><br />
			</div>
			<div class="row">
				<label for="message">Your message:</label><br />
				<textarea id="message" class="input" name="message" rows="7" cols="60"></textarea><br />
			</div>
			<input id="submit_button" type="submit" value="Send email" />

	</form>
</div>
<script src="js/scripts.js"></script>


</body>
</html>
