<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* Thêm các định kiểu CSS của bạn ở đây */
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin: 0 20px 0 10px;
        }

        .container {
            margin: 5px 100px;
        }

        img {
            height: auto;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .container h1 {
            padding: 0 10px;
            color: #9e1d1d;
            text-transform: uppercase;
            border-left: 5px solid #9e1d1d;
        }

        .content {
            margin: 10px 100px;
        }

        .content p {
            width: 100%;
        }

        .course h3 {
            color: #333;
            text-transform: uppercase;
        }

        .course p {
            color: #666;
        }

        .first-course {
            margin-bottom: 20px;
            display: flex;
        }

        .last-course {
            margin-bottom: 20px;
            display: flex;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>khóa học sắp khai giảng</h1>
</div>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
    quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'https://aptech.vn/wp-content/uploads/2023/10/banner-web.png.webp'
    ],

    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người
    chuyển nghề. Trang bị từ frontend đến backend, xây dựng 
    website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/24',
        'duration' => '6 tháng',
        'image' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp'
    ],

    [
        'title' => 'Lập trình java fullstack',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng
    java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, 
    JSP, Spring Framework, EJB,....',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png.webp'
    ],

    [
        'title' => 'Lập trình php & laravel',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
    Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử
    dụng PHP kết hợp Laravel Framework.',
        'start_date' => '5/2/24',
        'fee' => '9.600.000 VND',
        'duration' => '36 giờ',
        'image' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-php.png.webp'
    ],

    [
        'title' => 'Khóa học lập trình .net',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core
    MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức
    C# và Frontend.',
        'start_date' => '2/24',
        'duration' => '40 giờ',
        'fee' => '6.000.000 VND',
        'image' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-.net_.png.webp'
    ],

    [
        'title' => 'Lập trình sql server',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server
    như các kỹ thuật: lọc dữ liệu, phần tích, thiết kế và quản trị
    cơ sở dữ liệu.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'https://aptech.vn/wp-content/uploads/2021/06/lap-trinh-csdl-voi-sql.png.webp'
    ],
    // Thêm các khóa học khác vào đây
];
// Hiển thị danh sách khóa học
?>


<div class="content">
    <div class="first-course">
        <?php
        $count = 0;
        foreach ($courses as $course) {
            if ($count < 3) {
                echo '<div class="course">';
                echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
                echo '<h3 style="margin: 10px 0">' . $course['title'] . '</h3>';
                echo '<p style="margin-bottom: 10px">' . $course['description'] . '</p>';
                echo '<p><i class="fa fa-gift" style="color: #9e1d1d;"></i> ' . ($count == 1 ? '' : 'Học bổng: ') . $course['fee'] . '</p>';
                echo '<p><i class="fa fa-calendar" style="color: #9e1d1d;"></i> Khải giảng: ' . $course['start_date'] . '</p>';
                echo '<p><i class="fa fa-bookmark" style="color: #9e1d1d"></i> Thời lượng: ' . $course['duration'] . '</p>';
                echo '</div>';
            }
            $count++;
        }
        ?>
    </div>

    <div class="last-course">
        <?php
        $count = 0;
        foreach ($courses as $course) {
            if ($count >= 3) {
                echo '<div class="course">';
                echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
                echo '<h3 style="margin: 10px 0">' . $course['title'] . '</h3>';
                echo '<p style="margin-bottom: 10px">' . $course['description'] . '</p>';
                echo '<p><i class="fa fa-calendar" style="color: #9e1d1d;"></i> Khải giảng: ' . $course['start_date'] . '</p>';
                if ($courses == 4) {
                    echo '<p><i class="fa fa-bookmark" style="color: #9e1d1d"></i> Thời lượng: ' . $course['duration'] . '</p>';
                    echo '<p><i class="fa fa-gift" style="color: #9e1d1d;"></i> Học phí: ' . $course['fee'] . '</p>';
                } else {
                    echo '<p><i class="fa fa-gift" style="color: #9e1d1d;"></i> Học phí: ' . $course['fee'] . '</p>';
                    echo '<p><i class="fa fa-bookmark" style="color: #9e1d1d"></i> Thời lượng: ' . $course['duration'] . '</p>';
                }
                echo '</div>';
            }
            $count++;
        }
        ?>
    </div>
</div>
</body>
</html>
