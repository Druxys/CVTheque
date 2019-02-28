<form id="regForm" >
    <?php echo validation_errors(); ?>

    <?php echo form_open('form'); ?>

    <h1>Créer mon CV</h1>

    <div class="tab">
        <h3>Infos Générales</h3>
        <select name="genre">
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>
        </select></br>
        <input class="firstInput" type="text" name="firstName" value="" size="50" placeholder="Prénom"/></br>
        <input type="text" name="lastName" value="" size="50" placeholder="Nom"/></br>
        <input type="text" name ="nationality" value ="" size="50" placeholder="Nationalité"/></br>
        <input type="date" name="birthDate" value="" size="50" /></br>
        <input type="text" name ="application" value ="" size="50" placeholder="Poste visé"/></br>
        <input type="text" name ="description" value ="" size="50" placeholder="Courte description"/></br>
    </div>

    <div class="tab">
        <h3>Coordonnées</h3>
        <input type="text" name ="address" value ="" size="50" placeholder="Addresse"/></br>
        <input type="number" name ="postCode" value ="" size="50" placeholder="Code Postal"/></br>
        <input type="text" name ="city" value ="" size="50" placeholder="Ville"/></br>
        <input type="email" name="mail" value="" size="50" placeholder="Email"/></br>
        <input type="number" name="tel" value="" size="50" placeholder="Téléphone"/></br>
    </div>

    <div class="tab">
        <h2>Contenu </h2>
        <h3>Qualifications</h3>
        <div id="demoQualif"></div><div class="clear"></div>
        <input class="button2" type="button" id="addQualif" value="Add input"/><div class="clear"></div>

        <h3>Expériences (professionelles ou personnelles)</h3>
        <div id="demoExp"></div>
        <input class="button2" type="button" id="addExp" value="Add input"/>

        <h3>Centres D'interêts</h3>
        <div id="demoHobby"></div>
        <input class="button2" type="button" id="addHobby" value="Add input"/>

        <h3>Compétences</h3>
        <div id="demoSkills"></div>
        <input class="button2" type="button" id="addSkills" value="Add input"/>

        <h3>Langages</h3>
        <div id="demoLanguages"></div>
        <input class="button2" type="button" id="addLanguages" value="Add input"/>

        <h3>Logiciels</h3>
        <div id="demoSoftwares"></div>
        <input class="button2" type="button" id="addSoftwares" value="Add input"/>
    </div>

    <div class="tab">CV model:

    </div>

    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>

</form>

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

