<div class="txt6">

<form id="regForm" method="post" >

    <?php echo validation_errors();
    $try = $this->Model_resume->view($_SESSION['id']);

    $certif = $this->Model_resume->getCertif($_SESSION['id']);
    $exp = $this->Model_resume->getExp($_SESSION['id']);
    $software = $this->Model_resume->getSoftware($_SESSION['id']);
    $hobby = $this->Model_resume->getHobby($_SESSION['id']);
    $language = $this->Model_resume->getLanguage($_SESSION['id']);

    var_dump($certif);
    echo form_open(''); ?>

    <h1>Créer ou modifier mon CV</h1>

    <div class="tab">
        <h3>Infos Générales</h3>
        <div class="customSelect">

        <select name="genre">
            <option  <?php if ($try[0]['sexe'] === 'homme') {echo 'selected';} ?> >Homme</option>
            <option  <?php if ( $try[0]['sexe'] === 'femme') {echo 'selected';} ?> >Femme</option>
            <option  <?php if ( $try[0]['sexe'] === 'autre'){ echo 'selected';} ?> >Autre</option>
        </select></br>


        </div>
        <input class="form-cv" type="text" name="firstName" value="<?php echo set_value('firstName', $try[0]['firstName'] ); ?>" size="50" placeholder="Prénom"/></br>  <!--class="firstInput"-->
        <input class="form-cv" type="text" name="lastName" value="<?php echo set_value('lastName', $try[0]['lastName']); ?>" size="50" placeholder="Nom"/></br>
        <input class="form-cv" type="text" name ="nationality" value ="<?php echo set_value('nationality', $try[0]['nationality']); ?>" size="50" placeholder="Nationalité"/></br>
        <input class="form-cv" type="date" name="birthDate" value="<?php echo set_value('birthDate', $try[0]['birthDate']); ?>" size="50" /></br>
        <input class="form-cv" type="text" name ="application" value ="<?php echo set_value('application', $try[0]['posteCible']); ?>" size="50" placeholder="Poste visé"/></br>
        <input class="form-cv" type="text" name ="description" value ="<?php echo set_value('description', $try[0]['description']) ; ?>" size="50" placeholder="Courte description"/></br>
    </div>

    <div class="tab">
        <h3>Coordonnées</h3>
        <input class="form-cv" type="text" name ="address" value ="<?php echo set_value('address', $try[0]['addr']) ; ?>" size="50" placeholder="Addresse"/></br>
        <input class="form-cv" type="number" name ="postCode" value ="<?php echo set_value('postCode', $try[0]['postCode']) ; ?>" size="50" placeholder="Code Postal"/></br>
        <input class="form-cv" type="text" name ="city" value ="<?php echo set_value('city', $try[0]['city']) ; ?>" size="50" placeholder="Ville"/></br>
        <input class="form-cv" type="email" name="mail" value="<?php echo set_value('mail', $try[0]['email']) ; ?>" size="50" placeholder="Email"/></br>
        <input class="form-cv" type="number" name="tel" value="<?php echo set_value('tel', $try[0]['tel']) ; ?>" size="50" placeholder="Téléphone"/></br>
    </div>

    <div class="tab">
        <h2>Contenu </h2>
        <h3>Qualifications</h3>
        <div id="demoQualif"></div><div class="clear"></div>
        <input class="button" type="button" id="addQualif" value="Ajouter une qualification" onclick="addInputQualif()"/><div class="clear"></div>

        <h3>Expériences professionelles</h3>
        <div id="demoExp"></div>
        <input class="button" type="button" id="addExp" value="Ajouter une expérience" onclick="addInputExp()"/>

        <h3>Centres D'interêts</h3>
        <div id="demoHobby"></div>
        <input class="button" type="button" id="addHobby" value="Ajouter un centre d'interêt" onclick="addInputHobby()"/>

        <h3>Compétences</h3>
        <div id="demoSkills"></div>
        <input class="button" type="button" id="addSkills" value="Ajouter une compétence" onclick="addInputSkills()"/>

        <h3>Langages</h3>
        <div id="demoLanguages"></div>
        <input class="button" type="button" id="addLanguages" value="Ajouter une langue" onclick="addInputLanguages()"/>

        <h3>Logiciels</h3>
        <div id="demoSoftwares"></div>
        <input class="button" type="button" id="addSoftwares" value="Ajouter un logiciel maitrisé" onclick="addInputSoftwares()"/>
    </div>

    <div class="tab">
        <h3> Veuillez choisir un modèle de CV</h3>
        <div class="preview"><input class="input-hidden" name="idtemplatecvuser" type="radio" id="model2" value="2" <?php if($try[0]['idtemplatecvuser'] === '2'){ echo 'checked';} ?> /><label for="model2"><img src="assets/img/cv2.png" alt="CV2"/></label></div>
        <div class="preview"><input class="input-hidden" name="idtemplatecvuser" type="radio" id="model1" value="1" <?php if($try[0]['idtemplatecvuser'] === '1'){ echo 'checked';} ?> /><label for="model1"><img src="assets/img/cv1.png" alt="CV1"/></label></div>
    </div>
    <div class="clear"></div>
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
    <div class="clear"></div>

    <div class="list">
        <?php
        echo '<div class="boite">';

        foreach($certif as $value){

            echo '<div class="list-text">'.$value['certif_name'];
            echo $value['certif_date'].'</div>';
            if($value['certif_status'] == 1){
                echo '<a href="deleteCertifStatus/'.$_SESSION['id'].'/">Supprimer</a>';
            }else{
                echo'<a href="addCertifStatus/'.$_SESSION['id'].'/">ajouter</a>';
            }
            echo '</br>';
        }   echo '</div>';

        echo '<div class="boite">';
        foreach($exp as $value){
            echo $value['exp_name'];
            echo $value['exp_decription'];
            echo $value['exp_date'];
            if($value['exp_status'] == 1){
                echo '<a href="deleteExpStatus/'.$_SESSION['id'].'/">Supprimer</a>';
            }else{
                echo'<a href="addExpStatus/'.$_SESSION['id'].'/">ajouter</a>';
            }
            echo '</br>';
        }   echo '</div>';

        echo '<div class="boite">';
        foreach($software as $value){
            echo $value['software_name'];
            echo $value['software_level'];
            if($value['software_status'] == 1){
                echo '<a href="deletesoftwareStatus/'.$_SESSION['id'].'/">Supprimer</a>';
            }else{
                echo'<a href="addSoftwareStatus/'.$_SESSION['id'].'/">ajouter</a>';
            }
            echo '</br>';
        }   echo '</div>';

        echo '<div class="boite">';
        foreach($hobby as $value){
            echo $value['category_name'];
            if($value['category_status'] == 1){
                echo '<a href="deleteHobbyStatus/'.$_SESSION['id'].'/">Supprimer</a>';
            }else{
                echo'<a href="addHobbyStatus/'.$_SESSION['id'].'/">ajouter</a>';
            }
            echo '</br>';
        }   echo '</div>';

        echo '<div class="boite">';
        foreach($language as $value){
            echo $value['lang_name'];
            echo $value['lang_level'];
            if($value['lang_status'] == 1){
                echo '<a href="deleteExpStatus/'.$_SESSION['id'].'/">Supprimer</a>';
            }else{
                echo'<a href="addExpStatus/'.$_SESSION['id'].'/">ajouter</a>';
            }
            echo '</br>';
        }   echo '</div>';

        ?>
    </div>
</div>

