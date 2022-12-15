<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <h1 class="menu-title">Contact Us!</h1>
    <div class="multiple">
        <div>
            <label>
                Name:<br><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
            </label>
        </div>
        <br><br>
        <div>	
            <label>
                Email:<br><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
            </label>
        </div>
        <br><br>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
        <div>	
            <label>
                How Did You Hear About Us?:<br>
                    <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
                        <option value="">Choose how you heard about us</option>
                        <option value="Advertising">Advertising</option>
                        <option value="Web">Web</option>
                        <option value="Magazine">Magazine</option>
                        <option value="Friends, relarives, neighbors">Friends, relatives, neighbors</option>
                        <option value="Other">Other</option>
                    </select>
            </label>
        </div>
        <br><br>
        <div>	
            <fieldset>
                <legend>What Services Are You Interested In?</legend>
                <input type="checkbox" name="Interested_In[]" value="Food Delivery" tabindex="40" /> Food Delivery <br>
                <input type="checkbox" name="Interested_In[]" value="Preparation od semi-finished products" /> Preparation of semi-finished products <br />
                <input type="checkbox" name="Interested_In[]" value="Home Party Catering" /> Home Party Catering <br>
                <input type="checkbox" name="Interested_In[]" value="Event Catering" /> Event Catering <br>
                <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
            </fieldset>
        </div>
        <br><br>
        <div>	
            <fieldset>
                <legend>Would you like to join our mailing list?</legend>
                <input type="radio" name="Join_Mailing_List?" value="Yes" 
                        required="required" title="Mailing list is required" tabindex="50"  
                /> Yes <br />
                <input type="radio" name="Join_Mailing_List?" value="No" /> No <br>
            </fieldset>
        </div>
        <br><br>
        <div>	
            <label>
                Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
            </label>
        </div>	
        <br><br>
        <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
        <br>
        <div>
            <input class="submit" type="submit" value="Submit" />
        </div>
    </div>
</form>
<!-- END HTML FORM -->

