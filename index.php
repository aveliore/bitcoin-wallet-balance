<!doctype html> 
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Check Bitcoin Wallet Balance | BWB</title> 
        <meta name="description" content="Check the balance of any bitcoin wallet."
        <link rel="canonical" href="https://bitcoinwalletbalance.com">
        <link rel="alternate icon" href="./media/favicon.png">
        <meta property="og:locale" content="en_EN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Check Bitcoin Wallet Balance | BWB" />
        <meta property="og:description" content="Check the balance of any bitcoin wallet" />
        <meta property="og:url" content="https://bitcoinwalletbalance.com" />
        <meta property="og:site_name" content="Bitcoin Wallet Balance" />
        <link rel="icon" href="#">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    </head>
    <body> 
        <header>
            <p class="logo">BWB | bitcoinwalletbalance.com</p>
            <p class="headerTitle">Check Bitcoin wallet balance</p>
            <p class="headerSubtitle">Input the address of a Bitcoin wallet into the field below and press Enter to check it's current balance. </p>
        </header>
        <main>
                <input type="text" id="bwa" class="bwa" name="bwa" autofocus autocomplete="off" placeholder="Input Bitcoin wallet address here"> 
                <center><input type="submit" id="addressCheckButton" class="addressCheckButton" type="submit" onclick="getAddress()" value="Check this wallet"></center>
                <script>
                    function getAddress() {
                        var input = document.getElementById("bwa").value;
                        printBalance(input)
                        alert(input);
                    }

                    function printBalance(input) {
                    fetch("https://blockchain.info/q/addressbalance/" + input)
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(json) {
                        var input = parseInt(json, 10);
                        document.getElementById("btc-address").innerHTML = btcAddress;
                        document.getElementById("btc-balance").innerHTML = btcBalance / 100000000;
                    });
                    }
                </script>
                <p>The balance for <span id="btc-address"></span> is <span id="btc-balance"></span> BTC.</p>
                <?php include 'php/balancechecker.php';?>
        </main>
        <footer>
            <p class="footerLinks">Popular BTC wallets list | How it works | Donate us &hearts;</p>
        </footer>
    </body>
    </html>