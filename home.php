<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<!-------------------------------->
<!---- Create by Vlad      ------->
<!-------------------------------->
<!--<div class="row">-->
	<!-- Slider--> 
            <div class="col-lg-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Slide markers -->
                  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="slide active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="slide"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="slide"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="slide"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4" class="slide"></li>
                  </ol>
 
                  <!-- Slide text -->

                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide01.png" alt="...">
                      <div class="carousel-caption hidden-xs hidden-sm">
                        <div><h2>Promislovі holodilnі Depos</h2></div>
                        <p>rozrahunok że pіdbіr obladnannya</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide01.png" alt="...">
                      <div class="carousel-caption hidden-xs hidden-sm">
                        <div><h2>Promislovі holodilnі Depos</h2></div>
                        <p>rozrahunok że pіdbіr obladnannya</p>
                      </div>
                    </div>
                     
                    <div class="item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide01.png" alt="...">
                      <div class="carousel-caption hidden-xs hidden-sm">
                        <div><h2>Promislovі holodilnі Depos</h2></div>
                        <p>rozrahunok że pіdbіr obladnannya</p>
                      </div>
                    </div>
                     
                    <div class="item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide01.png" alt="...">
                      <div class="carousel-caption hidden-xs hidden-sm">
                        <div><h2>Promislovі holodilnі Depos</h2></div>
                        <p>rozrahunok że pіdbіr obladnannya</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide01.png" alt="...">
                      <div class="carousel-caption hidden-xs hidden-sm">
                        <div><h2>Promislovі holodilnі Depos</h2></div>
                        <p>rozrahunok że pіdbіr obladnannya</p>
                      </div>
                    </div>

                  </div>
 
    			  <!-- Slide controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <img id="slideLR" src="<?php echo get_template_directory_uri(); ?>/images/left.png" width="60" height="60">
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <img id="slideLR" src="<?php echo get_template_directory_uri(); ?>/images/right.png" width="60" height="60">
                  </a>
                </div>
            </div>
   <!-- END SLIDER --> 
<!--</div>-->
<!-------------------------------->
<!----End  Create by Vlad------->
<!-------------------------------->

<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'home' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
