<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

    <div class="login_garderie">
        <div id="form_login">
            <form name="login" method="post">
                <input type="text" name="username" id="username" value="" />
                <input type="password" name="password" id="password" value="" />
                <input type="submit" name="login_btn" value="Connecter" />
            </form>

        </div>


    </div>

    <aside id="secondary" class="widget-area col-3" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>

    </aside><!-- #secondary -->




