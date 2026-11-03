<?php get_header(); ?>

<main class="site-main">

<section class="page-hero">
    <div class="container">

        <span class="section-label">F1 WORLD / NIEUWS</span>

        <h1>Het laatste <span>F1-nieuws</span></h1>

        <p>
            Ontdek het laatste nieuws, raceverslagen,
            transfers en ontwikkelingen uit de Formule 1.
        </p>

    </div>
</section>

<section class="content">

    <div class="container">

        <h2>Laatste berichten</h2>

        <div class="news-grid">

            <?php
            $news = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'post_status'    => 'publish',
                'paged'          => max(1, get_query_var('paged'))
            ));
            ?>

            <?php if ($news->have_posts()) : ?>
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                    <article class="news-card">
                        <a href="<?php the_permalink(); ?>" class="news-image">
                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail('large', array(
                                    'loading' => 'lazy'
                                ));
                                ?>
                            <?php else : ?>
                                <div class="news-placeholder">
                                    F1 WORLD
                                </div>
                            <?php endif; ?>
                        </a>

                        <div class="news-card-content">
                            <span class="news-date">
                                <?php echo esc_html(get_the_date()); ?>
                            </span>
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p>
                                <?php echo esc_html(get_the_excerpt()); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="read-more">
                                Lees meer →
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <p>Er zijn nog geen nieuwsberichten gepubliceerd.</p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php
            echo wp_kses_post(paginate_links(array(
                'total'   => $news->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'type'    => 'list'
            )));
            ?>

        </div>
        <?php wp_reset_postdata(); ?>
    </div>
</section>
</main>

<?php get_footer(); ?>
