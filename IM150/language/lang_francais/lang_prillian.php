<?php
/***************************************************************************
 *                          lang_prillian.php [English]
 *                            -------------------
 *   begin                : Friday, Jan 31, 2003
 *   version              : 0.7.0
 *   date                 : 2003/12/23 23:21
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
// The file will be included separately of other language files as needed, but must
// be included after lang_main.php and/or lang_admin.php
//
//

// Do not change the next six lines.
// Avoid including the file more than once.
if ( defined('IN_PRILLIAN_LANG') )
{
	return;
}
define('IN_PRILLIAN_LANG', true);

// You may want to edit the following lines to match your website.
$lang['Launch_Prillian'] = 'Ouvrir Prillian';  // Link for opening the IM Client
$lang['Prillian_FAQ'] = 'Messagerie instantan�e (MI)';   // Title of the IM FAQ
$lang['Prillian'] = 'Prillian';  // Name of Prillian, used throughout the scripts

$lang['New_ims'] = 'Vous avez %d nouveaux messages'; // You have 2 new IMs
$lang['New_im'] = 'Vous avez %d nouveau message'; // You have 1 new IM
$lang['Unread_ims'] = 'Vous avez %d nouveaux messages non lus'; // You have 2 new IMs
$lang['Unread_im'] = 'Vous avez %d nouveau message non lu'; // You have 1 new IM

// Main IM Client/Who's Online window
$lang['Users_Online'] = 'Utilisateurs connect�s';
$lang['Buddies_Online'] = 'Contacts connect�s';
$lang['Hidden_Users_Online'] = 'Utilisateurs invisibles connect�s';
$lang['Guests_Online'] = 'Invit�s connect�s';
$lang['Close_windows'] = 'Fermer la fen�tre';
$lang['Send_im'] = 'Envoyer un message instantan� (MI)';
$lang['IM'] = 'MI';
$lang['PM'] = 'MP';
$lang['New_messages'] = 'Nouveaux messages et messages non lus';


// Controls panels
$lang['Controls'] = 'Contr�les';
$lang['Check_IMs'] = 'V�rifier ses MIs';
$lang['Message_Log'] = 'Messages enregistr�s';
$lang['Alt_Message_Log'] = 'Ouvrir les messages enregistr�s';
$lang['Alt_New_Messages'] = 'V�rifier les nouveaux messages';
$lang['Alt_Home'] = 'Retourner aux forums';
$lang['Alt_Close_Windows'] = 'Fermer toutes les fen�tres annexes';
$lang['Alt_Prefs'] = 'Editer les pr�f�rences de ' . $lang['Prillian'] . '';
$lang['Alt_Logout'] = 'D�connecter du forum et de  ' . $lang['Prillian'];
$lang['Prillian_Help'] = 'Aide';


// Sending/replying
$lang['phpBB_IM_default_subject'] = $lang['Message'];
$lang['Send_new_im'] = 'Envoyer un nouveau message instantan�';
$lang['Select_emoticon'] = 'S�lectionner les Smileys';
$lang['Save_reply_pm'] = 'Sauvegarder et r�pondre';
$lang['Save_close_pm'] = 'Sauvegarder et fermer';
$lang['Delete_reply_pm'] = 'Effacer et r�pondre';
$lang['Delete_close_pm'] = 'Effacer et fermer';
$lang['IM_Quick_reply'] = 'R�ponse rapide';


// Error messages
$lang['Close_window_link'] = '<br /><br /><a href="javascript:window.close();">' . $lang['Close_window'] . '</a>';
$lang['IM_disabled'] = 'D�sol�, mais la messagerie instantan�e est d�sactiv�e sur ce forum.';
$lang['Ims_not_allowed'] = 'D�sol�, mais la messagerie instantan�e a �t� d�sactiv�e pour ce compte d\'utilisateur.';
$lang['Ims_not_allowed_fail'] = 'La d�sactivation de la messagerie instantan�e pour ce compte d\'utilisateur ne peut �tre v�rifi�e.';
$lang['Cannot_send_im'] = 'D�sol�, mais la messagerie instantan�e a �t� d�sactiv�e pour votre compte. Si c\'est de votre fait, vous pouvez l\'activer dans vos %spreferences%s.';
$lang['Cannot_send_im_admin'] = 'D�sol�, mais la messagerie instantan�e a �t� d�sactiv�e pour votre compte par un administrateur du forum.';
$lang['Please_set_im_prefs'] = 'Vous n\'avez pas d�fini vos pr�f�rences pour la messagerie instantan�e. SVP, prenez un moment pour le faire %sici%s.';
$lang['Admin_override'] = 'D�sol� mais un administrateur a configur� le forum pour ignorer les pr�f�rences utilisateur et les remplacer par les pr�f�rences globales du forum. Vous ne pouvez pas changer vos pr�f�rences tant que cette option est activ�e.';
$lang['Too_many_ims'] = 'D�sol� mais cet utilisateur � trop de messages instantan� en attente d\'�tre lus. R�essayez plus tard.';
$lang['No_autoclose'] = 'Si vous voyez ce message, alors l\'option de fermeture automatique de fen�tre de ' . $lang['Prillian'] . ' ne marche pas avec votre navigateur. Une des causes possibles peut �tre la d�sactivation du Javascript dans votre navigateur. SVP, fermez cette fen�tre.';
$lang['User_no_im'] = 'Vous ne pouvez pas envoyer de messages instantan� � cet utilisateur. ';
$lang['No_im_reply_info'] = 'Aucune information disponible pour ce message. Cela veut sans doute dire qu\'il a d�j� �t� automatiquement effac�.';
$lang['No_Admins_Found'] = 'Aucun administrateur de forum ne peut �tre trouv� dans la base de donn�es.';
$lang['No_post_type'] = 'Le type de message ne peut �tre d�fini.';
$lang['Admin_no_user_from'] = 'Aucun exp�diteur ne peut �tre d�fini pour une v�rification.';
$lang['Admin_no_user_to'] = 'Aucun destinataire ne peut �tre d�fini pour une v�rification.';


// Site to Site
$lang['IM_no_users_online'] = 'Il n\'y aucun utilisateur connect�.';
$lang['Online_at'] = 'Utilisateur est connect� � ';
$lang['User_from'] = 'Utilisateur de ';


// Admin Site to Site
$lang['URL'] = 'URL';
$lang['Extension'] = 'Extension de Fichier';
$lang['Profile_path'] = 'Chemin vers le profil';
$lang['Extension_explain'] = 'C\'est "php" par d�faut';
$lang['Profile_path_explain'] = 'C\'est "profil" par d�faut';


// Preferences editor
$lang['Prillian_Profile_updated'] = 'Vos pr�f�rences ont �t� mises � jour.<br /><br />Si n�cessaire, cliquez %sici%s pour recharger la messagerie instantan�e.';

$lang['User_allow_ims'] = 'Activer le syst�me de messagerie instantan�e pour ce compte';
$lang['User_allow_shout'] = 'Autoriser l\'utilisation de la Shoutbox';
$lang['User_allow_chat'] = 'Autoriser l\'utilisation du chat';
$lang['Always_add_sig_explain'] = 'les signatures peuvent �tre chang�es dans votre profil';
$lang['Refresh_rate'] = 'Taux de rafra�chissement de la fen�tre principale';
$lang['Refresh_rate_explain1'] = 'Nombre de secondes entre chaque rafra�chissement dans la messagerie instantan�e.';
$lang['Refresh_rate_explain2'] = 'Temps entre chaque rafra�chissement dans la messagerie instantan�e.';
$lang['Success_close'] = 'Fermer automatiquement la fen�tre de message apr�s l\'envoi d\'un message';
$lang['Refresh_method'] = 'Choisir la m�thode de rafra�chissement pour la messagerie instantan�e';
$lang['Refresh_method_explain'] = 'L\'utilisation des deux m�thodes est recommand�e';
$lang['JavaScript'] = 'JavaScript';
$lang['META_tag'] = 'META tag'; 
$lang['Use_both_methods'] = 'Utiliser les deux m�thodes';
$lang['IM_auto_launch_pref'] = 'Ouvrir la messagerie quand vous visitez l\'index du forum'; 
$lang['IM_auto_popup'] = 'Ouvrir automatiquement les nouveaux messages';
$lang['IM_list_new'] = 'Afficher la liste des nouveaux messages et des messages non-lus dans la fen�tre principale';
$lang['Show_controls'] = 'Montrer le panneau de contr�le';

// Do not change the [0], [1], etc. parts of the following
$lang['Controls_select'][0] = 'Ne pas montrer';
$lang['Controls_select'][1] = 'Comme images seulement';
$lang['Controls_select'][2] = 'Comme liens seulement';
$lang['Controls_select'][3] = 'Les deux';
$lang['Who_to_list'] = 'Afficher ces utilisateurs dans la fen�tre principale';
$lang['Online_Lists'][1] = 'Tous les utilisateurs connect�s';
$lang['Online_Lists'][2] = 'Contacts sur les forums';
$lang['Online_Lists'][3] = 'Contacts sur la messagerie instantan�e';
$lang['Online_Lists'][4] = 'tous les contacts sur la messagerie instantan�e';

// Include any options you want in the refresh rate drop down list here
// They should be in this format:
// $lang['Refresh_times']['number of seconds'] = 'name in list';
// The number of seconds can be no longer than 5 digits, unless you alter
// the im_prefs database table.
$lang['Refresh_times'][60] = '1 minute';
$lang['Refresh_times'][120] = '2 minutes';
$lang['Refresh_times'][180] = '3 minutes';
$lang['Refresh_times'][240] = '4 minutes';
$lang['Refresh_times'][300] = '5 minutes';

$lang['IM_play_sound'] = 'Jouer un son en cas de nouveau message';
$lang['Default_sound'] = 'Utiliser le son par d�faut du forum';
$lang['Current_sound'] = 'Fichier actuel du son';
$lang['IM_style'] = 'Style utilis� par ' . $lang['Prillian'];
$lang['Width'] = 'Largeur';
$lang['Height'] = 'Hauteur';
$lang['Read_Message'] = 'Lire le message';
$lang['Send_Message'] = 'Envoyer le message';
$lang['Set_window_sizes'] = 'D�finir les dimensions de fen�tre';
$lang['Set_window_sizes_explain'] = 'Toutes les dimensions sont en pixels';
$lang['Open_pms'] = 'Ouvrir et/ou afficher la liste des messages priv�s';
$lang['Auto_delete_ims'] = 'Activer la suppression automatique des messages instantan�s lus, au rafra�chissement de la messagerie instantan�e.';

// Admin preferences editor
$lang['Admin_allow_ims'] = 'Autoriser l\'utilisateur � envoyer et recevoir des messages instantan�s';
$lang['Admin_allow_shout'] = 'Autoriser l\'utilisateur � utiliser la Shoutbox';
$lang['Admin_allow_chat'] = 'Autoriser l\'utilisateur � utiliser le chat';
$lang['IM_user_auto_launch'] = 'Ouvrir automatiquement la messagerie instantan�e dans un utilisateur visite l\'index du forum et est connect�';
$lang['Admin_user_added'] = 'L\'utilisateur a �t� ajout� � la base de donn�es des pr�f�rences.';
$lang['Admin_Set_window_sizes'] = 'Activer les dimensions par d�faut des fen�tres';


// Admin Configuration
$lang['IM_auto_launch'] = 'Ouvrir la messagerie instantan�e automatiquement quand un utilisateur connect� visite l\'index du forum.'; 
$lang['IM_box_limit'] = 'Nombre maximum de messages instantan�s non lus';
$lang['IM_enable_flood'] = 'Activer le contr�le du Flood';
$lang['IM_override_settings'] = 'Ignorer les options personnelles de l\'utilisateur';
$lang['IM_override_settings_explain'] = 'Ceci d�sactivera les pr�f�rences de l\'utilisateur et activera les options d�finies par d�faut du forum';
$lang['IM_enable_ims'] = 'Activer le syst�me de messagerie instantan�e';
$lang['IM_enable_shoutbox'] = 'Activer la Shoutbox';
$lang['IM_enable_chatbox'] = 'Activer le Chat';
$lang['IM_refresh_drop'] = 'Utiliser une liste d�roulante vers le bas quant � la pr�f�rence de l\'utilisateur pour son taux de rafra�chissement';
$lang['IM_sound_name'] = 'Localisation du fichier son';
$lang['IM_allow_sound'] = 'Autoriser les utilisateurs � entendre un son quand ils re�oivent un nouveau message';
$lang['IM_default_sound'] = 'Autoriser les utilisateurs � entendre leur son personnel';
$lang['IM_allow_different_style'] = 'Autoriser ' . $lang['Prillian'] . ' � utiliser un th�me diff�rent de celui du reste du forum';
$lang['Prillian_Config'] = 'Configuration g�n�rale de ' . $lang['Prillian'] . ' ';
$lang['Prillian_Config_explain'] = 'Le champ ci-dessous vous autorise � configurer toutes les options g�n�rales de la messagerie. Elles sont utilis�es pour d�finir les comportements par d�fauts et les options de l\'utilisateur. Pour les configurations individuelles des utilisateurs, utilisez les liens ad�quats dans l\'autre cadre.';
$lang['IM_session_length'] = 'Dur�e en Secondes de la session de messagerie';
$lang['IM_session_length_explain'] = 'Cette fonction est utilis�e pour d�terminer si un utilisateur est actif sur la messagerie. Il est recommand� de mettre une valeur plus grande que le taux de rafra�chissement.';
$lang['IM_enable_imbox_limit'] = 'Activer la limite maximum de messages instantan�s non-lus';


// Message Log
$lang['Messages_Sent_by'] = 'Messages envoy�s par ';
$lang['Messages_Received_by'] = 'Messages re�us par ';
$lang['Offsite_Messages_Sent_by'] = 'Messages hors-site envoy�s par ';
$lang['Offsite_Messages_Received_by'] = 'Messages hors-site re�us par ';
$lang['Received'] = 'Re�u(s)';
$lang['Offsite_Received'] = 'Hors-Forum re�u(s)';
$lang['Offsite_Sent'] = 'Hors-Forum envoy�(s)';
$lang['No_sent'] = 'Il n\'y a aucun message (envoy� par vous) enregistr�.';
$lang['No_received'] = 'Il n\'y a aucun message (re�u par vous) enregistr�.';
$lang['Message_Log_admin_explain'] = 'Ici vous pouvez voir les messages instantan�s envoy�s et re�us par vos utilisateurs.';



/* Entries Added in 0.7.0 */
$lang['Prill_new_posts'] = 'Posts sepuis la derni�re visite';
$lang['No_prill_config'] = 'Les informations de configuration de Prillian ne peuvent �tre consult�es';
$lang['No_prill_prefs'] = 'Les pr�f�rences de la messagerie instantan�e ne peuvent �tre consult�es';
$lang['No_prill_userprefs'] = 'Utilisateur non trouv� dans le tableau des pr�f�rences de la messagerie instantan�e';
$lang['Not_authed_im_delete'] = 'D�sol�, vous ne pouvez pas effacer les messages que vous avez envoy�.';
$lang['Back_to_log'] = '%sRevenir aux messages enregistr�s%s';
$lang['Mini_Client_Window'] = 'Mode mini-messagerie';
$lang['Use_frames'] = 'Utiliser des cadres dans la messagerie instantan�e';
$lang['Use_frames_explain'] = 'Utiliser des cadres acc�l�re le chargement de la page quand vous consultez vos nouveaux messages.';
$lang['Use_frames_explain_admin'] = $lang['Use_frames_explain'] . ' Cela peut sauvegarder de la bande passante et ainsi soulager votre serveur.';
$lang['Default_mode'] = 'Mode � utiliser � l\'ouverture de la messagerie instantan�e';

