<?php
    require_once(ROOT . '/app/services/DepartmentService.php');
    class DepartmentController
    {
        public function index()
        {
            //gọi dữ liệu từ departmentservice
            $DepartmentSrvice = new DepartmentService();
            $Departments =  $DepartmentSrvice->getAllDepartment();
            //in ra homepage
            include ROOT . '/app/views/departments/index.php';
        }
    }
?>