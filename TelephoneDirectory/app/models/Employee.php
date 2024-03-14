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



