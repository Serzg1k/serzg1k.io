<?php 

$slider = new WP_Query(array('post_type'=> 'slider')) ?>

<!-- Вывод индикации слайдера -->

<?php  $public_slider = wp_count_posts('slider'); ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		<?php $cls_act = true; ?>
	<?php for ($i=0; $i <$public_slider->publish ; $i++) : ?>
		<?php if ($cls_act): ?>
			<li data-target="#myCarousel" data-slide-to="<?php $public_slider->publish ?>" class="active"></li>
			<?php $cls_act = false; ?>
		<?php else: ?>
			<li data-target="#myCarousel" data-slide-to="<?php $public_slider->publish ?>"></li>
		<?php endif ?>
        	
    <?php endfor; ?>
        </ol>
<!-- Окончание индикации слайдера -->

<!-- Вывод картинок слайдера -->     
<?php if ( $slider->have_posts() ) : ?>
	
      <div class="carousel-inner" role="listbox">
      <?php $active = true; ?>
<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
	<?php if ($active): ?>
		<div class="item active">
          <?php  the_post_thumbnail(array(1500,400)); ?>
        </div>
        <?php $active = false; ?>
  <?php else : ?>
  		<div class="item">
          <?php  the_post_thumbnail(array(1500,400)); ?>
        </div>
	<?php endif ?>
	

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
</div>
<!-- конец вывода картинок слайдера -->
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
