<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['rand_id'])) {
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
    <section class="site">
        <form action="php/out.php">
            <header>Моя страница</header>
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM datauser WHERE rand_id = {$_SESSION['rand_id']}");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="details">
                <span>Добро пожаловать! <?php echo $row['fname'] . " " . $row['lname'] ?></span>
            </div>
            <input type="submit" name="button" value="Выход">
        </form>
    </section>
    </div>

    <script src="js/user.js"></script>

</body>

</html>