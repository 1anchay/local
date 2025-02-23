<?php
// Проверяем, что переменная $alert существует и не пуста
if (isset($alert) && !empty($alert)) {
    // Экранируем возможные спецсимволы для вывода в JS
    $alertMessage = addslashes($alert);
    echo "<script type='text/javascript'>alert('$alertMessage');</script>";
}
?>
