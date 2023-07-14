<?php

class Person
{
    // public変数(プロパティ)
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // publicメソッド
    public function sayHello()
    {
        echo  "こんにちは。私の名前は" . $this->firstName . $this->lastName;
    }
}

// インスタンス化するとき、引数で与えて上げる。
$person = new Person('hayato', 'fukushima');
$person->sayHello();

$person2 = new Person('長尾', '景虎');
$person2->sayHello();
