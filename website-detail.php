<?php
define ("TITLE", "Website Details | Nam's Portfolio");
include('includes/header.php');

 function strip_bad_chars($input){
   $output=preg_replace("/[^a-zA-Z0-9_-]/","",$input);
   return $output;
 }
 if(isset($_GET['item'])){
   $webTemplateKey=strip_bad_chars($_GET['item']);
   $webDetail=$websDetails[$webTemplateKey];
 }
?>
 <main>
   <div id="templateWrapper1" class="templateWrapper">
  <?php
    echo "<h1>$webDetail[title]</h1>";
    echo "<figure><img src=\"images/websites/$webDetail[photo1].jpg\"/></figure>";
    echo "<p>$webDetail[description1]</p>";
    echo "<figure><img src=\"images/websites/$webDetail[photo2].jpg\"/></figure>";
    echo "<figure><img src=\"images/websites/$webDetail[photo3].jpg\"/></figure>";
    echo "<figure><img src=\"images/websites/$webDetail[photo4].jpg\"/></figure>";
  ?>
  </div>
 </main>
<?php include ('includes/footer.php');?>
