<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome_get.php" method="get">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
    <input type="submit" value="Belépés">
    </form>
    <br>

    <?php
    $myfile = fopen("password.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>
</body>
</html>