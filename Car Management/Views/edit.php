<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin ô tô</title>
</head>
<body>
    <h1>Sửa thông tin ô tô</h1>
    <form action="index.php?action=edit&id=<?= $data['id'] ?>" method="POST">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" value="<?= $data['name'] ?>" required><br><br>

        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" value="<?= $data['price'] ?>" step="0.01" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description"><?= $data['description'] ?></textarea><br><br>

        <label for="manufacturer">Nhà sản xuất:</label>
        <input type="text" id="manufacturer" name="manufacturer" value="<?= $data['manufacturer'] ?>" required><br><br>

        <button type="submit">Cập nhật</button>
    </form>
    <a href="index.php">Quay lại danh sách</a>
</body>
</html>
