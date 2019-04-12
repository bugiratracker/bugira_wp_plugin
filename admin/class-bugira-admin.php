<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.bugira.com
 * @since      1.0.0
 *
 * @package    Bugira
 * @subpackage Bugira/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bugira
 * @subpackage Bugira/admin
 * @author     Mikhail Kozlov <mkozlov@bugira.com>
 */
class Bugira_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of this plugin.
     * @param      string $version     The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    public function plugin_admin_init()
    {
        register_setting('plugin_options', $this->plugin_name . '_api_key', [$this, 'plugin_options_validate']);

        add_settings_field($this->plugin_name . '_api_key', 'Api Key', [$this, 'plugin_setting_string'],
            $this->plugin_name, 'plugin_main');

        add_settings_section('plugin_main', ucfirst($this->plugin_name) . ' Widget Settings',
            [$this, 'plugin_section_text'], $this->plugin_name);
    }

    function plugin_admin_add_page()
    {
        add_options_page(ucfirst($this->plugin_name), ucfirst($this->plugin_name), 'manage_options', $this->plugin_name,
            [$this, 'plugin_options_page']);
    }


    public function plugin_options_page()
    {
        echo '<form action="options.php" method="post">';
        echo settings_fields('plugin_options');
        echo do_settings_sections($this->plugin_name) . submit_button();
        echo '</form>';
    }


    public function plugin_setting_string()
    {

        echo '<input id="' . $this->plugin_name . '_api_key" name="' . $this->plugin_name . '_api_key" size="40" type="text" value="' . get_option($this->plugin_name . '_api_key') . '" />';
    }


    public function plugin_section_text()
    {

        echo '<p>In order to enable feadback widget, you need to provide API key. If you do not have a key, please register @ <a href="https://www.bugira.com/" target="_blank">www.bugira.com</a> to get a key.</p>';
    }

    public function plugin_options_validate($input)
    {

        return $input;
    }


    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Bugira_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Bugira_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/bugira-admin.css', [], $this->version,
            'all');

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Bugira_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Bugira_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/bugira-admin.js', ['jquery'],
            $this->version, false);

    }

}
