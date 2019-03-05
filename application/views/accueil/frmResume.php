<div class="txt6">
<form id="regForm" >
    <?php echo validation_errors(); ?>

    <?php echo form_open('form'); ?>

    <h1>Créer mon CV</h1>

    <div class="tab">
        <h3>Infos Générales</h3>
        <div class="customSelect">
        <select name="genre">
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>
        </select>
        </div>
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
        <input class="button2" type="button" id="addQualif" value="Ajouter une qualification"/><div class="clear"></div>

        <h3>Expériences (professionelles ou personnelles)</h3>
        <div id="demoExp"></div>
        <input class="button2" type="button" id="addExp" value="Ajouter une expérience"/>

        <h3>Centres D'interêts</h3>
        <div id="demoHobby"></div>
        <input class="button2" type="button" id="addHobby" value="Ajouter un centre d'interêt"/>

        <h3>Compétences</h3>
        <div id="demoSkills"></div>
        <input class="button2" type="button" id="addSkills" value="Ajouter une compétence"/>

        <h3>Langages</h3>
        <div id="demoLanguages"></div>
        <input class="button2" type="button" id="addLanguages" value="Ajouter une langue"/>

        <h3>Logiciels</h3>
        <div id="demoSoftwares"></div>
        <input class="button2" type="button" id="addSoftwares" value="Ajouter un logiciel maitrisé"/>
    </div>

    <div class="tab">CV model:

    </div>
    <div class="customButton">
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant
                </button>
            </div>
        </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>

</form>
</div>

