<?php get_header(); ?>


<div class="page-header category">
  <div class="row" data-equalizer>
    <div class="medium-10 columns" data-equalizer-watch>
      <h2><?php single_cat_title(); ?></h2> 
    </div>
    <div class="medium-2 columns category-description" data-equalizer-watch>
      <?php 
        if ( category_description() ) : 
          echo category_description(); 
        endif; 
      ?>
    </div>
  </div>
</div>



<div class="row category-thumbnails" data-equalizer>
      <div id="effect" class="effects clearfix">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="medium-6 columns category-link">
        <div class="img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>'); height: 300px;">
          <div class="overlay">

            <a href="<?php the_permalink() ?>" class="expand"><h3><?php the_title(); ?></h3></a>
            <a class="close-overlay hidden">x</a>
          </div>
        </div>
      </div>
    <?php endwhile;
      else: ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div>
  </div>


<hr>


<div class="row">
  <div class="medium-12 columns">
    <h4 style="color: #bbb; font-style: italic; margin-top: 3em">This is the simple category.php page</h4>
  </div>
</div>

<?php get_footer(); ?>