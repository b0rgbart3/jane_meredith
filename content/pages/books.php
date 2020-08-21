<?php
//date_default_timezone_set('America/Los_Angeles');
$under_construction = false;
$live = false;
//include_once('../scripts/contact.php');
 ?>
<html>
<head>
<?php $home = false;
include_once "../parts/shared_head.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/contact_style.css">
<link rel="stylesheet" type="text/css" href="../css/book_style.css">
<style>
    .calendarDiv {
       
        /* border:1px solid rgb(104, 12, 104);
        margin:10px;
        border-radius:8px; */
    }
    .calendarDiv h1 {
        font-family: 'Spartan', Arial, Helvetica, sans-serif;
        font-family: 'Nanum Myeongjo', Arial, Helvetica, sans-serif ;
        border-bottom:1px solid rgb(104,12,104);
        letter-spacing:-.01em;
        padding-top:30px;
    }
    .calendarDiv h2 {
        text-transform:uppercase;
        opacity:.5;
    }
    </style>
</head>
<body>
 <?php include_once "../parts/menu.php"; ?>
<?php

 include_once "../parts/books.php";
 ?>

    <?php include_once "../parts/shared_footer.html"; ?>
        </div>  <!-- End of Content Div-->
    </body>
</html>

 