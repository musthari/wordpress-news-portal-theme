<?php
/**
 * Fallback template for the block theme.
 */

get_header();
?>
<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
  <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:post-featured-image {"isLink":true,"size":"medium"} /-->
    <!-- wp:post-title {"isLink":true,"level":3} /-->
    <!-- wp:post-excerpt /-->
  <!-- /wp:post-template -->
</div>
<!-- /wp:query -->
<?php
get_footer();
