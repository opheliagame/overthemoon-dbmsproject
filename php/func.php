<?php
session_start();
$con=mysqli_connect("localhost","root","","OVERTHEMOON");
if(isset($_POST['login_submit']))
{
	$username=$_POST['admin'];
	$password=$_POST['password'];
	$query="SELECT * from USERS where UNAME='$username' and UPASSWORD='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		//$_SESSION['username']=$admin;
		header("Location:../index.php");
	}
	else
  echo "<script>alert('wrong input')</script>";
		 //header("Location:login.html");
}



if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sql="INSERT INTO USERS (UNAME,UPASSWORD,UEMAIL,UPHONE) VALUES ('$username','$password','$email','$phone')";
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
