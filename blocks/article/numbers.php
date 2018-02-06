<script>
	
jQuery(document).ready(function($) { 
  var numbers = {
    init : function(){
		  numbers.initDonutChart();
		  numbers.initCollapse();
	  },
	  initCollapse : function(){
		  $('.collapse').on('show.bs.collapse', function(){
			  var myParent = $(this).parent('li');
			  myParent.addClass('in');
		  });
		  $('.collapse').on('hide.bs.collapse', function(){
			  var myParent = $(this).parent('li');
			  myParent.removeClass('in');
		  });
	  },
	  initDonutChart : function(){
	    var charts = $('.canvas-integrity-chart');
	    if (charts.length > 0){
		    charts.each(function(i){
			    chart = $(this);
			    var data_perc = chart.attr('data-percentage');
			    var data_remainder = 100 - data_perc;
					var data_label = chart.attr('data-label');
					var ar_perc = [data_remainder, data_perc];
					var ar_label = data_label.split(",");
					var ar_color = ['#ADC6CF','#D4E3E8'];
							    
			    var data = {
					  labels: ar_label,
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
						options: {
	            responsive: true,
							cutoutPercentage: 50,
	            legend: {
		          	display: false,
	              position: 'bottom',
	            },
	            tooltips : {
								enabled : true
							},
	            title: {
	                display: false,
	                text: 'Chart.js Doughnut Chart'
	            },
	            animation: {
	                animateScale: true,
	                animateRotate: true
	            }
	        	}
					}); // build chart*/
				}); // charts loop
	    } // if chart
    },
	}
	numbers.init();
});
		    

</script>

