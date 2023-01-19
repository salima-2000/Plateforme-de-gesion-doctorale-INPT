@extends('layouts.candidat')

@section('content')
@include('partials.navbar2')
<div class="titre">

    <h1>Candidature</h1>

</div>
<div class="progress">
    <div class="progress-bar " role="progressbar " style="width:0%"></div>
</div>
<br>
<section>
    <div class="modal " tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            An example success alert with an icon
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form class="candidature-form">
                @csrf
                <div class="form-section">

                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Saisir votre Nom</label>
                                <input type="text" id="nom" name="nom" class="form-control  fc  " required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Saisir Votre Prenom</label>
                                <input type="text" id="prenom" name="prenom" class="form-control  fc  " required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Saisir Votre Email</label>
                                <input type="email" id="email" class="form-control  fc" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Telephone</label>
                                <input type="tel" id="tele" class="form-control  fc" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Date de Naissance</label>
                                <input type="date" id="date" name="date" class="form-control  fc" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Lieu de Naissance</label>
                                <input type="text" id="lieu" name="lieu" class="form-control  fc" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Genre :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="homme" value="option1">
                                    <label class="form-check-label" for="homme">
                                        Homme
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="femme" value="option2">
                                    <label class="form-check-label" for="femme">
                                        Femme
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Etat Civil :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="etat" id="marié" value="option1">
                                    <label class="form-check-label" for="marié">
                                        Marié
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="etat" id="celibataire" value="option2">
                                    <label class="form-check-label" for="celibataire">
                                        Celibataire
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Statut :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="statut" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Salarié
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="statut" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Non Salarié
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Nationalité</label>
                                <select id="natio" class="form-control  fc">
                                    <option selected>Marocaine</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Mention Bac</label>
                                <select id="mention" class=" form-control  fc">
                                    <option selected>Excellent</option>
                                    <option>Très Bien</option>
                                    <option>Bien</option>
                                    <option>Assez Bien</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Type d'établissement</label>
                                <select id="etab" class="form-control  fc">
                                    <option selected>Ecole</option>
                                    <option>Faculté</option>

                                </select>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Diplome :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diplome" id="ing" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Ingénieur
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diplome" id="master" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Master
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">

                                <label class="lab">Mention du diplome</label>
                                <select id="mention" class="form-control  fc">
                                    <option selected>Excellent</option>
                                    <option>Très Bien</option>
                                    <option>Bien</option>
                                    <option>Assez Bien</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Specialité</label>
                                <textarea id="specialite" name="specialite" type="text-area" class="form-control  fc" required></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lab">Intitulé du PFE</label>
                                <textarea type="text-area" id="pfe" name="pfe" class="form-control  fc" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="row">
                        <div class="form-group">
                            <label class="lab">Choix 1</label>
                            <div class="row">
                                <div class="col">
                                    <select id="inputChoiceTeam1" class="form-control  fc">
                                        <option selected>Sélectionner équipe</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="inputChoiceSubject1" class="form-control  fc">
                                        <option selected>Sélectionner sujet</option>
                                        <option>...</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label class="lab">Choix 2</label>
                            <div class="row">
                                <div class="col">
                                    <select id="inputChoiceTeam2" class="form-control  fc">
                                        <option selected>Sélectionner équipe</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="inputChoiceSubject2" class="form-control  fc">
                                        <option selected>Sélectionner sujet</option>
                                        <option>...</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="lab">Choix 3</label>
                            <div class="row">
                                <div class="col">
                                    <select id="inputChoiceTeam3" class="form-control  fc">
                                        <option selected>Sélectionner équipe</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="inputChoiceSubject3" class="form-control  fc">
                                        <option selected>Sélectionner sujet</option>
                                        <option>...</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
        </div>
        <div class="form-navigation">

            <button type="button" class="previous btn btn-primary pull-left">Précédent</button>
            <button type="button" class="next btn btn-primary pull-right">Suivant</button>
            <button type="botton" class="submit btn btn-success  pull-right">Sauvegarder</button>
        </div>
        </form>
    </div>

    </div>
</section>
<div class="modal">
</div>
</div>

@endsection
@section('scripts')
<script>
    $(function() {
        var $sections = $('.form-section');
        var $percent = 0;

        function navigateTo(index) {
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index > 0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation .submit').toggle(atTheEnd);
            /*  $(".progress-bar").css("width", percent + "%") */
        }

        function curIndex() {
            return $sections.index($sections.filter('.current'));
        }
        $('.form-navigation .submit').click(function() {
            /*  $percent = $percent + 50;
             $(".progress-bar").css("width", $percent + "%"); */
            $('.modal').show();


        });

        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex() - 1);
            $percent = $percent - 50;
            $(".progress-bar").css("width", $percent + "%");

        });
        /*    // Custom method to validate username
			$.validator.addMethod("usernameRegex", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
			}, "Username must contain only letters, numbers"); */
        $('.form-navigation .next').click(function() {


            $('.candidature-form').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },
                rules: {
                    nom: {
                        required: true,
                        /* usernameRegex: true, */

                    },
                    prenom: {
                        required: true,
                    },
                    tele: {
                        required: true,


                    },
                    date: {
                        required: true,
                    },
                    lieu: {
                        required: true,


                    },
                    pfe: {
                        required: true,
                    },
                    specialite: {
                        required: true,
                    }
                },
                messages: {
                    nom: {
                        required: "The Lastname is required!",
                    },
                    prenom: {
                        required: "The Firstname is required!",
                    },
                    date: {
                        required: "This field is required",
                    },

                }
            });
            if ($('.candidature-form').valid() === true) {
                navigateTo(curIndex() + 1);
                $percent = $percent + 50;
                $(".progress-bar").css("width", $percent + "%");
            }
            /* }); */
        });

        $sections.each(function(index, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        });

        navigateTo(0);
        $('.search').hover(function() {
            $('.sb').css('display', 'none');

        });


    })
</script>

@parent

@endsection

@section('styles')
<style scoped>
    * {
        margin: 0;
        padding: 0;

    }

    .progress {
        margin-left: 230px;
        margin-right: 230px;
        border-radius: 30px;
        /* color: #037CC2; */
    }

    .progress-bar {
        color: #037CC2;
    }

    .card {
        margin-left: 200px;
        margin-right: 200px;
        margin-bottom: 20px;
        padding: 5px;
        border-radius: 30px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }


    .lab {
        line-height: 10px;
        color: gray;
        font-size: 15px;
        margin-bottom: 15px;
        margin-top: 15px;
        margin-left: 6px;
        display: block;
    }

    .fc {
        border-radius: 50px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
        padding-left: 20px;
        font-family: Arial, Helvetica, sans-serif;


    }


    .form-check {
        margin-left: 50px;
    }

    .titre {

        text-align: center;
        color: #037CC2;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        text-decoration: none;
        /* border-left: 3px solid #037CC2;*/


    }

    .form-section {
        display: none;
    }

    .form-section.current {
        display: inherit;
    }

    /* .parsley-errors-list {
        margin: 2px 0 3px;
        color: red;
        list-style-type: none;
        padding: 0;
    } */

    .btn {
        margin-top: 10px;
        margin-bottom: 20px;
        width: 15%;
        border-radius: 30px;


    }

    .submit {
        width: 20%;
    }

    .pull-right {
        margin-right: 14px;
    }

    .pull-left {
        margin-left: 16px;
    }

    .btn-primary {
        background-color: #037CC2;
        border-radius: 30px;
    }

    .has-error {
        color: red;

        font-size: small;
    }

    .select {
        border-radius: 30px;
    }
    
</style>

@endsection