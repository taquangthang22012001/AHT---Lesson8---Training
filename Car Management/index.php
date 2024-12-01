
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách ô tô</title>
</head>
<body>
    <h1>Danh sách ô tô</h1>

    <!-- Tìm kiếm ô tô -->
    <form action="index.php" method="GET">
        <input type="hidden" name="action" value="search">
        <input type="text" name="keyword" placeholder="Tìm kiếm tên hoặc nhà sản xuất">
        <button type="submit">Tìm kiếm</button>
    </form>

    <a href="index.php?action=create">Thêm ô tô mới</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Nhà sản xuất</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            use Controller\CarController;
            use Models\Car;
            require "Model/Car.php"; 
            require "Controller/CarController.php";
            while ($row = $cars->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['manufacturer'] ?></td>
                    <td>
                        <a href="index.php?action=view&id=<?= $row['id'] ?>">Xem</a> | 
                        <a href="index.php?action=edit&id=<?= $row['id'] ?>">Sửa</a> | 
                        <a href="index.php?action=delete&id=<?= $row['id'] ?>">Xoá</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
