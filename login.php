<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>introPHP</title>
</head>

<body>
    <form action="processlogin.php" id="login" method="post" accept-charset="UTF-8">
        <label for="username"></label>
        <input type="text" name="username" id="username" maxlength="50">
        <label for="password"></label>
        <input type="password" name="password" id="password" maxlength="50">
        <input type="submit" name="submit" value="submit">
        <?php
        require_once("processlogin.php")
        ?>
    </form>
</body>

</html>