<?php
$input_login ="";
$input_pass = "";

$error_login = "";
$error_pass = "";

function check($login, $pass)
{   $flag = false;
    $users = array("Vlada" => "me", "Andrey" => "1234", "Lina" => "qwerty");
    foreach ($users as $user => $user_count) {
        if($user == $login && $user_count == $pass){
            $flag = true;
        }
    }
    return $flag;
}

if (isset($_POST['submit'])) {
    $input_login = $_POST['login'];
    $input_pass = $_POST['pass'];
    echo 'Handler button was pressed!<br><br>';

    $login = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];

    if (check($input_login, $input_pass)) {
        setcookie("login", $login);
        setcookie("pass", $pass);
        echo "Hello, $input_login!<br>";
        echo "<br><a href=index.php></a><br>";
    } else if ($_POST['login'] == '') {
        $error_login .= 'Login is empty!';
        require "form.php";
    } else if ($_POST['pass'] == '') {
        $error_pass .= 'Password is empty!';
        require "form.php";
    } else {
        echo "Wrong login or password";
        require "form.php";
    }
}
