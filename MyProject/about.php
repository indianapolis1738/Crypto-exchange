<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Shortcut Icon" href="sort.jpg">
</head>
<style>
    .entbody{
        height: 1200px;
    }
    .header1{
        margin-top: 1%;
    }
    @media screen and (max-width:600px) {
        .entbody{
            height: 900px;
        }
        .header1{
            margin-top: 30px;
        }
    }
</style>

<body>
    <div class="entbody">
       <header class="header">

            <a class="a11" style="background-color: transparent; color: transparent;" href="homepage.php"><img src="IMG_7145.png"></a>
             <nav>
        
        <div id="open" class="open1">
        
            <ul>
                <li><a href="javascript:void(0)" class="closebtn1" onclick="closeNav()">
                        &times;
                    </a></li>
                    <li><a href="sellandbuy.html">Sell/convert</a></li>
                        <li><a href="Rates.html">Rates</a> </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="calculator.html">Calculator</a></li>
                        <li><a href="**">Signals</a></li>
            </ul>
        </div>
                  <button onclick="darkmode()" style="float: right; margin-top: 7px; margin-left: 10px; border-radius: 6px; background-color: black; color: white; height: 30px; width: 35px;"> &#9775;</button>
    <script>
    function darkmode() {
        var element = document.body; element.classList.toggle("dark-mode");
        document.getElementById("indi");
    }
    </script>
        <span style="font-size: 30px; cursor: pointer;" onclick="openNav()" id="open11">&#9776;</span>
        <script>
            function openNav() {
                document.getElementById("open").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("open").style.width = "0";
            }
        </script>
    </nav>
        </header><br>
        <br><br><br><br><br>
        <div class="header1">
            <h2>About</h2>
        </div>
        <div class="pdiv">
            <p>Carp Exchange enables you to seamlessly convert your crypto currencies to your preferred local currency.</p><br>
            <p>Buy and sell your crypto currency of choice using your local currency and likewise convert one coin to another.</p>
            <br>
            <p>Makes the transaction easy, delightful and safe for you.
            </p>
        </div>
    </div><br>
    <footer class="footer">
        CarpEx &copy; Copyright 2021. All Rights Reserved
    </footer>
</body></html>