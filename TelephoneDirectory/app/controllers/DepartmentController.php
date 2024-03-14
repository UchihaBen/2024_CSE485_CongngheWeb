<?php
    class DepartmentController
    {
        public function index($DepartmentsId)
        {
            //gọi dữ liệu từ departmentservice
            $DepartmentSrvice = new DepartmentService();
            $Departments =  $DepartmentSrvice->getAllDepartment();
            $DepartmentById = $DepartmentSrvice->getDepartmentByID($DepartmentsId);
            //in ra homepage
            include ROOT . '/app/views/departments/index.php';
        }
        public function departmentTable()
        {
            $DepartmentSrvice = new DepartmentService();
            $Departments =  $DepartmentSrvice->getAllDepartment();
            include ROOT . '/app/views/departments/departmentTable.php';
        }
        public function add()
        {

        }
        public function update()
        {

        }
        public function delete($DepartmentsId)
        {
            //gọi dữ liệu từ departmentservice
            $DepartmentSrvice = new DepartmentService();
            $DepartmentSrvice->deleteDepartmentById($DepartmentsId);

        }
    }
?>