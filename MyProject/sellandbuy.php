<?php 
session_start();
?>
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trade</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
    function SubForm() {
        $.ajax({
            url: "https://api.apispreadsheets.com/data/20532/",
            type: "post",
            data: $("#myForm").serializeArray(),
            success: function() {
                alert("Data Collected Successfully !!")
            },
            error: function() {
                alert("Data Collected Successfully !!")
            }
        });
    }
    </script>
</head>
<link rel="stylesheet" href="style.css">
<link rel="Shortcut Icon" href="sort.jpg">
<style>
.entbody {
    height: 2100px;
}

.header1 {
    margin-top: -5%;
}

footer {
    text-align: center;
    color: black;
    background-color: rgba(255, 255, 255, 0.8);
}

.pdiv {
    text-align: center;
    padding-top: 197px;
    color: black;
}

span {
    font-family: bold;
    font-size: 15px;
}

#closec {
    display: none;
    border: none;
    background-color: transparent;
    width: 10%;
    height: 2%;
    font-size: 40px;
    margin-bottom: 2%;
}

#chartopen {
    cursor: pointer;
    font-size: 15px;
    border: 2px solid grey;
    width: 19%;
    height: 2%;
    border-radius: 6px;
    background-color: grey;
    color: black;
    transition: 0.8s;
}

#chartopen:hover {
    background-color: white;
    color: black;
}

.form {
    width: 50%;
    margin-left: 20%;
    border: 2px solid gray;
}

.subm {
    cursor: pointer;
    font-size: 22px;
    margin-top: -10%;
    background-color: rgba(0, 0, 0, 0.5);
    color: black;
    border: 2px solid grey;
    border-radius: 5px;
    transition: 0.8s;
    margin-top: 10%;
}

.subm:hover {
    background-color: transparent;
    color: black;
    transition: 0.8s;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}

@media screen and (min-width:650px) {

    #myForm {
        background-color: white;
        color: black;
        height: 650px;
        width: 70%;
        border: 2px solid grey;
        border-radius: 9px;
    }

    input {
        overflow: hidden;
        color: black;
    }
}
</style>

<body>

    <div class="entbody">
        <header class="header">

            <a class="a11" style="background-color: transparent; color: transparent;" href="homepage.php"><img
                    src="IMG_7145.png"></a>
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
                <button onclick="darkmode()"
                    style="float: right; margin-top: 7px; margin-left: 10px; border-radius: 6px; color: white; background-color: black; height: 30px; width: 35px;">&#9775;</button>
                <script>
                function darkmode() {
                    var element = document.body;
                    element.classList.toggle("dark-mode");
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
        </header>
        <br><br>
        <br><br>
        <br><br>
        <div class="header1">
            <h2>Modus operandi</h2>
        </div>
        <br>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Warning!</strong> Do not send below 50USD worth of coin or it may lead to loss of asset.
        </div>

        <h2><strong>Copy Wallet address</strong></h2>
        <p class="para">Copy our wallet address carefully, and then transfer your coins from the correct wallet address;
            for example Doge coin can only be sent into our Doge wallet address.<br><br></p>
        <center>
            <label>Select Wallet:</label>
            <select>
                <option><label>BTC: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
                <option><label>ETH: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
                <option><label>BNB: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
                <option><label>ADA: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
                <option><label>DOT: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
                <option><label>LINK: </label>15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R</option>
            </select>
        </center>
        <center><label>BTC</label>
            15ZtRE9QRUJTAnNcBzPbk4iA5LCBRRzS1R
        </center>
        <h2><strong>Input Details</strong></h2>
        <p class="para">Supply all necessary required information in the exchange form and place your order</p>
        <br><br>
        <h2><strong>Receive payment</strong></h2><br>
        <p class="para">After authentication of your order, we pay the equivalent amount requested to your bank account
            but we charge 10% on any transaction involving the conversion of one coin to another.</p><br>
        <center>
            <form method="POST" id="myForm" style="background-color: whitesmoke; height: 800px; margin-top: 7%;">
                <label>Title</label>
                <br>
                <br>
                <select required style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                    <option>Select</option>
                    <option>Mr</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                    <option>Prof</option>
                </select>
                <br>
                <br>
                <label>First Name</label>
                <br>
                <input name="first-name" type="text" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Last Name</label>
                <br>
                <input name="sec-name" type="text" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Email Address</label>
                <br>
                <input name="email" type="email" name="email" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Phone Number</label>
                <input name="phone-number" type="number" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Bank Acct No</label>
                <input name="acct-num" type="number" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Bank Name</label>
                <input name="bank" type="text" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Coin Amount</label>
                <input name="amount" type="number" min="50" placeholder="Minimun of $50" required
                    style="width: 100%; border: none; border-bottom: 2px solid grey; border-radius: 5px;">
                <br><br>
                <label>Upload Screenshot</label>
                <br><br>
                <input name="screenshot" type="file" required>
                <br><br>
                <input type="checkbox" required> <label>I agreee with the Terms and conditions</label>
                <br><br>
                <button class="subm" onclick='SubForm()'>Submit</button>
            </form>
        </center>
        <br><br>
        <button onclick="CloseChart()" id="closec">&times;</button>
        <iframe src="chart.html" style="width: 0; height: 0;" id="cht">
        </iframe>
        <button onclick="chart()" id="chartopen">Open Chart </button>
        <script>
        function chart() {
            document.getElementById("cht").style.width = "100%";
            document.getElementById("cht").style.height = "25%";
            document.getElementById("closec").style.display = "block";
            document.getElementById("chartopen").style.display = "none";
        }

        function CloseChart() {
            document.getElementById("cht").style.width = "0";
            document.getElementById("cht").style.height = "0";
            document.getElementById("closec").style.display = "none";
            document.getElementById("chartopen").style.display = "block";
        }
        </script>


        <button onclick="window.print()">
            Print Screenshot
        </button>
    </div>
    </div>
    <div>
        <footer class="footer">
            CarpEx &copy; Copyright 2021. All Rights Reserved
        </footer>
    </div>
</body>

</html>