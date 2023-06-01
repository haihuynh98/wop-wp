<?php

class WordPressPageRegistration
{
    private $pages_to_create = ['Home', 'About', 'Wop Clubs', 'Joy Billiards', 'Wop Shop', 'Contact'];
    private $created_pages = [];

    public function registerPages()
    {
        foreach ($this->pages_to_create as $page) {
            if (!$this->pageExists($page)) {
                $page_slug = $this->getPageSlug($page);
                $page_template = $this->getPageTemplatePath($page);
                $this->createPage($page, $page_slug, $page_template, $page);
            }
        }
    }

    private function getPageTemplatePath($pageName)
    {
        return sprintf('%1$s/%2$s', THEME_DIR, $this->getPageTemplate($pageName));
    }

    
    private function getPageTemplate($pageName)
    {
        var_dump($pageName);
        $file_name = strtolower(str_replace(' ', '-', $pageName));
        return sprintf('%1$s/%2$s-page.php', 'page-templates', $file_name);

    }

    private function getPageSlug($pageName)
    {
        return strtolower(str_replace(' ', '_', $pageName));
    }

    private function pageExists($pageName)
    {
        $page_slug = $this->getPageSlug($pageName);
        $page = get_page_by_path($page_slug);
        return ($page !== null);
    }

    function createPage($pageName, $pageSlug, $templatePage, $pageTitle)
    {
        // Prepare the page data
        $pageData = array(
            'post_title' => $pageTitle,
            'post_name' => $pageSlug,
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1, // ID of the page author
        );

        // Insert the page into the database
        $pageID = wp_insert_post($pageData);

        // Set the page template
        if (!empty($templatePage)) {
            update_post_meta($pageID, '_wp_page_template', $templatePage);
        }

        return $pageID;
    }

    function hide_editor()
    {
        remove_post_type_support('page', 'editor');
        // foreach ($this->pages_to_create as $page_name) {
        //     $page_slug = $this->getPageSlug($page_name);
        //     $page = get_page_by_path($page_slug, OBJECT, 'page');
        //     $pageId = $page->ID;
        //     // Kiểm tra xem có phải trang quản lý trang không
        //     if (isset($_GET['post']) && $_GET['post'] == $pageId) {
        //         $template_file = get_post_meta($_GET['post'], '_wp_page_template', true);

        //         // Kiểm tra xem trang có sử dụng trang mẫu cụ thể không
        //         if ($template_file == $this->getPageTemplate($page_name)) {
        //             remove_post_type_support('page', 'editor');
        //         }
        //     }
        // }
    }

}

// Sử dụng lớp đăng ký để tạo các trang
$registration = new WordPressPageRegistration();
$registration->registerPages();

add_action('admin_init', [$registration, 'hide_editor']);