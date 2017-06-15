<?php $page_title = "Videography";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<main>

<div>

		<div class="video">


			<video controls poster="images/cedargreen/cgposter1.png">

				<source src="videos/cg1.mp4" />

				<source src="videos/cg1.webm" type="video/webm" />

				<source src="videos/cg1.theora.ogv" type="video/ogg" />

			</video>

		</div>
	</div>

	  <div class="video">


	    <video controls poster="images/cedargreen/poster1.jpg">

	      <source src="videos/video1.mp4" />

	      <source src="videos/video1.webm" type="video/webm" />

	      <source src="videos/video1.theora.ogv" type="video/ogg" />

	    </video>

	  </div>
	</div>

	<div>
	  <div class="video">

	    <video  controls poster="images/cedargreen/poster2.jpg">

	      <source src="videos/video2.mp4" />

	      <source src="videos/video2.webm" type="video/webm" />

	      <source src="videos/video2.theora.ogv" type="video/ogg" />

	    </video>

	  </div>
</div>

<div>
	  <div id="vidbottom" class="video">

	    <video controls poster="images/cedargreen/poster3.jpg">

	      <source src="videos/video3.mp4" />

	      <source src="videos/video3.webm" type="video/webm" />

	      <source src="videos/video3.theora.ogv" type="video/ogg" />

	    </video>

	  </div>
</div>

	 <!-- <div class="video">

	    <video  controls poster="images/cedargreen/poster4.jpg">

	      <source src="videos/video4.mp4" />

	      <source src="videos/video4.webm" type="video/webm" />

	      <source src="videos/video4.theora.ogv" type="video/ogg" />

	    </video>

	  </div> -->
		<?php require_once 'includes/footer.php'; ?>

	  <script src="js/scripts.js"></script>
</main>
</body>
</html>
