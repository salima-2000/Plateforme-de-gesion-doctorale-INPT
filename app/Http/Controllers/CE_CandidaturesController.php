<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Candidat;

class CE_CandidaturesController extends Controller
{
    public function index()
    {
        $role = 'Chef d \'equipe';
        $candidatures = 'Candidatures';
        $candidats = DB::select('select distinct nom, prenom, email from candidat c,sujetthese s where s.id in (c.sujet1id, c.sujet2id, c.sujet3id) and  s.proposateur_id=?', [1]);
        $sujets = DB::select('select  titreSujet from sujetthese where proposateur_id=?', [1]);
        
        return view('admin.chef_equipe.candidatures.index' ,  [
            'title' => $candidatures , 
            'candidats' => $candidats ,
            'sujets' => $sujets,
            'role' => $role
        ]);
    }
   
    
   
}
