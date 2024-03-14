<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

<div class="main mx-auto" style="max-width: 1000px">
    <div class="header d-flex justify-content-between mt-8">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalAdd">+ Thêm nhân viên</button>
        <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- head -->
                    <div class="modal-header">
                        <div>
                            <h2 class="modal-title" id="exampleModalLabel">ADD NEW PROFILE</h2>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <form action="index.php?controllers=Employee&action=add" method="post" class="my-3" style="max-width: 28rem; width: 100%">
                            <input type="text" class="form-control my-3" placeholder="Enter name" name="txtName"/>
                            <input type="text" class="form-control my-3" placeholder="Enter address" name="txtAddress"/>
                            <input type="text" class="form-control my-3" placeholder="Enter email" name="txtEmail"/>
                            <input type="text" class="form-control my-3" placeholder="Enter mobilephone" name="txtMobile"/>
                            <input type="text" class="form-control my-3" placeholder="Enter Position" name="txtPosition"/>
                            <input type="text" class="form-control my-3" placeholder="Enter Avatar" name="txtAvatar"/>
                            <select name="txtDepartID" id="" class="form-control">
                                <?php
                                foreach ($departments as $item){
                                    ?>
                                    <option value="<?= $item->getDepartmentID()?>"><?= $item->getDepartmentName()?></option>
                                <?php } ?>
                            </select>


                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-success btn-lg">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="employ-table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile phone</th>
                <th scope="col">Position</th>
                <th scope="col" class="text-center" colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $stt=1;
            foreach($employees as $row){
                ?>
                <tr>
                    <th scope="row"><?= $stt++;?></th>
                    <td><?= $row->getFullName()?></td>
                    <td><?= $row->getAddress();?></td>
                    <td><?= $row->getEmail();?></td>
                    <td><?= $row->getMobilePhone();?></td>
                    <td><?= $row->getPosition();?></td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#<?='modalDetail'.$row->getEmployeeID()?>">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <div class="modal fade" id="<?='modalDetail'.$row->getEmployeeID()?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- head -->
                                    <div class="modal-header">
                                        <div>
                                            <h2 class="modal-title" id="exampleModalLabel">Detail profile</h2>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body">
                                        <form action="index.php?c=employee&a=edit" method="post" class="my-3" style="max-width: 28rem; width: 100%">
                                            <form action="index.php?c=employee&a=delete" method="post" class="my-3" style="max-width: 28rem; width: 100%">
                                                <img src="data:image/jpeg;base64,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"
                                                     alt=""
                                                     class="form-control"
                                                     style="width: 250px; margin: 0 auto"
                                                >
                                                <input type="text" class="form-control my-3" value="<?= $row->getFullName()?>" name="txtName"/>
                                                <input type="text" class="form-control my-3" value="<?= $row->getAddress()?>"name="txtAddress"/>
                                                <input type="text" class="form-control my-3" value="<?= $row->getEmail()?>" name="txtEmail"/>
                                                <input type="text" class="form-control my-3" value="<?= $row->getMobilePhone()?>" name="txtMobile"/>
                                                <input type="text" class="form-control my-3" value="<?= $row->getPosition()?> " name="txtPosition"/>
                                                <input type="text" class="form-control my-3" value="<?=$departments[$row->getDepartmentID()-1]->getDepartmentName();?>" name="txtDepartmentName" readonly>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#<?='modalEdit'.$row->getEmployeeID()?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <div class="modal fade" id="<?='modalEdit'.$row->getEmployeeID()?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- head -->
                                    <div class="modal-header">
                                        <div>
                                            <h2 class="modal-title" id="exampleModalLabel">Edit profile</h2>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body">
                                        <form action="index.php?controllers=Employee&action=update&id=<?=$row->getEmployeeID()?>" method="post" class="my-3" style="max-width: 28rem; width: 100%">
                                            <input type="text" class="form-control my-3" value="<?= $row->getFullName()?>" name="txtName"/>
                                            <input type="text" class="form-control my-3" value="<?= $row->getAddress()?>"name="txtAddress"/>
                                            <input type="text" class="form-control my-3" value="<?= $row->getEmail()?>" name="txtEmail"/>
                                            <input type="text" class="form-control my-3" value="<?= $row->getMobilePhone()?>" name="txtMobile"/>
                                            <input type="text" class="form-control my-3" value="<?= $row->getPosition()?> " name="txtPosition"/>
                                            <select name="txtDepartID" id="" class="form-control" >
                                                <?php

                                                foreach ($departments as $item){
                                                    ?>
                                                    <option value="<?= $item->getDepartmentID()?>" selected="<?= ($row->getDepartmentID()==$item->getDepartmentID()?"true":"false")?>"><?= $item->getDepartmentName()?></option>
                                                <?php } ?>
                                            </select>



                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-success btn-lg">Luu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#<?='modalDel'.$row->getEmployeeID()?>">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                        <div class="modal fade" id="<?='modalDel'.$row->getEmployeeID()?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- head -->
                                    <div class="modal-header">
                                        <div>
                                            <h2 class="modal-title" id="exampleModalLabel">Delete profile</h2>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body">
                                        <form action="index.php?controllers=Employee&action=delete&id=<?=$row->getEmployeeID()?>" method="post" class="my-3" style="max-width: 28rem; width: 100%">
                                            <img src="data:image/jpeg;base64,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"
                                                 alt=""
                                                 class="form-control"
                                                 style="width: 250px; margin: 0 auto"
                                            >
                                            <input type="text" class="form-control my-3" value="<?=$row->getEmployeeID();?>" name="txtId" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$row->getFullName();?>" name="txtName" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$row->getAddress();?>" name="txtAddress" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$row->getEmail();?>" name="txtEmail" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$row->getMobilePhone();?>" name="txtMobile" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$row->getPosition();?>" name="txtPosition" readonly>
                                            <input type="text" class="form-control my-3" value="<?=$departments[$row->getDepartmentID()-1]->getDepartmentName();?>" name="txtDepartmentName" readonly>


                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-danger btn-lg">Xoa</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>