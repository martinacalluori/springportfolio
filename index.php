<?php $page_title = "Home";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>
<main>

		<div class="headerimg">
	   		 <picture>
	   		 	<source media="(min-width: 1200px)" srcset="images/catfish1200.jpg">
	   			 <source media="(min-width: 800px)" srcset="images/catfishlarge.jpg">
	   		 	 <source media="(min-width: 600px)" srcset="images/catfish600.jpg">
	   		 	 <source media="(min-width: 400px)" srcset="images/catfish400.jpg">
	   		 	 <source media="(min-width: 200px)" srcset="images/catfish200.jpg">
				 <img id="catfish" src="images/catfish.jpg" alt="Catfish & The Bottlemen">

			</picture>
		</div>

<div class="wrapper">
<h2 class="head2">
	About Me
</h2>

	  <aside class="bodytext">
	    <div>
	    	<p>
						My name is Martina Calluori, in 2015 I graduated from Bethlehem Catholic High School, and went on my way to Drexel University. I got to Drexel and found very quickly that I was in a place that I have wanted to be my whole life. I am an Interactive Digital Media Major and I think choosing that major was one of the best decisions of my life. Here, I am able to pursue my interests in design and code, and feed my passion for creating.
					 </p>
	    </div>
	    <div >
	    	<p>
						To know a little about my personal life, I have a dog named Bentley and he has been my best friend for 13 years. I have a mom and a dad, and two great step parents, and between the four of them they raised me. I have two step sisters between my mom and my step dad, they're 25 and 29. Animals are super important to me and a lot of my creativity and inspiration comes from them. Also, I have a lot of plants. I have two cacti, and 9 various types of succulents that I love and care for every day.
					</p>
	    </div>
	</aside>
</div>
	 <aside class="aside aside-1">
		<div class="photo-container">

			<picture>
				<source media="(max-width: 600px)" srcset="images/me400.png">
				<source media="(max-width: 900px)" srcset="images/me200.jpg">
				<source media="(max-width: 1400px)" srcset="images/me300.jpg">
				<img src="images/me2.jpg" alt="Me">
			</picture>

			<picture>
				<source media="(max-width: 600px)" srcset="images/succulents.jpg">
				<source media="(max-width: 900px)" srcset="images/succulents200.jpg">
				<source media="(max-width: 1400px)" srcset="images/succulents300.png">
				<img src="images/succulents.JPG" alt="My plants">
			</picture>

			<picture>
				<source media="(max-width: 600px)" srcset="images/bentley400.png">
				<source media="(max-width: 900px)" srcset="images/bentley200.jpg">
				<source media="(max-width: 1400px)" srcset="images/bentley300.jpg">
				<img src="images/bentley.jpg" alt="My dog Bentley">
			</picture>
		</div>
	</aside>
	<?php require_once 'includes/footer.php'; ?>
	<script src="js/scripts.js"></script>
</main>
</body>
</html>