// Do not change the [0], [1], etc. parts of the following
$lang['Default_mode_select'][0] = 'Dernier mode utilis�';
$lang['Default_mode_select'][1] = 'Modes: <u>Normal</u>';
$lang['Default_mode_select'][2] = '<u>Etendu</u>';

//Be careful! Do not uncomment the next line!
//$lang['Default_mode_select'][3] = 'Mini Mode';
$lang['Size'] = 'Taille';
$lang['Color'] = 'Couleur';
$lang['Enabled_explain'] = 'Si vous mettez Non, vos utilisateurs ne seront pas autoris� � interagir avec ce site.';
$lang['Profile_path_ex_expanded'] = 'Entrez le chemin relatif � votre fichier profile.php, par rapport � la racine du forum (r�pertoire o� se trouve votre forum). Ceci est utilis� par l\'option d\'auto-d�tection du syst�me de messagerie � distance quand les administrateurs d\'autres sites tentent d\'auto-d�tecter votre site. Ne mettez pas l\'extension du fichier, mettez "profile" et pas "profile.php"';
$lang['Network_autodetect'] = 'D�tecter automatiquement un nouveau site';
$lang['Network_autodetect_explain'] = 'Entrez l\'URL d\'un forum en-dessous, et Prillian tentera de se connecter � une messagerie Prillian sur le forum de cette URL. Si la connexion est �tablie, Prillian essayera d\'ajouter automatiquement ce site � votre liste  de messagerie � distance.<br /><br />Quand vous entrez une URL, assurez vous qu\'elle commence par soit http:// ou ftp:// et se termine par un slash (/). Aucun nom de fichier ne doit �tre inclus. Voici une URL correcte:<br />http://darkmods.sourceforge.net/mb/<br /><br />Les URL suivantes sont fausses:<br />darkmods.sourceforge.net/mb/<br />http://darkmods.sourceforge.net/<br />darkmods.sourceforge.net/mb<br />http://darkmods.sourceforge.net/mb/imclient.php<br />';
$lang['No_allow_url_fopen'] = 'La configuration PHP allow_url_fopen setting n\'est pas activ�e. Cela veut dire que les scripts PHP sur ce serveur ne peuvent pas se connecter � des sites �loign�s. Vous ne pouvez donc pas utiliser la messagerie � distance. Sur la mani�re d\'activer cette option, veuillez vous adresser � votre h�bergeur ou � l\'administrateur de votre serveur. Si vous *�tes* cette personne et que vous avez besoin de plus d\'informations, consultez le<a href="http://www.php.net/manual" target="_blank">Manuel PHP</a>, particuli�rement les chapitres de configuration.<br /><br />Si vous voyez ce message, vous devriez d�sactiver la messagerie � distance dans la configuration de Prillian afin d\'acc�l�rer la vitesse du programme . Vous pourrez activer la messagerie � distance plus tard si vous le d�sirez.';
$lang['ND_cannot_add'] = 'Le site dont vous avez entrez l\'URL ne peut pas �tre ajout� � votre messagerie � distance.';
$lang['ND_no_connect'] = 'le script ne peut pas se connecter au site �loign� en utilsant cette URL :';
$lang['ND_no_connect_explain'] = 'SVP, assurez-vous que vous avez taper l\'URL correctement, et qu\'elle commence par soit http:// soit ftp://. V�rifiez aussi que le site que vous voulez atteindre est connect�. Si ce n\'est pas le cas essayez plus tard.<br /><br />Si l\'URL est correcte et le site est connect�, Alors les composants pour la messagerie � distance de Prillian ne sont pas install�s � cette URL. ' . $lang['ND_cannot_add'];
$lang['ND_disabled'] = 'La messagerie � distance est d�sactiv�e sur le site �loign�. ' . $lang['ND_cannot_add'];
$lang['ND_connected'] = 'Le script a pu se connecter au site �loign� avec succ�s !';
$lang['ND_enabled'] = 'La messagerie � distance est activ�e sur le site �loign�.';
$lang['ND_version'] = 'Une version diff�rente de Prillian est install�e sur le site �loign�, aussi il peut y avoir des conflits entre votre version et celle du site �loign�. Nous utiliserons l\'auto-d�tection pour le moment.';
$lang['ND_060'] = 'Le script a d�tect� que Prillian 0.6.0 est install� sur le site �loign�. Prillian 0.6.0 ne supporte pas l\'auto-detection, et le script ne peut ajout� ce site � votr liste de messagerie � distance. Vous pouvez l\'ajouter manuellement, si vous le d�sirez. Vous pouvez aussi sugg�rer � l\'administrateur du site �loign� de passer � la derni�re version de Prillian.';
$lang['ND_Unnamed_Site'] = 'Site non nomm� d�tect�';
$lang['ND_data_error'] = 'Il y a quelques probl�mes avec les informations d\'auto-d�tection en pr�venance du site �loign�, aussi ce site sera ajout� � votre messagerie � distance sous un statut d�sactiv� avec au moins une valeur par d�faut entr�e. Vous devriez revoir les informations par l\'Editeur de messagerie � distance plus tard. L\'erreur peut �tre aussi simple qu\'un champ vide pour le nom d\'un site.';
$lang['ND_Added_Success'] = 'Le site a �t� ajout� avec succ�s � votre messagerie � distance !';
$lang['Allow_mode_switch'] = 'Autoriser les utilisateurs � choisir diff�rents modes de messagerie';

