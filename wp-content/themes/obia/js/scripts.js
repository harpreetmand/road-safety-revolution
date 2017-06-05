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
		
 $(document).ready(function() {
    $('.carousel').carousel('pause');
    // $('.carousel').carousel({interval: 2000});
     myFunction();



  });
    mainBg();

	});

  function mainBg(){
    var domHeight = $(window).innerHeight()
    var navHeight = 175;
    var newHeight = domHeight - navHeight;
    $('#main-bg').height(newHeight);
  }
$(window).resize(function() { 
 myFunction();
 });



})(jQuery, this);

  function myFunction() {
    
var w = parseInt(window.outerWidth);
    width = parseInt(document.getElementById('bikeLaw').offsetWidth);

    var x = (parseInt(w)-parseInt(width)) /2;
    // x = x + 37;
    pImage = document.getElementById("pImage");
    pImage.style.backgroundPosition = x+"px,0px"

    if(w >= 1200){
      pImage.style.backgroundSize = width/2+"px";
    
    }else if(w <1200){
      pImage.style.backgroundSize = (width/2)+50+"px";

    }else if(w <=992){

    }
}
