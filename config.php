<?php

$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":true,"theme":"light"}';

$auth_users = array(
  'admin' => password_hash('admin_password', PASSWORD_DEFAULT),
  'user' => password_hash('user_password', PASSWORD_DEFAULT),
);

$readonly_users = array();

// Application Hosted Root Path
$app_root = dirname($_SERVER['PHP_SELF']); // value => '/files'

// File Content Root Path
$content_root = 'root';

$directories_users = array(
  'user' => $content_root . DIRECTORY_SEPARATOR . 'user_directory',
  // 'user' => 'user_directory',
);


// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
// $root_path = $_SERVER['DOCUMENT_ROOT'];
$root_path = $content_root;

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
// $root_url = '';
$root_url = $app_root . DIRECTORY_SEPARATOR . $content_root;

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
// $path_display_mode = 'full';
$path_display_mode = 'relative';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
// $exclude_items = array();
$exclude_items = array('.htaccess', '.htpasswd');
