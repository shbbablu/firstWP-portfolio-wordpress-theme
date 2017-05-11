<?php
/**
 * The template for displaying the footer.
 *
 * @package First
 */
global $redux_demo;
?>

  <!-- Footer -->

       <footer class="pFooter">

            <div class="container-fluid">

                <div class="col-md-6 col-sm-12 col-xs-12 fCopy text-left">
                <?php echo get_theme_mod('copyright_main_text','COPYRIGHTS<span> ©First </span>2016. ALL RIGHTS RESERVED.'); ?>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 fCopy text-right">
                Created by <span> <a href="http://imshahadat.net">SHAHADAT</a></span>
                </div>

            </div>

        </footer>
    <?php wp_footer(); ?>
  </body>
</html>
