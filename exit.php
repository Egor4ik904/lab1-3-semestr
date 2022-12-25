<?php
    setcookie('user', $user['login'], time() - 3600, "/"); // удаляет куки
    header('Location: /login.php'); // переадресация на главную страницу
?>
