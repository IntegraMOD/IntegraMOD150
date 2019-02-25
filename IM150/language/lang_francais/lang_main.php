<?php
/***************************************************************************
 *                            lang_main.php [French]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
//  2002-08-27  Philip M. White                - fixed many grammar problems
//	 Translation produced by Helix - http://www.phpbb-fr.com/
//  2007-02-16  sanji for www.e-tegra.com   -  correction de nombreuses fautes d'ortographe et de grammaire, traduction completee

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'LTR';
$lang['LEFT'] = 'gauche';
$lang['CENTER'] = 'centre';
$lang['RIGHT'] = 'droite';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['Ignore'] = 'Ignore';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Traduction par : <a href="http://www.phpbb-fr.com/" target="_blank">phpBB-fr.com</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Cat�gorie';
$lang['Topic'] = 'Sujet';
$lang['Topics'] = 'Sujets';
$lang['Replies'] = 'R�ponses';
$lang['Views'] = 'Vus';
$lang['Post'] = 'Message';
$lang['Posts'] = 'Messages';
$lang['Posted'] = 'Post� le';
$lang['Username'] = 'Nom d\'utilisateur';
$lang['Password'] = 'Mot de passe';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Poster';
$lang['Author'] = 'Auteur';
$lang['Time'] = 'Temps';
$lang['Hours'] = 'heures';
$lang['Message'] = 'Message';

$lang['1_Day'] = '1 Jour';
$lang['7_Days'] = '7 Jours';
$lang['2_Weeks'] = '2 Semaines';
$lang['1_Month'] = '1 Mois';
$lang['3_Months'] = '3 Mois';
$lang['6_Months'] = '6 Mois';
$lang['1_Year'] = '1 An';

$lang['Go'] = 'Aller';
$lang['Jump_to'] = 'Aller vers';
$lang['Submit'] = 'Envoyer';
$lang['Reset'] = 'R�initialiser';
$lang['Cancel'] = 'Annuler';
$lang['Preview'] = 'Pr�visualisation';
$lang['Confirm'] = 'Confirmer';
$lang['Spellcheck'] = 'V�rificateur d\'orthographe';
$lang['Yes'] = 'Oui';
$lang['No'] = 'Non';
$lang['Enabled'] = 'Activ�';
$lang['Disabled'] = 'D�sactiv�';
$lang['Error'] = 'Erreur';

$lang['Next'] = 'Suivante';
$lang['Previous'] = 'Pr�c�dente';
$lang['Goto_page'] = 'Aller � la page';
$lang['Joined'] = 'Inscrit le';
$lang['IP_Address'] = 'Adresse IP';

$lang['Select_forum'] = 'S�lectionner un forum';
$lang['View_latest_post'] = 'Voir le dernier message';
$lang['View_newest_post'] = 'Voir le message le plus r�cent';
$lang['Page_of'] = 'Page <b>%d</b> sur <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Num�ro ICQ';
$lang['AIM'] = 'Adresse AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Index du Forum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Poster un nouveau sujet';
$lang['Reply_to_topic'] = 'R�pondre au sujet';
$lang['Reply_with_quote'] = 'R�pondre en citant';

$lang['Click_return_topic'] = 'Cliquez %sici%s pour retourner au sujet de discussion'; // %s's here are for urls, do not remove!
$lang['Click_return_login'] = 'Cliquez %sici%s pour r�essayer';
$lang['Click_return_forum'] = 'Cliquez %sici%s pour retourner au forum';
$lang['Click_view_message'] = 'Cliquez %sici%s pour voir votre message';
$lang['Click_return_modcp'] = 'Cliquez %sici%s pour retourner au Panneau de contr�le du Mod�rateur';
$lang['Click_return_group'] = 'Cliquez %sici%s pour retourner aux informations du groupe';

$lang['Admin_panel'] = 'Aller au Panneau d\'administration';

$lang['Board_disable'] = 'D�sol�, mais ce forum est actuellement indisponible. Veuillez r�essayer ult�rieurement.';
$lang['View_post'] = 'Voir Message';
$lang['Acronym'] = 'Acronyme';

$lang['Total_votes'] = 'Total des votes : ';
$lang['Voted_show'] = 'Ont vot� : '; // it means :  users that voted  (the number of voters will follow)
$lang['Results_after'] = 'Les r�sultats seront visible apr�s la fin du sondage';
$lang['Poll_expires'] = 'Le sondage se termine dans : ';
$lang['Minutes'] = 'minutes';
$lang['Max_vote'] = 'S�lections maximum';
$lang['Max_vote_explain'] = '[ Entrez 1 ou laissez blanc pour ne permettre qu\'une seule s�lection ]';
$lang['Max_voting_1_explain'] = 'Veuillez ne choisir que ';
$lang['Max_voting_2_explain'] = ' r�ponse(s)';
$lang['Max_voting_3_explain'] = ' (les s�lections sup�rieures � la limite seront ignor�es)';
$lang['Vhide'] = 'Cacher';
$lang['Hide_vote'] = 'R�sultats';
$lang['Tothide_vote'] = 'Somme des votes';
$lang['Hide_vote_explain'] = '[ Cach� jusqu�� la fin du sondage ]';

//
// Global Header strings
//
$lang['Day_users'] = 'Il y a eu %d utilisateur(s) enregistr�(s) en ligne ces %d derni�res heures:';
$lang['Not_day_users'] = '%d utilisateurs enregistr�s <span style="color:red">n\'ont pas </span> visiter le site durant les %d derni�res heures:'; 

$lang['Registered_users'] = 'Utilisateurs enregistr�s:';
$lang['Browsing_forum'] = 'Utilisateurs parcourant actuellement ce forum:';
$lang['Online_users_zero_total'] = 'Il y a en tout <b>0</b> utilisateur en ligne :: ';
$lang['Online_users_total'] = 'Il y a en tout <b>%d</b> utilisateurs en ligne :: ';
$lang['Online_user_total'] = 'Il y a en tout <b>%d</b> utilisateur en ligne :: ';
$lang['Reg_users_zero_total'] = '0 Enregistr�, ';
$lang['Reg_users_total'] = '%d Enregistr�s, ';
$lang['Reg_user_total'] = '%d Enregistr�, ';
$lang['Hidden_users_zero_total'] = '0 Invisible et ';
$lang['Hidden_users_total'] = '%d Invisibles et ';
$lang['Hidden_user_total'] = '%d Invisible et ';
$lang['Guest_users_zero_total'] = '0 Invit�';
$lang['Guest_users_total'] = '%d Invit�s';
$lang['Guest_user_total'] = '%d Invit�';
$lang['Record_online_users'] = 'Le record du nombre d\'utilisateurs en ligne est de <b>%s</b> le %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrateur%s';
$lang['Mod_online_color'] = '%sMod�rateur%s';

$lang['You_last_visit'] = 'Derni�re visite: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Nous sommes le %s'; // %s replaced by date/time

$lang['Search_new'] = 'Voir les nouveaux messages';
$lang['Search_your_posts'] = 'Voir ses messages';
$lang['Search_unanswered'] = 'Message(s) sans r�ponse';

$lang['Register'] = 'S\'enregistrer';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Editer votre profil';
$lang['Search'] = 'Rechercher';
$lang['Memberlist'] = 'Liste des Membres';
$lang['FAQ'] = 'FAQ';
$lang['KB_title'] = 'Base de connaissance';
$lang['BBCode_guide'] = 'Guide du BBCode';
$lang['Usergroups'] = 'Groupes d\'utilisateurs';
$lang['Last_Post'] = 'Derniers messages';
$lang['Moderator'] = 'Mod�rateur';
$lang['Moderators'] = 'Mod�rateurs';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Nos membres ont post� un total de <b>0</b> message'; // Number of posts
$lang['Posted_articles_total'] = 'Nos membres ont post� un total de <b>%d</b> messages'; // Number of posts
$lang['Posted_article_total'] = 'Nos membres ont post� un total de <b>%d</b> message'; // Number of posts
$lang['Registered_users_zero_total'] = 'Nous avons <b>0</b> utilisateur enregistr�'; // # registered users
$lang['Registered_users_total'] = 'Nous avons <b>%d</b> membres enregistr�s'; // # registered users
$lang['Registered_user_total'] = 'Nous avons <b>%d</b> membre enregistr�'; // # registered users
$lang['Newest_user'] = 'L\'utilisateur enregistr� le plus r�cent est <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Pas de nouveau message depuis votre derni�re visite';
$lang['No_new_posts'] = 'Pas de nouveau message';
$lang['New_posts'] = 'Nouveaux messages';
$lang['New_post'] = 'Nouveau message';
$lang['No_new_posts_hot'] = 'Pas de nouveau message [ Populaire ]';
$lang['New_posts_hot'] = 'Nouveaux messages [ Populaire ]';
$lang['No_new_posts_locked'] = 'Pas de nouveau message [ Verrouill� ]';
$lang['New_posts_locked'] = 'Nouveaux messages [ Verrouill� ]';
$lang['Forum_is_locked'] = 'Forum Verrouill�';
$lang['Posted'] = 'Vous avez post� dans ce forum';


//
// Login
//
$lang['Enter_password'] = 'Veuillez entrer votre nom d\'utilisateur et votre mot de passe pour vous connecter.';
$lang['Login'] = 'Connexion';
$lang['Logout'] = 'D�connexion';

$lang['Forgotten_password'] = 'J\'ai oubli� mon mot de passe';

$lang['Log_me_in'] = 'Connexion automatique';

$lang['Error_login'] = 'Vous avez sp�cifi� un nom d\'utilisateur incorrect ou inactif ou un mot de passe invalide';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Pas de message';
$lang['No_forums'] = 'Ce Forum n\'a pas de sous-forum';

$lang['Private_Message'] = 'Message Priv�';
$lang['Private_Messages'] = 'Messages Priv�s';
$lang['Who_is_Online'] = 'Qui est en ligne ?';

$lang['Go_to_Top'] ='Haut de page';
$lang['Go_to_Bottom'] = 'Bas de page';

$lang['Mark_all_forums'] = 'Marquer tous les forums comme lus';
$lang['Forums_marked_read'] = 'Tous les forums ont �t� marqu�s comme lus';


//
// Viewforum
//
$lang['Topic_Announcement'] = '<b>[ Annonce ]</b>';
$lang['Topic_Sticky'] = '<b>[ Post-it ]</b>';
$lang['Topic_Moved'] = '<b>[ D�plac� ]</b>';
$lang['Topic_Poll'] = '<b>[ Sondage ]</b>';

//
// Viewtopic
//

$lang['Guest'] = 'Invit�';
$lang['Post_subject'] = 'Sujet du message';
$lang['Submit_vote'] = 'Envoyer le vote';
$lang['View_results'] = 'Voir les r�sultats';
$lang['View_Topic'] = 'Voir Topic';


$lang['No_newer_topics'] = 'Il n\'y a pas de nouveau sujet dans ce forum';
$lang['No_older_topics'] = 'Il n\'y a pas d\'ancien sujet dans ce forum';
$lang['Topic_post_not_exist'] = 'Le sujet ou message que vous recherchez n\'existe pas';
$lang['No_posts_topic'] = 'Il n\'existe pas de message pour ce sujet';

$lang['Display_posts'] = 'Montrer les messages depuis';
$lang['All_Posts'] = 'Tous les messages';
$lang['Newest_First'] = 'Le plus r�cent en premier';
$lang['Oldest_First'] = 'Le plus ancien en premier';

$lang['Back_to_top'] = 'Revenir en haut';

$lang['Read_profile'] = 'Voir le profil de l\'utilisateur'; 
$lang['Send_email'] = 'Envoyer un email � l\'utilisateur';
$lang['Visit_website'] = 'Visiter le site web du posteur';
$lang['ICQ_status'] = 'Statut ICQ';
$lang['Edit_delete_post'] = 'Editer/Supprimer ce message';
$lang['View_IP'] = 'Voir l\'adresse IP du posteur';
$lang['Delete_post'] = 'Supprimer ce message';

$lang['wrote'] = 'a �crit'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citation'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.
$lang['PHPCode'] = 'PHP'; // PHP MOD

$lang['Edited_time_total'] = 'Derni�re �dition par %s le %s; �dit� %d fois'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Derni�re �dition par %s le %s; �dit� %d fois'; // Last edited by me on 12 Oct 2001, edited 2 times in total

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Corps du message';

$lang['Options'] = 'Options';

$lang['Post_Announcement'] = 'Annonce';
$lang['Post_Sticky'] = 'Post-it';

$lang['Flood_Error'] = 'Vous ne pouvez pas poster un autre sujet en si peu de temps apr�s le dernier, veuillez r�essayer dans un court instant.';
$lang['Empty_subject'] = 'Vous devez pr�ciser le nom du sujet avant de pouvoir poster un nouveau sujet.';
$lang['Empty_message'] = 'Vous devez entrer un message avant de poster.';
$lang['Forum_locked'] = 'Ce forum est verrouill�, vous ne pouvez pas poster, ni r�pondre, ni �diter les sujets.';
$lang['Topic_locked'] = 'Ce sujet est verrouill�, vous ne pouvez pas �diter les messages ou faire de r�ponses.';

$lang['Button_locked'] = 'Verrouill�';

$lang['No_post_id'] = 'Vous devez s�lectionner un message � �diter';
$lang['Edit_own_posts'] = 'D�sol�, mais vous pouvez seulement �diter vos propres messages.';
$lang['Empty_poll_title'] = 'Vous devez entrer un titre pour le sondage.';
$lang['To_few_poll_options'] = 'Vous devez au moins entrer deux options pour le sondage.';
$lang['To_many_poll_options'] = 'Vous avez entr� trop d\'options pour le sondage.';

$lang['Update'] = 'Mettre � jour';
$lang['Delete'] = 'Supprimer';
$lang['Days'] = 'jours'; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['HTML_is_ON'] = 'Le HTML est <u>Activ�</u>';
$lang['HTML_is_OFF'] = 'Le HTML est <u>D�sactiv�</u>';
$lang['BBCode_is_ON'] = 'Le %sBBCode%s est <u>Activ�</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = 'Le %sBBCode%s est <u>D�sactiv�</u>';
$lang['Smilies_are_ON'] = 'Les Smilies sont <u>Activ�s</u>';
$lang['Smilies_are_OFF'] = 'Les Smilies sont <u>D�sactiv�s</u>';

$lang['Attach_signature'] = 'Attacher sa signature (les signatures peuvent �tre modifi�es dans le profil)';
$lang['Delete_post'] = 'Supprimer ce message';

$lang['Stored'] = 'Message enregistr� avec succ�s.';
$lang['Deleted'] = 'Message supprim� avec succ�s.';
$lang['Poll_delete'] = 'Votre sondage a �t� supprim� avec succ�s.';
$lang['Vote_cast'] = 'Votre vote a �t� pris en compte.';

$lang['Topic_reply_notification'] = 'Notification de R�ponse au Sujet';

$lang['bbcode_b_help'] = 'Texte gras: [b]texte[/b] (alt+b)';
$lang['bbcode_i_help'] = 'Texte italique: [i]texte[/i] (alt+i)';
$lang['bbcode_u_help'] = 'Texte soulign�: [u]texte[/u] (alt+u)';
$lang['bbcode_q_help'] = 'Citation: [quote]texte cit�[/quote] (alt+q)';
$lang['bbcode_c_help'] = 'Afficher du code: [code]code[/code] (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]texte[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Liste ordonn�e: [list=]texte[/list] (alt+o)';
$lang['bbcode_p_help'] = 'Ins�rer une image: [img( | =left | =right )]http://image_url[/img] (alt+p)';
$lang['bbcode_w_help'] = 'Ins�rer un lien: [url]http://url/[/url] ou [url=http://url/]Nom[/url] (alt+w)';
$lang['bbcode_a_help'] = 'Fermer toutes les balises BBCode ouvertes';
$lang['bbcode_s_help'] = 'Couleur du texte: [color=red]texte[/color] Astuce: #FF0000 fonctionne aussi';
$lang['bbcode_f_help'] = 'Taille du texte: [size=x-small]texte en petit[/size]';

$lang['Emoticons'] = 'Smilies';
$lang['More_emoticons'] = 'Voir plus de Smilies';

$lang['Font_color'] = 'Couleur';
$lang['color_default'] = 'D�faut';
$lang['color_dark_red'] = 'Rouge fonc�';
$lang['color_red'] = 'Rouge';
$lang['color_orange'] = 'Orange';
$lang['color_brown'] = 'Marron';
$lang['color_yellow'] = 'Jaune';
$lang['color_green'] = 'Vert';
$lang['color_olive'] = 'Olive';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Bleu';
$lang['color_dark_blue'] = 'Bleu fonc�';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violet';
$lang['color_white'] = 'Blanc';
$lang['color_black'] = 'Noir';

$lang['Font_size'] = 'Taille';
$lang['font_tiny'] = 'Tr�s petit';
$lang['font_small'] = 'Petit';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Grand';
$lang['font_huge'] = 'Tr�s grand';

$lang['Close_Tags'] = 'Fermer les Balises';
$lang['Styles_tip'] = 'Astuce: Une mise en forme peut �tre appliqu�e au texte s�lectionn�.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Messages Priv�s';

$lang['Login_check_pm'] = 'V�rifier ses messages priv�s';
$lang['New_pms'] = '%d nouveaux messages'; // You have 2 new messages
$lang['New_pm'] = '%d nouveau message'; // You have 1 new message
$lang['No_new_pm'] = 'Pas de nouveau message';
$lang['Unread_pms'] = '%d messages non lus';
$lang['Unread_pm'] = 'Vous avez %d message non lu';
$lang['No_unread_pm'] = 'Vous n\'avez pas de message non lu';
$lang['You_new_pm'] = 'Un nouveau message priv� vous attend dans votre Bo�te de r�ception';
$lang['You_new_pms'] = 'De nouveaux messages priv�s vous attendent dans votre Bo�te de r�ception';
$lang['You_no_new_pm'] = 'Aucun nouveau message';

$lang['Unread_message'] = 'Message non lu'; 
$lang['Read_message'] = 'Message d�j� lu';

$lang['Read_pm'] = 'Lire le message'; 
$lang['Post_new_pm'] = 'Poster le message'; 
$lang['Post_reply_pm'] = 'R�pondre au message'; 
$lang['Post_quote_pm'] = 'Citer le message'; 
$lang['Edit_pm'] = 'Editer le message'; 

$lang['Inbox'] = 'Bo�te de r�ception';
$lang['Outbox'] = 'Bo�te d\'envoi';
$lang['Savebox'] = 'Archives';
$lang['Sentbox'] = 'Messages envoy�s';
$lang['Flag'] = 'Marqu�';
$lang['Subject'] = 'Sujet';
$lang['From'] = 'De';
$lang['To'] = 'A';
$lang['Date'] = 'Date';
$lang['Mark'] = 'Marquer';
$lang['Sent'] = 'Envoy�';
$lang['Saved'] = 'Sauv�';
$lang['Delete_marked'] = 'Supprimer la S�lection';
$lang['Delete_all'] = 'Tout Supprimer';
$lang['Save_marked'] = 'Sauvegarder la S�lection'; 
$lang['Save_message'] = 'Sauvegarder le Message';
$lang['Delete_message'] = 'Supprimer le Message';

$lang['Display_messages'] = 'Montrer les messages depuis'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tous les Messages';

$lang['No_messages_folder'] = 'Vous n\'avez pas de message dans ce dossier';

$lang['PM_disabled'] = 'Les messages priv�s ont �t� d�sactiv�s sur ce forum.';
$lang['Cannot_send_privmsg'] = 'D�sol�, mais l\'administrateur vous a emp�ch� d\'envoyer des messages priv�s.';
$lang['No_to_user'] = 'Vous devez pr�ciser un nom d\'utilisateur pour envoyer ce message.';
$lang['No_such_user'] = 'D�sol�, mais cet utilisateur n\'existe pas.';

$lang['Disable_HTML_pm'] = 'D�sactiver le HTML dans ce message';
$lang['Disable_BBCode_pm'] = 'D�sactiver le BBCode dans ce message';
$lang['Disable_Smilies_pm'] = 'D�sactiver les Smilies dans ce message';

$lang['Message_sent'] = 'Votre message a �t� envoy�.';

$lang['Click_return_inbox'] = 'Cliquez %sici%s pour retourner � votre Bo�te de r�ception';
$lang['Click_return_index'] = 'Cliquez %sici%s pour retourner � l\'Index';

$lang['Send_a_new_message'] = 'Envoyer un nouveau message priv�';
$lang['Send_a_reply'] = 'R�pondre � un message priv�';
$lang['Edit_message'] = 'Editer un message priv�';

$lang['Notification_subject'] = 'Un nouveau Message Priv� vient d\'arriver.';

$lang['Find_username'] = 'Trouver un nom d\'utilisateur';
$lang['Find'] = 'Trouver';
$lang['No_match'] = 'Aucun enregistrement trouv�.';

$lang['No_post_id'] = 'L\'ID du message n\'a pas �t� sp�cifi�e';
$lang['No_such_folder'] = 'Le dossier n\'existe pas';
$lang['No_folder'] = 'Pas de dossier sp�cifi�';

$lang['Mark_all'] = 'Tout s�lectionner';
$lang['Unmark_all'] = 'Tout d�s�lectionner';

$lang['Confirm_delete_pm'] = 'Etes-vous s�r de vouloir supprimer ce message ?';
$lang['Confirm_delete_pms'] = 'Etes-vous s�r de vouloir supprimer ces messages ?';

$lang['Inbox_size'] = 'Taux de remplissage de votre Bo�te de r�ception: %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Taux de remplissage de votre Bo�te des messages envoy�s: %d%%'; 
$lang['Savebox_size'] = 'Taux de remplissage de votre Bo�te des archives: %d%%'; 

$lang['Click_view_privmsg'] = 'Cliquez %sici%s pour voir votre Bo�te de r�ception';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Voir le profil :: %s'; // %s is username 
$lang['About_user'] = 'Tout � propos de %s'; // %s is username

$lang['Preferences'] = 'Pr�f�rences';
$lang['Items_required'] = 'Les champs marqu�s d\'une * sont obligatoires.';
$lang['Registration_info'] = 'Enregistrement';
$lang['Profile_info'] = 'Profil';
$lang['Profile_info_warn'] = 'Ces informations seront visibles publiquement';
$lang['Avatar_panel'] = 'Panneau de contr�le des avatars';
$lang['Avatar_gallery'] = 'Galerie des avatars';

$lang['Website'] = 'Site Web';
$lang['Location'] = 'Localisation';
$lang['Contact'] = 'Contact';
$lang['Email_address'] = 'Adresse email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Envoyer un message priv�';
$lang['Hidden_email'] = '[ Invisible ]';
//$lang['Search_user_posts'] = 'Rechercher les messages de cet utilisateur';

$lang['Interests'] = 'Loisirs';
$lang['Occupation'] = 'Emploi'; 
$lang['Poster_rank'] = 'Rang du posteur';

$lang['Total_posts'] = 'Messages';
$lang['User_post_pct_stats'] = '%.2f%% du total'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f message(s) par jour'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Trouver tous les messages de %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'D�sol�, mais cet utilisateur n\'existe pas.';
$lang['Wrong_Profile'] = 'Vous ne pouvez pas modifier un profil qui n\'est pas le v�tre.';

$lang['Only_one_avatar'] = 'Seul un type d\'avatar peut �tre sp�cifi�';
$lang['File_no_data'] = 'Le fichier de l\'URL que vous avez donn� ne contient aucune donn�es';
$lang['No_connection_URL'] = 'Une connexion ne peut �tre �tablie avec l\'URL que vous avez donn�e';
$lang['Incomplete_URL'] = 'L\'URL que vous avez entr�e est incompl�te';
$lang['Wrong_remote_avatar_format'] = 'L\'URL de l\'avatar est invalide';
$lang['No_send_account_inactive'] = 'D�sol�, mais votre mot de passe ne peut pas �tre renouvel� �tant donn� que votre compte est actuellement inactif. Veuillez contacter l\'administrateur du forum afin d\'obtenir de plus amples informations.';

$lang['Always_smile'] = 'Toujours activer les Smilies';
$lang['Always_spellcheck'] = 'Toujours v�rifier l\�orthographe avec de poster';
$lang['Always_html'] = 'Toujours autoriser le HTML';
$lang['Always_bbcode'] = 'Toujours autoriser le BBCode';
$lang['Always_add_sig'] = 'Toujours attacher sa signature';
$lang['Always_notify'] = 'Toujours m\'avertir des r�ponses';
$lang['Always_notify_explain'] = 'Envoi un email lorsque quelqu\'un r�pond aux sujets que vous avez post�. Ceci peut �tre chang� chaque fois que vous postez.';

$lang['Board_style'] = 'Th�me du Forum';
$lang['Board_lang'] = 'Langue du Forum';
$lang['No_themes'] = 'Pas de Th�me dans la base de donn�es';
$lang['Timezone'] = 'Fuseau horaire';
$lang['Date_format'] = 'Format de la date';
$lang['Date_format_explain'] = 'La syntaxe utilis�e est identique � la fonction <a href=\'http://www.php.net/manual/fr/function.date.php\' target=\'_other\'>date()</a> du PHP.';
$lang['Signature'] = 'Signature';
$lang['Signature_explain'] = 'Ceci est un bloc de texte qui peut �tre ajout� aux messages que vous postez. Il y a une limite de %d caract�res';
$lang['Public_view_email'] = 'Toujours montrer son adresse email';
//
$lang['Current_password'] = 'Mot de passe actuel';
$lang['New_password'] = 'Nouveau mot de passe';
$lang['Confirm_password'] = 'Confirmer le mot de passe';
$lang['Confirm_password_explain'] = 'Vous devez confirmer votre mot de passe si vous souhaitez modifier votre adresse email';

if(!empty($userdata['session_logged_in']))
{
	$lang['password_if_changed'] = 'Vous avez seulement besoin de fournir un mot de passe si vous voulez le changer';
	$lang['password_confirm_if_changed'] = 'Vous avez seulement besoin de confirmer votre mot de passe si vous l\'avez chang� ci-dessus';
}else{
	$lang['password_if_changed'] = 'Rappelez vous le mot de passe est sensible � la casse.'; 
	$lang['password_confirm_if_changed'] = '';
}


$lang['PS_security_title']          = 'Panneau de s�curit�';
$lang['PS_security_question']       = 'Question de s�curit�';
$lang['PS_security_question_exp']   = 'Cette question va vous �tre demander si votre compte est ferm� apr�s trop d\'essais infructueux.';
$lang['PS_security_answer']         = 'R�ponse � la question de s�curit�';
$lang['PS_security_answer_exp']     = 'Ceci est la r�ponse � la question pr�c�dente. Vous devrez l\'utiliser si votre compte est bloqu�. Rappelez-vous que la r�ponse doit �tre saisie de la m�me fa�on en portant attention aux majuscules et minuscules.';
$lang['PS_security_error']          = 'Erreur';
$lang['PS_security_info']           = 'Information';
$lang['PS_security_one']            = 'La question de s�curit� et la r�ponse sont obligatoires.';
$lang['PS_security_a_exp']          = '<br>Ceci est le \'hash\' de votre r�ponse de s�curit�. Il est sauvegard� de cette mani�re dans la base de donn�es de cette fa�on la r�ponse ne peut �tre d�crypt�e. Notez votre r�ponse en clair de fa�on � ne pas la perdre.';
$lang['PS_security_locked']         = 'D�sol�, ce compte a exc�d� la limite d\'essais infructueux. Votre compte est maintenant barr�. Si vous �tes le propri�taire de ce compte, cliquez ici pour d�barrer votre compte.<br><br>cliquer <a href="' . append_sid('login_security.'. $phpEx .'?phpBBSecurity=retreive') .'">sur ce lien</a> pour d�barrer ce compte.';
$lang['PS_security_force']          = 'D�sol�, ceci semble �tre votre premi�re visite depuis que nous avons chang� les champs obligatoires des profils utilisateurs. Vous devez compl�ter votre profil pour continuer votre visite, Merci!<br><br><b><a href="' . append_sid('profile.'. $phpEx .'?mode=register&sub=registering') .'">Cliquez ici pour modifier votre profil.</a></b>';
$lang['PS_admin_one']               = 'Tentative d\'acc�s';
$lang['PS_admin_one_exp']           = '<br>Ceci est le nombre de tentatives permises pour se connecter: pass� ce nombre, le compte est bloqu�.';
$lang['PS_admin_two']               = 'Avertir l\'Admin';
$lang['PS_admin_two_exp']           = '<br>Si cette option est mise � \'Activ�\', sp�cifiez la m�thode � utiliser pour contacter l\'administrateur.';
$lang['PS_admin_three']             = 'Admin';
$lang['PS_admin_three_exp']         = '<br>Ceci est l\'administrateur que vous voulez avertir \'Avertir l\'Admin\' est mis � \'Activ�\' ci-dessus.';
$lang['PS_admin_err_one']           = 'Le nombre de tentative doit �tre mis � plus que 0. Veuillez retourner en arri�re et essayez de nouveau.';
$lang['PS_admin_err_two']           = 'Vous avez choisi d\'avertir un administrateur, mais vous avez oubli� d\'en s�lectionner un, veuillez retourner en arri�re et essayez de nouveau.';
$lang['PS_admin_error_three']       = 'L\'admin id doit �tre une valeur num�rique.  Veuillez retourner en arri�re et essayez de nouveau.';
$lang['PS_admin_error_four']        = 'L\'admin id doit �tre plus grand que 0. Veuillez retourner en arri�re et essayez de nouveau.';
$lang['PS_admin_error_five']        = 'La limite de tentatives de login doit �tre num�rique. Veuillez retourner en arri�re et essayez de nouveau.';
$lang['PS_admin_current']           = 'Admin choisi: %A%';
$lang['PS_admin_default']           = 'Choisissez-en un';
$lang['PS_login_title']             = 'S�curit� phpBB';
$lang['PS_login_header']            = 'S�curit� phpBB';
$lang['PS_login_username']          = 'Entrez votre nom d\'utilisateur';
$lang['PS_login_email']             = 'Entrez l\'adresse de courrier li�e � ce compte';
$lang['PS_login_step_one']          = '�tape un: Validation de l\'information';
$lang['PS_login_step_two']          = '�tape deux: Validation de la question de s�curit�';
$lang['PS_login_step_failed']       = 'D�sol�, l\'information fournie est incorrecte.';
$lang['PS_login_button']            = 'Valider';
$lang['PS_login_validated']         = 'Merci d\'avoir d�bloqu� votre compte. Vous pouvez vous connectez � nouveau.';
$lang['PS_profile_explain']         = 'Il est important de bien r�fl�chir avant de compl�ter ceci. Vous ne serez pas capable de modifier cette r�ponse sans avoir recours $ l\'administrateur du site.';
$lang['PS_forgot_sq']               = '<a href="' . append_sid('login_security.'. $phpEx .'?phpBBSecurity=forgot') . '">Vous avez oubli� votre question de s�curit�??</a>';
$lang['PS_forgot_exp']              = 'Si vous avez oubli� votre r�ponse de s�curit�, vous allez devoir contacter l\'administrateur du site. l\'adresse pour le contacter est '. $board_config['board_email'] ;
$lang['PS_user_lock']               = 'Statut barr�';
$lang['PS_user_lock_exp']           = 'Si le compte est barr�, � chaque fois que l\'utilisateur essaye de se connecter, il devra r�pondre � la question de s�curit�.';
$lang['PS_user_reset']              = 'R�initialiser l\'information de s�curit�';
$lang['PS_user_reset_exp']          = 'Avertissement: Si vous s�lectionnez ceci, l\'utilisateur va �tre oblig� d\'entrer � nouveau l\'information de s�curit�. Cela va effacer l\'information de s�curit� pr�sente.';
$lang['PS_user_status_l']           = 'Ce compte est actuellement barr�e. S�lectionner cette bo�te va <b>d�barrer</b> le compte.';
$lang['PS_user_status_u']           = 'Ce compte est actuellement d�barr�e. S�lectionner cette bo�te va <b>barrer</b> ce compte.';
$lang['PS_pm_subject']              = 'Un compte a �t� barr�.';
$lang['PS_pm_message']              = 'Un compte a �t� barr�. Les d�tails sont ci-dessous.

Compte barr�: %U%
Adresse IP de la personne qui l\'a barr�: %I%

Ceci est un message automatique, inutile d\'y r�pondre. Si vous avez un logiciel pour retracer une adresse IP, v�rifiez l\'adresse avec cet outil.';
$lang['PS_auto_message']			= 'Il appara�t que vous avez �t� banni de ce site web. Si vous pensez qu�il s�agit d�une erreur, ou que vous n�en comprenez pas la raison, veuillez contacter l�administrateur du site. <br /><br /><b>Board Administrator:</b> ';
$lang['PS_admin_ban']               = 'Interdit Automatique';
$lang['PS_admin_ban_exp']           = '<br>Cette option verrouille automatiquement toute adresse IP qui essaye un Exploit. Cette option a priorit� sur toute autre option individuelle. Si vous voulez utiliser une des options individuelles, mettez cette option � \'D�sactiv�\' et configurez vos options individuelle.';
$lang['PS_admin_sessions']          = 'Maximum de sessions allou�es';
$lang['PS_admin_sessions_exp']      = '<br>Si votre table de session devient plus grande que ce nombre, phpbbsecurity vas automatiquement la ramener en dessous de ce nombre.';
$lang['PS_clike']                   = 'Exploit Clike';
$lang['PS_union']                   = 'Exploit Union';
$lang['PS_sql']                     = 'Exploit Injection SQL';
$lang['PS_ddos']                    = 'Exploit DDoS';
$lang['PS_caught_left']             = 'IP';
$lang['PS_caught_c_left']           = 'Pris pour';
$lang['PS_caught_c_right']          = 'Pris le';
$lang['PS_caught_right']            = 'Tentative d\'Exploit';
$lang['PS_caught_msg']              = 'Il n\'y a pas eu de tentative d\'Exploit par des \'Script kiddies\' sur votre site.';
$lang['PS_special']                 = 'phpBB Security :: Champs Sp�ciaux';
$lang['PS_special_admins']          = 'Nombre d\'admin permis';
$lang['PS_special_admins_exp']      = '<br>Cette option limite le nombre d\'administrateurs qui sont permis sur ce site. De fa�on � bloquer une tentative d\'ajout par un Exploit pour prendre contr�le du site.';
$lang['PS_special_admins_total']    = '<br>Vous avez actuellement %X% vrai utilisateur d�fini comme administrateur dans la table des utilisateurs.';
$lang['PS_special_admins_offset']   = '<font color="red"> Il semble qu\'il y ait plus d\'administrateur dans la table d\'utilisateurs que la limite permise!</font>';
$lang['PS_special_mods']            = 'Nombre de mod�rateurs permis';
$lang['PS_special_mods_exp']        = '<br>Cette option  limite le nombre de mod�rateur qui sera permis sur ce site. De fa�on a bloquer une tentative d\'ajout par un exploits pour prendre contr�le du site.';
$lang['PS_special_mods_total']      = '<br>Vous avez pr�sentement %X% vrai(s) mod�rateur(s) dans la table d\'utilisateurs.';
$lang['PS_special_mods_offset']     = '<font color="red"> Il semble qu\'il ait plus de mod�rateurs dans la table d\'utilisateurs que la limite permise!</font>';
$lang['PS_use_special']             = 'Prot�ger les comptes Administrateur et Mod�rateur';
$lang['PS_use_special_exp']         = '<br>Si vous d�sactiver cette option, cela ne prot�geras plus l\'ajout de compte admin ou mod�rateur.';
$lang['PS_fopen_fwrite']            = 'Tentative Exploit d\'�criture fichier';
$lang['PS_system']                  = 'Tentative d\'Exploit Ex�cution Perl';
$lang['PS_chr']                     = 'Tentative d\'Exploit de Caract�re encoder';
$lang['PS_cback']                   = 'Tentative d\'Exploit \'Sanity Mix Worm\'';
$lang['PS_allow_user_change']       = 'Permettre � l\'utilisateur de modifier leur question de s�curit�. <b>Non recommand�.</b>';
$lang['PS_notify_admin_by_pm']      = 'Message Priv�';
$lang['PS_notify_admin_by_em']      = 'Email';
$lang['PS_option_ban']              = 'Banni';
$lang['PS_option_block']            = 'Bloquer';
$lang['PS_option_ignore']           = 'Ignorer';
$lang['PS_option_warning']          = '<b>Avertissement:</b> dans les param�tres ci-dessous la s�lection \'Ignorer\' permet � n\'importe qui d\'utiliser ces techniques sur votre site. Vous avez �t� averti!';
$lang['PS_list_choice_one']         = 'Oui';
$lang['PS_list_choice_two']         = 'Non';
$lang['PS_list_one']                = 'Action � prendre pour une tentative de <b>DDoS</b>?';
$lang['PS_list_two']                = 'Action � prendre pour une tentative de <b>Clike</b>?';
$lang['PS_list_three']              = 'Action � prendre pour une tentative de <b>UNION</b>?';
$lang['PS_list_four']               = 'Action � prendre pour une tentative de <b>CBACK Worm</b>?';
$lang['PS_list_five']               = 'Action � prendre pour une tentative de <b>SQL Injection</b>?';
$lang['PS_list_six']                = 'Action � prendre pour une tentative de <b>Perl Script</b>?';
$lang['PS_list_seven']              = 'Action � prendre pour une tentative de <b>Encoded Characters</b>?';
$lang['PS_list_eight']              = 'Action � prendre pour une tentative de <b>File Write/Open</b>?';
$lang['PS_blocked_line']			= '<b>&nbsp;phpBB Security &copy;&nbsp;</b> a bloqu� %T% tentative(s) d\'Exploit.';
$lang['PS_blocked_line2']			= '<a href="login_security.php?phpBBSecurity=caught" class="copyright">Prot�g�</a> par phpBB Security � <a href="http://phpbb-amod.com" class="copyright" target="_blank">phpBB-Amod</a>';


#==== Added in 1.0.2
$lang['PS_die_msg_cookies']         = 'Il y a une erreur avec vos \'Cookies\' de votre compte. Veuillez d�truire vos cookies pour reinitialiser le cookie associ� � votre compte, et reconnectez-vous.';
$lang['PS_die_msg_banned']          = 'Vous avez �t� banni de ce site.';
$lang['PS_die_msg_ddos']            = 'Vous avez �t� verrouill� de ce site car nous avons d�tect� une tentative de DDoS. Si vous �tes derri�res un pare-feu (firewall) ou un �l�ment similaire, ceci peut en �tre la cause.';
$lang['PS_die_msg_encoded']         = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'un encodage particulier &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_union']           = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande SQL via un script &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_clike']           = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande de type clike &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_sql']             = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande d\'injection sql &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_fwrite']          = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande d\'�criture fichier &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_perl']            = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande d\'execution perl &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_cback']           = 'Vous avez �t� verrouill� de ce site car vous avez tent� une intrusion sur ce site, � l\'aide d\'une commande \'sanity mix worm\' &amp; ceci est potentiellement une tentative d\'intrusion pour prendre contr&ograve;le de ce site.';
$lang['PS_die_msg_agent']           = 'Vous avez �t� verrouill� de ce site car votre client web est un des agents verrouill�s sur ce site.';
$lang['PS_die_msg_referer']         = 'Vous avez �t� verrouill� de ce site car le site r�f�rant est un de ceux � partir desquels nous interdisons l\'acc�s.';
$lang['PS_die_msg_staff']           = 'Vous avez �t� verrouill� de ce site car vous utilisez une permission que l\'administrateur ne vous a pas accord�e.';

$lang['PS_die_msg_email']           = 'Si vous croyez avoir re�u ce message par erreur, veuillez contacter l\'administrateur par email � %email%.';

$lang['PS_admin_submit']            = 'Sauvegarder la Configuration';
$lang['PS_admin_submit_special']    = 'Sauvegarder la Configuration sp�ciale';
$lang['PS_admin_config_saved']      = 'Configuration mise � jour.';
$lang['PS_admin_special_saved']     = 'Les Param�tres sp�ciaux ont �t� sauvegard�s.';
$lang['PS_return_config']           = 'Cliquez %s<b>ici</b>%s pour retourner � la page de configuration.';
$lang['PS_return_special']          = 'Cliquez %s<b>ici</b>%s pour retourner � la page des Param�tres sp�ciaux.';
$lang['PS_admin_not_authed']        = 'D�sol� mais vous n\'�tes pas autoris�s � voir/modifier ces param�tres.';
$lang['PS_admin_grant_access']      = 'Ici vous pouvez s�lectionner les administrateurs pour leur accorder le droit d\'acc�s � cette page.';
$lang['PS_admin_deny_access']       = 'Ici vous pouvez s�lectionner les administrateurs � qui vous voulez interdire l\'acc�s de cette page.';
$lang['PS_block_agents']            = 'Interdire un navigateur';
$lang['PS_block_agents_exp']        = 'Vous devez �tre s�r de ce que vous faites avant de modifier cette page. Par exemple si vous ajoutez <b>Firefox</b> ici, toute personne utilisant Firefox ne pourra plus acc�der au site.';
$lang['PS_unblock_agents']          = 'D�verrouillez un navigateur';
$lang['PS_block_referers']          = 'Interdire un site r�f�rant';
$lang['PS_block_referers_exp']      = 'Soyez certain de ce que vous faites avant de modifier cette page. Par exemple si vous ajoutez <b>search.yahoo.com</b> ici, toute personne qui utilise ce site pour ce rendre ici sera interdite d\'acc�s.';
$lang['PS_unblock_referers']        = 'D�verrouillez un site r�f�rant';
$lang['PS_per_page']                = 'Nombre d\'Exploits bloqu�s � afficher par page';
$lang['PS_ddos_level']              = 'DDoS Niveau de protection:';
$lang['PS_ddos_high']               = 'Fort';
$lang['PS_ddos_medium']             = 'Moyen';
$lang['PS_ddos_low']                = 'Faible';

$lang['PS_members_title']           = 'Ci-dessous la liste des utilisateurs pris � tenter une intrusion sur ce site.';
$lang['PS_members_pt_check']        = 'V�rification de la table [b]Messages du Site[/b], R�sultats:';
$lang['PS_members_pt_check_yc']     = 'La table Message du Site a trouv� quelque chose:';
$lang['PS_members_pt_check_nc']     = 'Aucune adresse IP correspondante n\'a �t� trouv�e dans la table Messages du Site.';
$lang['PS_user_exploits']           = 'Leur(s) tentative(s) d\'intrusion';

$lang['PS_users_tries']             = '%N% tentative(s) d\'intrusion';
$lang['PS_users_id']                = 'Id';
$lang['PS_users_ip']                = 'IP';
$lang['PS_users_link']              = 'Lien';
$lang['PS_users_reason']            = 'Raison';
$lang['PS_users_date']              = 'Date';

$lang['PS_search_title']            = 'Cherchez la base de donn�es';
$lang['PS_search_ip']               = 'Veuillez entrer une adresse IP';
$lang['PS_search_submit']           = ' Commencez la recherche ';
$lang['PS_search_partial']          = 'Correspondance partielle';
$lang['PS_search_exact']            = 'Correspondance exacte';
$lang['PS_search_unban']            = 'D�verrouillez cette adresse IP';
$lang['PS_search_banned']           = 'Actuellement interdit/verrouill�';

$lang['PS_backup_on']               = 'Sauvegarde de la base de donn�es quotidienne';
$lang['PS_backup_folder']           = 'R�pertoire dans lequel la sauvegarde doit �tre d�pos�e';
$lang['PS_backup_folder_exp']       = 'Ce r�pertoire <b>doit �tre</b> dans la racine de votre forum, pas necessairement de votre site; il <b>doit</b> avoir les droits � 777 (vous pouvez les changer avec <i>CHMOD</i>)';
$lang['PS_backup_filename']         = 'Nom d\'utilisateur � utiliser pour la sauvegarde de la base de donn�es';
$lang['PS_backup_filename_exp']     = '<i>Exemple:</i> sauvegarde';
$lang['PS_backup_time']             = 'heure � laquelle compl�ter la sauvegarde';
$lang['PS_backup_total']            = 'Nombre de sauvegardes disponibles: %N%';
$lang['PS_backup_remove']			= 'Supprimer le fichier de sauvegarde';
#==== Added in 1.0.3
$lang['PS_modcp_verify']			= 'Veuillez v�rifier votre mot de passe.';
$lang['PS_modcp_verify_fail']		= 'Votre mot de passe est incorrect, veuillez revenir sur la page pr�c�dente et essayez encore.';
$lang['PS_guest_max']				= 'Nombre maximum de sessions autoris�es par IP visiteur.';
$lang['PS_guest_max_exp']			= 'Ceci est utile contre les personnes qui essayent des attaques DDoS. Avec beaucoup de programmes, tous les visiteurs utilisent la m�me adresse IP. Ceci �liminera ce probl�me.';
$lang['PS_pass_match']				= 'Mot de passe identique interdit';
$lang['PS_pass_match_exp']			= 'Si cette option est selectionn�e, les utilisateurs ne seront pas autoris�s � avoir un nom d\'utilisateur et un mot de passe identique.';
$lang['PS_pass_min_length']			= 'Longueur minimale du mot de passe';
$lang['PS_pass_min_length_exp']		= 'Si cette option est selectionn�e, les utilisateurs devront avoir un mot de passe d\'une longueur identique ou sup�rieure � la valeur choisie.';
$lang['PS_pass_length']				= 'Nombre de caract�res minimum';
$lang['PS_pass_force']				= 'Il s\'agit de votre premi�re visite depuis que les administrateurs ont impos�s � tous les utilisateurs de changer leur mot de passe. Veuillez donc cliquer %sici%s et mettre � jour votre mot de passe. Merci.';
$lang['PS_pass_force_error']		= 'Vous <b>devez</b> mettre � jour votre mot de passe. Veuillez revenir en arri�re et essayez encore.';
$lang['PS_pass_length_error']		= 'D�sol�, il y a une minimum de %s caract�res requis pour votre mot de passe.';
$lang['PS_pass_match_error']		= 'D�sol�, votre nom d\'utilisateur et votre mot de passe ne peuvent pas �tre identiques.';
$lang['PS_pass_error']				= 'Vous n\'avez pas de longueur minimum pour le mot de passe.';



$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Affiche une petite image au-dessous de vos d�tails dans vos messages. Seule une image peut �tre affich�e � la fois, sa largeur ne peut pas d�passer %d pixels, sa hauteur %d pixels et la taille du fichier, pas plus de %d ko.';
$lang['Upload_Avatar_file'] = 'Envoyer l\'avatar depuis votre ordinateur';
$lang['Upload_Avatar_URL'] = 'Envoyer l\'avatar � partir d\'une URL';
$lang['Upload_Avatar_URL_explain'] = 'Entrez l\'URL de l\'image avatar, elle sera copi�e sur ce site.';
$lang['Pick_local_Avatar'] = 'S�lectionner un avatar de la Galerie';
$lang['Link_remote_Avatar'] = 'Lier l\'avatar � partir d\'un autre site';
$lang['Link_remote_Avatar_explain'] = 'Entrez l\'URL de l\'image avatar que vous voulez lier.';
$lang['Avatar_URL'] = 'URL de l\'image avatar';
$lang['Select_from_gallery'] = 'S�lectionnez un avatar � partir de la Galerie';
$lang['View_avatar_gallery'] = 'Montrer la Galerie';

$lang['Select_avatar'] = 'S�lectionner l\'avatar';
$lang['Return_profile'] = 'Annuler l\'avatar';
$lang['Select_category'] = 'S�lectionner une cat�gorie';

$lang['Delete_Image'] = 'Supprimer l\'Image';
$lang['Current_Image'] = 'Image Actuelle';

$lang['Notify_on_privmsg'] = 'M\'avertir des nouveaux Messages Priv�s';
$lang['Popup_on_privmsg'] = 'Ouverture d\'une Pop-Up lors de nouveaux Messages Priv�s.'; 
$lang['Popup_on_privmsg_explain'] = 'Certains templates peuvent ouvrir une nouvelle fen�tre pour vous informer de l\'arriv�e de nouveaux Messages Priv�s'; 
$lang['Hide_user'] = 'Cacher sa pr�sence en ligne';

$lang['Profile_updated'] = 'Votre profil a �t� mis � jour';

$lang['Password_mismatch'] = 'Les mots de passe que avez entr�s sont diff�rents.';
$lang['Current_password_mismatch'] = 'Le mot de passe que vous avez fourni est diff�rent de celui stock� sur la base de donn�es.';
$lang['Password_long'] = 'Votre mot de passe ne doit pas d�passer 32 caract�res.';
$lang['Username_taken'] = 'D�sol�, mais ce nom d\'utilisateur est d�j� pris.';
$lang['Username_invalid'] = 'D�sol�, mais ce nom d\'utilisateur contient un caract�re invalide comme \' par exemple.';
$lang['Username_disallowed'] = 'D�sol�, mais ce nom d\'utilisateur a �t� interdit d\'utilisation.';
$lang['Username_numeric'] = 'D�sol�, mais le nom d\'utilisateur ne peut pas �tre un nombre.';
$lang['Email_taken'] = 'D�sol�, mais cette adresse email est d�j� enregistr�e par un autre utilisateur.';
$lang['Email_banned'] = 'D�sol�, mais cette adresse email a �t� bannie.';
$lang['Email_invalid'] = 'D�sol�, mais cette adresse email est invalide.';
$lang['Signature_too_long'] = 'Votre signature est trop longue.';
$lang['Fields_empty'] = 'Vous devez compl�ter les champs obligatoires.';
$lang['Avatar_filetype'] = 'Le type de fichier de l\'avatar doit �tre .jpg, .gif ou .png';
$lang['Avatar_filesize'] = 'La taille de l\'image de l\'avatar doit �tre inf�rieure � %d ko'; // The avatar image file size must be less than 6 ko
$lang['Avatar_imagesize'] = 'La taille de l\'avatar doit �tre de %d pixels de largeur et de %d pixels de hauteur'; 

$lang['Welcome_subject'] = 'Bienvenue sur les forums de %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nouveau compte utilisateur';
$lang['Account_activated_subject'] = 'Compte activ�';

$lang['Account_added'] = 'Merci de vous �tre enregistr�, votre compte a �t� cr��. Vous pouvez vous connecter avec votre nom d\'utilisateur et mot de passe';
$lang['Account_inactive'] = 'Votre compte a �t� cr��. Toutefois, ce forum requiert que votre compte soit activ�, et donc une clef d\'activation a �t� envoy�e � l\'adresse email que vous avez fournie. Veuillez v�rifier votre bo�te email pour de plus amples informations.';
$lang['Account_inactive_admin'] = 'Votre compte a �t� cr��. Toutefois, ce forum requiert que votre compte soit activ� par l\'administrateur. Un email lui a �t� envoy� et vous serez inform�s lorsque votre compte sera activ�.';
$lang['Account_active'] = 'Votre compte a �t� activ�. Merci de vous �tre enregistr�';
$lang['Account_active_admin'] = 'Le compte a �t� activ�';
$lang['Already_activated'] = 'Votre compte est d�j� activ�';
$lang['Reactivate'] = 'R�activez votre compte !';
$lang['COPPA'] = 'Votre compte a �t� cr��, mais il doit �tre approuv�, veuillez v�rifier votre bo�te email pour plus de d�tails.';

$lang['Wrong_activation'] = 'La clef d\'activation que vous avez fournie ne correspond pas � celle de la base de donn�es.';
$lang['Send_password'] = 'Envoyez moi un nouveau mot de passe'; 
$lang['Password_updated'] = 'Un nouveau mot de passe a �t� cr��, veuillez v�rifier votre bo�te email pour plus de d�tails concernant l\'activation de celui-ci.';
$lang['No_email_match'] = 'L\'adresse email que vous avez fournie ne correspond pas avec celle qui a �t� utilis�e pour ce nom d\'utilisateur.';
$lang['New_password_activation'] = 'Activation d\'un nouveau mot de passe';
$lang['Password_activated'] = 'Votre compte a �t� r�activ�. Pour vous connecter, veuillez utiliser le mot de passe fourni dans l\'email que vous avez re�u.';

$lang['Send_email_msg'] = 'Envoyer un message email';
$lang['No_user_specified'] = 'Aucun utilisateur sp�cifi�';
$lang['User_prevent_email'] = 'Cet utilisateur ne souhaite pas recevoir d\'email. Essayez de lui envoyer un message priv�.';
$lang['User_not_exist'] = 'Cet utilisateur n\'existe pas';
$lang['CC_email'] = 'Envoyer une copie de cet email � soi-m�me';
$lang['Email_message_desc'] = 'Ce message sera envoy� en texte plein, n\'ins�rez aucun code HTML ou BBCode. L\'adresse de r�ponse pour ce message sera celle de votre email.';
$lang['Flood_email_limit'] = 'Vous ne pouvez pas envoyer un autre email pour le moment, essayez plus tard';
$lang['Recipient'] = 'Destinataire';
$lang['Email_sent'] = 'L\'email a �t� envoy�.';
$lang['Send_email'] = 'Envoyer l\'email';
$lang['Empty_subject_email'] = 'Vous devez sp�cifier le sujet pour l\'email.';
$lang['Empty_message_email'] = 'Vous devez entrer un message pour qu\'il soit exp�di�.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Le code de confirmation que vous avez entr� ne correspond pas � celui de l\'image. Veuillez r�essayer.';
$lang['Too_many_registers'] = 'Vous avez d�pass� le nombre maximum de tentatives de connexion. Veuillez essayer � nouveau plus tard.';
$lang['Confirm_code_impaired'] = 'Si vous avez des probl�mes pour lire ce code, merci de contacter l\'%sAdministrator%s pour obtenir de l\'aide.';
$lang['Confirm_code'] = 'Code de confirmation';
$lang['Confirm_code_explain'] = 'Entrez exactement le code que vous voyez sur l\'image';


//
// Memberslist
//
$lang['Select_sort_method'] = 'S�lectionner la m�thode de tri';
$lang['Sort'] = 'Trier';
$lang['Sort_Top_Ten'] = 'Top 10 des posteurs';
$lang['Sort_Joined'] = 'Inscrit le';
$lang['Sort_Username'] = 'Nom d\'utilisateur';
$lang['Sort_Location'] = 'Localisation';
$lang['Sort_Posts'] = 'Messages';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Site Web';
$lang['Sort_Ascending'] = 'Croissant';
$lang['Sort_Descending'] = 'D�croissant';
$lang['Order'] = 'Ordre';


//
// Group control panel
//
$lang['Remove_selected'] = 'Supprimer la s�lection';
$lang['Add_member'] = 'Ajouter le Membre';
$lang['None'] = 'Aucun';

//
// Search
//
$lang['Sort_by'] = 'Trier par';
//
$lang['No_search_match'] = 'Aucun sujet ou message ne correspond � vos crit�res de recherche';
$lang['Close_window'] = 'Fermer la fen�tre';

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'D�sol�, mais seuls les %s peuvent poster des annonces dans ce forum.';
$lang['Sorry_auth_sticky'] = 'D�sol�, mais seuls les %s peuvent poster des post-it dans ce forum.';
$lang['Sorry_auth_read'] = 'D�sol�, mais seuls les %s peuvent lire des sujets dans ce forum.';
$lang['Sorry_auth_post'] = 'D�sol�, mais seuls les %s peuvent poster dans ce forum.';
$lang['Sorry_auth_reply'] = 'D�sol�, mais seuls les %s peuvent r�pondre aux messages dans ce forum.';
$lang['Sorry_auth_edit'] = 'D�sol�, mais seuls les %s peuvent �diter des messages dans ce forum.';
$lang['Sorry_auth_delete'] = 'D�sol�, mais seuls les %s peuvent supprimer des messages dans ce forum.';
$lang['Sorry_auth_vote'] = 'D�sol�, mais seuls les %s peuvent voter aux sondages dans ce forum.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>utilisateurs anonymes</b>';
$lang['Auth_Registered_Users'] = '<b>utilisateurs enregistr�s</b>';
$lang['Auth_Users_granted_access'] = '<b>utilisateurs avec un acc�s sp�cial</b>';
$lang['Auth_Moderators'] = '<b>mod�rateurs</b>';
$lang['Auth_Administrators'] = '<b>administrateurs</b>';

$lang['Not_Moderator'] = 'Vous n\'�tes pas mod�rateur sur ce forum.';
$lang['Not_Authorised'] = 'Non autoris�';
$lang['Admin_reauthenticate'] = 'Pour administrer le site vous devez vous r�-authentifier.';

$lang['You_been_banned'] = 'Vous avez �t� banni de ce forum.<br />Veuillez contacter le webmestre ou l\'administrateur du forum pour plus d\'informations.';


//
// Viewonline
//
$lang['Online_explain'] = 'Ces donn�es sont bas�es sur les utilisateurs actifs des cinq derni�res minutes';

$lang['Forum_Location'] = 'Localisation sur le Forum';
$lang['Last_updated'] = 'Derni�re mise � jour';

$lang['Forum_index'] = 'Index du Forum';
$lang['Logging_on'] = 'Se connecte';
$lang['Viewing_profile'] = 'Regarde un profil';

//
// Moderator Control Panel
//

$lang['Select'] = 'S�lectionner';
$lang['Move'] = 'D�placer';
$lang['Lock'] = 'Verrouiller';
$lang['Unlock'] = 'D�verrouiller';

$lang['Topics_Moved'] = 'Le(s) sujet(s) s�lectionn�(s) a/ont �t� d�plac�(s).';

//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Toutes les heures sont au format %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 heures';
$lang['-11'] = 'GMT - 11 heures';
$lang['-10'] = 'GMT - 10 heures';
$lang['-9'] = 'GMT - 9 heures';
$lang['-8'] = 'GMT - 8 heures';
$lang['-7'] = 'GMT - 7 heures';
$lang['-6'] = 'GMT - 6 heures';
$lang['-5'] = 'GMT - 5 heures';
$lang['-4'] = 'GMT - 4 heures';
$lang['-3.5'] = 'GMT - 3,5 heures';
$lang['-3'] = 'GMT - 3 heures';
$lang['-2'] = 'GMT - 2 heures';
$lang['-1'] = 'GMT - 1 heure';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 heure';
$lang['2'] = 'GMT + 2 heures';
$lang['3'] = 'GMT + 3 heures';
$lang['3.5'] = 'GMT + 3,5 heures';
$lang['4'] = 'GMT + 4 heures';
$lang['4.5'] = 'GMT + 4,5 heures';
$lang['5'] = 'GMT + 5 heures';
$lang['5.5'] = 'GMT + 5,5 heures';
$lang['6'] = 'GMT + 6 heures';
$lang['6.5'] = 'GMT + 6.5 heures';
$lang['7'] = 'GMT + 7 heures';
$lang['8'] = 'GMT + 8 heures';
$lang['9'] = 'GMT + 9 heures';
$lang['9.5'] = 'GMT + 9,5 heures';
$lang['10'] = 'GMT + 10 heures';
$lang['11'] = 'GMT + 11 heures';
$lang['12'] = 'GMT + 12 heures';
$lang['13'] = 'GMT + 13 heures';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 heures';
$lang['tz']['-11'] = 'GMT - 11 heures';
$lang['tz']['-10'] = 'GMT - 10 heures';
$lang['tz']['-9'] = 'GMT - 9 heures';
$lang['tz']['-8'] = 'GMT - 8 heures';
$lang['tz']['-7'] = 'GMT - 7 heures';
$lang['tz']['-6'] = 'GMT - 6 heures';
$lang['tz']['-5'] = 'GMT - 5 heures';
$lang['tz']['-4'] = 'GMT - 4 heures';
$lang['tz']['-3.5'] = 'GMT - 3:30 heures';
$lang['tz']['-3'] = 'GMT - 3 heures';
$lang['tz']['-2'] = 'GMT - 2 heures';
$lang['tz']['-1'] = 'GMT - 1 heure';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 heure';
$lang['tz']['2'] = 'GMT + 2 heures';
$lang['tz']['3'] = 'GMT + 3 heures';
$lang['tz']['3.5'] = 'GMT + 3:30 heures';
$lang['tz']['4'] = 'GMT + 4 heures';
$lang['tz']['4.5'] = 'GMT + 4:30 heures';
$lang['tz']['5'] = 'GMT + 5 heures';
$lang['tz']['5.5'] = 'GMT + 5:30 heures';
$lang['tz']['6'] = 'GMT + 6 heures';
$lang['tz']['6.5'] = 'GMT + 6:30 heures';
$lang['tz']['7'] = 'GMT + 7 heures';
$lang['tz']['8'] = 'GMT + 8 heures';
$lang['tz']['9'] = 'GMT + 9 heures';
$lang['tz']['9.5'] = 'GMT + 9:30 heures';
$lang['tz']['10'] = 'GMT + 10 heures';
$lang['tz']['11'] = 'GMT + 11 heures';
$lang['tz']['12'] = 'GMT + 12 heures';
$lang['tz']['13'] = 'GMT + 13 heures';

$lang['datetime']['Sunday'] = 'Dimanche';
$lang['datetime']['Monday'] = 'Lundi';
$lang['datetime']['Tuesday'] = 'Mardi';
$lang['datetime']['Wednesday'] = 'Mercredi';
$lang['datetime']['Thursday'] = 'Jeudi';
$lang['datetime']['Friday'] = 'Vendredi';
$lang['datetime']['Saturday'] = 'Samedi';
$lang['datetime']['Sun'] = 'Dim';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Mar';
$lang['datetime']['Wed'] = 'Mer';
$lang['datetime']['Thu'] = 'Jeu';
$lang['datetime']['Fri'] = 'Ven';
$lang['datetime']['Sat'] = 'Sam';
$lang['datetime']['January'] = 'Janvier';
$lang['datetime']['February'] = 'F�vrier';
$lang['datetime']['March'] = 'Mars';
$lang['datetime']['April'] = 'Avril';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['June'] = 'Juin';
$lang['datetime']['July'] = 'Juillet';
$lang['datetime']['August'] = 'Ao�t';
$lang['datetime']['September'] = 'Septembre';
$lang['datetime']['October'] = 'Octobre';
$lang['datetime']['November'] = 'Novembre';
$lang['datetime']['December'] = 'D�cembre';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'F�v';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Avr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Juin';
$lang['datetime']['Jul'] = 'Juil';
$lang['datetime']['Aug'] = 'Ao�';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Oct';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'D�c';

// calendar pcp stuff
$lang['Sunday'] = 'Dimanche';
$lang['Monday'] = 'Lundi';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informations';
$lang['Critical_Information'] = 'Informations Critiques';

$lang['General_Error'] = 'Erreur G�n�rale';
$lang['Critical_Error'] = 'Erreur Critique';
$lang['An_error_occured'] = 'Une Erreur est Survenue';
$lang['A_critical_error'] = 'Une Erreur Critique est Survenue';

$lang['Topic_description'] = 'Description du sujet';
$lang['Description'] = 'Description sujet';

// 
// Begin Approve_Posts_Mod Block : 22
// 

//stuff user sees
$lang['approve_topic_has_awaiting'] = 'Le sujet a des messages en attente d\'approbation';
$lang['approve_topic_is_awaiting'] = 'Sujet en attente approbation';
$lang['approve_post_is_awaiting'] = 'Messages en attente approbation';
    
$lang['approve_posts_error_obtain'] = 'Impossible d\'obtenir les informations d\'approbation du forum';
$lang['approve_posts_error_delete'] = 'Impossible de supprimer les informations d\'approbation du forum';
$lang['approve_posts_error_insert'] = 'Impossible d\'ins�rer les informations d\'approbation du forum';

$lang['approve_notify_subject'] = 'Approuver message';
$lang['approve_notify_link'] = 'Il y a un nouveau message attendant l\'approbation d\'un mod�rateur. Pour voir ce message cliquez ici: ';
$lang['approve_notify_approve_link'] = 'Pour approuver ce message cliquez ici: ';
$lang['approve_notify_message'] = 'Le message a �t� inclus ci-dessous.';
$lang['approve_notify_message_exceeded'] = '...message continue';
$lang['approve_notify_poster'] = '*** Ce message sera pr�-mod�r�: il ne sera pas affich� tant qu\'il n\'obtiendra pas l\'approbation d\'un mod�rateur. ***';
$lang['approve_notify_user_link'] = 'Votre message a �t� approuv�. Pour voir ce message, cliquez ici:';
$lang['approve_notify_user_topic'] = 'Tous vos messages dans ce sujet ont �t� approuv�s.';
$lang['approve_notify_auto_app'] = ' Notification d\'Auto-Approbation.';
$lang['approve_notify_auto_app_msg'] = 'Vous �tes d�sormais automatiquement approuv� lors de publication de messages dans les forums pr�-mod�r�s.';
$lang['approve_notify_auto_app_rem'] = 'Notification de suppression Auto-Approbation.';
$lang['approve_notify_auto_app_rem_msg'] = 'Vous n\'�tes d�sormais plus automatiquement approuv� lors de la publication de messages dans les forums pr�-mod�r�s.';
$lang['approve_notify_moderation'] = 'Notification de pr�-mod�ration.';
$lang['approve_notify_moderation_msg'] = 'Vous �tes d�sormais mod�r� lors de la publication de messages dans les forums pr�-mod�r�s.';
$lang['approve_notify_moderation_rem'] = ' Notification de suppression de pr�-mod�ration.';
$lang['approve_notify_moderation_rem_msg'] = 'Vous n\'�tes d�sormais plus mod�r� lors de la publication de messages dans les forums pr�-mod�r�s.';
$lang['approve_notify_post_approved'] = 'Votre message a �t� approuv�!';

$lang['approve_topic_all_current'] = 'Approuver tous les messages de ce sujet';
$lang['approve_topic_all_future'] = 'Auto-Approbation de tous les futurs messages de ce sujet';
$lang['approve_topic_all_future_rem'] = 'Supprimer l\'Auto-Approbation de tous les futures messages de ce sujet';
$lang['approve_topic_moderate'] = 'Pr�-mod�rer ce sujet et toutes les futures r�ponses';
$lang['approve_topic_moderate_rem'] = 'Supprimer la pr�-mod�ration du sujet';
$lang['approve_post_approve'] = 'Approuver ce message';
$lang['approve_topic_approve'] = 'Approuver ce sujet';
$lang['approve_user_auto_approve'] = 'Auto-Approuver cet utilisateur';
$lang['approve_user_auto_approve_rem'] = 'Supprimer Auto-Approbation';
$lang['approve_user_moderate'] = 'Pr�-mod�rer ce membre';
$lang['approve_user_moderate_rem'] = 'Supprimer Pr�-mod�ration';

//stuff admin sees
$lang['approve_admin_enable'] = 'Activer le syst�me d\'approbation:';
$lang['approve_admin_posts'] = 'Approuver messages';
$lang['approve_admin_users_enable'] = 'Pr�-mod�rer:';
$lang['approve_admin_users_all'] = 'Tous les utilisateurs & sujets';
$lang['approve_admin_users_mod'] = 'Utilisateurs s�lectionn�s & Sujets seulement';
$lang['approve_admin_posts_topics'] = 'Pr�-mod�rer sur:';
$lang['approve_admin_posts_enable'] = 'Nouveaux messages';
$lang['approve_admin_poste_enable'] = 'Edition de message';
$lang['approve_admin_topics_enable'] = 'Cr�ation de sujet';
$lang['approve_admin_topice_enable'] = 'Edition de sujet';
$lang['approve_admin_hide_topics_enable'] = 'Cacher sujets non approuv�s:';
$lang['approve_admin_hide_posts_enable'] = 'Cacher messages non approuv�s:';
$lang['approve_admin_button_find'] = 'Trouver membres';
$lang['approve_admin_button_add'] = 'Ajouter membre';
$lang['approve_admin_button_rem'] = 'Supprimer membre';
$lang['approve_admin_moderators'] = 'Mod�rateur(s):';
$lang['approve_admin_forums'] = 'Forums';
$lang['approve_admin_users'] = 'Membres';
$lang['approve_admin_author'] = 'Auteur';
$lang['approve_admin_subject'] = 'Sujet';
$lang['approve_admin_empty'] = '--vide--';
$lang['approve_admin_remove'] = 'supprimer';
$lang['approve_admin_approve'] = 'approuver';
$lang['approve_admin_add_approved_submit'] = 'Auto-Approbation';
$lang['approve_admin_add_moderated_submit'] = 'Pr�-mod�rer';
$lang['approve_admin_page'] = 'Page: ';
$lang['approve_admin_remove_moderation'] = 'Supprimer Pr�-mod�ration';
$lang['approve_admin_remove_approval'] = 'Supprimer Approbation';

//Admin menu titles moved to lang_admin.php'; 

$lang['approve_admin_notify_user_enable'] = 'PM Utilisateur sur approbation:';
$lang['approve_admin_notify_admin_enable'] = 'Notification Mod�rateur:';
$lang['approve_admin_notify_type'] = 'Notifier par: ';
$lang['approve_admin_notify_pm_enable'] = 'Message priv�';
$lang['approve_admin_notify_email_enable'] = 'Email';
$lang['approve_admin_notify_message_enable'] = 'Inclure message dans la notification: ';
$lang['approve_admin_notify_message_length'] = 'Longueur Max (0 = tout)';
$lang['approve_admin_notify_posts_topics'] = 'Notifi� sur:';
$lang['approve_admin_notify_posts_enable'] = 'Nouveaux messages';
$lang['approve_admin_notify_poste_enable'] = 'Edition de message';
$lang['approve_admin_notify_topics_enable'] = 'Nouveaux sujets';
$lang['approve_admin_notify_topice_enable'] = 'Edition de sujet';
$lang['approve_admin_notify_user_invalid'] = 'Merci de retourner en arri�re et d\'�diter votre saisie.<br/>L\'utilisateur suivant est invalide: ';
$lang['approve_admin_notify_user_empty'] = 'Merci de retourner en arri�re et d\'�diter votre saisie..<br/>Vous devez chosir au moins un mod�rateur � notifier.';

$lang['approve_admin_username'] = 'Nom d\'utilisateur';
$lang['approve_admin_users_moderated_users'] = 'Utilisateurs pr�-mod�r�s';
$lang['approve_admin_users_auto_approved'] = 'Utilisateurs Auto-Approuv�s';
$lang['approve_admin_users_of'] = 'Utilisateurs <b>%d</b>-<b>%d</b> de <b>%d</b>'; // Replaces with: Users 1-2 of 2 for example
$lang['approve_admin_users_id_remove_error'] = 'l\'id utilisateur choisi est invalide.';
$lang['approve_admin_users_moderation_removed'] = 'L\'utilisateur "%s" a �t� supprim� de la pr�-mod�ration.';
$lang['approve_admin_users_approval_removed'] = 'L\'utilisateur "%s" a �t� supprim� de l\'auto-approbation.';
$lang['approve_admin_users_approval_added'] = 'L\'utilisateur "%s" a �t� ajout� � l\'auto-approbation.';
$lang['approve_admin_users_moderated_added'] = 'L\'utilisateur "%s" a �t� ajout� � la pr�-mod�ration.';
$lang['approve_admin_add_approved_user'] = 'Ajouter utilisateur auto-approuv�';
$lang['approve_admin_add_moderated_user'] = 'Ajouter utilisateur pr�-mod�r�';

$lang['approve_admin_topics_title'] = 'Titre sujet';
$lang['approve_admin_approve_topic'] = 'Sujet approuv�';
$lang['approve_admin_topics_moderated_topics'] = 'Sujets pr�-mod�r�s';
$lang['approve_admin_topics_awaiting'] = 'Sujets attendant l\'approbation';
$lang['approve_admin_topics_auto_approved'] = 'Sujets auto-approuv�s';
$lang['approve_admin_topics_of'] = 'Sujets <b>%d</b>-<b>%d</b> de <b>%d</b>'; // Replaces with: Topics 1-2 of 2 for example
$lang['approve_admin_topics_id_remove_error'] = 'L\'id sujet est invalide.';
$lang['approve_admin_topics_moderation_removed'] = 'Le sujet "%s" a �t� supprim� de la pr�-mod�ration.';
$lang['approve_admin_topics_approval_removed'] =  'Le sujet "%s" a �t� supprim� de l\'auto-approbation.';
$lang['approve_admin_topics_approval_added'] = 'Le sujet "%s" a �t� ajout� � l\'auto-approbation.';
$lang['approve_admin_topics_moderated_added'] = 'Le sujet "%s" a �t� ajout� de la pr�-mod�ration.';
$lang['approve_admin_topics_approved'] = 'Le sujet "%s" a �t� approuv�.';

$lang['approve_admin_approve_post'] = 'Message approuv�';
$lang['approve_admin_posts_awaiting'] = 'Messages attendant l\'approbation';
$lang['approve_admin_posts_of'] = 'Messages <b>%d</b>-<b>%d</b> de <b>%d</b>'; // Replaces with: Posts 1-2 of 2 for example
$lang['approve_admin_posts_id_remove_error'] = 'L\'id de message choisi est invalide.';
$lang['approve_admin_posts_approved'] = 'Le message "%s" de "%s" a �t� approuv�.'; //Replaces with: The post "blah" by "mr.man" has been approved.

$lang['approve_admin_forums_moderated'] = 'Forums sous Pr�-mod�ration';
$lang['approve_admin_Stored_replacement'] = $lang['Stored'] . '<br/><br/> Il deviendra visible aussit�t qu\'un mod�rateur l\'aura approuv�. <br/> Merci de ne pas poster votre message une nouvelle fois.';
// 
// End Approve_Posts_Mod Block : 22
//

$lang['Home'] = 'Accueil';

// Start add - Fully integrated shoutbox MOD
$lang['Shoutbox'] = 'Shoutbox';
$lang['Shoutbox_date'] = ' d m Y h:i:s';
$lang['Shout_censor'] = 'Shout supprim� !';
$lang['Shout_refresh'] = 'Rafra�chir';
$lang['Shout_text'] = 'Votre text';
$lang['Viewing_Shoutbox']= 'Regardant la Shoutbox';
$lang['Censor'] ='Censure';
$lang['This_posts_IP'] = 'Adresse IP de ce message';
$lang['Other_IP_this_user'] = 'Autres adresses IP de cet utilisateur';
$lang['Users_this_IP'] = 'Utilisateurs avec cette adresse IP';
$lang['IP_info'] = 'Information IP';
$lang['Lookup_IP'] = 'Chercher une adresse IP';
$lang['Disable_HTML_post'] = 'D�sactiver le HTML dans ce message';
$lang['Disable_BBCode_post'] = 'D�sactiver le BBcode dans ce message';
$lang['Disable_Smilies_post'] = 'D�sactiver les Smilies dans ce message';
$lang['Smilies'] = 'Smilies';


// End add - Fully integrated shoutbox MOD

$lang['Message_preview'] = 'Pr�visualisation Message Re�u';

// Start add - Yellow card admin MOD
$lang['Rules_ban_can'] = 'Vous <b>pouvez</b> bannir d\'autres utilisateurs de ce forum'; 
$lang['Rules_greencard_can'] = 'Vous <b>pouvez</b> d�-bannir des utilisateurs de ce forum'; 
$lang['Rules_bluecard_can'] = 'Vous <b>pouvez</b> reporter un message aux mod�rateurs dans ce forum'; 

$lang['Viewing_RULES'] = 'Voir le r�glement';
$lang['Forum_Rules'] = 'R�glement';

$lang['cookies_link'] = 'Gestion de mes Cookies';

// RATING MOD
$lang['Rating'] = 'Notation';
$lang['No_rating'] = 'Pas de note';
$lang['Ratings_by'] = 'Messages not�s par %s';
$lang['Rated_posts_by'] = 'Messages de %s qui ont �t� not�s';
$lang['Latest_ratings'] = 'Derni�res notes';
$lang['Highest_ranked_topics'] = 'Sujets avec les notes les plus �lev�es';
$lang['Highest_ranked_posts'] = 'Messages avec les notes les plus �lev�es';
$lang['Highest_ranked_posters'] = 'Auteurs avec les notes les plus �lev�es';

$lang['Staff'] = 'Equipe du site';

//
// Bookmark Mod
//
$lang['More_bookmarks'] = 'Plus de favoris...'; // For mozilla navigation bar

//-----------------------------------------------------------------------------
// MOD: Delayed Topics
$lang['Delayed_Post_Alt'] = 'Sujet retard� (publication %s)';   // %s replaced by delivery date
$lang['Sorry_auth_delayedpost'] = 'D�sol� seulement %s peuvent poster des sujets retard�s';

// MOD: Delayed Topics {end}
//-----------------------------------------------------------------------------
// Logo Selector MOD
$lang['Logo_settings'] = 'Param�tres du logo';
$lang['Logo_explain'] = 'Ici vous pouvez choisir le r�pertoire contenant les logos de votre forums, le logo � utiliser, ainsi que ses dimensions.';
$lang['Logo_path'] = 'R�pertoire des logos';
$lang['Logo_path_explain'] = 'R�pertoire � partir de la racine de votre phpBB, p.ex. images/logo';
$lang['Logo'] = 'Choisir un logo';
$lang['Logo_dimensions'] = 'Dimensions du logo';
$lang['Logo_dimensions_explain'] = '(hauteur x largeur en pixels) ';
$lang['PS_admin_ban']				= 'Bannissement automatique';
$lang['PS_admin_ban_exp']			= '<br>Ceci va automatiquement bannir les adresses IP � partir desquelles on essaye d\'utiliser un Clike, Injection SQL, DDoS ou UNION.';
$lang['PS_admin_sessions']			= 'Nombre de sessions maximum';
$lang['PS_admin_sessions_exp']		= '<br>Si votre table des sessions devient plus grande que cette valeur, ce Mod va automatiquement la diminuer � cette valeur.';
$lang['PS_clike']					= 'Tentative Clike';
$lang['PS_union']					= 'Tentative Union';
$lang['PS_sql']						= 'Tentative Injection SQL';
$lang['PS_ddos']					= 'Tentative DDoS';
$lang['PS_caught_left']				= 'IP';
$lang['PS_caught_c_left']			= 'Bloqu� pour';
$lang['PS_caught_c_right']			= 'Bloqu� le';
$lang['PS_caught_right']			= 'Tentative(s)';
$lang['PS_caught_msg']				= 'Il n\'y a eu aucune tentative d\'attaque au moyen de scriptes sur ce site.';
$lang['PS_special']					= 'S�curit� phpBB :: Champs sp�ciaux';
$lang['PS_special_admins']			= 'Nombre maximum d\'administrateurs';
$lang['PS_special_admins_exp']		= '<br>Ce nombre d�fini combien d\'administrateurs, au maximum, sont autoris�s sur ce site. De cette mani�re, une personne qui r�ussirait � cr�er un compte administrateur ne pourrait de toute fa�on pas se connecter.';
$lang['PS_special_admins_total']	= '<br>Yous avez actuellement %X% utilisateurs d�finis avec le statut \'Administrateur\' dans la table des utilisateurs.';
$lang['PS_special_admins_offset']	= '<font color="red"> Il semble que vous ayez plus d\'administrateurs dans la table des utilisateurs que le nombre total autoris�!</font>';
$lang['PS_special_mods']			= 'ANombre maximum de mod�rateurs';
$lang['PS_special_mods_exp']		= '<br>Ce nombre d�fini combien de mod�rateurs, au maximum, sont autoris�s sur ce site. De cette mani�re, une personne qui r�ussirait � cr�er un compte mod�rateur ne pourrait de toute fa�on pas se connecter.';
$lang['PS_special_mods_total']		= '<br>Vous avez actuellement %X% utilisateurs d�finis avec le statut \'Moderator\' dans la table des utilisateurs.';
$lang['PS_special_mods_offset']		= '<font color="red"> Il semble que vous ayez plus de mod�rateurs dans la table des utilisateurs que le nombre total autoris�!</font>';
$lang['PS_use_special']				= 'Prot�ger les comptes administrateurs & mod�rateurs';
$lang['PS_use_special_exp']			= '<br>D�sactivez cette fonction, l\'ajout d\'administrateurs et de mod�rateurs ne sera pas bloqu�.';
///
$lang['LW_USER_ACCT_ERROR'] = 'Pas de membre avec l\'ID = %d.';
$lang['LW_WELCOME_REGISTERED'] = 'Merci pour votre inscription. Votre compte a �t� cr��.';
$lang['LW_TRANSACTION_RECORDS'] = 'Transactions';
$lang['LW_EXPIRE_MEMBER_REMINDER'] = 'Votre adh�sion est valable jusqu\'au <b>%s</b>';
$lang['LW_EXPIRE_TRIAL_REMINDER'] = 'Il reste <b>%d</b> jour(s) pour votre p�riode d\'essai';
$lang['LW_WELCOME_REGIST_TRIAIL'] = 'Bienvenue %s, vous pouvez maintenant visiter le site pendant la p�riode d\'essai de %d jour(s). <br>Apr�s cette p�riode, si vous voulez continuer � utiliser tous nos services, vous devrez r�gler des frais d\'adh�sion %s.';
$lang['LW_AMOUNT_TO_PAY_EXPLAIN'] = 'Apr�s confirmation de votre payement, vous recevrez l\'acc�s � tous nos forums et serez enregistr�s dans notre r�pertoire.';
$lang['LW_TRIAL_PERIOD'] = 'P�riode d\'essai pour acc�der � votre site, <br>en jours, plus grand ou �gal � 0: ';
$lang['LW_OUR_SUBSCRIPTION_FEE'] = 'Frais d\'inscription: ';
$lang['LW_OUR_PAYPAL_CURRENCY_CODE'] = 'Devise accept�e par votre compte PayPal: ';
$lang['LW_OUR_PAYPAL_ACCT'] = 'Votre compte PayPal o� recevoir les frais d\'inscription des membres: ';
$lang['LW_PAYPAL_ACCT_SETTINGS_TITLE'] = 'Param�tres IPN PayPal';
$lang['LW_ACCT_DISPLAY_FROM'] = 'Afficher les derni�res transactions effectu�es: ';
$lang['LW_ALL_RECORDS'] = 'Toutes les transactions';
$lang['LW_NO_RECORDS'] = 'Il n\'y a aucune transaction';
$lang['LW_ACCT_CREDIT'] = 'Cr�dit';
$lang['LW_ACCT_DEBIT'] = 'D�bit';
$lang['NP_DATE'] = 'Date';
$lang['LW_ACCT_CURRENCY'] = 'Devise';
$lang['LW_ACCT_AMOUNT'] = 'Montant';
$lang['LW_ACCT_PLUS_MINUS'] = 'Cr�dit / D�bit';
$lang['LW_ACCT_TXNID'] = 'PayPal TXN ID';
$lang['LW_ACCT_STATUS'] = 'Statuts';
$lang['LW_ACCT_COMMENT'] = 'Remarques';
$lang['LW_NO_PRIVILEGE'] = 'Vous n\'avez pas les privil�ges n�cessaires pour voir cette page.';
$lang['LW_Click_view_ACCT_RECORDS'] = 'Cliquez %sici%s pour voir les transactions de votre compte';
$lang['LW_PAYMENT_DONE'] = 'Payement des frais d\'inscription effectu�e avec succ�s.';
$lang['LW_PAYMENT_PENDDING'] = 'Merci! Votre payement est toujours en cours, votre compte sera activ� une fois que votre payement aura �t� confirm� par l\'administrateur. <br>La confirmation de votre payement vous sera envoy� sur votre adresse email suivante: %s par PayPal.';
$lang['LW_PAYMENT_DENIED'] = 'Le payement � partir de votre compte a �t� refus�, contactez notre administrateur si vous avez la moindre question.';
$lang['LW_PAYMENT_FAILED'] = 'Le payement � partir de votre compte a �chou�, veuillez r�essayer plus tard.';
$lang['LW_UPDATE_USER_ACCT_ERROR'] = 'Mise � jour du compte impossible, veuillez contacter notre administrateur.';
$lang['LW_AMOUNT_TO_PAY'] = 'Montant � payer: ';
$lang['LW_ACCT_DEPOSIT_INTO'] = 'Payement';
$lang['LW_TOPUP_CONFIRM_TITLE'] = 'Confirmez votre payement';
$lang['Account_not_exist_lw'] = 'Le compte que vous avez choisi n\'existe pas.';
$lang['Account_activated_lw'] = 'Votre compte vous permet d�j� d\'acc�der � tous les forums.';
$lang['Click_return_login_lw'] = 'Cliquez %sici%s pour vous connecter.';
$lang['Click_return_activate_lw'] = 'Cliquez %sici%s pour payer votre inscription et mettre � jour votre compte.';
$lang['Disabled_account_lw'] = 'Votre compte n\'a pas �t� activ�.';
$lang['LW_PAYPAL_ACCT_ERROR'] = 'Le compte PayPal n\'a pas �t� configur� pour recevoir des payements, merci de contacter l\'administrateur pour signaler ce probl�me.';
$lang['LW_PAYMENT_DATA_ERROR'] = 'Le montant de l\'inscription est erron�.';
$lang['LW_YOU_ARE_VIP'] = 'Bienvenue %s, vous faites partie de nos <b>VIP</b>.';
$lang['L_LW_PAYMENTS'] = 'Inscription';
$lang['LW_LOGIN_TO_PAY'] = 'Merci de vous connecter avec votre nom d\'utilisateur et mot de passe, vous serez redirig� sur la page de payement si vous ne l\'avez pas encore fait.';
$lang['LW_PAY_FOR_WHICH_MONTH'] = 'Inscription valable du <b>%s</b> au <b>%s</b>';
///
$lang['Sorry_auth_paid_read'] = 'D�sol�, mais seuls les <b>membres payant</b> peuvent lire les sujets de ce forum.'; 
$lang['LW_Welcome_Nopaid_Member'] = 'Bienvenue %s, vous faite partie de nos membres normaux.'; 
$lang['Sorry_auth_paid_post'] = 'D�sol�, mais seuls les <b>membres payant</b> peuvent poster dans ce forum.'; 
$lang['L_LW_PAID_GROUP_NAME'] = 'Le nom du groupe � rejoindre pour les membres payant: '; 
$lang['LW_SELECT_A_GROUP'] = 'Choisissez le groupe � rejoindre'; 
$lang['L_LW_GROUP_TO_PAY'] = 'Le groupe que vous voulez rejoindre: '; 
$lang['LW_TOPUP_TITLE'] = 'Rejoindre un groupe payant';
$lang['L_LW_GROUP_DESCRIPTION'] = 'Description du groupe: ';
$lang['L_LW_FOR_JOIN_GROUP'] = 'pour joindre le groupe: ';
$lang['L_LW_FOR_UPGRADE_GROUP'] = 'pour upgrader votre inscription au groupe: ';
$lang['L_LW_FOR_EXTEND_GROUP'] = 'pour prolonger votre inscription: ';
$lang['L_LW_USER_EXTEND_SAME_GROUP'] = 'Vous allez prolonger votre inscription actuelle.';
$lang['L_LW_USER_JOIN_GROUP'] = 'Vous allez vous inscrire au groupe.';
$lang['L_LW_USER_UPGRADE_GROUP'] = 'Vous allez upgrader votre inscription actuelle.';
$lang['L_LW_USER_DOWNGRADE_GROUP'] = 'Vous ne pouvez pas renoncer � votre inscription, merci d\'attendre que votre inscription actuelle soit termin�e.';
$lang['L_LW_UPGRADE_REMIND'] = 'D�tails de l\'inscription: ';
///
$lang['Click_return_subscribe_lw'] = 'Cliquez %sici%s pour choisir les groupes que vous voulez rejoindre. Vous devrez payer une inscription.';
$lang['L_LW_GROUP_ALREADY_JOIN'] = 'Les groupes dont vous faites actuellement partie: '; 
$lang['L_LW_GROUP_VIEW_DETAIL'] = 'Voir les d�tails de l\'inscription au groupe: '; 
$lang['LW_PAYMENT_SUBSCRIPTION'] = 'Votre inscription au groupe a �t� soumise.'; 
///
$lang['LW_ANONYMOUS_DONOR'] = 'Anonyme';
$lang['LW_MORE_DONORS'] = 'Voir tous les donateurs';
$lang['LW_CURRENT_DONORS'] = 'Voir les donateur pour notre objectif actuel';
$lang['L_LW_LAST_DONORS'] = '%s derniers donateurs';
$lang['L_LW_TOP_DONORS_TITLE'] = '%s plus g�n�reux donateurs';
$lang['L_LW_DONORS_NAME'] = 'Nom du donateur';
$lang['LW_DONORS_DISPLAY_FROM'] = 'Afficher les derniers donateurs: ';
$lang['LW_NO_DONORS_YET'] = 'Pas encore de donateur';
$lang['LW_WE_HAVE_COLLECT'] = 'Nous avons re�u <b>%.2f</b> sur notre objectif de <b>%s</b>.';
$lang['LW_WANT_ANONYMOUS'] = 'Je veux rester anonyme.';
$lang['L_LW_DONATE_WAY'] = 'Votre statut en tant que donateur: ';
$lang['LW_DONATION_TO_POINTS'] = 'Merci pour votre donation! En retour, nous sommes heureux d\'augmenter votre total de messages de %d';
$lang['LW_DONATION_TO_WHO'] = 'Donation pour %s , Merci!';
$lang['LW_DONATE_TITLE'] = 'Donation';
$lang['LW_AMOUNT_TO_DONATE'] = 'Montant de la donation: ';
$lang['LW_AMOUNT_TO_DONATE_EXPLAIN'] = 'Merci pour votre donation. Elle va nous permettre de fournir un meilleur service � nos membres.';
$lang['LW_DONATE_CONFIRM_TITLE'] = 'Confirmez le montant de votre donation';
$lang['LW_ACCT_DONATE_INTO'] = 'Donation';
$lang['LW_DONATE_DONE'] = 'Merci pour votre donation. Elle va nous permettre de fournir un meilleur service � nos membres.';
$lang['LW_DONATE_PENDDING'] = 'Merci pour votre donation. Elle va nous permettre de fournir un meilleur service � nos membres.';
$lang['LW_DONATE_DENIED'] = 'D�sol�, la donation n\'a pas pu �tre effectu�e, merci de contacter l\'administrateur pour toute question.';
$lang['LW_DONATE_FAILED'] = 'Donation non effectu�e, pourriez-vous r�essayer plus tard? Merci!';
$lang['LW_ACCT_DONATE_US'] = 'Donation';
$lang['LW_CURRENCY_TO_PAY'] = 'Choisissez la devise: ';
$lang['LW_CURRENCY_TO_PAY_EXPLAIN'] = 'En ce moment, nous acceptons seulement %s.';
$lang['LW_PAYMENT_DATA_ERROR'] = 'Le montant ou la devise est incorrect.';
$lang['LW_DONATION_TO_POSTS'] = 'Merci pour votre donation! En retour, nous sommes heureux d\'augmenter votre total de messages de %d';
$lang['LW_DONATION_TO_HELP'] = 'Merci de nous aider � nous d�velopper!';
$lang['L_LW_MONEY'] = 'Montant de la donation'; 
$lang['L_LW_DATE'] = 'Date de la donation';
$lang['LW_DONATE_EXPLAIN'] = 'Cliquez ici pour nous apporter votre soutien'; 
///
// Please note: %sHERE%s is used to dynamically building the A HREF tag, do not remove the percent signs (%) around HERE!
$lang['dhtml_faq_noscript'] = "Il semble que votre navigateur ne supporte pas les fonctions javascript, ou qu'elles ont �t� d�sactiv�es dans les options de votre navigateur.<br /><br />Veuillez cliquer %sici%s pour voir une version HTML de cette FAQ.";
// added by edwin :: required fields
$lang['Required_force']	= 'D�sol�, il semble qu\'il s\'agisse de votre premi�re visite depuis que des champs requis ont �t� ajout�s au syst�me.<br />Une fois que vous aurez mis � jour les champs marqu�s avec %s, vous pourrez acc�der au site. <br />Merci.<br /> <br />Cliquez sur les champs ci-dessous pour les compl�ter:<br />%s';
// added by edwin :: registration
$lang['Profile_updated_inactive'] = 'Votre profil a �t� mis � jour, toutefois vous avez modifi� des d�tails vitaux, ainsi votre compte redevient inactif. V�rifier votre bo�te email pour savoir comment r�activer votre compte, ou si l\'activation par l\'administrateur est requise, patientez jusqu\'� ce qu\'il le r�active.';
$lang['Profile_updated_inactive_admin'] = 'Votre profil a �t� mis � jour, toutefois vous avez modifi� des d�tails vitaux, ainsi votre compte redevient inactif. Veuillez patienter pendant que l\'administrateur le r�active.';
$lang['Click_return_portal'] = 'Cliquez %sici%s pour retourner au portail';
$lang['PS_security_a_exp_empty'] = 'Cette r�ponse sera cod�e une fois envoy�e, personne ne pourra alors la d�chiffrer � part vous. Souvenez-vous en ou notez-la, car vous pourriez en avoir besoin et elle ne peut �tre chang�e.';
$lang['PS_security_a_exp_submitted'] = 'Ceci est la version cod�e de la r�ponse que vous avez soumis auparavant: personne ne peut la d�chiffrer. Si vous voulez la changer, il vous faudra contacter un administrateur.';

// BEGIN Style Select MOD
$lang['Style_select_manage'] = 'Gestion de la s�lection de Style';
$lang['Style_select_explain'] = 'Cet outil permet de g�rer la table info de la s�lection de style';
$lang['Style_select_author'] = 'Auteur';
$lang['Style_select_version'] = 'Version';
$lang['Style_select_website'] = 'Site internet';
$lang['Style_select_viewings'] = 'Vues';
$lang['Style_select_dlurl'] = 'URL fichier';
$lang['Style_select_dls'] = 't�l�charger au total';
$lang['Style_select_loaclurl'] = 'URL traduite';
$lang['Style_select_ludls'] = 'Traduction t�l�charger au total';
$lang['Click_return_style_sel_admin'] = 'Cliquez %sici%s pour retourner � l\'administration de la s�lection des styles';
$lang['Style_select_update'] = 'Les donn�es ont �t� mises � jour avec succ�s';
// END Style Select MOD

// FIND - newsfeeds
$lang['Check_All'] = 'Tout s�lectionner';
$lang['UnCheck_All'] = 'Tout d�s�lectionner';
$lang['News_Read_More'] = 'Lire plus...';
$lang['News_source'] = 'Source: ';
// end FIND - newsfeeds

$lang['Portal'] = 'Portail';

$lang['By'] = 'de'; // picture {By} user :: Topic {By} user
$lang['Country'] = 'Pays';

$lang['No_r_click'] = 'Click droit non autoris�'; 
$lang['No_copy'] = 'Copie non autoris�e';

$lang['Login_attempts_exceeded'] = 'Le nombre maximum de %s tentatives de connexion a �t� d�pass�. Vous n\'�tes pas autoris� � vous connecter pendant les %s prochaines minutes.';
$lang['Please_remove_install'] = 'Veuillez v�rifier que le r�pertoire install/ soit effac�';
$lang['Please_remove_prill'] = 'Veuillez v�rifier que le r�pertoire prill_install/ soit effac�';
$lang['Please_remove_both'] = 'Veuillez vous assurer que les r�pertoires install/ et prill_install/ ont �t� effac�s';
$lang['Session_invalid'] = 'Session invalide. Veuillez soumettre � nouveau le formulaire.';

//====================================================================== |
//==== Start Advanced BBCode Box MOD =================================== |
//==== v5.0.0 ========================================================== |
//====
$lang['BBCode_box_hidden'] = 'Spoilers';
$lang['BBcode_box_view'] = 'Cliquez pour afficher le contenu';
$lang['BBcode_box_hide'] = 'Cliquez pour cacher le contenu';
//====
//==== Author: Disturbed One [http://hvmdesign.com] =================== |
//==== End Advanced BBCode Box MOD ==================================== |
//===================================================================== |


// Mighty Gorgon - Full Album Pack - BEGIN
$lang['Album'] = 'Album';
$lang['Personal_Gallery_Of_User'] = 'Gallerie personnelle de %s';
$lang['Personal_Gallery_Of_User_Profile'] = 'Gallerie personnelle de %s (%d photos)';
$lang['Show_All_Pic_View_Mode_Profile'] = 'Montrer toutes les images de la gallerie personnelle de %s (sans les sous-cat�gories)';
$lang['Not_allowed_to_view_album'] = 'D�sol�, vous n\'�tes pas autoris� � voir l\'album.';
$lang['Not_allowed_to_upload_album'] = 'D�sol�, vous n\'�tes pas autoris� � uploader des images dans l\'album. Veuillez contacter l\'administrateur de l\'album pour plus de d�tails.';
$lang['Album_empty'] = 'Il n\'y a pas d\'image dans l\'album<br />Clickez sur le lien <b>Uploader nouvelle image</b> pour en poster une.';
$lang['Upload_New_Pic'] = 'Uploader nouvelle image';
$lang['Pic_Title'] = 'Titre de l\'image';
$lang['Pic_Title_Explain'] = 'Il est important de donner un bon titre � l\'image. Cela peut �tre un nom ou un sujet pour permettre aux autres de savoir de quoi il s\'agit.';
$lang['Pic_Upload'] = 'Upload de l\'image';
$lang['Pic_Upload_Explain'] = 'Les formats autoris�s sont JPG, GIF et PNG. La taille maximale est %s bytes. La dimension maximale est de %sx%s pixels.';
$lang['Album_full'] = 'D�sol�, l\'album est enti�rement rempli. Veuillez contacter l\'administrateur de l\'album pour plus de d�tails.';
$lang['Album_upload_successful'] = 'Merci, votre image a �t� uplod�e avec succ�s.';
$lang['Click_return_album'] = 'Cliquez %sici%s pour retourner � l\'album.';
$lang['Invalid_upload'] = 'Erreur lors de l\'upload<br /><br />Votre image est trop grande ou son format n\'est pas autoris�.';
$lang['Image_too_big'] = 'D�sol�, les dimensions de l\'images sont trop grandes.';
$lang['Uploaded_by'] = 'Upload� par';
$lang['Category_locked'] = 'D�sol�, cette cat�gorie a �t� ferm�e par un administrateur. Veuillez contacter l\'administrateur de l\'album pour plus de d�tails.';
$lang['View_Album_Index'] = 'Index de l\'album';
$lang['View_Album_Personal'] = 'Regarde l\'album personnel d\'un utilisateur';
$lang['View_Pictures'] = 'Regarde des images ou �crit/lit des commentaires de l\'album';
$lang['Album_Search'] = 'Recherche dans l\'album';
$lang['Pic_Name'] = 'Nom de l\'image';
$lang['Description'] = 'Description';
$lang['Search_Contents'] = ' contenant: ';
$lang['Search_Found'] = 'La recherche a trouv� ';
$lang['Search_Matches'] = 'correspondance(s):';
// Mighty Gorgon - Full Album Pack - END

$lang['profilcp_photo_shortcut'] = 'Photo';
$lang['profilcp_photo_pagetitle'] = 'Photo';
$lang['Public_view_photo'] = 'Afficher une photo';
$lang['User_allowphoto'] = 'Peut afficher une photo';
$lang['Photo_panel'] = 'Panneau de contr�le des photos';
$lang['Photo_gallery'] = 'Galleries de phtoos';
$lang['Only_one_photo'] = 'Un seul format de photo peut �tre sp�cifi�';
$lang['Wrong_remote_photo_format'] = 'L\'URL de la photo n\'est pas valide';
$lang['Photo'] = 'Photo';
$lang['Photo_explain'] = 'Affiche une petite photo dans votre profil. Une seule photo peut �tre affich�e � la fois, sa largeur ne peut �tre sup�rieure � %d pixels, sa hateur � %d pixels, et sa taille � %d KB.';
$lang['Upload_Photo_file'] = 'Uploader une photo de votre ordinateur';
$lang['Upload_Photo_URL'] = 'Upload une photo � partir d\'une adresse URL';
$lang['Upload_Photo_URL_explain'] = 'Entre l\'URL de la photo, qui sera copi�e sur ce site.';
$lang['Pick_local_Photo'] = 'Choisir une photo de la gallerie';
$lang['Link_remote_Photo'] = 'Lien vers une photo ext�rieure � ce site';
$lang['Link_remote_Photo_explain'] = 'Entrez l\'adresse URL de la photo vers laquelle vous voulez faire un lien.';
$lang['Photo_URL'] = 'URL de la photo';
$lang['Select_from_gallery'] = 'Choisir une photo de la gallerie';
$lang['View_photo_gallery'] = 'Montrer la gallerie';
$lang['Select_photo'] = 'Choisir la photo';
$lang['Photo_filetype'] = 'Le format de la photo doit �tre .jpg, .gif ou .png';
$lang['Photo_filesize'] = 'La taille de la photo doit �tre au maximum de %d KB';
$lang['Photo_imagesize'] = 'Le format de la photo ne doit pas d�passer %d pixels de largeur et %d pixels de hauteur'; 

//Begin Lo-Fi Mod
$lang['Lofi'] = 'Version Lo-Fi';
$lang['Full_Version'] = 'Version Compl�te';
$lang['quote_lofi'] = 'Citer';
$lang['edit_lofi'] = 'Editer';
$lang['ip_lofi'] = 'IP';
$lang['del_lofi'] = 'Effacer';
$lang['profile_lofi'] = 'Profil';
$lang['pm_lofi'] = 'MP';
$lang['email_lofi'] = 'Email';
$lang['website_lofi'] = 'Site web';
$lang['icq_lofi'] = 'ICQ';
$lang['aim_lofi'] = 'AIM';
$lang['yim_lofi'] = 'YIM';
$lang['msnm_lofi'] = 'MSN';
$lang['quick_lofi'] = 'R�ponse rapide';
$lang['new_pm_lofi'] = 'Envoyer un MP';
//End Lo-Fi Mod


//Don't know where the next one is for, it is only in french so it needs to be commented out, or when not used removed
//$lang['Legend'] = 'L�gende';
//
// That's all Folks!
// -------------------------------------------------

?>
