<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Контактная форма</title>
</head>

<body>
    <?php require "Assets/Blocks/header.php" ?>
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <form action="check.php" method="POST">
            <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>
    <?php require "Assets/Blocks/footer.php" ?>
</body>

</html>