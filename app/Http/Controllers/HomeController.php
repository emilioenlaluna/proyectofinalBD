<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Inicio -Loin Monde";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Acerca de - Loin Monde";
        $viewData["subtitle"] =  "Nosotros";
        $viewData["description"] =  "Pagina desarrollada para el BBVA Hackaton 2022";
        $viewData["author"] = "Developed by: Quesoft++";
        return view('home.about')->with("viewData", $viewData);
    }
}
