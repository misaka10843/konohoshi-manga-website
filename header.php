
<?php

if(!defined('misaka')) {

    exit("access denied");
    }


$link = 'http://'.$_SERVER['SERVER_NAME'];

$data = file_get_contents($link.'/settings.json'); 

$arr = json_decode($data,true);

$title =  $arr['title'];
$icon = $arr['icon'];
$loginimg = $arr['loginimg'];
$registerimg = $arr['registerimg'];
?>

<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo $icon ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix@2.7.0/dist/notiflix-2.7.0.min.css">
<link rel="stylesheet" href="/css/nav.css">

<script src="https://cdn.jsdelivr.net/npm/notiflix@2.7.0/dist/notiflix-2.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>