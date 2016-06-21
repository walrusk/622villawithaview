<?php 
$page = 'rooms';
include('_header.php'); ?>

<div class="page-menu">
	<ul>
		<li><i class="fa fa-bed" aria-hidden="true"></i></li>
	</ul>
</div>

<section>

	<h1>Rooms</h1>
	
	<h2>Balcony</h2>
	
	<p>A beautiful balcony with an incredible view. The balcony sliding doors open wide to let that balmy ocean air into the condo.</p>
	
	<?php slideShow(array(
		'view' => 'View from the Balcony',
		'balcony' => 'Dining Area on the Balcony',
		'balcony2' => 'Lounging Area on the Balcony'
	)); ?>
	
	<h2>Living Area</h2>
	
	<p>The living room features gorgeous leather couches and chairs many of which rock back and have flip up foot rests so you can relax and watch the large flat screen TV.</p>
	
	<?php slideShow(array(
		'livingarea' => 'The Living Room and Dining Room',
		'livingarea2' => 'Seating in the Living Room',
		'livingarea3' => 'Inside the Condo from the Balcony',
		'kitchen' => 'The Kitchen'
	)); ?>
	
	<h2>Bedrooms</h2>
	
	<p>Both bedrooms are approximately the same size and they both have comfy king size beds, and closets and dressers for clothes storage. Both bedrooms have flat screen TVs on the wall. There are telephones for local calls and alarm clocks that have iPod docks.</p>
	
	<?php slideShow(array(
		'bedroom1' => 'The Main Bedroom',
		'bedroom2' => 'The Second Bedroom',
		'bathroom' => 'The Main Bathroom',
		'bathroom2' => 'The Second Bathroom'
	)); ?>

	<div class="button-row">
		<a href="index.php#book" class="button">Book A Room</a>
	</div>

</section>

<?php
	function slideShow($images) {
		?>
		<div class="page-slideshow">
			<div>
				<?php foreach($images as $img => $caption): ?>
					<div>
						<img data-lazy="img/slides_condo/<?php echo $img; ?>.jpg" alt="<?php echo $caption; ?>">
						<span class="caption">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $caption; ?>
						</span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
	}
?>

<?php include('_footer.php'); ?>