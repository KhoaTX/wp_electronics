<?php
/*
Plugin Name: Slider
Description: Multiple type of slider for many pages
Version: 1.0
Author: Tuan Le and Hoang Nguyen
Author URI: https://www.facebook.com/lehongtuan29?fref=ts
*/
?>
<?php 
/**
 * Register custom post type: Slider
 *
 * @param @return void
 */
add_action('init', 'banner_register_my_ctps');
function banner_register_my_ctps() {
    $labels = array(
        "name" => "Slider",
        "singular_name" => "Slider",
        'add_new' => 'Add Slider',
        'add_new_item' => 'Add New Slider',
        'edit' => 'Edit',
        'edit_item' => 'Edit Slider',
        'new_item' => 'New Slider',
        'view' => 'View',
        'view_item' => 'View Slider',
        'search_items' => 'Search Slider',
        'not_found' => 'No Sliders found',
        'not_found_in_trash' => 'No Sliders found in Trash',
        'parent' => 'Parent Slider',
    );
    $imagepath = plugins_url('images/slider.png', __FILE__ );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_Slider" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "menu_icon" => $imagepath,
        "rewrite" => array("slug" => "slider", "with_front" => true),
        "query_var" => true,
        "supports" => array("title"),
    );
    register_post_type("slider", $args);
}
/**
 * Add fields for slider 
 *
 * @param @return void
 */
add_action('init', 'add_fields_slider');
function add_fields_slider() {
	register_field_group(array(
        'id' => 'acf_banner-home',
        'title' => ' ',
        'fields' => array(
            array(
                'key' => 'field_56d8e333b37e4',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_56d8e391b37e5',
                        'label' => 'Image',
                        'name' => 'image_slider',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    /*
                    array(
                        'key' => 'field_56d8e3c1b37e6',
                        'label' => 'Image Url',
                        'name' => 'image_url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),*/
                    array(
                        'key' => 'field_56d8e407b37e8',
                        'label' => 'Image title',
                        'name' => 'image_title',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_56d8e419b37e9',
                        'label' => 'Image Description',
                        'name' => 'image_decription',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'slider',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}
/**
 * Register taxonomy: slider_category
 *
 * @param @return void
 */
add_action( 'init', 'create_slider_category', 0 );
function create_slider_category() {
	register_taxonomy(
		'slider_category',
		'slider',
		array(
			'labels' => array(
				'name' => 'Slider Category',
				'add_new_item' => 'Add New Slider Category',
				'new_item_name' => 'New Slider Type Category'	
				),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'slider-category' ),
			)
		);
}


add_action( 'init', 'get_slider', 0 );
function get_slider() {
    $args = array(
        'post_type' => 'slider',
        'taxonomy' => 'slider_category',
        //'term' => 'Main Slider'
    );
    $loop = new WP_Query($args);

    if (!$loop->have_posts()) {
        return '';
    }


    $content = '<script src="' . get_bloginfo("template_url") . '/js/my_slider.js" type="text/javascript"></script>';

    $content .= '<div class="fluid_container">
                      <div class="camera_container">
                         <div id="camera_wrap_0">';

    $index = 0;                        
    while ($loop->have_posts()) : $loop->the_post();
        while (have_rows('image')):the_row();
            $image = get_sub_field('image_slider');
            $index++;
            $content .= '<div title="slide-' . $index . '" data-thumb="' . $image['url'] . '" data-src="' . $image['url'] . '">
                               <div class="camera_caption fadeIn">
                                  <h2>' . get_sub_field('image_title') . '</h2>
                                  <p>' . get_sub_field('image_decription') . '</p>
                                  <a href="#">Shop now!</a>
                               </div>
                            </div>';
                    
            endwhile;
    endwhile;                         

    $content .=         '</div>
                      </div>
                      <div class="clear"></div>
                   </div>';

    return $content;
}
?>