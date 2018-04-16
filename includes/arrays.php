<?php
  //Nav Menu Items:
  $navItems=array(
    array(
      slug      =>"index.php",
      title    => "Biography"
    ),
    array(
      slug      =>"websites.php",
      title    => "Websites"
    ),
    array(
      slug      =>"photography.php",
      title    => "Photography"
    ),
  );

//Web features on home page
  $webFeatures=array(
    array(
      header    =>"Responsive Design",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
    array(
      header    =>"Speed & Reliability",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
    array(
      header    =>"Unique Story Telling",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
  );
//Photo features on home page
  $photoFeatures=array(
    array(
      header    =>"Breath Taking Quality",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
    array(
      header    =>"Contemporary",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
    array(
      header    =>"Professional Equipment",
      description   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
    ),
  );

  //websites info display on website.php
    $websListing=array(
      array(
        header      =>"The Copper Moon",
        color       =>"#D26A4A",
        description =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
          orci luctus et",
        display     =>"CMpic1",
        background  =>"CMpic2",
        templateKey =>"CM0"
        ),
        array(
          header      =>"North Shore Safety",
          color       =>"#000000",
          description =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
            orci luctus et",
          display     =>"NSSpic1",
          background  =>"NSSpic2",
          templateKey =>"NSS1"
          ),
          array(
            header      =>"Electric Air",
            color       =>"#000000",
            description =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
              orci luctus et",
            display     =>"EApic1",
            background  =>"EApic2",
            templateKey =>"EA2"
            ),
    );
    //website info for website-template.php
$websDetails=array(
  "CM0" => array(
      title =>"The Copper Moon - Static Website",
      photo1=>"CMpic3",
      photo2=>"CMpic4",
      photo3=>"CMpic5",
      photo4=>"CMpic6",
      description1=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description2=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description3=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description4=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
  ),
  "NSS1" => array(
      title =>"North Shore Safety - Wordpress Website",
      photo1=>"NSSpic3",
      photo2=>"NSSpic4",
      photo3=>"NSSpic5",
      photo4=>"NSSpic6",
      description1=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description2=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description3=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description4=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
  ),
  "EA2" => array(
      title =>"Electric Air - Ecommerce Website",
      photo1=>"EApic3",
      photo2=>"EApic4",
      photo3=>"EApic5",
      photo4=>"EApic6",
      description1=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description2=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description3=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et",
      description4=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
        orci luctus et"
      ),
    );
    //albums cover on photography.php
     $albumListing=array(
        array(
          title=>"Copper Moon",
          cover=>"CPimg1",
          albumKey=>"CM00"
        ),
        array(
          title=>"Pulp",
          cover=>"PPimg1",
          albumKey=>"PP01"
        ),
        array(
          title=>"Deanna and Jeremy Wedding",
          cover=>"De&Jeimg1",
          albumKey=>"DeJe02"
        ),
        array(
          title=>"Personal Collection",
          cover=>"PCimg1",
          albumKey=>"PC03"
        ),
     );

     //albums detail on album-detail.php
     $albumsDetails=array(
       "CM00" => array(
         title=>"The Copper Moon Social Media",
         description=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis turpis felis.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Donec convallis ligula in mauris venenatis, vitae tempor turpis laoreet.",
         directory=>"CopperMoon"
       ),
       "PP01" => array(
         title=>"Pulp (Lakewood,OH) Social Media",
         description=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis turpis felis.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Donec convallis ligula in mauris venenatis, vitae tempor turpis laoreet.",
        directory=>"Pulp"
       ),
       "DeJe02" => array(
         title=>"Deanna & Jeremy Wedding",
         description=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis turpis felis.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Donec convallis ligula in mauris venenatis, vitae tempor turpis laoreet.",
         directory=>"Deanna"
       ),
       "PC03" => array(
         title=>"Personal Collection",
         description=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec convallis ligula in mauris venenatis, vitae tempor turpis laoreet. Suspendisse ornare massa est, at accumsan nunc varius at. Curabitur commodo diam in pretium dapibus. Aenean iaculis ante mi, mattis euismod massa lacinia eget. Nam sapien justo, imperdiet sed iaculis vel, semper sit amet mi. Nam mollis faucibus nisi eu scelerisque. Sed eget justo porta, fermentum leo at, tincidunt leo. Cras gravida leo quis malesuada tempor.",
         directory=>"PersonalCollection"
       ),
     );
 ?>
