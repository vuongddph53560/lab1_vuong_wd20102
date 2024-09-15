<?php
session_start();
$users = [
    'abc@gmail.com' => '123@123ab'
];

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($users[$email]) && $users[$email] === $password) {
    $_SESSION['user'] = $email;
    header('Location: home.php');
    exit();
} else {
    header('Location: index.php?error=1');
    exit();
}