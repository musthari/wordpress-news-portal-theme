<?php
/**
 * Title: Latest News List
 * Slug: news-portal/latest-news-list
 * Categories: news-portal
 * Description: A list of current stories with an ad block on the right.
 */
?>
<!-- wp:group {"className":"news-portal-latest-list","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-latest-list">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}}} -->
  <div class="wp-block-columns alignwide">
    <div class="wp-block-column" style="flex-basis:68%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"2.1rem"}}} -->
      <h2>Latest News</h2>
      <!-- /wp:heading -->

      <!-- wp:columns {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}}} -->
      <div class="wp-block-columns" style="margin-bottom:1rem;">
        <div class="wp-block-column" style="flex-basis:28%">
          <!-- wp:image {"url":"https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=900&q=80","alt":"Story 1","sizeSlug":"medium","linkDestination":"none"} -->
          <figure class="wp-block-image size-medium"><img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=900&q=80" alt="Story 1"/></figure>
          <!-- /wp:image -->
        </div>
        <div class="wp-block-column" style="flex-basis:72%">
          <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.7rem"}}} -->
          <h3>Urban transit projects gain momentum amid rising commuter demand</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph -->
          <p>Authorities say the new investment plan will cut travel times, expand access, and support safer daily commutes across major districts.</p>
          <!-- /wp:paragraph -->
        </div>
      </div>
      <!-- /wp:columns -->

      <!-- wp:columns {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}}} -->
      <div class="wp-block-columns" style="margin-bottom:1rem;">
        <div class="wp-block-column" style="flex-basis:28%">
          <!-- wp:image {"url":"https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80","alt":"Story 2","sizeSlug":"medium","linkDestination":"none"} -->
          <figure class="wp-block-image size-medium"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80" alt="Story 2"/></figure>
          <!-- /wp:image -->
        </div>
        <div class="wp-block-column" style="flex-basis:72%">
          <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.7rem"}}} -->
          <h3>Analysts predict a steadier quarter as businesses rethink spending</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph -->
          <p>Investors are watching inflation, wages, and infrastructure priorities as companies calibrate future growth plans.</p>
          <!-- /wp:paragraph -->
        </div>
      </div>
      <!-- /wp:columns -->

      <!-- wp:columns {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}}} -->
      <div class="wp-block-columns" style="margin-bottom:1rem;">
        <div class="wp-block-column" style="flex-basis:28%">
          <!-- wp:image {"url":"https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=900&q=80","alt":"Story 3","sizeSlug":"medium","linkDestination":"none"} -->
          <figure class="wp-block-image size-medium"><img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=900&q=80" alt="Story 3"/></figure>
          <!-- /wp:image -->
        </div>
        <div class="wp-block-column" style="flex-basis:72%">
          <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.7rem"}}} -->
          <h3>Digital-first publishing sees renewed demand as audiences seek clarity</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph -->
          <p>Newsrooms are adapting to a faster, smarter media cycle with richer explainers and more direct storytelling formats.</p>
          <!-- /wp:paragraph -->
        </div>
      </div>
      <!-- /wp:columns -->
    </div>

    <div class="wp-block-column" style="flex-basis:32%">
      <!-- wp:group {"className":"news-portal-ad-slot","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
      <div class="wp-block-group news-portal-ad-slot">Advertisement</div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
