<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới sản phẩm</h1>
    <form method="POST" action="/index.php?act=products&mode=admin">
        <input type="text" name="name" placeholder="Tên sản phẩm"/>
        <input type="text" name="image" placeholder="Ảnh sản phẩm"/>
        <input name="price" type="number" placeholder="Giá"/>
        <button type="submit" name="submit">Thêm mới</button>
    </form>
</body>
</html>