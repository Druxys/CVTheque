<div class="txt6">
<form id="regForm" method="post" >

    <?php echo validation_errors();
    $try = $this->Model_resume->view($_SESSION['id']);
     echo form_open(''); ?>


    <h1>Créer mon CV</h1>

    <div class="tab">
        <h3>Infos Générales</h3>
        <div class="customSelect">
        <select name="genre">
            <option  value="<?php if(set_select('genre', $try[0]['sexe']) == 'homme') echo 'selected'; ?>">Homme</option>
            <option  value="<?php echo set_select('genre', $try[0]['sexe'] == 'femme') ?>">Femme</option>
            <option  value="<?php echo set_select('genre', $try[0]['sexe'] == 'autre') ?>">Autre</option>
        </select></br>
        <input class="firstInput" type="text" name="firstName" value="<?php echo set_value('firstName', $try[0]['firstName'] ); ?>" size="50" placeholder="Prénom"/></br>
        <input type="text" name="lastName" value="<?php echo set_value('lastName', $try[0]['lastName']); ?>" size="50" placeholder="Nom"/></br>
        <input type="text" name ="nationality" value ="<?php echo set_value('nationality', $try[0]['nationality']); ?>" size="50" placeholder="Nationalité"/></br>
        <input type="date" name="birthDate" value="<?php echo set_value('birthDate', $try[0]['birthDate']); ?>" size="50" /></br>
        <input type="text" name ="application" value ="<?php echo set_value('application', $try[0]['posteCible']); ?>" size="50" placeholder="Poste visé"/></br>
        <input type="text" name ="description" value ="<?php echo set_value('description', $try[0]['description']) ; ?>" size="50" placeholder="Courte description"/></br>


    <div class="tab">
        <h3>Coordonnées</h3>
        <input type="text" name ="address" value ="<?php echo set_value('address', $try[0]['addr']) ; ?>" size="50" placeholder="Addresse"/></br>
        <input type="number" name ="postCode" value ="<?php echo set_value('postCode', $try[0]['postCode']) ; ?>" size="50" placeholder="Code Postal"/></br>
        <input type="text" name ="city" value ="<?php echo set_value('city', $try[0]['city']) ; ?>" size="50" placeholder="Ville"/></br>
        <input type="email" name="mail" value="<?php echo set_value('mail', $try[0]['mail']) ; ?>" size="50" placeholder="Email"/></br>
        <input type="number" name="tel" value="<?php echo set_value('tel', $try[0]['tel']) ; ?>" size="50" placeholder="Téléphone"/></br>
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

