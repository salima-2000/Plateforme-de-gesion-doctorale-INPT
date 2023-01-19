@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Informations Personnelles
                </div>
                <br>
                <form>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Nom Complet :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Kalim Amal" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-3 col-form-label"><strong>E-mail :</strong> </label>
                        <div class="col-sm-9">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="kalimamal@test.com" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Téléphone :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-5 col-form-label"><strong>Lieu de naissance :</strong> </label>
                        <div class="col-sm-7">
                            <input type="text" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-3 col-form-label"><strong>Etat civil :</strong> </label>
                        <div class="col-sm-9">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Nationalité :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-6 col-form-label"><strong>Statut professionnel :</strong> </label>
                        <div class="col-sm-6">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <div class="card-title">
                    Informations Académiques
                </div>
                <br>
                <form>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Mention Bac :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Kalim Amal" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-3 col-form-label"><strong>Diplome :</strong> </label>
                        <div class="col-sm-9">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="kalimamal@test.com" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Spécialité :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-5 col-form-label"><strong>Etablissement :</strong> </label>
                        <div class="col-sm-7">
                            <input type="text" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-3 col-form-label"><strong>Diplome :</strong> </label>
                        <div class="col-sm-9">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label"><strong>Intitulé PFE :</strong> </label>
                        <div class="col-sm-8">
                            <input type="email" style="border-radius: 50px; " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-6 col-form-label"><strong></strong> </label>
                        <div class="col-sm-6">
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
@section('scripts')

@parent

@endsection
@section('styles')
<style>
    .card {
        padding-top: 5px;
        margin: 15px;
    }

    .col-form-label {
        color: #037CC2;
        font-size: large;

    }

    .form-control {
        max-width: 350px;
        text-align: center;
        font-weight: 400;

    }
    .card-title{
        
        font-weight: 400;
        text-align: center;
        text-decoration: underline;
        color: grey;
    }
</style>
@endsection