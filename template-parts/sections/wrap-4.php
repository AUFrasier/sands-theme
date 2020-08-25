<?php
/**
 * Template part for displaying Section 4 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-4">
    <div class="row">
        <div class="col-12">
            <h1>What People Are Saying About Us</h1>
        </div>      
    </div>


<?php get_template_part( 'template-parts/partials/testimonials' ); ?>

<div class="row">
    <div class="col-12 rowForBtnReadMore">
        <button class="textInBtn"><a href="<?php echo the_permalink()?>">Read More</button>
        <div class="swiper-pagination-testimonials"></div>
    </div>
</div>

    
    <div class="container-fluid">
        <div id="bond">         
        </div>
	</div>
</div><!-- .wrap-4 -->
