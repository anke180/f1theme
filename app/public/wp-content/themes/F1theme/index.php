<?php get_header(); ?>

<main class="site-main">

    <section class="hero">
        <div class="container">

            <h1>Welkom bij F1 World</h1>

            <p>
                Het laatste Formule 1-nieuws, racekalenders,
                teams en coureurs.
            </p>

        </div>
    </section>


    <section class="content">

        <div class="container">

            <h2>Laatste nieuws</h2>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article class="post">

                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <p>
                            <?php the_excerpt(); ?>
                        </p>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Er zijn nog geen berichten.</p>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>