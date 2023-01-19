@extends('layouts.candidat')

@section('content')

<div class="container2">

    <div class="tab-body" data-id="connexion">
        <form>
            <h3>Connexion</h3>
            <div class="row">
                <i class="far fa-user"></i>
                <input type="email" class="input" placeholder="Entrer votre adresse mail">
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input placeholder="Entrer un mot de passe" type="password" class="input">
            </div>
            <a href="#" class="link">Mot de passe oublié ?</a>
            <a href="postulation"><button class="btn" type="button">Connexion</button></a>
        </form>
    </div>

    <div class="tab-body" data-id="inscription">

        <form>
            <h3>Inscription</h3>
            <div class="row">
                <i class="far fa-user"></i>
                <input type="email" class="input" placeholder="Entrer votre adresse mail">
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" class="input" placeholder="Entrer un mot de passe">
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" class="input" placeholder="Confirmer le mot de passe">

            </div>
            <a href="connexion"><button class="btn" type="button">Inscription</button></a>

        </form>
    </div>

    <div class="tab-footer">
        <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
        <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
    </div>

</div>


@endsection







@section('scripts')

<script>
    let tabs = document.querySelectorAll(".tab-link:not(.desactive)");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            unSelectAll();
            tab.classList.add("active");
            let ref = tab.getAttribute("data-ref");
            document
                .querySelector(`.tab-body[data-id="${ref}"]`)
                .classList.add("active");
        });
    });

    function unSelectAll() {
        tabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        let tabbodies = document.querySelectorAll(".tab-body");
        tabbodies.forEach((tab) => {
            tab.classList.remove("active");
        });
    }

    document.querySelector(".tab-link.active").click();
</script>

@endsection

@section('styles')
<style scoped>
    .container2 {
        position: relative;
        width: 500px;
       /*  min-height: 480px; */
        min-height: 80%;
       /*  max-height: 500px; */
        background-color: #D1E4F8;
        padding: 15px 25px;
        border-radius: 10px;
        font-size: 18px;
        margin-top: 25px;
        margin-left: 30%;
        font-family: "Quicksand", sans-serif;
        margin-bottom: 4%;
       
    }

    .tab-body {
        position: relative;
        display: none;

        height: auto;
        /* max-height: 320px; */
        padding: 15% 5%;
        margin-top: 5%;
        background-color: #fff;
        color: #82ade6de;
        box-shadow: 0px 5px 10px #7c8395;
        border-radius: 30px;
        font-size: 1rem;
    }

    .tab-body.active {
        display: block;
    }

    .row {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #82ade6de;
        padding: 1.8% 0;
        margin: 20px 0;
    }

    .row .input {
        width: 90%;
        border: none;
        outline: none;
        color: #82ade6de;
        font-weight: 550;
    }

    .input::placeholder {
        color: #82ade6ad;
    }

    .link {
        display: inline-block;
        font-size: 0.8em;
        width: 100%;
        text-decoration: none;
        color: #2b384f;
        text-align: right;
    }

    .link:hover {
        text-decoration: underline;
    }

    .btn {
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 50%);
        width: 150px;
        height: 40px;
        border-radius: 50px;
        background-color: #037CC2;
        border: none;
        outline: none;
        color: #ffff;
        cursor: pointer;
    }

    .tab-footer {
        position: relative;
        bottom: 1%;
        left: 70%;
        transform: translate(-50%, 0);
        /* height: 30px; */
        padding-top: 8%;
        padding-bottom: 4%;
        display: flex;
        


    }

    .tab-link {
        text-decoration: none;
        color: #6ba1f9ee;
        margin: 0 6%;
    }

    .tab-link.active {
        font-weight: bold;
    }

    h3 {
        text-align: center;
        color: #037CC2;
        font-size: x-large;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
.far{
    vertical-align: middle;
}
.fas{
    vertical-align: middle;
}
    @media screen and (max-width: 520px) {
        .container {
            width: 100%;
            min-width: 380px;
            min-height: 490px;
        }

        .tab-body {
            width: 100%;
            padding: 15% 5%;
            margin-top: 25%;
            max-height: 420px;
        }
    }
</style>
@endsection