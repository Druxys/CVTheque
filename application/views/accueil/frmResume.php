<div class="container">
    <div class="wrapper">

        <form class="form-wrapper">
            <fieldset class="section is-active"> <!--1e partie -->
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
                <input type="submit" name="" value="save">
            </fieldset>

            <fieldset class="section"> <!--2e partie -->
                <h3>Coordonnées</h3>
                <input type="text" name ="address" value ="" size="50" placeholder="Addresse"/></br>
                <input type="number" name ="postCode" value ="" size="50" placeholder="Code Postal"/></br>
                <input type="text" name ="city" value ="" size="50" placeholder="Ville"/></br>
                <input type="email" name="mail" value="" size="50" placeholder="Email"/></br>
                <input type="number" name="tel" value="" size="50" placeholder="Téléphone"/></br>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--3e partie -->
                <h3>Qualifications</h3>
                <div id="demoQualif"></div><div class="clear"></div>
                <input class="button2" type="button" id="addQualif" value="Add input"/><div class="clear"></div>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--4e partie -->
                <h3>Expériences (professionelles ou personnelles)</h3>
                <div id="demoExp"></div>
                <input class="button2" type="button" id="addExp" value="Add input"/>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--5e partie -->
                <h3>Centres D'interêts</h3>
                <div id="demoHobby"></div>
                <input class="button2" type="button" id="addHobby" value="Add input"/>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--6e partie -->
                <h3>Compétences</h3>
                <div id="demoSkills"></div>
                <input class="button2" type="button" id="addSkills" value="Add input"/>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--7e partie -->
                <h3>Langages</h3>
                <div id="demoLanguages"></div>
                <input class="button2" type="button" id="addLanguages" value="Add input"/>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!--8e partie -->
                <h3>Logiciels</h3>
                <div id="demoSoftwares"></div>
                <input class="button2" type="button" id="addSoftwares" value="Add input"/>
                <input type="submit" value="save">
            </fieldset>

            <fieldset class="section"> <!-- el grande finale -->
                <input class="button2" type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</div>

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



