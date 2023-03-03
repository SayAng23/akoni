<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('UI.index');
    }
}
