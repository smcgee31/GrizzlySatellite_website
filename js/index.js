(function($) {
    $(function() {
        $('.playme').click(wireColorbox);
        $("#gallery").unitegallery();
        gallery_theme: "tiles";
    });
})(jQuery);

// Instantiate Colorbox
function wireColorbox(){
	var w = window.innerWidth * .9;
	var h = window.innerHeight * .9;
	var setW = w;
	var setH = h;
	var ratio = h / w;
	if ( ratio > 0.5625 ) {
		// width takes priority
		var setH = w * 9 / 16;
	} else {
		// height takes priority
		var setW = h * 16 / 9;
	}

	$.colorbox({
		href: this.href,
		iframe: true,
		width: setW,
		height: setH
	});
	return false;
}
