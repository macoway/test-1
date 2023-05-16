<?php

class Book {
    private string $title;
    private string $author;
    private string $genre;
    private int $publicationYear;

    public function __construct(string $title, string $author, string $genre, int $publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->publicationYear = $publicationYear;
    }

    public function getAge(): int
    {
        return date('Y') - $this->publicationYear;
    }

    public function getSummary(): string
    {
        return implode(", ", (array)$this);
    }
}


$book1 = new Book("Перша книга", "Автор Першої Книги", "Жанр 1", 1888);
$book2 = new Book("Друга книга", "Автор Другої Книги", "Жанр 2", 1999);

foreach ([$book1, $book2] as $i => $book) {
    echo("<b>Книга " . $i + 1 .":</b><br>
        {$book->getSummary()}<br>
        Років з дати видання — {$book->getAge()}<br><br>
    ");
}
