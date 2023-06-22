<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $name = "Profile Leo Lol";
        $age = 19;
        $status = "married";

        return view('profile', compact("name", "age", "status"));
    }
}
