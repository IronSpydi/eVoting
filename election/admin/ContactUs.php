<?php 
  include 'connect.php';
  if (isset($_REQUEST['submit'])) {
  
      if ($_REQUEST['mytextarea']=='') {
        # code...
       echo '<script type="text/javascript">alert("fill all field");</script>';
      }else{
        $sql="INSERT INTO contactus (mytextarea) Values (?)";
        $mytextarea=$_REQUEST['mytextarea'];
        $stmt=$con->prepare($sql);
        $stmt->execute(array($mytextarea));

          echo '<script type="text/javascript">alert("inerte");</script>';
      }
    
    # code...
  }


 ?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://cdn.tiny.cloud/1/uy6zl9fvtdf8zdgod2g6whvcrlkdh1mvh0rteuy0vwskwr0b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
    </head>

    <body>
      

    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel
			
              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->

           
			 	<ul class="sidenav sidenav-fixed #cfd8dc blue-grey lighten-4">
			 		<li><div class="user-view">
					      <div class="background #263238 blue-grey darken-4">
					      
					      </div>
					      <a href="#user"><img class="circle" src="finger.jpg" ></a>
					      <a href="#name"><span class="white-text name">Admin</span></a>
					     
					    </div></li>
			      <li><a href="#!">Result Count</a></li>
			      <li><a href="pp.php">Political Parties</a></li>
            <li><a href="candidate.php">Candidate</a></li>

            <li><a href="#!">Home</a></li>
             <li><a href="#">Election</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
			    </ul>
      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content
            
              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->
          <form method="post">
            <textarea id="mytextarea" name="mytextarea">
              
            </textarea>
            <input class='btn' type="submit" name="submit">
          </form>

      </div>

    </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>