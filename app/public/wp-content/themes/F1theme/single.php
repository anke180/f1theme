<?php get_header(); ?>

<main class="content">
<div class="container">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class('single-article'); ?>>

                <span class="section-label">
                    F1 WORLD / NIEUWS
                </span>

                <h1><?php the_title(); ?></h1>

                <p class="news-date">
                    Gepubliceerd op <?php echo esc_html(get_the_date()); ?>
                </p>

                <?php if (has_post_thumbnail()) : ?>

                    <div class="single-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                <?php endif; ?>

                <div class="single-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>Dit nieuwsbericht is niet gevonden.</p>

    <?php endif; ?>

</div>
</main>

<?php get_footer(); ?>
