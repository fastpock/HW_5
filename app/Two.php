<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Two extends Model
{
    public function data()
    {
        return [
            ['id' => 1, 'name' => 'test', 'email' => 'test@mail.ru','age' => 20],
            ['id' => 2, 'name' => 'test2', 'email' => 'test2@mail.ru','age' => 25],
            ['id' => 3, 'name' => 'test3', 'email' => 'test3@mail.ru','age' => 23],
            ['id' => 4, 'name' => 'test4', 'email' => 'test4@mail.ru','age' => 30],
            ['id' => 5, 'name' => 'test5', 'email' => 'test5@mail.ru','age' => 34],
            ['id' => 6, 'name' => 'test6', 'email' => 'test6@mail.ru','age' => 21],
            ['id' => 7, 'name' => 'test7', 'email' => 'test7@mail.ru','age' => 29],
            ['id' => 8, 'name' => 'test8', 'email' => 'test8@mail.ru','age' => 40],
            ['id' => 9, 'name' => 'test9', 'email' => 'test9@mail.ru','age' => 50],
        ];
    }
}
