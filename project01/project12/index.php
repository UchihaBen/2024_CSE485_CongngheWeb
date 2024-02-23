<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project12.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                "LIÊN HỆ"
                ];
                foreach ($navItems as $item) {
                echo "<li>$item</li>";
                }
            ?> 
        </ul>
    </nav>
</body>
</html>
