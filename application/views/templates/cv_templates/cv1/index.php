<!DOCTYPE html>
<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="../views/templates/cv_templates/cv1/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
<style> html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {border:0;font:inherit;font-size:100%;margin:0;padding:0;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
        display:block;}
    html, body {background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;}
    .clear {clear: both;}
    p {        font-size: 1em;
        line-height: 1.4em;
        margin-bottom: 20px;
        color: #444;}
    #cv {
        width: 90%;
        max-width: 800px;
        background: #f3f3f3;
        margin: 30px auto;}
    .mainDetails {
        padding: 25px 35px;
        border-bottom: 2px solid #cf8a05;
        background: #ededed;}
    #name h1 {
        font-size: 2.5em;
        font-weight: 700;
        font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        margin-bottom: -6px;}
    #name h2 {
        font-size: 2em;
        margin-left: 2px;
        font-family: 'Rokkitt', Helvetica, Arial, sans-serif;}
    #mainArea {
        padding: 0 40px;}
    #headshot {
        width: 12.5%;
        float: left;
        margin-right: 30px;}
    #headshot img {
        width: 100%;
        height: auto;
        -webkit-border-radius: 50px;
        border-radius: 50px;}
    #name {
        float: left;}
    #contactDetails {
        float: right;}
    #contactDetails ul {
        list-style-type: none;
        font-size: 0.9em;
        margin-top: 2px;}
    #contactDetails ul li {
        list-style-type:none;
        margin-bottom: 3px;
        color: #444;}
    #contactDetails ul li a:hover {
        color: #cf8a05;}
    section {
        border-top: 1px solid #dedede;
        padding: 20px 0 0;}
    section:first-child {
        border-top: 0;}
    section:last-child {
        padding: 20px 0 10px;}
    .sectionTitle {
        float: left;
        width: 25%;}
    .sectionContent {
        float: right;
        width: 72.5%;}
    .sectionTitle h1 {
        font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        font-style: italic;
        font-size: 1.5em;
        color: #cf8a05;}
    .sectionContent h2 {
        font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        font-size: 1.5em;
        margin-bottom: -2px;}
    .subDetails {
        font-size: 0.8em;
        font-style: italic;
        margin-bottom: 3px;}
    .keySkills {
        list-style-type: none;
        -moz-column-count:3;
        -webkit-column-count:3;
        column-count:3;
        margin-bottom: 20px;
        font-size: 1em;
        color: #444;}
    .keySkills ul li {

        list-style-type:none;
        margin-bottom: 3px;}
    @media all and (min-width: 602px) and (max-width: 800px) {
        #headshot {
            display: none;}
        .keySkills {
            -moz-column-count:2;
            -webkit-column-count:2;
            column-count:2;}}
    @media all and (max-width: 601px) {
        #cv {
            width: 95%;
            margin: 10px auto;
            min-width: 280px;}
        #headshot {
            display: none;}
        #name, #contactDetails {
            float: none;
            width: 100%;
            text-align: center;}
        .sectionTitle, .sectionContent {
            float: none;
            width: 100%;}
        .sectionTitle {
            margin-left: -2px;
            font-size: 1.25em;}
        .keySkills {
            -moz-column-count:2;
            -webkit-column-count:2;
            column-count:2;}  }
    @media all and (max-width: 480px) {
        .mainDetails {
            padding: 15px 15px;}
        section {
            padding: 15px 0 0;}
        #mainArea {
            padding: 0 25px;}
        .keySkills {
            -moz-column-count:1;
            -webkit-column-count:1;
            column-count:1;}
        #name h1 {
            line-height: .8em;
            margin-bottom: 4px;}  }
    @media print {
        #cv {
            width: 100%;}}
    li{

        list-style-type:none;
    }

</style>
</head>
<body id="top">
<?php $try = $this->Model_resume->view($_SESSION['id']);
    $certif = $this->Model_resume->getCertif($_SESSION['id']);
    $exp = $this->Model_resume->getExp($_SESSION['id']);
    $skill = $this->Model_resume->getSkills($_SESSION['id']);
    $software = $this->Model_resume->getSoftware($_SESSION['id']);
    $hobby = $this->Model_resume->getHobby($_SESSION['id']);
    $language = $this->Model_resume->getLanguage($_SESSION['id']);?>

<div id="cv" class="">
	<div class="mainDetails">

		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $try[0]['firstName'];?> <?php echo $try[0]['lastName'];?></h1>
			<h2 class="quickFade delayThree"><?php echo $try[0]['posteCible'];?></h2>
		</div>

        <div id="contactDetails" class="quickFade delayFour">
			<ul>
                <li><?php echo $try[0]['addr'];?></li>
                <li><?php echo $try[0]['postCode'];?> - <?php echo $try[0]['city'];?></li>
				<li><?php echo $try[0]['mail'];?></li>
                <li><?php echo $try[0]['tel'];?></li>
                <li><?php echo $try[0]['birthDate'];?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Profil</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $try[0]['description'];?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Experiences Professionnelles                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </h1>
			</div>
			
			<div class="sectionContent">
				<?php
                    foreach($exp as $value){
                        echo    '<article>
                                    <h2>'.$value['exp_name'].'</h2>
					                <p class="subDetails">'.$value['exp_date'].'</p>
					                <p>'.$value['exp_decription'].'</p>
				                </article>';
                    }
                ?>
			</div>
			<div class="clear"></div>
		</section>

        <section>
            <div class="sectionTitle">
                <h1>Qualifications</h1>
            </div>

            <div class="sectionContent">
                <?php foreach($certif as $value){
                    echo    '<article>
                                    <h2>'.$value['certif_name'].'</h2>
					                <p class="subDetails">'.$value['certif_date'].'</p>
				                </article>';
                }?>


            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Compétences</h1>
            </div>

            <div class="sectionContent">
                <?php foreach($skill as $value){
                    echo '<article>
                            <h2>'.$value['skills_name'].'</h2>
                            <p class="subDetails">'.$value['skills_level'].'</p>
                        </article>';
                } ?>
            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Langages</h1>
            </div>

            <div class="sectionContent">
                <?php foreach($language as $value){
                    echo '<article>
                            <h2>'.$value['lang_name'].'</h2>
                            <p class="subDetails">'.$value['lang_level'].'</p>
                          </article>';
                }?>
            </div>
            <div class="clear"></div>
        </section>




        <section>
            <div class="sectionTitle">
                <h1>Logiciels</h1>
            </div>

            <div class="sectionContent">
                <?php foreach($software as $value){
                    echo '<article>
                            <h2>'.$value['software_name'].'</h2>
                            <p class="subDetails">'.$value['software_level'].'</p>
                          </article>';
                }?>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Centres d'Interêt</h1>
            </div>

            <div class="sectionContent">
                <?php foreach($hobby as $value){
                    echo '<article>
                            <h2>'.$value['category_name'].'</h2>
                          </article>';
                }?>
            </div>
            <div class="clear"></div>
        </section>



        <a href="http://[::1]/CVTheque/accueil">Retour à l'accueil</a>
	</div>
</div>
</body>
</html>