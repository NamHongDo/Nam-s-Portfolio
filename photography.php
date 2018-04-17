<?php
define ("TITLE", "Photography | Nam's Portfolio");
include('includes/header.php');
?>
    <main id="main2">
      <h1>Photography</h1></h1>
      <div id="flexbox2">
        <?php
          foreach($albumListing as $album){
            echo "<div class=\"albumsWrapper\">";
            echo "<div class=\"textWrapper\">";
            echo "<h2> $album[title]</h2> ";
            echo "</div>";
            echo "<figure><img src=\"images/photography/$album[cover].jpg\"</figure>";
            echo "<div id=\"hover2\" class=\"hoverDiv\"><a href=\"album-detail.php?item=$album[albumKey]\">View</a></div>";
            echo "</div>";
          }
        ?>
      </div>
    </main>
<?php include ('includes/footer.php');?>
