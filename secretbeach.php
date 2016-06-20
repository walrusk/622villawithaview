<?php 
$page = 'attractions';
include('_header.php'); ?>

<div class="page-menu">
	<ul>
		<li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
	</ul>
</div>

<section>

	<h1>Secret Beach</h1>
	
	<article>
		
		<?php slideShow(array(
			'Beach' => 'The beautiful Secret Beach',
			'Beach2' => 'Relax in Paradise',
			'Coral' => 'Breathtaking Coral',
			'Fish' => 'Millions of Fish',
			'Turtle' => 'An Inquisitive Turtle'
		)); ?>
		
		<p>These are some of the photos that we have taken personally with our underwater cameras. We do not have to go very deep to see these sights. Most of them were taken while just snorkelling. The dive shop on Secret Harbour Beach sells a marvellous book that shows you exactly where the best snorkelling spots are on St Thomas or on St John. If you are more adventurous the dive shop does also have an "experienced scuba program" that will let you try it with just minimal instruction and with an experienced dive master. Another awesome place to just try scuba is at Coki Beach where there is a reef just off the shore and the dive shop there will teach you in the shallows and then you swim out a bit and onto the reef. Lots of amazing sights down under there and actually not that scary. When snorkelling at Coki beach take some dog biscuits with you and the fish will actually nibble on them right out of your hands. Amazingly tame:)</p>
		
		<p>It is less scary than you think and since you don't go that deep so you are not going to get the bends or anything that scary. That is only when you go too deep or stay down too long. <a href="http://www.cokidive.com" target="_blank">www.cokidive.com</a>  Do a 2nd dive at Secret.</p>
		
		<div class="image-block">
		
			<img src="img/attractions/Pool.jpg" alt="Secret Beach">
		
			<p>You can also take advantage of our onsite tennis court and freshwater pool, or just relax on our white sand beach.</p>
			
			<p>The Aqua Action Dive and Watersports Center, will satisfy your craving for adventure with an array of water sport rentals, scuba/snorkeling excursions, fishing charters and other exciting excursions around the Virgin Islands. Aqua Action is a PADI Five Star facility licensed to train SCUBA Diving Instructors. If you are not a certified scuba diver, but always dreamed of diving, they can schedule a session with one of their professional instructors. In just two hours you will be enjoying the amazing world under the surface. Their dive centre is proud to be the only HSA (Handicapped Scuba Association) certified dive shop in the Virgin Islands, and offers a variety of dive programs for the physically challenged. Call the Aqua Action Dive & Water sports Centre for pricing and details at (340) 775-6285, or visit their website. For the certified scuba diver, they offer daily two tank boat dives that leave from Secret Harbour and head out to explore some of our beautiful St. Thomas and St. John reefs.  Night dives available upon request. </p>
			<p>You can also venture out from the shore of our beautiful beach to snorkel among the vibrant sea creatures on the nearby coral reef – rated as one of the best places for snorkelling on the island. Aqua Action are also happy to help plan additional excursions including fishing charters, romantic sunset cruises, kayaking tours and more! With some of the Caribbean's most beautiful waters, Aqua Action offers the perfect opportunity to get out into the ocean and explore the colourful reefs and aquatic life that call this island paradise home. From kayaks to stand up paddle boards, parasailing and more, their onsite dive shop has everything you need to create your dream Caribbean vacation. We usually bring our own flippers, goggles and snorkels and explore on our own when it comes to snorkelling.  Private and group paddle board lessons are offered by professional Instructors from Bluewater Safaris by appointment, and can be reached directly at (340) 774-9436. You can also rent boards by the hour, half-day and or a full-day at the Aqua Action Dive Shop located right on the beach.</p>
			
		</div>
		
	</article>
	
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
						<img data-lazy="img/slides_secretbeach/<?php echo $img; ?>.jpg" alt="<?php echo $caption; ?>">
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