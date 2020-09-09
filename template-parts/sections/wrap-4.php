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
            <h2>What People Are Saying About Us</h2>
        </div>      
    </div>


<?php get_template_part( 'template-parts/partials/testimonials' ); ?>

<div class="row row2">

    <div class="col-12 rowForBtnReadMore">
        <a href="https://www.google.com/search?ei=GitFX_GIC-nF0PEP_bag0Ac&q=s%26s+roofing+arlington+washington&oq=s+%26+s+roofing+w&gs_lcp=CgZwc3ktYWIQARgBMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeOgQIABBHOgIIADoLCC4QxwEQrwEQkwI6CAguEMcBEK8BUPJuWMlyYI6JAWgAcAF4AIABrQGIAZcFkgEDMC40mAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab#lrd=0x549aaad000000001:0x1852125908f17c69,1,,," target="_blank">
            <button class="textInBtn">Read More</button>
        </a>
        <div class="swiper-pagination-testimonials"></div>
    </div>

</div>
</div><!-- .wrap-4 -->
