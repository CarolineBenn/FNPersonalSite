<?php /* Template Name: Homepage */ ?>

<?php // Get the template part instead: ?>
<?php get_template_part('header', 'homepage') ?>

<div class="homepage-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
  <h1 id="homepage-title" class="hidden">FREYA<span>NASH</span></h1>
</div>

<div class="row">
<div class="medium-12 columns">
<!-- <?php
  /*
  while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    the_content();
  endwhile;
  */
?> -->

</div>
</div>
<?php get_template_part('footer', 'homepage') ?>