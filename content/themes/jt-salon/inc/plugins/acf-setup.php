<?php
/**
 * acf-setup.php
 *
 * @package _s
 */

if ( WP_LOCAL_DEV ) {
  return;
}

// hide field group menu from users
if ( wp_get_current_user()->user_login !== 'sean' ) {
  define( 'ACF_LITE' , true );
}

/*
ACF field groups
 */
// export field export code here:
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5831dde590eee',
  'title' => 'Home Page Fields',
  'fields' => array (
    array (
      'key' => 'field_5831dded16385',
      'label' => 'Home Sections',
      'name' => 'home_sections',
      'type' => 'flexible_content',
      'instructions' => 'Add home sections by clicking "Add Section" below.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Section',
      'min' => '',
      'max' => '',
      'layouts' => array (
        array (
          'key' => '5831ddf93bf7a',
          'name' => 'hero_section',
          'label' => 'Hero Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5831de0a16386',
              'label' => 'Hero Image',
              'name' => 'hero_image',
              'type' => 'image',
              'instructions' => 'Upload an image to use for in the hero area.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => 1420,
              'min_height' => 568,
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => 'jpg,jpeg,gif,webp',
            ),
            array (
              'key' => 'field_5831df5716387',
              'label' => 'Hero Text',
              'name' => 'hero_text',
              'type' => 'text',
              'instructions' => 'Enter some text to appear on top of the hero image. This can be a title, tagline, etc.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5831ecbb9164b',
          'name' => 'message_section',
          'label' => 'Message Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5831ecc79164c',
              'label' => 'Message Text',
              'name' => 'message_text',
              'type' => 'textarea',
              'instructions' => 'Enter message text here. This could be some welcome text, a mission statement, etc.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => 4,
              'new_lines' => 'wpautop',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '583200f792312',
          'name' => 'cta_section',
          'label' => 'CTA Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_583200ff92313',
              'label' => 'CTA Headline',
              'name' => 'cta_headline',
              'type' => 'text',
              'instructions' => 'Enter a headline for the CTA section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_5832010992314',
              'label' => 'CTA Text',
              'name' => 'cta_text',
              'type' => 'textarea',
              'instructions' => 'Add some text to appear below the headline and above the CTA links.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => 5,
              'new_lines' => 'wpautop',
            ),
            array (
              'key' => 'field_5832011d92315',
              'label' => 'CTA Links',
              'name' => 'cta_links',
              'type' => 'repeater',
              'instructions' => 'Add CTA links by clicking "Add Link" below.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 1,
              'max' => 3,
              'layout' => 'row',
              'button_label' => 'Add Link',
              'sub_fields' => array (
                array (
                  'key' => 'field_5832014a92316',
                  'label' => 'Link Text',
                  'name' => 'link_text',
                  'type' => 'text',
                  'instructions' => 'Enter the link text.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array (
                  'key' => 'field_5832016a92317',
                  'label' => 'Link Page',
                  'name' => 'link_page',
                  'type' => 'post_object',
                  'instructions' => 'Select page for CTA link to link to.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'post_type' => array (
                    0 => 'page',
                  ),
                  'taxonomy' => array (
                  ),
                  'allow_null' => 0,
                  'multiple' => 0,
                  'return_format' => 'object',
                  'ui' => 1,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_58327ad07fafd',
  'title' => 'Page / Post Fields',
  'fields' => array (
    array (
      'key' => 'field_583296ec9bd50',
      'label' => 'Text CTA',
      'name' => 'text_cta',
      'type' => 'wysiwyg',
      'instructions' => 'Add CTA text in this field.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'basic',
      'media_upload' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_58327ae16f4d9',
  'title' => 'Page Title Field',
  'fields' => array (
    array (
      'key' => 'field_58327af6869ce',
      'label' => 'Custom Page Title',
      'name' => 'custom_page_title',
      'type' => 'text',
      'instructions' => 'Enter a custom page title. Helpful if, for example, you want the title of the page to be "Contact" in the WordPress dashboard, but you want the page\'s <strong>h1</strong> tag to be different.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_58321cc4be5b9',
  'title' => 'Widget: CTA',
  'fields' => false,
  'location' => array (
    array (
      array (
        'param' => 'widget',
        'operator' => '==',
        'value' => 'cta_widget',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_58321cb6e9d4c',
  'title' => 'Widget: Map',
  'fields' => false,
  'location' => array (
    array (
      array (
        'param' => 'widget',
        'operator' => '==',
        'value' => 'map_widget',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_58321ca3f08c5',
  'title' => 'Widget: Social',
  'fields' => false,
  'location' => array (
    array (
      array (
        'param' => 'widget',
        'operator' => '==',
        'value' => 'social_widget',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;