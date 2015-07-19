<?php
/**
* Plugin Name: Add Plugins From Admin Bar
* Plugin URI: http://rakshithvasudev.com/
* Description: Adds a shortcut to install plugin in the admin bar.
* Version: 1.0 
* Author: Rakshith
* Author URI: Author's website
* License: GPLv2 
*/


add_action('admin_bar_menu', 'add_items');

function add_items($admin_bar)
{

$url = site_url();
$admin_bar->add_menu( array(
    'id'     => 'add-plugin',
    'parent' => 'new-content',
    'title' => 'Plugin',
    'href'  =>  $url."/wp-admin/plugin-install.php",
    'meta'  => array(
      'title' => __('Install a new Plugin'),
    ),
) );
}
?>