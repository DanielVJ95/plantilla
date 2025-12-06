<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// demo usuario temporal
$demoUser = 'admin';
$demoPass = '1234';

if ($username === $demoUser && $password === $demoPass) {
    $_SESSION['user'] = ['username' => $username, 'fullname' => 'Administrador'];
    session_regenerate_id(true);
    header('Location: dashboard.php'); // después
    exit;
}

// si falla, se redirige con mensaje
header('Location: login.php?error=' . urlencode('Usuario o contraseña incorrectos'));
exit;