<?php
if(isset($_POST["entry"]))
{
    $conn=mysqli_connect("localhost","root","","contact");
    $name=$_POST["t1"];
    $email=$_POST["t2"];
    $subject=$_POST["t3"];
    $msg=$_POST["t4"];
    $sql="insert into data(name,email,subject,message) values('$name','$email','$subject','$msg')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Data Stored In The Database')</script>";
    }
    else
    {
        echo "Something Went Wrong"."<br>";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--AsMilkyway--</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script>
    function showmenu() {
        navlink.style.right = "0";
        document.getElementById(navlink).innerHTML
    }
    function hidemenu() {
        navlink.style.right = "-200px";
        document.getElementById(navlink).innerHTML
    }
</script>

<body>

    <!-- Start Home -->
    <section class="header">
    <video autoplay muted loop plays-inline class="back-video">
            <source src="image/Milky Way Galaxy non copyright video 2020.mp4" type="video/mp4">
        </video>
        <nav>
            <a href="index.html"><img src="image/20221025_180647.png" alt=""></a>
            <div class="nav-link" id="navlink">
                <i class="fa fa-times-circle-o" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="#index">Home</a></li>
                    <li><a href="#About">Services</a></li>
                    <li><a href="#service">Team</a>
                    </li>
                    <li><a href="#Categories">Categories</a></li>
                    <li><a href="#Contact">Contact Us</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>

        <div class="textbox">
            <h1>Welcome to <br>
                <span> AS Milkyway</span>
            </h1>
            <p>Innumerable knowledge planted in clusters. Dive in to get insightful <br> blogs or drop us an email to
                get a blog written by us for you.</p>
            <a href="" class="hero-btn">Click for Home....</a>
        </div>

        <div class="navlink">
            <ul>
                <li><a href="https://twitter.com/as_milkyway?t=SGHekqwfTrcvthreCVRUoA&s=08" target="_blank"><i
                            class="fa fa-twitter"></i></a></li>
                <li><a href="https://t.me/asmilkyway" target="_blank"><i class="fa fa-telegram"></i></a></li>
                <li><a href="https://asmilkyway.quora.com/" target="_blank"><i class="fa fa-quora"></i></a></li>
                <li><a href="https://instagram.com/as.milkyway?igshid=YmMyMTA2M2Y=" target="_blank"><i
                            class="fa fa-instagram"></i></a></li>
                            <li><a href="https://youtube.com/@asmilkyway" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Home -->

    <!-- Start Service -->
    <section class="Service" id="service">
        <nav>
            <div class="head">
                <h1>Services</h1>
            </div>
        </nav>
        <div class="row">
            <div class="p2">
                <img src="image/Blog.jpg" alt="">
                <div class="layer">
                    <h1>BLOG</h1>
                </div>
            </div>
            <div class="p3">
                <img src="image/content.jpeg" alt="">
                <div class="layer">
                    <h1>CONTENT</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End service -->

    <!-- Start Categories -->
    <section class="Categories" id="Categories">
        <nav>
            <div class="head">
                <h1>Categories</h1>
            </div>
        </nav>
    </section>
    <!-- End Categories -->

    <!-- Start About Us -->
    <section class="About" id="About">
        <nav>
            <div class="head">
                <h1>Team</h1>
            </div>
        </nav>
        <div class="row">
            <div class="p1">
                <img src="image/Akash.JPG" alt=""><br>
                <h1>Akash Kumar Jha</h1>
                <p>“Ecstatic Love is an ocean, and the Milky Way is a flake of foam floating on it.” ~ Rumi <br>

                    Explore the universe of unique blogs that would be helpful for everyone regardless their background.
                    You would be choosing us over others once you be a part of As Milkyway Family.</p>
            </div>
            <div class="p1">
                <img src="image/sneha.jpg" alt="">
                <h1>Sneha Kumari</h1>
                <p>We are all stars in this galaxy. All of us. No one is greater than other. - Scotman Crothers

                    We have put a lot of efforts and sweat to make this blog worth you so that you enjoy you every
                    minute in here.</p>
            </div>
            <div class="p1">
                <img src="image/gourav.JPG" alt="">
                <h1>Gourav roy</h1>
                <p>“We all travel the Milky Way together, trees and men.” ~ John Muir

                    I hope that you dive in our blog and forget the world. I hope it makes you feel that you are in a
                    Milkyway.
                </p>
            </div>
        </div>
    </section>
    <!-- End About Us-->

    <!-- Start Contact -->
    <section class="contact" id="Contact">
        <nav>
            <div class="head">
                <h1>#Let's_Talk</h1>
                <p>LEAVE A MESSAGE. We love to hear from you!</p>
            </div>
        </nav>

        <section id="contact-detail" class="section-p1">
            <form action="kch.php" method="POST">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you...</h2>
                <input type="text" placeholder="Your Name" name="t1">
                <input type="text" placeholder="E-mail" name="t2">
                <input type="text" placeholder="Subject" name="t3">
                <textarea cols="30" rows="10" placeholder="Your Message" name="t4"></textarea>
                <button type="submit" class="btn btn-primary" name="entry">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="image/Akash.JPG" alt="">
                    <p><span>Akash Kumar Jha</span> Content Creator</p>
                </div>
                <div>
                    <img src="image/sneha.jpg" alt="">
                    <p><span>Sneha Kumari</span> Blog Writer</p>
                </div>
                <div>
                    <img src="image/gourav.JPG" alt="">
                    <p><span>Gourav Roy</span> Researcher</p>
                </div>
            </div>
        </section>
    </section>
    <!-- End Contact -->
</body>

</html>