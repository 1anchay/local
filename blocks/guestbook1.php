
    <h2>Добавить запись</h2>
<form name="guestbook" action="" method="post">
<table>
<tr>
<td>Иvя: </td>
<td>
<input type="text" name="name" />
</td>
</tr>
<tr>
<td>Конментари: </td>
<td>
<input type="text" name="comment" />
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="button_guestbook" value="Добавить" />
</td>
</tr>
</table>
</form>
<?php 
    // Обработка формы и вывод ошибок
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST["button_guestbook"])) {
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        
        // Проверка на минимальную длину данных
        if (strlen($name) < 3 || strlen($comment) < 3) {
            $alert = "Ошибка: Имя и комментарий должны быть длиной минимум 3 символа.";
        } else {
            // Попытка добавить комментарий в базу
            $success = addGuestBookComment($name, $comment);
            if (!$success) {
                $alert = "Ошибка при добавлении новой записи!";
            } else {
                $alert = "Запись успешно добавлена!";
            }
        }
        // Включаем alert.php для отображения ошибок
        include "blocks/alert.php";
    }
    ?>

