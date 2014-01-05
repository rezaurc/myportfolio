<?php
/*
Plugin Name: work-mport
Plugin URI: 
Description: 
Version: 0.0.1
Author: Rezaur Chowdhury
Author URI: http://www.rezaur.com
License: GPLv2
*/
function linkNetBeans($text) {
    $help = "<a href='http://www.netbeans.org'>NetBeans</a>";
    return str_replace('NetBeans', $help, $text);
}

add_filter('the_content', linkNetBeans);

