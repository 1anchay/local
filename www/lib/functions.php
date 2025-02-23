<?php
$mysqli = false;

function connectDB() {
    global $mysqli;
    // Подключение к базе данных
    $mysqli = new mysqli("localhost", "root", "", "database");

    // Проверка на успешное подключение
    if ($mysqli->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
    }

    // Установка кодировки
    $mysqli->query("SET NAMES 'utf8mb4'");
}

function closeDB() { 
    global $mysqli; 
    if ($mysqli) {
        $mysqli->close(); 
    }
}

function getAllArticles() {
    global $mysqli;
    connectDB();

    // Выполнение SQL запроса для получения всех статей
    $result_set = $mysqli->query("SELECT * FROM `articles`");

    // Закрытие соединения с базой данных
    closeDB();

    // Преобразование результата запроса в массив
    return resultSetToArray($result_set);
}

function resultSetToArray($result_set) {
    $array = array(); 
    while (($row = $result_set->fetch_assoc()) != false) {
        $array[] = $row;}
    return $array;
}
function getArticle($id) {
    global $mysqli;
    connectDB();
    $result_set = $mysqli->query("SELECT * FROM `articles` WHERE `id` = '$id'");
    closeDB();
    return  $result_set->fetch_assoc();
}
function getAllBanners() {
    global $mysqli;
    connectDB();
    // Выполнение запроса
    $result_set = $mysqli->query("SELECT * FROM banners");
    // Проверка на ошибку выполнения запроса
    if (!$result_set) {
        die("Ошибка выполнения запроса: " . $mysqli->error);
    }
    closeDB();
    return resultSetToArray($result_set);
}
function getAllGuestBookComments(){
global $mysqli;
    connectDB();
    $result_set = $mysqli->query("SELECT * FROM `guestbook`");
 closeDB();
    return resultSetToArray($result_set);
}
function addGuestBookComment($name, $comment) {
    global $mysqli;
    connectDB(); // Подключаемся к базе данных

    // Экранируем переменные для безопасности
    $name = $mysqli->real_escape_string($name);
    $comment = $mysqli->real_escape_string($comment);

    // Выполняем запрос для добавления комментария
    $sql = "INSERT INTO guestbook (`name`, `comment`) VALUES ('$name', '$comment')";

    // Проверяем, выполнен ли запрос успешно
    if ($mysqli->query($sql) === TRUE) {
        closeDB(); // Закрываем соединение с базой данных
        return true;
    } else {
        // Если произошла ошибка, выводим сообщение MySQL
        echo "Ошибка MySQL: " . $mysqli->error; // Выведем ошибку MySQL
        closeDB(); // Закрываем соединение с базой данных
        return false;
    }
}
function addUser($email, $password) {
    global $mysqli;
    connectDB();
    
    // Проверяем, существует ли пользователь с таким email
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Пользователь уже существует
        return false;
    }

    // Добавляем нового пользователя
    $stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();

    return true; // Успех
}


function checkUser($email, $password) {
    global $mysqli;
    connectDB();  // Подключение к базе данных

    // Экранируем входные данные для безопасности
    $email = $mysqli->real_escape_string($email);
    $password = $mysqli->real_escape_string($password);

    // Преобразуем пароль в MD5, если в базе он хранится в таком виде
    // Можно использовать более безопасные хеши, такие как bcrypt, но для простоты
    $password = md5($password);

    // Выполняем запрос к базе данных
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = $mysqli->query($sql);

    // Закрываем соединение
    closeDB();

    // Если пользователь найден, возвращаем true
    if ($result->num_rows > 0) {
        return true;
    }
    return false;
}














