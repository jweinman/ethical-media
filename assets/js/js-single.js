jQuery(document).ready(function($) { 
  var single = {
    init : function(){
	    if ($('.entry-full').hasClass('teaser')){
		    single.initTeaser();
	    }else{
		    single.initPieChart();
		    single.initDonutChart();
	      single.initBarChart();
				single.initCarousel();
				single.initNav();
				single.initModal();
	    }     
    },
    initModal : function(){
	    var modal_btn = $('.block [data-toggle="modal"]');
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
				entry_nav.on('affix.bs.affix', function(){
					//dashboard_spacer.removeClass('hide');
				});
				
				entry_nav.on('affix-top.bs.affix', function(){
					//dashboard_spacer.addClass('hide');
				});
				
				// HIDE NAV ELEMENTS IF THEY DON'T EXIST ON PAGE
				var nav = $('.nav', entry_nav);
				var navs = $('li', nav);
				navs.each(function(){
					var my_nav = $(this);
					var my_link = $('a', my_nav);
					var my_target = my_link.attr('href');
					if ($('.block'+my_target).length < 1){
						my_nav.hide();
					}
				});
				
	    }	
	      
	    smoothScroll.init({
	      offset: entry_nav.height()
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
		        offset: entry_nav.height()
	        };
	        smoothScroll.animateScroll(anchor, toggle, options);
        }
			}  			
    },
    initTeaser : function(){
	    var block = $('#raw-data');
	    var main = $('.column--main', block);
	    var sidebar = $('.column--sidebar', block);
	    var modal = $('#modal-roadblock');	    
	    main.css('height',sidebar.outerHeight(true)+'px');
	    modal.modal('show');
    },
    initPieChart : function(){
	  	var chart = $('#canvas-fact-chart');
	  	if (chart.length > 0){
		  	var data_color = chart.attr('data-color');	   
				var data_perc = chart.attr('data-percentage');
				var data_label = chart.attr('data-label');
				var ar_perc = [];
				var ar_color = [];
				var ar_label = [];
				
				ar_perc.push.apply(ar_perc, data_perc.split(",").map(Number));
				ar_color.push.apply(ar_color, data_color.split(","));	   
				ar_label.push.apply(ar_label, data_label.split(","));
				
				var data = {
				  labels: ar_label,
				  datasets: [{
				  	data: ar_perc,
				    backgroundColor: ar_color,
				    hoverBackgroundColor: ar_color,
				    borderWidth : 0
				  }]
				};
		   
			var myChart = new Chart(chart, {
	    	type: 'pie',
				data: data,
				options : {
					legend:{
						display: false,
						position: 'bottom',
						fullWidth : true,
						labels : {
							fontColor: '#ffffff'
						} // labels
					}, // legend
					tooltips: {
          	callbacks: {
              label: function(tooltipItem, data){
                var value = data.datasets[0].data[tooltipItem.index];
                var label = data.labels[tooltipItem.index];
                return label + ': ' + value + '%';
              }
            }
					} // tooltips
				} // options
				});	
	  	}			    
    },
    initDonutChart : function(){
	    var charts = $('.canvas-fiction-chart');
	    if (charts.length > 0){
		    charts.each(function(i){
			    chart = $(this);
			    var data_perc = chart.attr('data-percentage');
			    var data_remainder = 100 - data_perc;
					var data_label = chart.attr('data-label');
					var ar_perc = [data_perc, data_remainder];
					var ar_label = ['Fiction', 'total'];
					var ar_color = ['#59bca8','#abddd3'];
		    
			    var data = {
					  //labels: ar_label,
					  datasets: [{
					  	data: ar_perc,
					  	label : ar_label,
					    backgroundColor: ar_color,
					    hoverBackgroundColor: ar_color,
					    borderWidth : 0
					  }]
					};
		   
					var myChart = new Chart(chart, {
			    	type: 'doughnut',
						data: data,
						options : {
							responsive : true,
							cutoutPercentage: 60,
							legend:{
								display: false,
								position: 'bottom',
								fullWidth : true,
								labels : {
									fontColor: '#ffffff'
								}
							}, // legend							
							tooltips : {
								enabled : false
							},
						} // options
					}); // build chart*/
				}); // charts loop
	    } // if chart
    },
    initBarChart : function(){
	    var charts = $('.canvas-integrity-chart');
	    if (charts.length > 0){
				charts.each(function(i){				
					chart = $(this);			  
					var data_perc = chart.attr('data-percentage');
					var data_label = chart.attr('data-label');
					var ar_perc = [];
					var ar_label = [];
					var ar_color = [];
					var ar_label_comp = [];
					
					ar_perc.push.apply(ar_perc, data_perc.split(",").map(Number));
					ar_label.push.apply(ar_label, data_label.split(","));
					
					// array loop
					for (i = 0; i < ar_label.length; i++){
						ar_label_comp.push(ar_label[i]+': '+ar_perc[i]+'%');
					}
									
					$.each(ar_perc, function(index, value){
						myPerc = value;					
						if (myPerc <= 20){
							ar_color.push('#47AFE3');
						}else if (myPerc <= 35){
							ar_color.push('#59bca8');
						}else if (myPerc <= 50){
							ar_color.push('#EFB738');
						}else if (myPerc <= 70){
							ar_color.push('#EE8833');
						}else if (myPerc <= 80){
							ar_color.push('#EE522F');
						}else{
							ar_color.push('#B22F11');
						}
					});			
	
					var data = {
					  labels: ar_label_comp,
					  datasets: [{
						  label : '',
					  	data: ar_perc,
					    backgroundColor: ar_color,
					    hoverBackgroundColor: ar_color,
					    borderColor : '#ffffff',
					    borderWidth : 0
					  }]
					};
					
					var myChart = new Chart(chart, {
		    		type: 'bar',
						data: data,
						options : {
							responsive : true,
							layout: {
								padding: {
									top: 0,
									right: 0,
									bottom: 0,
									left: 0
								}
							},
							title : {
								display: false
							},
							legend : {
								display: false
							},
							scales : {
								display : true,
								xAxes: [{
									stacked: true
								}],
								yAxes: [{
									stacked: true,
									ticks: {
	                    min: 0,
	                    max: 100
	                },
	                gridLines : {
		                color: '#333333'
	                }
								}]
							}, // scales			
							tooltips: {
	          	callbacks: {
		          	title: function(tooltipItem, data){
			          	return;
		          	},
	              label: function(tooltipItem, data){
	                var value = data.datasets[0].data[tooltipItem.index];
	                var label = data.labels[tooltipItem.index];
	                return ar_label_comp[tooltipItem.index];
	              }
	            }
						} // tooltips
						} // options
					});	 				
				});	    
			} // if
    },
    initCarousel : function(){
	    $(".owl-carousel").owlCarousel({
		    loop:true,
		    margin:15,
		    responsiveClass:true,
		    responsive:{
	        0:{
            items:1,
            nav:true
	        },
	        768:{
            items:3,
            nav:true
	        },
	        992:{
            items:4,
            nav:true
	        }
		    }
	    });
    }
  };
  single.init(); 
});

