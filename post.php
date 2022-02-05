<?php
                session_start();
                $servername="localhost";
                $username="root";
                $password="";
                $database_name="network";

                $user=$_SESSION['user'];
                $postcontent=$_POST['post_content'];
                $conn = new mysqli('localhost','root','','network');
                if ($conn -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $conn -> connect_error;
                    exit();
                }
                if(isset($_POST["POST"])){
                $sql = "INSERT INTO posts(`desc`,`tim_e`,`username`) VALUES('$postcontent',CURRENT_TIMESTAMP,'$user')";
                $result= mysqli_query($conn,$sql);
                if($result)
                    {
                        //$_SESSION['user']=$username;
                        //echo "yep";
                        header('Location: home_page.php');
                }
                else{
                    echo "FUCK OFF";
                }
            }
    
                ?>