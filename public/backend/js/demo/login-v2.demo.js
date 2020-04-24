
var handleLoginPageChangeBackground = function() {
	$(document).on('click', '[data-click="change-bg"]', function(e) {
		e.preventDefault();
		var targetImage = '[data-id="login-cover-image"]';
		var targetImageSrc = 'url(' + $(this).attr('data-img') +')';

		$(targetImage).css('background-image', targetImageSrc);
		$('[data-click="change-bg"]').closest('li').removeClass('active');
		$(this).closest('li').addClass('active');	
	});
};

var LoginV2 = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleLoginPageChangeBackground();
		}
	};
}();

$(document).ready(function() {
	LoginV2.init();
});