<?php 
include 'connect.php';

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
    </head>

    <body>
      <?php include('header.php'); ?>
      <div class="container" style="margin-top: 40px; background-image: url(vbg.jpg);background-size: 100%;">  
        <div class="row">
          <div class="col m6 l12">
            <div class="card" style="text-align: center;">
              <span class="card-title">contactus</span>
              <li class="divider"></li>
              <div class="card-content"> <p>
                <?php 

                    $sql="SELECT * from contactus where id=?";
                    $stmt=$con->prepare($sql);
			
                    $stmt->execute(array(4));
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                    echo($row['mytextarea']);

                 ?>
              </p></div>
              
            </div>
          </div>
      </div>
    </div>
      <?php include('footer.php'); ?>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>c