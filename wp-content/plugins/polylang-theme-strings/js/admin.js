window.mw_polylang_strings_admin = function(){
    var _this = {
        attr: {
            prefix: '',
            settings: [],
            urls: []
        },

        lng: [],

        init: {
            polylang_info_area: function(){
                var form = jQuery('#string-translation');
                var id = '#' + _this.attr.prefix + 'polylang_info_area';

                if (form.length)
                {
                    jQuery(id, form).remove();

                    var area = jQuery('<div>');
                        area.attr({id: id.replace('#', '')});

                    form.prepend(area);
                    area = jQuery(id, form);

                    var html  = '<span class="caption">&laquo;<b>' + _this.lng[10] + '</b>&raquo; ' + _this.lng[11] + ' [v.<b>' + _this.lng[12] + '</b>].</span>';
                        html += '<span>' + _this.lng[20] + ': <i><a href="' + _this.attr.urls['polylang_strings_theme_current'] + '">' + _this.lng[21] + '</a></i></span>';
                        html += '<span>' + _this.lng[30] + ': <i><a href="' + _this.attr.urls['polylang_strings'] + '">' + _this.lng[31] + '</a></i></span>';

                        if (_this.attr.settings['search_plugins_strings']){
                            html += '<span>' + _this.lng[35] + ': <i><a href="' + _this.attr.urls['polylang_plugins'] + '">' + _this.lng[36] + '</a></i></span>';
                        }

                        html += '<span class="links">';
                        html += '<a href="https://modeewine.com/en-polylang-theme-strings" target="_blank">' + _this.lng[40] + '</a>';
                        html += '<a href="https://modeewine.com/en-donation" target="_blank">' + _this.lng[50] + '</a>';
                        html += '<a href="https://wordpress.org/support/view/plugin-reviews/polylang-theme-strings#new-post" target="_blank">' + _this.lng[60] + '</a>';
                        html += '</span>';

                    area.html(html);
                }
            },

            plugins_page: function(){
                var slug = 'polylang-theme-strings';
                var pll_slug = 'polylang';

                var tr = jQuery('' +
                    '#' + slug + '.active' + // For WP < 4.5
                    ', ' +
                    '[data-slug="' + slug + '"].active' + // For WP >= 4.5
                '');

                var pll_tr = jQuery('' +
                    '#' + pll_slug + '.active' + // For WP < 4.5
                    ', ' +
                    '[data-slug="' + pll_slug + '"].active' + // For WP >= 4.5
                '');

                if (tr.length && pll_tr.length)
                {
                    jQuery('<div class="link-pll-strings"><a href="' + _this.attr.urls['polylang_theme_strings_settings'] + '">' + _this.lng[71] + '</a></div>').insertAfter(jQuery('.plugin-description', tr));
                    jQuery('<div class="link-pll-strings"><a href="' + _this.attr.urls['polylang_strings'] + '">' + _this.lng[70] + '</a></div>').insertAfter(jQuery('.plugin-description', tr));
                }
                else
                if (tr.length && !pll_tr.length){
                    jQuery('<div class="link-pll-strings warning">' + _this.lng[80] + ' &laquo;<a href="https://wordpress.org/plugins/polylang" target="_blank">' + _this.lng[81] + '</a>&raquo;</div>').insertAfter(jQuery('.plugin-description', tr));
                }
            }
        }
    }

    return _this;
}();
