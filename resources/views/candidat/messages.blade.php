@extends('layouts.candidat')

@section('content')
@include('partials.navbar2')
<div class="content">
    <br>
    <div class="titre">

        <h1>Boite de Messages</h1>
    </div>
    <br>
    <table class="table table-bordered">

        <thead id="thead">
            <tr>
                <th>N°</th>
                <th>Objet</th>
                <th>De</th>
                <th>Date</th>
                <th>Heure</th>

            </tr>
        </thead>


        <tbody>

            <tr>
                <td><a href="">1</a> </td>
                <td><a href="">Rejet de Candidature</a></td>
                <td>Chef de Cedoc</td>
                <td>12/11/2021</td>
                <td>09:00</td>
            </tr>

        </tbody>




    </table>
    
</div>
@endsection
@section('scripts')

@parent

@endsection

@section('styles')
<style>
    @import url("https://fonts.googleapis.com/css?family=Quicksand&display=swap");

    * {
        box-sizing: border-box;
    }


    #contenu {
        min-height: 100%;
        position: relative;
    }

    html,
    body {
        height: 100%;
    }

    .titre {

        text-align: center;
        color: #037CC2;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        text-decoration: none;
        /* border-left: 3px solid #037CC2;*/


    }
    .table{
        max-width: 600px;
        margin: auto;
    }
    #thead{
        background-color: #037CC2;
    }
    thead tr {
        color: #fff;
        text-align: left;
    }
    a{
        color: black;
        text-decoration: none;
    }
</style>
@endsection