<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
    <?php
        foreach ($products as $key=>$product){
            extract($product);
        ?>
        <li>
            <h3><?= $name ?></h3>
            <span><?= $price ?></span>
        </li>
        <?php
        }
    ?>
    </ul>
</body>
</html>