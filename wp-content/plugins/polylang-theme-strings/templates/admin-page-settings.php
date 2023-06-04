<div class="wrap">
    <h1><?php _e('Settings'); ?> :: <?php _e('Polylang Theme Strings'); ?></h1>
</div>
<div id="<?php echo self::$prefix; ?>_settings">
    <form action="" method="post">
        <input type="hidden" name="_handler" value="<?php echo self::$prefix; ?>" />
        <input type="hidden" name="_action" value="settings" />
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Searching strings-translations', self::$prefix); ?></th>
                    <td>
                        <fieldset>
                            <?php $k = 'search_native_wp_functions'; ?>
                            <label for="<?php echo $k; ?>">
                                <input name="<?php echo self::$prefix; ?>[<?php echo $k; ?>]" type="checkbox" id="<?php echo $k; ?>" value="1" <?php echo ((int)get_option(self::$prefix . 'settings_' . $k) ? 'checked="checked"' : ''); ?> />
                                <?php _e('Include the search for native string functions of WordPress', self::$prefix); ?>
                            </label>
                            <p class="description">
                                <?php _e('For example', self::$prefix); ?>:
                                &laquo;<a href="https://developer.wordpress.org/reference/functions/__" target="_blank" style="text-decoration: none;">__(...)</a>&raquo;
                                <?php _e('or', self::$prefix); ?>
                                &laquo;<a href="https://developer.wordpress.org/reference/functions/_e/" target="_blank" style="text-decoration: none;">_e(...)</a>&raquo;
                            </p>
                            <br />
                            <?php $k = 'search_plugins_strings'; ?>
                            <label for="<?php echo $k; ?>">
                                <input name="<?php echo self::$prefix; ?>[<?php echo $k; ?>]" type="checkbox" id="<?php echo $k; ?>" value="1" <?php echo ((int)get_option(self::$prefix . 'settings_' . $k) ? 'checked="checked"' : ''); ?> />
                                <?php _e('Include the search for plugins of WordPress', self::$prefix); ?>
                            </label>
                            <p class="description">
                                <?php _e('It may be required additional system resources', self::$prefix); ?>
                            </p>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="settings[submit]" class="button button-primary" value="<?php _e('Apply'); ?>" />
        </p>
    </form>
</div>
