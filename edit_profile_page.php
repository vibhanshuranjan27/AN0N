<?php
                session_start();
                     $servername="localhost";
                     $username="root";
                     $password="";
                     $database_name="network";
                     //$og_password=$_POST['og_password'];
                     //$ch_password=$_POST['ch_username'];
                     $post_content=$_POST['post_content'];
                     
                     $conn = new mysqli('localhost','root','','network');
                     if(isset($_POST['submit'])){
                     $sql="UPDATE login SET description = '".$post_content."' WHERE username='".$_SESSION['user']."'";
                     $result= mysqli_query($conn,$sql);
                     header("Location: profile_page.php");
                    }
            //pass = '".$ch_password."',
            ?>

