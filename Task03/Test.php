<?php



function runTest() {
    $book1 = (new Book())->setTitle('PHP forever')->setAuthors(['Gates B.', 'Smith J.'])->setPublisher("O'Reily")->setYear(2020);
    $book2 = (new Book())->setTitle('Властелин колец')->setAuthors(['Толкиен Дж.Р.Р.'])->setPublisher("Азбука")->setYear(1954);
    $book3 = (new Book())->setTitle('Звёздные войны')->setAuthors(['Лукас Дж.'])->setPublisher("Lucasfilm Ltd.")->setYear(1977);
    
    $booksList = new BooksList();
    $booksList->add($book1);
	$booksList->add($book2);
	$booksList->add($book3);

    echo $book1 . "\n"; 
	echo $book2 . "\n";
	echo $book3 . "\n";
    echo "Количество книг в списке: " . $booksList->count() . "\n";

    $file = 'books.dat';
    $booksList->store($file);
    $loadedBooksList = new BooksList();
    $loadedBooksList->load($file);

    echo "Количество книг в загруженном списке: " . $loadedBooksList->count() . "\n";
}


?>