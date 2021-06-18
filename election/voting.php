<?php 
include('connect.php');
session_start();
if(!isset($_SESSION["id"]))
{
	header("location:login.php");
}
$user_name = '';
$user_id = '';

if(isset($_SESSION["user_name"], $_SESSION["id"]))
{
	$user_name = $_SESSION["user_name"];
	$user_id = $_SESSION["id"];
}

$sql="SELECT * from voter where id=?";
$result=$con->prepare($sql);
$row=$result->execute(array($user_id));
$check='$row["Vstatus"]';
if($check=='voted'){
    echo '<script type="text/javascript">alert("'.$user_name.'You already voted,Thanks for voting");</script>';
    session_destroy();
    header('Location:home.php');
}else{
    if(isset($_REQUEST['vote']))
    {
        $voted="voted";
        $sql="UPDATE voter set Vstatus=? where id=?";
        $result=$con->prepare($sql);
        $result->execute(array($voted,$user_id));
        
        $cid=$_REQUEST['CandidateId'];

        //echo '<script type="text/javascript">alert("'.$cid.'");</script>';
        $sql="UPDATE c_result set candidatevotecount = candidatevotecount + 1 where candidateId=?";
               
        $result=$con->prepare($sql);
        if($row=$result->execute(array($cid))){
       
          $sql="UPDATE p_result set partyvotecount = partyvotecount + 1 where P_ID=?";
          $pid=$_REQUEST['PartyId'];
          $result=$con->prepare($sql);
          $result->execute(array($pid));
        
        }    


        //$sql="SELECT partyvotecount from p_result where P_ID=?";
        

        echo '<script type="text/javascript">alert("'.$user_name.'thanks for voting");</script>';
        session_destroy();
        header('Location:home.php');
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
    </head>

    <body>
      <?php include('header.php'); ?>
      <div class="container" style="margin-top: 40px; background-image: url(vbg.jpg);background-size: 100%;">  
            <table >
        <thead>
          <tr>
              <th>Election Symbol</th>
              <th>Party</th>
              <th>Candidate Name</th>
              <th>Vote</th>
          </tr>
        </thead>

        <tbody class="card" style="text-align: center;">
          
    <?php
    if(isset($_GET['ward']))
    {
            $ward=$_GET['ward'];
            $sql="SELECT politicalp.abr,politicalp.symbol,test.id AS CandidateId,test.firstname,test.politicalparty,test.ward,politicalp.id AS PartyId FROM test inner join politicalp on test.politicalparty=politicalp.abr where test.ward='$ward'";
                  $result=$con->prepare($sql);
                  $result->execute();
                  //print_r($result);
                  
            while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
              echo '<tr>';

              echo "<td>".'<img style="height:50px;width:50px;" src="'.$row['symbol'].'" >'."</td>";
              echo '<td>'.$row["politicalparty"].'</td>' ;
              echo '<td>'.$row["firstname"].'</td>';
              
              echo '<td>'.'<form action="voting.php" method="POST"><input type="hidden" name="CandidateId" value='.$row['CandidateId'].'><input type="hidden" name="CandidateId" value='.$row['CandidateId'].'><input type="hidden" name="PartyId" value='.$row['PartyId'].'><input type="submit" class="btn" name="vote" value="VOTE"></form>'.'</td>';
              echo '</tr>';
            }
     }
    ?>
           
         
        </tbody>
      </table>
    </div>
      <?php include('footer.php'); ?>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>