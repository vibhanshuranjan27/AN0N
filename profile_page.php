<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <div class="banner">
        <div class="nav-bar">
            <div class="logo">
                <a href="#"><img src="./images/Anon-logos_white.png"></a>
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="home_page.php">Home</a></li>
                    <li><a href="communities_page.html">Communities</a></li>
                    <li><a href="landingPage.html">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="left-sidebar">
            <div class="image-div">
                <img src="./images/avatar.png" alt="">
            </div>
            <div class="personal-info">
                <?php
                    session_start();
                     $servername="localhost";
                     $username="root";
                     $password="";
                     $database_name="network";
                     //$_SESSION['login'];
                     //$_SESSION['id'];
                     $conn = new mysqli('localhost','root','','network');
                     $sql="SELECT * FROM login WHERE username='".$_SESSION['user']."'";
                     //echo $_SESSION['user'];
                     $query=mysqli_query($conn,$sql);
                     $numrows=mysqli_num_rows($query);  
                     //echo $numrows;
                     if($numrows!=0)  
                     {  
                        while($row=mysqli_fetch_assoc($query))  
                         {  
                        $dbusername=$row['username'];  
                       // echo $dbusername;
                        $dbdescp=$row['description'];
                       // echo $dbdescp;
                       // echo $dbusername;
                       // $dbpassword=$row['pass'];
                       // echo $dbpassword;  
                        }  
                    }
                ?>
                <center style='color: white'><h1><?php echo $dbusername?></h1></center>
                <p><?php echo $dbdescp?>

                </p>
            </div>
            <div class="edit-button">
                <a href="edit_profile_page.html" type= "button" id = "edit-info" class = "cta">Edit</a>
            </div>
        </div>
        <div class='main-page'>
            <?php
                session_start();
                if(!isset($_SESSION['user']))
                header('location:landingPage.html');
    
                $servername="localhost";
                $username="root";
                $password="";
                $database_name="network";
                $conn = new mysqli('localhost','root','','network');
                if ($conn -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $conn -> connect_error;
                    exit();
                }

                $sql = "SELECT * FROM posts WHERE username='".$_SESSION['user']."' ORDER BY post_id ASC";
                $result = mysqli_query($conn,$sql);
            
                while($row = mysqli_fetch_array($result)){
                $post_id = $row['post_id'];
                $username = $row['username'];
                $time = $row['tim_e'];
                $desc = $row['desc'];
                $likes = $row['likes'];
                $comments = $row['comments'];
                echo "  
                <div class='post'>
                            <div class='post-top'>
                                <img src='/images/avatar.png' alt=''>
                                <h3>$username</h3>
                                <p>$time</p>
                            </div>
                            <div class='post-bottom'>
                                <p>$desc</p>
                            </div>
                            <div class='post-options'>
                                <div class='post-option'>
                                <img src='https://img.icons8.com/external-flatart-icons-outline-flatarticons/50/000000/external-like-instagram-flatart-icons-outline-flatarticons.png' alt=''>
                                </div>
                                <div class='post-option'>
                                    <img src='https://img.icons8.com/carbon-copy/100/000000/comments.png'/>
                                </div>
                                <div class='post-option'>
                                    <img src='https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-share-interface-kiranshastry-solid-kiranshastry-1.png'//>
                                </div>
                            </div>
                    </div>";
            }
        ?>
        </div>
        
        <div class="right-sidebar">
            <!-- <div class="my-stats">
                <h1>Your Stats</h1>
                <ul>
                    <li>Posts: 214</li>
                    <li>Likes: 1896</li>
                    <li>Contacts: 32</li>
                    <li>Communities: 2</li>
                </ul>
            </div> -->
        </div>
    </div>
</body>
</html>