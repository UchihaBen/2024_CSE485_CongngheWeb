<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuanLyPhongBan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 border ">
                <div style="height: 500px;width: 200px; overflow-y: scroll;">
                    <ul class="list-group">
                        <?php foreach ($Departments as $Department) : ?>
                            <li class="list-group-item"><a href="?controllers=Department&action=index&DepartmentId=<?php echo $Department->getDepartmentID(); ?>" class="list-group-item"><?= $Department->getDepartmentName(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-10" style="height: 550px; overflow-y: scroll;">
                <div class="border">
                    <section class=" mt-1 mb-1 text-center text-lg-start shadow-1-strong rounded" style="background-color: aqua">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body m-3">
                                        <div class="row">
                                            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center mb-4 mb-lg-0">
                                                <img src="<?= DOMAIN . $DepartmentById->getLogo(); ?>" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                                                <p class="text-muted fw-light mb-4">
                                                    giới thiệu: phòng ban gồm những nhân viên nhiệt huyết thân thiện sãn sàng giúp đỡ
                                                </p>
                                            </div>

                                            <div class="col-lg-7">
                                                <p class="fw-bold lead mb-1">Phòng: <?= $DepartmentById->getDepartmentName(); ?></p>
                                                <p class="fw-bold lead mb-1">Địa chỉ:<?= $DepartmentById->getAddress(); ?></p>
                                                <p class="fw-bold lead mb-1">Email: <?= $DepartmentById->getEmail(); ?></p>
                                                <p class="fw-bold lead mb-1">Phone : <?= $DepartmentById->getPhone(); ?></p>
                                                <p class="fw-bold lead mb-1">websize:<?= $DepartmentById->getWebsite(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="border">
                    <?php
                    $EmployeeService = new EmployeeService();
                    $Employees = $EmployeeService->getEmployeeByDepartment($DepartmentById->getDepartmentID());
                    $itemsPerPage=4;
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                    //isset để kiểm tra xem biến đã tồn tại chưa
                    $totalPages = ceil(count($Employees) / $itemsPerPage);
                    $currentPageItems = array_slice($Employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
                    ?>
                    <div class="container">
                        <div class="row">
                            <?php foreach ($currentPageItems as $Employee): ?>
                                <div class="col-3">
                                    <div class="card">

                                        <img src="<?= DOMAIN . $Employee->getAvatar(); ?>" class="card-img-top" alt="Product Image">

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
                                    <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Sau</a>
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
                                    <a class="page-link " href="?page=<?php echo $currentPage + 1; ?>">Tiếp</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </nav>



                </div>
            </div>
        </div>
    </div>

</body>

</html>