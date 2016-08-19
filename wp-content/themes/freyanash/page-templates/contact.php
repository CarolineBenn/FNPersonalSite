<?php /* Template Name: Contact */ ?>


<?php get_header(); ?>


<div class="page-header category">
  <div class="row">
    <div class="medium-12 columns">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>


<div class="row">
  <div class="medium-12 columns">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>
  </div>
</div>



<?php get_footer(); ?>
