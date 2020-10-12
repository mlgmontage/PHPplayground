<?php

class Person
{
  public $name;
  public $surname;

  function __construct($n, $s)
  {
    $this->name = $n;
    $this->surname = $s;
  }
}

class Printer
{
  public static function print(Person $person)
  {
    print $person->name . ' ' . $person->surname . "\n";
  }
}

Printer::print(new Person('John', 'Dee'));
Printer::print(new Person('Speed', 'Racer'));
