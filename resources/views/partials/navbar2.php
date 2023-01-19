<nav class="mini navbar fixed navbar-expand-lg navbar-light d-flex justify-content-end " style="background-color: #e3f2fd">

    <form class="navbar-form " role="search">

        <div class="input-group ">
            <input type="text" class="form-control sb" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default search" type="submit"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#037CC2" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>

    <a class=" " href="messages" style="margin-left: 5%; margin-right:5%">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#037CC2" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
        </svg>
    </a>
    <!-- Avatar -->
    <a class="dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#037CC2" class="bi bi-person-circle " viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>

    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>





</nav>
<script>
    $('.search').hover(function() {
        $('.form-control').css('display', 'block');

    });
</script>
<style scoped>
    .sb {
        display: none;
        max-height: 40px;
       
    }

    .mini {
        width: 100%;
        margin: auto;
        max-height: 60px;
        

    }

    .input-group{
        justify-items: stretch;
    }
</style>