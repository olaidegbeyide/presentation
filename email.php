<html>
<body>

Your email address is: <?php echo $_POST["email"]; ?>



<?php 
if(isset($_POST['email'])){
    $to = $_POST['email']; // this is your Email address
    $from = $_POST['1vibenation@gmail.com']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you , we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

</body>
</html>