(function ($, root, undefined) {
  $(window).resize(function() {
    mainBg();
  });
	$(function () {

		
		'use strict';
		
		// DOM ready, take it away
		// if(document.getElementById('menu-item-87').classList.contains('active') || document.getElementById('menu-item-116').classList.contains('active') || document.getElementById('menu-item-134').classList.contains('active')){
		// 	document.getElementById('menu-item-86').classList.add('active')
		// }
		

    mainBg();

	});

  function mainBg(){
    var domHeight = $(window).innerHeight()
    var navHeight = 175;
    var newHeight = domHeight - navHeight;
    $('#main-bg').height(newHeight);
  }
})(jQuery, this);
