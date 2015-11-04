<?php

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

require('classes/theme-cpt.php');

add_action( 'wp_enqueue_scripts', 'ppm_scripts_and_styles', 999 );

function ppm_scripts_and_styles() {
    global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    if (!is_admin()) {
         
        wp_register_script( 'third-party', get_stylesheet_directory_uri() . '/library/js/third-party.js', array('jquery'), '1.0.8',true);
        
        wp_register_script( 'ppm', get_stylesheet_directory_uri() . '/library/js/ppm.js', array('third-party','packery','jquery'), '1.0.49',true);

        wp_enqueue_script('packery');

        wp_localize_script( 'ppm', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

        wp_enqueue_script('ppm');

      
    }
}

/**
 * Metabox for Page Slug
 * @author Tom Morton
 * @link https://github.com/WebDevStudios/CMB2/wiki/Adding-your-own-show_on-filters
 *
 * @param bool $display
 * @param array $meta_box
 * @return bool display metabox
 */
function be_metabox_show_on_slug( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
        return $display;
    }

    if ( 'slug' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $slug = get_post( $post_id )->post_name;

    // See if there's a match
    return in_array( $slug, (array) $meta_box['show_on']['value']);
}
add_filter( 'cmb2_show_on', 'be_metabox_show_on_slug', 10, 2 );

add_filter('redux/options/tpb_options/sections', 'child_sections');
function child_sections($sections){
    //$sections = array();
    $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'fa fa-gears',
        'title'         => __('Theme Options', 'ppm-framework'),
        'desc'          => __('<p class="description">Theme modifications</p>', 'ppm'),
        'fields' => array(
            array(
                'id'=>'site_logo',
                'type' => 'media', 
                'url'=> true,
                'title' => __('Site Logo', 'ppm'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'=> __('Select main logo from media gallery', 'ppm'),
                'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
            ),
            array(
                'id'=>'footer_logo',
                'type' => 'media', 
                'url'=> true,
                'title' => __('Site Footer Logo', 'ppm'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'=> __('Select main logo from media gallery', 'ppm'),
                'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
            ),
        )
    );


     $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'icon icon-heart',
        'title'         => __('Social Profiles', 'ppm-framework'),
        'desc'          => __('<p class="description">Social Network URLS</p>', 'ppm'),
        'fields' => array(
            array(
                        'id'=>'twitter_url',
                        'type' => 'text',
                        'title' => __('Twitter', 'redux-framework-demo'),
                        'desc' => __('Enter your twitter url', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'facebook_url',
                        'type' => 'text',
                        'title' => __('Facebook', 'redux-framework-demo'),
                        'desc' => __('Enter your Facebook URL', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'pinterest_url',
                        'type' => 'text',
                        'title' => __('Pinterest', 'redux-framework-demo'),
                        'desc' => __('Enter your pinterest URL', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'instagram_url',
                        'type' => 'text',
                        'title' => __('Instagram', 'redux-framework-demo'),
                        'desc' => __('Enter your Instagram URL', 'redux-framework-demo'),
                        ),  
            )
    );


     $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'icon icon-heart',
        'title'         => __('Get to Know Us', 'ppm-framework'),
        'desc'          => __('<p class="description">Social Network URLS</p>', 'ppm'),
        'fields' => array(
            array(
                        'id'=>'know_content',
                        'type' => 'textarea',
                        'title' => __('Get to Know Us - Content', 'redux-framework-demo'),
                        'desc' => __('Text for Get To Know Us section on Home page', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'know_video_url',
                        'type' => 'text',
                        'title' => __('Get to Know Us - Video', 'redux-framework-demo'),
                        'desc' => __('Paste the video URL', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'know_btn1_text',
                        'type' => 'text',
                        'title' => __('Get to Know Us - Btn 1 Text', 'redux-framework-demo'),
                        'desc' => __('Enter the label for the 1st button', 'redux-framework-demo'),
                        ), 
            array(
                        'id'=>'know_btn1_url',
                        'type' => 'text',
                        'title' => __('Get to Know Us - Btn 1 URL', 'redux-framework-demo'),
                        'desc' => __('Enter the link for the 1st button', 'redux-framework-demo'),
                        ), 
            array(
                        'id'=>'know_btn2_text',
                        'type' => 'text',
                        'title' => __('Get to Know Us - Btn 2 Text', 'redux-framework-demo'),
                        'desc' => __('Enter the label for the 1st button', 'redux-framework-demo'),
                        ), 
            array(
                        'id'=>'know_btn2_url',
                        'type' => 'text',
                        'title' => __('Get to Know Us - Btn 2 URL', 'redux-framework-demo'),
                        'desc' => __('Enter the link for the 2nd button', 'redux-framework-demo'),
                        ), 
        )
    );

     $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'icon icon-heart',
        'title'         => __('Book Us', 'ppm-framework'),
        'desc'          => __('<p class="description">Options for Book Us section on Home page</p>', 'ppm'),
        'fields' => array(
            array(
                        'id'=>'book_heading',
                        'type' => 'text',
                        'title' => __('Heading', 'redux-framework-demo'),
                        'desc' => __('Heading for Book Us section on Home page', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'book_sub_heading',
                        'type' => 'text',
                        'title' => __('Sub Heading', 'redux-framework-demo'),
                        'desc' => __('Sub Heading for Book Us section on Home page', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'book_content',
                        'type' => 'textarea',
                        'title' => __('Content', 'redux-framework-demo'),
                        'desc' => __('Text for Book Us section on Home page', 'redux-framework-demo'),
                        ),  
          
        )
    );

    return $sections;


}

function sergio($str) {
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

register_nav_menus(
    array(
        'secondary-nav' => __( 'Secondary Navigation', 'bonestheme' ),   // main nav in header
        'footer-nav' => __( 'Footer Nav', 'bonestheme' ),   // main nav in header
        'latest-nav' => __( 'Latest Nav', 'bonestheme' ),   // main nav in header
    )
);

function secondary_nav($nav = 'secondary-nav',$class='nav_secondary') {
    // display the wp3 menu if available
    wp_nav_menu(array(
        'container' => false,                                       // remove nav container
        'container_class' => 'menu clearfix',                       // class of container (should you choose to use it)
        'menu' => __( 'The Secondary Menu', 'bonestheme' ),              // nav name
        'menu_class' => $class,              // adding custom nav class
        'theme_location' => $nav,                             // where it's located in the theme
        'before' => '',                                             // before the menu
        'after' => '',                                            // after the menu
        'link_before' => '',                                      // before each link
        'link_after' => '',                                       // after each link
        'depth' => 2,                                             // limit the depth of the nav
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',  // fallback
        'walker' => new wp_bootstrap_navwalker()                    // for bootstrap nav
    ));
} /* end bones main nav */


// Allow SVG Uploads
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Page Menu for Home Page
if ( ! function_exists( 'page_menu' ) ) {
    function page_menu ( $menu_name ) {
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $count = 0;
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<div class="portfolio_blocks">';
            
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $count++;
                $menu_list .=   '<div class="col-md-4">
                                    <a class="hover-block" href="'.get_permalink($menu_item->object_id).'">
                                        <div class="hover-text">
                                            <span class="img-title">'.$menu_item->title.'</span>
                                            <p class="more-link">View More</p>
                                        </div>
                                        <div class="hover-img">'. get_the_post_thumbnail($menu_item->object_id,'medium').'</div>
                                    </a>
                                </div>';
            }

            $menu_list .= '</div>';
        } else {
            $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
        }
        // $menu_list now ready to output
        echo $menu_list;
    }
}


add_action( 'cmb2_init', 'campaign_register_metabox');

function campaign_register_metabox() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_ppm_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    
    $home_meta = new_cmb2_box( array(
        'id'            => $prefix . 'home_metabox',
        'title'         => __( 'Home Page Meta', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'       => array('key'=>'page-template','value'=>'page-home.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $home_meta->add_field( array(
        'name'    => __( 'Slider Posts', 'cmb2' ),
        'desc'    => __( 'Drag posts from the left column to the right column to attach them to the home page slider.<br />You may rearrange the order of the slides in the right column by dragging and dropping.', 'cmb2' ),
        'id'      => 'attached_cmb2_attached_posts',
        'type'    => 'custom_attached_posts',
        'options' => array(
            'show_thumbnails' => true, // Show thumbnails on the left
            'filter_boxes'    => true, // Show a text box for filtering the results
            'query_args'      => array( 'posts_per_page' => 10 ), // override the get_posts args
        )
    ) );


    $home_meta->add_field( array(
        'name'             => 'About Excerpt',
        'desc'             => 'Enter about section excerpt...',
        'id'               => $prefix.'about_excerpt',
        'type'             => 'textarea_small',
    ) );

    $home_meta->add_field( array(
        'name'             => 'About Profile Image',
        'desc'             => 'Enter about section profile image...',
        'id'               => $prefix.'about_image',
        'type'             => 'file',
    ) );

    $home_meta->add_field( array(
        'name'             => 'About Profile Link',
        'desc'             => 'Enter about profile link',
        'id'               => $prefix.'about_link',
        'type'             => 'text',
    ) );

    $post_meta = new_cmb2_box( array(
        'id'            => $prefix . 'post_metabox',
        'title'         => __( 'Post Meta', 'cmb2' ),
        'object_types'  => array( 'post' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );


    $post_meta->add_field( array(
        'name'             => 'Quote',
        'desc'             => 'Enter quote...',
        'id'               => $prefix.'quote_text',
        'type'             => 'textarea_small',
    ) );

    $post_meta->add_field( array(
        'name'             => 'Quote Citation',
        'desc'             => 'Enter the quote citation...',
        'id'               => $prefix.'quote_cite',
        'type'             => 'text',
    ) );

    $category_meta = new_cmb2_box( array(
        'id'            => $prefix . 'category_metabox',
        'title'         => __( 'Portfolio Options', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template',
                                 'value' => array(
                                    'template-about.php',
                                    'template-gallery.php'
                                    )
                                ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );


    $category_meta->add_field( array(
        'name'     => 'Category',
        'desc'     => 'Select the connected category for content',
        'id'       => $prefix.'category_select',
        'taxonomy' => 'category', 
        'type'     => 'taxonomy_select',
    ) );
   


}

function be_metabox_show_on_child_of( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
        return $display;
    }

    if ( 'child_of' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $pageids = array();
    foreach( (array) $meta_box['show_on']['value'] as $parent_id ) {
        $pages = get_pages( array(
            'child_of'    => $parent_id,
            'post_status' => 'publish,draft,pending',
        ) );

        if ( $pages ) {
            foreach( $pages as $page ){
                $pageids[] = $page->ID;
            }
        }
    }
    $pageids_unique = array_unique( $pageids );

    return in_array( $post_id, $pageids_unique );
}
add_filter( 'cmb2_show_on', 'be_metabox_show_on_child_of', 10, 2 );




// Default Image Linking
function ppm_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'ppm_imagelink_setup', 10);
?>