<?php get_header(); ?>

<main 
    class="error-page"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/f1-404.jpg'); ?>');"
>

    <div class="error-overlay"></div>

    <div class="error-container">

        <div class="error-content">

            <div class="error-number">
                404
            </div>

            <h1>
                Deze pagina is<br>
                van de baan
            </h1>

            <p>
                Oeps! De pagina die je zoekt lijkt van de baan
                te zijn geraakt. Misschien is de pagina verplaatst,
                verwijderd of bestaat hij niet meer.
            </p>

            <a 
                href="<?php echo esc_url(home_url('/')); ?>" 
                class="error-button"
            >
                ← Terug naar home
            </a>

        </div>

    </div>

</main>

<?php get_footer(); ?>