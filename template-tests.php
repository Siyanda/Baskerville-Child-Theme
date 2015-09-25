<?php
/*
Template Name: Tests Page
*/
?>

<?php get_header(); ?>

<header class="clearfix"></header>
<div class="wrapper section small-padding">
	<div class="section-inner">
		<div class="content full-width">
			<div class="post">
				<div class="post-header">
						<h2 class="post-title"><?php the_title(); ?></h2>
					</div> <!-- /post-header -->

							<div class="contributors-container">

								<div class='test-row row'>

								<div class="one-third test-info">

									<svg class='test-img'>
                    <image xlink:href="<?php echo get_stylesheet_directory() . '/images/Car.svg'; ?>" alt='Car' width="200" height="280" src="<?php echo get_stylesheet_directory_uri() . '/images/Car.png'; ?>" class='test-img'/>
                  </svg>

									<h4>Light Motor Vehicle</h4>
									<h5>Code 8</h5>
									<p class="test-description">South African driving test for light motor vehicles</p>
									 <a class="button green center" href="/tests/light-motor-vehicle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg class='test-img'>
                    <image xlink:href="<?php echo get_stylesheet_directory() . '/images/Bike.svg'; ?>" alt='Truck' width="200" height="280" src="<?php echo get_stylesheet_directory_uri() . '/images/Bike.png'; ?>" class='test-img'/>
                  </svg>

									<h4>Motorcycle Licence Test</h4>
									<h5>Code 4</h5>
									<p class="test-description">South African driving test for motorcycles</p>
									<a class="button green center" href="/tests/motorcycle-test/">Take Test</a>
								</div> <!-- /test-info -->

								<div class="one-third test-info">
									<svg class='test-img'>
                    <image xlink:href="<?php echo stylesheet_directory() . '/images/Truck.svg'; ?>" alt='Truck' width="200" height="280" src="<?php echo get_stylesheet_directory_uri() . '/images/Truck.png'; ?>" class='test-img'/>
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