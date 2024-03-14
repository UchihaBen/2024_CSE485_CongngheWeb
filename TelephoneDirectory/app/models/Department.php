<?php

class gitDepartment {
    private $DepartmentID;
    private $DepartmentName;
    private $Address;
    private $Email;
    private $Phone;
    private $Logo; // Tùy chọn
    private $Website; // Tùy chọn
    private $ParentDepartmentID; // Khóa ngoại

    // Constructor
    public function __construct(
        int $DepartmentID,
        string $DepartmentName,
        string $Address,
        string $Email,
        string $Phone,
        ?string $Logo = null,
        ?string $Website = null,
        ?int $ParentDepartmentID = null
    ) {
        $this->DepartmentID = $DepartmentID;
        $this->DepartmentName = $DepartmentName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Logo = $Logo;
        $this->Website = $Website;
        $this->ParentDepartmentID = $ParentDepartmentID;
    }

    // Phương thức getter
    public function getDepartmentID(): int {
        return $this->DepartmentID;
    }

    public function getDepartmentName(): string {
        return $this->DepartmentName;
    }

    public function getAddress(): string {
        return $this->Address;
    }

    public function getEmail(): string {
        return $this->Email;
    }

    public function getPhone(): string {
        return $this->Phone;
    }

    public function getLogo(): ?string {
        return $this->Logo;
    }

    public function getWebsite(): ?string {
        return $this->Website;
    }

    public function getParentDepartmentID(): ?int {
        return $this->ParentDepartmentID;
    }
}

// Ví dụ sử dụng
//$itDepartment = new Department(1, 'Phòng IT', '123 Đường Chính', 'it@example.com', '123-456-7890', 'logo.png', 'https://it.example.com', null);
//$hrDepartment = new Department(2, 'Phòng Nhân sự', '456 Đường Elm', 'hr@example.com', '987-654-3210', null, 'https://hr.example.com', 1);
//
//// Truy cập thuộc tính
//echo "Tên phòng ban: " . $itDepartment->getDepartmentName() . "\n";
//echo "Địa chỉ phòng ban: " . $hrDepartment->getAddress() . "\n";
//echo "ID phòng ban cha: " . $hrDepartment->getParentDepartmentID() . "\n";
?>
