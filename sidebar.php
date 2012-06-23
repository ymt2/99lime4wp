<?php
/**
 * 
 *
 * @package
 * @subpackage
 * @since 
 */
?>

<h2>Sidebar</h2>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php if (!dynamic_sidebar('primary-widget-area')) { ?>
<?php } // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php  if (is_active_sidebar('secondary-widget-area')) { ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php } ?>