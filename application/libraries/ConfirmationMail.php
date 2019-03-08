<?php

class ConfirmationMail
{
    public function confirmationCv()
    {

        //Configuration des paramètres pour la librairies email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'projet.nfactory@gmail.com',
            'smtp_pass' => 'Azert123456&',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );

        //On défini une instance général de CodeIgniter car le this ne fonctionne pas
        $ci = &get_instance();

        //On charge la librairie email avec les configs au dessus
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");
        //On définit les destinataires et les émetteurs
        $ci->email->from('projet.nfactory@gmail.com');
        $ci->email->bcc('projet.nfactory@gmail.com');
        $ci->email->to($_SESSION['email']);
        $ci->email->subject('Confirmation CV');
        $ci->email->message(utf8_decode('Votre CV a bien été enregistré sur notre site!'));
        $ci->email->send();

    }

    public function contactMail($user, $content)
    {
        //Configuration des paramètres pour la librairies email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'projet.nfactory@gmail.com',
            'smtp_pass' => 'Azert123456&',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );

        //On défini une instance général de CodeIgniter car le this ne fonctionne pas
        $ci = get_instance();
        //On charge la librairie email avec les configs au dessus
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");

        //On définit les destinataires et les émetteurs
        $ci->email->from('projet.nfactory@gmail.com');
        $ci->email->bcc($_SESSION['email']);
        $ci->email->to('projet.nfactory@gmail.com');
        $ci->email->subject('Un utilisateur nous a contacté!');
        $ci->email->message(utf8_decode('Un utilisateur nous à laissez un message sous le nom de '. $user .'. Voici son message : ' . $content . '. Pour le recontacter, il nous a laissé une adresse mail : '. $_SESSION['email']));
        $ci->email->send();

    }
}