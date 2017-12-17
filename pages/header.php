<!doctype html>
<html lang="en">
  <head>
        <title>TICK THE TASK</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sticky-footer-styles.css" rel="stylesheet">
  </head>
<body>
<div class="container">
        <div class="jumbotron" align="center">
            <h1>TICK THE TASK</h1>
            <p>Introducing the easiest way to get stuff done!</p>
        </div>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
 if(key_exists('userID',$_SESSION)) {
    include 'authenticated_menu.php';
    } else {

    include 'loginForm.php';
    }
    ?>