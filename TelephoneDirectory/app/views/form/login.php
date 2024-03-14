<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLU Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Đăng nhập</h4>
<!--                    <form action="--><?php //= DOMAIN . 'public/index.php'?><!--" method="post">-->
                    <form action="?controllers=Form&action=login"  method="post">
                        <div class="form-group mt-3 mb-3">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="user" id="" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu:</label>
                            <label for=""></label><input type="password" class="form-control" name="pass" id="" placeholder="Nhập mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>