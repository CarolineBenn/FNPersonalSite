<?php get_header(); ?>


<div class="page-header category">
  <div class="row">
    <div class="medium-12 columns">
      <h2><?php single_cat_title(); ?></h2>
    </div>
  </div>
</div>


<div class="row" id="category-index">
  <div id="effect" class="effects clearfix">
  <?php
    $categories = get_categories( array(
      'orderby' => 'date',
    // 'parent'  => 1,
      'depth' => 2,
      ));

    foreach ($categories as $category) { ?>

      <div class="medium-4 columns category-link">
        <?php
        $category_id = get_cat_ID($category->name);
        $category_link = get_category_link( $category_id );

      // Query the posts by category_name:
        query_posts(array('category_name' => $category->name, 'posts_per_page' => 1));

      // While that cateogry has a post, display the most recent post's thumbnail to be the category immage:
        while ( have_posts() ) : the_post(); ?>
          <div class="img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>'); height: 300px;">
            <div class="overlay">
              <a href="<?php echo esc_url( $category_link ); ?>" class="expand"><h3><?php echo ($category->name) ?></h3></a>
              <a class="close-overlay hidden">x</a>
            </div>
          </div>
        <?php
        endwhile; 
        wp_reset_query();
        ?>
      </div>

      <?php } ?>

    </div>
  </div>


  <div class="row">
    <div class="medium-12 columns">
      <h4 style="color: #bbb; font-style: italic; margin-top: 3em">This is the category-works.php page</h4>
    </div>
  </div>

  <?php get_footer(); ?>