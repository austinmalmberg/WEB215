<!DOCTYPE html>

<html lang="en">
  
  <head>
    
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    
    <title>The Weekend Camper - Home</title>
    
    <link rel = "stylesheet" type = "text/css" href = "../styles/brand.css" />
    
  </head>
  
	<body>
    
    <header>
      
      <div class="wrapper">
        
        <div class="logo">
          
          <a href="index.html">
            
            <p id="title">The Weekend Camper</p>
            
            <p id="tagline">Get away when you can</p>
            
          </a>
          
        </div>
        
        <nav>
          
          <ul class="menu">
            
            <li><a href="?p=home.php">Table of Contents</a></li>

            <li><a href="?p=introduction.php">About</a></li>

            <li><a href="?p=contract.php">Contract</a></li> 

            <li><a href="?p=brand.php">Brand</a></li>
            
          </ul>
        </nav>
        
      </div>
      
    </header>
    
    <!-- dynamic content goes here -->

    <?php
      $sPage = $_GET["p"];
      //echo ("You picked the page: " . $sPage); 

      if($sPage == "") {  $sPage = "home.php"; }
      include($sPage);
    ?>

    <footer>
      
      <div class="wrapper">
        
        <div class="html-validator">
          
          <a href="http://validator.w3.org/check?uri=referer">
            
            <img src="../images/valid_html5.gif" alt="Valid HTML 5" height="31" width="88" style="border:0px;">
            
          </a>
          
        </div>
        
        <div class="copyright">
          
          <p>&copy; 2018 Austin Malmberg</p>
          
          <p><a href="mailto:amalmbe0@email.cpcc.edu">amalmbe0@email.cpcc.edu</a></p>
          
        </div>
        
        <div class="css-validator">
          
          <a href="http://jigsaw.w3.org/css-validator/check/referer">
            
            <img src="../images/valid_css.gif" alt="Valid CSS" height="31" width="88" style="border:0px;">
            
          </a>
          
        </div>
        
      </div>
      
    </footer>

	</body>
  
</html>