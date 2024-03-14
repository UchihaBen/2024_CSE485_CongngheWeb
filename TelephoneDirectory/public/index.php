<?php
require_once('../app/config/config.php');
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/models/Employee.php';
require_once ROOT . '/app/models/User.php';

require_once ROOT . '/app/config/Connection.php';

require_once ROOT . '/app/controllers/DepartmentController.php';
require_once ROOT . '/app/controllers/EmployeeController.php';
require_once ROOT . '/app/controllers/UserController.php';
require_once(ROOT . '/app/controllers/FormController.php');

require_once(ROOT . '/app/services/DepartmentService.php');
require_once(ROOT . '/app/services/EmployeeService.php');
require_once(ROOT . '/app/services/UserServices.php');
require_once(ROOT . '/app/services/FormService.php');

$controllers = isset($_GET['controllers']) ? $_GET['controllers'] : 'Home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$DepartmentId = isset($_GET['DepartmentId']) ? $_GET['DepartmentId'] : 1;

session_start();//dịch vụ bảo vệ

if (!isset($_SESSION['islogin'])) {
    //khách vãng lai
    require(ROOT . '/app/views/layout/HeaderGuest.php');
    switch ($controllers) {
        case "Home":
            require ROOT . '/app/views/home/index.php';
            break;
        case "Department":
            $DepartmentControllers = new DepartmentController();
            if ($action == 'index')
                $DepartmentControllers->index($DepartmentId);
            if ($action == 'delete') {
                $DepartmentControllers->delete($DepartmentId);
                $DepartmentControllers->index($DepartmentId);
            }

            break;
        case "Form":
            $FormControllers = new FormController();
            if ($action == 'index')
                $FormControllers->index();
            if ($action == 'login') {
                $FormControllers->login();
            }
            break;
        case "Employee":
            $EmployeeControllers = new EmployeeController();
            if ($action == 'index')
                $EmployeeControllers->index();
            break;
        default:
            echo "abc";
    }
}else{
    $islogin =$_SESSION['islogin'];

    if ($islogin->getRole() == 'admin'){
        require(ROOT . '/app/views/layout/HeaderAdmin.php');
        switch ($controllers) {
            case "Home":
                require ROOT . '/app/views/home/index.php';
                break;
            case "Department":
                $DepartmentControllers = new DepartmentController();
                if ($action == 'index')
                    $DepartmentControllers->index($DepartmentId);
                if ($action == 'delete') {
                    $DepartmentControllers->delete($DepartmentId);
                    $DepartmentControllers->index($DepartmentId);
                }

                break;
            case "Form":
                $FormControllers = new FormController();
                if ($action == 'index')
                    $FormControllers->index();
                if ($action == 'login') {
                    $FormControllers->login();
                }
                if ($action == 'logout') {
                    echo 'index mian logout';
                    $FormControllers->logout();
                }
                break;
            case "Employee":
                $EmployeeControllers = new EmployeeController();
                if ($action == 'index'){
                    $EmployeeControllers->index();
                }
                if ($action == 'tableIndext'){
                    $EmployeeControllers->tableIndext();
                }
                if ($action == 'update'){
                    $EmployeeControllers->update();
                }
                if ($action == 'delete'){
                    $EmployeeControllers->deleteEmployee();
                }
                if ($action == 'add'){
                    $EmployeeControllers->addEmployee();
                }

                break;
            default:
                echo "abc";
        }
    }elseif ($islogin->getRole()== 'regular'){
        require(ROOT . '/app/views/layout/HeaderRegular.php');
        switch ($controllers) {
            case "Home":
                require ROOT . '/app/views/home/index.php';
                break;
            case "Department":
                $DepartmentControllers = new DepartmentController();
                if ($action == 'index')
                    $DepartmentControllers->index($DepartmentId);
                if ($action == 'delete') {
                    $DepartmentControllers->delete($DepartmentId);
                    $DepartmentControllers->index($DepartmentId);
                }

                break;
            case "Form":
                $FormControllers = new FormController();
                if ($action == 'index')
                    $FormControllers->index();
                if ($action == 'login') {
                    $FormControllers->login();
                }
                if ($action == 'logout') {
                    $FormControllers->logout();
                }
                break;
            case "Employee":
                $EmployeeControllers = new EmployeeController();
                if ($action == 'index')
                    $EmployeeControllers->index();
                break;
            case "User":
                if ($action == 'delete_update'){
                    $UserControllers = new UserController();
                    $UserControllers->delete_update($islogin);
                }
                if($action == 'update'){
                    $UserControllers = new UserController();
                    $UserControllers->update();
                }
                if($action == 'delete'){
                    $UserControllers = new UserController();
                    $UserControllers->delete();
                }

                break;
            default:
                echo "abc";
        }
    }
}










//require_once(ROOT . '/app/services/PatientService.php');
// echo ROOT;
// echo DB_HOST.DB_USERNAME.DB_PASSWORD.DB_DATABASE;
// $PatientSrvice = new PatientService();
// $Patients =  $PatientSrvice->getAllPatients();
// echo "<pre>";
// print_r($Patients);
// echo "</pre>";
