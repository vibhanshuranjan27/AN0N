<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="network";

	$fname=$_POST['fname'];
	//echo $fname;
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$clgemail=$_POST['clgemail'];
	$USN=$_POST['usn'];
	$pass=$_POST['pass'];
	$re_pass=$_POST['re_pass'];
	//$log_user=$_POST['log_user'];
	//$log_pass=$_POST['log_pass'];

	//database connection
	$conn = new mysqli('localhost','root','','network');
	//if($conn->connect_error){
	//	die('Connection Failed :',$conn->connect_error);
	//}
	//else{
		$stmt=$conn->prepare("insert into login(fname, lname, username, clgemail, usn, pass, re_pass ) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssss",$fname,$lname,$username,$clgemail,$USN,$pass,$re_pass);
		//$stmt=$conn->prepare("insert into register(username, pass) values(?,?)");
		//$stmt->bind_param("ss",$log_user,$log_pass);
		$stmt->execute();
		//echo $execval;
		//echo "registration successful...";
	

    	if(isset($_POST['submit']))
   		 {
            header('Location: home_page.html');
        }
        	$stmt->close();
		$conn->close();
  
	//}
?>