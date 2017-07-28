<?php
require_once 'classes/Video.php';
require_once 'classes/config.php';

$video = new Video($config['youtube-api-key']);

ob_clean();

echo ( $video->search($_POST['q'], $_POST['lat'], $_POST['lng'], $_POST['rad'].'m', 'video', $_POST['order'], $_POST['pageToken']));