<?php 
	include('connect.php');
	if (isset($_REQUEST['submit'])) {
		if (($_REQUEST['firstname']=="")||($_REQUEST['lastname']=="")||($_REQUEST['DOB']=="")||($_REQUEST['gedner']=="")||($_REQUEST['email']=="")){
			echo '<script type="text/javascript">alert("fill all field");</script>';
		}else{
			$sql="INSERT into voter (firstname,lastname,DOB,gedner,email) VALUES (?,?,?,?,?)";
			$fn=$_REQUEST['firstname'];
			$ln=$_REQUEST['lastname'];
			$DOB=$_REQUEST['DOB'];
			 $gedner=$_REQUEST['gedner'];
			  $email=$_REQUEST['email'];
			$result=$con->prepare($sql);
			$result->execute(array($fn,$ln,$DOB,$gedner,$email));
			 echo '<script type="text/javascript">alert("inserted successfully");</script>';
		}
}
if(isset($_REQUEST['up'])){
        
          $id=$_REQUEST['id'];
         $firstname=$_REQUEST['firstname'];
          $lastname=$_REQUEST['lastname'];
          $DOB=$_REQUEST['DOB'];
          $gedner=$_REQUEST['gedner'];
          $email=$_REQUEST['email'];
          /*$area=$_REQUEST['area'];
          $tele=$_REQUEST['tele'];     
          $state=$_REQUEST['state'];
          $city=$_REQUEST['city'];
          $ward=$_REQUEST['ward'];
           $email=$_REQUEST['email'];*/
          $sql="UPDATE voter SET firstname='$firstname',lastname='$lastname',DOB='$DOB',gedner='$gedner',email='$email' WHERE id=$id";
         
          $result=$con->prepare($sql);
          $result->execute();
          echo '<script type="text/javascript">alert("up inserted successfully");</script>';
        
      } 
      if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];
        $sql="DELETE FROM voter WHERE id=$id";
        $result=$con->prepare($sql);
        $result->execute();
      }


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>a</title>
</head>
<body>
	<?php if (isset($_REQUEST['edit'])) {
		$sql="SELECT * from voter WHERE id={$_REQUEST['id']}";
		  		$result=$con->prepare($sql);
                $result->execute();
                  //print_r($result);
                $row=$result->fetch(PDO::FETCH_ASSOC);
	} ?>
<form action="voter.php" method="POST">
 	<label>fistname</label><br>
 	<input placeholder="fistname" type="text" name="firstname" value="<?php if(isset($row['firstname'])){ echo $row["firstname"];}?>"><br>
 	<label>lastname</label><br>
 	<input type="text" name="lastname" value="<?php if(isset($row['lastname'])){ echo $row["lastname"];}?>"><br>
 	<label>DOB</label><br>
 	<input type="date" name="DOB" value="<?php if(isset($row['DOB'])){ echo $row["DOB"];}?>"><br>
 	<label>Gender</label><br>
 	
 	<p>
      <label>
        <input name="gedner" type="radio" value="male" <?php if (isset($row['gedner'])=='male'){ echo "checked";}?>>
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
     <input name="gedner" type="radio" value="female" <?php if (isset($row['gedner'])=='female'){ echo "checked";}?>>
        <span>Female</span>
      </label>
    </p>
    <label>Email:</label><br>
     <input type="text" name="email" value="<?php if(isset($row['email'])){ echo $row["email"];}?>"><br>
 	


 	<input type="submit" class="btn" name="submit">
 	<input type="hidden" name="id" value='<?php if(isset($row['id'])){echo $row["id"];}?>'>
              <button type="submit" class="btn" name="up">Save changes</button>
 </form>
  <?php
      $sql="SELECT * FROM voter";
      $result=$con->query($sql);
      if ($result->rowcount()>0) {

        echo  '<table class="table">';
          echo  "<thead>";
          echo  "<tr>";
          echo  '<th scope="col">First Name</th>';
            echo  '<th scope="col">Last Name</th>';
           echo  '<th scope="col">Birth Date</th>';
           echo  '<th scope="col">Gender</th>';
            echo  '<th scope="col">Email</th>';
           /* echo  '<th scope="col">Telephone</th>';
            
            echo  '<th scope="col">Address</th>';
         
            echo  '<th scope="col">Country</th>';
            echo  '<th scope="col">State</th>';
            echo  '<th scope="col">City</th>';
            echo  '<th scope="col">Ward</th>';
            echo  '<th scope="col">Status</th>';*/
            echo  '<th scope="col">edit</th>';
            echo  '<th scope="col">DELETE</th>';
            
          echo  '</tr>';
          echo  '</thead>';
          echo  "<tbody>";
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        
            
            echo "<tr>";    


              echo "<td>".$row['firstname']."</td>";
              echo "<td>".$row['lastname']."</td>";
              echo "<td>".$row['DOB']."</td>";
              echo "<td>".$row['gedner']."</td>";
              echo "<td>".$row['email']."</td>";
             /* echo "<td>".$row['tele']."</td>";
              
              echo "<td>".$row['area']."</td>";
                
              echo "<td>".$row['state']."</td>";
              echo "<td>".$row['city']."</td>";
              echo "<td>".$row['ward']."</td>";
                echo "<td>".$row['status']."</td>";*/

              //echo '<td>'.'<form><input type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo '<td>'.'<form action="voter.php" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo "<td>".'<form action="voter.php" method="POST"><input name="id" type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="delete" value="DELETE"></form>'."</td>";
              
//<input type="hidden" name="update" value='.$row['id'].'><button name="update"><a href="#ud" class="btn orange modal-trigger">UPDATE</a></button>
              /*echo "<td>".'<form><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="UPDATE" value="UPDATE"></form>'."</td>";  */  
            echo "</tr>";
            
            
            }
            echo"</tbody>";
            echo"</table>"; 
            
          }
    ?>
</body>
</html>