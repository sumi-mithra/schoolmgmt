<?php
  include "database.php";
  session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
	<?php include"navbar.php";?><br />
	
	
	<div id="section">
		<?php include"sidebar.php";?> <br />
		
		<h3 class="text">Welcome <?php echo $_SESSION["aname"]; ?></h3><br /><hr /><br />
		<div class="content1">
			<h3 > Add Staff Details</h3><br />
			
			<?php
				if(isset($_POST["submit"]))
				{
					$sq="insert into staff(tname,tpass,qual,sal) values ('{$_POST["sname"]}',1234,'{$_POST["qual"]}','{$_POST["sal"]}')";
					
					if($db->query($sq))
					{
						echo "<div class='success'>Insert Success..</div>";
					}
					else
					{
						echo "<div class='error'>Insert failed..</div>";
					}
				}
			?>
			
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?> ">
				<label>Staff name</label><br />
				<input type="text" name="sname" required class="input" /><br /><br />
				<label>Qualification</label><br />
				<input type="text" name="qual" required class="input" /><br />
				<label>Salary</label><br />
				<input type="text" name="sal" required class="input" /><br />
				<button type="submit" class="btn" name="submit">Add Staff Details</button>
			</form>
		</div>
	</div>
			<?php include"footer.php";?>
</body>
</html>
