<?php
//require_once('../config/config.php');
//require_once ROOT . '/app/models/Department.php';
//require_once ROOT . '/app/config/Connection.php';
class DepartmentService
{
    public function getAllDepartment()
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        if ($conn) {
            $sql = "select * from Departments";
            $result = $conn->query($sql);
            $departments = [];
            foreach ($result as $row) {
                $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                $departments[] = $department;
            }

            return $departments;
        } else {
            return $departments = [];
        }
    }
    public function getDepartmentByID($DepartmentID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $department=null;
        if ($conn) {
            $sql = "select * from Departments where DepartmentID = $DepartmentID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Lấy dữ liệu từ kết quả truy vấn
                $row = $result->fetch_assoc();
                $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                return $department;
            } else {
                return null; // Không tìm thấy phòng ban
            }
        } else {
            return $department;
        }
    }
    public function getDepartmentByName($DepartmentName)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $department=null;
        if ($conn) {
            $sql = "select * from Departments where DepartmentID = $DepartmentName";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Lấy dữ liệu từ kết quả truy vấn
                $row = $result->fetch_assoc();
                $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                return $department;
            } else {
                return null; // Không tìm thấy phòng ban
            }
        } else {
            return $department;
        }
    }

    public function addDepartment($Department)
    {
        $DepartmentID= $Department->getDepartmentID();
        $DepartmentName = $Department->getDepartmentName();
        $Address = $Department->getAddress();
        $Email = $Department->getEmail();
        $Phone = $Department->getPhone();
        $Logo = $Department->getLogo();
        $Website = $Department->getWebsite();
        $ParentDepartmentID = $Department->getParentDepartmentID();

        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "INSERT INTO departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) VALUES ('$DepartmentName', '$Address', '$Email', '$Phone', '$Logo', '$Website', '$ParentDepartmentID')";

        if ($conn->query($sql) === TRUE) {
            echo "Thêm phòng ban thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
    public function updateDepartment($Department)
    {
        $DepartmentID = $Department->getDepartmentID();
        $DepartmentName = $Department->getDepartmentName();
        $Address = $Department->getAddress();
        $Email = $Department->getEmail();
        $Phone = $Department->getPhone();
        $Logo = $Department->getLogo();
        $Website = $Department->getWebsite();
        $ParentDepartmentID = $Department->getParentDepartmentID();

        $connection = new Connection();
        $conn = $connection->getConnection();

        // Tiến hành cập nhật thông tin phòng ban trong cơ sở dữ liệu
        $sql = "UPDATE departments SET DepartmentName = '{$DepartmentName}', Address = '{$Address}', Email = '{$Email}', Phone = '{$Phone}',Logo = '{$Logo}', Website = '{$Website}', ParentDepartmentID = '{$ParentDepartmentID}' WHERE DepartmentID = '$DepartmentID'";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "Thêm phòng ban thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }

    }
    public function deleteDepartmentById(int $DepartmentID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM departments WHERE  DepartmentID = $DepartmentID";

// Execute the query
        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            return  false;
        }
    }

}
//$a = new DepartmentService();
//$b = new Department(0, '$DepartmentName', '$Address', '$Email', '$Phone', '$Logo', '$Website', 2);
//$a->addDepartment($b);
?>