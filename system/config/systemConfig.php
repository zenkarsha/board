<?php

$config = array
(
  'site' => array(
    'parent' => '../../',
    'path' => 'http://'.$_SERVER['HTTP_HOST'].str_replace('index.php','',$_SERVER['PHP_SELF']),
    'url' => 'https://board.unlink.men/',
    'name'  => '匾額產生器',
    'title' => '匾額產生器',
    'description' => '別再打自己臉了，來，朕送你一塊匾！',
    'copyright' => 'just for fun',
    'shortcut-icon' => 'https://board.unlink.men/images/favicon.png',
    'apple-touch-icon' => ''
  ),
  'setting' => array(
    'enable-database' => false,
    'enable-navbar-search' => false,
    'enable-member-system' => false
  ),
  'member' => array(
    'default-page' => 'member'
  ),
  'database' => array(
    'host'  => 'localhost',
    'user'  => 'root',
    'pass'  => 'root',
    'db'  => ''
  ),
  'admin' => array(
    '000000000000000'
  ),
  'google' => array(
    'analytics-id'  => 'UA-00000000-0'
  ),
  'facebook' => array(
    'fanpage' => '',
    'app-id' => '',
    'app-secret' => '',
    'privacy-policy' => ''
  ),
  'og' => array(
    'title' => '匾額產生器',
    'type'  => 'website',
    'url' => 'https://board.unlink.men/',
    'image' => 'https://board.unlink.men/images/fb.png',
    'sitename'  => '匾額產生器',
    'description' => '別再打自己臉了，來，朕送你一塊匾！'
  )
);

?>
