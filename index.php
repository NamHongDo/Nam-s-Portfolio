    <?php
    define("TITLE", "Home | Nam's Portfolio");
    include('includes/header.php');
    ?>
    <main>
      <div id="introSegment">
      </div>
      <div id="bio">
        <h1> <span id="span1">WebDesigner</span> <span id="span2">&</span> <span id="span3">Photographer</span></h1>
        <p>
          <span></span>Started out as
          hobbies, web design and photography have slowly become
          my life's passion. I have a vision of creating breathtaking professional
          websites where I use my skillset in photography to tell my client's story.
          I constantly keep up with the modern trends and technology to make sure
          my craft is well made.
        </P>
      </div>
      <div id="webParallax" class="parallax">
        <h4>Web Design</h4>
      </div>
      <div id="flexBox0">
          <?php
            foreach($webFeatures as $feature){
              echo "<div class=\"homeBoxes\">";
              echo "<h3>$feature[header]</h3>";
              echo "<p>$feature[description]</p>";
              echo "</div>";
            }
          ?>
      </div>
      <div class="homeButtonBox">
        <a id="btn1" href="websites.php">Accomplishment</a>
      </div>
      <div  id="photoParallax" class="parallax">
          <h4>Photography</h4>
      </div>
      <div id="flexBox0">
        <?php
          foreach($photoFeatures as $feature){
            echo "<div class=\"homeBoxes\">";
            echo "<h3> $feature[header]</h3>";
            echo "<p> $feature[description]</p>";
            echo "</div>";
          }
        ?>
        </div>
        <div class="homeButtonBox">
          <a id="btn2" href="photography.php">Accomplishment</a>
        </div>
      </div>
    </main>
      <?php include ('includes/footer.php');?>
