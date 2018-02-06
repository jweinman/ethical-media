jQuery(document).ready(function($) {
  var affixNav = {
    init : function(){
      affixNav.initNav();
    },
    initNav : function(){
      var entry_nav = $('.entry-nav');
      if ($(window).width() > 767){
        var entry_content = $('.entry-content');
        var position = entry_content.position().top + $('body').scrollTop();
        entry_nav.affix({
          offset: {
            top: position-entry_nav.height(),
          }
        });
      }
      smoothScroll.init({
        offset: entry_nav.height()
      });
    },
  };
  affixNav.init();
});