<div class="block" id="numbers">
	<div class="block-header">
		
	</div><!-- .block-header -->
	<div class="block-content">
		<ul class="list-integrity-collapse">
			<li>
				<div class="integrity-header">
					<a href="#integrity-collapse-1" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-1">
						<div class="row">
							<div class="column--left">
								<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
								<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
							</div><!-- .column--left -->
							<div class="column--center">
								<p class="source"><img src="<?php echo $asset_path; ?>/images/fpo--logo-nyt.png" alt="Publication Name"></p>
								<h3 class="collapse-title">Trump Lawyer Says Mueller Improperly Obtained Transition Emails</h3>
							</div><!-- .column--center -->
							<div class="column--right">
								<div class="range range-bg range-5">
									<p class="label">Total Integrity</p>
									<p class="value">84%</p>
								</div><!-- .range -->
							</div><!-- .column--right -->
						</div><!-- .row -->
					</a>
				</div><!-- .integrity-header -->
				<div class="integrity-collapse collapse" id="integrity-collapse-1">
					<div class="inner">
						<ul class="list-integrity-chart">
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Spun, Data-Based" data-percentage="50"></canvas>
									<div class="integrity-label">
										Spin
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Spun
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Data-based
									</li>
								</ul><!-- .integrity-legend -->
							</li>
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Slanted, Balanced" data-percentage="40"></canvas>
									<div class="integrity-label">
										Slant
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Slanted
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Balanced
									</li>
								</ul><!-- .integrity-legend -->
							</li>	
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Logical, Faulty Logic" data-percentage="25"></canvas>
									<div class="integrity-label">
										Logic
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Logical
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Faulty Logic
									</li>
								</ul><!-- .integrity-legend -->
							</li>					
						</ul>
					</div><!-- .inner -->
				</div><!-- .integrity-collapse #integrity-collapse-1 -->
				<div class="integrity-footer">
					<a href="#integrity-collapse-1" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-1">
						<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
						<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
					</a>
				</div><!-- .integrity-footer -->
			</li>
			<li>
				<div class="integrity-header">
					<a href="#integrity-collapse-2" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-2">
						<div class="row">
							<div class="column--left">
								<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
								<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
							</div><!-- .column--left -->
							<div class="column--center">
								<p class="source"><img src="<?php echo $asset_path; ?>/images/fpo--logo-politico.png" alt="Publication Name"></p>
								<h3 class="collapse-title">Trump Lawyer Says Mueller Improperly Obtained Transition Emails</h3>
							</div><!-- .column--center -->
							<div class="column--right">
								<div class="range range-bg range-2">
									<p class="label">Total Integrity</p>
									<p class="value">14%</p>
								</div><!-- .range -->
							</div><!-- .column--right -->
						</div><!-- .row -->
					</a>
				</div><!-- .integrity-header -->
				<div class="integrity-collapse collapse" id="integrity-collapse-2">
					<div class="inner">
						<ul class="list-integrity-chart">
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Spun, Data-Based" data-percentage="50"></canvas>
									<div class="integrity-label">
										Spin
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Spun
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Data-based
									</li>
								</ul><!-- .integrity-legend -->
							</li>
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Slanted, Balanced" data-percentage="40"></canvas>
									<div class="integrity-label">
										Slant
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Slanted
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Balanced
									</li>
								</ul><!-- .integrity-legend -->
							</li>	
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Logical, Faulty Logic" data-percentage="25"></canvas>
									<div class="integrity-label">
										Logic
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Logical
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Faulty Logic
									</li>
								</ul><!-- .integrity-legend -->
							</li>					
						</ul>
					</div><!-- .inner -->
				</div><!-- .integrity-collapse #integrity-collapse-2 -->
				<div class="integrity-footer">
					<a href="#integrity-collapse-2" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-2">
						<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
						<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
					</a>
				</div><!-- .integrity-footer -->
			</li>
			<li>
				<div class="integrity-header">
					<a href="#integrity-collapse-3" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-3">
						<div class="row">
							<div class="column--left">
								<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
								<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
							</div><!-- .column--left -->
							<div class="column--center">
								<p class="source"><img src="<?php echo $asset_path; ?>/images/fpo--logo-nyt.png" alt="Publication Name"></p>
								<h3 class="collapse-title">Trump Lawyer Says Mueller Improperly Obtained Transition Emails</h3>
							</div><!-- .column--center -->
							<div class="column--right">
								<div class="range range-bg range-4">
									<p class="label">Total Integrity</p>
									<p class="value">54%</p>
								</div><!-- .range -->
							</div><!-- .column--right -->
						</div><!-- .row -->
					</a>
				</div><!-- .integrity-header -->
				<div class="integrity-collapse collapse" id="integrity-collapse-3">
					<div class="inner">
						<ul class="list-integrity-chart">
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Spun, Data-Based" data-percentage="50"></canvas>
									<div class="integrity-label">
										Spin
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Spun
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Data-based
									</li>
								</ul><!-- .integrity-legend -->
							</li>
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Slanted, Balanced" data-percentage="40"></canvas>
									<div class="integrity-label">
										Slant
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Slanted
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Balanced
									</li>
								</ul><!-- .integrity-legend -->
							</li>	
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Logical, Faulty Logic" data-percentage="25"></canvas>
									<div class="integrity-label">
										Logic
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Logical
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Faulty Logic
									</li>
								</ul><!-- .integrity-legend -->
							</li>					
						</ul>
					</div><!-- .inner -->
				</div><!-- .integrity-collapse #integrity-collapse-3 -->
				<div class="integrity-footer">
					<a href="#integrity-collapse-3" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-3">
						<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
						<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
					</a>
				</div><!-- .integrity-footer -->
			</li>
			<li>
				<div class="integrity-header">
					<a href="#integrity-collapse-4" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-4">
						<div class="row">
							<div class="column--left">
								<i class="icon fas fa-angle-down"></i><span class="sr-only">Show</span>
								<i class="icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
							</div><!-- .column--left -->
							<div class="column--center">
								<p class="source"><img src="<?php echo $asset_path; ?>/images/fpo--logo-politico.png" alt="Publication Name"></p>
								<h3 class="collapse-title">Trump Lawyer Says Mueller Improperly Obtained Transition Emails</h3>
							</div><!-- .column--center -->
							<div class="column--right">
								<div class="range range-bg range-1">
									<p class="label">Total Integrity</p>
									<p class="value">5%</p>
								</div><!-- .range -->
							</div><!-- .column--right -->
						</div><!-- .row -->
					</a>
				</div><!-- .integrity-header -->
				<div class="integrity-collapse collapse" id="integrity-collapse-4">
					<div class="inner">
						<ul class="list-integrity-chart">
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Spun, Data-Based" data-percentage="50"></canvas>
									<div class="integrity-label">
										Spin
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Spun
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Data-based
									</li>
								</ul><!-- .integrity-legend -->
							</li>
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Slanted, Balanced" data-percentage="40"></canvas>
									<div class="integrity-label">
										Slant
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Slanted
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Balanced
									</li>
								</ul><!-- .integrity-legend -->
							</li>	
							<li>
								<div class="integrity-chart">
									<canvas class="canvas-integrity-chart" id="" data-label="Logical, Faulty Logic" data-percentage="25"></canvas>
									<div class="integrity-label">
										Logic
									</div><!-- .integrity-label -->
								</div><!-- .integrity-chart -->
								<ul class="list-integrity-legend">
									<li>
										<i class="icon fas fa-circle dark"></i> Logical
									</li>
									<li>
										<i class="icon fas fa-circle light"></i> Faulty Logic
									</li>
								</ul><!-- .integrity-legend -->
							</li>					
						</ul>
					</div><!-- .inner -->
				</div><!-- .integrity-collapse #integrity-collapse-4 -->
				<div class="integrity-footer">
					<a href="#integrity-collapse-4" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="integrity-collapse-4">
						<i class="collapse-nav icon fas fa-angle-down"></i><span class="sr-only">Show</span>
						<i class="collapse-nav icon fas fa-angle-up"></i><span class="sr-only">Hide</span>
					</a>
				</div><!-- .integrity-footer -->
			</li>
		</ul><!-- .list-integrity -->
	</div><!-- .block-content -->
</div><!-- .block #numbers -->