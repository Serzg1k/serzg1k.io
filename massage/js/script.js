jQuery(document).ready(function($){
	console.log(srzobj);
	if (srzobj.srz_height_slide) {
		$('.carousel').css('height', srzobj.srz_height_slide);
	}
	if (srzobj.srz_width_slide) {
		$('.carousel').css('width', srzobj.srz_width_slide);
	}

});