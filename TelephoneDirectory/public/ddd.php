
<?php
require_once(ROOT . '/app/services/DepartmentService.php');
//$DepartmentSrvice = new DepartmentService();
//$Departments =  $DepartmentSrvice->getAllDepartment();
$itemsPerPage=4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
//isset để kiểm tra xem biến đã tồn tại chưa
$totalPages = ceil(count($Departments) / $itemsPerPage);
$currentPageItems = array_slice($Departments, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>products</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <?php foreach ($currentPageItems as $Department): ?>
            <div class="col-3">
                <div class="card">

                    <img src="https://sm.ign.com/ign_nordic/cover/a/avatar-gen/avatar-generations_prsz.jpg" class="card-img-top" alt="Product Image">
<!--                    ROOT.$Department->getLogo()-->
                    <div class="card-body">
<!--                        --><?php
                        echo ROOT.$Department->getLogo();
//                        ?>
<!--                        <h5 class="card-title">--><?php //=$Department->getDepartmentID();?><!--</h5>-->
                        <a href="?id=<?php echo $Department->getDepartmentID(); ?>?action=delete"><?=$Department->getDepartmentID();?></a>
                        <p class="card-text"><?=$Department->getDepartmentName();?></p>
                        <p class="card-price"><?=$Department->getAddress();?></p>
                        <h5 class="card-title"><?=$Department->getPhone();;?></h5>
                        <p class="card-text"><?=$Department->getEmail();?></p>
                        <p class="card-price"><?=$Department->getLogo();?></p>
                        <p class="card-price"><?=$Department->getWebsite();?></p>
                        <p class="card-price"><?=$Department->getParentDepartmentID();?></p>
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
                <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            <?php endif; ?>
        </li>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <li class="page-item active" aria-current="page"><a class="page-link"><?php echo $i; ?></a></li>
            <?php else: ?>
                <li class="page-item" >
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>

        <li class="page-item">
            <?php if ($currentPage < $totalPages): ?>
                <a class="page-link " href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

</body>
</html>

