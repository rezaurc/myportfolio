<?php
/*
Plugin Name: work-mport
Plugin URI: 
Description: A very simple startup Plugin
Version: 0.0.1
Author: Rezaur Chowdhury
Author URI: http://www.rezaur.com
License: GPLv2
*/
function linkbeans($text) {
    $help = "<a href='http://www.netbeans.org'>NetBeans</a>";
    return str_replace('NetBeans', $help, $text);
}

add_filter('the_content',  'linkbeans');

