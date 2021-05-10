<?php 

include('connect.php');
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
              <span class="card-title">Your Area Candidates</span>
              <li class="divider"></li>
              <div class="card-content">
                
               <form>

                <label>select Yor area</label>
                <select name="ward">
                    <option value="" disabled selected>Saraspur</option>
                    <?php
                        $sql="SELECT * FROM ward";
                        $result=$con->query($sql);
                        while($row = $result->fetch(PDO::FETCH_ASSOC)){
                          echo '<option  value='.$row["name"].'>'.$row["name"].'</option>';
                    }?>
                </select>
              </form>
                <button name="submit" class="btn">Submit</button>
                   </div>
                   <div class="card-content">
                  <?php
      $sql="SELECT * FROM test where ward='Saraspur'";
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
     
            echo  '<th scope="col">State</th>';
            echo  '<th scope="col">City</th>';
            echo  '<th scope="col">Ward</th>';
           // echo  '<th scope="col">DELETE</th>';
            
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
             /* echo '<td>'.'<form action="test.php" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
              echo "<td>".'<form action="test.php" method="POST"><input name="id" type="hidden" value='.$row['id'].'><input type="submit" class="btn" name="delete" value="DELETE"></form>'."</td>";*/
              
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
          </div>
      </div>
    </div>
      <?php include('footer.php'); ?>


 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
         
           $('select').formSelect();
        })
        
      </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>