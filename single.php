<?php
get_header();
while (have_posts()){
	the_post(); ?>
        <div class="single_post">
         <?php the_post_thumbnail(); ?>
          <div class="single_right_side">
             <h2 class="card-title">
                <?php the_title(); ?>
              </h4>
              <p class="card-text"><?php the_content(); ?></p>
           
          </div>
           
             
        </div>
            

<?php } 
get_footer();

?>