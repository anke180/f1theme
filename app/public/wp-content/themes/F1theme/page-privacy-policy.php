<?php get_header(); ?>

<main class="site-main privacy-page">

    <section class="page-hero">
        <div class="container">
            <span class="hero-label">F1 WORLD</span>
            <h1>Privacybeleid</h1>
            <p>Lees hoe wij omgaan met jouw gegevens en privacy.</p>
        </div>
    </section>

    <section class="privacy-content">
        <div class="container">

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="privacy-card">
                    <?php the_content(); ?>
                </article>

            <?php endwhile; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>