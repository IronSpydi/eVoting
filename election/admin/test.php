<?php 
	include('connect.php');
	if (isset($_REQUEST['submit'])) {
		if (($_REQUEST['firstname']=="")||($_REQUEST['lastname']=="")||($_REQUEST['tele']=="")||($_REQUEST['DOB']=="")||($_REQUEST['gedner']=="")||($_REQUEST['politicalparty']=="")||($_REQUEST['state']=="")||($_REQUEST['city']=="")||($_REQUEST['ward']=="")||($_REQUEST['area']=="")) {
			
			echo '<script type="text/javascript">alert("fill all field");</script>';
			
		}else{
			$sql="INSERT into test (firstname,lastname,DOB,tele,gedner,politicalparty,state,city,ward,area) VALUES (?,?,?,?,?,?,?,?,?,?)";
			$fn=$_REQUEST['firstname'];
			$ln=$_REQUEST['lastname'];
			$DOB=$_REQUEST['DOB'];
			$tele=$_REQUEST['tele'];
			$gedner=$_REQUEST['gedner'];
			$politicalparty=$_REQUEST['politicalparty'];
			$state=$_REQUEST['state'];
			$city=$_REQUEST['city'];
			$ward=$_REQUEST['ward'];
			$area=$_REQUEST['area'];
		
			$result=$con->prepare($sql);
			$result->execute(array($fn,$ln,$DOB,$tele,$gedner,$politicalparty,$state,$city,$ward,$area));
			 echo '<script type="text/javascript">alert("inserted successfully");</script>';
		}
		
	}
	 if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];
        $sql="DELETE FROM test WHERE id=$id";
        $result=$con->prepare($sql);
        $result->execute();
      }

      if(isset($_REQUEST['up'])){
        
          $id=$_REQUEST['id'];
         $firstname=$_REQUEST['firstname'];
          $lastname=$_REQUEST['lastname'];
          $DOB=$_REQUEST['DOB'];
          $gedner=$_REQUEST['gedner'];
          $area=$_REQUEST['area'];
          $tele=$_REQUEST['tele'];
          $politicalparty=$_REQUEST['politicalparty'];
         $area=$_REQUEST['area'];
          $state=$_REQUEST['state'];
          $city=$_REQUEST['city'];
          $ward=$_REQUEST['ward'];
          $sql="UPDATE test SET firstname='$firstname',lastname='$lastname',DOB='$DOB',area='$area' ,tele='$tele',politicalparty='$politicalparty',state='$state',gedner='$gedner',area='$area',city='$city',ward='$ward' WHERE id=$id";
         
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
            <li><a href="#!">Result</a></li>
            <li><a href="pp.php">Political Parties</a></li>
            <li><a href="test.php">Candidate</a></li>
            <li><a href="voterdata.php">voterdata</a></li>
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
                  $sql="SELECT * FROM test WHERE id={$_REQUEST['id']}";
                  $result=$con->prepare($sql);
                  $result->execute();
                  //print_r($result);
                  $row=$result->fetch(PDO::FETCH_ASSOC);
                  }
              ?>
 <form action="test.php" method="POST">
 	<label>fistname</label><br>
 	<input placeholder="fistname" type="text" name="firstname" value="<?php if(isset($row['firstname'])){ echo $row["firstname"];}?>"><br>
 	<label>lastname</label><br>
 	<input type="text" name="lastname" value="<?php if(isset($row['lastname'])){ echo $row["lastname"];}?>"><br>
 	<label>DOB</label><br>
 	<input type="date" name="DOB" value="<?php if(isset($row['DOB'])){ echo $row["DOB"];}?>"><br>
 	<label>Mobile NO:</label><br>
 	<input type="text" name="tele" pattern="[789][0-9]{9}" name="tele" value="<?php if(isset($row['tele'])){ echo $row["tele"];}?>"><br>
 	<label>Gender</label><br>
 	
 	<p>
      <label>
        <input name="gedner" value="male" type="radio" />
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
        <input name="gedner" type="radio" value="female"/>
        <span>Female</span>
      </label>
    </p>
 	
 	

 	<label>politicalparty</label><br>
 	 			<select name="politicalparty">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM politicalp";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){

                      echo '<option  value='.$row["abr"].' data-icon='.$row['symbol'].'>'.$row["abr"].'</option>';
                     // echo '<input type="hidden" name="partyid" value="'.$row["id"].'">';
                    }?>
                </select>
    <br><label>House NO,Societyname,area</label><br>
 	<input type="text" name="area"><br>
    <br><label>state</label><br>
    <select name="state">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM states";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
    </select>
    <br><label>city</label><br>
    <select name="city">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM city";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
    </select>
    <br><label>ward</label><br>
    <select name="ward">
                    <option value="" disabled selected>Choose your option</option>
                    <?php
                    $sql="SELECT * FROM ward";
                    $result=$con->query($sql);
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                      echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
    </select>
                  

 	<input type="submit" name="submit">
 	<input type="hidden" name="id" value='<?php if(isset($row['id'])){echo $row["id"];}?>'>
  <button type="submit" class="btn" name="up">Save changes</button>

 </form>

 <?php
      $sql="SELECT * FROM test";
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
              echo "<td>".$row['DOB']."</td>";
              echo "<td>".$row['tele']."</td>";
              echo "<td>".$row['gedner']."</td>";
              echo "<td>".$row['area']."</td>";
              echo "<td>".$row['politicalparty']."</td>";
     
              echo "<td>".$row['state']."</td>";
              echo "<td>".$row['city']."</td>";
              echo "<td>".$row['ward']."</td>";

              //echo '<td>'.'<form><input type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo '<td>'.'<form action="test.php" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo "<td>".'<form action="test.php" method="POST"><input name="id" type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="delete" value="DELETE"></form>'."</td>";
              
//<input type="hidden" name="update" value='.$row['id'].'><button name="update"><a href="#ud" class="btn orange modal-trigger">UPDATE</a></button>
              /*echo "<td>".'<form><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="UPDATE" value="UPDATE"></form>'."</td>";  */  
            echo "</tr>";
            
            
            }
            echo"</tbody>";
            echo"</table>"; 
            
          }
    ?>
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
 </body>
 </html>