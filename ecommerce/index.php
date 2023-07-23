<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Entry-level Luxury Car, High-end Luxury Car, Automatic Transmission Sports Car, Prestigious Sports Coupe, Most Expensive Car, Top Class Luxury Car">
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <title>R&M Luxury Cars</title>
</head>
<body>
    <!--Navigation Container - Navigation bar is fixed in position when scrolling-->
    <div style="background-image: url(images/HomeImages/MercedesIndexPage.jpg)" class="navigationcontainer">
        <div class="navigationbar">
            <h1 id="rnm">R&M</h1>
            <nav>
                <a class="navcontents" href="#rnm" title="Home">Home</a>
                <a class="navcontents" href="#about" title="About Us">About Us</a>
                <a class="navcontents" href="#media" title="Media">Media</a>
                <a class="navcontents" href="#services" title="Services">Services</a>
                <a class="navcontents" href="shop.php" title="Shop">Shop</a>
            </nav>
        </div>

        <div class="slogan">
            <img id="shoplogo" src="images/Logo/shoplogo.png" alt="R&M">
            <h1 id="phrase">Bold, Classy, and Luxuriously Daring</h1>
        </div>
    </div>
    <!--About Container - Describes our company-->
    <div id="about">
        <div style="background-image: url(images/AboutImages/AboutBG.jpg);" id="aboutcontent">
            <h1 id="aboutus">|About Us</h1>
            <p id="abouttext">
            Welcome to R&M Luxury Cars, where elegance meets performance. We specialize in offering an exclusive collection of meticulously crafted, high-end automobiles. With a passion for automotive excellence, we curate the finest selection of luxury cars that redefine sophistication and exhiliration. Elevate your driving experience and indulge in the epitome of automotive luxury with R&M Luxury Cars.
            </p>
        </div>
    <!--A container of the side picture for About Section-->    
        <div style="background-image: url(images/AboutImages/AboutBG2.jpg);" id="aboutsidepic">
        </div>
    </div>
    <!--Media Container - Display our company's contact platforms-->
    <div id="media">
            <div class="titlecontainer">
                <h1 id="contactus">Contact Us</h1>
            </div>
            <div style="background-image: url(images/MediaImages/MediaBG/facebookBG.jpg);" id="mediacontainer">
                <!--Media Link redirect to R&M Official Facebook Page-->
                <div id="facebookcontainer">
                        <h1 class="medianames">Facebook</h1>
                        <img class="medialogo" src="images/MediaImages/facebook.png" alt="R&M Official Facebook Page">
                        <a class="medialink" target="_blank" href="https://www.facebook.com/profile.php?id=100095058758662" title="This link will redirect you to our official social media platform">Visit Now</a>
                </div>

                <!--Media Link redirect to R&M Official Facebook Page-->
                <div style="background-image: url(images/MediaImages/MediaBG/twitterBG.jpg);" id="twittercontainer">
                    <h1 class="medianames">Twitter</h1>
                    <img class="medialogo" src="images/MediaImages/twitter.png" alt="R&M Official Twitter Page">
                    <a class="medialink" target="_blank" href="https://twitter.com/R_MCarDealers" title="This link will redirect you to our official social media platform">Visit Now</a>
                </div>

                <!--Media Link redirect to R&M Official Facebook Page-->
                <div style="background-image: url(images/MediaImages/MediaBG/instagramBG.jpg);" id="instagramcontainer">
                    <h1 class="medianames">Instagram</h1>
                    <img class="medialogo" src="images/MediaImages/instagram.png" alt="R&M Official Instagram Page">
                    <a class="medialink" target="_blank" href="https://www.instagram.com/renkun_1330/" title="This link will redirect you to our official social media platform">Visit Now</a>
                </div>
            </div>
    </div>
    <!--Services Container - Display our company's offered services-->
    <div id="services">
        <div class="titlecontainer">
            <h1 id="offers">Our Services</h1>
        </div>
        <!--Offers Container for easy division and webpage design plan-->
        <div class="offercontainer">
            <div class="offercontent">
                <img class="offericon" src="images/ServicesImages/notification.PNG" alt="Online Updates">
                <h2 class="offertitle">Online Updates</h2>
                <p class="offerdescription">Rev up your ride with online updates and stay in the fast lane of R&M's car dealership. Follow us on Facebook, Instagram, and Twitter for the latest automotive trends and irresistible deals.</p>
            </div>

            <div class="offercontent">
                <img class="offericon" src="images/ServicesImages/customerservice.PNG" alt="Customer Services">
                <h2 class="offertitle">Customer Services</h2>
                <p class="offerdescription">Unleash extraordinary customer service at your fingertips. Reach us effortlessly via email and across social media platforms for personalized support, timely solutions, and a seamless connection that goes beyond expectations.</p>
            </div>
        </div>
        <div class="offercontainer">
            <div class="offercontent">
                <img class="offericon" src="images/ServicesImages/maintenance.PNG" alt="Repair and Maintenance">
                <h2 class="offertitle">Repair and Maintenance</h2>
                <p class="offerdescription">Revive your vehicle's performance with confidence. Experience expert repair and maintenance backed by a 1-year guarantee. Contact us via email or our social medias for reliable service, exceptional care, and peace of mind.</p>
            </div>

            <div class="offercontent">
                <img class="offericon" src="images/ServicesImages/customization.PNG" alt="Stock Parts Installation and Customization">
                <h2 class="offertitle">Stock Parts Installation and Customization</h2>
                <p class="offerdescription">Embark on a journey of stock mastery and customized excellence. Stay connected and explore the realm of installation and customization via email and our dynamic social media platforms. Immerse yourself in a world of curated options, expert guidance, and unparalleled craftsmanship that sets your desires in motion.</p>
            </div>
        </div>
    </div>

    <!--Viewport resolution resize/responsive guide
    <div id="random">
    </div>
    -->
</body>
</html>