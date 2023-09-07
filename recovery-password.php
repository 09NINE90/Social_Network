<?php include_once "header.php"; ?>
<div class="wrapper">
    <section class="form password">
      <header>Восстановление пароля</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <input type="password" name="newpassword" placeholder="Введите новый пароль" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
        </div>
        <div class="field input">
          <input type="password" name="reppassword" placeholder="Повторите пароль" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Подтвердить">
        </div>
      </form>
    </section>
  </div>

  <script src="js/recovery-password.js"></script>

</body>
</html>