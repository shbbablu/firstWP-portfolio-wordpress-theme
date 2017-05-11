<?php
/* 
Template Name: Front Page
*/
get_header(); 
?>
    <!-- section About -->

    <section id="sectionAbout">

        <div class="container">
            <div class="sectionTitle">
                <h1><?php echo get_theme_mod('about_section_title','i\'m shb bablu '); ?></h1>
                <span><?php echo get_theme_mod('about_section_name','About me'); ?></span>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 about-res story">
                    <h2><?php echo get_theme_mod('about_left_side','Hello !!!'); ?></h2>
                    <p>
                        <?php echo get_theme_mod('about_left_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum beatae non reiciendis sapiente voluptate praesentium nisi at adipisci recusandae,alias repellendus incidunt.<br>possimus impedit, commodi aperiam repellat numquam illum magnam aliquam, unde doloribus. Molestias harum cum laborum, dolores reiciendis, quaerat a eius neque nemo sunt iste. Autem iure, voluptatum quis.'); ?>
                    </p>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 about-res skills">

                    <h5><?php echo get_theme_mod('skill_one_title','WordPress'); ?><span><?php echo get_theme_mod('skill_one_value',70); ?>%</span></h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_theme_mod('skill_one_value',70); ?>" style="width:<?php echo get_theme_mod('skill_one_value',70); ?>%" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h5><?php echo get_theme_mod('skill_two_title','Joomla'); ?><span><?php echo get_theme_mod('skill_two_value',60); ?>%</span></h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_theme_mod('skill_two_value',60); ?>" style="width:<?php echo get_theme_mod('skill_two_value',60); ?>%;" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h5><?php echo get_theme_mod('skill_three_title','HTML & CSS'); ?><span><?php echo get_theme_mod('skill_three_value',80); ?>%</span></h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_theme_mod('skill_three_value',80); ?>" style="width:<?php echo get_theme_mod('skill_three_value',80); ?>%;" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h5><?php echo get_theme_mod('skill_four_title','PHP'); ?><span><?php echo get_theme_mod('skill_four_value',50); ?>%</span></h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_theme_mod('skill_four_value',50); ?>" style="width:<?php echo get_theme_mod('skill_four_value',50); ?>%;" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section service -->
    <section id="sectionService">
        <div class="container">
            <div class="sectionTitle">
                <h1><?php echo get_theme_mod('service_section_title','Let see our services'); ?></h1>
                <span><?php echo get_theme_mod('service_section_name','Services'); ?></span>
            </div>
            <div class="row">
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_one',get_template_directory_uri() . '/images/services/enter-services-icon.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_one_title','WordPress'); ?></h3>
                        <p><?php echo get_theme_mod('service_one_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_two',get_template_directory_uri() . '/images/services/phone.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_two_title','Joomla'); ?></h3>
                        <p><?php echo get_theme_mod('service_two_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_three',get_template_directory_uri() . '/images/services/email.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_three_title','Retina Ready'); ?></h3>
                        <p><?php echo get_theme_mod('service_three_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_four',get_template_directory_uri() . '/images/services/comments.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_four_title','Responsive'); ?></h3>
                        <p><?php echo get_theme_mod('service_four_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_five',get_template_directory_uri() . '/images/services/phone.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_five_title','Web Design'); ?></h3>
                        <p><?php echo get_theme_mod('service_five_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 single-service">
                    <div class="pull-left">
                        <img src="<?php echo get_theme_mod('service_image_six',get_template_directory_uri() . '/images/services/enter-services-icon.png'); ?>" alt="">
                    </div>
                    <div class="service-desc">
                        <h3><?php echo get_theme_mod('service_six_title','Front End'); ?></h3>
                        <p><?php echo get_theme_mod('service_six_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quibusdam quia temporibus sequi rem, ipsum.'); ?></p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--section testimonial  -->
    <section id="sectionTestimonial">
        <div class="container">
            <div class="sectionTitle">
                <h1><?php echo get_theme_mod('testimonial_section_title','What people say about us'); ?></h1>
                <span><?php echo get_theme_mod('testimonial_section_name','Testimonial'); ?></span>
            </div>
            <div class="row">
                <div class="col-md-12 testimonial">
                    <div class="row testimonial">
                        <div class="col-md-4 image">
                            <img src="<?php echo get_theme_mod('clients_image_one',get_template_directory_uri() . '/images/testimonial/brennan.jpg'); ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <?php echo get_theme_mod('clients_review_one','Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.'); ?>

                                    <cite><?php echo get_theme_mod('clients_name_one','&mdash; Ernest, graduate of Code Dynamic Websites with PHP'); ?></cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-md-4 image">
                            <img src="<?php echo get_theme_mod('clients_image_two',get_template_directory_uri() . '/images/testimonial/ben.png'); ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <?php echo get_theme_mod('clients_review_two','Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.'); ?>
                                    <cite><?php echo get_theme_mod('clients_name_two','&mdash; Ernest, graduate of Code Dynamic Websites with PHP'); ?></cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-md-4 image">
                            <img src="<?php echo get_theme_mod('clients_image_three',get_template_directory_uri() . '/images/testimonial/brennan.jpg'); ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <?php echo get_theme_mod('clients_review_three','Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.'); ?>
                                    <cite><?php echo get_theme_mod('clients_name_three','&mdash; Ernest, graduate of Code Dynamic Websites with PHP'); ?></cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-md-4 image">
                            <img src="<?php echo get_theme_mod('clients_image_four',get_template_directory_uri() . '/images/testimonial/ben.png'); ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <?php echo get_theme_mod('clients_review_four','Bablu is an excellent developer. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can’t believe this is free. I highly recommend taking advantage of this course.'); ?>
                                    <cite><?php echo get_theme_mod('clients_name_four','&mdash; Ernest, graduate of Code Dynamic Websites with PHP'); ?></cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section portfolio -->
    <section id="sectionportfolio">
        <div class="container">
            <div class="sectionTitle">
                <h1><?php echo get_theme_mod('portfolio_section_title','See our works'); ?></h1>
                <span><?php echo get_theme_mod('portfolio_section_name','Portfolio'); ?></span>
            </div>
            <div class="row">
                <div id="portfolio" class="clearfix">
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('first_image', get_template_directory_uri(). '/images/portfolio/item01@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_one','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('first_image', get_template_directory_uri(). '/images/portfolio/item01@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('second_image', get_template_directory_uri(). '/images/portfolio/item02@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_two','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('second_image', get_template_directory_uri(). '/images/portfolio/item02@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('third_image', get_template_directory_uri(). '/images/portfolio/item03@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_three','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('third_image', get_template_directory_uri(). '/images/portfolio/item03@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('fourth_image', get_template_directory_uri(). '/images/portfolio/item04@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_four','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('fourth_image', get_template_directory_uri(). '/images/portfolio/item04@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('fifth_image', get_template_directory_uri(). '/images/portfolio/item05@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_five','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('fifth_image', get_template_directory_uri(). '/images/portfolio/item02@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="portfolio-single">
                        <a href="<?php echo get_theme_mod('six_image', get_template_directory_uri(). '/images/portfolio/item06@2x.jpg') ?>" title=" <?php echo get_theme_mod('project_title_six','Mobile App'); ?>">
                            <img width="800" height="600" src="<?php echo get_theme_mod('six_image', get_template_directory_uri(). '/images/portfolio/item02@2x.jpg') ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- section Clients -->

    <section id="sectionClients">

        <div class="container">

            <div class="sectionTitle">
                <h1><?php echo get_theme_mod('client_section_title','They trust me'); ?></h1>
                <span><?php echo get_theme_mod('client_section_name','Clients'); ?></span>
            </div>
            <div class="clients row">
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_1', get_template_directory_uri(). '/images/clients/clients1.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_2', get_template_directory_uri(). '/images/clients/clients2.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_3', get_template_directory_uri(). '/images/clients/clients3.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_4', get_template_directory_uri(). '/images/clients/clients4.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_5', get_template_directory_uri(). '/images/clients/clients5.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 client-border">
                    <!-- clients-box-top -->
                    <div class="clients-bg"></div>
                    <div class="client-image">
                        <img src="<?php echo get_theme_mod('client_image_6', get_template_directory_uri(). '/images/clients/clients6.png') ?>" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>
 

    <!-- section Contact -->

    <section id="sectionContact">

        <div class="sectionTitle">
            <h1><?php echo get_theme_mod('contact_section_title'); ?></h1>
            <span><?php echo get_theme_mod('contact_section_name','Contact'); ?> </span>
        </div>

        <div class="container">

            <div class="contactForm row">

                <div class="col-md-6 col-sm-6 col-xs-12 contact-res contactLeft">
                    <!--MESSAGE SENT SUCCESFULLY-->
                    <div id="message"></div>

                    <!--MAIN FORM-->
                    <?php  
                            $f = get_theme_mod('contact_form_shortcode','Get in touch') ;
                            echo do_shortcode($f);
                    ?>
                        <!--END Main form-->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 contact-res">
                    <div id="map">
                        <?php echo get_theme_mod('google_map_link'); ?>
                            <!-- <iframe src="" width="600" height="502" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    </div>
                </div>

            </div>
            <!-- END contact FORM-->
        </div>



    </section>


    <?php get_footer(); ?>
