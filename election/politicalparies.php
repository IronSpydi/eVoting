<?php include('connect.php'); ?>
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

      <?php include('header.php'); 
        
      $sql="SELECT * FROM politicalp";
      $result=$con->query($sql);
      if ($result->rowcount()>0) {

        
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        
          echo  '  <div class="row">';
          echo  '    <div class="col s12 ">';
          echo  '  <div class="container">';
          echo  '      <div class="card" style="margin-top:110px;">';
          echo  '        <div class="card-image orange">';
          echo  '          <img style="height:auto;width:auto;" src="'.$row['symbol'].'" >';
         
          echo  '        </div>';
           echo  '          <span style="font-size:15px;"  class="card-title card-panel orange">'.$row['partyname'].'('.$row['abr'].')'.'</span>';
          echo  '        <div class="card-content">';
          echo  '       <h5>About</h5>';
          echo  '          <p>'.$row['about'].'';
          echo  '          I am convenient because I require little markup to use effectively.</p>';
          echo  '        </div>';
          echo  '        <li class="divider"></li>';
          echo  '        <div class="card-content green">';
          echo  '       <h5>Election symbol of '.$row['abr'].' and its Significance:</h5>';
          echo  '          <p>'.$row['ess'].'';
          echo  '          I am convenient because I require little markup to use effectively.</p>';
          echo  '        </div>';
          echo  '      </div>';
          echo  '    </div>';
          echo  '  </div>';
          echo  '  </div>';
             
             // echo "<th scope='col'>".$row['file']."</th>";   
             
//<input type="hidden" name="update" value='.$row['id'].'><button name="update"><a href="#ud" class="btn orange modal-trigger">UPDATE</a></button>
              /*echo "<td>".'<form><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="UPDATE" value="UPDATE"></form>'."</td>";  */  
          
            
            }
         
          }
          include('footer.php');
    ?>
    





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>