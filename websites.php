<?php
define ("TITLE", "Websites | Nam's Portfolio");
 include ('includes/header.php');
 ?>
<main id="main1">
  <h1>WEBSITES</h1>
  <div id="flexBox1">
    <?php
      foreach($websListing as $web){
        echo "<div class=\"websiteContainers\" style=\"background:url(/images/websites/$web[background].jpg)center;\">";
        echo "<h4 style=\"color:$web[color]\">$web[header]</h4>";
        echo "<figure><img src=\"images/websites/$web[display].jpg\"/></figure>";
        echo "<p>$web[description]</p>";
        echo "<div id=\"hoverDiv\"><a href=\"website-template.php?item=$web[templateKey]\">The Process</a></div>";
        echo "</div>";
      }
    ?>
  </div>
</main>
<?php include ('includes/footer.php');?>
