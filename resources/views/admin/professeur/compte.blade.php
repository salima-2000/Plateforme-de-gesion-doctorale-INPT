@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>Nom Prenom</h4>
                                <p class="text-secondary mb-1">Professeur</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                email@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">numero de telephone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                0602164976678
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Roles</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Professeur
                                <br>
                                <br>
                                directeur de These
                                <br>
                                <br>
                                Chef d'equipe
                            </div>


                        </div>

                    </div>
                </div>


                <div class="col-sm-6 mb-3">

                </div>



            </div>
        </div>

    </div>
    <div class="add">
        <button type="button" class="fav btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier Mot de Passe</button>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier Mot de Passe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="current-password" class="champ col-form-label">Taper le mot de passe actuel :</label>
                                <input type="password" class="form-control" id="current-password" autocomplete="current-password" required>
                                <p style="display: none; color:red" id="erreur">Vous n'avez pas bien rempli le champ</p>
                            </div>
                            <div class="form-group">
                                <label for="new-password" class="champ col-form-label">Tapez le nouveau mot de passe :</label>
                                <input type="password" class="form-control" id="new-password" autocomplete="new-password" required>
                                <p style="display: none; color:red" id="erreur">Vous n'avez pas bien rempli le champ</p>
                            </div>
                            <div class="form-group">
                                <label for="new-password-confirm" class="champ col-form-label">Retapez le nouveau mot de passe :</label>
                                <input type="password" class="form-control" id="new-password-confirm" required>
                                <p style="display: none; color:red" id="erreur">Vous n'avez pas bien rempli le champ</p>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary pull-left">Cancel</button>
                            <button type="submit" id="envoi" class="btn btn-primary" >Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection








@section('scripts')
<script>
    $(document).ready(function() {

        var $cur_mdp = $('#current-password'),
            $mdp = $('#new-password'),
            $confirmation = $('#new-password-confirm'),
            $envoi = $('#envoi'),
            $erreur = $('#erreur'),
            $champ = $('.champ');

        /* $champ.keyup(function() {
            if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5
                $(this).css({ // on rend le champ rouge
                    borderColor: 'red',
                    color: 'red'
                });
            } else {
                $(this).css({ // si tout est bon, on le rend vert
                    borderColor: 'green',
                    color: 'green'
                });
            }
        }); */

        $confirmation.keyup(function() {
            if ($(this).val() != $mdp.val()) { // si la confirmation est différente du mot de passe
                $(this).css({ // on rend le champ rouge
                    borderColor: 'red',
                    color: 'red'
                });
            } else {
                $(this).css({ // si tout est bon, on le rend vert
                    borderColor: 'green',
                    color: 'green'
                });
            }
        });

        $reset.click(function() {
            $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
                borderColor: '#ccc',
                color: '#555'
            });
           
        });

        $envoi.click(function(e) {
            e.preventDefault();
            verifier($cur_mdp);
            verifier($mdp);
            verifier($confirmation);
            
        });

        function verifier(champ) {
            if (champ.val() == "") { // si le champ est vide
                champ.css({ // on rend le champ rouge
                    borderColor: 'red',
                    color: 'red'
                });
            }
        }

    });
</script>

@endsection

@section('styles')
<style>
    .btn-primary {
        background-color: #037CC2;
        border-color: #037CC2;
    }

    .add {
        margin: auto;
        width: 200px;
        border-radius: 100px;

    }
</style>
@endsection