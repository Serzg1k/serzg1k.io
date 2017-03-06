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
          <?php $product_options = get_field_id($id); ?>
          <?php if($product_options): ?>
            <ul class=products-info>
              <?php foreach($product_options as $key => $value): ?>
                <li>
                  <?php if($key == 'product_color'): ?>
                    <div class="product-color" style="background:<?php echo $value; ?> ">
                    </div>
                  <?php else: ?>
                    <?php echo $value; ?>
                  <?php endif; ?>  
                </li>
              <?php endforeach; ?>  
            </ul>
          <?php endif; ?> 
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
      <?php comments_template(); ?>
    <?php endif; ?> 
    </div>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>  