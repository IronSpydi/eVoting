<?php include('connect.php');
	
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
	     <div class="container" style="margin-top: 40px; background-image: url(vbg.jpg);background-size: 100% ">
	    	<div class="row" style="text-align: center;">
		      <div class="col  m6 l4">
		      	<div class="card">

		      		<span class="card-title">Past Elections</span>
		      		<li class="divider"></li>
		      		<div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				    </div>
				    <div class="card-action">
				         <a href="#">This is a link</a>
				    </div>
		      	</div>
		      </div>
		      <div class="col m6 l4">
		      	<div class="card">

		      		<span class="card-title">Future Elections</span>
		      		<li class="divider"></li>
		      		<div class="card-content">
				          <p>There is no Future Elections.</p>
				    </div>
				    <div class="card-action">
				         <a href="#">This is a link</a>
				    </div>
		      	</div>
		      </div>
		      <div class="col m6 l4">
		      	<div class="card">

		      		<span class="card-title">Current Elections</span>
		      		<li class="divider"></li>
		      		<div class="card-content">
				          <p><table>
				          	<tr><th>duration</th><th>Elections</th></tr>
				          	<tr><td>27/4/2021</td><td>state Elections</td></tr>
				          </table></p>
				    </div>
				    <div class="card-action">
				         <a href="#">This is a link</a>
				    </div>
		      	</div>
		      </div>
	    	</div>
	    </div>
	     <div class="container" style="background-image: url(vbg.jpg);background-size: 100%;">	
	    	<div class="row">
		      <div class="col m6 l12">
		      	<div class="card" style="text-align: center;">
		      		<span class="card-title">Result</span>
		      		<li class="divider"></li>
		      		
		      		<div class="card-action">
				         <a href="result.php">This is a link</a>
				    </div>
		      	</div>
		      </div>
		  </div>
		</div>
		<div class="container" style="background-image: url(vbg.jpg);background-size: 100%;">	
	    	<div class="row">
		      <div class="col m6 l12">
		      	<div class="card" style="text-align: center;">
		      		<span class="card-title">Political Paries</span>
		      		<li class="divider"></li>
		      		<div class="card-content"> 

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
           
           
            
          echo  '</tr>';
          echo  '</thead>';
          echo  "<tbody>";
          $var=0;
          while (($row = $result->fetch(PDO::FETCH_ASSOC)) && $var<2){
                        
            $var++;
            echo "<tr>";    
             // echo "<th scope='col'>".$row['file']."</th>";  
             echo "<th scope='col'>".'<img style="height:50px;width:50px;" src="'.$row['symbol'].'" >'."</th>"; 
              echo "<td>".$row['partyname']."</td>";
              echo "<td>".$row['abr']."</td>";
              
            echo "</tr>";
            
            
            }
            echo"</tbody>";
            echo"</table>"; 
            
          }
    ?>

		      		</div>
		      		<div class="card-action">
				         <a href="politicalparies.php">know more</a>
				    </div>
		      	</div>
		      </div>
		  </div>
		</div>

    	<?php include('footer.php'); ?>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
