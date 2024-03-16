<?php

class Book
{
    private static int $idCounter = 1;
    private int $id;
    private string $title;
    private array $authors;
    private string $publisher;
    private int $year;

    public function __construct()
    {
        $this->id = self::$idCounter++;
        $this->title = "";
        $this->authors = [];
        $this->publisher = "";
        $this->year = 0;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthors(array $authors): self
    {
        $this->authors = $authors;
        return $this;
    }

    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function __toString(): string
    {
        return "Id: {$this->id}\nНазвание: {$this->title}\nАвтор(ы): " . implode(", ", $this->authors) . "\nИздательство: {$this->publisher}\nГод издания: {$this->year}\n";
    }
}

?>