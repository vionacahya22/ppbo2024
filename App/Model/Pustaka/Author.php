<?php
namespace App\Model\Pustaka;

class Author {
    private string $name;
    private string $description;

    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type): array {
        return [];
    }
}
?>