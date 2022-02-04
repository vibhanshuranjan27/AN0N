<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="posts.css">
</head>
<body>
    <div class="container">
        <div class="post-section">
            <a href="home_page.php" class = 'close'>+</a>
            <img src="./images/avatar.png" alt="">
            <form action="post.php" method="post">
                <textarea name="post_content" id="" cols="30" rows="10" placeholder="What's Up? (Use 200 Characters)"></textarea>
                <input type="submit" class = "cta" name = "POST">
                
            </form>
        </div>
    </div>
</body>
</html>
