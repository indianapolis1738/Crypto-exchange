<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Calculator
    </title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="Shortcut Icon" href="sort.jpg">
<style>
    .entbody {
        height: 1800px;
    }

    .header1 {
        margin-top: 5%;
    }

    .form1 {
        border: 0;
    }

    #num1 {
        margin-left: 30%;
        width: 90px;
        height: 50px;
        border: 2px solid burlywood;
        border-bottom: 4px solid burlywood;
        box-shadow: 2px 2px burlywood;
    }

    #num2 {
        margin-left: 30%;
        width: 90px;
        height: 50px;
        border: 2px solid burlywood;
        border-bottom: 4px solid burlywood;
        box-shadow: 2px 2px burlywood;
    }

    #text {
        margin-left: 30%;
        width: 90px;
        height: 50px;
        border: 2px solid burlywood;
        border-bottom: 4px solid burlywood;
        box-shadow: 2px 2px burlywood;
    }

    #but1 {
        width: 60px;
        height: 40px;
        border: 2px solid burlywood;
        border-bottom: 4px solid grey;
        box-shadow: 2px 2px burlywood;
    }

    #but2 {
        width: 60px;
        height: 40px;
        border: 2px solid burlywood;
        border-bottom: 4px solid grey;
        box-shadow: 2px 2px burlywood;
    }

    #but3 {
        width: 60px;
        height: 40px;
        border: 2px solid burlywood;
        border-bottom: 4px solid grey;
        box-shadow: 2px 2px burlywood;
    }

    #but4 {
        width: 60px;
        height: 40px;
        border: 2px solid burlywood;
        border-bottom: 4px solid grey;
        box-shadow: 2px 2px burlywood;
    }

    .formm {
        margin-top: 10%;
    }

    .thirty {
        width: 30%;
    }

    .seventy {
        width: 70%;
        margin-left: 30%;
        margin-top: -20%;
        display: block;
    }

    @media screen and (max-width:600px) {
        .entbody {
            height: 800px;
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
                <button onclick="darkmode()" style="float: right; margin-top: 7px; margin-left: 10px; border-radius: 6px; color: white; background-color: black; height: 30px; width: 35px;">&#9775;</button>
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
        <div class="maq">
            <marquee class="mm">
                Naira=480/$ for bulk coin, 470/$ for mini coin
            </marquee>
        </div>
        <div class="header1">
            <h2>Calculate Transaction</h2>
        </div>
        <div class="formm">
            <div class="thirty">
                <input type="number" id="num1" name="number" placeholder="Coin Value"><br><br>
                <input type="number" id="num2" name="number1" placeholder="Rate">
                <br><br> <input type="number" id="text" name="number1" placeholder="Payment" disabled><br>
            </div>
            <div class="seventy">
                <br>
                <button type="button" id="but1" onclick="myfunction();">Add</button>
                <button type="button" id="but2" onclick="myfunctions();">Multiply</button>
                <button type="button" id="but3" onclick="myfunctionss();">Divide</button>
                <button type="button" id="but4" onclick="minus()">Minus</button>
            </div>
        </div>
        <script>
            function myfunction() {
                var x = parseInt(document.getElementById("num1").value);
                var y = parseInt(document.getElementById("num2").value);
                var z = x + y;
                document.getElementById("text").value = z;
            }

            function myfunctions() {
                var x = parseInt(document.getElementById("num1").value);
                var y = parseInt(document.getElementById("num2").value);
                var multiply = x * y;
                document.getElementById("text").value = multiply;
            }

            function myfunctionss() {
                var x = parseInt(document.getElementById("num1").value);
                var y = parseInt(document.getElementById("num2").value);
                var divide = x / y;
                document.getElementById("text").value = divide;
            }

            function minus() {
                var x = parseInt(document.getElementById("num1").value);
                var y = parseInt(document.getElementById("num2").value);
                var minus = x - y;
                document.getElementById("text").value = minus;
            }
        </script>
    </div>
    <li>
       
    </li>
    <footer class="footer">
        CarpEx &copy; Copyright 2021. All Rights Reserved
    </footer>
</body></html>
