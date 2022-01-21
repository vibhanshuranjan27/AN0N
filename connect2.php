<?php
session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="network";
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$_SESSION['login']=$user
	//$_SESSION['id']=$num['id'];
	//database connection
	$conn = new mysqli('localhost','root','','network');
	//$conn = new mysqli('localhost','root','','network');
	if(isset($_POST["login"])){
		$sql="SELECT * FROM login WHERE username='".$user."' and pass ='".$pass."'"; 
		$query=mysqli_query($conn,$sql);      
		//".$user."' and pass='".$pass."'");  
		//echo $query;
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
  
    		if($user == $dbusername && $pass == $dbpassword)  
    		{  
    			//session_start();  
    			$_SESSION['user']=$user;  
  	    		/* Redirect browser */  
    			header("Location: home_page.html");  
    		}  
    		else{
    			echo "invalid user";
    		}
    	}
     	else {  
    		echo "Invalid username or password!";  
    	}
    }  

  
		$conn->close();
	//}
?>