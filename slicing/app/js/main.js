$(document).ready(function(){
	$(".bxslider").bxSlider({
		'auto' : true
	});

	jQuery('.foot-menu ul').autocolumnlist({
		columns: 2
	});

	$('input[type="radio"], input[type="checkbox"]').styler();

	$( "#slider-range-max" ).slider({
		range: "max",
		min: 1,
		max: 5,
		value: 1,
		slide: function( event, ui ) {
			$( "#amount" ).val( ui.value );
		}
	});
	$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );

	$( "#slider-range" ).slider({
		range: true,
		min: 500,
		max: 15000,
		values: [ 500, 15000 ],
		slide: function( event, ui ) {
			$( "#amountLeft" ).html( "от " + ui.values[ 0 ] + " руб.");
			$( "#amountRight" ).html( "от " + ui.values[ 1 ] + " руб." );
	  	}
	});
	$( "#amountLeft" ).html( "от " + $( "#slider-range" ).slider( "values", 0 ) + " руб." );
	$( "#amountRight" ).html( "от " + $( "#slider-range" ).slider( "values", 1 ) + " руб." );
});