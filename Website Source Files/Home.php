<!DOCTYPE html>

<html>

<title>SBB Home</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel ="icon" href="img/home_30px.png" type="image/x-icon">

<body>

<!-- Navbar (sit on top) -->

<div class="w3-top">

    <div class="w3-bar w3-white w3-wide w3-padding w3-card">

        <a href="Home.php" class="w3-bar-item w3-button"><img src = "img/south_50px.png"><b>SBB </b>ACESS</a>

        <!-- Float links to the right. Hide them on small screens -->

        <div class="w3-right w3-hide-small">

            <a href="#projects" class="w3-bar-item w3-button">HOME</a>

            <a href="https://sltc.ac.lk/" class="w3-bar-item w3-button">SLTC</a>

            <a href="about.php" class="w3-bar-item w3-button">About</a>

        </div>

    </div>
</div>

<!-- Header -->

<header class = "w3-display-container w3-content w3-wide" style = "max-width:2000px;" id="home">

  <img class="w3-image" src="img/Hedder.jpg" width="2000" height= "200">
  
  <div class="w3-display-middle w3-margin-top w3-center">
      
    <h1 class="w3-xxlarge w3-text-white">
          
       <img src = "img/logo-lg.png"></h1>

    </div>

</header>

<!-- Page content -->

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
 
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">SERVICES</h3>
  
</div>

  <div class="w3-row-padding">
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      
        <div class="w3-display-container">
        
        <div class="w3-display-topleft w3-black w3-padding">SLTC Library</div>

        <a href="Search/Hard_Copy.php" target="_blank" class="w3-hover-text-green">
        
        <img src="img/Books.jpg" alt="House" style="width:100%">
    
    </a>

    </div>
    
</div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      
        <div class="w3-display-container">
      
            <div class="w3-display-topleft w3-black w3-padding">PDF Library</div>

            <a href="Search/Pdf.php" target="_blank" class="w3-hover-text-green">
      
            <img src = "img/Pdf.jpg" alt="House" style="width:100%">

    </a>
      </div>
    
    </div>
    
<div class="w3-col l3 m6 w3-margin-bottom">
      
    <div class="w3-display-container">
        
        <div class="w3-display-topleft w3-black w3-padding">Movies Collection</div>
        
        <a href="Search/Movies.php"target="_blank"><img src="img/Movies.jpg" alt="House" style="width:100%"></a>
      
    </div>
    
</div>
    

<div class="w3-col l3 m6 w3-margin-bottom">

    <div class="w3-display-container">

        <div class="w3-display-topleft w3-black w3-padding">Video Tutorials</div>

        <a href="Search/Tutorial.php"target="_blank"><img src="img/Tutorials.jpg" alt="House" style="width:100%"></a>

    </div>

    </div>

</div>

<div class="w3-row-padding">

    <div class="w3-col l3 m6 w3-margin-bottom">

        <div class="w3-display-container">

            <div class="w3-display-topleft w3-black w3-padding">Past Papers</div>

            <a href="Search/Past_Papers.php"target="_blank"><img src="img/Past_Paper.jpg" alt="House" style="width:99%"></a>
        </div>
    </div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      
        <div class="w3-display-container">
        
            <div class="w3-display-topleft w3-black w3-padding">Audio Books</div>
        
            <a href = "Search/Audio.php" traget = "_blank"> <img src="img/Audio_Books.jpg" alt="House" style="width:99%"> </a>
        </div>
    </div>
    
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      
        <div class="w3-display-container">
        
            <div class="w3-display-topleft w3-black w3-padding">SLTC Digital Library</div>
        
            <a href = "https://digilib.sltc.ac.lk/login" traget = "_blank"><img src="img/Digital.jpg" alt="House" style="width:99%"></a>
      
    </div>
    
</div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      
        <div class="w3-display-container">
      
            <div class="w3-display-topleft w3-black w3-padding">SLTC e-Repository</div>
      
            <a href = "http://repo.sltc.ac.lk/" traget = "_blank"><img src="img/SLTC e-Repository.jpg" alt="House" style="width:99%"></a>
      
        </div>
    
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About SBB Access</h3>
    <p>The fully equipped library consist a comprehensive range of reference books,e-books and all other reference material to help the students to gain in-depth knowledge of their academic programmes. 
        Library premises do possess study spaces for students in addition to reading areas. A ‘self-check in and check out option’ for ‘borrowing and returning’ books, makes it convenient and time-efficient to utilize the library services
    </p>
  </div>

  

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="https://formsubmit.co/maxwon555@gmail.com" method = "post" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email" required>
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
      <input type="hidden" name="_next" value="http://localhost/testing/Home.php">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>


<!-- Footer -->

<footer class="w3-center w3-black w3-padding-16">

    <p> <img src = "img/source_code_30px.png" >Design By Desk Demon Team</p>

    <p><img src = "img/end_call_male_30px.png">Voice : +94 11 2100 500 / +94 71 1100 500 <br>
        
        <img src = "img/email_send_30px.png"><a href="info@sltc.ac.lk"target="_blank" class="w3-hover-text-green"> info@sltc.ac.lk</a><br>

        <img src = "img/point_of_interest_30px.png"> Main Campus ,Ingiriya Road, Padukka, Sri Lanka.

        <img src = "img/point_of_interest_30px.png"> Colombo Campus ,No 07, Hector Kobbakaduwa Mawatha, Colombo 07.

        <img src = "img/point_of_interest_30px.png"> City Campus ,Trace Expert City, Colombo 10
    
    </p>

        

</footer>

</body>
</html>




