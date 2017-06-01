(function ($, root, undefined) {
  $(window).resize(function() {
    mainBg();
  });
	$(function () {
    mainBg();
	});

  function mainBg(){
    var domHeight = $(window).innerHeight()
    var navHeight = 175;
    var newHeight = domHeight - navHeight;
    $('#main-bg').height(newHeight);
  }
})(jQuery, this);
