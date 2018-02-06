jQuery(document).ready(function($) { 
  var page = {
    init : function(){
	    page.initExternalLinks();
	    page.initSearch();
      page.initSlideout();
      page.initAccount();
    },    
    initAccount : function(){
	    $('a#show_login').click(function(){
      	$('#login-modal').modal('show');
			});
			$('.modal-dialog .modal-body .woocommerce h2').after().click(function(){
				$('#login-modal').modal('hide');
			})
    },
		initExternalLinks : function(){
			$('a').each(function() {
			   var a = new RegExp('/' + window.location.host + '/');
			   if(!a.test(this.href)) {
		       $(this).click(function(event) {
	           event.preventDefault();
	           event.stopPropagation();
	           window.open(this.href, '_blank');
		       });
			   }
			});
		},
    initSearch : function(){
	    if ($(window).width() < 768){
		    $('#collapse-search').removeClass('width');
	    }
	    
	    var btn_trigger = $('#searchform #trigger');
	    
	    
	    //$(focus);	    
	    //$(document.body).load(focus);
	    btn_trigger.on('click', function(e){
		    e.preventDefault();
		    $('#searchform #s').focus();
		    //$('#collapse-search').collapse();
	    });
	    
	    btn_trigger.on('touchstart', function(e){
		    e.preventDefault();
		    $('#searchform #s').focus();
	    });
	    
	    $('#collapse-search').on('shown.bs.collapse',function(){
		    //$('#searchform #s').focus();
				//$('#click').click(focus);
				btn_trigger.trigger('click');
				btn_trigger.trigger('touchstart');
				//console.log('hello');
				//focus();
	    });
    },
    initSlideout : function(){
	    var slideout = new Slideout({
		     'panel': document.getElementById('content'),
				 'menu': document.getElementById('sidebar'),
				 'padding': 256,
				 'tolerance': 70
		  }).on('beforeopen', function() {
		    this.panel.classList.add('open');
		  })
		  .on('open', function() {
		    this.panel.addEventListener('click', close);
		  })
		  .on('beforeclose', function() {
		    this.panel.classList.remove('open');
		    this.panel.removeEventListener('click', close);
		  });;
		  
		  $('.js-slideout-toggle').on('click', function() {
	      slideout.toggle();
	    });
		  
		  
		  function close(eve) {
			  eve.preventDefault();
			  slideout.close();
			}
		  
		  
    },
  };
  page.init(); 
});

