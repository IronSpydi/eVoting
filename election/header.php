
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
   
    
  </style>
    </head>

    <body>
              <!-- Dropdown Structure -->
                <ul id="dropdown2" class="dropdown-content">
                  <li><a href="currentE.php">Current Election</a></li>
                  <li class="divider"></li>
                  <li><a href="futureE.php">Future Election</a></li>
                  <li class="divider"></li>
                  <li><a href="pastE.php">Past Election</a></li>
                </ul>
                <nav>

                  <div class="nav-wrapper orange">
                    <a href="#" class="sidenav-trigger" data-target="mobile-links">
                        <i class="material-icons">menu</i>
                    </a>
                    <a href="home.php" class="brand-logo"> <img src="elogo.png" style="max-height: 60px;"></a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="contactus.php">Contact Us</a></li>
                      <li><a href="result.php">Result</a></li>
                      <li><a href="areac.php">Area Candidate</a></li>
                      <li><a href="politicalparies.php">Political Paries</a></li>
                      <li><a href="login.php">Voting</a></li>
                      <!-- Dropdown Trigger -->
                      <li><a class="dropdown-trigger"  data-target="dropdown2">Election<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                  </div>
                </nav>
        <ul class="sidenav" id="mobile-links">
        <!--<li><a href="home.php">Home</a></li>
        <li><a href="join.php">Join</a></li>-->
        <ul id="dropdown1" class="dropdown-content">
                  <li><a href="currentE.php">Current Election</a></li>
                  <li class="divider"></li>
                  <li><a href="futureE.php">Future Election</a></li>
                  <li class="divider"></li>
                  <li><a href="pastE.php">Past Election</a></li>
        </ul>
        
         
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Election<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="login.php">Voting</a></li>
        <li><a href="politicalparies.php">Political Paries</a></li>
        <li><a href="result.php">Result</a></li>
                      <!-- Dropdown Trigger -->
        <li><a href="contactus.php">Contact Us</a></li>
        </ul>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $(".dropdown-trigger").dropdown();
  })
</script>
</body>
</html>