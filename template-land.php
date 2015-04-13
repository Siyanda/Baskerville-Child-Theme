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
				 <a class="search-toggle fright" href="#"></a>

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

	<header class="hero">
		 <div class="intro">
		    <h1>Welcome</h1>
		    <p>Some text about the product</p>
		    </br>
		    <button class="button blue">Read More</button>
		 </div>
	</header>

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

									<svg class='test-img'>
                    <image xlink:href="http://learnertodriver.co.za/wp-content/uploads/Car.svg" alt='Car' width="200" height="280" src="http://learnertodriver.co.za/wp-content/uploads/Car.png" class='test-img'/>
                  </svg>

									<h4>Light Motor Vehicle</h4>
									<h5>Code 8</h5>
									<p class="test-description">South African driving test for light motor vehicles</p>
									 <a class="button green center" href="http://learnertodriver.co.za/tests/light-motor-vehicle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg class='test-img'>
                    <image xlink:href="http://learnertodriver.co.za/wp-content/uploads/Bike.svg" alt='Bike' width="200" height="280" src="http://learnertodriver.co.za/wp-content/uploads/Bike.png" class='test-img'/>
                  </svg>

									<h4>Motorcycle Licence Test</h4>
									<h5>Code 4</h5>
									<p class="test-description">South African driving test for motorcycles</p>
									<a class="button green center" href="http://learnertodriver.co.za/tests/motorcycle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg class='test-img'>
                    <image xlink:href="http://learnertodriver.co.za/wp-content/uploads/Truck.svg" alt='Truck' width="200" height="280" src="http://learnertodriver.co.za/wp-content/uploads/Truck.png" class='test-img'/>
                  </svg>

									<h4>Heavy Motor Vehicle</h4>
									<h5>Code 10</h5>
									<p class="test-description">South African driving test for heavy motor vehicles</p>

									<a class="button green center" href="http://learnertodriver.co.za/tests/heavy-motor-vehicle-test/">Take Test</a>
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