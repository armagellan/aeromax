<?php
/**
 * Template Name: Kinovedy Conditioners
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="cat container">
<?php
	$categories = get_categories( 'child_of=12' );
	if( $categories ){
		foreach( $categories as $cat ){ ?>

				<div class="name" style="float:left;">
					<?php if($img_category=get_field("img_category",$cat)){?>
					<a href="<?php echo get_category_link($cat->term_id);?>" title="<?php echo $cat->name;?>">
						<img src="<?php echo $img_category;?>"/>
					</a>
					<?php }?>
				</div>

		<?php }
	}
?>
</div>

<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Кондиціонери</h1>
			</header><!-- .page-header -->

			<div class="entry-content">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

					<div class='col-lg-4 anons-product'>
						<a href='<?php the_permalink(); ?>'>
							<?php the_post_thumbnail(); ?>
							<h3>
								<?php the_title(); ?>
							</h3>
						</a>
							<span class="square-val">Площа охолодження до <?php echo get_post_meta($post->ID, 'square', true); ?>м<sup>2</sup></span>
							<br><br><span class="price-val"><?php echo get_post_meta($post->ID, 'price', true); ?>грн.</span>
						<a href='<?php the_permalink(); ?>'>
							<input type="hidden" name="product-id" value="<?php echo $post->ID; ?>">
							<input type="button" value="КУПИТИ" style="float:right;" />
						</a>
					</div>

				<?php endwhile; ?>
				
				

			</div>
            
			<?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
            
             the_archive_description( '<div class="taxonomy-description">', '</div>' );
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>