<?php
/*
Template Name: Landing
*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="navigation section no-padding bg-dark">
			<div class="navigation-inner section-inner">
				<div class="nav-toggle fleft hidden">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="clear"></div>
				</div>
				<ul class="main-menu">
					<?php if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array(
							'container' => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
							'walker' => new baskerville_nav_walker
						) ); } else {
						wp_list_pages( array(
							'container' => '',
							'title_li' => ''
						));
					} ?>

				 </ul> <!-- /main-menu -->

				 <div class="clear"></div>
			</div> <!-- /navigation-inner -->
		</div> <!-- /navigation -->

		<div class="mobile-navigation section bg-graphite no-padding hidden">
			<ul class="mobile-menu">

				<?php if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(

						'container' => '',
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
						'walker' => new baskerville_nav_walker

					) ); } else {
					wp_list_pages( array(
						'container' => '',
						'title_li' => ''
					));
				} ?>
			 </ul> <!-- /main-menu -->
		</div> <!-- /mobile-navigation -->

<div class="clearfix"></div>

	<header class="section medium-padding bg-img">
													
		<div class="blog-title">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<div class=" section-inner">
					        						        			        		                
					<div class="post-caption">
								                                        
						<?php the_content(); ?>
						
						<?php if ( current_user_can( 'manage_options' ) ) : ?>
																								
						<?php endif; ?>
															            			                        
					</div> <!-- /post-content, the landing page main text-->
									
				</div> <!-- /post -->
			
			<?php endwhile; else: ?>
			
				<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "baskerville"); ?></p>
		
			<?php endif; ?>
		
			<div class="clear"></div>
			
		</div> <!-- /content -->
		 
	</header><!-- /post-header -->

<div class="wrapper section small-padding">
	<div class="section-inner">
		<div class="content full-width">
			<div class="post">
				<div class="post-header">
						<h2 class="post-title">Tests</h2>
					</div> <!-- /post-header -->

							<div class="contributors-container">

								<div class='test-row row'>

								<div class="one-third test-info">

									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 214 600 486" enable-background="new 0 214 600 486" xml:space="preserve">
<g id="Layer_2">
	<g>
		<path fill="none" d="M293.9,317.6c1.3-0.3,2.7,0.5,3,1.8c0.3,1.3-0.5,2.7-1.8,3L147.9,359h39.6c0.4-4.7,4.3-8.4,9.1-8.4h213.8
			c4.8,0,8.7,3.7,9.1,8.4h46l-141.6-36.6c-1.3-0.3-2.1-1.7-1.8-3s1.7-2.1,3-1.8l149.4,38.6V250h-331v104.9L293.9,317.6z"/>
		<path fill="#333F4F" d="M59.5,488H108v42h400v-42h48.5v42h19v-64.5L508,434l-3.2-39.3l35.7-35.7h25v-61h-42v52.4l-19,13.3V247
			c0-14.9-12.1-27-27-27h-337c-14.9,0-27,12.1-27,27v118.9l-22-15.4V298h-42v61h25l37.3,37.3L108,434l-68.5,31.5V530h20V488z
			 M173.5,478c-17.1,0-31-13.9-31-31s13.9-31,31-31s31,13.9,31,31S190.6,478,173.5,478z M260.5,498.2c0,4.3-3.6,7.8-8,7.8
			s-8-3.5-8-7.8v-65.4c0-4.3,3.6-7.8,8-7.8s8,3.5,8,7.8V498.2z M316.5,498.2c0,4.3-3.6,7.8-8,7.8s-8-3.5-8-7.8v-65.4
			c0-4.3,3.6-7.8,8-7.8s8,3.5,8,7.8V498.2z M370.5,498.2c0,4.3-3.6,7.8-8,7.8s-8-3.5-8-7.8v-65.4c0-4.3,3.6-7.8,8-7.8s8,3.5,8,7.8
			V498.2z M444.5,478c-17.1,0-31-13.9-31-31s13.9-31,31-31s31,13.9,31,31S461.6,478,444.5,478z M474.5,250v106.2l-149.4-38.6
			c-1.3-0.3-2.7,0.5-3,1.8s0.5,2.7,1.8,3L465.5,359h-46c-0.4-4.7-4.3-8.4-9.1-8.4H196.6c-4.8,0-8.7,3.7-9.1,8.4h-39.6l147.2-36.6
			c1.3-0.3,2.2-1.7,1.8-3c-0.3-1.3-1.7-2.2-3-1.8l-150.4,37.4V250H474.5z"/>
		<path fill="#FDFEFF" d="M300.5,498.2c0,4.3,3.6,7.8,8,7.8s8-3.5,8-7.8v-65.4c0-4.3-3.6-7.8-8-7.8s-8,3.5-8,7.8"/>
		<path fill="#333F4F" d="M592.5,572h-569v44h36.7c-0.5,1.3-0.7,2.6-0.7,4v68c0,6.6,5.6,12,12.5,12h72c6.9,0,12.5-5.4,12.5-12v-57
			h-19.4c-4.2,0-7.6-3.4-7.6-7.5s3.4-7.5,7.6-7.5h345.7c4.2,0,7.6,3.4,7.6,7.5s-3.4,7.5-7.6,7.5h-23.4v57c0,6.6,5.6,12,12.5,12h72
			c6.9,0,12.5-5.4,12.5-12v-68c0-1.4-0.3-2.7-0.7-4h36.7V572z"/>
	</g>
	<line fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" x1="143.5" y1="10" x2="474.5" y2="10"/>
</g>
</svg>

									<h4>Light Motor Vehicle</h4>
									<h5>Code 8</h5>
									<p class="test-description">South African driving test for light motor vehicles</p>
									 <a class="button green center" href="/tests/light-motor-vehicle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 600 700" enable-background="new 0 0 600 700" xml:space="preserve">
<g id="Layer_2">
	<g>
		<path fill="#333F4F" d="M300,16c-46.5,0-86,26.7-100.9,64h-81.9v74.5h86.3c4.8,9,11.2,17.3,18.7,24.5c-62,30.4-105,99.9-105,203.7
			c0,161.6,34.3,228.7,108.3,250.7v-29.7c0-14,5.7-25.4,12.8-25.4s12.8,11.4,12.8,25.4V682c0,7.7,8.5,14,18.9,14H330
			c10.5,0,18.9-6.3,18.9-14V603c0-13.6,5.7-24.6,12.8-24.6s12.8,11,12.8,24.6v32.8c93.5-20.6,108.3-92,108.3-253
			c0-103.9-42.9-173.3-105-203.7c7.6-7.2,13.9-15.5,18.7-24.5h86.3V80h-81.9C386,42.7,346.5,16,300,16z M300,63.7
			c27,0,48.9,21.9,48.9,48.9S327,161.5,300,161.5s-48.9-21.9-48.9-48.9S273,63.7,300,63.7z M397.8,434c0,23.5,0,62.1,0,62.1
			l-48.9-0.4v-25.6c0-7.7-8.5-14-18.9-14H270c-10.5,0-18.9,6.3-18.9,14V495l-51.2-0.4c0,0,0-33.2,0-60.5c0-54.7,44.3-99,99-99
			C353.5,335,397.8,379.4,397.8,434z"/>
		<rect x="18.2" y="98.7" fill="#333F4F" width="76.8" height="36.1"/>
		<rect x="504.9" y="98.7" fill="#333F4F" width="76.8" height="36.1"/>
	</g>
</g>
</svg>

									<h4>Motorcycle Licence Test</h4>
									<h5>Code 4</h5>
									<p class="test-description">South African driving test for motorcycles</p>
									<a class="button green center" href="/tests/motorcycle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 612 792" enable-background="new 0 0 612 792" xml:space="preserve">
<g id="Layer_3">
	<g>
		<rect x="222.3" y="583.3" fill="none" width="166.3" height="10.2"/>
		<path fill="none" d="M125.3,419.4c-8.8-12.8-32.2-28.2-32.2-28.2c-10.8,0-19.5,7.1-19.5,15.8v11.4c0,8.8,8.7,15.8,19.5,15.8h30.4
			C126.9,434.4,129.4,425.4,125.3,419.4z"/>
		<rect x="222.3" y="541.5" fill="none" width="166.3" height="10.2"/>
		<path fill="none" d="M162.7,499.6h-47c-8.4,0-15.2,6.8-15.2,15.2v21.6c0,8.4,6.8,15.2,15.2,15.2h47c8.4,0,15.2-6.8,15.2-15.2
			v-21.6C177.9,506.4,171.1,499.6,162.7,499.6z"/>
		<path fill="none" d="M516.7,391.2c0,0-23.4,15.4-32.2,28.2c-4.1,6-1.6,15,1.8,15h30.4c10.8,0,19.5-7.1,19.5-15.8v-11.4
			C536.2,398.3,527.4,391.2,516.7,391.2z"/>
		<path fill="none" d="M425.5,316.8H182.4c-17.1,3.8-40,85.1-14.6,85.1h286.9C463.1,401.8,445.8,316.8,425.5,316.8z"/>
		<path fill="none" d="M494,499.6h-47c-8.4,0-15.2,6.8-15.2,15.2v21.6c0,8.4,6.8,15.2,15.2,15.2h47c8.4,0,15.2-6.8,15.2-15.2v-21.6
			C509.3,506.4,502.4,499.6,494,499.6z"/>
		<path fill="#333F4F" d="M576.5,66.7H34.5c-8.4,0-15.2,6.8-15.2,15.2v490c0,8.4,6.8,15.2,15.2,15.2h22.9v-22.8
			c0-3.5,2.8-6.3,6.3-6.3c3.5,0,6.3,2.8,6.3,6.3v50.8h16.5v12.7H58.6c-8.4,0-15.2,6.8-15.2,15.2v3.8c0,8.4,6.8,15.2,15.2,15.2h27.9
			V703c0,14.6,6.8,26.4,15.2,26.4h90.9v-54h-3.5c-3.6,0-6.5-2.9-6.5-6.5s2.9-6.5,6.5-6.5h3.5H421h2.5c3.6,0,6.5,2.9,6.5,6.5
			s-2.9,6.5-6.5,6.5H421v54h93.3c8.4,0,15.2-11.8,15.2-26.4v-40.9h22.9c8.4,0,15.2-6.8,15.2-15.2V643c0-8.4-6.8-15.2-15.2-15.2
			h-22.9v-12.7h14v-27.9h0.4v-22.8c0-3.5,2.8-6.3,6.3-6.3s6.3,2.8,6.3,6.3v22.8h19.9c8.4,0,15.2-6.8,15.2-15.2v-490
			C591.8,73.5,585,66.7,576.5,66.7z M93.1,434.4c-10.8,0-19.5-7.1-19.5-15.8v-11.4c0-8.8,8.7-15.8,19.5-15.8
			c0,0,23.4,15.4,32.2,28.2c4.1,6,1.6,15-1.8,15L93.1,434.4L93.1,434.4z M177.9,536.4c0,8.4-6.8,15.2-15.2,15.2h-47
			c-8.4,0-15.2-6.8-15.2-15.2v-21.6c0-8.4,6.8-15.2,15.2-15.2h47c8.4,0,15.2,6.8,15.2,15.2V536.4z M388.7,593.5H222.3v-10.2h166.3
			L388.7,593.5L388.7,593.5z M388.7,551.6H222.3v-10.2h166.3L388.7,551.6L388.7,551.6z M167.8,401.8c-25.4,0-2.5-81.2,14.6-85.1
			h243.1c20.3,0,37.6,85.1,29.2,85.1H167.8z M509.3,536.4c0,8.4-6.8,15.2-15.2,15.2h-47c-8.4,0-15.2-6.8-15.2-15.2v-21.6
			c0-8.4,6.8-15.2,15.2-15.2h47c8.4,0,15.2,6.8,15.2,15.2L509.3,536.4L509.3,536.4z M536.2,418.5c0,8.8-8.7,15.8-19.5,15.8h-30.4
			c-3.4,0-5.9-9-1.8-15c8.8-12.8,32.2-28.2,32.2-28.2c10.8,0,19.5,7.1,19.5,15.8V418.5z"/>
	</g>
</g>
</svg>

									<h4>Heavy Motor Vehicle</h4>
									<h5>Code 10</h5>
									<p class="test-description">South African driving test for heavy motor vehicles</p>

									<a class="button green center" href="/tests/heavy-motor-vehicle-test/">Take Test</a>
								</div> <!-- /test-info -->

						<div class="clear"></div>

					</div> <!-- /test-row -->

				</div> <!-- /contributors-container -->

			</div> <!-- /post -->

		</div> <!-- /full-width -->

		<div class="clear"></div>

	</div> <!-- /section-inner -->

</div> <!-- /wrapper -->

<?php get_footer(); ?>
