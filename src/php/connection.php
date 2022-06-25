<?php
require 'connect.php';

if (isset($_POST['login']) && $_POST['login'] == 'Login') {
    if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password'])) && (!empty($_POST['password']))) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB);
        if (!$connect) { 
            echo "Connection failed\n";
            exit;
        }
        mysqli_select_db($connect, DB);
        print "Connection to database succeed";
        echo "<br/>";
        $sql = "SELECT count(*) FROM users WHERE email='$email' AND password='$password'";
        $req = mysqli_query($connect, $sql) or die('SQL error !<br />'.$sql.'<br />'.mysqli_error($connect));
        $data = mysqli_fetch_array($req);
        mysqli_free_result($req);
        mysqli_close($connect);
        if ($data[0] == 1) {
            session_start();
            $_SESSION['email'] = $email;
            header('Location: account.php');
            exit();
        }
        elseif ($data[0] == 0){
            $error = 'Invalid mail adress or password !';
            echo $error;
            echo "<br /><a href=\"login.php\">Log in</a>";
            exit();
        }
        else {
            $error = 'Multiple occurrences of email address and password !';
            echo $error;
            echo "<br /><a href=\"login.php\">Log in</a>";
            exit();
        }
    }
    else {
        $error = 'Input error !<br />A field is empty !';
        echo $error;
        echo "<br /><a href=\"login.php\">Log in</a>";
        exit();
    }
}
?>
