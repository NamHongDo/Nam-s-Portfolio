    <?php
    define("TITLE", "Home | Nam's Portfolio");
    include('includes/header.php');
    ?>
    <main>
      <div id="introSegment">
        <div id="briefIntro">
          <h1> NAM DO</h1>
          <h2> Web Designer & Photographer</h2>
        </div>
      </div>
      <div id="bio">
        <h1> About Me</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec convallis ligula in mauris venenatis, vitae tempor turpis laoreet. Suspendisse ornare massa est, at accumsan nunc varius at. Curabitur commodo diam in pretium dapibus. Aenean iaculis ante mi, mattis euismod massa lacinia eget. Nam sapien justo, imperdiet sed iaculis vel, semper sit amet mi. Nam mollis faucibus nisi eu scelerisque. Sed eget justo porta, fermentum leo at, tincidunt leo. Cras gravida leo quis malesuada tempor.

      Curabitur vehicula dui vitae mattis tristique. Quisque cursus quam urna, id luctus tortor placerat sed. Nulla consequat, augue nec fringilla feugiat, lacus dolor gravida risus, molestie consequat erat risus at mi. Integer id lacinia tellus, quis commodo metus. Pellentesque vitae massa interdum, molestie nulla ac, ultrices urna. Vestibulum ex dui, finibus sit amet euismod non, mattis a nunc. Donec a fermentum lorem. Vivamus tincidunt volutpat lectus. Etiam sodales tempus dolor, a venenatis ex posuere vitae. Aenean semper mi nec odio interdum, id ullamcorper ex congue. Suspendisse sit amet mi vehicula, fermentum lorem ut, elementum purus. Fusce gravida, est feugiat congue pharetra, nulla augue vestibulum massa, sed efficitur lacus neque congue urna. Quisque dui urna, finibus quis lorem quis, consequat accumsan metus.
        </p>
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
        <a id="btn1">Accomplishment</a>
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
          <a id="btn2">Accomplishment</a>
        </div>
      </div>
    </main>
      <?php include ('includes/footer.php');?>
