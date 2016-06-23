<?php 
$page = 'index';
include('_header.php'); ?>

<div class="home-slideshow">
	<div><img src="img/view1.jpg" alt=""></div>
	<div><img src="img/view2.jpg" alt=""></div>
</div>

<div class="page-menu">
	<ul>
		<li><a href="rooms"><i class="fa fa-bed" aria-hidden="true"></i><span>Rooms</span></a></li>
		<li><a href="directions"><i class="fa fa-map-o" aria-hidden="true"></i><span>Directions</span></a></li>
		<li><a href="attractions"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Attractions</span></a></li>
		<li><a href="dining"><i class="fa fa-cutlery" aria-hidden="true"></i><span>Dining</span></a></li>
	</ul>
</div>

<section class="book">
	<h3 id="book">Book a Room</h3>
	<?php include('_book.php'); ?>
</section>

<section class="weather">
	<h3>Weather Forecast</h3>
	
	<ul>
	</ul>
	
	<a href="#" class="switch_degrees">Switch to &deg;C</a>
</section>

<?php include('_footer.php'); ?>