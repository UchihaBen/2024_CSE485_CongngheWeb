<?php
class EmployeeController
{
    public function index()
    {
        //gọi dữ liệu từ departmentservice
        $EmployeeService = new EmployeeService();
        $Employees =  $EmployeeService->getAllEmployee();

        include ROOT . '/app/views/employees/index.php';
    }
    public function tableIndext()
    {
        $EmployeeService = new EmployeeService();
        $employees =  $EmployeeService->getAllEmployee();
        $DepartmentService = new DepartmentService();
        $departments = $DepartmentService->getAllDepartment();
//        echo 'pre';
//        print_r($employees);
//        echo '\pre';

        include ROOT . '/app/views/employees/employeeTable.php';
    }
    public function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        if (isset($_POST['txtName'])) {
            $name = $_POST['txtName'];
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
        if (isset($_POST['txtPosition'])) {
            $posion = $_POST['txtPosition'];
        }
        if (isset($_POST['txtDepartID'])) {
            $departmentID = $_POST['txtDepartID'];
        }

        $avatar ='public/asset/avatar/avatar2.png';
        $employee = new Employee($id,$name,$address,$email,$mobile,$posion,$avatar,$departmentID);
        $employeeService = new EmployeeService();
        if($employeeService->updateEmployee($employee)){
            Header( "Location:index.php?controllers=Employee&action=tableIndext&success=save");
        }else{
            Header( "Location:index.php?controllers=Employee&action=tableIndext&success=false");
        }
    }
    public function delete($DepartmentsId)
    {
        //gọi dữ liệu từ departmentservice
        $DepartmentSrvice = new DepartmentService();
        $DepartmentSrvice->deleteDepartmentById($DepartmentsId);

    }
    public function deleteEmployee()
{
    $EmployeeId = $_GET['id'];
    //gọi dữ liệu từ departmentservice
    $EmployeeSrvice = new EmployeeService();
    $UserService = new UserServices();
    $User = $UserService->getUserByUserIdE($EmployeeId);
    if($UserService->deleteUserById($User->getUsername())){
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=delete");
    }else{
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=false");
    }
    if($EmployeeSrvice->deleteEmployeeById($EmployeeId)){
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=delete");
    }else{
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=false");
    }

}
public function addEmployee()
{
    if (isset($_POST['txtName'])) {
        $name = $_POST['txtName'];
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
    if (isset($_POST['txtPosition'])) {
        $posion = $_POST['txtPosition'];
    }
    if (isset($_POST['txtDepartID'])) {
        $departmentID = $_POST['txtDepartID'];
    }
    $avatar ='public/asset/avatar/avatar2.png';
    $employee = new Employee(0,$name,$address,$email,$mobile,$posion,$avatar,$departmentID);
    $employeeService = new EmployeeService();
    if($employeeService->addEmployee($employee)){
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=add");
    }else{
        Header( "Location:index.php?controllers=Employee&action=tableIndext&success=false");
    }
}
}
?>