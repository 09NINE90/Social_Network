<?php
session_start();
include_once "config.php";

$newPass = mysqli_real_escape_string($conn, $_POST['newpassword']);
$repPass = mysqli_real_escape_string($conn, $_POST['reppassword']);

if ($newPass === $repPass) {
    $encrypt_pass = password_hash($repPass, PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE datauser SET pass = '$encrypt_pass' WHERE email = '{$_SESSION['email']}'");
    echo "success";
} else {
    echo "Пароли не совпадают!";
}
