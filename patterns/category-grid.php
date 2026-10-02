<?php
/**
 * Title: Category Grid
 * Slug: news-portal/category-grid
 * Categories: news-portal
 * Description: A three-column category grid for different editorial sections.
 */
?>
<!-- wp:group {"className":"news-portal-category-grid","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-category-grid">
  <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.1rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} -->
  Top Categories
  <!-- /wp:heading -->

  <!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
      <!-- wp:post-featured-image {"isLink":true,"size":"medium","style":{"borderRadius":"14px"}} /-->
      <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.45rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} /-->
      <!-- wp:post-excerpt {"excerptLength":18,"moreText":""} /-->
    <!-- /wp:post-template -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->
