<?php
/**
 * The header for our theme.
 * @package First
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> >

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- Page title  -->

        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>

    <!-- Body Start -->

    <body <?php body_class(); ?> >

        <!-- Header Bar -->
        <header id="headerBar" class="headerTop">

            <div class="container-fluid">

                <!--Header logo on the left side-->

                <div class="col-md-2 col-sm-1 col-xs-3 headerLeft">
                    <a href="<?php echo esc_url( home_url ( '/' )); ?> ">
                    <img src=" <?php echo get_theme_mod('logo_id', get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?> ">
                    </a>
                </div>

                <!--Header right side with left-aligned menu-->

                <div class="col-md-10 col-sm-11 col-xs-9 headerRight">
                    <div class="header-right">

                        <!--Navigation-->
                        <nav class="navigation">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="navbar navbar-right">
                                    <li><a href="#sectionIntro" class="easing">Home</a></li>
                                    <li><a href="#sectionAbout" class="easing">
                                            <?php echo get_theme_mod('about_menu_name','About us'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sectionService" class="easing">
                                           <?php echo get_theme_mod('service_menu_name','Services'); ?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sectionTestimonial" class="easing">
                                           <?php echo get_theme_mod('testimonial_menu_name','Testimonial'); ?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sectionportfolio" class="easing">
                                           <?php echo get_theme_mod('portfolio_menu_name','Portfolio'); ?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sectionClients" class="easing">
                                           <?php echo get_theme_mod('client_menu_name','Clients'); ?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sectionContact" class="easing">
                                           <?php echo get_theme_mod('contact_menu_name',' Contact us'); ?>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </nav>
                        <!--END Navigation-->

                    </div>
                </div>
                <!--END Header right side-->


            </div>
            <!--END container-->
        </header>
        <!--END Header bar-->



        <!-- section Intro -->

        <section id="sectionIntro" class="parallax" style="background-image: url(<?php echo get_theme_mod('hero_background_image', get_template_directory_uri().'/images/hero.jpg'); ?>)">
          <div class="section-overlay">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid">

                    <div class="textIntro">
                        <div class="hi">
                            <h1><?php echo get_theme_mod('hero_name', 'Shb Bablu'); ?> </h1>
                            <span><?php echo get_theme_mod('hero_sub', 'Designer | Developer | Freelancer'); ?></span>
                            <br>
                            <a href="#sectionAbout" class="easing">
              <img src=" <?php echo get_template_directory_uri() ?>/images/arrow.png" alt="">
              </a>
                        </div>
                    </div>

                </div>
            </div>
          </div>
        </section>
