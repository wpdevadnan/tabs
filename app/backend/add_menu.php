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

              private $options_general;
              private $options_social;
              private $options_footer;

              public function addMyAdminMenu() {

                    add_menu_page(
                        'Support_Title', 'Support_Menu', 'read', 'support_slug', array(
                          $this,
                          'admin_menu_callback'
                        ), 'to/icon/file.svg', '2'
                    );
              }

              public function admin_menu_callback() {


                    $social_Screen = ( isset($_GET['action']) && 'social' == $_GET['action'] ) ? true : false;
                    $footer_Screen = ( isset($_GET['action']) && 'footer' == $_GET['action'] ) ? true : false;
                    ?>
                    <div class="wrap">
                        <h1>Support Settings</h1>
                        <h2 class="nav-tab-wrapper">
                            <a href="<?php echo admin_url('admin.php?page=support_slug'); ?>" class="nav-tab<?php if (!isset($_GET['action']) || isset($_GET['action']) && 'social' != $_GET['action'] && 'footer' != $_GET['action']) echo ' nav-tab-active'; ?>"><?php esc_html_e('General'); ?></a>
                            <a href="<?php echo esc_url(add_query_arg(array('action' => 'social'), admin_url('admin.php?page=support_slug'))); ?>" class="nav-tab<?php if ($social_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Social'); ?></a>
                            <a href="<?php echo esc_url(add_query_arg(array('action' => 'footer'), admin_url('admin.php?page=support_slug'))); ?>" class="nav-tab<?php if ($footer_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Footer'); ?></a>
                        </h2>

                        <?php
                        $url = admin_url('admin.php?page=support_slug&action=social');
                        if ($social_Screen) {
                              $html = '<form method="post" action="' . $url . '">';
                              $html .= "<label>Name</label>";
                              $html .= '<input name="name_id" type="text">';

                              $html .= "<label>Email</label>";
                              $html .= '<input name="email_id" type="text">';

                              $html .= "<label>Skype</label>";
                              $html .= '<input name="skype_id" type="text">';
                              $html .='<p class="submit"><input type="submit" name="submit_social" id="submit" class="button button-primary" value="SEND Request"></p><form>';
                              echo $html;
                              if ($_POST['submit_social']) {
                                    print_r("working");
                                    $to = 'sendto@example.com';
                                    $subject = 'The subject';
                                    $body = 'The email body content';
                                    $headers = array('Content-Type: text/html; charset=UTF-8');

                                    wp_mail($to, $subject, $body, $headers);
                              }
                        } elseif ($footer_Screen) {
                              $html = "<label>Footer Name</label>";
                              $html .= '<input name="ft_name_id" type="text">';

                              $html .= "<label>Footer Email</label>";
                              $html .= '<input name="ft_email_id" type="text">';

                              $html .= "<label>Footer Skype</label>";
                              $html .= '<input name="ft_skype_id" type="text">';
                              echo $html;
                              submit_button();
                        } else {

                              submit_button();
                        }
                        ?>
                    </form>
                    </div>
                    <?php
              }

        }

  }



  // Call the class and add the menus automatically.
  //$MyMenuSetterUpper = MyMenuSetterUpper::instance();

