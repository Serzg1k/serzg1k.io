<?php get_header(); ?>
  <div id="content" class="mobileUI-main-content">
    <div id="content-inner">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <?php $sub_title = get_post_meta(get_the_ID(), 'sub_title', true); ?>
        <article class="is-post is-post-excerpt">
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if($sub_title): ?>
              <span class="byline"><?php echo $sub_title; ?></span>
            <?php endif; ?>
          </header>
          <div class="info">
            <span class="date">
              <span class="month"><?php the_time('M'); ?></span>
              <span class="day"><?php the_time('d'); ?></span>
              <span class="year">, <?php the_time('Y'); ?></span>
            </span>
            <ul class="stats">
              <li><a href="#" class="link-icon24 link-icon24-1"><?php comments_number(0, 1, '%'); ?></a></li>
            </ul>
          </div>
          <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>" class="image image-full">
              <?php the_post_thumbnail(); ?>
            </a>
          <?php endif; ?>  
          <?php the_excerpt(); ?>
        </article>
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