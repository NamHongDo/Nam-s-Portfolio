
  <ul>
    <?php
      foreach ($navItems as $item){
        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
      }
    ?>
  </ul>
  <ul class="social">
    <li><a href="https://github.com/NamHongDo" class="git">Github</a></li>
    <li><a href="https://www.linkedin.com/in/namdo-csat/" class="in">LinkedIn</a></li>
  </ul>
