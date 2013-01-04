$(document).ready(function() {
	var carousel = $("#carousel").featureCarousel({
		captionBelow: true,
		autoPlay: 0,
		trackerIndividual: false,
		trackerSummation: false,
		movedToCenter: function(feature) {

			$(".multiThemeSelector option").attr('selected', false);

			$(".multiThemeSelector option").filter(function() {
			    //may want to use $.trim in here
			    return $(this).attr('value') == feature.data('theme');;
			}).attr('selected', true);
		}
    });

	

    $('.multiThemeSelector select').change(function() {
    	carousel.goToSlide( $(this).val() );
    });
});