<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"query":{"posts_per_page":-1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide">
  <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
  <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"wide"} /-->
  <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
  <!-- /wp:post-template -->
</div>
<!-- /wp:query -->