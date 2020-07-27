<?php


namespace App\Http\Controllers;


class TwoController extends Controller
{
    public function users()
    {
        $users = (new \App\Two)->data();
        return view('two', ['users' => $users]);
    }
}
