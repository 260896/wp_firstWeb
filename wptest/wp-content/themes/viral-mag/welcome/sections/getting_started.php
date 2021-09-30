<div class="welcome-getting-started">
    <div class="welcome-manual-setup">
        <h3><?php echo esc_html__('Manual Setup', 'viral-mag'); ?></h3>
        <ol>
            <li><?php printf(esc_html__('Install and activate "Elementor" and "Hash Elements" plugin from %s.', 'viral-mag'), '<a href="' . admin_url('admin.php?page=viral-mag-welcome&section=recommended_plugins') . '" target="_blank">' . esc_html__('Recommended Plugin page', 'viral-mag') . '</a>'); ?></li><br/>
            <li><?php echo esc_html__('Create a new page with Page Template as "Elementor Full Width" in the right sidebar and save it.', 'viral-mag'); ?></li><br/>
            <li><?php echo esc_html__('Now edit the page with Elementor. Drag and drop the news elements in the Elementor to create your own design.', 'viral-mag'); ?></li><br/>
            <li><?php echo esc_html__('Now go to Appearance > Customize > Homepage Settings and choose "A static page" for "Your latest posts" and select the created page for "Home Page" option.', 'viral-mag'); ?> </li><br/>
            <li><?php echo esc_html__('Go to Appearance > Customzer to customizer the header, footer and various theme settings.', 'viral-mag'); ?> </li><br/>
        </ol>
        <p style="margin-bottom: 0"><?php printf(esc_html__('For detailed documentation, please visit %s.', 'viral-mag'), '<a href="https://hashthemes.com/documentation/viral-mag-documentation/#HomePageSetup" target="_blank">' . esc_html__('Documentation Page', 'viral-mag') . '</a>'); ?></p>
    </div>

    <div class="welcome-demo-import">
        <h3><?php echo esc_html__('Demo Importer', 'viral-mag'); ?><a href="https://demo.hashthemes.com/<?php echo get_option('stylesheet'); ?>/news" target="_blank" class="button button-primary"><?php esc_html_e('View Demo', 'viral-mag'); ?></a></h3>
        <div class="welcome-theme-thumb">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>" alt="<?php printf(esc_attr__('%s Demo', 'viral-mag'), $this->theme_name); ?>">
        </div>

        <div class="welcome-demo-import-text">
            <p><?php esc_html_e('Or you can get started by importing the demo with just one click.', 'viral-mag'); ?></p>
            <p><?php echo sprintf(esc_html__('Click on the button below to install and activate the HashThemes Demo Importer plugin. For more detailed documentation on how the demo importer works, click %s.', 'viral-mag'), '<a href="https://hashthemes.com/documentation/viral-mag-documentation/#ImportDemoContent" target="_blank">' . esc_html__('here', 'viral-mag') . '</a>'); ?></p>
            <?php echo $this->generate_hdi_install_button(); ?>
        </div>
    </div>
</div>