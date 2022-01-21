<?php
	session_start();
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
	$stmt='';
	$conn='';
	

	//database connection
	$conn = new mysqli('localhost','root','','network');
	
	if(isset($_POST["submit"])){
		$sql="SELECT * FROM login WHERE username='".$username."' and pass ='".$pass."'"; 
		$query=mysqli_query($conn,$sql);
		$numrows=mysqli_num_rows($query);  
    	echo $numrows;
    	if($numrows!=0)  
    	{  
   			 while($row=mysqli_fetch_assoc($query))  
   			 {  
   				 $dbusername=$row['username'];  
   				 echo $dbusername;
   				 $dbpassword=$row['pass'];
   				 echo $dbpassword;  
    		}  
  
    		if($username == $dbusername )  
    		{  
    			header('Location: landingPage.html');
    		}
    	}
    	else{
				$stmt=$conn->prepare("insert into login(fname, lname, username, clgemail, usn, pass, re_pass ) values(?,?,?,?,?,?,?)");
				$stmt->bind_param("sssssss",$fname,$lname,$username,$clgemail,$USN,$pass,$re_pass);
				//$_SESSION['variable']
				//$stmt->execute();
            	header('Location: home_page.html');
        //}
       		}
       	}
       

				//$stmt->close();
				//$conn->close();
  
	//}
?>