<?php get_header(); ?>

THIS IS thE POsts PAGE?!

<div class="row">
  <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'content', 'page' );
      the_category();
    endwhile;

  ?>
</div>

<?php get_footer(); ?>