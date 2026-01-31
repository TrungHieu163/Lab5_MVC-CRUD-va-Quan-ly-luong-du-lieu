<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-3">Chi tiết sản phẩm</h2>

<?php if ($product): ?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?= $product['id'] ?></td>
    </tr>
    <tr>
        <th>Tên sản phẩm</th>
        <td><?= $product['name'] ?></td>
    </tr>
    <tr>
        <th>Giá</th>
        <td><?= number_format($product['price']) ?> VNĐ</td>
    </tr>
    <tr>
        <th>Hình ảnh</th>
        <td>
        </td>
    </tr>
</table>
<?php else: ?>
<p class="text-danger">Không tìm thấy sản phẩm</p>
<?php endif; ?>

<a href="index.php?page=product-list" class="btn btn-secondary">← Quay lại danh sách</a>

</body>
</html>
