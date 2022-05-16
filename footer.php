<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.http://www.misfitsrecovery.com/wp-admin/themes.php?page=wpeditor_themes#
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeimundDesignsHero
 */

?>
</div><!-- #primary -->
	</div><!-- #content -->
<div class="footer-spacer"></div>
<footer id="colophon" class="site-footer">
  <!-- Add the footer widgets -->
  <div id="footer-sidebar" class="secondary">
    <div class="container">
      <div class="row">
        <div id="footer-sidebar1" class="col-sm-6">
          <?php
          if (is_active_sidebar('footer-sidebar-1')) {
            dynamic_sidebar('footer-sidebar-1');
          }
          ?>
        </div><!-- #footer-sidebar1 -->

        <div id="footer-sidebar2" class="col-sm-6">
          <?php
          if (is_active_sidebar('footer-sidebar-2')) {
            dynamic_sidebar('footer-sidebar-2');
          }
          ?>
        </div><!-- #footer-sidebar2 -->
      </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
      <div class="row">
        <div id="footer-sidebar3" class="col-sm-12">
          <?php
          if (is_active_sidebar('footer-sidebar-3')) {
            dynamic_sidebar('footer-sidebar-3');
          }
          ?>
        </div>
      </div><!-- .container -->
    </div><!-- #footer-sidebar3 -->

  </div>
</footer><!-- #colophon -->

		</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
