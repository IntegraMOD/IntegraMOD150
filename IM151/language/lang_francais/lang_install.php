<?php
/***************************************************************************
 *                        lang_install.php [English]
 *                            -------------------
 *   begin                : Saturday, July 10, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website              : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *
 *   note: removing the original copyright is illegal even you have modified
 *         the code.  Just append yours if you have modified it.
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Install Process
//
$lang['Welcome_install'] = 'Bienvenue � l\'installation de IntegraMOD151';
$lang['Initial_config'] = 'Configuration de base';
$lang['DB_config'] = 'Configuration de la base de donn�es';
$lang['Admin_config'] = 'Configuration du compte Administrateur';
$lang['continue_upgrade'] = 'Une fois que vous avez t�l�charg� le fichier config vers votre ordinateur, vous pouvez cliquer sur le boutton \'Continuer la Mise � jour\' ci-dessous pour progresser dans le processus de mise � jour. Veuillez attendre la fin du processus de mise � jour avant d\'envoyer le fichier config.';
$lang['upgrade_submit'] = 'Continuer la Mise � jour';

$lang['Installer_Error'] = 'Une erreur s\'est produite durant l\'installation';
$lang['Previous_Install'] = 'Une installation pr�c�dente a �t� d�tect�e';
$lang['Install_db_error'] = 'Une erreur s\'est produite en essayant de mettre � jour la base de donn�es';

$lang['Re_install'] = 'Votre installation pr�c�dente est toujours active. <br /><br />Si vous voulez r�installer phpBB 2, cliquez sur le bouton Oui ci-dessous. Vous �tes conscient qu\'en faisant cela, vous d�truirez toutes les donn�es existantes, aucune sauvegarde ne sera faites! le nom d\'utilisateur de l\'administrateur et le mot de passe que vous utilisez pour vous connecter au forum seront recr��s apr�s la r�installation, mais rien d\'autre ne sera conserv�. <br /><br />R�fl�chissez bien avant d\'appuyer sur Oui!';

$lang['Inst_Step_0'] = 'Merci d\'avoir choisi phpBB 2. Afin d\'achever cette installation, veuillez remplir les d�tails demand�s ci-dessous. Veuillez noter que la base de donn�es dans laquelle vous installez devrait d�j� exister. Si vous �tes en train d\'installer sur une base de donn�es qui utilise ODBC (MS Access par exemple), vous devez d\'abord lui cr�er un SGBD avant de continuer.';

$lang['Start_Install'] = 'D�marrer l\'Installation';
$lang['Finish_Install'] = 'Finir l\'Installation';

$lang['Default_lang'] = 'Langue par d�faut du Forum';
$lang['DB_Host'] = 'Nom du serveur de base de donn�es / SGBD';
$lang['DB_Name'] = 'Nom de votre base de donn�es';
$lang['DB_Username'] = 'Nom d\'utilisateur';
$lang['DB_Password'] = 'Mot de passe';
$lang['Database'] = 'Votre base de donn�es';
$lang['Install_lang'] = 'Choisissez la langue pour l\'installation';
$lang['dbms'] = 'Type de la base de donn�es';
$lang['Table_Prefix'] = 'Pr�fixe des tables';
$lang['Admin_Username'] = 'Nom d\'utilisateur';
$lang['Admin_Password'] = 'Mot de passe';
$lang['Admin_Password_confirm'] = 'Mot de passe [ confirmer ]';

$lang['Inst_Step_2'] = 'Votre compte d\'administration a �t� cr��. A ce point, l\'installation de base est termin�e. Vous allez �tre redirig� vers une nouvelle page qui vous permettra d\'administrer votre nouvelle installation. Veuillez vous assurer de v�rifier les d�tails de la Configuration G�n�rale et d\'op�rer les changements qui s\'imposent. Merci d\'avoir choisi phpBB 2.';

$lang['Unwriteable_config'] = 'Votre fichier config est en lecture seule actuellement. Une copie du fichier config va vous �tre propos�e en t�l�chargement apr�s avoir avoir cliqu� sur le boutton ci-dessous. Vous devrez envoyer ce fichier dans le m�me r�pertoire o� est install� phpBB 2. Une fois termin�, vous pourrez vous connecter en utilisant vos nom d\'utilisateur et mot de passe d\'administrateur que vous avez fourni pr�c�demment, et visiter le Panneau d\'Administration (un lien appara�tra en bas de chaque page une fois connect�) pour v�rifier la Configuration G�n�rale. Merci d\'avoir choisi phpBB 2.';
$lang['Download_config'] = 'T�l�charger config';

$lang['ftp_choose'] = 'Choisir le m�thode de t�l�chargement';
$lang['ftp_option'] = '<br />Tant que les extensions FTP seront activ�s dans cette version de PHP, l\'option d\'essayer d\'envoyer automatiquement le fichier config sur un ftp peut vous �tre donn�e.';
$lang['ftp_instructs'] = 'Vous avez choisi de transf�rer automatiquement via FTP le fichier vers le compte contenant phpBB 2. Veuillez compl�ter les informtions ci-dessous afin de faciliter cette op�ration. Notez que le chemin FTP doit �tre le chemin exact vers le r�pertoire o� est install� phpBB2 comme si vous �tiez en train d\'envoyer le fichier avec n\'importe quel client FTP.';
$lang['ftp_info'] = 'Entrez vos informations FTP';
$lang['Attempt_ftp'] = 'Essayer de transf�rer config vers un serveur ftp';
$lang['Send_file'] = 'Juste m\'envoyer le fichier et je l\'enverrai manuellement sur le serveur ftp';
$lang['ftp_path'] = 'Chemin de phpBB2 FTP';
$lang['ftp_username'] = 'Votre nom d\'utilisateur FTP';
$lang['ftp_password'] = 'Votre mot de passe FTP';
$lang['Transfer_config'] = 'D�marrer le transfert';
$lang['NoFTP_config'] = 'La tentative d\'envoi du fichier config par FTP a �chou�. Veuillez t�l�charger le fichier config et l\'envoyer manuellement sur votre serveur FTP.';

$lang['Install'] = 'Installation';
$lang['Upgrade'] = 'Mise � jour';


$lang['Install_Method'] = 'Choix du type d\'installation';

$lang['Install_No_Ext'] = 'La configuration de php sur votre serveur ne supporte pas le type de base de donn�es que vous avez choisi';


$lang['Install_No_PCRE'] = 'phpBB2 requiert le support des expressions r�guli�res Perl pour PHP, mais votre configuration de PHP ne le supporte apparemment pas !';

$lang['Install_No_File_Open'] = 'Le fichier %s ne peut �tre ouvert, les privil�ges de s�curit� ne sont pas suffisants. Merci de v�rifier les instructions du chmod dans le guide d\'installation.';

$lang['Go_to_prillian'] = 'J\'ai effac� le r�pertoire install... Installation du prillian maintenant...';
$lang['Go_to_profile'] = 'J\'ai effac� les r�pertoires install et prill_install... Compl�ter les d�tails d\'enregistrement de mon compte...';

$lang['Extra_procedures'] = '<tr><th>Proc�dures suppl�mentaires Integramod</center></th></tr><tr><td><p>
Les informations suppl�mentaires requises pour installer Integramod sont indiqu�es ci-dessous. <ul>
<li>Veuillez effacer le r�pertoire install maintenant afin de pr�venir une erreur lorsque l\'installation sera termin�e</li>
		%s
	</ul>
	Si vous avez la moindre question, rendez-vous sur <a href="http://www.integramod.com">integramod.com.</a></p></td></tr>';
$lang['Extra_procedures_no_prillian'] = '<li>Veuillez effacer le r�pertoire prill_install puisque vous ne voulez pas utiliser cette installation.</li>'; // comes inside 'Extra_procedures'

$lang['Admin_config_settings'] = 'Configuration s�curit� phpBB</th>';
$lang['Admin_config_name'] = 'Choisir un nom pour "admin config". Toute entr�e est valide, essayez de la limiter � 1 ou 2 maximum, comme <b>admins_allowed</b>. Il est cependant d�conseill� d\'utiliser cette suggestion.';
$lang['Mod_config_name'] = 'Choisir un nom pour "mod config". Toute entr�e est valide, essayez de la limiter � 1 ou 2 maximum, comme <b>mods_allowed</b>. Il est cependant d�conseill� d\'utiliser cette suggestion.';
$lang['Unwanted_config_name'] = 'Choisir un nom pour "disable config". Toute entr�e est valide, essayez de la limiter � 1 ou 2 maximum, comme <b>block_unwanted</b>. Il est cependant d�conseill� d\'utiliser cette suggestion.';
$lang['No_prillian_wanted'] = 'Marquez cette case pour <strong>ne pas</strong> installer le prillian.';
$lang['Install_options'] = 'Options d\'installation';

?>