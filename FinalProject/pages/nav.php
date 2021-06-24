<?php 
 
$home = "index.php"; 
$resume = "resume.php";
$projects = "School Projects.php";

?> 

<div class="navbar">
        <a style="font-size: 20px", href="<?= $home; ?>">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Menu
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <ul>
          <li><a href="<?= $resume; ?>">Resume</a></li>
          <li><a href="<?= $projects; ?>">School Projects</a></li>
        </ul>
        </div>
    </div>
</div>