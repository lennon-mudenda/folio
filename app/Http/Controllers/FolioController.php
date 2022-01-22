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
}
