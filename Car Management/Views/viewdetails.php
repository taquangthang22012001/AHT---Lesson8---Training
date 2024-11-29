<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết ô tô</title>
</head>
<body>
    <h1>Chi tiết ô tô</h1>
    <p><strong>Tên sản phẩm:</strong> <?= $data['name'] ?></p>
    <p><strong>Giá:</strong> <?= $data['price'] ?></p>
    <p><strong>Mô tả:</strong> <?= $data['description'] ?></p>
    <p><strong>Nhà sản xuất:</strong> <?= $data['manufacturer'] ?></p>
    <a href="index.php">Quay lại danh sách</a>
</body>
</html>
