<?php

//email_verify.php
include('connect.php');
session_start();
$error_user_otp = '';

$message = '';



	if(isset($_POST["submit"]))
	{
		if(empty($_POST["user_otp"]))
		{
			$error_user_otp = 'Enter OTP Number';
		}
		else
		{
			$sql = "
			SELECT * FROM voter 
			WHERE user_otp = '".trim($_POST["user_otp"])."'
			";

			$result=$con->query($sql);
			
			
			
			
			if($row=$result->fetch(PDO::FETCH_ASSOC))
			{	
				$_SESSION["id"] = $row["id"];
				$_SESSION["user_name"] = $row["firstname"];
				$_SESSION['user_email'] = $row["email"];
				echo '<script type="text/javascript">alert("'.$_SESSION["id"].'+++++++'.$_SESSION["user_name"].'");</script>';;
				$ward=$row['ward'];
				

					header('location:voting.php?ward='.$ward);
				
			}
			else
			{
				$message = '<label class="text-danger">Invalid OTP Number</label>';
			}
		}
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Registration with Email Verification using OTP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	<?php include("header.php") ?>
		<br />
		<div class="container">
			<h3 align="center">PHP login with Email Verification using OTP</h3>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Enter OTP Number</h3>
				</div>
				<div class="panel-body">
					<?php echo $message; ?>
					<form method="POST">
						<div class="form-group">
							<label>Enter OTP Number</label>
							<input type="text" name="user_otp" class="form-control" />
							<?php echo $error_user_otp; ?>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-success" value="Submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<br />
		<br />
		<?php include("footer.php") ?>
	</body>
</html>