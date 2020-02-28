<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>
    <style>                      * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }</style>

</head>

<body>
<?php $try = $this->Model_resume->view($_SESSION['id']);
$certif = $this->Model_resume->getCertif($_SESSION['id']);
$exp = $this->Model_resume->getExp($_SESSION['id']);
$skill = $this->Model_resume->getSkills($_SESSION['id']);
$software = $this->Model_resume->getSoftware($_SESSION['id']);
$hobby = $this->Model_resume->getHobby($_SESSION['id']);
$language = $this->Model_resume->getLanguage($_SESSION['id']);?>

    <div id="page-wrap">


            <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
                <h1 class="fn"><?php echo $try[0]['firstName'];?> <?php echo $try[0]['lastName'];?></h1>
                <h2 class="quickFade delayThree"><?php echo $try[0]['posteCible'];?></h2></h1>
        
            <p>
                Tel: <span class="tel"><?php echo $try[0]['tel'];?></span><br />
                Email: <a class="email" href=""><?php echo $try[0]['mail'];?></a><br/>
                Addresse : <?php echo $try[0]['addr'];?> - <?php echo $try[0]['postCode'];?> - <?php echo $try[0]['city'];?>
            </p>
        </div>
                
        <div id="objective">
            <p><?php echo $try[0]['description'];?>
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Expériences</dt>
            <dd>
            <?php
            foreach($exp as $value){
                echo    '<article>
                                    <h2>'.$value['exp_name'].'<span>'.$value['exp_date'].'</span></h2>
					                <span>'.$value['exp_decription'].'</span>
				                </article>';
            }
            ?></dd>
            <dd class="clear"></dd>
            
            <dt>Qualifications</dt>
            <dd><?php foreach($certif as $value){
                    echo    '<article>
                                    <h2>'.$value['certif_name'].'<span>'.$value['certif_date'].'</span></h2>
				                </article>';
                }?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Compétences</dt>
            <dd>
                <?php foreach($skill as $value){
                    echo '<article>
                            <h2>'.$value['skills_name'].'</h2>
                            <p class="subDetails">'.$value['skills_level'].'</p>
                        </article>';
                } ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Langages</dt>
            <dd><?php foreach($language as $value){
                    echo '<article>
                            <h2>'.$value['lang_name'].'</h2>
                            <p class="subDetails">'.$value['lang_level'].'</p>
                          </article>';
                }?></dd>
            
            <dd class="clear"></dd>
            
            <dt>Logiciels</dt>
            <dd><?php foreach($software as $value){
                    echo '<article>
                            <h2>'.$value['software_name'].'</h2>
                            <p class="subDetails">'.$value['software_level'].'</p>
                          </article>';
                }?></dd>
            
            <dd class="clear"></dd>

            <dt>Centres d'interêt</dt>
            <dd>  <?php foreach($hobby as $value){
                    echo '<article>
                            <h2>'.$value['category_name'].'</h2>
                          </article>';
                }?></dd>
        </dl>
        
        <div class="clear"></div>

        <a href="http://[::1]/CVTheque/accueil">Retour à l'accueil</a>
    </div>
</body>

</html>