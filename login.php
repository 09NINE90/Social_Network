<?php 
  session_start();
  if(isset($_SESSION['rand_id'])){
    header("location: user.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Вход</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <input type="text" name="email" placeholder="Введите ваш email" required>
        </div>
        <div class="field input">
          <input type="password" name="password" placeholder="Введите ваш пароль" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Войти">
        </div>
      </form>
      <div class="link">Нет учетной записи? <a href="index.php">Созать сейчас</a></div>
      <div class="link"><a href="fogot-password.php">Забыли пароль?</a></div>

    </section>
  </div>
  
  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>

</body>
</html>