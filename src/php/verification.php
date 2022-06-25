<?php
require 'connect.php';
if (isset($_POST['register']) && $_POST['register'] == 'Register') {
    if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password'])) && !empty($_POST['password']) && (isset($_POST['cpassword'])) && (!empty($_POST['cpassword']))) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if ($password != $cpassword) {
            $error = 'Passwords are different !';
            echo $error;
            echo "<br /><a href=\"login.php\">Log in</a>";
            exit();
        }
        else {
            $connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB);
            if (!$connect) { 
                echo "Connection failed\n";
                exit;
            }
            mysqli_select_db($connect, DB);
            print "Connection to database succeed";
            echo "<br/>";
            $sql = 'SELECT count(*) FROM users WHERE email="'.mysqli_real_escape_string($connect, $_POST['email']).'"';
            $req = mysqli_query($connect, $sql) or die('SQL error !<br />'.$sql.'<br />'.mysqli_error($connect));
            $data = mysqli_fetch_array($req);
            if ($data[0] == 0){
                $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
                mysqli_query($connect, $sql) or die('SQL error !<br />'.$sql.'<br />'.mysqli_error($connect));
                $error = 'Registration succeed !';
                echo $error;
                echo "<br /><a href=\"login.php\">Log in</a>";
                exit();
            }
            else {
                $error = 'Registration failed !<br />Mail adress already exists !';
                echo $error;
                echo "<br /><a href=\"login.php\">Log in</a>";
                exit();
            }
        }
    }
    else {
        $error = 'Registration failed !<br />A field is empty !';
        echo $error;
        echo "<br /><a href=\"login.php\">Log in</a>";
        exit();
    }
}
?>