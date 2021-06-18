  <?php 
  
  include('connect.php');
  session_start();

  if(isset($_SESSION["id"]))
  {
    header("location:voting.php");
  }
  if(isset($_REQUEST['login'])){
    if(($_REQUEST['id']=="")||($_REQUEST['email']="")){
      echo '<script type="text/javascript">alert("Please fill all field");</script>';
    }
    else
    {
      $sql="SELECT * from voter where id=? AND email=?";
      $id=trim($_POST["id"]);
      $email=trim($_POST["email"]);
      $result=$con->prepare($sql);
      $result->execute(array($id,$email));
      $row = $result->fetch(PDO::FETCH_ASSOC);
        
      
     
      if($row['id']==$id && $row['email']==$email){
       
        //$sql="INSERT into voter user_otp) values ('?')"; 
        $sql="UPDATE voter SET user_otp=? where id=?";
        $user_otp = rand(100000, 999999);
        $id=$row["id"];
        $result=$con->prepare($sql);
        if($result->execute(array($user_otp,$id))){
            $to = $email;
            $sub = 'Verification code for Verify Your Email Address';
            $mess = '
            For verify your email address, enter this verification code when prompted: '.$user_otp.' Sincerely,';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

          // More headers
          
          $headers .= 'From:gajjjar22@gmail.com'."\r\n";
         

         
          $mail_sent = mail($to,$sub,$mess,$header);
          if($mail_sent == true){
            echo '<script>alert("Please Check Your Email for Verification Code")</script>';
            header('location:email_verify.php');
          }else{
            echo 'error';
          }
        }

        header('Location:email_verify.php');
      }else{
        echo '<script>alert("Please Enter valide credentials")</script>';
      }
    }
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
            <input type="text" name="id" placeholder="Voter Id">
            <input type="text" name="email" placeholder="Email">
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