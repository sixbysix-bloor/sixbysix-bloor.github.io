<?php
// Grab recaptcha library
require_once "recaptchalib.php";

// Secret key
$secret = "6LdOrCUTAAAAAOkAoTj8_qW2HXJ_ELxNkRFTby0G";
// Empty response
$response = null;
// Check secret key
$reCaptcha = new ReCaptcha($secret);

// If submitted, check response
if ($_POST["g-recaptcha-response"]) {
  $response = $reCaptcha->verifyResponse (
    $_SERVER["REMOTE_ADDR"],
    $_POST["g-recaptcha-response"]
  );
}

// Define variables and set to empty values
$nameErr = $emailErr = $subjectErr = "";
$name = $email = $subject = "";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = 'From: Example';
$to = 'alexander.bloor@gmail.com';

$body = "From: $name\n E-mail: $email\n Message:\n $message";

if ($_POST['submit']) {
  if ($response != null && $response->success) {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting a message!";
  }

/*  if (mail ($to, $subject, $body, $from))
  {
    echo '<p>Your message has been sent!</p>';
  }
  else
  {
    echo '<p>Something went wrong. Go back and try again!</p>';
  }*/
}

/*
// If we try to submit an email, check that everything is okay
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check the name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  // Check the email address
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  // Check the subject
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if subject only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
      $subjectErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
?>