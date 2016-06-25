<form method="post" action="_contact.php" class="booking_form">
	<div class="form-row">
		<span>Number of Bedrooms Needed</span>

		<div class="radio-columns">
			<label>
				<input type="radio" name="c_bedrooms" value="1" checked="checked">
				<span class="room-bedrooms">1 Bedroom</span>
				<small class="room-sleeps">Sleeps 4</small>
				<span class="room-price">from $235 USD / night</span>
			</label>
			<label>
				<input type="radio" name="c_bedrooms" value="2">
				<span class="room-bedrooms">2 Bedrooms</span>
				<small class="room-sleeps">Sleeps 6</small>
				<span class="room-price">from $400 USD / night</span>
			</label>
		</div>
	</div>
	<div class="form-row form-row-columns">
		<label>
			<span>Name</span>
			<input type="text" name="c_name">
		</label>
		<label>
			<span>Phone Number</span>
			<input type="tel" name="c_phone">
		</label>
	</div>
	<div class="form-row form-row-columns">
		<label>
			<span>Email</span>
			<input type="email" name="c_email">
		</label>
		<label>
			<span>Number of Guests</span>
			<input type="number" name="c_guests" min="1" max="6" value="2">
		</label>
	</div>
	<div class="form-row">
		<span>Requested Dates</span>
		<label>
			<small class="fromto">from</small>
			<input type="date" name="c_date_start" min="<?php echo date('Y-m-d'); ?>">
		</label>
		<label>
			<small class="fromto">to</small>
			<input type="date" name="c_date_end" min="<?php echo date('Y-m-d'); ?>">
		</label>
	</div>
	<div class="form-row">
		<label>
			<span>Comments or Questions</span>
			<textarea name="c_comments"></textarea>
		</label>
	</div>
	<div class="form-row">
		<button type="submit">Send</button>
	</div>
</form>

<div class="booking_form_status" style="display:none;"></div>
