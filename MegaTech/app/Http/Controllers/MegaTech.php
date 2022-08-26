<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegaTech extends Controller
{
    public function goto_index()
    {
        Route::get('/', function () {
            return view('pages.index');
    }
    
}
