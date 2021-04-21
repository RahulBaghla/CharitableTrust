<?php 
include_once("db.php");
if (isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * from volunteer where email='$email'";
	$result = mysqli_query($conn,$query);
	if ($row=mysqli_fetch_assoc($result))
	{
		$db_password = $row['password'];
		
		if($password != $db_password)
		{
			?>
			<script type="text/javascript">
                alert("Password is Incorrect");
                window.location.href = "start.php"; 
            </script>
            <?php
		}	
		else
		{
			header("location:login.php");
			$_SESSION['email']=$email;
		}
	}
	else
	{
		/*echo "<script>alert('Email or Password is incorrect')</script>";*/
		?>
		<script type="text/javascript">
                alert("Email is Incorrect");
                window.location.href = "start.php"; 
        </script>
        <?php
	}
}		
 ?>