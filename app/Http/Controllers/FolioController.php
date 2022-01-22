<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolioController extends Controller
{
    /*
    * Home Route Handler
    */
    public function index()
    {
        return view('templates.folio.index');
    }


    /*
    * Home Route Handler
    */
    public function post()
    {
        return view('templates.folio.post');
    }


    /*
    * Home Route Handler
    */
    public function project()
    {
        return view('templates.folio.project');
    }
}
