<?php
/*
  Template name: Products
*/ 
  get_header(); ?>
  <?php
    $page = get_query_var('page', 1);
    $args = array(
              'post_type' => 'product',
              'posts_per_page' => 3,
              'paged' => $page);
    $products = new WP_Query($args);
  ?>
  <div id="content" class="mobileUI-main-content">
    <div id="content-inner">
    <?php if($products->have_posts()): ?>
      <?php while($products->have_posts()): $products->the_post(); ?>
          <?php get_template_part('product', 'details'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
      <div class="pager">
        <!--<a href="#" class="button previous">Previous Page</a>-->
        <div class="pages"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <span>&hellip;</span> <a href="#">20</a> </div>
        <a href="#" class="button next">Next Page</a> 
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>  