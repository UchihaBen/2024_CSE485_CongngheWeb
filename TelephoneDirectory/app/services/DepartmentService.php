<?php


class DepartmentService
{
    public function getAllDepartment()
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        if ($conn) {
            $sql = "select * from patients";
            $stmt = $conn->query($sql);
            $patients = [];
            foreach ($stmt as $row) {
                $patient = new Patient($row['id'], $row['fullname'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['mobile']);
                $patients[] = $patient;
            }

            return $patients;
        } else {
            return $patients = [];
        }
    }
}
?>