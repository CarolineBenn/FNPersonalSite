<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="page-header">
        <div class="row">
          <div class="medium-12 columns">
            <h2><?php the_title();?></h2>
          </div>
        </div>
      </div>


      <div class="row">
        <div id="gallery" class="medium-9 columns">
          <div class="featured-image-container">
            <div id="featured-image">
            </div>
          </div>
          <div class="thumbnails" data-equalizer>
            <?php echo do_shortcode("[gallery size='large' link='none']"); ?>
          </div>
        </div>
        <div id="post-description" class="medium-3 columns">
          <?php the_content(); ?>
        </div>
      </div>

    <?php endwhile; ?>
  </main>

</div>

<?php get_footer(); ?>
