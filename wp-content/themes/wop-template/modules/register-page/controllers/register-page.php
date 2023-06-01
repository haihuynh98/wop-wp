<?php

/**
 * Register page class
 */
class RegisterPage
{
    public function __construct()
    {

        $this->run_hook();
    }

    /**
     * Run hook
     **/
    private function run_hook()
    {
        // This function just to run after switch the theme
        add_action('after_switch_theme', [$this, 'create_about_us_page']);

        // Hook into the 'wp_trash_post' filter to prevent the deletion of the "about-us" page
        add_filter('wp_trash_post', [$this, 'prevent_about_us_deletion'], 10, 1);
    }

    /**
     * Create about us page
     **/
    public function create_about_us_page()
    {
        $about_us = get_page_by_path('about-us');

        if (!$about_us) {
            // The "about-us" page doesn't exist, create a new one
            $new_page = array(
                'post_title' => 'About Us',
                'post_content' => 'This is the content of the About Us page.',
                'post_name' => 'about-us',
                'post_status' => 'publish',
                'post_type' => 'page',
                'page_template' => PAGE_TEMPLATES_DIR . '/about-us-template.php' // Replace with the actual template filename
            );

            // Insert the new page into the database
            $page_id = wp_insert_post($new_page);

            if ($page_id) {
                echo "The About Us page has been created successfully!";
            } else {
                echo "An error occurred while creating the page.";
            }
        } else {
            // The "about-us" page already exists
            echo "The About Us page already exists.";
        }
    }
    public function prevent_about_us_deletion($post_id)
    {
        // Check if the post ID matches the "about-us" page ID
        if ($post_id === get_page_by_path('about-us')->ID) {
            // Prevent the deletion of the "about-us" page
            return false;
        }

        return $post_id;
    }
}

$register_page = new RegisterPage();