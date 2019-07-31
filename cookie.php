<?php

if ($_POST['first'] ) {
    setcookie('first', $_POST['first'], time() + 5);
    setcookie('second', $_POST['second'], time() + 10);
    header ('Location: cookie.php');
}


?>

<form action="" method="POST">
    <input type="text" name="first" required>
    <input type="text" name="second" required>
    <button>Отправить</button>
</form>

<?

var_dump($_COOKIE);