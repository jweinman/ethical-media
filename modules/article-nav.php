<div class="module module--article-nav">
	<div class="module-header">
		<h4 class="module-title">More on This story</h4>
		<span class="count">1 of 4 read</span>
		<a href="#" data-toggle="tooltip" title="This is a tooltip" class="link-tooltip"><i class="icon far fa-question-circle"></i><span class="sr-only">Tooltip</span></a>
	</div><!-- .module-header -->
	<div class="module-content">
		<ul class="list-article-nav">
			<li>
				<a href="#">
					<h4 class="entry-type"><i class="icon fas fa-info-circle"></i> <span>Raw Data</span></h4>
					<h3 class="entry-title">The facts about the Syrian Crisis and only the facts.</h3>
					<i class="icon fas fa-angle-right"></i>
				</a>	
				<i class="icon fas fa-caret-left"></i>
			</li>
			<li class="<?php if ($_GET['view'] == '' || $_GET['view'] == 'distortion' ? print 'active' : ''); ?>">
				<a href="?view=distortion">
					<h4 class="entry-type"><i class="icon fas fa-exclamation-triangle"></i> <span>Distortion</span></h4>
					<h3 class="entry-title">A surprisingly differing perspective from one outlet to the next.</h3>
					<i class="icon fas fa-angle-right"></i>
				</a>
				<i class="icon fas fa-caret-left"></i>
			</li>
			<li class="<?php if ($_GET['view'] == 'numbers' ? print 'active' : ''); ?>">
				<a href="?view=numbers">
					<h4 class="entry-type"><i class="icon fas fa-signal"></i> <span>Numbers</span></h4>
					<h3 class="entry-title">A quantified breakdown of the distortion of this crisis.</h3>
					<i class="icon fas fa-angle-right"></i>
				</a>
				<i class="icon fas fa-caret-left"></i>				
			</li>
			<li>
				<a href="#">
					<h4 class="entry-type"><i class="icon fas fa-plus-circle"></i> <span>Explainer</span></h4>
					<h3 class="entry-title">This isn’t the first time something like this has happened—and why that’s a big deal for Syria</h3>
					<i class="icon fas fa-angle-right"></i>
				</a>	
				<i class="icon fas fa-caret-left"></i>			
			</li>
		</ul><!-- .list-article-nav -->
	</div><!-- .module-content -->
</div><!-- .module .module--article-nav -->