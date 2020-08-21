<?php
date_default_timezone_set('America/Los_Angeles');
$under_construction = false;
$live = false;
include_once('../scripts/contact.php');
 ?>
<html>
<head>
<?php $home = false;
include_once "../parts/shared_head.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/contact_style.css">
<script src='../js/contact_form_validation.js'></script>
</head>
<body>
 <?php include_once "../parts/header.php"; ?>

 

<?php if (!$contact_success) {
    ?>
 
 <div class='contactContainer'>
<form class='contactForm' method='post' action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" id="contactForm">
<p class='contactHeadline'>Contact Jane Meredith:</p>  
<br>
       
    <div class='inputs'>
    <label name='firstname'>First Name</label>
    <input type='text' name='firstname' id='firstname' class='namefield' >
    <p class='notify'></p>

    <br clear='all'>
    <label name='lastname'>Last Name</label>
    <input type='text' name='lastname' id='lastname' class='namefield'>
    <p class='notify'></p>

    <br clear='all'>
    <label name='email'>Email</label>
    <input type='text' name='email' id='email'>
    <p class='notify'></p>
   
    <br clear='all'>
    <label name='message'>Message</label>
    <textarea name='message' id='message' cols='60' rows='6'></textarea>
    <p class='notify'></p>
    <br clear='all'>
    <input type='submit' name='submit' value='send' id='send' class='send'>
</div>
</form></div>
<?php } 
$contact_success = false;
?>




    <?php include_once "../parts/shared_footer.html"; ?>
        </div>  <!-- End of Content Div-->
    </body>
</html>

 