<?php

class User {
    private $Username;
    private $Password;
    private $Role;
    private $EmployeeID; // Khóa ngoại

    // Constructor
    public function __construct(
        string $Username,
        string $Password,
        string $Role,
        int $EmployeeID
    ) {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->EmployeeID = $EmployeeID;
    }

    // Phương thức getter
    public function getUsername(): string {
        return $this->Username;
    }

    public function getPassword(): string {
        return $this->Password;
    }

    public function getRole(): string {
        return $this->Role;
    }

    public function getEmployeeID(): int {
        return $this->EmployeeID;
    }
}

// Ví dụ sử dụng
$user1 = new User('admin', 'admin123', 'admin', 1);
$user2 = new User('user123', 'user456', 'regular', 2);

// Truy cập thuộc tính
echo "Tên người dùng: " . $user1->getUsername() . "\n";
echo "Vai trò: " . $user2->getRole() . "\n";
echo "ID nhân viên: " . $user2->getEmployeeID() . "\n";
?>