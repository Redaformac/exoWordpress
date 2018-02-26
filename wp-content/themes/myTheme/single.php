<?php
/**
 *Template Name: article */

?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

    <section id="banniere_news" class="banniere">
        <div class="container">
            <h1 class="text-center">News & updates</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="wrap  article">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="info_articles">
                <span class="img_auteur"></span>
                <span class="auteur"><?php the_author(); ?></span>
                <span class="date_pub"><?php the_date(); ?></span>
            </div>
            <a <?php get_permalink(); ?>><h3 class="titre_article"><?php the_title(); ?></h3></a>
            <div class="extract">
                <?php the_excerpt(); ?>
            </div>
            <img class="img-fluid" src=<?php the_post_thumbnail(); ?>
            <div class="contenu_article"><?php the_content(); ?></div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="latest">
     <div class="container">
         <h2>Latest articles</h2>
         <div class="row article">
         <?php query_posts( 'category_name=news&posts_per_page=3' ); ?>
         <?php while ( have_posts() ) : the_post(); ?>
               <div class="col-12 col-md-6 col-lg-4"><a href=<?php the_permalink(); ?>>
                 <img class="img-fluid" src=<?php the_post_thumbnail(); ?>
                 <h4 class="vignette"><?php the_title(); ?></h4>
                 </a>
               </div>
         <?php endwhile; ?>
         </div>
     </div>
    </section>

<?php include 'footer.php'; ?>
