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
  <div id="templateWrapper2" class="templateWrapper">
    <?php
      echo "<h1>$albumDetail[title]</h1>";
      $dirname= "images/photography/$albumDetail[directory]/";
      $images = glob($dirname."*.jpg");
      echo "<div id=\"flexbox3\">";
      foreach($images as $image){
          echo "<div class=\"photoWrap\">";
          echo "<figure><img src=\"$image\"/></figure>";
          echo "</div>";
      };
      echo "</div>";
    ?>
  </div>
</main>
<?php include ('includes/footer.php');?>
