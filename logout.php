<!--Εδω κλεινουμε το session ωστε ο χρηστης να μην ειναι συνδεδεμενος πλεον-->
<?php
session_start();
session_destroy();
header("location:login.php");
?>

