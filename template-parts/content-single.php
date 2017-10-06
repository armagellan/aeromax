<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<div class="entry-content">
		<div class="col-lg-5">
			<?php the_post_thumbnail(300,300); ?>
		</div>
		<div class="col-lg-7">
			<div class="price-product">
				<span><?php echo get_post_meta($post->ID, 'price', true); ?>грн.</span>
				<input type="button" value="КУПИТИ" style="float:right;" 
				        id="linkBox_sell" data-toggle="modal" data-target="#sell" />
			</div>
			
			<!-- MODAL SALE -->
			<div id="sell" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						    Замовити <?php the_title(); ?>
							<button class="close" type="button" data-dismiss="modal" style="font-size:26px;">
								x
							</button>
						</div>
						<div class="modal-body">
						<?php echo do_shortcode('[contact-form-7 id="195" title="Замовити"]'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="price-work">
				<span><?php echo get_post_meta($post->ID, 'work', true); ?>грн.</span>
				<input type="button" value="Встановлення" style="float:right;" />
			</div>
			<div class="short-specifications">
				Потужність: <?php echo get_post_meta($post->ID, 'power', true); ?> кВт
				<br>Площа макс.: <?php echo get_post_meta($post->ID, 'square', true); ?> м<sup>2</sup>
			</div>
			<div class="short-delivery">
				Стандартна установка від 3 до 4кВт - <?php echo get_post_meta($post->ID, 'work', true); ?>грн.
				<br />Доставка по Львову безкоштовна
				<br />Доставка по Україні - по домовленості
			</div>

		</div>
		<div class="col-lg-12 specifications">
			<h3>характеристики</h3>
			<div class="col-lg-6">
				<table>
					<tr>
						<td>Конструкція</td>
						<td><?php echo get_post_meta($post->ID, 'type', true); ?></td>
					</tr>
					<tr>
						<td>Тип компресора</td>
						<td><?php echo get_post_meta($post->ID, 'type-compressor', true); ?></td>
					</tr>
					<tr>
						<td>Режим</td>
						<td><?php echo get_post_meta($post->ID, 'regime', true); ?></td>
					</tr>
					<tr>
						<td>Площа макс.</td>
						<td><?php echo get_post_meta($post->ID, 'square', true); ?> м<sup>2</sup></td>
					</tr>
					<tr>
						<td>Потужність</td>
						<td><?php echo get_post_meta($post->ID, 'power', true); ?> кВт</td>
					</tr>
					<tr>
						<td>Ширина вн.блоку</td>
						<td><?php echo get_post_meta($post->ID, 'width', true); ?> мм</td>
					</tr>
					<tr>
						<td>Висота вн.блоку</td>
						<td><?php echo get_post_meta($post->ID, 'height', true); ?> мм</td>
					</tr>
					<tr>
						<td>Глибина вн.блоку</td>
						<td><?php echo get_post_meta($post->ID, 'depth', true); ?> мм</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-6">
				<?php the_content(); ?>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
