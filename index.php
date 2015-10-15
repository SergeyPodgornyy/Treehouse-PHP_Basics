<?php

define('YEAR', 2015);
define('JOB_TITLE', "Teacher");

// invalid constant name
// define('2LEGIT', "to quit");

$name = "Mike";
$location = "Orlando, FL";
$full_name = "Mike The Frog";
$name = $full_name;

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
        <img src="img/avatar.png" alt="Mike The Frog">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location?></p>
      <p><?php echo JOB_TITLE;?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <p><?php echo YEAR;?></p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <p>Let's Get Started!</p>
      <p><?php echo "Hello World";?></p>
      <pre>
        <?php
         echo "<br>";
         $greeting = "Hello, Friends!\n";
         $second_greeting = "How are you today?\n";
         $greeting{0} = "J";
         echo $greeting;
         echo $second_greeting;
         echo "<br>";

         //$array = array();
         //$array_example = [];
         $eye_colors = array('blue', 'green', 'brown');
         
         echo $eye_colors[0]."<br>";
         $eye_colors[1] = 'hazel';
         $eye_colors[] = 'amber';
         echo $eye_colors[1]."<br><br>";

         print_r($eye_colors);

         $eye_colors = array(
          "chris"=>"blue",
          "tom"=>"green",
          "jim"=>"brown");
         
         $eye_colors['jim']="green";
         $eye_colors['tom']="brown";
         $eye_colors['chuck'] = 'blue';
         echo "<br><br>";

         print_r($eye_colors);
        ?>
      </pre>
    </section>
  </body>
</html>