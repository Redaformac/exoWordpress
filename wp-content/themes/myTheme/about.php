<?php
/**
 *Template Name: about */

?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

    <section id="banniere_about">
        <div class="container">
            <h1 class="text-center">About</h1>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="col-12 col-md-8">
            <?php while ( have_posts() ) : the_post();
                echo the_content();
            endwhile;?>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <?php query_posts( 'category_name=membre' ); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-12 col-md-6">
                            <div class="row space">
                            <div class="col 12 col-md-3">
                                <img class="photo img-fluid" src="<?php the_field('photo_equipe');?>" />
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="nom"><?php the_field('nom_equipe');?></p>
                                <p class="contacts"><?php the_field('contacts_equipe');?></p>
                            </div>
                            </div>
                        <div class="description space"><?php the_field('description_equipe');?></div>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

<?php include 'bandeau_contact.php'; ?>

<?php include 'footer.php'; ?>
