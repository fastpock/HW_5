<?php


namespace App\Http\Controllers;


class OneController extends Controller
{
    public function index($id)
    {
        return view('one', ['id' => $id, 'hash' => $this->generateHash($id)]);
    }
    private function generateHash($id)
    {
        return hash('sha256', $id);
    }
}
