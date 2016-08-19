<?php get_header(); ?>


<div class="page-header">
  <div class="row">
    <div class="medium-12 columns">
      <h1>Works</h1>
      <?php echo category_description(); ?>
    </div>
  </div>
</div>








<hr>
  <div class="row">
    <?php //wp_list_categories( array('orderby' => 'name')); ?> 

  <?php
  $categories = get_categories( array(
      'orderby' => 'name',
      'parent'  => 0
  ) );
   
  foreach ( $categories as $category ) {
      printf( '<a href="%1$s">%2$s</a><br />',
          esc_url( get_category_link( $category->term_id ) ),
          esc_html( $category->name )
      );
  }
  
   while ( have_posts() ) : the_post(); ?>
    <div class="medium-4 columns">
      <?php 
        echo "<a href='" . get_the_permalink() . "'>" . the_post_thumbnail() . "</a>";    
        echo "<a class='post-title' href='" . get_the_permalink() . "'>" . get_the_title() . "</a>";
    
      ?>
    <!-- </div> -->
  <?php endwhile; ?>
</div>
</div>


<?php get_footer(); ?>