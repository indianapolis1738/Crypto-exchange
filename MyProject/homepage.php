<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Homepage
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="Shortcut Icon" href="sort.jpg">
</head>
<style>
    *{
        box-sizing: border-box;
    }
    .form-container textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    resize: none;
    min-height: 200px;
  }
  .form-container textarea:focus {
    background-color: #ddd;
    outline: none;
  }
  .form-container .btn {
    background-color: green;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }
  
 
  .form-container .cancel {
    background-color: red;
  }
  
  
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
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
                        <li><a href="sellandbuy.php">Sell/convert</a></li>
                        <li><a href="Rates.php">Rates</a> </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="calculator.php">Calculator</a></li>
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
        <div class="maq">
            <marquee class="mm">
                Check in daily for crypto signals and update....
            </marquee>
        </div>
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,eos,ethereum,litecoin,ripple,binancecoin" currency="usd" background-color="#171616" locale="en" font-color="#f5f5f5"></coingecko-coin-price-marquee-widget>
        <div>
        <img src="map3.png" class="map">
        </div>
        <div class="header11">
            <div class="header1">
                <h2>Carp Exchange</h2>
            </div>
        </div>
        <section class="sec">
            <p class="p">Carp Exchange enables you to seamlessly convert your crypto currencies to your preferred local currency,<br>
                <br>
                Buy the crypto currency of choice using your local currency and likewise convert one coin to another.
            </p>
            <p class="p">Carp Exchange makes the transaction easy, delightful and safe for you.</p>
        </section><br><br><br>

        <div class="imgdiv">
            <div class="secure">
                <img src="gg1.png" class="img1">
                <p class="p1">Secure and Reliable</p>
            </div>
            <div class="accessible">
                <img src="gg2.png" class="img2">
                <p class="p2">Accessible</p>
            </div>
            <div class="fast">
                <img src="gg3.png" class="img3">
                <p class="p3">Fast and Swift Payment</p>
            </div>

            <div class="details">
                <img src="gg4.png" class="img4">
                <p class="p4">Details Kept<br> Safe</p>
            </div>
        </div>
        <center><h3 style="margin-top: -35%; border-radius: 10%; border: 3px solid black; width: 50%; margin-left: 0%;"><center>CRYPTO NEWS</center></h3>
    </div>
    </center>
    <br>
    <center>
    <iframe src="news-widget.html" style="width: 70%; height: 200px; margin-top: -25%; border: 3px solid bisque; border-radius: 9px;"></iframe>
    </center>
    <button style="background-color: bisque; border-radius: 10px; border: 2px solid black; font-size: 20px; width: 15%; color: black;" class="loglog" onclick="openForm()">Chat Admin</button>

<div style="display: none; position: fixed;
    bottom: 0; right: 15px; border: 3px solid #f1f1f1; z-index: 9; " class="chat-popup" id="myForm">
  <form class="form-container" style="max-width: 300px; padding: 10px; background-color: white;">
    <h3>Chat with</h3><br><h2>Admin</h2>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <br><br><br>
    
    <footer class="footer">
        CarpEx &copy; Copyright 2021. All Rights Reserved
    </footer>
</body>

</html>
