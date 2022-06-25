<? session_start(); ?>

<!DOCTYPE html>
<html>      
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' type='text/css' href='/minizoo/src/css/style.css' media='all'>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/minizoo/src/js/function.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@700&display=swap" rel="stylesheet">
        <script src="/minizoo/src/js/tickets.js"></script>
        <link rel="icon" href="/minizoo/src/img//logo/logo_gris.png" type="image/x-icon" >

        <title> MiniZoo </title>
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@700&display=swap');
    </style>

    <body>
        <script>
            function affMail() { $(document).ready(function(){ var email= $( "#mail" ).val(); alert(email); }); }
        </script>
        <header>
            <div>
                <a href="/minizoo/index.php">
                    <img src="/minizoo/src/img/logo/logo_blanc_ffffff.svg" alt="logo" class="logo">
                </a>
            </div><br>
            <ul class="menu">
                <li><a href="/minizoo/zoo.php">The Zoo</a></li>
                <li><a href="/minizoo/infos.php">Practical information</a></li>
                <li><a href="/minizoo/eshop.php">E-shop</a></li>
                <li><a href='/minizoo/src/php/login.php'>Account</a></li>
            </ul>
        </header>