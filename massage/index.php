
<?php get_header(); ?>

  
    <div class="container marketing">
 
      <div class="row"> 
<!--  Счетчик после каждого 3го поста сбрасывается обтекание    -->
       <?php $i = 0; ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if ($i !== 3) :  ?>
     
            <div class="col-lg-4 main-content">
              <?php if (has_post_thumbnail()) : ?>
              <img class="img-circle" <?php echo get_the_post_thumbnail($id, 'thumbnail'); ?> 
              <?php  else : ?>
            <img class="img-circle" src= "<?= get_template_directory_uri() . "/img/nopng.png"; ?>" alt="" width="150" height="150" />
               <?php endif ?>
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>  
        </div>
        <?php $i++; ?>
        <?php else : ?>
          <div style="clear: both;"></div>
          <hr >
          <div class="row">
           <div class="col-lg-4 main-content">
           <?php if (has_post_thumbnail( )) : ?>
              <img class="img-circle"  
              <?php  echo get_the_post_thumbnail($id, 'thumbnail'); ?>
             <?php  else : ?>
            <img class="img-circle" src= "<?= get_template_directory_uri() . "/img/nopng.png"; ?>" alt="" width="150" height="150" />
               <?php endif ?>
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?> 
        </div>
        <?php $i=0; ?>
        <?php $i++; ?>
    <?php endif ?>
      <?php endwhile; ?>
      
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?> 
          
        
        
        
      </div><!-- /.row -->

       <hr class="featurette-divider">
      <div class="clearfix"></div>
       <?php sh_pagination() ?> 

      <!-- START THE FEATURETTES -->

     

      
    <?php get_footer(); ?>
  
