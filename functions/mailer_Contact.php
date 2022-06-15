<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$postreplace1 = str_replace("<", "/'", $_POST["message"]);
$postreplace2 = str_replace(">", "/", $postreplace1);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'bonite.o2switch.net';                //Adresse IP ou DNS du serveur SMTP
$mail->Port = 465;                                  //Port TCP du serveur SMTP
$mail->SMTPAuth = 1;                                //Utiliser l'identification

if($mail->SMTPAuth){
   $mail->SMTPSecure = 'ssl';                       //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username = 'contacts@dany01000110.xyz';           //Adresse email à utiliser
   $mail->Password = 'D%Sy_?,)h04n';                //Mot de passe de l'adresse email à utiliser
}

$mail->CharSet = 'UTF-8';                           //Encodage des caractères
$mail->smtpConnect();                               //Connexion au serveur SMTP
$mail->From = 'contacts@dany01000110.xyz';         //Adresse email de l'expéditeur
$mail->FromName = 'Moi'; //Nom de l'expéditeur

$mail->Subject = 'Prise de contact - '.$_POST['name'];                      //Le sujet du mail
$mail->WordWrap = 50; 			                   //Nombre de caracteres pour le retour a la ligne automatique
$mail->MsgHTML('<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap");
    * {
        color: #143d66;
        font-family: "Montserrat", sans-serif;
    }
</style>
<div style="width:500px;margin:0 auto;padding:20px;border-radius:5px;background-color:rgb(241, 241, 241);">
    <div style="width:calc(100% - 20px);margin:20px auto;padding:10px;border-radius:2.5px;background-color:rgb(231, 231, 231);filter: drop-shadow(0px 0px 5px rgba(169, 173, 175, 0.42));">
        <div style="font-size:1.2em;font-weight:800;user-select:none;text-align:cente;">Détail de la prise de contact :</div>
        <div style="font-size:.9em;font-weight:500;user-select:text;"><span style="font-weight:600;user-select:none;">Nom :</span> '.$_POST['name'].'</div>
        <div style="font-size:.9em;font-weight:500;user-select:text;"><span style="font-weight:600;user-select:none;">Adresse mail :</span> <a href="mailto:'.$_POST['email'].'" target="_blank">'.$_POST['email'].'</a></div>
        <div style="font-size:.9em;font-weight:500;user-select:text;"><span style="font-weight:600;user-select:none;">Message :</span> '.$postreplace2.'</div>
    </div>
</div>'); 		                //Le contenu au format HTML
$mail->IsHTML(true);
$mail->AddAddress('contacts@dany01000110.xyz','Moi'); //Destinataire
if (!$mail->send()) {
    header('Location: ../?errormail='.$mail->ErrorInfo);
} else{
    header('Location: ../?success');
    exit();
}
?>