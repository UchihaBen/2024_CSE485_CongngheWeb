<?php
$itemsPerPage=4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
//isset để kiểm tra xem biến đã tồn tại chưa
$totalPages = ceil(count($Employees) / $itemsPerPage);
$currentPageItems = array_slice($Employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Danhba</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="row">
    <div class ="col-8"></div>
    <form class="d-flex col-4 mt-4 mb-4" role="search">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Tìm</button>
    </form>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($currentPageItems as $Employee): ?>
            <div class="col-3">
                <div class="card">

                    <img src="<?= DOMAIN . $Employee->getAvatar();?>" class="card-img-top" alt="Product Image">

                    <div class="card-body">
                        <!--                                            <h5 class="card-title">--><?php //=$Employee->getEmployeeID();?><!--</h5>-->
                        <!--                                            <a href="?id=--><?php //echo $Department->getDepartmentID(); ?><!--?action=delete">--><?php //=$Department->getDepartmentID();?><!--</a>-->
                        <p class="card-text">Tên:<?=$Employee->getFullName();?></p>
                        <p class="card-price">Địa chỉ:<?=$Employee->getAddress();?></p>
                        <p class="card-price">Email:<?=$Employee->getEmail();?></p>
                        <!--                                            <h5 class="card-title">Email:--><?php //=$Employee->getEmail();?><!--</h5>-->
                        <p class="card-text">Sđt:<?=$Employee->getMobilePhone();?></p>
                        <p class="card-price">Chức vị:<?=$Employee->getPosition();?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<br>
<nav aria-label="">
    <ul class="pagination">
        <li class="page-item">
            <?php if ($currentPage > 1): ?>
                <a class="page-link" href="?controllers=Employee&action=index&page=<?php echo $currentPage - 1; ?>">Previous</a>
            <?php endif; ?>
        </li>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <li class="page-item active" aria-current="page"><a class="page-link"><?php echo $i; ?></a></li>
            <?php else: ?>
                <li class="page-item" >
                    <a class="page-link" href="?controllers=Employee&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>

        <li class="page-item">
            <?php if ($currentPage < $totalPages): ?>
                <a class="page-link " href="?controllers=Employee&action=index&page=<?php echo $currentPage + 1; ?>">Next</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

</body>
</html>