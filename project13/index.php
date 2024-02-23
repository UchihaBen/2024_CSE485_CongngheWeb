<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
    </style>
</head>
<body>
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
        'duration' => '2 - 2.5 năm'
    ],

    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người
chuyển nghề. Trang bị từ frontend đến backend, xây dựng 
website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/24',
        'duration' => '6 tháng'
    ],

    [
        'title' => 'Lập trình java fullstack',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng
java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, 
JSP, Spring Framework, EJB,....',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'title' => 'Lập trình php & laravel',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử
dụng PHP kết hợp Laravel Framework.',
        'start_date' => '5/2/24',
        'fee' => '9.600.000 VND',
        'duration' => '36 giờ'
    ],

    [
        'title' => 'Khóa học lập trình .net',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core
MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức
C# và Frontend.',
        'start_date' => '2/24',
        'duration' => '2 - 2.5 năm',
        'fee' => '6.000.000 VND',
    ],

    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    // Thêm các khóa học khác vào đây
];
// Hiển thị danh sách khóa học
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
?>
</body>
</html>
