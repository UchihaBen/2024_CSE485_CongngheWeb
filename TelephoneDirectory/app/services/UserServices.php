<?php

class UserServices
{
    public function getUserByUserName($UserName1)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $user = null;
        if ($conn) {
            $sql = "select * from Users where UserName = '".$UserName1."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Lấy dữ liệu từ kết quả truy vấn
                $row = $result->fetch_assoc();
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                return $user;
            } else {
                return null; // Không tìm thấy phòng ban
            }
        } else {
            return null;
        }
    }
    public function getUserByUserIdE($id)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $user = null;
        if ($conn) {
            $sql = "select * from Users where EmployeeID = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Lấy dữ liệu từ kết quả truy vấn
                $row = $result->fetch_assoc();
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                return $user;
            } else {
                return null; // Không tìm thấy phòng ban
            }
        } else {
            return null;
        }
    }

    public function addUser($User)
    {
        $Username = $User->getUsername();
        $Password= $User->getPassword();
        $Role= $User->getRole();
        $EmployeeID= $User->getEmployeeID(); // Khóa ngoại

        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "INSERT INTO users (Username, Password, Role, EmployeeID) VALUES ('$Username', '$Password', '$Role', '$EmployeeID')";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function updateUser($User)
    {
        $Username = $User->getUsername();
        $Password= $User->getPassword();
        $Role= $User->getRole();
        $EmployeeID= $User->getEmployeeID(); // Khóa ngoại

        $connection = new Connection();
        $conn = $connection->getConnection();

        // Tiến hành cập nhật thông tin phòng ban trong cơ sở dữ liệu
        $sql = "UPDATE users SET Password='{$Password}', Role = '{$Role}', EmployeeID = '{$EmployeeID}' WHERE Username = '{$Username}'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }

    }
    public function deleteUserById(string $UserID)
    {
        $connection = new Connection();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM users WHERE  Username = '$UserID'";
        echo $sql;
// Execute the query
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

