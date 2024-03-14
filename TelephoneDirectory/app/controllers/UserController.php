<?php
    class UserController
    {
        public function delete_update($user)
        {
//            echo 'pre';
//            print_r($user);
//            echo '\pre';
            $EmployeeService = new EmployeeService();
            $row = $EmployeeService->getEmployeeById($user->getEmployeeID());
            $DepartmentService = new DepartmentService();
            $Department = $DepartmentService->getDepartmentByID($row->getDepartmentID());

            include ROOT . '/app/views/users/profile.php';
        }

        public function update()
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }

            if (isset($_POST['txtFullName'])) {
                $name = $_POST['txtFullName'];
            }
            if (isset($_POST['txtAddress'])) {
                $address = $_POST['txtAddress'];
            }
            if (isset($_POST['txtEmail'])) {
                $email = $_POST['txtEmail'];
            }
            if (isset($_POST['txtMobile'])) {
                $mobile = $_POST['txtMobile'];
            }

            $employee = new Employee($id, $name, $address, $email, $mobile, '', '', 0);
            $employeeService = new EmployeeService();
            if ($employeeService->updateEmployee($employee)) {
                Header( "Location:index.php?controller=home&action=index&success=save");

            } else {
                Header( "Location:index.php?controller=home&action=index&success=false");
            }

        }

        public function delete()
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $UserService = new UserServices();
            $user = $UserService->getUserByUserIdE($id);
            if($UserService->deleteUserById($user->getUsername())){

            }else{

            }

        }
    }
?>