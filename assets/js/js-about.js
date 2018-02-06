jQuery(document).ready(function($) { 
  var about = {
    init : function(){
			about.initNav();
    },
    initNav : function(){
	    var entryNav = $('#analysis-sidebar');
	    if ($(window).width() > 991){		    
		    var posTop = entryNav.offset();
		    var target = $('#analysis');
				var	targetPos = target.offset();
				var targetHeight = target.outerHeight(true);
				var targetBot = targetPos.top + targetHeight;
				var docHeight = $('body').outerHeight(true);				
				var footerHeight = $('#footer').outerHeight(true);
				var mainHeight = $('#main').outerHeight(true);

				entryNav.css({
					'width' : entryNav.outerWidth(true)
				});
		    
				entryNav.affix({
				  offset: {
				    top: posTop.top,
				    bottom: (docHeight - targetBot)+100
				    //bottom: docHeight - ((posBot.top + height) - 100)
				  }
				});
				
				entryNav.on('affix.bs.affix', function(){
					entryNav.css({
						'width' : entryNav.outerWidth(true)
					});
				});
				
				entryNav.on('affix-bottom.bs.affix', function(){
					//dashboard_spacer.addClass('hide');
				});			
	    } // if small desktop	
	    

	    smoothScroll.init({
	      //offset: entryNav.height()
      });
	    if ( window.location.hash ) {
        //var anchor = document.querySelector('[data-hash='+window.location.hash.replace('#','')); // Get the anchor
        //var toggle = document.querySelector('a[href*="' + window.location.hash + '"]' ); // Get the toggle (if one exists)
        //var options = {}; // Any custom options you want to use would go here
        //smoothScroll.animateScroll( anchor, toggle, options );
        if ($('body').hasClass('single')){
	        var anchor = document.querySelector(window.location.hash);
	        var toggle = '';
	        var options = {
		        offset: entryNav.height()
	        };
	        smoothScroll.animateScroll(anchor, toggle, options);
        }
			}			
    }
  };
  about.init();
  
  
  $(window).resize(function(){
	  about.init();
  });
  
});

