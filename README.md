[Web Domain Demonstration]
-To access our website using github's domain, type this url into your browser tab: https://suzuharai.github.io/index.html

NOTE: The provided link is NOT CONNECTED to our database and therefore all transferred values are set to null. In the order form, all submitted information won't be reflected in our database. To connect our website to PHP's MySQL Database, you need to follow the steps below.

[Front-end data collection with database to store the collected information]
PREREQUISITES: Visual Studio Code and XAMPP Control Panel must be already installed in your computer
Visual Studio Code Official Website: https://code.visualstudio.com/
XAMPP Official Website: https://www.apachefriends.org/

STEP 1: Follow the steps in this YouTube video to configure both Visual Studio Code, PHP, and XAMPP.

https://www.youtube.com/watch?v=zZ6vybT1HQs&t=137s
[TIMESTAMP: 00:02:18 - 00:11:12]

Step 2: Access XAMPP's htdocs folder and create a new folder named "ecommerce"
The new folder should have the address: C:\xampp\htdocs\ecommerce

STEP 3: Download our repository
  1. Access our repository using this link: https://github.com/Suzuharai/Suzuharai.github.io
  2. Press the "Code" drop down button and download the zip file
  ![image](https://github.com/Suzuharai/Suzuharai.github.io/assets/139205851/8e5c83d4-3f0a-4c6f-907c-3effde6c63d5)
  3. Extract the zip to XAMPP's htdocs folder under ecommerce folder.
     Usually located in: C:\xampp\htdocs\ecommerce

STEP 4: Open Visual Studio Code
  1. After opening your VS Code, select file (upper left corner) and press open folder.
  2. After pressing "open folder", locate the ecommerce folder
     Usually located in:  C:\xampp\htdocs
  3. After locating the ecommerce folder, select/press/click it.

STEP 5: Open XAMPP
  1. After opening your XAMPP Control Panel, press the start buttons of Apache and MySQL
  2. Press MySQL Admin Button

STEP 6: After pressing the admin button
  1. Create new database in PHPMyAdmin Page located in the left panel of the screen
  2. Name the database "ecommerce" and add new table named "orderlist"
  3. In the table, add 13 columns
  4. The column names should be: ID (with type varchar 50), carname (with type varchar 30), carcolor (with type varchar 20), price (with type int 11), quantity (with type int 11), firstname (with type varchar 30), lastname (with type varchar 30), age (with type int 11), email (with type varchar 30), address (with type text), paymentmethod (with type varchar 20), paymentID (with type varchar 40), orderdate (with type datetime set to current_stamp() )

STEP 7: In your browser
  1. Type: http://localhost/ecommerce/index.php
NOTE: Never exit XAMPP Control Panel when the localhost index page is still running in your browser.
