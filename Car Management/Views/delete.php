<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá ô tô</title>
</head>
<body>
    <h1>Xoá ô tô</h1>
    <p>Bạn có chắc chắn muốn xoá ô tô <strong><?= $data['name'] ?></strong> không?</p>
    <a href="index.php?action=delete&id=<?= $data['id'] ?>&confirm=true">Xác nhận</a>
    <a href="index.php">Huỷ</a>
</body>
</html>
