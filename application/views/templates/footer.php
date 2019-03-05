
        <footer id="footer">
                <div class="wrap">

                </div>
        </footer>

        <!-----------------------------------------------Custom Navbar-------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Fonction pour ajouter un fond noir sur la navbar -->
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
        <!-------------------------------------------Formulaire mon CV------------------------------------------------->

        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
// This function will display the specified tab of the form ...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
// ... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
// ... and run a function that displays the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
// This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
// Hide the current tab:
                x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
// if you have reached the end of the form... :
                if (currentTab >= x.length) {
//...the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
// Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
// This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
// If a field is empty...
                    if (y[i].value == "") {
// add an "invalid" class to the field:
                        y[i].className += " invalid";
// and set the current valid status to false:
                        valid = false;
                    }
                }
// If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
// This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
//... and adds the "active" class to the current step:
                x[n].className += " active";
            }
        </script>

        <script>
            // Script affichage 3e partie
            var num = 1;
            document.getElementById('addQualif').addEventListener("click",addInputQualif);

            function addInputQualif(){
                var demo = document.getElementById('demoQualif');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Diplômes Reçus</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : Baccalauréat Général" style="float:left;width: 75%;" />' +
                    '</div>' +

                    '<div class="form-holder" style="float: right; width: 18%;">' +
                    '<input name="tquan'+num+'" type="date" style="width: 100%;" />' +
                    '</div>' +
                    '</div><div class="clear"></div>');
                num++;
            }
        </script>

        <script>
            // Script affichage 4e partie
            var num = 1;
            document.getElementById('addExp').addEventListener("click",addInputExp);

            function addInputExp(){
                var demo = document.getElementById('demoExp');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Expériences(professionelles ou personnelles)</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : Garde d\'enfants, Organisations d\évenements" style="float:left;width: 75%;" />' +
                    '</div>' +

                    '<div class="form-holder" style="float: right; width: 18%;">' +
                    '<input name="tquan'+num+'" type="date" style="width: 100%;" />' +
                    '</div>' +
                    '</div><div class="clear"></div>');
                num++;
            }
        </script>

        <script>
            // Script affichage 5e partie
            var num = 1;
            document.getElementById('addHobby').addEventListener("click",addInputHobby);

            function addInputHobby(){
                var demo = document.getElementById('demoHobby');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Centre d\'interêt</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : Sport, Voyages..." style="float:left;width: 75%;" />' +
                    '</div>' +
                    '</div><div class="clear"></div>');
                num++;
            }
        </script>

        <script>
            // Script affichage 6e partie
            var num = 1;
            document.getElementById('addSkills').addEventListener("click",addInputSkills);

            function addInputSkills(){
                var demo = document.getElementById('demoSkills');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Compétences</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : informatique, communication" style="float:left;width: 50%;" />' +
                    '</div>' +

                    '<div class="form-holder" style="float: right; width: 40%;">' +
                    '<select name="ttype'+num+'">' +
                    '<option value="normal">Débutant</option>' +
                    '<option value="add-on">Confirmé</option>' +
                    '<option value="add-on">Expert</option>' +
                    '</select>' +
                    '</div><div class="clear"></div>');
                num++;
            }
        </script>

        <script>
            // Script affichage 7e partie
            var num = 1;
            document.getElementById('addLanguages').addEventListener("click",addInputLanguages);

            function addInputLanguages(){
                var demo = document.getElementById('demoLanguages');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Langages</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : English..." style="float:left;width: 50%;" />' +
                    '</div>' +

                    '<div class="form-holder" style="float: right; width: 40%;">' +
                    '<select name="ttype'+num+'">' +
                    '<option value="normal">A1</option>' +
                    '<option value="add-on">A2</option>' +
                    '<option value="add-on">B1</option>' +
                    '<option value="add-on">B2</option>' +
                    '<option value="add-on">C1</option>' +
                    '<option value="add-on">C2</option>' +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class="clear"></div>');
                num++;
            }
        </script>

        <script>
            // Script affichage 8e partie
            var num = 1;
            document.getElementById('addSoftwares').addEventListener("click",addInputSoftwares);

            function addInputSoftwares(){
                var demo = document.getElementById('demoSoftwares');
                demo.insertAdjacentHTML('beforeend',

                    '<div>' +
                    '<div class="form-holder" >' +
                    '<a class="form-label" style="float:left;">Compétences</a> <br>' +
                    '<input name="tname'+num+'" type="text" placeholder="Ex : informatique, communication" style="float:left;width: 50%;" />' +
                    '</div>' +

                    '<div class="form-holder" style="float: right; width: 40%;">' +
                    '<select name="ttype'+num+'">' +
                    '<option value="normal">Débutant</option>' +
                    '<option value="add-on">Confirmé</option>' +
                    '<option value="add-on">Expert</option>' +
                    '</select>' +
                    '</div>' +
                    '</div><div class="clear"></div>');
                num++;
            }
        </script>
    </body>
</html>