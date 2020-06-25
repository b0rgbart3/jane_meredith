<?php ?>
<html>
<head>
<?php $home = true;
include_once "content/parts/shared_head.php"; ?>
</head>
<body>
 <?php 
include_once "content/parts/menu.php";
  ?>

 <div class='mainpicContainer group'>
 <a href="<?php echo $home_path; ?>index.php"><p class="logo">
         Jane Meredith</p>
         <p class="logo2">
         Jane Meredith</p>
         <p class="logo3">
         Jane Meredith</p>
         <p class='logosub'>Author</p>
         </a>
         
    

 <!-- <p class='intro'>This is a short introductory sentence or two. This is a short introductory sentence or two.</p> -->
 </div>
 
 <a href='content/pages/books.php'>
<div class='booklink'>
      > See the latest titles Authored by Jane Meredith
      <?php 
       // include_once "content/parts/mobile_books.php";
      ?>
</div></a>
<?php 
// include_once "content/parts/books.php";
 ?>
 <br>
<div class='content'>
<p class='firstBio'>
Jane Meredith is a writer and teacher. Her book <span class='book'>Journey to the Dark Goddess</span> is a best seller. She writes books of contemporary Paganism, magic and Goddess spirituality.  As a teacher she is known for her innovative and powerful work in myth, ritual and the evocation of the divine. Jane lives in Australia and works internationally.
</p>

<br clear='all'>
<p>
<a href='content/pages/contact.php' class='specialLink'>Join Mailing List</a>
</p>


<!-- <p>
Read Jane's online blog on Local Magic</p> -->
<?php
include_once "content/parts/slider.html"; 
?>

<?php 
include_once "content/parts/shared_footer.html";
 ?>
        </div>  <!-- End of Content Div-->

   

    </body>
</html>

 