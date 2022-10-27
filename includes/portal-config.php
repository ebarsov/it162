<?php
/* 
<portal-config.php

Used to store all of our WEB162 configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color =''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Elena's Home Page";
        $logo = "fa-home";
    break;

    case 'aia.php':
        $title = "Elena's Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
    break;
        

    case 'contact.php':
        $title = "Contact Elena";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact Elena";


/*
here we're creating a function to generate
links and keep the highlight on the current page

      <li><a href="index.php" class="selected">Welcome></a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
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