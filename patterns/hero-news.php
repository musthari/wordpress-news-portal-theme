<?php
/**
 * Title: Hero News
 * Slug: news-portal/hero-news
 * Categories: news-portal
 * Description: Large lead story with a vertical list of smaller highlights.
 */
?>
<!-- wp:group {"className":"news-portal-hero","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-hero">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
  <div class="wp-block-columns alignwide">
    <div class="wp-block-column" style="flex-basis:66.66%">
      <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"420px","size":"large","style":{"borderRadius":"18px"}} /-->
      <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"clamp(2rem, 2vw + 1rem, 3rem)","fontFamily":"var:preset|font-family|heading","fontWeight":"700","lineHeight":"1.15"}}} /-->
      <!-- wp:post-excerpt {"showMoreOnNewLine":false,"moreText":"Read more"} /-->
    </div>
    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
      <div class="wp-block-query">
        <!-- wp:post-template -->
          <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"1rem"},"blockGap":"0.75rem"}}} -->
          <div class="wp-block-columns" style="margin-bottom:1rem;">
            <div class="wp-block-column" style="flex-basis:40%">
              <!-- wp:post-featured-image {"isLink":true,"size":"thumbnail","style":{"borderRadius":"12px"}} /-->
            </div>
            <div class="wp-block-column" style="flex-basis:60%">
              <!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"1.1rem","fontFamily":"var:preset|font-family|heading"}}} /-->
              <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":15,"moreText":""} /-->
            </div>
          </div>
          <!-- /wp:columns -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
