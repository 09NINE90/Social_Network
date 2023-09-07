<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT * FROM datauser WHERE email = '{$email}'");
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*_=+-]).{8,12}$/', $password)){
                if (mysqli_num_rows($sql) > 0) {
                echo "$email - Этот email уже используется!";
            } else {
                $rand_id = rand(time(), 100000000);
                $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
                $insert_query = mysqli_query($conn, "INSERT INTO datauser (rand_id, lname, fname, email, pass) VALUES ('$rand_id', '$lname','$fname', '$email', '$encrypt_pass')");
                if ($insert_query) {
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM datauser WHERE email = '$email'");
                    if (mysqli_num_rows($select_sql2) > 0) {
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['rand_id'] = $result['rand_id'];
                        echo "success";
                    } else {
                        echo "This email address not Exist!";
                    }
                } else {
                    echo "Что-то пошло не так. Попробуйте еше раз!";
                }
            }
            }else{
                echo "Простой пароль!";
            }
            
        } else {
            echo "$email неправильный email!";
        }
    } else {
    echo "Все поля должны быть заполнены!";
}
