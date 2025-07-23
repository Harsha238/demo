<?php
/**
 * Plugin Name: Color Catcher Game
 * Description: A simple color matching game using JavaScript inside WordPress.
 * Version: 1.0
 * Author: Harshitha
 */

function ccg_enqueue_assets() {
    wp_enqueue_style('ccg-style', plugin_dir_url(__FILE__) . 'assets/style.css');
    wp_enqueue_script('ccg-script', plugin_dir_url(__FILE__) . 'assets/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'ccg_enqueue_assets');

function ccg_game_shortcode() {
    ob_start(); ?>
    <div class="game-container">
        <h2>Color Catcher Game</h2>
        <p>Click the color: <span id="target-color">Red</span></p>
        <div id="buttons-container">
            <button class="color-btn" style="background-color: red;" data-color="Red"></button>
            <button class="color-btn" style="background-color: blue;" data-color="Blue"></button>
            <button class="color-btn" style="background-color: green;" data-color="Green"></button>
            <button class="color-btn" style="background-color: yellow;" data-color="Yellow"></button>
        </div>
        <p>Score: <span id="score">0</span></p>
        <p id="result"></p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('color_catcher_game', 'ccg_game_shortcode');
//ashu project//