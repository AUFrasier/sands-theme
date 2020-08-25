<?php
/**
 * Template part for displaying the custom footer menu
 *
 *  @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<!---
<div class="footer-menu-wrapper">
    <menu class="footer-menu1">
        <div class="row">          
            <div id="div1">
                <img src="/wp-content/uploads/2020/08/logo-2020.png" id="footer-logo" alt="Footer Logo" >
            </div>

            <div id="div2">
                <ul class="footerMenu">
                    <li><a href ="#">Home</a></li>
                    <li><a href ="#">About Us</a></li>
                    <li><a href ="#">Services</a></li>
                    <li><a href ="#">Products</a></li>
                    <li><a href ="#">Blog</a></li>
                    <li><a href ="#">Contact Us</a></li>
                </ul>
            </div>

            <div id="div3">
	            <div class="number">
		            <a href="tel:+13603869903">360.386.9903</a>
	            </div>	
	            <button type="button" href="#" class="btn btn-lg btn-outline-primary btnSecHeader">Free Estimate</button>
            </div>
            
        </div>          
    </menu>
</div><!-- .footer-menu-wrapper -->


<!---
<div class="row">
<div class="col-12">

<nav class="navbar navbar-expand-lg navbar-light">
  <img src="/wp-content/uploads/2020/08/logo-2020.png" id="footer-logo" alt="Footer Logo" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Meet The Team</a>
          <a class="dropdown-item" href="#">Our Community</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Roof Replacement</a>
          <a class="dropdown-item" href="#">New Construction</a>
          <a class="dropdown-item" href="#">Standing Seam Metal</a>
          <a class="dropdown-item" href="#">Tear Of</a>
          <a class="dropdown-item" href="#">Roof Maintenance</a>
          <a class="dropdown-item" href="#">Roof Repairs</a>
          <a class="dropdown-item" href="#">Torch Down</a>
          <a class="dropdown-item" href="#">Roof Cleaning</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pay Now</a>
      </li>    
    </ul>
  </div>
    <div id="div3">
	    <div class="number">
		    <a href="tel:+13603869903">360.386.9903</a>
	    </div>	
	    <button type="button" href="#" class="btn btn-lg btn-outline-primary btnSecHeader">Free Estimate</button>
    </div>
</nav>

</div>
</div>
-->

<!-- MAIN MENU --->
<div class="header-top">
    <?php get_template_part( 'template-parts/footer/branding' ); ?>
    <?php get_template_part( 'template-parts/footer/navigation' ); ?>
    <?php get_template_part( 'template-parts/footer/footer-action' ); ?>
</div><!-- .header-top -->