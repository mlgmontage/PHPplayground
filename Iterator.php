<?php

use Countable, Iterator;

class Book
{
  private string $name;
  private string $author;

  function __construct($name, $author)
  {
    $this->name = $name;
    $this->author = $author;
  }

  function getName()
  {
    return $this->name;
  }
}

class BookList implements Countable, Iterator
{
  private array $books = [];
  private $current = 0;

  public function addBook(Book $book)
  {
    $this->books[] = $book;
  }

  public function count(): int
  {
    return count($this->books);
  }

  public function current(): Book
  {
    return $this->books[$this->current];
  }

  public function key(): int
  {
    return $this->current;
  }

  public function next()
  {
    $this->current++;
  }

  public function rewind()
  {
    $this->current = 0;
  }

  public function valid(): bool
  {
    return isset($this->books[$this->current]);
  }
}
