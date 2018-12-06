<?php
get_header();
?>

<div class="wrapper clearfix">  
<div  class="main_column">
  
<?php

while (have_posts()){ 
  the_post();?>
  <div class="col-lg-4 col-md-6 col-sm-12 col-12 portfolio-item">
          <div class="card h-100 card_travel">
            <a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
            <div class="card-body card-index">
              <h4 class="card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h4>
              <h1>Eva wrote this</h1>
              <h4>ZSOLT WROTE THIS </h4>
              <h5>and this is much better</h5>
              <p class="card-text"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
<?php } ?>
</div>
  



  <div  class="secondary_column">
          <?php  dynamic_sidebar('sidebar1') ?>
    </div>  
</div>
	<?php
get_footer();

?>

