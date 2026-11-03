<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">

        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                F1 WORLD<span>.</span>
            </a>
        </div>

        <button class="menu-toggle" aria-label="Menu openen" aria-expanded="false" aria-controls="primary-menu" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>
            <a href="<?php echo esc_url(home_url('/nieuws/')); ?>">
                Nieuws
            </a>
            <a href="<?php echo esc_url(home_url('/teams/')); ?>">
                Teams
            </a>
            <a>
                Coureurs
            </a>
            <a href="<?php echo esc_url(home_url('/races/')); ?>">
                Races
            </a>
        </nav>
    </div>
</header>