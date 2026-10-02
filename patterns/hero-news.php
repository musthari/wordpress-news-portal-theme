<?php
/**
 * Title: Hero News
 * Slug: news-portal/hero-news
 * Categories: news-portal
 * Description: Large lead story with smaller highlight stories on the right.
 */
?>
<!-- wp:group {"className":"news-portal-hero","style":{"spacing":{"margin":{"top":"0","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-hero">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}}} -->
  <div class="wp-block-columns alignwide">
    <div class="wp-block-column" style="flex-basis:66.66%">
      <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
      <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=1200&q=80" alt="Lead news"/></figure>
      <!-- /wp:image -->
      <!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"clamp(2.1rem, 2vw + 1rem, 3.2rem)","fontFamily":"var:preset|font-family|heading","fontWeight":"700","lineHeight":"1.2"}}} -->
      Breaking: New Policy Promises Faster, Fairer News Coverage
      <!-- /wp:post-title -->
      <!-- wp:paragraph -->
      Editorial teams are evolving their workflows with stronger accountability, deeper reporting, and a clearer reader-first approach.
      <!-- /wp:paragraph -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Read more</a></div></div>
      <!-- /wp:buttons -->
    </div>
    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
      <div class="wp-block-group">
        <!-- wp:columns {"style":{"spacing":{"blockGap":"0.8rem"}}} -->
        <div class="wp-block-columns">
          <div class="wp-block-column" style="flex-basis:38%">
            <!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
            <figure class="wp-block-image size-thumbnail"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80" alt="Small story 1"/></figure>
            <!-- /wp:image -->
          </div>
          <div class="wp-block-column" style="flex-basis:62%">
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.15rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} -->
            Markets open strong as investors watch the latest trade signals.
            <!-- /wp:heading -->
          </div>
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":"0.8rem"}}} -->
        <div class="wp-block-columns">
          <div class="wp-block-column" style="flex-basis:38%">
            <!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
            <figure class="wp-block-image size-thumbnail"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" alt="Small story 2"/></figure>
            <!-- /wp:image -->
          </div>
          <div class="wp-block-column" style="flex-basis:62%">
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.15rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} -->
            Regional leaders push for a greener economy with new infrastructure plans.
            <!-- /wp:heading -->
          </div>
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":"0.8rem"}}} -->
        <div class="wp-block-columns">
          <div class="wp-block-column" style="flex-basis:38%">
            <!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
            <figure class="wp-block-image size-thumbnail"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" alt="Small story 3"/></figure>
            <!-- /wp:image -->
          </div>
          <div class="wp-block-column" style="flex-basis:62%">
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.15rem","fontFamily":"var:preset|font-family|heading","fontWeight":"700"}}} -->
            Cities expand transit access while digital reporting reaches new communities.
            <!-- /wp:heading -->
          </div>
        </div>
        <!-- /wp:columns -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
