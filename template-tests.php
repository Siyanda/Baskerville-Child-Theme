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