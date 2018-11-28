<?php

  namespace app\common;

if (!defined('ABSPATH'))
        exit;

  //@todo: update class and file name.
  if (!class_exists('support_trans_Support_Init')) {

        class support_trans_Support_Init {

              private static $pluginpath;
              //@todo: change this plugin path
              private static $support_support_trans;

              public function __construct() {
                    // DO NOT DELETE THESE
                    add_action('init', [$this, 'constants'], 5);
                    add_action('init', [$this, 'inc_debug_abstract_class'], 5);
                    add_action('init', [$this, 'inc_traits'], 5);

                    // insert other classes here using init hook
                    // add_action('admin_menu', [$this, 'add_menu_page_for_options']);

                    add_action('admin_menu', [$this, 'menu_class']);
              }

              public function menu_class() {
                    $testObject = new \app\backend\add_Menu_btn();
                    return $testObject->addMyAdminMenu();
              }

              public function add_menu_page_for_options() {
                    //add_menu_page(__('support', 'support_trans'), 'support_trans_support', 'manage_options', 'support_trans_support', [$this, 'add_menu_page_for_options_callback']);
              }

              public function add_menu_page_for_options_callback() {
                    //@todo: Write some html here to print on the page.
              }

              /*
               * @todo: Update plugin name in all below strings "__PLUGIN_NAME__"
               *
               * @todo: search all entries that have "__PLUGIN_NAME__" - Update according to your plugin name.
               *
               *
               * */

              public function constants() {
                    define('support_trans_support_package_PLUGIN_FILE_PATH', self::getPluginpath());

                    define('support_trans_support_package_PLUGIN_PATH', dirname(self::getPluginpath()));
                    define('support_trans_support_package_PLUGIN_URL', plugins_url('', self::getPluginpath()));

                    define('support_trans_support_package_FRONTEND_PATH', support_trans_support_package_PLUGIN_FILE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'frontend');
                    define('support_trans_support_package_FRONTEND_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'app/frontend');

                    define('support_trans_support_package_BACKEND_PATH', support_trans_support_package_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'backend');
                    define('support_trans_support_package_BACKEND_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'app/backend');

                    define('support_trans_support_package_DEBUGGING_PATH', support_trans_support_package_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'debugging');
                    define('support_trans_support_package_DEBUGGING_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'debugging');

                    define('support_trans_support_package_ABSTRACT_PATH', support_trans_support_package_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'abstracts');
                    define('support_trans_support_package_ABSTRACT_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'app/abstracts');

                    define('support_trans_support_package_TRAITS_PATH', support_trans_support_package_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'traits');
                    define('support_trans_support_package_TRAITS_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'app/traits');


                    //define('support_trans_support_package_BACKEND_MENU', support_trans_support_package_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'backend');
                    //define('support_trans_support_package_BACKEND_MENU_URL', trailingslashit(support_trans_support_package_PLUGIN_URL) . 'app/backend');


                    define('support_trans_support_package_VERSION', '1.0.0');
                    define('support_trans_support_package_MIN_PHP_VER', '5.6');
                    define('support_trans_support_package_TEXT_DOMAIN', 'support_trans');
              }

              public function inc_debug_abstract_class() {
                    if (file_exists(support_trans_support_package_ABSTRACT_PATH . DIRECTORY_SEPARATOR . 'support_trans_Exception_Handler.php'))
                          require_once support_trans_support_package_ABSTRACT_PATH . DIRECTORY_SEPARATOR . 'support_trans_Exception_Handler.php';
              }

              public function inc_traits() {
                    if (file_exists(support_trans_support_package_TRAITS_PATH . DIRECTORY_SEPARATOR . 'support_trans_Queries.php'))
                          require_once support_trans_support_package_TRAITS_PATH . DIRECTORY_SEPARATOR . 'support_trans_Queries.php';
              }

              public function inc_custom_class() {
                    if (file_exists(support_trans_support_package_BACKEND_MENU . DIRECTORY_SEPARATOR . 'add_menu.php'))
                          require_once support_trans_support_package_BACKEND_MENU . DIRECTORY_SEPARATOR . 'add_menu.php';
              }

              public static function plugin_activated() {
                    /*
                     * DO NOT DELETE BELOW CHECKS.
                     *
                     * */

                    if (version_compare(get_bloginfo('version'), '4.6', '<')) {
                          $message = "Sorry! Impossible to activate plugin. <br />";
                          $message .= "This Plugin requires at least WP Version 4.6";
                          die($message);
                    }

                    if (version_compare(PHP_VERSION, support_trans_support_package_MIN_PHP_VER, '<')) {
                          $message = "Sorry! Impossible to activate plugin. <br />";
                          $message .= "This Plugin requires minimum PHP Version '" . support_trans_support_package_MIN_PHP_VER . "'";
                          die($message);
                    }





                    /*
                     * DO WHAT YOU WANT ON PLUGIN ACTIVATION.
                     *
                     * */
              }

              public static function plugin_deactivated() {

                    /*
                     * DO WHAT YOU WANT ON PLUGIN DEACTIVATION.
                     *
                     * */
              }

              public static function app($filepath) { //reciveing this from main file ($filepath = __file__
                    register_activation_hook($filepath, [support_trans_Support_Init::class, 'plugin_activated']);
                    register_deactivation_hook($filepath, [support_trans_Support_Init::class, 'plugin_deactivated']);

                    //@todo: change $trs_plugin_name variable name
                    self::$support_support_trans = new self;
                    self::$support_support_trans->setPluginpath($filepath); // Posting this value to funtion in same file


                    return self::$support_support_trans;
              }

              /* ---------------------------- Setters and Getters ------------------------------------------------------ */

              /**
               * @return mixed
               */
              public static function getPluginpath() {
                    return self::$pluginpath;
              }

              /**
               * @param mixed $pluginpath
               */
              protected static function setPluginpath($pluginpath) {
                    self::$pluginpath = $pluginpath; // basically the first __File__ sent form main file
              }

        }

  }