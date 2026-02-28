<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
  style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
  <div class="wp-block-group alignwide">
    <!-- wp:site-logo /-->

    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignfull">
      <!-- wp:columns -->
      <div class="wp-block-columns">
        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis:100%">
          <!-- wp:site-title {"level":2} /-->

          <!-- wp:site-tagline /-->
        </div>
        <!-- /wp:column -->


      </div>
      <!-- /wp:columns -->


    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->