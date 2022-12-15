<?php
/* 
<portal-config.php

Used to store all of my Final Project configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color =''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Pampushka's Home Page";
        $logo = "logo_pamp.png";
    break;

    case 'about.php':
        $title = "Pampushka's About Page";
        $logo = "logo_pamp.png";
        $logo_color = ' style="color:#00f"';
    break;

    case 'menu.php':
        $title = "Pampushka's Menu Page";
        $logo = "logo_pamp.png";
        $logo_color = ' style="color:#00f"';
    break;
        

    case 'contact.php':
        $title = "Contact Us";
        $logo = "logo_pamp.png";
        $logo_color = ' style="color:#0f0"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
}

$nav1['index.php'] = "Home";
$nav1['about.php'] = "About";
$nav1['menu.php'] = "Menu";
$nav1['reservations.php'] = "Reservations";
$nav1['contact.php'] = "Contact Us";


/*
here we're creating a function to generate
links and keep the highlight on the current page

      <li><a href="index.php" class="selected">Home></a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="reservation.php">Reservation</a></li>
      <li><a href="contact.php">Contact Elena</a></li>

*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>