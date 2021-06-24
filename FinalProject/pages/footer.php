<?php 
 
$mail = "mailto: jacobvinciguerra@hotmail.com"; 
$phone = "tel:8565627063";
$location = "https://www.google.com/maps/place/Deptford,+NJ/@39.8158313,-75.1936406,12";
$github = "https://github.com/jvinciguerra";
$twitter = "https://twitter.com/jakevinciguerra";
$linkedin = "https://www.linkedin.com/in/jacob-vinciguerra-bbb808186/";
?>      
  

<div class="row">
    <div class="column">
        <h3 style="padding: 16px"> Contact Information</h3>
            <a style="float: left"href="<?= $phone;?>"><img src="images/phone.bmp" width="55", height="55"></a>
            <a style="float: left"href="<?= $mail; ?>"><img src="images/email.bmp" width="60", height="60"></a>
            <a style="float: left"href="<?= $location;?>"><img src="images/location.bmp" width="50", height="45"></a>
        </div>  

    <div class="column">
        <h3 style="text-align: right">Websites</h3>
            <a style="float: right"href="<?= $github; ?>"><img src="images/github.bmp" width="40", height="40"></a>
            <a style="float: right"href="<?= $twitter; ?>"><img src="images/twitter.bmp" width="40", height="40"></a>
            <a style="float: right"href="<?= $linkedin; ?>"><img src="images/linkedin.bmp" width="40", height="40"></a>
    </div>
</div>