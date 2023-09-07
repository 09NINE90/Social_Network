<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM datauser WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = password_hash($password, PASSWORD_DEFAULT);
            $enc_pass = $row['pass'];
            if(password_verify($password, $enc_pass)){
                $_SESSION['rand_id'] = $row['rand_id'];
                echo "success";
            }else{
                echo  "Email или Пароль не верны!";
            }
        }else{
            echo "$email - Такого email не существует!";
        }
    }else{
        echo "Все поля должны быть заполнены!";
    }
?>