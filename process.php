

<?php
if (isset($_POST['submit'])) {

    require 'database.php';

    $email = $_POST['email'];
}
$sql =  "INSERT INTO users (email) VALUES ('$email')";


    