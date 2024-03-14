<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_GET['success'])){
        if($_GET['success']=='add'){
            echo "<h4 class='text-success text-center'>Bạn đã thêm thành công</h4>";
        }else if($_GET['success']=='false') {
            echo "<h4 class='text-danger text-center'>Thất bại</h4>";
        }else if($_GET['success']=='save') {
            echo "<h4 class='text-success text-center'>Bạn đã chỉnh sửa thành công</h4>";
        }else if($_GET['success']=='delete') {
            echo "<h4 class='text-success text-center'>Bạn đã xóa thành công</h4>";
        }
    }

    ?>

</body>
</html>