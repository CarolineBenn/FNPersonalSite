<?php // Opening PHP tag - nothing should be before this, not even whitespace

// Custom Function to Include
function my_favicon_link() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );



// Set default values for the upload media box
/*
function mytheme_setup() {
  update_option('image_default_align', 'center' );
  update_option('image_default_link_type', 'none' );
  update_option('image_default_size', 'large' );
}
add_action('after_setup_theme', 'mytheme_setup');
*/



// This function just strips any images from `the_content()` hook:
add_filter('the_content', 'strip_images', 2);
function strip_images($content){
   return preg_replace('/<img[^>]+./','', $content);
}


/*
================================
  Custom Post Type
================================
*/


// function custom_post_type(){
//   $labels = array(
//     'name'               => 'Blog',
//     'singular_name'      => 'Blog',
//     'add_new'            => 'Add New Blog',
//     'all_items'          => 'All Blogs',
//     'add_new_item'       => 'Add New Blog',
//     'edit_item'          => 'Edit Blog',
//     'new_item'           => 'New Blog',
//     'view_item'          => 'View Blog',
//     'search_item'        => 'Search Blog',
//     'not_found'          => 'No Blog Found',
//     'not_found_in_trash' => 'No Blog found in trash',
//     'parent_item_colon'  => 'Parent Blog',
//   );

//   $args = array(
//     'labels'              => $labels,
//     'public'              => true,
//     'has_archive'         => true,
//     'publicly_queryable'  => true,
//     'query_var'           => true,
//     'rewrite'             => true,
//     'capability_type'     => 'post',
//     'hierarchical'        => true,
//     'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions' /* 'comments' */ ),
//     'taxonomies'          => array('category', 'post_tag'),
//     'menu_position'       => 5,
//     'exclude_from_search' => false,
//   );

//   register_post_type('blog', $args);
//   register_taxonomy_for_object_type( 'category', 'blog' );

// }

// add_action('init', 'custom_post_type')



/* 
==============================================================================
  >> Code taken from:
  >> http://wordpress.stackexchange.com/questions/8736/add-custom-field-to-category
=================================================================================

function addTitleFieldToCat(){
    $cat_title = get_term_meta($_GET['tag_ID'], '_pagetitle', true);
    ?> 
    <tr class="form-field">
        <th scope="row" valign="top"><label for="cat_page_title"><?php _e('Category Page Title'); ?></label></th>
        <td>
        <input type="text" name="cat_title" id="cat_title" size="3" style="width:60%;" value="<?php echo $cat_title ?>"><br />
            <span class="description"><?php _e('Title for the Category '); ?></span>
        </td>
    </tr>
    <?php

}
add_action( 'edit_category_form_fields', 'addTitleFieldToCat');

function saveCategoryFields() {
    if ( isset( $_POST['cat_title'] ) ) {
        add_term_meta($_GET['tag_ID'], '_pagetitle', $_POST['cat_title']);
    }
}
add_action( 'edited_category', 'saveCategoryFields');
*/

?>