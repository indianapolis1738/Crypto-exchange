<!doctypehtml>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rates</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="Shortcut Icon" href="sort.jpg">
<style>
    .entbody{
        height: 1200px;
    }
    .header1{
        margin-top: 1%;
    }
    table {
        width: 100%;
        height: 300px;
        border: 1px solid black;
    }

    td {
        text-align: center;
    }

    .t {
        background-color: #4CAF50;
        color: black;
        height: 30%;
    }

    .row:hover {
        background-color: #f5f5f5;
    }

    footer {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.8);
        color: black;
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
                  <button onclick="darkmode()" style="float: right; margin-top: 7px; margin-left: 10px; border-radius: 6px; background-color: black; color: white; height: 30px; width: 35px;">&#9775;</button>
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
        <br><br><br><br><script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,eos,ethereum,litecoin,ripple,binancecoin" currency="usd" background-color="#171616" locale="en" font-color="#f5f5f5"></coingecko-coin-price-marquee-widget><br><br><br><br><br>
        <div class="header1">
            
            <h2>Exchange Rates</h2>
        </div>
        <br><br>
        <table>
            <thead class="t">
                <td>
                    <h4>Coin</h4>
                </td>
                <td>
                    <h4>Value</h4>
                </td>
                <td>
                    <h4>USD</h4>
                </td>
            </thead>
            <br>
            <tr class="row">
                <td>Bitcoin</td>
                <td>475</td>
                <td>$1</td>
            </tr>
            <br>
            <tr class="row">
                <td>Ethereum</td>
                <td>472</td>
                <td>$1</td>
            </tr>
            <br>
            <tr class="row">
                <td>DogeCoin</td>
                <td>471</td>
                <td>$1</td>
            </tr>
            <br>
            <tr class="row">
                <td>BNB</td>
                <td>475</td>
                <td>$1</td>
            </tr>
            <br>
            <tr class="row">
                <td>CAKE</td>
                <td>472</td>
                <td>$1</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <div>
        <footer class="footer">
            CarpEx &copy; Copyright 2021. All Rights Reserved
        </footer>
    </div>
</body></html>