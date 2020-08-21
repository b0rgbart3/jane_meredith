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
 <a href="<?php echo $home_path; ?>index.php">
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
 <div class='fakeSpacer'></div>
<div class='content'>
<p class='firstBio'>
Jane Meredith is a writer and teacher who lives in Australia and works internationally.
</p>
 
<p class='firstBio'>
Her books include the best selling <span class='book'>Journey to the Dark Goddess</span>, <span class='book'>Aspecting the Goddess</span>, <span class='book'>Circle of Eight</span>, and <span class='book'>Elements of Magic</span>. Jane's books invite the reader into a world of magic, personal empowerment, and intimate relating with the divine. Experiential and hands-on, they include rituals, processes, and spells, as well as vivid explorations of the topic, and Jane's firsthand experiences and journeys with the material.
</p>
 
<p class='firstBio'>
As a teacher Jane is known for her innovative and powerful work in myth, ritual, and the evocation of the divine. Her teaching encourages each person to explore the material for themselves, within a strongly held container of safety, curiosity, empowerment, and reverence for the sacred. She offers <a href="calendar.php" target="_blank">workshops and courses</a> in Goddess work, the Reclaiming tradition, myth, ritual, the Kabbalah, and Tarot, many of them online.
</p>
 
<p class='firstBio'>
Jane is also a Tarot reader and a <a href="content/pages/marriage_celebrancy.php" target="_blank">Marriage Celebrant</a> in Australia.
</p>

<p>
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

 