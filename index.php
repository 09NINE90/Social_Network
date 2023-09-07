<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Регистрация</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <input type="text" name="fname" placeholder="Введите имя" required>
                    </div>
                    <div class="field input">
                        <input type="text" name="lname" placeholder="Введите фамилию" required>
                    </div>
                </div>
                <div class="field input">
                    <input type="text" name="email" placeholder="Введите email" required>
                </div>
                <div class="field input">
                    <input type="password" name="password" placeholder="Введите пароль" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Зарегестрироваться">
                </div>
            </form>
            <div class="link">Уже зарегестрированы? <a href="login.php">Войти</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>