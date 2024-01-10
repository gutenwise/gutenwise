<?php
/*
 * Plugin Name:       GutenWise
 * Plugin URI:        https://gutenwise.com/
 * Description:       GutenWise is a gutenburg editor plugin that provide gutenburg blocks for content creators. Powered by GutenWise. This plugin gives Content creators to lots of free blocks collection to add and change content looks.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            GutenWise
 * Author URI:        https://gutenwise.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://gutenwise.com/
 * Text Domain:       gutenwise
 * Domain Path:       /languages
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
// Your plugin code goes here.
function gutenwise_menu() {
    add_menu_page(
        'GutenWise',
        'GutenWise',
        'manage_options',
        'gutenwise-getting-started',
        'gutenwise_getting_started_page',
        'dashicons-welcome-write-blog',
        30
    );

    add_submenu_page(
        'gutenwise-getting-started',
        'Getting Started',
        'Getting Started',
        'manage_options',
        'gutenwise-getting-started',
        'gutenwise_getting_started_page'
    );

    add_submenu_page(
        'gutenwise-getting-started',
        'Blocks',
        'Blocks',
        'manage_options',
        'gutenwise-blocks',
        'gutenwise_blocks_page'
    );

    add_submenu_page(
        'gutenwise-getting-started',
        'Settings',
        'Settings',
        'manage_options',
        'gutenwise-settings',
        'gutenwise_settings_page'
    );

    add_submenu_page(
        'gutenwise-getting-started',
        'Help',
        'Help',
        'manage_options',
        'gutenwise-help',
        'gutenwise_help_page'
    );
}

add_action('admin_menu', 'gutenwise_menu');

// Enqueue block editor assets
if (!function_exists('gutenwise_enqueue_assets')) {
    function gutenwise_enqueue_assets() {
        wp_enqueue_script(
            'wise-accordion-block',
            plugin_dir_url(__FILE__) . 'wise-accordion-block.js',
            array('wp-blocks', 'wp-editor', 'wp-components', 'wp-element')
        );
    }
    
    add_action('enqueue_block_editor_assets', 'gutenwise_enqueue_assets');
}


add_action('enqueue_block_editor_assets', 'gutenwise_enqueue_assets');

function gutenwise_getting_started_page() {
    // Content for Getting Started page
}

function gutenwise_blocks_page() {
    // Content for Getting Started page
}

function gutenwise_settings_page() {
    // Content for Getting Started page
}


function gutenwise_help_page() {
    // Content for Help page
}


// Register WiseAccordion block
function gutenwise_register_wise_accordion_block() {
    register_block_type('gutenwise/wise-accordion', array(
        'editor_script' => 'gutenwise-accordion-block',
        'render_callback' => 'gutenwise_render_wise_accordion_block',
    ));
}

add_action('init', 'gutenwise_register_wise_accordion_block');

// Render callback for WiseAccordion block
function gutenwise_render_wise_accordion_block($attributes, $content) {
    // Add your accordion block rendering logic here
    ob_start();
    ?>
    <div class="wise-accordion">
        <!-- Your accordion content goes here -->
        Wise Accordion Content
    </div>
    <?php
    return ob_get_clean();
}


