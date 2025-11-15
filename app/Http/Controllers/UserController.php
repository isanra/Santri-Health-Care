<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\never;

class UserController extends Controller
{
    public function index()
    {
        return view('aspirasi');
    }
    public function pesan(): void
    {
        //
    }
}
