<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palmeria
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="wrapper footer-wrapper">

            <?php
            if(has_nav_menu('menu-2')):
                wp_nav_menu(array(
                    'theme_location' => 'menu-2',
                    'menu_class' => 'footer-menu',
                    'depth' => 1,
                ));
            endif;

            if(has_nav_menu('menu-3')):
                wp_nav_menu(array(
                    'theme_location' => 'menu-3',
                    'menu_class' => 'theme-social-menu footer-socials',
                    'depth' => 1,
                    'link_before' => '<span class="menu-text">',
                    'link_after' => '</span>',
                ));
            endif;

            ?>
            <div class="site-info">
                <h2 class='site-info-h2'>
					Furniland - мебель на заказ
				</h2>
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
