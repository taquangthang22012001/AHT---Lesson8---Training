<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
</head>
<body>
    <h1>Kết quả tìm kiếm</h1>
    <form action="index.php" method="GET">
        <input type="hidden" name="action" value="search">
        <input type="text" name="keyword" placeholder="Tìm kiếm tên hoặc nhà sản xuất" value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <a href="index.php">Quay lại danh sách</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Nhà sản xuất</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $cars->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['manufacturer'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
