<?php
    require_once(ROOT . '/app/services/PatientService.php');
    class DepartmentController
    {
        public function index()
        {
            //gọi dữ liệu từ patientservice
            $PatientSrvice = new PatientService();
            $Patients =  $PatientSrvice->getAllPatients();
            //in ra homepage
            include ROOT . '/app/views/home/index.php';
        }
    }
?>