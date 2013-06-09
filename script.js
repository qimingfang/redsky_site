$(document).ready(function(){
	style();

	$(window).resize(style);
});

function style(){
	var margin = ($(window).width() - 850)/2;
	var width = 500;

	if (margin > 0)
		width += margin;

	$("#topBanner").css({
		"width": width + "px"
	});
}