<?php
$GLOBALS["v"] = 1;
$pagePhp = basename($_SERVER['PHP_SELF'])
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Objetos perdidos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css" rel="stylesheet"/>
</head>

<body <?= ($pagePhp == 'login.php' || 'newuser.php') ? ' class="bodyLoginPage"' : ''?>>