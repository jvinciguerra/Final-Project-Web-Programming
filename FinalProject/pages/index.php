<html>
  <head>
      <Title> My Portfolio </Title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
  <div class="banner">
    <header>
      <nav>
        <?php require("nav.php")?>
      </nav>
    </header>
    <div class="banner-text">
      <?php echo
        '<h1 style="font-size: 40px">Jacob Vinciguerra</h1>
        <hr>
        <p class="p1">Basic Information about me, my work, and projects from school.</p>' ?> 
    </div>
  </div>
  
</body>

<div class="aboutme">
  <?php echo
      '<h1> About Me </h1>
      <hr1></hr1>

      <p class="p2"> Currently,  I am a computer science student at Rowan University hoping to get a concentration in networking, and pursuing a career as a systems administrator. Along with being a student, I am employed at the Gloucester County Special Services School District as a Technical Support Specialist.</br> </br>

      For most of my life, technology has been a huge point of interest with me. I went to the Gloucester County Institute of Technology to be part of the IT program for my highschool. There, I was able to be exposed to the world of Technology, as well as set myself up to eventually be certified in numerous certifications as well as eventually be hired full time in their Technology Department. </br> </br>
      As mentioned before, I am still employed at my old highschool as part of their tech department, and I still take part in college as a part-time student in order to balance my worklife and schoolwork properly.</P>
  '?>
  </div>
  
  <footer>
    <?php require("footer.php")?>
</footer>
</html>