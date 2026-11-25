<?php
// Plugin Name: F1 Plugin
// Version: 1.0
// Author: Anke van Dommelen

// Add a weather widget to the races page
add_action('wp_body_open', 'weather_plugin');

function weather_plugin() {
    if (is_page('races')) {
        echo '<div class="weather-widget">';
        echo '<h2>Race Weather</h2>';
        echo '<p>Het weer tijdens de Grand Prix.</p>';
        echo '</div>';

    }
}

//Style the weather widget
// add_action('wp_enqueue_scripts', 'enqueue_weather_plugin_styles');

// Add a drivers standings widget to the drivers page
add_action('wp_body_open', 'drivers_standings_plugin');

function drivers_standings_plugin() {
    if (is_page('coureurs')) {
        echo '<div class="drivers-standings-widget">';
        echo '<h2>Drivers Standings</h2>';
        echo '<p>De stand van de drivers tijdens de Grand Prix.</p>';
        echo '</div>';
    }
}

//Style the drivers standings widget
// add_action('wp_enqueue_scripts', 'enqueue_drivers_standings_plugin_styles');