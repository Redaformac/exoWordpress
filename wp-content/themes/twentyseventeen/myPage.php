<?php
/**
 *Template Name: myPage
 *The template for displaying all pages
 *
 * This is the template for accueil
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<nav><?php wp_nav_menu();?></nav>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			    <h1 class="titre_spe"> <?php the_title(); ?></h1>

                <p class="contenu_spe"> <?php the_content(); ?></p>

                <ul class="list_spe">
                    <!-- <?php the_meta(); ?> -->
										<?php the_field('champ_test'); ?>

                </ul>

            <?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
