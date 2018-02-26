<?php
/**
 *Template Name: accueil */

?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<section id="banniere_index">
    <div class="container">
        <div class="text-center">
        <h1 class="titre"><?php the_field('index_banniere_titre',4); ?></h1>
        <p class="gras"><?php the_field('index_banniere_soustitre',4); ?></p>
        <a class="started" href="#services">Get Started</a>
        </div>
    </div>
</section>

<section id="services">
  <div class="container">
      <div class="row">
              <div class="col-12 col-md-5 offset-md-1">
        <img id="img_service" class="img-fluid"src="wp-content/themes/myTheme/img/service_blue.png"/>
    </div>
    <div class="col-12 col-md-4 inset-md-2">
      <h2><?php the_field('index_service_titre',4); ?></h2>
      <p class="space"><?php the_field('index_service_paragraphe',4); ?></p>
      <a class="more" href="#">Read More</a>
    </div>
</div>
  </div>
</section>

<section id="team">
  <div class="container">
       <div class="row">
            <div class="col-12 col-md-4 offset-md-1">
             <h2><?php the_field('index_team_titre',4); ?></h2>
             <p class="space"><?php the_field('index_team_paragraphe',4); ?></p>
             <a class="more" href="http://localhost/exoWordpress/index.php/about/">Read More</a>
           </div>
            <div class="col-12 col-md-5 offset-md-1">
                <img id="img_team" class="img-fluid" src="wp-content/themes/myTheme/img/team_blue.png"/>
            </div>
        </div>
    </div>
</section>

<section id="clients">
 <div class="container">
     <h2>Our clients</h2>
     <div class="row col-11 offset-1">
       <span class="col-12 col-md-6 col-lg-3"><img src="wp-content/themes/myTheme/img/umber.png"/> </span>
       <span class="col-12 col-md-6 col-lg-3"><img src="wp-content/themes/myTheme/img/tipox.png"/> </span></span>
       <span class="col-12 col-md-6 col-lg-3"><img src="wp-content/themes/myTheme/img/excipia.png"/> </span></span>
       <span class="col-12 col-md-6 col-lg-3"><img src="wp-content/themes/myTheme/img/robust.png"/> </span></span><br>
     </div>
  <a class="more" href="#">Read More</a>
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

<?php include 'bandeau_contact.php'; ?>

<?php include 'footer.php'; ?>
