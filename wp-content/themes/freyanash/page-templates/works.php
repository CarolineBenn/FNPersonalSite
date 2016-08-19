<?php /* Template Name: Works */ ?>


<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php
  while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
    the_content();
  endwhile;
?>

<?php get_footer(); ?>