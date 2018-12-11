<?php
  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  namespace app\backend;

if (!defined('ABSPATH'))
        exit;

  if (!class_exists('add_Menu_btn')) {

        class add_Menu_btn {

              public function addMyAdminMenu() {

                    add_menu_page(
                        'Support_Title', 'Support_Menu', 'read', 'support_slug', array(
                          $this,
                          'admin_menu_callback'
                        ), '', '2'
                    );
              }

              public function admin_menu_callback() {
                    ?>
                    <div class="wrap">
                        <h1>Support Settings</h1>

                        <?php
                        include_once 'includes/htmls/genral.php';


                        if ($_POST['submit_social']) {


                              $to = 'sendto@example.com';
                              $subject = 'The subject';
                              $body = 'The email body content ' . home_url();
                              $headers = array('Content-Type: text/html; charset=UTF-8');

                              $mailsent = wp_mail($to, $subject, $body, $headers);

                              if ($mailsent) {

                              }
                        }
                        ?>
                    </form>
                    </div>
                    <?php
              }

        }

  }

