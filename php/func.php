<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['login_submit']))
{
	$username=$_POST['admin'];
	$password=$_POST['password'];
	$query="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		//$_SESSION['username']=$admin;
		header("Location:main.html");
	}
	else
  echo "<script>alert('wrong input')</script>";
		 //header("Location:login.html");
}


$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sql="INSERT INTO signin (username,password,email,phone) VALUES ('$username','$password','$email','$phone')";
  if (mysqli_query($con, $sql))
	{
      echo "New record created successfully";
            }
						else
						{
               echo "Error: " . $sql . "" . mysqli_error($con);
            }
          }


?>
