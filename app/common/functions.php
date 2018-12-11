<?php

  if (!defined('ABSPATH')) {
        exit;
  }


  if (!function_exists('support_trans_debug')) {

        /**
         * This function is use for debugging purpose. Get the string or array or object and print for debugging purpose.
         * @param string $value Any value of any type, You can pass array as well
         * @param bool   $print If false, value will return else echo. DEFAULT: true
         * @param bool	$exit If true, system will exit. Default: false.
         *
         * @return string return var_export string OR echo if $print is true or exit if $exit is true
         */
        function support_trans_debug($value = '', $print = true, $exit = false) {

              $html = '<tt><pre>' . print_r($value, true) . '</pre></tt>';

              if ($print)
                    echo $html;
              else
                    return $html;


              if ($exit)
                    wp_die('Exiting from ' . __FUNCTION__);


              return ''; // House Keeping
        }

  }

  if (!function_exists('support_trans_support_package_get_redux_value')) {

        /**
         * This function check if value is found in ReduxFramework settings object against a particular key.
         * @param string       $key ReduxFramework input field id.
         * @param string       $value ReduxFramework value (in case of checkboxes)
         * @param string $default_time_zone Pass the default time zone if you are debugging. By default ASIA/KARACHI
         * @param bool   $dubugging Do you want to debug the value? If true, system will print value and exit.
         *
         * @return bool Return true if value is found against key, False otherwise.
         */
        function support_trans_support_package_get_redux_value($key, $default_time_zone = "ASIA/KARACHI", $dubugging = false) {
              global $support_trans_support_package_support;


              date_default_timezone_set($default_time_zone);

              if ($dubugging)
                    support_trans_debug($support_trans_support_package_support, true, true);

              /*
               * if key exist and value found then return the value. [May be an array in case of Radio buttons]
               * */

              if (array_key_exists($key, $support_trans_support_package_support) && !empty($support_trans_support_package_support[$key]))
                    return $support_trans_support_package_support[$key];

              return false;
        }

  }

  function support_menu() {
        wp_enqueue_style('support_menu_bootstrap', 'https://bootswatch.com/4/flatly/bootstrap.min.css');
  }

  add_action('admin_enqueue_scripts', 'support_menu');
