<div class="d-flex flex-row-reverse">
    <div class="p-3 ">     
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#037CC2" class="bi bi-person-circle " viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>  
    </div>
    <div class="p-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#037CC2" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
        </svg></div>
    <div class="p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#037CC2" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
    </div>
</div>


<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>



<style scoped>
    .dropbtn {
   
   cursor: pointer;
}

   /* The container <div> - needed to position the dropdown content */
   .dropdown {
       position: relative;
       display: inline-block;
   }

   /* Dropdown Content (Hidden by Default) */
   .dropdown-content {
       display: none;
       position: absolute;
       background-color: #f9f9f9;
       min-width: 160px;
       box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
   }

   /* Links inside the dropdown */
   .dropdown-content a {
       color: black;
       padding: 12px 16px;
       text-decoration: none;
       display: block;
   }

   /* Change color of dropdown links on hover */
   .dropdown-content a:hover {
       background-color: #f1f1f1
   }

   /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
   .show {
       display: block;
   }
</style>