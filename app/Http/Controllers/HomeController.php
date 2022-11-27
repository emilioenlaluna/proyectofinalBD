<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Inicio -Tienda Digital";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Información";
        $viewData["subtitle"] =  "UAA";
        $viewData["description"] =  "Proyecto Final Base de datos: Sistema de compras electronicas desarrollado en PHP y Mysql";
        $viewData["author"] = "Emilio Luna P. Daniel E Pérez Rosales";
        return view('home.about')->with("viewData", $viewData);
    }
}
