<?php

class Employee {
    private $EmployeeID;
    private $FullName;
    private $Address;
    private $Email;
    private $MobilePhone;
    private $Position;
    private $Avatar; // Tùy chọn
    private $DepartmentID; // Khóa ngoại

    // Constructor
    public function __construct(
        int $EmployeeID,
        string $FullName,
        string $Address,
        string $Email,
        string $MobilePhone,
        string $Position,
        ?string $Avatar = null,
        ?int $DepartmentID = null
    ) {
        $this->EmployeeID = $EmployeeID;
        $this->FullName = $FullName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->MobilePhone = $MobilePhone;
        $this->Position = $Position;
        $this->Avatar = $Avatar;
        $this->DepartmentID = $DepartmentID;
    }

    // Phương thức getter
    public function getEmployeeID(): int {
        return $this->EmployeeID;
    }

    public function getFullName(): string {
        return $this->FullName;
    }

    public function getAddress(): string {
        return $this->Address;
    }

    public function getEmail(): string {
        return $this->Email;
    }

    public function getMobilePhone(): string {
        return $this->MobilePhone;
    }

    public function getPosition(): string {
        return $this->Position;
    }

    public function getAvatar(): ?string {
        return $this->Avatar;
    }

    public function getDepartmentID(): ?int {
        return $this->DepartmentID;
    }
}

// Ví dụ sử dụng
$employee1 = new Employee(1, 'Nguyễn Văn A', '123 Đường ABC', 'a@example.com', '123-456-7890', 'Developer', 'avatar.jpg', 1);
$employee2 = new Employee(2, 'Trần Thị B', '456 Đường XYZ', 'b@example.com', '987-654-3210', 'HR Manager', null, 2);

// Truy cập thuộc tính
echo "Họ và tên: " . $employee1->getFullName() . "\n";
echo "Địa chỉ: " . $employee2->getAddress() . "\n";
echo "ID phòng ban: " . $employee2->getDepartmentID() . "\n";
?>
