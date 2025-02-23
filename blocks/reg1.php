<?php
if (!empty($_POST["button_reg"])) {
    // Инициализация переменных
    $email = htmlspecialchars($_POST["email"]);
    $password_1 = htmlspecialchars($_POST["password_1"]);
    $password_2 = htmlspecialchars($_POST["password_2"]);
    
    // Проверка на пустые поля и длину данных
    if (empty($email) || strlen($email) < 3) {
        $alert = "Пожалуйста, введите корректный E-mail!";
        $success = false;
    } elseif (empty($password_1) || strlen($password_1) < 6) {
        $alert = "Пароль должен быть минимум 6 символов!";
        $success = false;
    } elseif ($password_1 !== $password_2) {
        $alert = "Пароли не совпадают!";
        $success = false;
    } else {
        // Хэшируем пароль с использованием более безопасного алгоритма
        $hashed_password = password_hash($password_1, PASSWORD_BCRYPT);
        
        // Функция для добавления пользователя в базу
        $success = addUser($email, $hashed_password);
        
        // Сообщение об успехе или ошибке
        if (!$success) {
            $alert = "Ошибка при регистрации пользователя!";
        } else {
            $alert = "Вы успешно зарегистрировались!";
        }
    }
    
    // Подключение к алерту
    include "alert.php";
}
?>

<h2>Регистрация</h2>
<form name="reg" action="" method="POST">
  <table>
    <tr>
      <td>E-mail:</td>
      <td>
        <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" />
      </td>
    </tr>
    <tr>
      <td>Пароль:</td>
      <td>
        <input type="password" name="password_1" />
      </td>
    </tr>
    <tr>
      <td>Подтвердите пароль:</td>
      <td>
        <input type="password" name="password_2" />
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" name="button_reg" value="Зарегистрироваться" />
      </td>
    </tr>
  </table>
</form>
