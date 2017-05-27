<?php
require_once('EconnectDB.php');
require_once('adminMenu.php');

	$query = "SELECT * FROM Employee WHERE employee_id = '{$_SESSION['employee_id']}'";
		// runs the query and returns the one record. We know there should only be one person with a given username
		$record = get_one_record_from_query($query);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/menuStyle.css" rel="stylesheet" type="text/css">
<title>Profile</title>
</head>

<body>
 
<div class="card">
  <img src="http://www.clipartkid.com/images/83/people-business-male-clip-art-free-vector-in-open-office-drawing-svg-RtMBRt-clipart.jpg">
  <div class="container">
<!--display the employee information of the logged in employee-->
      	<?php
		echo "<h1>{$record['employee_name']}</h1>";
		echo "<p class='title'>".$record['employee_title']."</p>";
	  	echo "<p><u>Phone:</u> ".$record['employee_pnum']."</p>";
	  	echo "<p><u>Email:</u> ".$record['employee_email']."</p>";
	  	echo "<p><u>Rate:</u> $".$record['employee_wrate']."/hr</p>";
					
		?>
  
  </div>
</div>

     
</body>
</html>
