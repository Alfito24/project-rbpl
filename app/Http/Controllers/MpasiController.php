<?php

namespace App\Http\Controllers;

use App\Models\Mpasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MpasiController extends Controller
{
    public function show(){
        $mpasis = Mpasi::all();
        $title = 'Menu';
        return view('menu', compact(['mpasis', 'title']));
    }
}
