<?php 

if ($home) {
    $home_path = "";
    $page_path = "content/";
    } else {
        $home_path = "../../";
        $page_path = "";
    }?>
<div class='banner'>
        <div class='navigation'>
            <ul class='desktop'>
                <a href="<?php echo $home_path; ?>index.php"><li>Home</li></a>
                <!-- <a href='content/pages/about.php'>
                <li>About Jane Meredith</li></a> -->
                <a href="<?php echo $home_path; ?>content/pages/books.php"><li>Books</li></a>
                <a href="<?php echo $home_path; ?>content/pages/about.php"><li>About</li></a>
                <a href="<?php echo $home_path; ?>content/pages/calendar.php"><li>Calendar</li></a>
                <a href="<?php echo $home_path; ?>content/pages/contact.php"><li>Contact</li></a>
                <!-- <a href='local-magic-blog.php'><li>Local Magic Blog</li></a> -->
            </ul>

            <div class='burger'>  <!-- onclick='myMobileMenu(this) -->
                <div class='bar1'></div>
                <div class='bar2'></div>
                <div class='bar3'></div>
            </div>

            <div id='mobileMenu' class='mobileMenu'>                
                <ul>
                <a href="<?php echo $home_path; ?>index.php"><li>Home</li></a>
                <!-- <a href='content/pages/about.php'>
                <li>About Jane Meredith</li></a> -->
                <a href="<?php echo $home_path; ?>content/pages/books.php"><li>Books</li></a>
                <a href="<?php echo $home_path; ?>content/pages/about.php"><li>About</li></a>
                <a href="<?php echo $home_path; ?>content/pages/calendar.php"><li>Calendar</li></a>
                <a href="<?php echo $home_path; ?>content/pages/contact.php"><li>Contact</li></a>
              
                <!-- <a href='local-magic-blog.php'><li>Local Magic Blog</li></a> -->
                </ul>
            </div>
        </div>
       

</div>