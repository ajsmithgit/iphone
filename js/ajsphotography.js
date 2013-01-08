/* Document.ready equivalent - on load for individual pages */
 
$('[data-role=page]').live('pagebeforeshow', function (event, ui) {

	if (this.children[0].class == "content-pad") {
		alert("gallery page");
	};
});
 
/* THINK THIS CAN BE DELETED */
 /* $(window).scroll(function(e){ 
  $el = $('.fixedElement'); 
  if ($(this).scrollTop() > 200 && $el.css('position') != 'fixed'){ 
    $('.fixedElement').css({'position': 'fixed', 'top': '90px'}); 
  } 
}); */

$('#home').live('pageinit', function() {
 
});

/* Device orientation detection - Anything that needs changing on orientation change dump here*/

$(window).bind( 'orientationchange', function(e){
    if ($.event.special.orientationchange.orientation() == "portrait") {
			var viewport = {
			width  : $(window).width(),
			height : $(window).height()
		};
		var wrapperWidth = viewport.width * 2;
		var wrapperHeight = viewport.height * 2;

		
		$("#scrollable_h").width(viewport.width);
		$(".vscroller").width(viewport.width);
		
		$("#horizontalwrapper").width(wrapperWidth);
      }
      else if($.event.special.orientationchange.orientation() == "landscape") {
        var viewport = {
			width  : $(window).width(),
			height : $(window).height()
		};
		var wrapperWidth = viewport.width * 2;
		var wrapperHeight = viewport.height * 2;

		
		$("#scrollable_h").width(viewport.width);
		$(".vscroller").width(viewport.width);
		
		$("#horizontalwrapper").width(wrapperWidth);
      }
});