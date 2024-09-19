<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author("J.K. Rowling", "Famous author of Harry Potter series");
$publisher = new Publisher("Bloomsbury", "London");

$publisher->setPhone(123456789);

$book = new Book(1234567890, "Harry Potter", "A magical story", "Fantasy", "English", 500, $author(), $publisher());

print_r($book->showAll());

echo $publisher->getPhone();
?>