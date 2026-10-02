<?php
/**
 * Title: Latest News List
 * Slug: news-portal/latest-news-list
 * Categories: news-portal
 * Description: Latest editorial list with thumbnails and a right-hand ad sidebar.
 */
?>
<!-- wp:group {"className":"news-portal-latest-list","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-latest-list">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
  <div class="wp-block-columns alignwide">
    <div class="wp-block-column" style="flex-basis:68%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.1rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} -->
      Latest News
      <!-- /wp:heading -->

      <!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
      <div class="wp-block-query">
        <!-- wp:post-template -->
          <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"1.3rem"},"blockGap":"1.2rem"}}} -->
          <div class="wp-block-columns" style="margin-bottom:1.3rem;">
            <div class="wp-block-column" style="flex-basis:28%">
              <!-- wp:post-featured-image {"isLink":true,"size":"medium","style":{"borderRadius":"14px"}} /-->
            </div>
            <div class="wp-block-column" style="flex-basis:72%">
              <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.75rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700","lineHeight":"1.25"}}} /-->
              <!-- wp:post-excerpt {"excerptLength":28,"moreText":"Read more"} /-->
            </div>
          </div>
          <!-- /wp:columns -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <div class="wp-block-column" style="flex-basis:32%">
      <!-- wp:group {"className":"news-portal-ad-slot","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
      <div class="wp-block-group news-portal-ad-slot">
        Advertisement
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
