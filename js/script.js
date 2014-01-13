$(document).ready(function() {

	var msnry = new Array();

	var containers = $('.gallery');

	if (containers) {

		$.each(containers, function(index, value) {
			msnry[index] = new Masonry(value, {
				itemSelector : '.gallery-item'
			});
		});

	}

	//update the masonry as each new image comes in so we don't get overlaps.
	$(window).load(function() {
		$.each(msnry, function(index, value) {
			msnry[index].layout();
		})
	});

}); 