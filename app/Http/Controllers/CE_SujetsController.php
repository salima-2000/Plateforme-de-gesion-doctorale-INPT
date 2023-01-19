<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Candidat;

class CE_SujetsController extends Controller
{
   
    public function showSujets()
    {
        $role =  'Chef d\' équipe';
        $title = 'Sujets proposés';
        $sujets = '';
        
        return view('admin.chef_equipe.sujets.index', [
            'title' => $title,
            'sujets' => $sujets,
            'role' => $role,
        ]);
    }
    
    
   
}