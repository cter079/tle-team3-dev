<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <meta charset="UTF-8"> 

    <title>BANKOE Bankieren</title> 

    <link rel="stylesheet" type="text/css" href="main.css"/> 

    <link rel="shortcut icon" type="image/x-icon" href="img/bankoe-favicon.png"/> 

</head> 

<body> 

<div class="wrapper"> 

    <div class="device"> 

        <div class="screen"></div> 

        <div class="btn-volume btn-volume-up"></div> 

        <div class="btn-volume btn-volume-down"></div> 

        <div class="btn-power"> 

            <div class="btn-power-act"></div> 

        </div> 

        <div class="header"> 

            <div class="detector"></div> 

            <div class="camera"></div> 

        </div> 

        <div class="display"> 

            <nav> 

                <h1>Request</h1> 

            </nav> 

            <div class="amount2"> 

                <form> 

                    <label for="money">€</label> 

                    <input type="number" id="money" name="amount"> 

                </form> 

            </div> 

            <div class="submit-btn"> 

                <a href="bankoe"><button class="submit">Share</button></a> 

            </div> 

            <div class="cancel-btn"> 

                <a href="bankoe"><button class="submit">Cancel</button></a> 

            </div> 

        </div> 

        <div class="footer"> 

            <div class="btn-burger"></div> 

            <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div> 

            <div class="btn-back"></div> 

        </div> 

    </div> 

</div> 

</div> 

</body> 

</html> 