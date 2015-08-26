<?php

define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/facebook-php-sdk-v4-5.0-dev/src/Facebook/');
require FACEBOOK_SDK_V4_SRC_DIR.'autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

$fb = new Facebook\Facebook([
  'app_id' => '892508447483547',
  'app_secret' => '66b69f812061bca7ac948f1b418d8543',
  'default_graph_version' => 'v2.4',
  ]);

session_start();

$helper = $fb->getRedirectLoginHelper();
$permissions = ['user_photos', 'publish_actions'];
$loginUrl = $helper->getLoginUrl('http://uecpasaymissionmonth.orgfree.com/profpic.php', $permissions);
header('Location: '.$loginUrl);

?>