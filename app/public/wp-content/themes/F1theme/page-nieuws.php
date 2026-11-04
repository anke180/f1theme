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
        <div class="news-filters">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
            class="filter-button active">
                Alle nieuws
            </a>

            <?php
            $tags = get_tags(array(
                'hide_empty' => true
            ));

            if ($tags) :
                foreach ($tags as $tag) :
            ?>

            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
            class="filter-button">
                <?php echo esc_html($tag->name); ?>
            </a>

            <?php
            endforeach;
        endif;
        ?>
    </div>

    <div class="news-grid">
        <?php
        $news = new WP_Query(array(
            'post_type'      => 'post',
            'post_status'    => 'publish'
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