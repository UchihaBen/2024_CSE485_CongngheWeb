<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- body -->
    <div class="modal-body mt-4">
        <form action="index.php?controllers=User&action=update&id=<?=$row->getEmployeeID()?>" method="post" class="my-3" style="max-width: 28rem; width: 100%; margin: 0 auto;">
            <input type="text" class="form-control my-3" value="<?= $user->getUserName()?>" name="txtUserName" disabled/>
            <input type="text" class="form-control my-3" value="<?= $user->getRole()?>" name="txtRole" disabled/>
            <input type="text" class="form-control my-3" value="<?= $Department->getDepartmentName()?>" name="txtDepartmentName"disabled/>
            <input type="text" class="form-control my-3" value="<?= $row->getFullName()?>" name="txtFullName"/>
            <input type="text" class="form-control my-3" value="<?= $row->getAddress()?>"name="txtAddress"/>
            <input type="text" class="form-control my-3" value="<?= $row->getEmail()?>" name="txtEmail"/>
            <input type="text" class="form-control my-3" value="<?= $row->getMobilePhone()?>" name="txtMobile"/>
            <input type="text" class="form-control my-3" value="<?= $row->getPosition()?> " name="txtPosition"disabled/>


            <div class="text-center mt-3 row">
                <button type="submit" class="btn btn-success btn-lg col w-1" ">sửa</button>
                <button type="button" class="btn btn-danger btn-lg col" data-bs-toggle="modal" data-bs-target="#<?='modalDel'.$row->getEmployeeID()?>">xóa</button>
                <div class="modal fade" id="<?='modalDel'.$row->getEmployeeID()?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- head -->
                            <div class="modal-header">
                                <div>
                                    <h2 class="modal-title" id="exampleModalLabel">Canh bao</h2>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <div class="modal-body">
                                    <span>Ban co muon xoa</span>

                                    <div class="text-center mt-3">
                                        <a class="btn btn-danger btn-lg" href="?controllers=User&action=delete&id=<?=$row->getEmployeeID()?>">xóa</a>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
</html>