<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="section-footer" id="contacts">
        <h2>Contact</h2>
        <div class="footer-section-wrapper">
            <form class="footer-contact-form" action="">
                <div class="name-wrapper">
                    <input type="text" placeholder="Full Name">
                </div>
                <div class="email-wrapper">
                    <input type="text" placeholder="E-mail">
                </div>
                <div class="text-wrapper">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <button class="button button--secondary h4">Send</button>
            </form>
            <div class="map-andicon-wrapper">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810622145!2d-0.24168183442752736!3d51.52877184100475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2z0JvQvtC90LTQvtC9LCDQktC10LvQuNC60L7QsdGA0LjRgtCw0L3QuNGP!5e0!3m2!1sbg!2sbg!4v1603015668384!5m2!1sbg!2sbg"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="icons-wrapper">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="30" viewBox="0 0 24 30">
                            <image id="location" width="24" height="30" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAeCAYAAAA2Lt7lAAADfUlEQVRIiZXWa6hVRRQH8J/HK1FIZlKkhYWUHiOINMpeQkZBEcGOIlErt1EEUhR1odL6UtkDjbKIHtQWJS3IDvQhSYUwqOiFpEU7Mi0r0IpeXjHlkn2Ydbjj5dx7T+vLf+81M///rDUza2bUtLcWGsaOwUJcjZk4Mfz78QXexrq6qHYPRTBqGIFePIoxmW8PDmHyoL4r8UhdVL8OJml0IJ6Cn/BkkD+O8zAWE3EqjsZ03Ic+3Ilfmq1y9kgCs7ADJ+OpwPvxqZSWtv2DGk9gQkR7AFuarbLMCfMUNfF1fJ+NbR3Ez8RRMYmP0FcXVRrcKsdiJ05AWRfVqsERvB84ZxB5L/4IwlfwPDZin5RGUBdVX0wCqmarnJILLA3lCu9l5K8HyXFYH2J3hdBB9DZbZd1slRNDZCfmx9jX2imajB+wV1rEwxgdEV2IZXhW2kG59UiLuwK/4/y6qHZEurZgNs5o4IoYsDzI4bkgfxVLOpBDv7QRbsbx2JC1LQ68qYGz4md94ATcjr9xSwfiI6wuqtVSWk9vtspLw/dlTKBs4JLouyvw+iyibu2hwFmZ72Oc0pAOzM9Zw4zAPOSR7MPAmZlvO2kX9UvHv22jAw90y14X1b/xeWzm7m8L7MZpWcNfgZO6FWi2ynHxuSNzT24LbMMoqXLCpsDbuhXAvMCvMt+56G/gg3DcGLhBOvLX4bKRmGP2K+P3zfBNkjLwcsNAibg7G3dD4GYDd0AnGy0tcA9666LaG/4HA9c0pNXejmm4IBo+ywT3ojSQwrZdjh+lAriuLqrlMfse6RzB5+1atCCwygielnK7TzrR+/EdvpVO/EaptDxQF9W8bNxLgffWRXWoLbBNKmzTDKwFrMM4LMK7Ukk4CZ/gHoyvi+qxdudmq7woot1TF9UKUu7adivm4hmsyfyHI7I8uqHshcC5bUd+H/TFTMdjVRdkR1izVS6Q6tobdVFt6SQgZvmOVCGX/g/yK6Wot9dFNTdv63TpX4s/8bAuDluzVc6IScE1g9s7CRyU7gJ4USqGQ9l46UEAi+qi+r4bAdLlPye+t2Jqhz5jpCrQwJK6qDpugqEESJfIDOkV8Y0jt+850pmYjvl1US0biqRnqIawrdKJ3YTVUgneJb0w4I66qNYORzBcBG3bjIultVmbkS+W7u5hrRsBUq6nSq+533CV9D4a0f4DtRfwZYCznLYAAAAASUVORK5CYII="/>
                        </svg>
                        <p class="text">LSE Houghton Street London WC2A 2AE UK.</p>
                    </div>
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="21" viewBox="0 0 30 21">
                            <image id="message" width="30" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAVCAYAAABR915hAAACX0lEQVRIibXWT4hOURjH8c/wGtJIUZOUUqbcyJ/sJlYkysYtoyapuVP+JY1JMwsTpVjIn0w2hnQzNVMi10qSWVjITs2Q7s5KQkxiMZgpi3veeun1zl+/ejbnPM/ve59zzz331K190LYPN7AUP7EgxFzqV4h6fMXREvrwEsuwBSO4iQksnCXwB+bjMDYGzhf0lQLwFh7iOg5gE07lcfqtmluUJVMFL8EVrFE0cwJ7cXdeSKjP4/RnHqdH0BHgw1GW7Jxmh5XaieHg1YEjildZD2VwXTk7j9PbaMZnPImy5GyUJdNZ8oU4iyfBoxm3K+brKsF/KI/TEWxHL87hUZQlTVOANuFRqOkNHiPVEquCA/xbHqcn0YINeBZlSWsNaCuehdwWnETVPVITXPEA95FgJQajLOnF4oqUxYruBkNOgvuT+U4KjrKkAZ14i0s4jiGsDzEUxi6FnE40zBqMq9iBw3mcdmMXGvEiRGMY61Z8rztCzczBUZYcwyF05XH6FPI4HcI2PA6xTdE1PEVXqDlWy7tUA7oV1zCQx+nlv6bfY/8/Si9jc6gdwfNqSVU7jrJkBQbwRnHaTFcnQu0AVkwJHGXJIvRjOQ7mcTo6A/AoDgaPfiyaFIwziuOuPY/T1zOAlvUa7cHrTE1wlCUtOI0LeZzemwW0rHu4EDxbqoG/R1myWrEsj3F+DqBlnQ+e/ViN75XgVbiDT2jL43RsDsFjaAvedwLLPIyjR/HP3JPH6Yc5hJb1AXsCowfjJcWNoFGxHOuiLNn0H8AUV59X2I2PJcXZelGx+3b/J2hZE3iH7t88badUMoSIJAAAAABJRU5ErkJggg=="/>
                        </svg>
                        <p class="text">hello@gmail.com</p>
                    </div>
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                            <image id="phone" width="30" height="30" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAADB0lEQVRIia3WT4iVVRjH8c8UVIsyaBUIWkn0ShG1qWhT1lhCizipFJrUuzBLAwvJmobC/tlo/xYxpiKcKM1C8TWQpMYRJNoEZdSiswkpaFFQFBRUCNPivHe6Xe6de2fmfTbve877u+d7z3Oe5znP0NTUlHYrqnIUL2AI21OIo/W8+VgK8X/jczqgh/EiziDh6aIqP54XsYdNg4uqPIqVOJhCXJJCXIq3cEdRlZOyB5oFF1V5CHfjQApxTetjCnEjxnEbJnV4aF7goirXYRU+TCHe3ylIIT4q73wZTjQGxjM4i3t7ieqd767hrzYFvhKnU4h/99E+gq+xBRc2AT47Sz1MzagacKFfsGQA7TiuwU782QT4C1xSVOWiXqKiKsexESfx5HyhLfAH9fudPaA7auhHGG4C2gIfq9+39NBsls/0Lg2c7TQ4hfgr9uKqoiq77fp1uWqtbwrKf1H6bP18rYvmeTmY9mJho+AU4k94D1cXVXlLuyCF+BdW18MTOLcxcG0j9fNApyiFeBxjKDDRKDiF+AOewsKiKt/uoh2R3b0MRwZY+2Is6Auu4TtwCg8UVbmqi36DnH6hhl/QY92d+A2/4+W+4NruwT84VFRlt2C6Dwdr+Le4rmO9T/AEvsI3sheP9wXX6bWyHk4UVXl+F/gabMVlOI2HsUg+/+XYhetxLfZhRVGVE0VVTjcTXS/2FOIxjGKp7Ppu9gpux8/yff293DC8iU1tuvXYI1e9k63Joc5mr93qcrkVn9Y76XZ1nodtcsq9IzeK3WyXfLVOphCHZwTX8DfwmNz8DePHGX/Qw1KIiqrcg4fwUt8eKoX4uJxKhRxMy+cCrtfagO8wOlDzlkIcwzpcJEft9rnCWzabrnG/HGyfyx44I3emA1tRlfvlpmNktu1qwo14Tk6lo3KO3jwgdC0OpxDH5tonb8NivIsV+EwuFptwRYf2UrnKrcWRFOJq+qRTxz/u9ekGOU0ebJv7A1/KtbpV2falEKfv9CbALVsgl9NbcRMur+dPYXcK8f128b+HR+C9xlgDqwAAAABJRU5ErkJggg=="/>
                        </svg>
                        <p class="text"> +44(20) 74057686</p>
                    </div>
                </div>

            </div>
        </div>
</div>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    
	

</div><!-- wrapper end -->
<div class="bottom-footer-menu-wrapper">
<nav id="main-nav" class="navbar navbar-expand-lg section-wrapper" aria-labelledby="main-nav-label">
				<div class="site-logo">
					<img src="<?php echo get_template_directory_uri() . '../img/logo.svg' ?>" alt="">
				</div>
				<h3 class="center" >EDUCATION</h3>
				<!-- The WordPress Menu goes here -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon">Menu</span>
				</button>
				<?php
				wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
				);
				?>

			</nav><!-- .site-navigation -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

