<?php
	
function slideShow($folder, $images) {
	?>
	<div class="page-slideshow">
		<div>
			<?php foreach($images as $img => $caption): ?>
				<div>
					<img data-lazy="img/<?php echo $folder; ?>/<?php echo $img; ?>.jpg" alt="<?php echo $caption; ?>">
					<span class="caption">
						<i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $caption; ?>
					</span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
}