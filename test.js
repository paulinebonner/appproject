/*         if employee has direct reports checked 
            document.getElementById('dr-btn').addEventListener('click'), function(){
                var input, supName, ul, li, a, i;
                for (i = 0; i < dropdown.length, i++){
                    supName = document.querySelector("fname").textContent + " " + document.querySelector("lname").textContent
                    //create new li
                    //add supName to nelwy created li
            }
        }*/

        <h2>Search/Filter Dropdown</h2>
        <p>Click on the button to open the dropdown menu, and use the input field to search for a specific dropdown link.</p>

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>
        </div>


<script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

    </script>