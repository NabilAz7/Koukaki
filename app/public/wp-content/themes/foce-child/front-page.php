<?php
get_header();
?>
<main id="primary" class="site-main">
    <section class="banner-container">
        <!-- Logo positionné au centre de la bannière -->
        <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">

        <!-- Section contenant la vidéo -->
        <section class="banner-video">
            <video autoplay muted loop class="banner-video__background">
                <!-- Video MP4 et WebM -->
                <source src="/wp-content/themes/foce-child/medias/video-header.mp4" type="video/mp4">
                <source src="/wp-content/themes/foce-child/medias/video-header.webm" type="video/webm">

                <!-- Image de fallback -->
                <img src="/wp-content/themes/foce-child/medias/screenshot.png" alt="Image de fallback">
            </video>
        </section>
    </section>

    <section id="#story" class="story">
        <h2 id="tigeflower">L'histoire</h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>


        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>

        <article id="characters" class="article_characters">
            <section class="article_characters__titre">
                <h2 id="specific-h2"> Les personnages </h2>
            </section>

            <!-- Slider Swiper -->
            <swiper-container class="mySwiper" space-between="15" slides-per-view="4" loop="true">

                <!-- Afficher le personnage principal dans le premier slide -->
                <?php
                // Vérifiez que la requête a bien renvoyé des personnages
                if ($characters_query->have_posts()) {
                    $characters_query->the_post();
                ?>
                    <swiper-slide>
                        <figure>
                            <?php
                            // Afficher l'image du personnage principal
                            echo get_the_post_thumbnail(get_the_ID(), 'full');
                            ?>
                            <figcaption class="first-slide-title">
                                <?php echo get_the_title(); ?>
                            </figcaption>
                        </figure>
                    </swiper-slide>
                <?php } ?>

                <!-- Afficher les autres personnages dans les autres slides -->
                <?php
                // Revenir au début de la requête pour afficher les autres personnages
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                ?>
                    <swiper-slide>
                        <figure>
                            <?php
                            // Afficher l'image de chaque autre personnage
                            echo get_the_post_thumbnail(get_the_ID(), 'full');
                            echo '<figcaption>' . get_the_title() . '</figcaption>';
                            ?>
                        </figure>
                    </swiper-slide>
                <?php } ?>

            </swiper-container>

        </article>

        <!-- Charger Swiper une seule fois -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

        <script>
            const swiper = new Swiper('.mySwiper', {
                spaceBetween: 15, // Espacement entre les slides
                slidesPerView: '4',
                // Pagination est retirée ici
            });
        </script>

        <article id="place">
            <div class="parallax-container">
                <!-- Nuages -->
                <div class="cloud cloud__top"></div>
                <div class="cloud cloud__bottom"></div>

                <div class="content">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </div>
        </article>


        </article>
    </section> <!-- Fermeture de la balise <section> -->

    <section id="studio">


        <h2 class="container-koukaki_titre"><span class="koukaki__titre">Studio Koukaki</span></h2>




        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <!-- Section Oscars ajouté / (get-template-part) -->
    <section id="Oscars-nomination" class="Oscars-nomination-containers-flex">

        <?php get_template_part('template-parts/oscars'); ?>
    </section>




</main>

<?php
get_footer();
3


?>