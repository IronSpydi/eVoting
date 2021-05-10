<?php 

  include('connect.php');
  if(isset($_REQUEST['save'])){
        if(($_REQUEST['firstname']=="")||($_REQUEST['lastname']=="")||($_REQUEST['bday']=="")||($_REQUEST['tele']=="")||($_REQUEST['ad']=="")||($_REQUEST['gender']=="")||($_REQUEST['politicalparty']=="")||($_REQUEST['country']=="")||($_REQUEST['state']=="")||($_REQUEST['city']=="")||($_REQUEST['ward']==""))
        {
          echo '<script type="text/javascript">alert("fill all field");</script>';
        }else{
          
        
          $sql="INSERT INTO candidate_data (firstname,lastname,bday,tele,ad,gender,politicalparty,country,state,city,ward) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
          $firstname=$_REQUEST['firstname'];
          $lastname=$_REQUEST['lastname'];
          $bday=$_REQUEST['bday'];
          $gender=$_REQUEST['gender'];
          $ad=$_REQUEST['ad'];
          $tele=$_REQUEST['tele'];
          $politicalparty=$_REQUEST['politicalparty'];
          $country=$_REQUEST['country'];
          $state=$_REQUEST['state'];
          $city=$_REQUEST['city'];
          $ward=$_REQUEST['ward'];
          $result=$con->prepare($sql);
          $result->execute(array($firstname,$lastname,$bday,$tele,$ad,$gender,$politicalparty,$country,$state,$city,$ward));
          echo '<script type="text/javascript">alert("inserted successfully");</script>';
        
        }
      } 
      if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];
        $sql="DELETE FROM candidate_data WHERE id=$id";
        $result=$con->prepare($sql);
        $result->execute();
      }

      if(isset($_REQUEST['up'])){
          $id=$_REQUEST['id'];
          $firstname=$_REQUEST['firstname'];
          $lastname=$_REQUEST['lastname'];
          $bday=$_REQUEST['bday'];
          $gender=$_REQUEST['gender'];
          $ad=$_REQUEST['ad'];
          $tele=$_REQUEST['tele'];
          $politicalparty=$_REQUEST['politicalparty'];
          $country=$_REQUEST['country'];
          $state=$_REQUEST['state'];
          $city=$_REQUEST['city'];
          $ward=$_REQUEST['ward'];
        
          $sql="UPDATE candidate_data SET firstname='$firstname',lastname='$lastname',bday='$bday',gender='$gender',ad='$ad' ,tele='$tele',politicalparty='$politicalparty',country='$country',state='$state',city='$city',ward='$ward' WHERE id=$id";
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
      <div class="collapsible-header"><i class="material-icons">add</i>Add Candidate</div>
      <div class="collapsible-body">
              <?php
                if(isset($_REQUEST['edit'])){
                  $sql="SELECT * FROM candidate_data WHERE id={$_REQUEST['id']}";
                  $result=$con->prepare($sql);
                  $result->execute();
                  //print_r($result);
                  $row=$result->fetch(PDO::FETCH_ASSOC);
                  }
              ?>
          <form action="candidate.php" method="POST">
            
             
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name2" type="text" name="firstname" class="validate" value="<?php if(isset($row['firstname'])){ echo $row["firstname"];}?>">
                  <label class="active" for="first_name2">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="first_name2" type="text" class="validate" name="lastname" value="<?php if(isset($row['lastname'])){ echo $row["lastname"];}?>">
                  <label class="active" for="first_name2">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                   <input type="text" class="datepicker" name="bday" value="<?php if(isset($row['bday'])){ echo $row["bday"];}?>">
                    <label class="active" for="first_name2">Birth Date</label>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate" name="tele" value="<?php if(isset($row['tele'])){ echo $row["tele"];}?>">
                    <label for="icon_telephone">Telephone</label>
              </div>
            
                <div class="input-field col s6">
                  <label class="active" for="first_name2">Gender</label>
                   <p>
                    <label>
                      <input name="gender" type="radio" name="gender" value="<?php if(isset($row['gender'])){ echo 'checked';}?>"/>
                      <span>Male</span>
                    </label>
                  
                    <label>
                      <input name="gender" type="radio" name="gender" value="<?php if(isset($row['gender'])){ echo 'checked';}?>"/>
                      <span>Female</span>
                    </label>
                      
                  </p>
                  
                    
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" name="ad" value="<?php if(isset($row['ad'])){ echo $row["ad"];}?>"></textarea>
                  <label for="textarea1">Address</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <select name="politicalparty" value="<?php if(isset($row['politicalparty'])){ echo $row["politicalparty"];}?>">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM politicalp";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["abr"].' data-icon='.$row['symbol'].'>'.$row["abr"].'</option>';
                    }?>
                  </select>
                  <label>Political party</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <select name="country">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM country";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["country_name"].'>'.$row["country_name"].'</option>';
                    }?>
                  </select>
                  <label>Country</label>
                </div>
                 <div class="input-field col s6">
                  <select name="state">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM states";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
                  </select>
                  <label>State</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <select name="city">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM city";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
                  </select>
                  <label>City</label>
                </div>
                 <div class="input-field col s6">
                  <select name="ward">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM ward";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
                  </select>
                  <label>Ward</label>
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
      $sql="SELECT * FROM candidate_data";
      $result=$con->query($sql);
      if ($result->rowcount()>0) {

        echo  '<table class="table">';
          echo  "<thead>";
          echo  "<tr>";
          echo  '<th scope="col">First Name</th>';
            echo  '<th scope="col">Last Name</th>';
            echo  '<th scope="col">Birth Date</th>';
            echo  '<th scope="col">Telephone</th>';
            echo  '<th scope="col">Gender</th>';
            echo  '<th scope="col">Address</th>';
            echo  '<th scope="col">Political party</th>';
            echo  '<th scope="col">Country</th>';
            echo  '<th scope="col">State</th>';
            echo  '<th scope="col">City</th>';
            echo  '<th scope="col">Ward</th>';
            echo  '<th scope="col">DELETE</th>';
            
          echo  '</tr>';
          echo  '</thead>';
          echo  "<tbody>";
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        
            
            echo "<tr>";    


              echo "<td>".$row['firstname']."</td>";
              echo "<td>".$row['lastname']."</td>";
              echo "<td>".$row['bday']."</td>";
              echo "<td>".$row['tele']."</td>";
              echo "<td>".$row['gender']."</td>";
              echo "<td>".$row['ad']."</td>";
              echo "<td>".$row['politicalparty']."</td>";
              echo "<td>".$row['country']."</td>";
              echo "<td>".$row['state']."</td>";
              echo "<td>".$row['city']."</td>";
              echo "<td>".$row['ward']."</td>";

              //echo '<td>'.'<form><input type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo '<td>'.'<form action="candidate.php" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo "<td>".'<form action="candidate.php" method="POST"><input name="id" type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="delete" value="DELETE"></form>'."</td>";
              
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.collapsible').collapsible();
           $('.datepicker').datepicker();
           $('select').formSelect();
        })
        
      </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>