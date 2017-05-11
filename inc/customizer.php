<?php
/**
 * First Theme Customizer.
 *
 * @package First
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function first_customize_register( $wp_customize ) {
    
    
    
	$wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
    
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    

    $wp_customize->add_panel('hero_section',
        array(
        'title'     =>__('Hero section','first'),
        'priority'  =>22
    ));
    //This section is for uploading logo    
    $wp_customize->add_section( 'logo_upload',array(
        'title'     =>__('logo Upload', 'first'),
        'priority'  =>2,
        'panel'     => 'hero_section'
    ));
    
    $wp_customize->add_setting( 'logo_id',array(
        'default'   =>get_stylesheet_directory_uri(). '/images/logo.png',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_id',array(
        'label'     => __('Upload your logo','first'),
        'section'   => 'logo_upload',
        'settings'   => 'logo_id',
    )));
    
    //This section is for Hero section
    
    $wp_customize->add_section( 'hero_main_text',array(
        'title'     =>__('Hero main text','first'),
        'priority'  =>4,
        'panel'     => 'hero_section'
    ));
    
    $wp_customize->add_setting( 'hero_name',array(
        'default'   =>__('shb bablu','first'),
        //'title'     =>__('Put your name here','first'),
    ));
    
    $wp_customize->add_control( 'hero_name',array(
        'label'     =>__('Put your name','first'),
        'section'   => 'hero_main_text',
        'settings'  => 'hero_name',
    ));
    
    $wp_customize->add_section( 'hero_sub_text',array(
        'title'     =>__('Hero sub text','first'),
        'priority'  =>6,
        'panel'     => 'hero_section'
    ));
    
    $wp_customize->add_setting( 'hero_sub',array(
        'default'   =>__('Designer | Developer | Freelancer','first'),
        //'title'     =>__('Put your name here','first'),
    ));
    
    $wp_customize->add_control( 'hero_sub',array(
        'label'     =>__('Put your profession','first'),
        'section'   => 'hero_sub_text',
        'settings'  => 'hero_sub',
    ));
    
    $wp_customize->add_section('hero_bgc',array(
        'title'     => __('Hero background','first'),
        'priority'  => 8,
        'panel'     =>'hero_section'
    ));

    $wp_customize->add_setting( 'hero_background_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/hero.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'hero_background_image',array(
        'label'     => 'Hero Background Image',
        'settings'  => 'hero_background_image',
        'section'   => 'hero_bgc'
    )));
    
    //This code is for  about us
    
    $wp_customize->add_panel('about_section',array(
        'title'     =>__('About section','first'),
        'priority'  =>24,
    ));
    
    //section menu name
    $wp_customize->add_section( 'about_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'about_menu_name',array(
        'default'   =>__('About me','first'),
    ));
    
    $wp_customize->add_control( 'about_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'about_section_menu_name',
        'settings'  => 'about_menu_name',
    ));
    //sectionn name
    $wp_customize->add_section( 'section_name',array(
        'title'     =>__('Section name','first'),
        'priority'  =>4,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'about_section_name',array(
        'default'   =>__('About me','first'),
    ));
    
    $wp_customize->add_control( 'about_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name',
        'settings'  => 'about_section_name',
    ));
    //section title
    $wp_customize->add_section( 'section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'about_section_title',array(
        'default'   =>__('I\'m shb bablu ','first'),
    ));
    
    $wp_customize->add_control( 'about_section_title',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_title',
        'settings'  => 'about_section_title',
    ));
    
    //left side title
    $wp_customize->add_section( 'about_left_side_title',array(
        'title'     =>__('Left side title','first'),
        'priority'  =>4,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'about_left_side',array(
        'default'   =>__('Hellow !!!','first'),
    ));
    
    $wp_customize->add_control( 'about_left_side',array(
        'label'     =>__('Put your title in here','first'),
        'section'   => 'about_left_side_title',
        'settings'  => 'about_left_side',
    ));
    //left side description
    $wp_customize->add_section( 'about_left_side_description',array(
        'title'     =>__('Left side description','first'),
        'priority'  =>4,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'about_left_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum beatae non reiciendis sapiente voluptate praesentium nisi at adipisci recusandae,alias repellendus incidunt.<br>possimus impedit, commodi aperiam repellat numquam illum magnam aliquam, unde doloribus. Molestias harum cum laborum, dolores reiciendis, quaerat a eius neque nemo sunt iste. Autem iure, voluptatum quis.','first'),
        
    ));
    
    $wp_customize->add_control( 'about_left_description',array(
        'label'         =>__('Put your title in here','first'),
        'description'   =>__('use break tag to separate a line','first'),
        'section'       => 'about_left_side_description',
        'settings'      => 'about_left_description',
        'type'          => 'textarea'
    ));
    
    $wp_customize->add_section( 'skill_section',array(
        'title'     =>__('Skill section','first'),
        'priority'  =>6,
        'panel'     => 'about_section'
    ));
    
    $wp_customize->add_setting( 'skill_one_title',array(
        'default'   =>__('WordPress','first'),
    ));
    
    $wp_customize->add_control( 'skill_one_title',array(
        'label'     =>__('skill one title','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_one_title',
    ));
    $wp_customize->add_setting( 'skill_one_value',array(
        'default'   =>__('70','first'),
    ));
    
    $wp_customize->add_control( 'skill_one_value',array(
        'label'     =>__('skill one value','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_one_value',
    ));
    
    $wp_customize->add_setting( 'skill_two_title',array(
        'default'   =>__('Joomla','first'),
    ));
    
    $wp_customize->add_control( 'skill_two_title',array(
        'label'     =>__('skill two title','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_two_title',
    ));
    $wp_customize->add_setting( 'skill_two_value',array(
        'default'   =>__('60','first'),
    ));
    
    $wp_customize->add_control( 'skill_two_value',array(
        'label'     =>__('skill two value','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_two_value',
    ));
    
    $wp_customize->add_setting( 'skill_three_title',array(
        'default'   =>__('Html & CSS','first'),
    ));
    
    $wp_customize->add_control( 'skill_three_title',array(
        'label'     =>__('skill three title','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_three_title',
    ));
    $wp_customize->add_setting( 'skill_three_value',array(
        'default'   =>__('80','first'),
    ));
    
    $wp_customize->add_control( 'skill_three_value',array(
        'label'     =>__('skill three value','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_three_value',
    ));
    
    $wp_customize->add_setting( 'skill_four_title',array(
        'default'   =>__('PHP','first'),
    ));
    
    $wp_customize->add_control( 'skill_four_title',array(
        'label'     =>__('skill four title','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_four_title',
    ));
    $wp_customize->add_setting( 'skill_four_value',array(
        'default'   =>__('50','first'),
    ));
    
    $wp_customize->add_control( 'skill_four_value',array(
        'label'     =>__('skill four value','first'),
        'section'   => 'skill_section',
        'settings'  => 'skill_four_value',
    ));
    
    // all about service section
    
    $wp_customize->add_panel('service_section',array(
        'title'     =>__('Service section','first'),
        'priority'  =>26,
    ));
    
    //menu name
    
    $wp_customize->add_section( 'service_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_menu_name',array(
        'default'   =>__('Services','first'),
    ));
    
    $wp_customize->add_control( 'service_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'service_section_menu_name',
        'settings'  => 'service_menu_name',
    ));
    
    //sectionn name
    
    $wp_customize->add_section( 'section_name_1',array(
        'title'     =>__('Section name','first'),
        'priority'  =>3,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_section_name',array(
        'default'   =>__('Services','first'),
    ));
    
    $wp_customize->add_control( 'service_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name_1',
        'settings'  => 'service_section_name',
    ));
    
    //section title
    
    $wp_customize->add_section( 'services_section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_section_title',array(
        'default'   =>__('Let see our services','first'),
    ));
    
    $wp_customize->add_control( 'service_section_title',array(
        'label'     =>__('Put your section title in here','first'),
        'section'   => 'services_section_title',
        'settings'  => 'service_section_title',
    ));
    
    //service one
    
    $wp_customize->add_section( 'service_section_one',array(
        'title'     =>__('Service one','first'),
        'priority'  =>5,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_one_title',array(
        'default'   =>__('WordPress','first'),
    ));
    
    $wp_customize->add_control( 'service_one_title',array(
        'label'     =>__('service one title','first'),
        'section'   => 'service_section_one',
        'settings'  => 'service_one_title',
    ));
    
    $wp_customize->add_setting( 'service_one_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_one_description',array(
        'label'     =>__('service one title','first'),
        'section'   => 'service_section_one',
        'settings'  => 'service_one_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_one',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/enter-services-icon.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_one',array(
        'label'     => 'Service one image',
        'settings'  => 'service_image_one',
        'section'   => 'service_section_one'
    )));
    
    //service two
    
    $wp_customize->add_section( 'service_section_two',array(
        'title'     =>__('Service two','first'),
        'priority'  =>6,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_two_title',array(
        'default'   =>__('Joomla','first'),
    ));
    
    $wp_customize->add_control( 'service_two_title',array(
        'label'     =>__('service two title','first'),
        'section'   => 'service_section_two',
        'settings'  => 'service_two_title',
    ));
    
    $wp_customize->add_setting( 'service_two_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_two_description',array(
        'label'     =>__('service two description','first'),
        'section'   => 'service_section_two',
        'settings'  => 'service_two_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_two',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/phone.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_two',array(
        'label'     => 'Service two image',
        'settings'  => 'service_image_two',
        'section'   => 'service_section_two'
    )));
    
    //service three
    
    $wp_customize->add_section( 'service_section_three',array(
        'title'     =>__('Service one','first'),
        'priority'  =>7,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_three_title',array(
        'default'   =>__('Retina Ready','first'),
    ));
    
    $wp_customize->add_control( 'service_three_title',array(
        'label'     =>__('service three title','first'),
        'section'   => 'service_section_three',
        'settings'  => 'service_three_title',
    ));
    
    $wp_customize->add_setting( 'service_three_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_three_description',array(
        'label'     =>__('service three description','first'),
        'section'   => 'service_section_three',
        'settings'  => 'service_three_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_three',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/email.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_three',array(
        'label'     => 'Service three image',
        'settings'  => 'service_image_three',
        'section'   => 'service_section_three'
    )));
    
    //service four
    
    $wp_customize->add_section( 'service_section_four',array(
        'title'     =>__('Service four','first'),
        'priority'  =>8,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_four_title',array(
        'default'   =>__('Responsive','first'),
    ));
    
    $wp_customize->add_control( 'service_four_title',array(
        'label'     =>__('service four title','first'),
        'section'   => 'service_section_four',
        'settings'  => 'service_four_title',
    ));
    
    $wp_customize->add_setting( 'service_four_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_four_description',array(
        'label'     =>__('service four description','first'),
        'section'   => 'service_section_four',
        'settings'  => 'service_four_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_four',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/comments.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_four',array(
        'label'     => 'Service four image',
        'settings'  => 'service_image_four',
        'section'   => 'service_section_four'
    )));
    
    //service five
    
    $wp_customize->add_section( 'service_section_five',array(
        'title'     =>__('Service five','first'),
        'priority'  =>9,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_five_title',array(
        'default'   =>__('Web Design','first'),
    ));
    
    $wp_customize->add_control( 'service_five_title',array(
        'label'     =>__('service five title','first'),
        'section'   => 'service_section_five',
        'settings'  => 'service_five_title',
    ));
    
    $wp_customize->add_setting( 'service_five_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_five_description',array(
        'label'     =>__('service five description','first'),
        'section'   => 'service_section_five',
        'settings'  => 'service_five_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_five',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/phone.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_five',array(
        'label'     => 'Service five image',
        'settings'  => 'service_image_five',
        'section'   => 'service_section_five'
    )));
    
    //service six
    
    $wp_customize->add_section( 'service_section_six',array(
        'title'     =>__('Service six','first'),
        'priority'  =>10,
        'panel'     => 'service_section'
    ));
    
    $wp_customize->add_setting( 'service_six_title',array(
        'default'   =>__('Front End','first'),
    ));
    
    $wp_customize->add_control( 'service_six_title',array(
        'label'     =>__('service six title','first'),
        'section'   => 'service_section_six',
        'settings'  => 'service_six_title',
    ));
    
    $wp_customize->add_setting( 'service_six_description',array(
        'default'   =>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.','first'),
    ));
    
    $wp_customize->add_control( 'service_six_description',array(
        'label'     =>__('service six description','first'),
        'section'   => 'service_section_six',
        'settings'  => 'service_six_description',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'service_image_six',array(
        'default'   => get_stylesheet_directory_uri() . '/images/services/enter-services-icon.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'service_image_six',array(
        'label'     => 'Service six image',
        'settings'  => 'service_image_six',
        'section'   => 'service_section_six'
    )));
    
    // All about testimonial section
    
    $wp_customize->add_panel('testimonial_section',array(
        'title'     =>__('Testimonial section','first'),
        'priority'  =>26,
    ));
    
    //section menu name
    
    $wp_customize->add_section( 'testimonial_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'testimonial_menu_name',array(
        'default'   =>__('Testimonial','first'),
    ));
    
    $wp_customize->add_control( 'testimonial_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'testimonial_section_menu_name',
        'settings'  => 'testimonial_menu_name',
    ));
    
    //section name
    
    $wp_customize->add_section( 'section_name_2',array(
        'title'     =>__('Section name','first'),
        'priority'  =>3,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'testimonial_section_name',array(
        'default'   =>__('Testimonials','first'),
    ));
    
    $wp_customize->add_control( 'testimonial_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name_2',
        'settings'  => 'testimonial_section_name',
    ));
    
    //section title
    
    $wp_customize->add_section( 'testimonials_section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'testimonial_section_title',array(
        'default'   =>__('What people say about us','first'),
    ));
    
    $wp_customize->add_control( 'testimonial_section_title',array(
        'label'     =>__('Put your section title in here','first'),
        'section'   => 'testimonials_section_title',
        'settings'  => 'testimonial_section_title',
    ));
    
    //1st testimonial
    
    $wp_customize->add_section( 'testimonial_one',array(
        'title'     =>__('Testimonial one','first'),
        'priority'  =>6,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'clients_name_one',array(
        'default'   =>__('Ernest, graduate of Code Dynamic Websites with PHP','first'),
    ));
    
    $wp_customize->add_control( 'clients_name_one',array(
        'label'     =>__('clients name & designation','first'),
        'section'   => 'testimonial_one',
        'settings'  => 'clients_name_one',
    ));
    
    $wp_customize->add_setting( 'clients_review_one',array(
        'default'   =>__('Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.','first'),
    ));
    
    $wp_customize->add_control( 'clients_review_one',array(
        'label'     =>__('clients review text','first'),
        'section'   => 'testimonial_one',
        'settings'  => 'clients_review_one',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'clients_image_one',array(
        'default'   => get_stylesheet_directory_uri() . '/images/testimonial/brennan.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'clients_image_one',array(
        'label'     => 'clients image',
        'settings'  => 'clients_image_one',
        'section'   => 'testimonial_one'
    )));
    
    //2nd testimonial
    
    $wp_customize->add_section( 'testimonial_two',array(
        'title'     =>__('Testimonial two','first'),
        'priority'  =>8,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'clients_name_two',array(
        'default'   =>__('Ernest, graduate of Code Dynamic Websites with PHP','first'),
    ));
    
    $wp_customize->add_control( 'clients_name_two',array(
        'label'     =>__('clients name & designation','first'),
        'section'   => 'testimonial_two',
        'settings'  => 'clients_name_two',
    ));
    
    $wp_customize->add_setting( 'clients_review_two',array(
        'default'   =>__('Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.','first'),
    ));
    
    $wp_customize->add_control( 'clients_review_two',array(
        'label'     =>__('clients review','first'),
        'section'   => 'testimonial_two',
        'settings'  => 'clients_review_two',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'clients_image_two',array(
        'default'   => get_stylesheet_directory_uri() . '/images/testimonial/ben.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'clients_image_two',array(
        'label'     => 'clients image',
        'settings'  => 'clients_image_two',
        'section'   => 'testimonial_two'
    )));
    
    //3rd testimonial
    
    $wp_customize->add_section( 'testimonial_three',array(
        'title'     =>__('Testimonial three','first'),
        'priority'  =>8,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'clients_name_three',array(
        'default'   =>__('Ernest, graduate of Code Dynamic Websites with PHP','first'),
    ));
    
    $wp_customize->add_control( 'clients_name_three',array(
        'label'     =>__('clients name & designation','first'),
        'section'   => 'testimonial_three',
        'settings'  => 'clients_name_three',
    ));
    
    $wp_customize->add_setting( 'clients_review_three',array(
        'default'   =>__('Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.','first'),
    ));
    
    $wp_customize->add_control( 'clients_review_three',array(
        'label'     =>__('clients review','first'),
        'section'   => 'testimonial_three',
        'settings'  => 'clients_review_three',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'clients_image_three',array(
        'default'   => get_stylesheet_directory_uri() . '/images/testimonial/brennan.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'clients_image_three',array(
        'label'     => 'clients image',
        'settings'  => 'clients_image_three',
        'section'   => 'testimonial_three'
    )));
    
    //4th testimonial
    
    $wp_customize->add_section( 'testimonial_four',array(
        'title'     =>__('Testimonial four','first'),
        'priority'  =>8,
        'panel'     => 'testimonial_section'
    ));
    
    $wp_customize->add_setting( 'clients_name_four',array(
        'default'   =>__('Ernest, graduate of Code Dynamic Websites with PHP','first'),
    ));
    
    $wp_customize->add_control( 'clients_name_four',array(
        'label'     =>__('clients name & designation','first'),
        'section'   => 'testimonial_four',
        'settings'  => 'clients_name_four',
    ));
    
    $wp_customize->add_setting( 'clients_review_four',array(
        'default'   =>__('Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.','first'),
    ));
    
    $wp_customize->add_control( 'clients_review_four',array(
        'label'     =>__('clients review','first'),
        'section'   => 'testimonial_four',
        'settings'  => 'clients_review_four',
        'type'      => 'textarea'
    ));
    
    $wp_customize->add_setting( 'clients_image_four',array(
        'default'   => get_stylesheet_directory_uri() . '/images/testimonial/ben.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'clients_image_four',array(
        'label'     => 'clients image',
        'settings'  => 'clients_image_four',
        'section'   => 'testimonial_four'
    )));
    
    //All about portfolio section 
    
    $wp_customize->add_panel('portfolio_section',array(
        'title'     =>__('Portfolio section','first'),
        'priority'  =>28,
    ));
    
    //portfolio menu
    
    $wp_customize->add_section( 'portfolio_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'portfolio_menu_name',array(
        'default'   =>__('Portfolio','first'),
    ));
    
    $wp_customize->add_control( 'portfolio_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'portfolio_section_menu_name',
        'settings'  => 'portfolio_menu_name',
    ));
    
    //section name
    
    $wp_customize->add_section( 'section_name_3',array(
        'title'     =>__('Section name','first'),
        'priority'  =>3,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'portfolio_section_name',array(
        'default'   =>__('Portfolio','first'),
    ));
    
    $wp_customize->add_control( 'portfolio_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name_3',
        'settings'  => 'portfolio_section_name',
    ));
    
    //section title
    
    $wp_customize->add_section( 'portfolios_section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'portfolio_section_title',array(
        'default'   =>__('See our works','first'),
    ));
    
    $wp_customize->add_control( 'portfolio_section_title',array(
        'label'     =>__('Put your section title in here','first'),
        'section'   => 'portfolios_section_title',
        'settings'  => 'portfolio_section_title',
    ));
    
    //portfolio 1
    
    $wp_customize->add_section( 'portfolio_image_1',array(
        'title'     =>__('Portfolio one','first'),
        'priority'  =>4,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_one',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_one',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_1',
        'settings'  => 'project_title_one',
    ));
    
    $wp_customize->add_setting( 'first_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item01@2x.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'first_image',array(
        'label'     => 'Your first portfolio',
        'settings'  => 'first_image',
        'section'   => 'portfolio_image_1'
    )));
    
    //portfolio 2
    
    $wp_customize->add_section( 'portfolio_image_2',array(
        'title'     =>__('Portfolio two','first'),
        'priority'  =>6,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_two',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_two',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_2',
        'settings'  => 'project_title_two',
    ));
    
    $wp_customize->add_setting( 'second_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item02@2x.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'second_image',array(
        'label'     => 'Your second portfolio',
        'settings'  => 'second_image',
        'section'   => 'portfolio_image_2'
    )));
    
    //portfolio 3
    
    $wp_customize->add_section( 'portfolio_image_3',array(
        'title'     =>__('Portfolio three','first'),
        'priority'  =>8,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_three',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_three',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_3',
        'settings'  => 'project_title_three',
    ));
    
    $wp_customize->add_setting( 'third_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item03@2x.jpg',
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'third_image',array(
        'label'     => 'Your third portfolio',
        'settings'  => 'third_image',
        'section'   => 'portfolio_image_3'
    )));
    
    //portfolio 4
    
    $wp_customize->add_section( 'portfolio_image_4',array(
        'title'     =>__('Portfolio fourth','first'),
        'priority'  =>10,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_four',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_four',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_4',
        'settings'  => 'project_title_four',
    ));
    
    $wp_customize->add_setting( 'fourth_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item04@2x.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fourth_image',array(
        'label'     => 'Your fourth portfolio',
        'settings'  => 'fourth_image',
        'section'   => 'portfolio_image_4'
    )));
    
    //portfolio 5
    
    $wp_customize->add_section( 'portfolio_image_5',array(
        'title'     =>__('Portfolio fifth','first'),
        'priority'  =>12,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_five',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_five',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_5',
        'settings'  => 'project_title_five',
    ));
    
    $wp_customize->add_setting( 'fifth_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item05@2x.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fifth_image',array(
        'label'     => 'Your fifth portfolio',
        'settings'  => 'fifth_image',
        'section'   => 'portfolio_image_5'
    )));
    
    //portfolio 6
    
    $wp_customize->add_section( 'portfolio_image_6',array(
        'title'     =>__('Portfolio six','first'),
        'priority'  =>14,
        'panel'     => 'portfolio_section'
    ));
    
    $wp_customize->add_setting( 'project_title_six',array(
        'default'   =>__('Mobile app','first'),
    ));
    
    $wp_customize->add_control( 'project_title_six',array(
        'label'     =>__('Your project name','first'),
        'section'   => 'portfolio_image_6',
        'settings'  => 'project_title_six',
    ));
    
    $wp_customize->add_setting( 'six_image',array(
        'default'   => get_stylesheet_directory_uri() . '/images/portfolio/item06@2x.jpg',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'six_image',array(
        'label'     => 'Your six portfolio',
        'settings'  => 'six_image',
        'section'   => 'portfolio_image_6'
    )));
    
    //All about client section
    
    $wp_customize->add_panel('client_section',array(
        'title'     =>__('Client section','first'),
        'priority'  =>30,
    ));
    
    $wp_customize->add_section( 'client_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_menu_name',array(
        'default'   =>__('Client','first'),
    ));
    
    $wp_customize->add_control( 'client_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'client_section_menu_name',
        'settings'  => 'client_menu_name',
    ));
    
    //section name
    
    $wp_customize->add_section( 'section_name_4',array(
        'title'     =>__('Section name','first'),
        'priority'  =>3,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_section_name',array(
        'default'   =>__('Client','first'),
    ));
    
    $wp_customize->add_control( 'client_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name_4',
        'settings'  => 'client_section_name',
    ));
    
    //section title
    
    $wp_customize->add_section( 'clients_section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_section_title',array(
        'default'   =>__('They trust me','first'),
    ));
    
    $wp_customize->add_control( 'client_section_title',array(
        'label'     =>__('Put your section title in here','first'),
        'section'   => 'clients_section_title',
        'settings'  => 'client_section_title',
    ));
    
    //first client
    
    $wp_customize->add_section( 'first_client',array(
        'title'     =>__('First client image','first'),
        'priority'  =>6,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_1',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients1.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_1',array(
        'label'     => 'First client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_1',
        'section'   => 'first_client'
    )));
    
    //second client
    
    $wp_customize->add_section( 'second_client',array(
        'title'     =>__('Second client image','first'),
        'priority'  =>8,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_2',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients2.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_2',array(
        'label'     => 'Second client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_2',
        'section'   => 'second_client'
    )));
    
    //third client
    
    $wp_customize->add_section( 'third_client',array(
        'title'     =>__('Third client image','first'),
        'priority'  =>10,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_3',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients3.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_3',array(
        'label'     => 'Third client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_3',
        'section'   => 'third_client'
    )));
    
    //fourth client
    
    $wp_customize->add_section( 'four_client',array(
        'title'     =>__('Fourth client image','first'),
        'priority'  =>12,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_4',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients4.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_4',array(
        'label'     => 'Fourth client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_4',
        'section'   => 'four_client'
    ))); 
    
    //fifth client 
    
    $wp_customize->add_section( 'five_client',array(
        'title'     =>__('Fifth client image','first'),
        'priority'  =>14,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_5',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients5.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_5',array(
        'label'     => 'Fifth client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_5',
        'section'   => 'five_client'
    )));
    
    //client six 
    
    $wp_customize->add_section( 'six_client',array(
        'title'     =>__('six client image','first'),
        'priority'  =>16,
        'panel'     => 'client_section'
    ));
    
    $wp_customize->add_setting( 'client_image_6',array(
        'default'   => get_stylesheet_directory_uri() . '/images/clients/clients6.png',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'client_image_6',array(
        'label'     => 'six client image',
        'description'=>__('Use 300 * 172 px image', 'first'),
        'settings'  => 'client_image_6',
        'section'   => 'six_client'
    )));
    
    //all about contact section
    
    $wp_customize->add_panel('contact_section',array(
        'title'     =>__('Contact section','first'),
        'priority'  =>32,
    ));
    
    $wp_customize->add_section( 'contact_section_menu_name',array(
        'title'     =>__('Menu title','first'),
        'priority'  =>2,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'contact_menu_name',array(
        'default'   =>__('Contact us','first'),
    ));
    
    $wp_customize->add_control( 'contact_menu_name',array(
        'label'     =>__('Put your menu name in here','first'),
        'section'   => 'contact_section_menu_name',
        'settings'  => 'contact_menu_name',
    ));
    
    $wp_customize->add_section( 'section_name_5',array(
        'title'     =>__('Section name','first'),
        'priority'  =>3,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'contact_section_name',array(
        'default'   =>__('Contact','first'),
    ));
    
    $wp_customize->add_control( 'contact_section_name',array(
        'label'     =>__('Put your section name in here','first'),
        'section'   => 'section_name_5',
        'settings'  => 'contact_section_name',
    ));
    
    //section title
    
    $wp_customize->add_section( 'contacts_section_title',array(
        'title'     =>__('Section title','first'),
        'priority'  =>4,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'contact_section_title',array(
        'default'   =>__('Get in touch','first'),
    ));
    
    $wp_customize->add_control( 'contact_section_title',array(
        'label'     =>__('Put your section title in here','first'),
        'section'   => 'contacts_section_title',
        'settings'  => 'contact_section_title',
    ));
    
    //contact form 
    
    $wp_customize->add_section( 'contact_form',array(
        'title'     =>__('Contact form','first'),
        'priority'  =>5,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'contact_form_shortcode',array(
        'default'   =>__(' ','first'),
    ));
    
    $wp_customize->add_control( 'contact_form_shortcode',array(
        'label'     =>__('put your contact form shortcode in here','first'),
        'type'      => 'textarea',
        'section'   => 'contact_form',
        'settings'  => 'contact_form_shortcode',
    ));
    
    //google map
    
    $wp_customize->add_section( 'google_map',array(
        'title'     =>__('Google map','first'),
        'priority'  =>6,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'google_map_link',array(
        'default'   =>__(' ','first'),
    ));
    
    $wp_customize->add_control( 'google_map_link',array(
        'label'     =>__('put your google map link below','first'),
        'type'      => 'textarea',
        'section'   => 'google_map',
        'settings'  => 'google_map_link',
    ));
    
    //copyright text
    
    $wp_customize->add_section( 'copyright_text',array(
        'title'     =>__('Copyright text','first'),
        'priority'  =>7,
        'panel'     => 'contact_section'
    ));
    
    $wp_customize->add_setting( 'copyright_main_text',array(
        'default'   =>__(' COPYRIGHTS<span> ©First </span>2016. ALL RIGHTS RESERVED.','first'),
    ));
    
    $wp_customize->add_control( 'copyright_main_text',array(
        'label'     =>__('put your copyright text below','first'),
        'description'=>__('Use span tag to bold any words.', 'first'),
        'type'      => 'textarea',
        'section'   => 'copyright_text',
        'settings'  => 'copyright_main_text',
    ));




}
add_action( 'customize_register', 'first_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function first_customize_preview_js() {
	wp_enqueue_script( 'first_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'first_customize_preview_js' );
