<?php
namespace App\Model\Pustaka;

class Book {
    private int $ISBN;
    private string $title;
    private string $description;
    private string $category;
    private string $language;
    private int $numberOfPage;
    private string $author;
    private string $publisher;

    public function __construct(int $ISBN, string $title, string $description, string $category, 
                                string $language, int $numberOfPage, string $author, string $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array {
        return [];
    }

    public function detail(int $ISBN): array {
        return [];
    }
}

?>