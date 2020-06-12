<?php 
    if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($fname) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $from = "$email";
            $to = "info@realstatecomp.com";
            $subject = "New Message";
            $author = 'From: ' . $fname . ', ' . $email;
            $message = htmlspecialchars($message);
            mail($to, $subject, $author, $message, $from);
            echo "<script>alert('Thank you for reaching out to us. We will contact you shortly.');</script>";
        }
    }
    include('db.php');
 }
?>

