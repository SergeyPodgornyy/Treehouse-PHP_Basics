<?php

define('USE_FULL_NAME', TRUE);

define('YEAR', 2015);

$name = "Sergey";
$lastname = "Podgornyy";
$location = "Kiev, Ukraine";
$role="Student";
//$full_name = "Mike The Frog";

if(USE_FULL_NAME)
  $full_name = $name.' '.$lastname;
else
  $full_name = $name;

if($role=="Teacher")
  $info="Hi, I'm a Teacher at Treehouse";
elseif($role=="Student")
  $info="Hi, I'm a Student at Treehouse";
else
  $info="I am just visiting";

$social_icons = array('twitter'=>'https://twitter.com/KoeplerF', 'google'=>'https://plus.google.com/u/0/115551077481455725916', 'linkedin'=>'https://www.linkedin.com/profile/view?id=AAIAABIRopMBJyptswlc-pvpOQs4CaCSzbY0i80', 'github'=>'https://github.com/SergeyPodgornyy', 'treehouse'=>'http://teamtreehouse.com/sergeypodgornyy');

?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/sergey.jpg" alt="<?php echo $full_name ?>">
      </div>
      <h1><?php echo $full_name ?></h1>
      <p><?php echo $location?></p>
      <p><?php echo $role;?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <p><?php echo YEAR;?></p>
      <hr />
      <ul class="social">
      <?php
        foreach($social_icons as $icon=>$link){
      ?>
          <li><a href="<?php echo $link ?>" target="_blank"><span class="icon <?php echo $icon ?>"></span></a></li>
      <?php
        }
      ?>
      </ul>
    </section>
    <section class="main">
      <p><?php echo $info;?></p>
      <p>Let's Get Started!</p>
      <p><?php echo "Hello World";?></p>
    </section>
  </body>
</html>