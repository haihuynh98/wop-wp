<?php

/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
    define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
    define('THEME_URL', get_template_directory_uri());
if (!defined('ASSETS_DIR'))
    define('ASSETS_DIR', THEME_DIR . '/assets');
if (!defined('ASSETS_URL'))
    define('ASSETS_URL', THEME_URL . '/assets');
if (!defined('MODULE_DIR'))
    define('MODULE_DIR', THEME_DIR . '/modules');
if (!defined('MODULE_VIEW_DIR'))
    define('MODULE_VIEW_DIR', THEME_DIR . '/views');
if (!defined('OBJECT_DIR'))
    define('OBJECT_DIR', THEME_DIR . '/objects');

if (!defined('PAGE_TEMPLATES_DIR'))
    define('PAGE_TEMPLATES_DIR', THEME_DIR . '/page-templates');
/*
 * Add theme Support
 */
if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');

    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
}

/**
 * Registers an editor stylesheet for the theme.
 */
function register_editor_stylesheet()
{
    add_editor_style('assets/css/bootstrap.css');
    add_editor_style('assets/css/main.css');
}
add_action('admin_init', 'register_editor_stylesheet');

/*
 * Add Image Size for Wordpress
 */
if (function_exists('add_image_size')) {

}

/*
 *  Add page slug to body class
 */
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

add_filter('body_class', 'add_slug_to_body_class');

/*
 *  Change login logo & url in WP Admin
 */

function custom_login_logo()
{
    echo "<style type='text/css'>
body.login {
                    background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
                    background: -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
                    background: -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
                    background: -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
                    background: linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */
                }

                .login h1 a {
                    background-image: url('" . THEME_URL . "/assets/images/logo-wecopytrade.png');
                    background-size: 100px 100px;
                    width: 100px;
                    height: 100px;
                }

                .login form {
                    margin-left: auto;
                    margin-right: auto;
                    padding: 30px;
                    border: 1px solid rgba(0, 0, 0, .2);
                    background-clip: padding-box;
                    background: rgba(255, 255, 255, 0.9);
                    box-shadow: 0 0 13px 3px rgba(0, 0, 0, .5);
                    overflow: hidden;
                }

                .login label {
                    color: #333;
                }

                #backtoblog, #nav {
                    display: none;
                }
    </style>";
}

add_action('login_head', 'custom_login_logo');


function custom_table_column_style()
{
    echo '<style type="text/css">';
    echo '.limit-text-container { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; }';
    echo '</style>';
}

add_action('admin_head', 'custom_table_column_style');


/*
 * Include framework files
 */
foreach (glob(THEME_DIR . "/includes/*.php") as $file_name) {
    require_once($file_name);
}

/*
 * Include framework files
 */
foreach (glob(THEME_DIR . "/modules/*/controllers/*.php") as $module_file_name) {
    require_once($module_file_name);
}