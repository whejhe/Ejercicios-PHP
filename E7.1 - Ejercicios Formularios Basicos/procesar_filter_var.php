<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $url = $_POST['url'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El email es válido.</p>";
    } else {
        echo "<p>El email no es válido.</p>";
    }

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "<p>La URL es válida.</p>";
    } else {
        echo "<p>La URL no es válida.</p>";
    }
    ?>
</body>

</html>