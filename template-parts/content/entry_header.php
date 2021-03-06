<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$subpageHeader= "";
if(!is_front_page() && !is_home()){
	$subpageHeader= "subpageHeader";
}
?>

<div class="<?php echo $subpageHeader ?>">	
<header class="entry-header">
	
		<?php
		get_template_part( 'template-parts/content/entry_title', get_post_type() );

		if ( ! is_search() ) {
			get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
		}
		?>	
</header><!-- .entry-header -->
</div>