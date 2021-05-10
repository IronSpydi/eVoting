<?php 

  include('connect.php');
  if(isset($_REQUEST['save'])){
        if(($_REQUEST['symbol']=="")||($_REQUEST['partyname']=="")||($_REQUEST['abr']=="")||($_REQUEST['about']=="")||($_REQUEST['ess']==""))
        {
          echo '<script type="text/javascript">alert("fill all field");</script>';
        }else{
          
        
          $sql="INSERT INTO politicalp (symbol,partyname,abr,about,ess) VALUES (?,?,?,?,?)";
          $symbol=$_REQUEST['symbol'];
          $partyname=$_REQUEST['partyname'];
          $abr=$_REQUEST['abr'];
          $about=$_REQUEST['about'];
          $ess=$_REQUEST['ess'];
          $result=$con->prepare($sql);
          $result->execute(array($symbol,$partyname,$abr,$about,$ess));
          echo '<script type="text/javascript">alert("inserted successfully");</script>';
        
        }
      } 
      if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];
        $sql="DELETE FROM politicalp WHERE id=$id";
        $result=$con->prepare($sql);
        $result->execute();
      }

      if(isset($_REQUEST['up'])){
          $id=$_REQUEST['id'];
          $symbol=$_REQUEST['symbol'];
          $partyname=$_REQUEST['partyname'];
          $abr=$_REQUEST['abr'];
          $about=$_REQUEST['about'];
          $ess=$_REQUEST['ess'];
        
          $sql="UPDATE politicalp SET symbol='$symbol',partyname='$partyname',abr='$abr',about='$about',ess='$ess' WHERE id=$id";
          $result=$con->prepare($sql);
          $result->execute();
          echo '<script type="text/javascript">alert("up inserted successfully");</script>';
        
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
              <li><a href="test.php">test</a></li>
            <li><a href="#!">Home</a></li>
             <li><a href="#">Election</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->
         <ul class="collapsible popout">
    <li class="active">
      <div class="collapsible-header"><i class="material-icons">add</i>Add Political Party</div>
      <div class="collapsible-body">
              <?php
                if(isset($_REQUEST['edit'])){
                  $sql="SELECT * FROM politicalp WHERE id={$_REQUEST['id']}";
                  $result=$con->prepare($sql);
                  $result->execute();
                  //print_r($result);
                  $row=$result->fetch(PDO::FETCH_ASSOC);
                  }
              ?>
          <form action="pp.php" method="POST">
            
             <div class="row">
                <div class="input-field col s12">
                  <input id="first_name2" type="text" name="symbol" class="validate" value="<?php if(isset($row['symbol'])){ echo $row["symbol"];}?>">
                  <label class="active" for="first_name2">Symbol source</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name2" type="text" name="partyname" class="validate" value="<?php if(isset($row['partyname'])){ echo $row["partyname"];}?>">
                  <label class="active" for="first_name2">Party Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="first_name2" type="text" class="validate" name="abr" value="<?php if(isset($row['abr'])){ echo $row["abr"];}?>">
                  <label class="active" for="first_name2">Abbribiation</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" name="about" ><?php if(isset($row['about'])){ echo $row["about"];}?></textarea>
                  <label for="textarea1">About</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" name="ess"><?php if(isset($row['ess'])){ echo $row["ess"];}?></textarea>
                  <label for="textarea1">Election Symbol And its Significant</label>
                </div>
              </div>
              <input type="submit" value="save" class="btn grey" name="save">
              <input type="hidden" name="id" value='<?php if(isset($row['id'])){echo $row["id"];}?>'>
              <button type="submit" class="btn" name="up">Save changes</button>
              
          </form>

      </div>
    </li>
    
  </ul>
      
        <?php
      $sql="SELECT * FROM politicalp";
      $result=$con->query($sql);
      if ($result->rowcount()>0) {

        echo  '<table class="table">';
          echo  "<thead>";
          echo  "<tr>";
          echo  '<th scope="col">Symbol</th>';
            echo  '<th scope="col">Party Name</th>';
            echo    '<th scope="col">Abrriviation</th>';
            echo  '<th scope="col">About</th>';
            echo  '<th scope="col">Election Symbol And its Significant</th>';
            echo  '<th scope="col">Edit</th>';
            echo  '<th scope="col">DELETE</th>';
            
          echo  '</tr>';
          echo  '</thead>';
          echo  "<tbody>";
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        
            
            echo "<tr>";    

              echo "<th scope='col'>".'<img style="height:50px;width:50px;" src="'.$row['symbol'].'" >'."</th>";

              echo "<td>".$row['partyname']."</td>";
              echo "<td>".$row['abr']."</td>";
              echo "<td>".$row['about']."</td>";
              echo "<td>".$row['ess']."</td>";

              //echo '<td>'.'<form><input type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo '<td>'.'<form action="pp.php" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo "<td>".'<form action="pp.php" method="POST"><input name="id" type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="delete" value="DELETE"></form>'."</td>";
              
//<input type="hidden" name="update" value='.$row['id'].'><button name="update"><a href="#ud" class="btn orange modal-trigger">UPDATE</a></button>
              /*echo "<td>".'<form><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="UPDATE" value="UPDATE"></form>'."</td>";  */  
            echo "</tr>";
            
            
            }
            echo"</tbody>";
            echo"</table>"; 
            
          }
    ?>
      </div>

    </div>
    

      

    

   



      <!--JavaScript at end of body for optimized loading-->
      
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.collapsible').collapsible();
        })
      </script>
    </body>
  </html>