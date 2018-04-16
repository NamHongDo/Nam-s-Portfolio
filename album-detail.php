<?php
define ("TITLE", "Album Details | Nam's Portfolio");
include('includes/header.php');
 function strip_bad_chars($input){
   $output=preg_replace("/[^a-zA-Z0-9_-]/","",$input);
   return $output;
 }
 if(isset($_GET['item'])){
   $albumKey=strip_bad_chars($_GET['item']);
   $albumDetail=$albumsDetails[$albumKey];
 }
?>
<main>

    <?php
      echo "<h1>$albumDetail[title]</h1>";
      $dirname= "images/photography/$albumDetail[directory]/";
      echo "directory is: $albumDetail[directory]";
      echo "$albumDetail[description]";
      $images = glob($dirname."*.jpg");
      echo "<div id=\"flexbox3\">";
      foreach($images as $image){
          echo "<div class=\"photoWrap\">";
          echo "<figure><img src=\"$image\"/></figure>";
          echo "</div>";
      };
      echo "</div>";
    ?>
</main>