// These three will be used when there are images for the mode switches
//$lang['Alt_Main_Mode'] = 'Changer le Client IM en Mode Normal';
//$lang['Alt_Wide_Mode'] = 'Changer le Client IM en Mode Etendu';
//$lang['Alt_Mini_Mode'] = 'Changer le Client IM en Mode Mini';
$lang['Alt_Main_Mode'] = 'Modes: <u>Normal</u>';
$lang['Alt_Wide_Mode'] = 'Modes: <u>Etendu</u>';
$lang['Alt_Mini_Mode'] = 'Modes: <u>Mini</u>';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';

// Adapted from Enhanced Admin User Lookup
$lang['User_lookup_explain'] = 'Vous pouvez rechercher des utilisateurs en sp�cifiant un ou plusieurs des crit�res ci-dessous. Aucune info suppl�mentaire n\'est n�cessaire, elle sera ajout� automatiquement.';
$lang['One_user_found'] = 'Seulement un utilisateur a �t� trouv�, vous avez �t� dirig� vers cet utilisateur';
$lang['Click_goto_prefs'] = 'Cliquez %sici%s pour �diter les pr�f�rences de cet utilisateur';
$lang['Click_goto_log'] = 'Cliquez %sici%s pour voir les messages de cet utilisateur';
$lang['User_joined_explain'] = 'La syntaxe utilis�e est identique � la fonction <a href="http://www.php.net/strtotime" target="_other">strtotime()</a> PHP';
$lang['Click_return_perms_admin'] = 'Cliquez %sIci%s Pour retourner au panneau de contr�le des permissions des utilisateurs';


