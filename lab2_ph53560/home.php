<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

echo "Xin chào, " . $_SESSION['user'] . "!";
?>
<a href="logout.php">Đăng xuất</a>

<?php
setcookie('user', $_SESSION['user'], time() + 180);
?>