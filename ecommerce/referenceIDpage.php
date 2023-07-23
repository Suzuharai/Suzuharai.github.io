<?php
    include("database.php");

    if(isset($_POST['submit'])){
        $refID = $_POST['referenceID'];
        $car = $_POST['car'];
        $price = $_POST['price'];
        $carcolor = $_POST['color'];
        $quantity = $_POST['carquantity'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $cardtype = $_POST['cardtype'];
        $cardnumber = $_POST['cardID'];

        $query = "INSERT INTO orderlist(ID, carname, carcolor, price, quantity, firstname, lastname, age, email, address, paymentmethod, paymentID) VALUES('$refID', '$car', '$carcolor', '$price', '$quantity', '$firstname', '$lastname', '$age', '$email', '$address', '$cardtype', '$cardnumber')";
        mysqli_query($conn, $query);

        //PHP Database Part: To fetch data with full accuracy, copy the first 28 characters of the hashed reference ID
        //so that you can identify the unique orders from a single customer
        }
        else{
            header("Location: http://localhost/ecommerce/orderpage.php");
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Entry-level Luxury Car, High-end Luxury Car, Automatic Transmission Sports Car, Prestigious Sports Coupe, Most Expensive Car, Top Class Luxury Car">
    <link rel="stylesheet" href="referencestyle.css">
    <title>R&M Luxury Cars</title>
</head>
<body>
    <header>
        <h1 id="rnm">R&M</h1>
        <a href="index.php">Back to Homepage</a>
    </header>
    <h1>Thank you for purchasing!</h1>
    <hr>
    <p id="reference"><?php echo"Your Reference ID: ";
       echo $_POST['referenceID'];?>
       <span><br><br><strong>Please copy or take a screenshot of your Reference ID</strong></span>
       <span><br><strong>It will be used to verify the authenticity of your order in case of concerns</strong></span></p>
    <p id="contactus">Please do not hesitate to contact us
       <span><br><strong>Telephone: 02-XXXX-YYYY</strong></span>
       <span><br><strong>Mobile Number: (+63)9XXXXXXXXX</strong></span>
    </p>
</body>
</html>