<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "www/start.php";  // Подключаем базовые файлы и функции

// Получаем данные из формы
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

// Проверяем данные пользователя
if (checkUser($email, $password)) {
    // Успешный вход
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    echo "User exists and password is correct!";
    header("Location: index1.php");  // Перенаправляем на страницу после входа
    exit;
} else {
    // Ошибка авторизации
    echo "Incorrect email or password.";
    $_SESSION["error_auth"] = 1;  // Сессия для ошибки входа
    header("Location: " . $_SERVER["HTTP_REFERER"]); // Возвращаем на страницу авторизации
    exit;
}
?>
