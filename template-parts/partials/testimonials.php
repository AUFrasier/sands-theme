<?php
/**
 * Template part for displaying a testimonial slider
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="swiper-container-testimonials">
	<div class="swiper-wrapper">
		<?php
			// args
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'testimonial'
			);
			// query
			$the_query = new \WP_Query( $args );
			?>
			<?php if( $the_query->have_posts() ): ?>
			   
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="swiper-slide"> 
					<div class="testimonial-info">

						<div class="row">
							<div class="col-12">
							<p class="testimonial-content"><?php echo get_post_meta(get_the_ID(), 'content_meta_box_nonce', true); ?></p>
							<p class="testimonial-author"><?php echo get_post_meta(get_the_ID(), 'author_meta_box_nonce', true); ?></p>
							</div>
						</div>
						
						<br>
						
						<!---
						<button class="textInBtn"><a href="<?php echo the_permalink()?>">Read More</button>
						<div class="swiper-pagination-testimonials"></div>
						--->
					</div>
				</div>   
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	</div>
	<!--- <div class="swiper-pagination-testimonials"></div> --->
</div><!-- .swiper-container -->
