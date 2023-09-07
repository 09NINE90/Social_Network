<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form mail">
      <header>Восстановление пароля</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="code-text"></div>
        <div class="field input">
          <input type="text" class="email" name="email" placeholder="Введите ваш email" required>
          <input type="text" class="code" name="code" placeholder="Введите код" required>
        </div>
        <div class="field button">
          <input type="submit" class="send-code" name="submit" value="Отправить код">
          <input type="submit" class="confirm" name="submit" value="Подтвердить">
        </div>
      </form>
      <div class="link"><a href="login.php">Назад</a></div>
    </section>
  </div>
  
  <script src="js/fogot-password.js"></script>

</body>
</html>