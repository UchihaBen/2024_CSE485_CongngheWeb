<?php
require_once('../app/config/config.php');
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/config/Connection.php';

$controllers = isset($_GET['controllers']) ? $_GET['controllers'] : 'Department';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// if ($controllers == 'home') {
//     require_once ROOT . '/app/controllers/homeControllers.php';
//     $homeControllers = new HomeControllers();
//     $homeControllers->index();
// }

switch ($controllers) {
    case "Department":
        require_once ROOT . '/app/controllers/DepartmentController.php';
        $DepartmentControllers = new DepartmentController();
        $DepartmentControllers->index();
        break;
    case "patient":
        echo "";
        break;
    case "green":
        echo "";
        break;
    default:
        echo "abc";
}







//require_once(ROOT . '/app/services/PatientService.php');
// echo ROOT;
// echo DB_HOST.DB_USERNAME.DB_PASSWORD.DB_DATABASE;
// $PatientSrvice = new PatientService();
// $Patients =  $PatientSrvice->getAllPatients();
// echo "<pre>";
// print_r($Patients);
// echo "</pre>";
