<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
require_once(dirname(__FILE__).DS.'helper.php');
$path_to_ck_js = $params->get('path_to_ck_js');
$path_to_video = $params->get('path_to_video');
$video_width = $params->get('video_width');
$video_height = $params->get('video_height');
$video_auto_play = $params->get('video_autoplay');
require(JModuleHelper::getLayoutPath('mod_ck_player'));