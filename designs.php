<?php $page_title = "Designs";?>

<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<main>

  <ul class="photo-container">

     <li class="photo">
       <picture>
         <?php
           $query = "SELECT * FROM designs WHERE home = 1";
           $result = mysqli_query($connection, $query);
           if (!$result) {
             die ("Database query failed");
           }

           while ($row = mysqli_fetch_assoc($result)){
             echo '<a href="fulldesign.php?id=';
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


 <!-- <ul class="photo-container">

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/cg1525.png">

						<img src="images/designs/cg1.jpg" alt="Cedar Green">
					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/cg3525.png">

						<img src="images/designs/cg3.jpg" alt="Cedar Green">

					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/cg2525.png">

						<img src="images/designs/cg2.jpg" alt="Cedar Green">
					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/atm1525.png">
						<img src="images/designs/atm1.jpg" alt="Above the Mendoza">
					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/atm2525.png">
						<img src="images/designs/atm2.jpg" alt="alphabet soup design for Above The Mendoza">
					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/atm3525.png">
						<img src="images/designs/atm3.jpg" alt="Above the Mendoza">
					</picture>
				</li>

				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/tt2525.png">

						<img src="images/designs/tt2.jpg" alt="Tied & True">
					</picture>
				</li>
				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/tt3525.png">

						<img src="images/designs/tt3.jpg" alt="Tied & True">
					</picture>
				</li>


				<li class="photo">
					<picture>
						<source media="(min-width: 1600px)" srcset="images/designs/tt1525.png">
						<img src="images/designs/tt1.jpg" alt="Tied & True">
					</picture>
				</li>
			</ul>
<script src="js/scripts.js"></script> -->

</main>

</html>
