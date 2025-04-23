<?php
session_start();
 
// Check if the username and password are correct
if($_POST["username"]=="supermanager" && $_POST["password"]=="1000") {
   // Set a session variable to indicate that the user is logged in
   $_SESSION["loggedin"] = true;
   
   // Redirect the user to the next page
   header("Location: next_page.php");
   exit;
} else {
   // If the username and password are incorrect, show an error message
   echo "Incorrect username or password";
}
?>
