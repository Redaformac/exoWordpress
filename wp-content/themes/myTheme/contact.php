<?php
/**
 *Template Name: contact */

?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

    <section id="banniere_contact">
        <div class="container">
            <h1 class="text-center text-center-contact">Contact</h1>
        </div>
    </section>

    <section class="formulaire">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <h2>Axis Group</h2>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <div class="col-6 col-lg-3 offset-lg-2">
                        <h3>Our Address</h3>
                        <p>500 Terry Francois Street<br />
                           San Francisco, CA 94158<br />
                           info@mysite.com</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <h3>Call Us</h3>
                        <p>Free Call: 1-800-000-0000<br />
                           Tel: 123-456-7890<br />
                           Fax: 123-456-7890</p>
                    </div>
                </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
