<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Веб сайт</title>
</head>

<body>
    <?php require "Assets/Blocks/header.php" ?>
    <div class="container mt-5">
        <h3 class="mb-5">Наши статьи</h3>
        <div class="d-flex flex-wrap">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Просто текст</h4>
                    </div>
                    <div class="card-body">
                        <img src="Assets/img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php require "Assets/Blocks/footer.php" ?>
</body>

</html>