/* Entries Changed in 0.7.0 */

// Controls panels
$lang['Alt_Contact_Man'] = 'G�rer les contacts'; // Was $lang['Alt_Buddy_Man']

// Preferences editor
$lang['Wide_Client_Window'] = 'Mode Etendu de la Messagerie '; // Was $lang['Whos_Online_Window']
$lang['Main_Window'] = 'Mode Normal de la Messagerie';

/* Any of these that have network in the $lang['name'] part used to have s2s in
 place of network. In some, that is the only change */
// Network Messaging
$lang['Network_disabled'] = 'D�sol�, mais le le syst�me � distance de messagerie instantan�e a �t� d�sactiv� sur ce forum.';
$lang['Network_no_username'] = 'La messagerie � distance ne re�oit pas votre nom ou votre ID d\'utilisateur.';
$lang['Network_no_siteurl'] = 'La messagerie � distance ne re�oit pas l\'URL du site d\'o� vous envoyez votre message.';
$lang['Network_no_siteid'] = 'La messagerie � distance ne re�oit l\'ID du site Vers lequel vous envoyez votre message.';
$lang['Network_Users_online'] = 'Utilisateurs connect�s d\'autres sites';
$lang['No_network_type'] = 'Le type ne peut pas �tre d�termin�.';
$lang['Invalid_network_type'] = 'Un type valide ne peut pas �tre d�termin�.';
$lang['Network_not_in_db'] = 'D�sol�, mais le site d\'o� vous envoyez votre message n\'est pas sur la liste des sites approuv�s par le site o� vous voulez envoyer votre message.';
$lang['Send_a_new_network'] = 'Envoyer un message � distance';
$lang['Reply_to_a_network'] = 'R�pondre � un message � distance';
$lang['Network_Flood_Error'] = 'Le syst�me � distance de messagerie instantan�e ne peut pas recevoir un post si rapidement apr�s le dernier. Svp, r�essayez dans quelques instants.';

