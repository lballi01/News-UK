<?php


session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leonidas' News</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="dropdown.js"></script>
<body>
    <nav class="nav">
        <div class="nav-info">
            <div class="title">
            <h1 class="nav-title">Leonidas' News</h1>
            </div>
            <div class="nav-access">
            <?php
            if (isset($_SESSION["userid"])) {
                echo '<a href="0">' . $_SESSION["useruid"] . '</a>';
                echo '<a href="includes/Logout.php">LOGOUT</a>';      
            }
            else {
                echo '<a href="index.php">Home</a>';
                echo '<a href="index.php">Sign In</a>';
                echo '<a href="frontend/Register.php" class="sub">Subscribe</a>';
              
                
        }
            ?>
            </div>
        </div>
        <div class="nav-categories">
        <ul>
            <li><a href="index.php">Markets</a></li>
            <li><a href="index.php">Economics</a></li>
            <div class="dropdown">
            <li><a href="about.php">Industries</a></li>
            <div class="dropdown-content">
            <p>Finance</p>
            <p>Manufacture</p>
            </div>
            </div>
            <li><a href="contact.php">Tech</a></li>
            <li><a href="news.php">Politics</a></li>
            <li><a href="contact.php">Sports</a></li>
            <li><a href="contact.php">Enviroment</a></li>
        </ul>
    </div>
    </nav>

    <section>
        <div class="market-rates">
        <div class="dropdown-click">
            <button onclick="myFunction()" class="dropbtn">Top Securities</button>
            <div id="myDropdown" class="dropdown-click-content">
                <a href="#">Top Commodities</a>
                <a href="#">Top Stock Markets</a>
               
            </div>
            </div>
            <ul>
                <li><a><h3>S&P 500 <span style="color:red">5,573.23 <span></h3></a></li>
                <li><a><h3>S&P 500 <span style="color:red">5,573.23<span></h3></a></li>
                <li><a><h3>S&P 500 <span style="color:green">5,573.23<span></h3></a></li>
                <li><a><h3>S&P 500 <span style="color:red">5,573.23<span></h3></a></li>
                <li><a><h3>S&P 500 <span style="color:green">5,573.23<span></h3></a></li>
                <li><a><h3>S&P 500 <span style="color:green">5,573.23<span></h3></a></li>
            </ul>
        
        </div>

        <div class="news">
        <div class="main-news">

        <div class="news-main">
        <div class="news-img">
        <img src="https://fastly.picsum.photos/id/122/4147/2756.jpg?hmac=-B_1uAvYufznhjeA9xSSAJjqt07XrVzDWCf5VDNX0pQ" alt="">
        </div>
        <div class="news-text">
            <h1>Title</h1>
            <p>This is some random text about the image that is taking the form of a placeholder </p>
        </div>
        </div> 
        <div class="news-main">
        <div class="news-img">
        <img src="https://fastly.picsum.photos/id/122/4147/2756.jpg?hmac=-B_1uAvYufznhjeA9xSSAJjqt07XrVzDWCf5VDNX0pQ" alt="">
        </div>
        <div class="news-text">
            <h1>Title</h1>
            <p>This is some random text about the image that is taking the form of a placeholder </p>
        </div>
        </div> 
        </div>

        <div class="side-news">
         
        <div class="news-side"><h1>Sign Up to the Newsletter</h1></div> 
        <div class="news-side"><h1>Latest News</h1></div> 
        <div class="news-side"><h1>Podcast Section</h1></div> 
        </div>
        </div>

        <div class="news-bycondition">
            <h1>Most Liked</h1>
            <div class="news-row">
                <div class="news card">News 1</div>
                <div class="news card">News 2</div>
                <div class="news card">News 1</div>
                <div class="news card">News 2</div>
            </div>
        </div>

        
    <section>
</body>
</html>