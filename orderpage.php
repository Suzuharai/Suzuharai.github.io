<?php
    $carname = $_POST['carname'];
    $carcode = $_POST['carcode'];
    $carprice = $_POST['carprice'];
    $referenceID = password_hash(rand(), PASSWORD_DEFAULT);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Entry-level Luxury Car, High-end Luxury Car, Automatic Transmission Sports Car, Prestigious Sports Coupe, Most Expensive Car, Top Class Luxury Car">
    <link rel="stylesheet" href="orderpagestyle.css">
    <title>R&M Luxury Cars</title>
</head>
<body>
    <header>
        <h1 id="rnm">R&M</h1>
        <a href="shop.php">Go back to shop</a>
    </header>
    <p id="banner">Order Form</h1>
        <form method="POST" action="referenceIDpage.php">
            <div>
                <p class="billbanner"><span><strong>Enter your personal details</strong></span></p>
                    <input class="hidden" type="text" name="car" value=<?php echo"$carcode"?>>
                    <input class="hidden" type="text" name="referenceID" value=<?php echo"$referenceID"?>>
                    <input type="text" name="firstname" placeholder="First Name (no spaces)" required>
                    <input type="text" name="surname" placeholder="Surname (no spaces)" required>
                    <input type="number" name="age" placeholder="Age" min="21" max="101" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" name="address" placeholder="Home Address" required>
                        <hr>
                <p class="billbanner"><span><strong>Car details</strong></span></p>
                <p id="selectedcar">Selected Car: <?php echo"$carname"?></p>
                    <select name="color" id="color">
                        <option value="Black">Black</option>
                        <option value="Blue">Blue</option>
                        <option value="Red">Red</option>
                        <option value="Gray">Gray</option>
                    </select>
                <p id="carprice">Price: <?php echo"$$carprice"?></p>
                    <input class="hidden" type="text" name="price" value=<?php echo"$carprice"?>>
                    <input type="number" name="carquantity" placeholder="Quantity" required>
            </div>
            <div>
                <p class="billbanner"><span><strong>Payment Information</strong></span></p>
                    <select name="cardtype">
                        <option value="Landbank">Landbank</option>
                        <option value="Bancnet">Bancnet</option>
                        <option value="BPI">Bank of the Philippine Islands</option>
                        <option value="Chinabank">Chinabank</option>
                        <option value="Landbank">Metrobank</option>
                        <option value="Bancnet">Unionbank</option>
                        <option value="BPI">Bank of Commerce</option>
                        <option value="Chinabank">Philippine National Bank</option>
                        <option value="COD">Other: Cash on Delivery</option>
                    </select>
                    <input type="text" name="cardID" placeholder="Card # (Type 'COD' for Cash on Delivery)" requried>

                    <div class="cardpicType">
                        <p class="billbanner"><span><strong>We accept these types of cards</strong></span>
                        <div class="cardpicRows">
                            <img class="cardpics" src="images/BankCardImages/Slide1.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide2.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide3.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide4.PNG">
                        </div>
                        <div class="cardpicRows">
                            <img class="cardpics" src="images/BankCardImages/Slide5.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide6.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide7.PNG">
                            <img class="cardpics" src="images/BankCardImages/Slide8.PNG">
                        </div>

                    </div>
            </div>
                <input id="submit" type="submit" name="submit">
        </form>
</body>
</html>