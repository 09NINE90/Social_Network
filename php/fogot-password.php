<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
if (!empty($email)) {
    $sql = mysqli_query($conn, "SELECT * FROM datauser WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email'] = $email;
            echo "success";
        } else {
            echo "Email не верный!";
        }
    } else {
        echo "$email - Такого email не существует!";
    }
} else {
    echo "Все поля должны быть заполнены!";
}