// Admin Network Messaging
$lang['Network_title'] = 'Editeur du syst�me � distance de messagerie instantan�e';
$lang['Network_explain'] = 'De cette page, vous pouvez ajouter, �diter et retirer des sites pour lesquels vos utilisateurs peuvent interagir avec l\'option de messagerie � distance de Prillian.';
$lang['Network_add'] = 'Ajouter un nouveau site';
$lang['Network_del_success'] = 'Le site a �t� effac� avec succ�s. Vos utilisateurs ne peuvent plus interagir avec ce site par l\'interm�diaire de Prillian.';
$lang['Click_return_network'] = 'Cliquez %sici%s pour retourner � la messagerie � distance.';
$lang['Network_config'] = 'Configuration du site';
$lang['Network_add_success'] = 'Les informations du site ont �t� modifi�es avec succ�s.';

// Admin preferences editor
$lang['Admin_allow_network'] = 'Autoriser l\'utilisateur � utiliser le syst�me � distance de messagerie instantan�e';

// Preferences editor
$lang['User_allow_network'] = 'Activer le syst�me � distance de messagerie instantan�e pour ce compte';
$lang['Network_user_list'] = 'Choisissez une m�thode d\'affichage des utilisateurs d\'autres sites connect�s sur Prillian.';

// Do not change the [0], [1], etc. parts of the following
$lang['network_lists'][0] = 'Ne pas afficher';
$lang['network_lists'][1] = 'Afficher avec les utilisateurs de ce site';
$lang['network_lists'][2] = 'Afficher s�par�ment des utilisateurs de ce site';

// Admin Configuration
$lang['IM_allow_network'] = 'Activer le syst�me � distance de messagerie instantan�e';
/* End of the s2s -> network changes */



/*
The following entries were removed in 0.7.0

$lang['PUU_Constant']
$lang['PPU_Constant']
$lang['PUU_Constant_explain']
$lang['PPU_Constant_explain']
*/
?>
