(function ($, root, undefined) {
  $(window).resize(function() {
    mainBg();
    bgDivImage();
  });
	$(function () {
		'use strict';

		// DOM ready, take it away
		// if(document.getElementById('menu-item-87').classList.contains('active') || document.getElementById('menu-item-116').classList.contains('active') || document.getElementById('menu-item-134').classList.contains('active')){
		// 	document.getElementById('menu-item-86').classList.add('active')
		// }
    mainBg();
    bgDivImage();
    parallex();
    buttonScroll();
	});

  function mainBg(){
    var domHeight = $(window).innerHeight()
    var navHeight = 175;
    var newHeight = domHeight - navHeight;
    if (window.outerWidth < 400) {
      $('#main-bg').height('460');
    } else {
      $('#main-bg').height(newHeight);
    }
  }

  function bgDivImage() {

    var w = parseInt(window.outerWidth);

    if (document.getElementById('homePEnter') == null) {
      var width = parseInt(document.getElementById('bikeLaw').offsetWidth);
      var x = ((parseInt(w)-parseInt(width)) /2);
      if(w >= 1200){
        pImage.style.backgroundSize = width/2+"px";
      }else if(w <1200){
        pImage.style.backgroundSize = (width/2)+50+"px";
      }else if(w <=992){

      }
    } else {
      var width = parseInt(document.getElementById('homePEnter').offsetWidth);
      var x = parseInt(w)/2;
      if(w < 1200){
        pImage.style.backgroundSize = (width/2)+50+"px";
      }else if(w <=992){
        pImage.style.backgroundSize = (width/2)+250+"px";
      }
    }
    pImage = document.getElementById("pImage");
    pImage.style.backgroundPosition = x+"px,0px"
  }
  function getThumbnail(name){
      var image = new Image();
      image.src = image_url;

      image.onload = function()
      {
          return image;
      }
      image.onerror = function()
      {
          return "images/default.jpg";
      }
  }
  function parallex() {
    if(document.getElementById('paralax')){
      $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var paralax = document.getElementById('paralax');
        // Do something
        paralax.style.marginTop = "-"+scroll/2+"px";
      });
    }
  }
  function buttonScroll(e) {
    // get all buttons
    var ids = $('.scrollDown').map(function() {
      return this.id;
    }).get();
    $(ids).each(function(i) {
      $("#" + this).on('click', function (){
        event.preventDefault();
        var nextDiv = $('#' + this.id + "h").offset().top;
        jQuery('body').animate({ scrollTop: nextDiv});
      })
    });
    $("#backToTop").on('click', function (){
      event.preventDefault();
      jQuery('body').animate({ scrollTop: 0});
    })
  }
})(jQuery, this);
