<?php

class DepartmentService
{
    public function getAllDepartment()
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        if ($conn) {
            $sql = "select * from Departments";
            $stmt = $conn->query($sql);
            $departments = [];
            foreach ($stmt as $row) {
                $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                $departments[] = $department;
            }

            return $departments;
        } else {
            return $departments = [];
        }
    }
}
?>