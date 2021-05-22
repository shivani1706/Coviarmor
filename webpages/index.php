<?php
session_start();
if(!$_SESSION['auth']){
    header('location:login.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

<style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
           background-color: rgb(155, 167, 170);
           margin: 0;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #4CAF50;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        h1 {
            text-align: center;
        }

        .icons {
            display: flex;
            justify-content: center;
            
        }

        .icon {
            background-color: rgb(182, 168, 168);
            margin: 1rem 1rem;
            padding: 1rem 1rem;
            border-radius: 10px;
        }

        .side-effect {
            text-align: center;
        }

        .register {
            text-align: center;
            font-size: 1.5rem;
            border-radius: 0.8rem;
            cursor: pointer;
            padding: 0.5rem 0.8rem;
            margin: 1rem auto;
            border: 2px solid black;
            text-decoration: none;
            background-color: rgba(180, 138, 99, 0.5);
           
        }
        a {
            text-decoration: none;
           
        }    
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: flex;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        #infection, #reports{
        display: flex;
        color: white;
        text-align: center;
        padding: 14px 16px;
        background-color: #333;
        text-decoration: none;
        }

        li a:hover:not(.act) {
        background-color: #111;
        }

        .act {
        background-color: #4CAF50;
        }

        li {
        border-right: 1px solid #bbb;
        }

        li:last-child {
        border-right: none;
        }
        .covirise{
        text-decoration: none;
        text-align: center;
        color: white;
        
        }
                
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><div>
                <form action="http://localhost/project/webpages/infection.php" method="POST" class="form">
                    <input type="submit" name="infection" id="infection" value="Infection" >
                </form>
            </div>
        </li>
        <li><div>
                <form action="http://localhost/project/webpages/report.php" method="POST" class="form">
                    <input type="submit" name="reports" id="reports" value="Reports">
                </form>
            </div>    
        </li>
        <li><a href="cowin2.html">Cowin</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="symptoms.html">Symptoms</a></li>
        <li><a href="mychart.html">Covid-Rise</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>

    </ul>
    
    <div class="slideshow-container">
    <h1 style="text-align: center;">Welcome to Coviarmour</h1>
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../assets/BANNER1.jpeg" style="width:100%">
            <div class="text">PANDEMIC IS NOT OVER YET. BE SAFE. BE HOPEFUL.</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../assets/BANNER2.jpeg" style="width:100%">
            <div class="text">STAY HOME, STAY SAFE</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="../assets/BANNER3.jpeg" style="width:100%">
            <div class="text">FOLLOW SOCIAL DISTANCING</div>
        </div>


    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    <h1>FREQUENTLY ASKED QUESTIONS</h1>
    <div class="icons">
        <div class="icon">
            <a href="Aboutvaccine.html">
                <h2>ABOUT VACCINE</h2>
            </a>
        </div>
        <div class="icon">
            <a href="whowillget.html">
                <h2>WHO WILL GET THE VACCINE?</h2>
            </a>
        </div>
        <div class="icon">
            <a href="howvaccinated.html">
                <h2>HOW WILL WE BE VACCINATED?</h2>
            </a>
        </div>
    </div>
    <div class="icons">
        <div class="icon">
            <a href="BeforeVaccination.html">
                <h2>WHAT TO EXPECT BEFORE VACCINE?</h2>
            </a>
        </div>
        <div class="icon">
            <a href="AfterVaccination.html">
                <h2>WHAT TO EXPECT AFTER VACCINE?</h2>
            </a>
        </div>
        <div class="icon">
            <a href="Aboutcovid.html">
                <h2>ALL ABOUT COVID</h2>
            </a>
        </div>
    </div><br><br>
    
    <a href="cowin2.html"><input class="register" type="button" value="REGISTER FOR VACCINE"></a>
    <br><br><br><br>

    <div class="side-effect">
        <img src="../assets/side effect.jpeg">
    </div>
</body>
</html>


