<?php
session_start();
session_regenerate_id();

$_SESSION['message'] = 'セッションに保存した値です';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample27</title>
</head>
<body>
    <a href="page02.php">2ページ目へ</a>
</body>
</html>