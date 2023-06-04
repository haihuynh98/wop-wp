<?php

    /*
    Plugin Name: Polylang Theme Strings
    Plugin URI: http://modeewine.com/en-polylang-theme-strings
    Description: Automatic scanning of strings translation in the theme and registration of them in Polylang plugin. Extension for Polylang plugin.
    Version: 4.0
    Author: Modeewine
    Author URI: http://modeewine.com
    License: GPL2
    */

    new MW_Polylang_Theme_Strings();

    class MW_Polylang_Theme_Strings {
        static $prefix = 'mw_polylang_strings_';
        static $plugin_version = '4.0';
        static $pll_f = 'pll_register_string';
        static $pll_d = 'pll_string';
        static $php_file_size_limit = 2097152;

        private $db;
        private $paths;
        private $var = array();
        private $settings = array();

        public function __construct(){
            $this->Init();
        }

        public function Install(){
            if (!version_compare(phpversion(), '5', '>=')){
                die('Your PHP version (' . phpversion() . ') is incompatible with the plug-in code.<br />Minimum supported PHP version is 5.0.');
            }
            else{
                $this->Settings_Defaults_Setup();
                $this->Themes_PLL_Strings_Scan();
                $this->Plugins_PLL_Strings_Scan();
            }
        }

        public function Uninstall(){
            $this->db->query("DELETE FROM `" . $this->db->prefix . "options` WHERE `option_name` LIKE '" . self::$prefix . "%'");
        }

        public function Plugin_Upgrade($upgrader_object, $options){
            if (
                $options['action'] == 'update'
                && $options['type'] == 'plugin'
                && isset( $options['plugins'])
            ){
                $plugin_bn = plugin_basename(__FILE__);

                foreach( $options['plugins'] as $plugin){
                    if ($plugin == $plugin_bn){
                        // upgrading for v.4.0
                        $this->db->query("DELETE FROM `" . $this->db->prefix . "options` WHERE `option_name` LIKE '" . self::$prefix . "%_data' AND `option_name` NOT LIKE '" . self::$prefix . "theme_%_data' AND `option_name` != '" . self::$prefix . "plugins_data'");
                        ////
                    }
                }
            }
        }

        public function Init(){
            global $wpdb;
            $this->db = $wpdb;

            $this->Paths_Init();
            $this->Plugin_Install_Hooks_Init();
            $this->Plugin_Hooks_Init();
        }

        private function Paths_Init(){
            $theme = realpath(get_template_directory());
            $theme_dir_name = preg_split("/[\/\\\]/uis", $theme);
            $theme_dir_name = (string)$theme_dir_name[count($theme_dir_name) - 1];

            $this->paths = array();
            $this->paths['plugin_file_index'] = __FILE__;
            $this->paths['plugin_path'] = plugin_dir_path(__FILE__);
            $this->paths['plugin_url'] = plugins_url(DIRECTORY_SEPARATOR, __FILE__);
            $this->paths['theme'] = $theme;
            $this->paths['theme_dir_name'] = $theme_dir_name;
            $this->paths['theme_name'] = wp_get_theme()->Name;
            $this->paths['plugin_templates_path'] = $this->paths['plugin_path'] . 'templates' . DIRECTORY_SEPARATOR;
        }

        private function Plugin_Install_Hooks_Init(){
            register_activation_hook($this->Path_Get('plugin_file_index'), array($this, 'Install'));
            register_uninstall_hook($this->Path_Get('plugin_file_index'), array($this, 'Uninstall'));
            add_action('upgrader_process_complete', array($this, 'Plugin_Upgrade'), 10, 2);
        }

        public function Plugin_Hooks_Init(){
            add_action('init', array($this, 'Actions_Init'));
            add_action('init', array($this, 'Plugin_TS_Init'));
            add_action('init', array($this, 'PLL_Exists_Check'));
            add_action('admin_enqueue_scripts', array($this, 'Styles_Scripts_Admin_Init'));
            add_action('admin_head', array($this, 'Head_Admin_Init'));
            add_action('admin_menu', array($this, 'Admin_Menus_Init'), 99);

            if ($this->Setting_Get('search_native_wp_functions', 'bool')){
                add_filter('gettext', array($this, 'Str_Filter'), 20, 3);
            }
        }

        public function Actions_Init(){
            if (
                isset($_REQUEST['_handler'])
                && $_REQUEST['_handler'] == self::$prefix
                && isset($_REQUEST['_action'])
            ){
                $inc = $this->Path_Get('plugin_path') . 'actions.php';
                if (file_exists($inc)) include_once($inc);
                die();
            }
        }

        public function Plugin_TS_Init(){
            if (
                !is_admin()
                && function_exists(self::$pll_f)
            ){
                $this->Theme_Current_PLL_Strings_Init();
                $this->Plugins_PLL_Strings_Init();
            }
            else if ($this->Is_PLL_Strings_Settings_Page()){
                $this->Themes_PLL_Strings_Scan();
                $this->Plugins_PLL_Strings_Scan();

                if (!pll_default_language()){
                    if (
                        defined('POLYLANG_VERSION')
                        && version_compare(POLYLANG_VERSION, '2.1', '<')
                    ){
                        wp_redirect(admin_url('options-general.php?page=mlang'));
                    }
                    else{ // for Polylang >= 2.1
                        wp_redirect(admin_url('admin.php?page=mlang'));
                    }

                    die();
                }

                $this->Themes_PLL_Strings_Init();
                $this->Plugins_PLL_Strings_Init();
            }
        }

        public function Settings_Defaults_Setup(){
            $defaults = array(
                self::$prefix . 'settings_search_native_wp_functions' => 1,
                self::$prefix . 'settings_search_plugins_strings' => 0
            );

            foreach ($defaults as $k => $v){
                if (get_option($k) === false) update_option($k, $v);
            }
        }

        public function Styles_Scripts_Admin_Init(){
            if (
                $this->Is_PLL_Strings_Settings_Page()
                || $this->Is_WP_Plugins_Page()
            ){
                wp_enqueue_style(self::$prefix . 'admin', $this->Path_Get('plugin_url') . 'css/admin.css', array(), self::$plugin_version, 'all');
                wp_enqueue_script(self::$prefix . 'admin', $this->Path_Get('plugin_url') . 'js/admin.js', array('jquery'), self::$plugin_version);
            }
        }

        public function Head_Admin_Init(){
            if ($this->Is_PLL_Strings_Settings_Page()){
                ?>
                <script type="text/javascript">
                    if (typeof(window.<?php echo self::$prefix; ?>admin) == 'object'){
                        window.<?php echo self::$prefix; ?>admin.attr.prefix = '<?php echo self::$prefix; ?>';
                        window.<?php echo self::$prefix; ?>admin.attr.settings['search_plugins_strings'] = <?php echo ($this->Setting_Get('search_plugins_strings', 'bool') ? 'true' : 'false'); ?>;
                        <?php

                            if (
                                defined('POLYLANG_VERSION')
                                && (float)POLYLANG_VERSION < 2.1
                            ){
                                ?>
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_strings'] = '<?php echo admin_url('options-general.php?page=mlang&tab=strings'); ?>';
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_strings_theme_current'] = '<?php echo admin_url('options-general.php?page=mlang&tab=strings&s&group=' . __('Theme', self::$prefix) . ': ' . wp_get_theme()->Name . '&paged=1'); ?>';
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_plugins'] = '<?php echo admin_url('options-general.php?page=mlang&tab=strings&s&group=' . __('Plugins', self::$prefix) . '&paged=1'); ?>';
                                <?php
                            }
                            else{ // for Polylang >= 2.1
                                ?>
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_strings'] = '<?php echo admin_url('admin.php?page=mlang_strings'); ?>';
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_strings_theme_current'] = '<?php echo admin_url('admin.php?page=mlang_strings&s&group=' . __('Theme', self::$prefix) . ': ' . wp_get_theme()->Name . '&paged=1'); ?>';
                                window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_plugins'] = '<?php echo admin_url('admin.php?page=mlang_strings&s&group=' . __('Plugins', self::$prefix) . '&paged=1'); ?>';
                                <?php
                            }

                        ?>
                        window.<?php echo self::$prefix; ?>admin.lng[10] = '<?php _e('Polylang Theme Strings', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[11] = '<?php _e('works', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[12] = '<?php echo self::$plugin_version; ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[20] = '<?php _e('Current theme polylang-strings detected', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[21] = '<?php echo $this->var['theme-strings-count'][$this->Path_Get('theme_dir_name')]; ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[30] = '<?php _e('All themes polylang-strings detected', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[31] = '<?php echo array_sum($this->var['theme-strings-count']); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[35] = '<?php _e('All plugins polylang-strings detected', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[36] = '<?php echo $this->var['plugins-strings-count']; ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[40] = '<?php _e('Plugin web-page', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[50] = '<?php _e('Donation', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[60] = '<?php _e('Please, give plugin feedback', self::$prefix); ?>';

                        jQuery(document).ready(function(){
                            window.<?php echo self::$prefix; ?>admin.init.polylang_info_area();
                        });
                    }
                </script>
                <?php
            }

            if ($this->Is_WP_Plugins_Page()){
                ?>
                <script type="text/javascript">
                    if (typeof(window.<?php echo self::$prefix; ?>admin) == 'object'){
                        window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_strings'] = '<?php

                            if (
                                defined('POLYLANG_VERSION')
                                && (float)POLYLANG_VERSION < 2.1
                            ){
                                echo admin_url('options-general.php?page=mlang&tab=strings');
                            }
                            else{ // for Polylang >= 2.1
                                echo admin_url('admin.php?page=mlang_strings');
                            }

                        ?>';

                        window.<?php echo self::$prefix; ?>admin.attr.urls['polylang_theme_strings_settings'] = '<?php echo admin_url('admin.php?page=' . self::$prefix . 'settings'); ?>';

                        window.<?php echo self::$prefix; ?>admin.lng[70] = '<?php _e('Go to strings translate page', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[71] = '<?php _e('Go to settings page', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[80] = '<?php _e('Required to install and activate the plugin', self::$prefix); ?>';
                        window.<?php echo self::$prefix; ?>admin.lng[81] = '<?php _e('Polylang', self::$prefix); ?>';

                        jQuery(document).ready(function(){
                            window.<?php echo self::$prefix; ?>admin.init.plugins_page();
                        });
                    }
                </script>
                <?php
            }
        }

        public function Admin_Menus_Init(){
            if (is_admin()){
                add_submenu_page(
                    'mlang',
                    __('Settings', self::$prefix) . ' :: ' . __('Polylang Theme Strings', self::$prefix),
                    __('Polylang Theme Strings', self::$prefix),
                    'manage_options',
                    self::$prefix . 'settings',
                    array($this, 'Admin_Page_Settings')
                );
            }
        }

        public function Admin_Page_Settings(){
            $tpl = $this->Path_Get('plugin_templates_path') . 'admin-page-settings.php';
            if (file_exists($tpl)) include_once($tpl);
        }

        public function Str_Filter($t_text, $ut_text, $domain){
            if ($domain != self::$pll_d){
                return __($ut_text, self::$pll_d);
            }
            else{
                return $t_text;
            }
        }

        public function Setting_Get($key, $as = null){
            if (!isset($this->settings[$key])){
                $this->settings[$key] = get_option(self::$prefix . 'settings_' . $key);

                switch (strtolower($as)){
                    case 'bool':
                        $this->settings[$key] = ((int)$this->settings[$key] > 0 ? true : false);
                    break;
                }
            }

            return $this->settings[$key];
        }

        public function Path_Get($key){
            if (isset($this->paths[$key])){
                return $this->paths[$key];
            }
        }

        public function Files_Recursive_Get($dir){
            $files = array();

            if ($h = opendir($dir)){
                while (($item = readdir($h)) !== false){
                    $f = $dir . '/' . $item;

                    if (
                        is_file($f)
                        && filesize($f) <= self::$php_file_size_limit
                    ){
                        $files[] = $f;
                    }
                    else if (
                        is_dir($f)
                        && !preg_match("/^[\.]{1,2}$/uis", $item)
                    ){
                        $files = array_merge($files, $this->Files_Recursive_Get($f));
                    }
                }

                closedir($h);
            }

            return $files;
        }

        public function Files_PLL_Strings_Parse($dir){
            $strings = array();
            $files = $this->Files_Recursive_Get($dir);

            if (is_array($files) && count($files)){
                foreach($files as $v){
                    if (preg_match("/\/.*?\.(php[0-9]?|inc)$/uis", $v)){
                        preg_match_all("/(?:\<\?.*?\?\>)|(?:\<\?.*?[^\?]+[^\>]+)/uis", file_get_contents($v), $p);

                        if (count($p[0])){
                            foreach ($p[0] as $pv){
                                if ($this->Setting_Get('search_native_wp_functions', 'bool')){
                                    $pattern = "/[\s]+(?:pll|)_[_e][\s]*\([\s]*[\'\"](.*?)[\'\"][\s]*[\),]/uis";
                                }
                                else{
                                    $pattern = "/pll_[_e][\s]*\([\s]*[\'\"](.*?)[\'\"][\s]*[\),]/uis";
                                }

                                preg_match_all($pattern, $pv, $m);

                                if (
                                    is_array($m)
                                    && isset($m[1])
                                    && count($m[1])
                                ){
                                    foreach ($m[1] as $mv){
                                        if (!in_array($mv, $strings)){
                                            $strings[] = $mv;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            return $strings;
        }

        public function PLL_Exists_Check(){
            if (
                is_admin()
                && !function_exists(self::$pll_f)
            ){
                add_action('admin_notices', array($this, 'Notice_PLL_Not_Exists'));
            }
        }

        public function Notice_PLL_Not_Exists(){
            ?>
            <div class="notice notice-warning">
                <p>
                    <b><?php printf(__('Base plugin %1$s is not defined', self::$prefix), '&quot;Polylang&quot;'); ?></b>.<br />
                    <?php printf(__('You need install and activate base plugin %1$s for works plugin %2$s', self::$prefix), '<a href="https://wordpress.org/plugins/polylang" target="_blank">Polylang</a>', '<a href="https://wordpress.org/plugins/polylang-theme-strings" target="_blank">Polylang Theme Strings</a>'); ?>.
                </p>
            </div>
            <?php
        }

        public function Is_PLL_Strings_Settings_Page(){
            if (
                is_admin()
                && function_exists(self::$pll_f)
                && isset($_REQUEST['page'])
                && (
                    ($_REQUEST['page'] == 'mlang' && isset($_REQUEST['tab']) && $_REQUEST['tab'] == 'strings')
                    || $_REQUEST['page'] == 'mlang_strings' // for Polylang >= 2.1
                )
            ){
                return true;
            }
        }

        public function Is_WP_Plugins_Page(){
            if (preg_match("/\/plugins.php[^a-z0-9]?/uis", $_SERVER['REQUEST_URI'])){
                return true;
            }
        }

        private function Themes_PLL_Strings_Scan(){
            $themes = wp_get_themes();

            if (count($themes)){
                foreach ($themes as $theme_dir_name => $theme){
                    $data = array(
                        'name'    => $theme->Name,
                        'strings' => array()
                    );

                    $theme_path = $theme->theme_root . '/' . $theme_dir_name;

                    if (file_exists($theme_path)){
                        $data['strings'] = $this->Files_PLL_Strings_Parse($theme_path);
                        update_option(self::$prefix . 'theme_' . $theme_dir_name . '_data', $data);
                    }
                }
            }
        }

        private function Plugins_PLL_Strings_Scan(){
            if (
                $this->Setting_Get('search_plugins_strings', 'bool')
                && defined('WP_PLUGIN_DIR')
                && file_exists(WP_PLUGIN_DIR)
            ){
                $data = array('strings' => $this->Files_PLL_Strings_Parse(WP_PLUGIN_DIR));
                update_option(self::$prefix . 'plugins_data', $data);
            }
        }

        public function Theme_Current_PLL_Strings_Init(){
            $data = get_option(self::$prefix . 'theme_' . $this->Path_Get('theme_dir_name') . '_data');

            if (
                is_array($data)
                && is_array($data['strings'])
                && count($data['strings'])
            ){
                foreach ($data['strings'] as $v){
                    pll_register_string($v, $v, __('Theme', self::$prefix) . ': ' . $data['name']);
                }
            }
        }

        public function Themes_PLL_Strings_Init(){
            $themes = wp_get_themes();

            if (count($themes)){
                foreach ($themes as $theme_dir_name => $theme){
                    $data = get_option(self::$prefix . 'theme_' . $theme_dir_name . '_data');
                    $tsc = &$this->var['theme-strings-count'][$theme_dir_name];
                    $tsc = 0;

                    if (
                        is_array($data)
                        && is_array($data['strings'])
                        && count($data['strings'])
                    ){
                        foreach ($data['strings'] as $v){
                            pll_register_string($v, $v, __('Theme', self::$prefix) . ': ' . $data['name']);
                        }

                        $tsc = count($data['strings']);
                    }
                }
            }
        }

        public function Plugins_PLL_Strings_Init(){
            if ($this->Setting_Get('search_plugins_strings', 'bool')){
                $data = get_option(self::$prefix . 'plugins_data');
                $tsc = &$this->var['plugins-strings-count'];
                $tsc = 0;

                if (
                    is_array($data)
                    && is_array($data['strings'])
                    && count($data['strings'])
                ){
                    foreach ($data['strings'] as $v){
                        pll_register_string($v, $v, __('Plugins', self::$prefix));
                    }

                    $tsc = count($data['strings']);
                }
            }
        }
    }
