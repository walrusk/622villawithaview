$('.home-slideshow').slick({
	autoplay: true,
	autoplaySpeed: 20000,
	arrows: true,
	speed: 300,
	swipeToSlide: true,
	pauseOnHover: false,
	lazyLoad: 'progressive',
	adaptiveHeight: true
});

$('.condo-slideshow > div').slick({
	autoplay: true,
	autoplaySpeed: 10000,
	arrows: true,
	speed: 300,
	swipeToSlide: true,
	pauseOnHover: false,
	lazyLoad: 'progressive'
});

// RADIO COLUMNS CLASS
$('.radio-columns input').on('change',function(){
	$(this).parents('.radio-columns').find('label').removeClass('radio-selected');
	$(this).parents('label').addClass('radio-selected');
});

// WEATHER
$.simpleWeather({
	location: 'Austin, TX',
	woeid: '',
	unit: 'f',
	success: function(weather) {
		var weather_ul = $('.weather ul');
		var forecast_days = 5;
		if(weather.forecast.length >= forecast_days) {
			for(var i=0;i<forecast_days;i++) {
				var day = weather.forecast[i].day;
				if(i == 0) day = 'Today';
				weather_ul.append('<li><span class="day">'+day+'</span><i class="icon-'+weather.forecast[i].code+'"></i><span class="high">'+weather.forecast[i].high+'&deg;F</span><span class="high_alt" style="display:none;">'+weather.forecast[i].alt.high+'&deg;C</span></li>');
			}
		} else {
			$('.weather').hide();
		}
		
	},
	error: function(error) {
		$('.weather').hide();
	}
});

var current_degrees = 'F';
$('.switch_degrees').on('click',function(event){
	event.preventDefault();
	
	if(current_degrees == 'F') {
		$(this).html('Switch to &deg;F');
		current_degrees = 'C';
		$('.weather .high').hide();
		$('.weather .high_alt').show();
	} else {
		$(this).html('Switch to &deg;C');
		current_degrees = 'F';
		$('.weather .high_alt').hide();
		$('.weather .high').show();
	}
	
});

// CONTACT FORM
var form = $('.booking_form');

$('input,textarea',form).on('focus',function(){
	$(this).removeClass('error');
});

form.on('submit',function(event){
	event.preventDefault();

	var form = $(this);

	
	// CHECK FORM FOR ERRORS
	var fields_with_errors = [];
	var required_field_names = ['c_name','c_phone','c_email','c_guests','c_date_start','c_date_end'];
	
	$.each(required_field_names, function(index,field_name){
		var $field = $('input[name='+field_name+']',form);
		if($field.val() == '') {
			fields_with_errors.push($field);
		}
	});
	
	// DISPLAY ERRORS OR CONTINUE
	if(fields_with_errors.length > 0) {
		
		form_status('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Please fill in all required fields.', 'error');
		
		$.each(fields_with_errors, function(index,$field){
			$field.addClass('error');
		});
		
	} else { // no errors
		
		// SUBMIT FORM
		var booking_fields = {};
		$('input,textarea',form).each(function(){
			booking_fields[ $(this).attr('name') ] = $(this).val();
		});
		
		$.ajax({
			url: form.attr('action'),
			method: 'POST',
			data: booking_fields,
			success: function(data){
				if(data.email) {
					form.slideUp();
					form_status('<i class="fa fa-check-circle" aria-hidden="true"></i> Thanks! Your booking information has been sent.');
				} else {
					form_status('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Error sending booking information. Please try again shortly.', 'error');
				}
			},
			error: function(data){
				form_status('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Error sending booking information. Please try again shortly.', 'error');
			},
			dataType: 'json'
		});
	}
	
	// DISPLAY FORM STATUS
	function form_status(message, statusclass)
	{
		if(typeof statusclass === 'undefined') statusclass = '';
		
		$('.booking_form_status').attr('class','booking_form_status ' + statusclass).html(message).slideDown();
		
		if(statusclass == 'error') {
			window.setTimeout(function(){
				$('.booking_form_status').slideUp();
			},8000);
		} else { // success
			$('html,body').animate({
				scrollTop: $('#book').offset().top - 50
			}, 400);
		}
	}
	
});