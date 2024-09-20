<?php
namespace App\Model\Pustaka;

class Publisher {
    private string $name;
    private string $address;
    private string $phone;

    public function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = "";
    }

    public function setPhone(int $phone): void {
        $this->phone = (string)$phone;
    }

    public function getPhone(): int {
        return (int)$this->phone;
    }
}


?>