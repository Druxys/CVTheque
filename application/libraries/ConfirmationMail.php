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
            'smtp_pass' => 'kfyEjgX7aj1zmQ4ITo3U',
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
//        $ci->email->bcc($_SESSION['email']);
//        $this->email->reply_to('drudrux@gmail.com', 'salcon');

        $ci->email->bcc('projet.nfactory@gmail.com');

        $ci->email->bcc('drudrux@gmail.com');

        $ci->email->to('projet.nfactory@gmail.com');

        $ci->email->subject('Confirmation CV');

        $ci->email->message(utf8_decode('Votre CV a bien     été enregistré sur notre site!'));

        $ci->email->send();

    }

    public function contactMail()
    {
        //Configuration des paramètres pour la librairies email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'projet.nfactory@gmail.com',
            'smtp_pass' => 'kfyEjgX7aj1zmQ4ITo3U',
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
//        $ci->email->bcc($_SESSION['email']);
        $ci->email->bcc('projet.nfactory@gmail.com');
        $ci->email->to('projet.nfactory@gmail.com');

        $ci->email->subject('Confirmation CV');

        //Le contenu de notre message avec le logo qui intègre un lien pour attérir sur le site directement
        $ci->email->message(utf8_decode($content));

        $ci->email->send();


//        $config = Array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'ssl://smtp.googlemail.com',
//            'smtp_port' => 465,
//            'smtp_user' => 'projet.nfactory@gmail.com',
//            'smtp_pass' => 'kfyEjgX7aj1zmQ4ITo3U',
//            'mailtype' => 'html',
//            'charset' => 'utf-8'
//        );
//        $this->load->library('email', $config);
//        $this->email->set_newline("\r\n");
//        $this->email->from('projet.nfactory@gmail.com');
//        $this->email->to('projet.nfactory@gmail.com');
//        $this->email->cc("projet.nfactory@gmail.com");
//        $this->email->subject('Création cv');
//        $this->email->message("Votre CV a bien été envoyé");
//        //Send mail
//        if($this->email->send())
//            $this->session->set_flashdata("email_sent","Votre email a bien été envoyé");
//        else
//            $this->session->set_flashdata("email_sent","Impossible d'envoyer un email");
    }
}