<?php 
// We have a list of books, and a title we're looking for
function findMyBook(Array $books, String $title){
    $found = false;
    foreach($books as $index => $book){
        if($title == $book){
            $found = $index;
            break;
        }
    }
    return $found;
}
function placeAllBooks(Array $orderedBooks, Array &$books){
	foreach($orderedBooks as $book){
		$bookFound = findMyBook($books, $book);
		if($bookFound !== FALSE){
			array_splice($books, $bookFound, 1);
		}
	}
}
$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
$orderedBooks = ['MySQL','PGSQL','Java'];
placeAllBooks($orderedBooks, $bookList);
print_r($bookList);