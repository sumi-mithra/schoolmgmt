<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["tid"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM staff WHERE tid={$_SESSION["tid"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
	
			<div id="section">
				<?php include"sidebar.php";?><br>
					<h3 class="text">Welcome <?php echo $_SESSION["tname"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Student</h3><br>
					
					 <?php
						if(isset($_GET["err"]))
						{
							echo "<div class='error'>{$_GET["err"]}</div>";
						}
					?>
					<form  method="get" action="sadded.php">
					<div class="lbox1">	
					
						<label>Enter student enquiry id</label><br>
						<input type="text" class="input3" name="eno"><br><br>
					</select>
					
					</div>
			
					<button type="submit" class="btn" name="view"> View Details</button>
				
					</form>
			
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>