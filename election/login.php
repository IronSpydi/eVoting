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
    .login{
      margin-top: 50px;
    }
    .login .card{
      background-color: rgba(0,0,0,0.6);
    }
    .login input{
      font-size: 20px !important;
      text-align: center;
      color: white;

    }
    .login .btn-large:hover{
      padding: 0px 40px;
      }     
     
  </style>
    </head>

    <body>
    	<?php include('header.php'); ?>
      <div class="row login">
    <div class="col s12 l6 offset-l3">
      <div class="card center-align">
        <div class="card-action orange white-text ">
          <h3>Login</h3>
        </div>
        <div class="card-content">
          <form action="login.php" method="POST">
            <input type="text" name="uname" placeholder="Voter Id">
            <input type="password" name="pass" placeholder="Email">
            <div class="center-align"><input type="submit" name="login" class="btn-large green darken-2" value="Login"></div>
            
          </form>
        </div>
      </div>  
    </div>
  </div>

      <?php include('footer.php'); ?>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>