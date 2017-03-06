<?php get_header(); ?>
  <div id="content" class="mobileUI-main-content">
    <div id="content-inner">
    <h1><?php single_term_title(); ?></h1>
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <?php get_template_part('product', 'details'); ?>
      <?php endwhile; ?>
    <?php endif; ?> 
      <div class="pager">
        <!--<a href="#" class="button previous">Previous Page</a>-->
        <div class="pages"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <span>&hellip;</span> <a href="#">20</a> </div>
        <a href="#" class="button next">Next Page</a> 
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>  