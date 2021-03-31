<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once db.php;

        echo '<h1>' .$result .'</h1>';
    ?>
    <form method="post" action="RegForm.php">
            <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
            <p><input type="password" name="password" value="" placeholder="Пароль"></p>
            <p class="remember_me">
            <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Запомнить меня
            </label>
            </p>
            <p class="submit"><input type="submit" name="commit" value="Войти"></p>
    </form>
</body>
</html>