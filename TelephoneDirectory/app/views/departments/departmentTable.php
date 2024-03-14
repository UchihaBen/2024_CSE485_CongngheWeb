

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h3 class= "text-center mb-8">DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h3>
                <a href="admin/users_add.php" class="btn btn-primary">Thêm tài khoản</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="4" class="text-center">Thao tác</th>
                        <!-- <th scope="col">Thao tác</th>
                        <th scope="col">Thao tác</th>
                        <th scope="col">Thao tác</th>
                        <th scope="col">Thao tác</th> -->
                    </tr>
                    </thead>
                    <?php $i=0; ?>
                    <?php foreach($users as $key => $users): ?>
                        <tbody>
                        <tr>
                            <th scope="row"><?= ++$i ?></th>
                            <td><?= $users['name']?></td>
                            <td><?= $users['email']?></td>
                            <th scope="col" class="text-center">
                                <a href="admin/users_detail.php?id=<?= $users['id']?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                <a href="admin/users_edit.php?id=<?= $users['id']?>" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
                                <a href="admin/users_delete.php?id=<?= $users['id']?>" class="btn btn-primary"><i class="bi bi-trash-fill"></i></a>
                                <a href="admin/users_password.php?id=<?= $users['id']?>" class="btn btn-primary">Đổi mật khẩu</a>
                            </th>
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>
</body>
</html>