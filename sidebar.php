<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Future_Imperfect
 */

?>

<!-- Sidebar -->
<section id="sidebar">

   <!-- Intro -->
	<section id="intro">
		<a href="<?php the_permalink(); ?>" alt="<?php bloginfo( 'name' ); ?> <?php _e( 'Site Logo', 'future-imprtfect' ); ?>"><?php future_imperfect_the_custom_logo(); ?></a>
		<?php /* <a href="#" class="logo"><img src="/wp-content/themes/ostraining-future/images/logo.jpg" alt="" /></a> */ ?>
		<header>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</header>
	</section>

	<?php
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		echo '<ul>' . "\n";
		dynamic_sidebar( 'sidebar-1' );
		echo '</ul>' . "\n";
	}
	?>

</section>
