<?php get_header(); ?>

<main class="site-main">
<section class="page-hero">
    <div class="container">
        <span class="section-label">F1 WORLD / NIEUWS</span>
        <h1>
            Nieuws over <span><?php single_tag_title(); ?></span>
        </h1>
        <p>
            Ontdek al het laatste Formule 1-nieuws
            over <?php single_tag_title(); ?>.
        </p>
    </div>
</section>

<section class="content">
    <div class="container">
        <h2>
            Berichten met de tag:
            <?php single_tag_title(); ?>
        </h2>
        <div class="news-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="news-card">
                        <a href="<?php the_permalink(); ?>" class="news-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array(
                                    'loading' => 'lazy'
                                )); ?>
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
                <p>
                    Er zijn nog geen nieuwsberichten met deze tag.
                </p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php
            echo wp_kses_post(paginate_links(array(
                'total'   => $wp_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'type'    => 'list'
            )));
            ?>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>
