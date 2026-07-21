<?php
/**
 * front-page.php — Static Front Page (Home)
 *
 * WordPress loads this when Settings → Reading is set to
 * "A static page" and a front page is selected.
 *
 * @package elan-law
 */

get_header();
get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/practice-areas' );
get_template_part( 'template-parts/why-choose' );
get_template_part( 'template-parts/bed-bug-attorney' );
get_template_part( 'template-parts/about' );
get_template_part( 'template-parts/cta-banner' );
get_template_part( 'template-parts/contact-section' );
get_footer();
