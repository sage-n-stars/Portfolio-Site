<?php

// Get Incoming data

$last = $_POST['last'];
if(!isset($last)){
    $last = $_GET['last'];
}

$first = $_POST['first'];
if(!isset($first)){
    $first = $_GET['first'];
}

$email = $_POST['email'];
if(!isset($email)){
    $email = $_GET['email'];
}

$message = $_POST['message'];
if(!isset($message)){
    $message = $_GET['message'];
}

// Test for complete incoming data

if (isset($last) && isset($first) && isset($email) && isset($message)){
    $confirm = '<div style="position:relative; top: 200px; width: 99%"><div style="width: 50%; margin: auto; padding: 25px; text-align: center; border: 2px solid black; border-radius: 10px; background-color: #7c606c; color: #fcfbf7; font-family: arial; font-size: 40px;">  Thanks ' . $first . ' ' . $last . ' your message has been sent. </div></div>';
}else{    
    $confirm = '<div style="position:relative; top: 200px; width: 99%"><div style="width: 50%; margin: auto; padding: 25px; text-align: center; border: 2px solid black; border-radius: 10px; background-color: #7c606c; color: #fcfbf7; font-family: arial; font-size: 40px;">  Looks like an error occurred!<br>Please try again later.</div></div>';
}
    
// Send result
echo $confirm;

?>