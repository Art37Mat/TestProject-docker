<?php 
require_once 'db.php';
require_once 'class.php';
$connect = new db();
$db=$connect->connect_pdo();
$info = new info($db);
$stmt = $info->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>TestPage</title>
</head>
<body>
    <div class="container">
        <a href="#" class="button open-popup">Оставить заявку</a>
    </div>
    <div class="popup-bg">
        <div class="popup">
            <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo " <h1>$aboutme</h1>";}
            ?>
            <form action="">
                <input value="Закрыть" type="submit">
            </form>
        </div>
    </div>

<script src="assets/jquery.min.js"></script>
<script src="assets/popup.js"></script>
</body>
</html>