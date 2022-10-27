<?php include 'includes/header.php';?>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

 <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <!-- <img src="images/desktop1.jpeg" class="desktop" alt="Elena" />
 <img src="images/phone.jpeg" class="phone" alt="Sunrise" />
 <p>Hi there! My name is Elena Barsov. And I'm not looking for easy ways. I seek new challenge, so, I'm here to acquire a new profession. Last year, I was studying application development. But I like web design more. I hope I will be able to master this profession.</p> 
 <p>Since I am just beginning my ascent to this peak, it can be compared to the dawn in my life. Now I have a second chance to gain a new profession. </p>
 <p>I love my family and traveling. It is my passion!I love small and cozy Europe  and  travel a lot there. I also like the nature and wide expanses of America. All States are different and do not resemble one another.</p>-->
 <h2 class="subheader"> Contact Elena</h2>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "eklat1506@gmail.com";  //place your/your client's email address here
        $toName = "Olena Vol"; //place your client's name here
        $website = "Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<!-- END LEFT COL -->



<!-- START RIGHT COL -->
<!-- <aside>
 <h3>Everything Starts at Dawn</h3>
 <img src="images/tablet.jpeg" class="tablet" alt="Travel" />
 <p>“Every day is a new beginning.  Every morning is a new world."  — Sarah Chauncey Woolsey</p>
 <p>I am starting my life over again: in a new country, and in a different language environment, and learning a new profession.</p>
 <p> Every day is a new beginning with a new dawn.</p>
</aside> -->
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>

