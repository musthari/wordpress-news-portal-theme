<?php
/**
 * Title: Category Grid
 * Slug: news-portal/category-grid
 * Categories: news-portal
 * Description: A three-column section grouping top categories.
 */
?>
<!-- wp:group {"className":"news-portal-category-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-portal-category-grid">
  <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"2.1rem"}}} -->
  <h2>Top Categories</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}}} -->
  <div class="wp-block-columns alignwide">
    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:image {"url":"https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80","alt":"Politics","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80" alt="Politics"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.5rem"}}} -->
      <h3>Politics</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Election updates, policy moves, and analysis shaping the public conversation.</p>
      <!-- /wp:paragraph -->
    </div>

    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:image {"url":"https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80","alt":"Business","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="Business"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.5rem"}}} -->
      <h3>Business</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Market signals, corporate decision-making, and the stories behind growth.</p>
      <!-- /wp:paragraph -->
    </div>

    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:image {"url":"https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=900&q=80","alt":"Technology","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=900&q=80" alt="Technology"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","fontSize":"1.5rem"}}} -->
      <h3>Technology</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Digital transformation, innovation, and the future of media and communication.</p>
      <!-- /wp:paragraph -->
    </div>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
