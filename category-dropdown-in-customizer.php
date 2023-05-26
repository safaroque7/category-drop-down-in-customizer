<?php


add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{


  /**
   * 1 no category
   * 
   * */

  //Get an array with the category list
  $rjs_categories_full_list = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html__($rjs_single_cat->name, 'npa');
  }

  $wp_customize->add_section('npa_acd', array(
    'title' => __('Cat Dropdown List', 'npa'),
  ));


  /**
   * 1 no category
   * 
   * */

  //Register the setting
  $wp_customize->add_setting('rjs_category_dropdown', array(
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
    'default'     => 'uncategorized',
  ));

  //Register the control
  $wp_customize->add_control('rjs_category_dropdown', array(
    'type'        => 'select',
    'section'     => 'npa_acd',
    'label'       => __('Select category'),
    'description' => __('Description.'),
    'choices'     => $rjs_choices_list, //Add the list with options
  ));







  /**
   * 2 no category
   * 
   * */

  //Get an array with the category list
  $rjs_categories_full_list_2 = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list2 = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list_2 as $rjs_single_cat_2) {
    $rjs_choices_list2[$rjs_single_cat_2->term_id] = esc_html__($rjs_single_cat_2->name, 'npa');
  }

  //Register the setting
  $wp_customize->add_setting('rjs_category_dropdown_2', array(
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
    'default'     => 'uncategorized',
  ));

  //Register the control
  $wp_customize->add_control('rjs_category_dropdown_2', array(
    'type'        => 'select',
    'section'     => 'npa_acd',
    'label'       => __('Select category'),
    'description' => __('Description.'),
    'choices'     => $rjs_choices_list2, //Add the list with options
  ));
}
