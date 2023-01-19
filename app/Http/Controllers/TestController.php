<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Candidat;

class TestController extends Controller
{
    public function index()
    {
        
        return view('candidat.index');
    }
   
    
   
    
   
}
