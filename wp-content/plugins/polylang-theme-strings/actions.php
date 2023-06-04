<?php

    switch ($_REQUEST['_action']){
        case 'settings':
            $d = &$_REQUEST[self::$prefix];
            $k = 'search_native_wp_functions'; update_option(self::$prefix . $_REQUEST['_action'] . '_' . $k, (isset($d[$k]) && (int)$d[$k] ? 1 : 0));
            $k = 'search_plugins_strings'; update_option(self::$prefix . $_REQUEST['_action'] . '_' . $k, (isset($d[$k]) && (int)$d[$k] ? 1 : 0));

            wp_redirect(admin_url('admin.php?page=' . self::$prefix . 'settings'));
        break;
    }
