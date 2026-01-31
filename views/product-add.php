<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-3">Thêm sản phẩm mới</h2>

<?php if (!empty($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<form method="POST" action="index.php?page=product-store">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="number" name="price" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
</form>

</body>
</html>
