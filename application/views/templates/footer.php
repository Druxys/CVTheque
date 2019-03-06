
        <footer id="footer">
                <div class="wrap">
                    <div class="columns">
                        <div class="column-info">
                            <h3>Plus d'informations</h3>
                            <address>
                                <strong>NFactory School</strong><br>
                                76600 Rouen, <br>
                                Haute-Normandie, France.<br>
                            </address>
                            <p>NFactory, Incubateur & Accélérateur Normand.</p>
                        </div>
                    </div>

                    <div class="columns">
                        <ul class="social-icons">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="dribble"></a></li>
                            <li><a href="#" class="rss"></a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <div class="column-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>


            <div class="copyright">
                <p>Copyright 2019 Michel Dupont Compagny. Tous droit réservés.</p>
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

            function addInputQualif(){
                var demo = document.getElementById('demoQualif');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="aErase'+num+'">' +
                    '<div class="form-holder" >' +
                    '<input name="atitle[]" type="text" placeholder="Diplômes Reçus"/>' +
                    '</div>' +

                    '<div class="form-holder">' +
                    '<input name="adate[]" type="date"/>' +
                '</div>' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputQualif('+num+')"/>'+
                    '</div>'
                );
                num++;
            }

            function rmInputQualif(num){
                var remove = document.getElementById('aErase'+num);
                remove.remove();
            }
        </script>

        <script>
            // Script affichage 4e partie
            var num = 1;

            function addInputExp(){
                var demo = document.getElementById('demoExp');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="bErase'+num+'">' +
                    '<div class="form-holder" >' +
                    '<input name="btitle[]" type="text" placeholder="Titre"/>' +
                    '</div>' +

                    '<div class="form-holder" >' +
                    '<input name="bdesc[]" type="text" placeholder="Description"/>' +
                    '</div>' +

                    '<div class="form-holder">' +
                    '<input name="bdate[]" type="date" />' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputExp('+num+')"/>' +
                    '</div>'+
                    '</div>');
                num++;
            }

            function rmInputExp(num){
                var remove = document.getElementById('bErase'+num);
                remove.remove();
            }
        </script>

        <script>
            // Script affichage 5e partie
            var num = 1;

            function addInputHobby(){
                var demo = document.getElementById('demoHobby');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="cErase'+num+'">' +
                        '<div class="form-holder" >' +
                            '<input name="ctitle[]" type="text" placeholder="Centre d\'intérêt"/>' +
                        '</div>' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputHobby('+num+')"/>' +
                    '</div>' );
                num++;
            }

            function rmInputHobby(num){
                var remove = document.getElementById('cErase'+num);
                remove.remove();
            }
        </script>

        <script>
            // Script affichage 6e partie
            var num = 1;

            function addInputSkills(){
                var demo = document.getElementById('demoSkills');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="dErase'+num+'">' +
                        '<div class="form-holder" >' +
                            '<input name="dtitle[]" type="text" placeholder="Compétence"/>' +
                        '</div>' +

                        '<div class="form-holder">' +
                            '<select name="dtype[]">' +
                                '<option value="normal">Débutant</option>' +
                                '<option value="add-on">Confirmé</option>' +
                                '<option value="add-on">Expert</option>' +
                            '</select>' +
                        '</div>' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputSkills('+num+')"/>' +
                    '</div>');
                num++;
            }

            function rmInputSkills(num){
                var remove = document.getElementById('dErase'+num);
                remove.remove();
            }
        </script>

        <script>
            // Script affichage 7e partie
            var num = 1;

            function addInputLanguages(){
                var demo = document.getElementById('demoLanguages');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="eErase'+num+'">' +
                        '<div class="form-holder" >' +
                            '<input name="etitle[]" type="text" placeholder="Langage"/>' +
                        '</div>' +

                        '<div class="form-holder">' +
                            '<select name="etype[]">' +
                                '<option value="normal">A1</option>' +
                                '<option value="add-on">A2</option>' +
                                '<option value="add-on">B1</option>' +
                                '<option value="add-on">B2</option>' +
                                '<option value="add-on">C1</option>' +
                                '<option value="add-on">C2</option>' +
                            '</select>' +
                        '</div>' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputLanguages('+num+')"/>' +
                    '</div>');
                num++;
            }

            function rmInputLanguages(num){
                var remove = document.getElementById('eErase'+num);
                remove.remove();
            }
        </script>

        <script>
            // Script affichage 8e partie
            var num = 1;

            function addInputSoftwares(){
                var demo = document.getElementById('demoSoftwares');
                demo.insertAdjacentHTML('beforeend',

                    '<div id="fErase'+num+'">' +
                        '<div class="form-holder" >' +
                            '<input name="fname[]" type="text" placeholder="Logiciel"/>' +
                        '</div>' +

                        '<div class="form-holder">' +
                            '<select name="ftype[]">' +
                                '<option value="normal">Débutant</option>' +
                                '<option value="add-on">Confirmé</option>' +
                                '<option value="add-on">Expert</option>' +
                            '</select>' +
                        '</div>' +
                    '<input class="button2" type="button" id="rmQualif" value="Supprimer" onclick="rmInputSoftwares('+num+')"/>' +
                    '</div>');



                num++;
            }

            function rmInputSoftwares(num){
                var remove = document.getElementById('fErase'+num);
                remove.remove();
            }
        </script>
    </body>
</html>