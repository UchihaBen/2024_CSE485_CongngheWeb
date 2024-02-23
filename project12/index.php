

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: blue;
            padding: 8px 0;
        }

        ul {
            display: flex;
            list-style-type: none;
        }

        li {
            color: white;
            padding: 0 16px;
        }

        li:not(:first-child){
            border-left: 1px solid white;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li>
            <i class="fa-solid fa-house"></i>
        </li>

        <?php
        $navItems = [
            "GIỚI THIỆU",
            "TIN TỨC & THÔNG BÁO",
            "TUYỂN SINH",
            "ĐÀO TẠO",
            "NGHIÊN CỨU",
            "ĐỐI NGOẠI",
            "VĂN BẢN",
            "SINH VIÊN",
            "LIÊN HỆ"];
        foreach ($navItems as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</nav>

</body>
</html>
