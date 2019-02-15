<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_NAME', 'Faq_Demo');

/* Attempt to connect to MySQL database */
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: could not connect. " . $e->getMessage());
}
// Flash Messages
function flash_messages()
{
    if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success! </strong> <?=$_SESSION['success']?>
        </div>
   <?php }
   unset($_SESSION['success']);
   if (isset($_SESSION['error'])) { ?>
       <div class="alert alert-danger in">
           <a href="#" class="close" data-dismiss="alert">&times;</a>
           <strong>Error! </strong> <?=$_SESSION['error']?>
       </div>
   <?php }
   unset($_SESSION['error']);
}
?>