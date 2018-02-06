<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<?php
		$asset_path = 'assets';
	?>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>/css/vendor/owl.carousel.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>/css/vendor/owl.theme.default.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>/css/vendor/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>/css/theme.css?1517506852" />
  <title>How the media helps issues like abortion stay controversial | The Knife Media</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script><!-- THIS MUST BE INCLUDED FOR NEW FONT AWESOME -->
	<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="<?php echo $asset_path; ?>/js/vendor/bootstrap.min.js"></script>
	<script type='text/javascript' src='https://www.theknifemedia.com/wp-includes/js/jquery/jquery-migrate.js?ver=1.4.1'></script>
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js?ver=4.7.4'></script>
	<script>
		$.noConflict();
		(function($) {
			$(window).on('load',function() {
			  // Code that uses jQuery's $ can follow here.
			  $('[data-toggle="tooltip"]').tooltip(); // init tooltips
			  // INIT THE STICKY NAV
			  var single = {
			    init : function(){
					  single.initNav();
				  },
				  initNav : function(){
					  if ($(window).width() > 991){
						  var headerHeight = $('#header-affix .column--sidebar .module--article-nav .module-header').outerHeight();
						  var headerAffix = $('#header-affix');
						  var hero = $('.entry-full .entry-hero');
						  // first move the nav up
						  hero.css({
							  marginBottom: -headerHeight+'px'
						  });
						  						  						  
						  headerAffix.affix({
							  offset: {
							    top: headerAffix.offset().top,
							    bottom: $('body').outerHeight(true) - $('.entry-footer .column--sidebar').offset().top
							  }
							});
						} // if tablet - desktop
						else{
							// ADD PADDING TO BOTTOM OF DOCUMENT FOR TABLET / MOBILE
							$('body').css({
								paddingBottom : $('.entry-header .module--article-nav').outerHeight(true)+'px'
					  	});
						}
				  }
				};
				single.init();
			});
			$(document).ready( function() {
     
    	});
		})(jQuery);
	</script>
	
</head>
<body class="world_news-template-default single single-world_news postid-23447 world_news-media-helps-issues-like-abortion-stay-controversial" data-spy="scroll" data-offset="100">


<div id="content" class="">
    <header id="header" class="">
        <div class="header-settings hidden-xs">
    <div class="container">
        <ul class="list-settings-nav">
        <li>
        <ul class="list-user">
            <a href="https://www.facebook.com/theknifenews" target="_blank" class=""><i class="fab fa-facebook-f icon-facebook" aria-hidden="true"></i></a>
            &nbsp;&nbsp;&nbsp;
            <a href="https://twitter.com/theknifemedia" target="_blank" class=""><i class="fab fa-twitter icon-twitter" aria-hidden="true"></i></a>
            &nbsp;&nbsp;&nbsp;
            <a href="https://www.linkedin.com/company/theknifemedia" target="_blank" class=""><i class="fab fa-linkedin icon-linkedin" aria-hidden="true"></i></a>
            &nbsp;&nbsp;&nbsp;
            <a href="https://www.youtube.com/channel/UCAHskOHakl0zZnWnve-Kyfw" target="_blank" class=""><i class="fab fa-youtube icon-youtube" aria-hidden="true"></i></a>
            &nbsp;&nbsp;&nbsp;
                        <li><a href="https://www.theknifemedia.com/checkout/?add-to-cart=10&#038;variation_id=13425&#038;attribute_subscription-level=1%20Product" class="btn btn-default btn-sm">Subscribe Now</a></li>
            <li><a href="#" id="show_login">Log In</a></li>
        </ul>
            </li>
</ul><!-- .list-settings-nav -->
    </div><!-- .container -->
