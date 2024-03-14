<?php
//require_once('../config/config.php');
//require_once ROOT . '/app/models/Employee.php';
//require_once ROOT . '/app/config/Connection.php';
class EmployeeService
{
    public function getAllEmployee()
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        if ($conn) {
            $sql = "select * from Employees";
            $result = $conn->query($sql);
            $employees = [];
            foreach ($result as $row) {
                $employee = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentID']);
                $employees[] = $employee;
            }

            return $employees;
        } else {
            return $employees = [];
        }
    }

    public function getEmployeeByDepartment($DepartmentID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        if ($conn) {
            $sql = "select * from Employees where DepartmentID =$DepartmentID";
            $result = $conn->query($sql);
            $employees = [];
            foreach ($result as $row) {
                $employee = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentID']);
                $employees[] = $employee;
            }

            return $employees;
        } else {
            return $employees = [];
        }
    }
    public function getEmployeeById($EmployeeID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $Employee=null;
        if ($conn) {
            $sql = "select * from employees where EmployeeID = $EmployeeID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Lấy dữ liệu từ kết quả truy vấn
                $row = $result->fetch_assoc();
                $Employee = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentID']);
                return $Employee;
            } else {
                return null; // Không tìm thấy phòng ban
            }
        } else {
            return $Employee;
        }
    }
    public function addEmployee($Employee)
    {
        $EmployeeID = $Employee->getEmployeeID();
        $FullName= $Employee->getFullName();
        $Address= $Employee->getAddress();
        $Email= $Employee->getEmail();
        $MobilePhone= $Employee->getMobilePhone();
        $Position= $Employee->getPosition();
        $Avatar= $Employee->getAvatar();
        $DepartmentID= $Employee->getDepartmentID();

        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "INSERT INTO employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) VALUES ('$FullName', '$Address', '$Email', '$MobilePhone', '$Position', '$Avatar', '$DepartmentID')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function updateEmployee($Employee)
    {
        $EmployeeID = $Employee->getEmployeeID();
        $FullName= $Employee->getFullName();
        $Address= $Employee->getAddress();
        $Email= $Employee->getEmail();
        $MobilePhone= $Employee->getMobilePhone();

        $connection = new Connection();
        $conn = $connection->getConnection();

        // Tiến hành cập nhật thông tin phòng ban trong cơ sở dữ liệu
        $sql = "UPDATE employees SET FullName='{$FullName}', Address = '{$Address}', Email = '{$Email}', MobilePhone = '{$MobilePhone}' WHERE EmployeeID = '{$EmployeeID}'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }

    }
    public function updateEmployeeFull($Employee)
    {
        $EmployeeID = $Employee->getEmployeeID();
        $FullName= $Employee->getFullName();
        $Address= $Employee->getAddress();
        $Email= $Employee->getEmail();
        $MobilePhone= $Employee->getMobilePhone();
        $Position= $Employee->getPosition();
        $Avatar= $Employee->getAvatar();
        $DepartmentID= $Employee->getDepartmentID();

        $connection = new Connection();
        $conn = $connection->getConnection();

        // Tiến hành cập nhật thông tin phòng ban trong cơ sở dữ liệu
        $sql = "UPDATE employees SET FullName='{$FullName}', Address = '{$Address}', Email = '{$Email}', MobilePhone = '{$MobilePhone}', Position = '{$Position}', Avatar = '{$Avatar}', DepartmentID = '{$DepartmentID}' WHERE EmployeeID = '{$EmployeeID}'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteEmployeeById(int $EmployeeID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM employees WHERE  EmployeeID = $EmployeeID";

// Execute the query
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

}
//$a = new EmployeeService();
//$b = new Employee(11, '$DeparsffffdfaaatmentNamesffdsd', '$Address', '$Email', '$Phone', '$Logo', '$Website', 2);
//$a->addEmployee($b);



?>