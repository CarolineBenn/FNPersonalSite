<?php get_header(); ?>


<div class="page-header category">
  <div class="row">
    <div class="medium-12 columns">
      <h2><?php single_cat_title(); ?></h2>
    </div>
  </div>
</div>


<div class="row">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="medium-4 columns category-link">

      <?php 
      $categories = get_categories( array(
          'orderby' => 'name',
          // 'parent'  => 1,
          'depth' => 2,
      ) );
       
      foreach ( $categories as $category ) {
          printf( '<a href="%1$s">%2$s</a><br />',
              esc_url( get_category_link( $category->term_id ) ),
              esc_html( $category->name )
          );
      }
        //echo "<a href='" . get_the_permalink() . "'>" . get_the_post_thumbnail() . "</a>";    
        //echo "<a class='post-title' href='" . get_the_permalink() . "'>" . get_the_title() . "</a>";
      ?>
    </div>
  <?php endwhile; ?>
</div>






<!-- This is the thumbail/title/excerpt bit: -->

<!--
<div class="row">
  <?php // if ( have_posts() ) : ?>
  <?php // while ( have_posts() ) : the_post(); ?>
    <div class="medium-4 columns category-link">
      <?php // the_post_thumbnail() ?>
      <h2>
        <a href="<?php // the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php // the_title_attribute(); ?>">
        <?php // the_title(); ?></a>
      </h2>
      
      <div class="entry">
        <?php // the_excerpt(); ?>
      </div>
    </div>
  <?php // endwhile;
    // else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php // endif; ?>
</div>
-->














<div class="row">
  <div class="medium-12 columns">
    <h4 style="color: #bbb; font-style: italic; margin-top: 3em">This is the category-works.php page</h4>
  </div>
</div>

<?php get_footer(); ?>