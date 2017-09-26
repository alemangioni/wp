<div class="wrap wpms_wrap">
    <?php
    $custom_post_types = get_post_types(array('public' => true, 'exclude_from_search' => false ,'_builtin' => false));
    require_once( WPMETASEO_PLUGIN_DIR . 'inc/pages/sitemaps/sitemap_menus.php' );
    ?>
    <form method="post" id="wpms_xmap_form" action="">
        <input type="hidden" name="action" value="wpms_save_sitemap_settings">
        <?php
        echo '<div class="wpms_source wpms_source_sitemaps">';
        do_settings_sections('metaseo_settings_sitemap');
        echo '</div>';
        require_once( WPMETASEO_PLUGIN_DIR . 'inc/pages/sitemaps/metaseo-source_menu.php' );
        require_once( WPMETASEO_PLUGIN_DIR . 'inc/pages/sitemaps/metaseo-source_posts.php' );
        require_once( WPMETASEO_PLUGIN_DIR . 'inc/pages/sitemaps/metaseo-source_pages.php' );
        if(is_plugin_active(WPMSEO_ADDON_FILENAME)) {
            if (!empty($custom_post_types)) {
                foreach ($custom_post_types as $post_type => $label) {
                    ob_start();
                    require(WPMETASEO_PLUGIN_DIR . 'inc/pages/sitemaps/metaseo-source_posts_custom.php');
                    $html = ob_get_contents();
                    ob_end_clean();
                    echo $html;
                }
            }
        }
        echo '<div class="div_wpms_save_sitemaps"><input type="button" class="button button-primary wpms_save_create_sitemaps" value="' . __('Regenerate and save sitemaps', 'wp-meta-seo') . '"><span class="spinner spinner_save_sitemaps"></span></div>';
        if(is_plugin_active(WPMSEO_ADDON_FILENAME)){
            echo '<p class="description">'.__("Sitemap automatic submission to Google Search Console on save, ","wp-meta-seo").'<a href="'.admin_url('admin.php?page=metaseo_console&tab=settings').'">'.__("requires authentication","wp-meta-seo").'</a></p>';
        }
        ?>
    </form>
</div>