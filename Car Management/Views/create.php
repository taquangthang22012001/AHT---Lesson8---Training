<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm ô tô mới</title>
</head>
<body>
    <h1>Thêm ô tô mới</h1>
    <form action="index.php?action=create" method="POST">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="manufacturer">Nhà sản xuất:</label>
        <input type="text" id="manufacturer" name="manufacturer" required><br><br>

        <button type="submit">Thêm sản phẩm</button>
    </form>
    <a href="index.php">Quay lại danh sách</a>
</body>
</html>
