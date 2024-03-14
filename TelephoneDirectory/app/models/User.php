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
