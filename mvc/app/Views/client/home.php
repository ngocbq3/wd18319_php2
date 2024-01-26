<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <h1>Trang chủ</h1>

    <?php foreach ($products as $pro) : ?>
        <a href="<?= ROOT_PATH ?>detail?id=<?= $pro->id ?>">
            <h3><?= $pro->name ?></h3>
        </a>
        <div>
            Price: <?= $pro->price ?>
        </div>
    <?php endforeach ?>
</body>

</html>