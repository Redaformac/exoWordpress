<?php
/**
 *Template Name: news */

?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

    <section id="banniere_news" class="banniere">
        <div class="container">
            <h1 class="text-center">News & updates</h1>
        </div>
    </section>

    <section class="articles">
        <div class="container">
            <div class="row">
            <?php query_posts( 'category_name=news' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-md-6">
                <div class="wrap">
                <img class="img-fluid" src=<?php the_post_thumbnail(); ?>
                <div class="infos_articles">
                    <span class="img_auteur"></span>
                    <p class="auteur"></p>
                    <p class="date_pub"></p>
                </div>
                <div class="contenu_article">
                    <h3><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h3>
                    <p class="space"><?php the_excerpt(); ?></p>
                </div>
            </div>
            </div>
            <?php endwhile; ?>

         </div>
        </div>
    </section>

<?php include 'bandeau_contact.php'; ?>

<?php include 'footer.php'; ?>
