<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
   
  

    public function index()
    {
        $role = 'Professeur';
        $dashboard = 'Acceuil' ;
        return view('admin.professeur.welcome', [
            'title' => $dashboard,
            'role' => $role,
        ]);
    }
    public function showFormations()
    {
        $role = 'Professeur';
        $formations = 'Formations proposées';
        return view('admin.professeur.formations_proposées.index' , [
            'title' => $formations,
            'role' => $role,
        ]);
    }
    public function showParticipants()
    {
        $role = 'Professeur';
        return view('admin.professeur.participants.index', [
            'role' => $role,
        ]);
    }
    public function showSujets()
    {
        $sujets = 'Sujets proposés';
        $role = 'Professeur';
        return view('admin.professeur.sujets_proposés.index', [
            'title' => $sujets,
            'role' => $role,
        ]);
    }
    public function showCandidatures()
    {
        $candidatures = 'Candidatures';
        $role = 'Professeur';
        return view('admin.professeur.candidatures.index' ,  [
            'title' => $candidatures,
            'role' => $role,
        ]);
    }
    public function showCompte()
    {
        $role = 'Professeur';
        $compte = 'Mon Compte';
        return view('admin.professeur.compte', [
            'title' => $compte,
            'role' => $role,
        ]);
    }

    public function candidature()
    {
        $candidatures = 'Candidatures';
        return view(' admin.professeur.candidatures.candidature',  ['title' => $candidatures]);
    }
   
}
