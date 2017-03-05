
<?php get_header(); ?>

    <div class="container marketing">

      <div class="row"> 
       
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-12">
             <h2> <?php the_title(); ?></h2>
            <p>  <?php echo get_the_post_thumbnail($id, [1024,697]); ?> 
         
          <?php the_content(); ?>  </p>
          
                        
        </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?> 
          
         
        
        
      </div><!-- /.row -->

      
     <?php get_footer(); ?>
