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
      description   =>"Roughly 50% visitors visit Websites through the use of
      mobile devices. With mobile friendly approach in mind when designing a website,
      I can prevent the loss of traffic to your website from mobile users.  "
    ),
    array(
      header    =>"Speed & Reliability",
      description   =>"With the use of contemporary technology such as version control,
      content management system, SASS, GULP, a seamlessly workflow is set up for
      every project which speeds up my web designing process and ensure every element
      working well together."
    ),
    array(
      header    =>"Unique Story Telling",
      description   =>"Website is a powerful tool to show case what your vision is
      about, so I refuse to use stock photos in the creation of websites. Using
      photos which are carefully taken, your visitors will be drawn in your vision
      more effectively"
    ),
  );
//Photo features on home page
  $photoFeatures=array(
    array(
      header    =>"Breathtaking Quality",
      description   =>"Originated as a wedding photographer, I possess the skills
      of taking high quality photos in any environment with timely fashion. Be it
      candid, documentary, food, lanscape, macro photography, I can do it"
    ),
    array(
      header    =>"Contemporary",
      description   =>"By keeping up with modern photography trends and post
      picture processing technology, I can produce photos with amzing effects
      that attract the eyes and stimilate the watcher's curiosity"
    ),
    array(
      header    =>"Professional Equipment",
      description   =>"No, I don't use a phone to take photos for my clients. I am
      equiped with a D500 profesionnal Nikon camera, a collection of high quality
      lenses that allow me to create stunning pictures with razor sharp quality"
    ),
  );

  //websites info display on website.php
    $websListing=array(
      array(
        header      =>"The Copper Moon",
        description =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
          orci luctus et",
        display     =>"CMpic1",
        background  =>"CMpic2",
        templateKey =>"CM0"
        ),
        array(
          header      =>"North Shore Safety",
          description =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Fusce facilisis turpis felis. Vestibulum ante ipsum primis in faucibus
            orci luctus et",
          display     =>"NSSpic1",
          background  =>"NSSpic2",
          templateKey =>"NSS1"
          ),
          array(
            header      =>"Electric Air",
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
