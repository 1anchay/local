<?php
session_start();  // Начинаем сессию

// Удаляем данные сессии
unset($_SESSION["email"]);
unset($_SESSION["password"]);

// Перенаправляем на предыдущую страницу
header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;  // Завершаем выполнение скрипта
?>
