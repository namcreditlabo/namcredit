<?php
/**
 * Created by PhpStorm.
 * User: Espopo
 * Date: 23/09/2015
 * Time: 22:05
 */
function mailPub($lesDonnees){


$mail = $lesDonnees['mail']; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $lesDonnees['contenuMessage'];



//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = $lesDonnees['sujet'];
//=========

//=====Création du header de l'e-mail.
$header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========

$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;


//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========



$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout de la pièce jointe.
$message.= "Content-Type: image/jpeg; name=\"image.jpg\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
$message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
//=====Envoi de l'e-mail.

    if(mail($mail,$sujet,$message,$header)) echo "bravo";

//==========
}

$lesDonnees['mail'] = 'espopoameg@gmail.com' ;
$lesDonnees['sujet'] = 'promotion namcredit' ;
$lesDonnees['contenuMessage'] = 'Une promotion de togocel pour vous... alors profiter du moment @namcredit' ;

mailPub($lesDonnees);
?>
