<?php get_header(); ?>

<!--
----------------------------------------------------------------------------------------
Owl carousel
----------------------------------------------------------------------------------------


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="/slide/Owl/assets/css/bootstrapTheme.css" rel="stylesheet">
		<link href="/slide/Owl/assets/css/custom.css" rel="stylesheet">
			<link rel="stylesheet" href="/wp-content/themes/new/Owl/owl-carousel/owl.carousel.css">
				<link rel="stylesheet" href="/wp-content/themes/new/Owl/owl-carousel/owl.theme.css">
					<script src="/slide/Owl/assets/js/jquery-1.9.1.min.js"></script>
					<script src="/slide/Owl/owl-carousel/owl.carousel.js"></script>

					<style>
						#owl-demo .item{
						background: #3fbf79;
						padding: 30px 0px;
						margin: 10px;
						color: #FFF;
						-webkit-border-radius: 3px;
						-moz-border-radius: 3px;
						border-radius: 3px;
						text-align: center;
						}
						.customNavigation{
						text-align: center;
						}
						//use styles below to disable ugly selection
						.customNavigation a{
						-webkit-user-select: none;
						-khtml-user-select: none;
						-moz-user-select: none;
						-ms-user-select: none;
						user-select: none;
						-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
						}
					</style>


					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<h1>1</h1>
						</div>
						<div class="item">
							<h1>2</h1>
						</div>
						<div class="item">
							<h1>3</h1>
						</div>
						<div class="item">
							<h1>4</h1>
						</div>
						<div class="item">
							<h1>5</h1>
						</div>
						<div class="item">
							<h1>6</h1>
						</div>
						<div class="item">
							<h1>7</h1>
						</div>
						<div class="item">
							<h1>8</h1>
						</div>
						<div class="item">
							<h1>9</h1>
						</div>
						<div class="item">
							<h1>10</h1>
						</div>
						<div class="item">
							<h1>11</h1>
						</div>
						<div class="item">
							<h1>12</h1>
						</div>
						<div class="item">
							<h1>13</h1>
						</div>
						<div class="item">
							<h1>14</h1>
						</div>
						<div class="item">
							<h1>15</h1>
						</div>
						<div class="item">
							<h1>16</h1>
						</div>
					</div>

					<div class="customNavigation">
						<a class="btn prev">Previous</a>
						<a class="btn next">Next</a>
						<a class="btn play">Autoplay</a>
						<a class="btn stop">Stop</a>
					</div>

					<script>
						$(document).ready(function() {

						var owl = $("#owl-demo");

						owl.owlCarousel({
						items : 10, //10 items above 1000px browser width
						itemsDesktop : [1000,5], //5 items between 1000px and 901px
						itemsDesktopSmall : [900,3], // betweem 900px and 601px
						itemsTablet: [600,2], //2 items between 600 and 0
						itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
						});

						// Custom Navigation Events
						$(".next").click(function(){
						owl.trigger('owl.next');
						})
						$(".prev").click(function(){
						owl.trigger('owl.prev');
						})
						$(".play").click(function(){
						owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
						})
						$(".stop").click(function(){
						owl.trigger('owl.stop');
						})

						});
					</script>
-->
<div class="row">

	<div class="col-xs-12">

		<div id="awesome-carouesel" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<?php 	$args_cat = array(
		'include' => '6, 7, 8'
	);
	$categories = get_categories($args_cat);
	$count = 0;
	$bullet = '';
	foreach($categories as $category):
	
		$args = array(
		'type' => 'post',
		'posts_per_page' => 1,
		'category__in' => $category->term_id,
		'category__not_in' => array( 1 )
		);
						$lastBlog = new WP_Query($args);
						if( $lastBlog->have_posts() ):
		
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				<div class="item <?php if($count == 0): echo "active"; endif; ?>">
					<?php the_post_thumbnail('full'); ?>
					<div class="carousel-caption">
						<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
						<small><?php the_category(' '); ?></small>
					</div>
				</div>

				<?php $bullet .='<li data-target="#awesome-carouesel" data-slide-to="'.$count.'" class="'; ?>
				<?php if($count == 0): $bullet .= 'active'; endif; ?>
				<?php $bullet .= '"></li>'; ?>
				<?php endwhile;
			endif;
			wp_reset_postdata();
			$count++; 
			endforeach;?>
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php echo $bullet ?>
				</ol>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#awesome-carouesel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#awesome-carouesel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-xs-12 col-sm-8">
		<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>

		<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;
		
	endif;
	// Print other two posts (not the first one)
/*	$args = array(
		'type' => 'post',
		'posts_per_page' => 2,
		'offset' => 1
	);
	$lastBlog = new WP_Query($args);
						if( $lastBlog->have_posts() ):
		
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

		<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;
		
	endif;
	wp_reset_postdata();	*/
	?>

		<hr>
			<hr>
				<hr>
					<hr>

						<?php
		// Print only tutorials
	/*$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=tutorials');
						if( $lastBlog->have_posts() ):
		
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<?php get_template_part('content',get_post_format()); ?>

						<?php endwhile;
		
	endif;
	wp_reset_postdata();
	?>
					</div>
					<div class="col-xs-12 col-sm-4"><?php get_sidebar(); */?></div>
				</div>
				<?php get_footer(); ?>