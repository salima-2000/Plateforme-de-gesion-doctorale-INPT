<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!--  <script src="script.js" defer></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  
    <!------ Include the above in your HEAD tag ---------->

    <title>Cedoc Inpt</title>
    @yield("styles")
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand&display=swap");

        * {
            /* box-sizing: border-box; */
            margin: 0;
            padding: 0;
        }

        .container {
            min-height: 81%;
        }


        footer {
            /*  position: static; */
            bottom: 0px;
            background-color: #037CC2;
            color: #fff;
            width: 100%;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: large;
            height: 40px;
            /*  margin-bottom: 0;
            margin-top: auto; */
        }

        #back2Top {
            width: 40px;
            line-height: 40px;
            overflow: hidden;
            z-index: 999;
            display: none;
            cursor: pointer;
            -moz-transform: rotate(270deg);
            -webkit-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
            position: fixed;
            bottom: 50px;
            right: 0;
            background-color: #DDD;
            color: #555;
            text-align: center;
            font-size: 30px;
            text-decoration: none;
        }

        #back2Top:hover {
            background-color: #DDF;
            color: #000;
        }

        /*  #contenu {
            height: auto;
            position: relative;
        } */

        /* body {
            
            overflow: visible;
        } */
    </style>
</head>

<body class="header-fixed footer-fixed">
    <header>
        @include('partials.navbar')
    </header>
    <div class="container">
        <main>
            @yield("content")
        </main>
    </div>
    <footer>
        <a id="back2Top" title="Back to top" href="#">&#10148;</a>
        <div>
            <p class="text-footer"> &copy; 2021 Institut National des Postes et Telecommunications</p>
        </div>
    </footer>




    @yield("scripts")



    <script>
        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#back2Top').show();
            } else {
                $('#back2Top').hide();
            }
        });

        
        $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });

        });
        /*Scroll to top when arrow up clicked END*/
    </script>

</body>

</html>