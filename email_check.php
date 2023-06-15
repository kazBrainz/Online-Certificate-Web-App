<?php
	require_once "db.php";
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$ret = mysqli_query($conn, "SELECT * FROM botu_cert");
	if($ret){
		foreach ($ret as $e) {
			if($e['email']==$_POST['email'] && $e['DOWNLOADED']=='')
			{
				$email1 = $_POST['email'];
				 $sql = "UPDATE botu_cert SET DOWNLOADED='TRUE' WHERE email='$email1'";
				if(mysqli_query($conn, $sql)){
				//	echo "<a href='form.html' style='color:green;'>Proceed</a>";

				echo "<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>EDUCATOR WORKSHOP CERT</title>
	<link rel='stylesheet' href='assets/vendors/bootstrap/dist/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/style.css'>
	<link rel='stylesheet' href='assets/vendors/animate.css/animate.min.css'>

</head>
<body>

	<div class='col-md-4 shadow-lg m-auto p-5 bg-light rounded-2 spesh-mt animate__animated animate__zoomIn'> 

		<h2>Get your <span class='agroTech btn-danger rounded-3 p-1'>Workshop</span> Certificate</h2>

		<form method='GET' action='display.html' >
			<p class='text-muted mt-3'> 
				ENTER YOUR FULL NAME: <input class='form-control' type='text' name='name' placeholder='BOITUMELO THABANG OMPHEMETSE'/>
			</p> 
			
			<input class='btn btn-danger' type='submit' value='Submit'>
		</form>
		</div>
		
</body>
</html>";

				}
				else
				{
					echo "";
				}

				

			}
			else
			{
				echo "";
			}
		}
	} else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
