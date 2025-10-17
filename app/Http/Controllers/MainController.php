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

    public function showHash($numchar = 32)
    {
        echo "Tamanho padrão: ". MainOperations::generateHash()."<br>";
        echo "Tamanho 16: ". MainOperations::generateHash(16)."<br>";
        echo "Tamanho 32: ". MainOperations::generateHash(32)."<br>";
        echo "Tamanho com parametro de rota: ". MainOperations::generateHash($numchar)."<br>";
    }

}
