<?php

namespace App\Http\Controllers;

use App\Services\MainOperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        return "Ola Mundo";
    }

    public function showHash()
    {
        return MainOperations::generateHash();
    }

}
