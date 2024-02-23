<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="project13.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>Danh sách khóa học</title>

 <style>
    
 /* Thêm các định kiểu CSS của bạn ở đây */

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
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
    quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
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
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
    quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
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
 ];
 // Hiển thị danh sách khóa học
 echo "<h3>KHOÁ HỌC SẮP KHAI GIẢNG</h3>";
 echo '<div class="container">';
 foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<img src="img/php-course.jpg" alt="abc">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p><i class="fa-solid fa-house"></i>Học phí: ' . $course['fee'] . '</p>';
    echo '<p><i class="fa-solid fa-clock"></i> Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p><i class="fa-solid fa-house"></i>Thời lượng: ' . $course['duration'] . '</p>';
 echo '</div>';
 }
 echo '</div>';
 ?>
</body>
</html>