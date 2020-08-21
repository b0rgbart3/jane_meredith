<?php if ($home) {
    $home_path = "";
    $page_path = "content/";
    } else {
        $home_path = "../../";
        $page_path = "";
    }?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Author: Jane Meredith</title>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='content/js/external/jquery.visible.min.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>      
<script src='content/js/external/require.js' data-main='content/js/base'></script>
<script src="<?php// echo $home_path;?>content/js/menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='content/js/external/jquery.visible.min.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src='content/js/TweenLite.js'></script>
<script src='content/js/TimelineLite.js'></script>
<script src='content/js/TimelineMax.js'></script>
<script src='content/js/TweenMax.js'></script> -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src ="<?php echo $home_path;?>content/js/external/jquery.visible.min.js"></script>

<!-- <script src='content/js/TweenLite.js'></script>
<script src='content/js/TimelineLite.js'></script>
<script src='content/js/TimelineMax.js'></script>
<script src='content/js/TweenMax.js'></script> -->
<script src="<?php echo $home_path;?>content/js/gsap.min.js"></script>




<?php if ($home) {?>
    <script type="text/javascript" src="<?php echo $home_path;?>content/js/external/require.js" data-main='content/js/base'></script>
<?php }  else { ?>
    <script type="text/javascript" src="<?php echo $home_path;?>content/js/external/require.js" data-main='../../content/js/base'></script>
<?php } ?>


<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">    
<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">    
<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">    

<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash:300,400,700|Kaushan+Script|Montez|Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo:400,700,800|Spartan:400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $home_path;?>content/css/menu.css">
<link rel="stylesheet" href="<?php echo $home_path;?>content/css/main.css">

<link rel="stylesheet" href="<?php echo $home_path;?>content/css/slider.css">
<link rel="stylesheet" href="<?php echo $home_path;?>content/css/desktop.css">
<link rel="stylesheet" href="<?php echo $home_path;?>content/css/ipad.css">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