</div><!-- .header-settings -->
	<div class="header-main">
		<div class="container">
			<div class="row">
				<div class="column--toggle-nav visible-xs">
					<button id="nav-toggle" class="btn btn-plain  js-slideout-toggle"><i class="icon fa fa-bars"><span class="sr-only">Toggle Menu</span></i></button>
				</div><!-- .column--toggle -->
				<div class="column--logo">
					<a href="https://www.theknifemedia.com" title="The Knife Media" id="logo">
					<img src="<?php echo $asset_path; ?>/images/logo.png" alt="The Knife Media" class="" title="The Knife Media">
					</a>
				</div><!-- .column--logo -->
				<div class="column--nav-main hidden-xs">
					<ul id="menu-main-menu-en" class="nav"><li id="menu-item-19490" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19490"><a href="/world-news">All News</a></li>
						<li id="menu-item-16725" class="menu-item menu-item-type-taxonomy menu-item-object-topic menu-item-16725"><a href="https://www.theknifemedia.com/topic/daily-cut/">Just the Facts</a></li>
						<li id="menu-item-18356" class="menu-item menu-item-type-taxonomy menu-item-object-topic menu-item-18356"><a href="https://www.theknifemedia.com/topic/analysis/">Analysis</a></li>
						<li id="menu-item-23272" class="menu-item menu-item-type-taxonomy menu-item-object-topic menu-item-23272"><a href="https://www.theknifemedia.com/topic/distortions-in-the-media/">Distortions</a></li>
					</ul>            </div><!-- .column--nav-main -->
				<div class="column--nav-all hidden-xs">
					<button id="nav-all" class="btn btn-plain btn-icon js-slideout-toggle"><i class="icon fa fa-caret-right"></i> More Topics</button>
				</div><!-- .column--nav-all-->
				<div class="column--search">
					<button id="search-toggle" class="btn btn-plain collapsed" data-toggle="collapse" data-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
						<i class="icon fas fa-search"><span class="sr-only">Toggle Search</span></i>
						<i class="icon fas fa-close"><span class="sr-only">Toggle Search</span></i>
					</button>
				</div><!-- .column--toggle-search -->
				<div class="collapse-search collapse width" id="collapse-search">
					<div class="row xs-vertical">
						<div class="col-sm-9 col-xs-12">
							<form method="get" id="searchform" action="https://www.theknifemedia.com/index.php" class="form-inline">
							<div class="form-group">
								<label class="hidden" for="s">Search:</label>
								<input type="text" value="" name="s" id="s" class="form-control" placeholder="Search Articles, Topics, etc." />
				<input type="button" id="trigger" class="hide">
				</div><!-- .form-group -->	
				<button type="submit" id="searchsubmit" value="submit" class="btn btn-plain btn-search"><i class="icon fa fa-search"></i><span class="sr-only">Search</span></button>
				</form>
				</div>
				<div class="col-sm-3 col-xs-12 text-center" style="padding-left:0px">
				<a href="https://www.theknifemedia.com/index.php?s=&show_advanced=1&no_results=1" class="search-date">Search by date ></a>
				</div>
				</div>
				</div><!-- .collapse-search -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .header-main -->
</header><!-- #header -->
<section id="main" role="main" class="">
	<?php //include('modules/info-pushdown.php'); ?>
	<article class="entry-full">
		<div class="entry-hero">
			<img src="https://dki3c7qr774z2.cloudfront.net/wp-content/uploads/2018/01/30223302/fa2-1280x720.jpg">
		</div><!-- .entry-hero -->
		<?php 
			if ($_GET['view'] == 'distortion' || $_GET['view'] == ''){
				include ('single-distortion.php'); 
			}else if ($_GET['view'] == 'numbers'){
				include ('single-numbers.php'); 
			}
			
		?>
		<div class="entry-footer">
			<div class="container">
				<div class="row">
					<div class="column--main">
						<div class="inner">						
							<?php include('modules/sourced-articles.php'); ?>
							<?php include('modules/credits.php'); ?>
							<?php include('modules/terms.php'); ?>
						</div><!-- .inner -->
					</div><!-- .column--main -->
					<div class="column--sidebar">
						<?php include('modules/next-article.php'); ?>
					</div><!-- .column--sidebar -->
				</div><!-- .row -->
			</div><!-- .container -->			
		</div><!-- .entry-footer -->
	</article>
	<div class="single-footer">
		<?php include('modules/subscribe-banner.php'); ?>
		<?php include('blocks/article/trending.php'); ?>
	</div><!-- .single-footer -->
</section>

</div><!-- #content -->
</body>
</html>
