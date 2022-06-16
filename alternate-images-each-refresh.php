<?php

//alternate between two images on each page refresh
  
$_SESSION['ts'] = time();   

if($_SESSION['ts'] != $time) 
{
  $img = $_SESSION['current_img'];

  $time = time(); 
  
  $img = ($_SESSION['current_img'] == 'image1.jpg')? 'image.jpg' : 'image1.jpg';

  $_SESSION['current_img'] = $img;
}

echo '<img class="border" src="https://www.mysite.com/images/'.$img.'" width="100%" alt="My Image Tag" />';

?>