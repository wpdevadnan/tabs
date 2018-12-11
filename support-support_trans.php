<?php

  if (!defined('ABSPATH')) {
        exit;
  }

  /**
   * support
   *
   * @package     support_package
   * @author      AAA
   * @copyright   2018 © AAA - All rights are reserved.
   * @license     GPL-3.0+
   *
   * @wordpress-plugin
   * Plugin Name: support
   * Plugin URI:  #
   * Description:
   * Version:     1.0.0
   * Author:      AAA
   * Author URI:  #
   * Text Domain: support_trans
   * License:     GPL-3.0+
   * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
   */
  use app\common\support_trans_Support_Init;

//@todo: change this global variable name
  global $support_support_trans;

  if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')) {
        require_once 'vendor/autoload.php';
  }




  //@todo: change variable name
  $support_support_trans = support_trans_Support_Init::app(__FILE__);
