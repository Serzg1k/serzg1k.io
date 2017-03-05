
<?php get_header(); ?>

  

   <div class="row featurette">
   
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-7 col-md-push-5">
              <h2 class="featurette-heading"><?php the_title(); ?></h2>
              <p class="lead"><?php the_content(); ?></p>
            </div>
            <div class="col-md-5 col-md-pull-7">
            <?php if (has_post_thumbnail()): ?>
             <?php the_post_thumbnail(array(500,500), array('class'=>"featurette-image img-responsive center-block") ); ?> 
            
          <?php else: ?>
            
              <img src= "<?= get_template_directory_uri() . "/img/nopng.png"; ?>" alt="" width="500" height="500" />
             
          <?php endif; ?>
            </div>           
        </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?> 
          
         
        
        
      </div><!-- /.row -->
<?php 
                        $discription = get_post_meta($post->ID, '_discription', true);
                        $time_massage = get_post_meta($post->ID, '_time_massage', true);
                        $price_massage = get_post_meta($post->ID, '_price_massage', true);
                       
                    ?>
                    <div class="quat">
                        <?php if($discription): ?>
                            <p><span>Описание: </span><?php echo $discription; ?></p>
                        <?php endif; ?>
                        <?php if($time_massage): ?>
                            <p><span>Продолжительность: </span><?php echo $time_massage; ?></p>
                        <?php endif; ?>
                        <?php if($price_massage): ?>
                            <p><span>Стоимость: </span><?php echo $price_massage; ?></p>
                        <?php endif; ?>
                        </div>
   
     <?php get_footer(); ?>

