 <!-- //<?php
   // session_start();
   // if(!isset($_SESSION['user']))
   //     header('location:landingPage.html');
    
   // $servername="localhost";
   // $username="root";
   // $password="";
   // $database_name="network";
               
   // $conn = new mysqli('localhost','root','','network');
   // if ($conn -> connect_errno) {
   //     echo "Failed to connect to MySQL: " . $conn -> connect_error;
   //     exit();
   // }

   // $username = $_SESSION['username'];
   // $sql = "SELECT * FROM posts WHERE username = '$username' DESC";
   // $result = mysqli_query($conn,$sql);        
?> -->
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="pro.css">
        <link rel="stylesheet" href="master.css">
        <script src = "make_post-modal.js"></script>
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
            <div class="leftside-bar">
                <div class="menu">
                    <ul>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="profile_page.php">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                    <a href="post_maker.php" type= "button" id = "make_posts" class = "cta">Post</a>
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

                $sql = "SELECT * FROM posts ORDER BY post_id DESC";
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
         <div class="rightside-bar">
            <div class="events">
                <h2>Events</h2>
                <ul>
                    <li><a href="#">Generic CPA Event #1</a></li>
                    <li><a href="#">Generic CPA Event #2</a></li>
                    <li><a href="#">Generic IEDC Event #1</a></li>
                    <li><a href="#">Generic IEDC Event #2</a></li>
                    <li><a href="#">Generic ISE Event #1</a></li>
                </ul>
            </div>
        </div>
    </div> 
    <div class="bg_modal" id = "bg-modal">
        <div class="modal-content">
            <div class="close" id = "close">+</div>
            <img src="./images/avatar.png" alt="">
            <form action="">
                <textarea name="post-content" id="" cols="30" rows="10" placeholder="Put down your thoughts!"></textarea>
                <a href="" type="button" class = "cta">Post</a>
            </form>
        </div>
    </div>

</body>
</html>