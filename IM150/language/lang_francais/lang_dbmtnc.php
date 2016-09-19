<?php

/***************************************************************************
 *                            lang_dbmtnc.php [English]
 *                              -------------------
 *   begin                : Fri Feb 07, 2003
 *   copyright            : (C) 2004 Philipp Kordowich
 *                          Parts: (C) 2002 The phpBB Group
 *
 *   part of DB Maintenance Mod 1.3.0
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
// Language file for DB Maintenance Mod
//

$lang['DB_Maintenance'] = 'Maintenance de la base de donn�es';
$lang['DB_Maintenance_Description'] = 'Ici, vous pouvez v�rifier que votre base de donn�es ne contient pas d\'incoh�rence ni d\'erreur.<br />
	<b>Attention :</b> Certaines op�rations n�cessitent du temps pour s\'effectuer. Votre forum sera <b>d�sactiv�</b> durant ces op�rations.</br />
	<br />
	<b>Il est fortement recommand� de sauvegarder votre base de donn�es avant d\'utiliser l\'une des fonctions list�es ci-dessous !</b>';
$lang['Function'] = 'Fonction';
$lang['Function_Description'] = 'Description';

$lang['Incomplete_configuration'] = 'Une modification <b>%s</b> n\'a pas �t� trouv� dans la configuration. DB Maintenance ne peut d�marrer sans cette modification.<br />
	Vous avez peut-�tre oubli� d\'ex�cuter les requ�tes SQL comme d�crit dans les instructions d\'installation.';
$lang['dbtype_not_supported'] = 'D�sol�, cette fonction n\'est pas support�e par votre base de donn�es';
$lang['no_function_specified'] = 'Aucune fonction n\'a �t� sp�cifi�e';
$lang['function_unknown'] = 'La fonction sp�cifi�e est inconnue';
$lang['Old_MySQL_Version'] = 'D�sol�, votre version de mysql ne supporte pas cette fonction. Veuillez utiliser la fonction 3.23.17 ou plus r�cente.';

$lang['Back_to_DB_Maintenance'] = 'Revenir � la maintenance de la base de donn�es';
$lang['Processing_time'] = 'DB Maintenance a pris %f secondes pour effectuer les op�rations';

$lang['Lock_db'] = 'D�sactive le forum';
$lang['Unlock_db'] = 'Active le forum';
$lang['Already_locked'] = 'Le forum a d�j� �t� d�sactiv�';
$lang['Ignore_unlock_command'] = 'Le forum sera d�sactiv� quand vous lancerez cette commande. Le forum ne sera pas r�activ�';
$lang['Delay_info'] = 'Un d�lai de plusieurs secondes est n�cessaire pour permettre aux actions r�alis�es sur votre base de donn�es de se finaliser...';

$lang['Affected_row'] = 'Une donn�e a �t� affect�e';
$lang['Affected_rows'] = '%d donn�es ont �t� affect�es';
$lang['Done'] = 'Fini';
// The following variable is used when nothing hat to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
$lang['Nothing_to_do'] = "<p class=\"gen\"><i>Rien � faire</i></p>\n";

//
// Names for new records in several tables
//
$lang['New_cat_name'] = 'Forums restaur�s';
$lang['New_forum_name'] = 'Sujets restaur�s';
$lang['New_topic_name'] = 'Messages restaur�s';
$lang['Restored_topic_name'] = 'Sujet restaur�';
$lang['New_poster_name'] = 'Message restaur�'; // Name for Poster of a restored post

//
// Functions available
//
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leef empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
//
$mtnc[] = array('statistic',
	'Statistiques',
	'Affiche des informations sur le forum et la base de donn�es.',
	'',
	0);
$mtnc[] = array('config',
	'Configuration',
	'Permet la configuration de Maintenance DB.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'V�rifier les tables des utilisateurs et des groupes',
	'Cela va v�rifier les tables des utilisateurs et des groupes qui pourraient contenir d\'�ventuelles erreurs et restaurera les groupes d\'utilisateurs individuels manquants.',
	'Vous allez perdre tous les groupes qui n\'ont pas de membre en effectuant cette action. Continuer ?',
	0);
$mtnc[] = array('check_post',
	'V�rifier les tables des messages et des sujets',
	'Cela va v�rifier les tables des messages et des sujets qui pourraient contenir d\'�ventuelles erreurs.',
	'Vous allez perdre tous les messages qui n\'ont pas de texte. Continuer ?',
	0);
$mtnc[] = array('check_vote',
	'V�rifier les tables des sondages',
	'Cela va v�rifier les tables des sondages qui pourraient contenir d\'�ventuelles erreurs.',
	'Vous allez perdre toutes les donn�es des sondages qui n\'ont pas de sondage correspondant. Continuer ?',
	0);
$mtnc[] = array('check_pm',
	'V�rifier les tables des messages priv�s',
	'Cela va v�rifier les tables des messages priv�s qui pourraient contenir d\'�ventuelles erreurs.',
	'Les messages non lus seront supprim�s quand l\'�metteur ou le destinataire n\'existe pas. Continuer ?',
	0);
$mtnc[] = array('check_config',
	'V�rifier la table de configuration',
	'Cela v�rifiera les �ventuels oublis.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'V�rifier la table identifiant les mots utilis�s par la recherche',
	'Cela va v�rifier la table identifiant les mots utilis�s par la recherche qui pourrait contenir d\'�ventuelles erreurs. Cette table est utilis�e par la fonction recherche.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'V�rifier la table listant les mots utilis�s par la recherche',
	'Cela va retirer tous les mots inutiles dans la liste des mots utilis�s par la recherche.',
	'Cette commande requi�re du temps pour se finaliser. Il n\'est pas n�cessaire d\'ex�cuter cette v�rification mais la faire peut r�duire la taille de la base de donn�es. Continuer ?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synchroniser les forums et les sujets',
	'Cela va synchroniser les compteurs des messages ainsi que les donn�es des messages dans les forums et les sujets.',
	'Cette commande requi�re du temps pour se finaliser. Si votre serveur n\'autorise pas l\'usage de la commande set_time_limit(), alors celle-ci sera interrompue par PHP. Aucune donn�e ne sera perdue par cette action mais certaines donn�es peuvent ne pas �tre mises � jour. Continuer ?',
	0);
$mtnc[] = array('synchronize_user',
	'Synchroniser les compteurs de messages des utilisateurs',
	'Cela va synchroniser les compteurs de messages de tous les utilisateurs.',
	'<b>Attention :</b> les messages qui ont �t� d�lest�s ne sont normalement pas soustraits du compteur de message. Quand vous effectuerez cette commande, les messages d�lest�s seront soustraits du compteur et ne pourront pas �tre restaur�s. Continuer ?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Synchroniser les statuts des mod�rateurs',
	'Cela va re-synchroniser le statut des mod�rateurs dans la table des utilisateurs.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'R�initialiser la date des derniers messages',
	'Cela va r�initialiser les donn�es des derniers messages si ils sont enregistr�s avec une date future. Cela r�soudra les probl�mes que les utilisateurs peuvent rencontrer lorsqu\'ils envoient un message qu\'ils ne sont pas autoris�s � cr�er aussit�t apr�s le pr�c�dent message.',
	'N\'importe quelle date future d\'un message sera chang�e en date courante. Continuer ?',
	0);
$mtnc[] = array('reset_sessions',
	'R�initialiser toutes les sessions',
	'Cela va r�initialiser toutes les sessions actuelles en vidant la table session.',
	'Tous les utilisateurs actuellement actifs perdront leurs sessions et les r�sultats de leurs recherches. Continuer ?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('rebuild_search_index',
	'Reconstruction de l\'indexation du moteur de recherche',
	'Cette fonction reconstruira l\'indexation du moteur de recherche. Vous n\'aurez pas besoin de cette fonction dans des conditions normales. ',
	'Ceci supprimera compl�tement l\'indexation du moteur de recherche et la reconstruira. Ca peut prendre plusieurs heures pour accomplir la t�che. Le forum ne sera pas accessible pendant ce temps. Lancer ?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Relancer la reconstruction',
	'Servez-vous de cette fonction, si la reconstruction de l\'indexation du moteur de recherche a �tait interrompue.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'V�rifier la base de donn�es',
	'V�rifie que la base de donn�es ne contient pas d\'erreurs.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimiser la base de donn�es',
	'Optimiser les tables. Cela va r�duire la taille de votre base de donn�es apr�s en avoir supprim� plusieurs enregistrements devenus obsol�tes.',
	'',
	1);
$mtnc[] = array('repair_db',
	'R�parer la base de donn�es',
	'Corrige les �ventuelles erreurs trouv�es dans la base de donn�es.',
	'Vous ne devez ex�cuter cette action que si une erreur est rapport�e au moment de la v�rification de la base de donn�es. Continuer ?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'R�initialiser les valeurs auto incr�ment�es',
	'Cette fonction r�initialise les valeurs auto incr�ment�es. Cela doit �tre ex�cut� seulement si il appara�t des probl�mes concernant l\'insertion de nouvelles donn�es dans les tables.',
	'Voulez-vous vraiment r�initialiser les valeurs auto incr�ment�es ? Aucune donn�e ne sera perdue mais cette fonction doit seulement �tre utilis�e si elle s\'av�re n�cessaire.',
	0);
$mtnc[] = array('heap_convert',
	'Convertir la table session',
	'Cette fonction convertira la table session en une table de type HEAP. Cela s\'effectue normalement durant l\'installation et acc�l�rera sensiblement phpBB. Vous devez utiliser cette fonction si votre table session n\'est pas une table de type HEAP.',
	'Voulez-vous vraiment convertir la table ?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'R�activer le forum',
	'Utiliser cette fonction si vous avez obtenu une erreur durant l\'ex�cution d\'une op�ration lanc�e auparavant et si le forum est toujours d�sactiv�.',
	'',
	3);

//
// Function specific vars
//

// statistic
$lang['Statistic_title'] = 'Statistiques du forum et de la base de donn�es';
$lang['Database_table_info'] = 'Les statistiques de la base de donn�es sont fournis de trois fa�ons diff�rentes : celle pour toutes les tables de la base de donn�es, celle pour toutes
les tables utilis�es par d�faut par phpBB (tables noyaux) et celle commen�ant avec le pr�fixe des tables du forum (tables compl�mentaires).';
$lang['Board_statistic'] = 'Statistiques du forum';
$lang['Database_statistic'] = 'Statistiques de la base de donn�es';
$lang['Version_info'] = 'Informations sur les versions';
$lang['Thereof_deactivated_users'] = 'd�sactiv�(s)';
$lang['Thereof_Moderators'] = 'mod�rateur(s)';
$lang['Thereof_Administrators'] = 'administrateur(s)';
$lang['Users_with_Admin_Privileges'] = 'Utilisateur(s) avec des droits d\'administrateur';
$lang['Number_tables'] = 'Nombre de table(s)';
$lang['Number_records'] = 'Nombre d\'enregistrement(s)';
$lang['DB_size'] = 'Taille de la base de donn�es';
$lang['Thereof_phpbb_core'] = 'Tables noyaux';
$lang['Thereof_phpbb_advanced'] = 'Avec les tables compl�mentaires';
$lang['Version_of_board'] = 'Version du forum';
$lang['Version_of_mod'] = 'Version de DB Maintenance';
$lang['Version_of_PHP'] = 'Version de PHP';
$lang['Version_of_MySQL'] = 'Version de MySQL';
// config
$lang['Config_title'] = 'Configuration de Maintenance DB ';
$lang['Config_info'] = 'Les options suivantes permettent de configurer le comportement de DB Maintenance. Attention, une mauvaise configuration peut donner des r�sultats inattendus. ';
$lang['General_Config'] = 'Configuration G�n�rale ';
$lang['Rebuild_Config'] = 'Configuration de la reconstruction de l\'indexation du moteur de recherche';
$lang['Current_Rebuild_Config'] = 'Configuration de la reconstruction courante';
$lang['Rebuild_Settings_Explain'] = 'Ces param�tres ajustent le comportement de DB maintenance en reconstruisant l\'indexation du moteur de recherche. ';
$lang['Current_Rebuild_Settings_Explain'] = 'Ces param�tres sont employ�s par DB Maintenance pour stocker la position de la reconstruction courante. Il n\'y a aucun besoin d\'adapter ces param�tres dans des conditions normales.';
$lang['Disallow_postcounter'] = 'Rejetez la synchronisation des compteurs des messages des utilisateurs ';
$lang['Disallow_postcounter_Explain'] = 'Ceci d�sactivera la fonction pour synchroniser les compteurs de messages des utilisateurs. Vous pouvez rejetez cette fonction si vous ne voulez pas que les compteurs des messages des utilisateurs soit soustrait des messages supprim�s.';
$lang['Disallow_rebuild'] = 'Rejetez la reconstruction de l\'indexation du moteur de recherche';
$lang['Disallow_rebuild_Explain'] = 'Ceci d�sactivera la reconstruction de l\'indexation du moteur de recherche. Une reconstruction interrompue peut �tre repris cependant. ';
$lang['Rebuildcfg_Timelimit'] = 'Temps d\'ex�cution maximum pour reconstruire (en secondes) ';
$lang['Rebuildcfg_Timelimit_Explain'] = 'Temps maximum utilis� pour une �tape de reconstruction (d�faut : 240). Cette valeur limite le temps d\'ex�cution m�me si un plus long temps serait possible. ';
$lang['Rebuildcfg_Timeoverwrite'] = 'Quantit� fixe de temps disponible pour l\'ex�cution (en secondes)';
$lang['Rebuildcfg_Timeoverwrite_Explain'] = 'Temps estim� fixe disponible pour l\'ex�cution (d�faut : 0). Avec 0 le r�sultat du calcul est employ� comme temps d\'ex�cution, n\'importe quelle autre valeur recouvre la valeur calcul�e.';
$lang['Rebuildcfg_Maxmemory'] = 'Taille maximum du message � reconstruire (en Kbytes) ';
$lang['Rebuildcfg_Maxmemory_Explain'] = 'Taille maximum des messages index�s dans une �tape (d�faut : 500). Quand la somme des tailles des messages est sup�rieur � cette valeur, aucun autre message n\'est index� dans l\'�tape courante. ';
$lang['Rebuildcfg_Minposts'] = 'Messages minimum � indexer par �tape';
$lang['Rebuildcfg_Minposts_Explain'] = 'Nombre minimum des messages index�s par �tape (d�faut : 3). D�finit le nombre de messages qui sont au minimum index�s par �tape. ';
$lang['Rebuildcfg_PHP3Only'] = 'Employez seulement la m�thode compatible PHP 3 standard pour l\'indexation ';
$lang['Rebuildcfg_PHP3Only_Explain'] = 'DB maintenance emploie une m�thode avanc�e pour l\'indexation quand PHP 4.0.5 ou plus r�cent est disponible. Vous pouvez couper la m�thode avanc�e de sorte que DB maintenance utilise le m�thode standard de conseil. ';
$lang['Rebuildcfg_PHP4PPS'] = 'Messages index�s par seconde en utilisant la m�thode avanc�e d\'indexation';
$lang['Rebuildcfg_PHP4PPS_Explain'] = 'Valeur estim�e des messages qui peuvent �tre index�s par seconde en utilisant la m�thode avanc�e d\'indexation (d�faut : 8).';
$lang['Rebuildcfg_PHP3PPS'] = 'Messages index�s par seconde en utilisant la m�thode standard d\'indexation.';
$lang['Rebuildcfg_PHP3PPS_Explain'] = 'Valeur estim�e des messages qui peuvent �tre index�s par seconde en utilisant la m�thode standard d\'indexation (d�faut : 1).';
$lang['Rebuild_Pos'] = 'Dernier message index�';
$lang['Rebuild_Pos_Explain'] = 'ID du dernier message index� r�ussi. Est a -1 quand la reconstruction est fini.';
$lang['Rebuild_End'] = 'Dernier message � l\'index ';
$lang['Rebuild_End_Explain'] = 'ID du dernier message � l\'index. Est � 0 quand la reconstruction est fini. ';
$lang['Dbmtnc_config_updated'] = 'Configuration mise � jour avec succ�s';
$lang['Click_return_dbmtnc_config'] = 'Cliquer %sici%s pour retourner � la configuration';
// check_user
$lang['Checking_user_tables'] = 'V�rifie les tables des utilisateurs et des groupes';
$lang['Checking_missing_anonymous'] = 'V�rification de la pr�sence d\'un compte anonyme manquant';
$lang['Anonymous_recreated'] = 'Compte anonyme recr��';
$lang['Checking_incorrect_pending_information'] = 'V�rifie que les renseignements en attente ne sont pas inexacts';
$lang['Updating_invalid_pendig_user'] = 'Met � jour les renseignements en attente qui s\'av�rent invalide pour un utilisateur';
$lang['Updating_invalid_pendig_users'] = 'Met � jour les renseignements en attente qui s\'av�rent invalide pour %d utilisateurs';
$lang['Updating_pending_information'] = 'Met � jour les renseignements en attente pour les groupes d\'utilisateurs individuels';
$lang['Checking_missing_user_groups'] = 'V�rifie les utilisateurs avec plusieurs ou aucun groupe d\'utilisateurs individuels';
$lang['Found_multiple_SUG'] = 'A trouv� des utilisateurs avec plusieurs groupes d\'utilisateurs individuels';
$lang['Resolving_user_id'] = 'Replace les utilisateurs dans un groupe';
$lang['Removing_groups'] = 'Retire les groupes';
$lang['Removing_user_groups'] = 'Retire les utilisateurs du groupe de connexion';
$lang['Recreating_SUG'] = 'Recr�e les groupes d\'utilisateurs individuels pour les utilisateurs';
$lang['Checking_for_invalid_moderators'] = 'V�rifie que la configuration des mod�rateurs des groupes n\'est pas invalide';
$lang['Updating_Moderator'] = 'Configure les utilisateurs actuels comme mod�rateur du groupe';
$lang['Checking_moderator_membership'] = 'V�rifie les inscriptions au groupe du mod�rateur';
$lang['Updating_mod_membership'] = 'Met � jour les inscriptions du mod�rateur du groupe';
$lang['Moderator_added'] = 'Mod�rateur ajout� au groupe';
$lang['Moderator_changed_pending'] = 'Change le statut d\'attente du mod�rateur';
$lang['Remove_invalid_user_data'] = 'Retire les donn�es invalides des utilisateurs dans la table des groupes d\'utilisateurs';
$lang['Remove_empty_groups'] = 'Retire les groupes vides';
$lang['Remove_invalid_group_data'] = 'Retire les donn�es invalides des groupes dans la table des groupes d\'utilisateurs';
$lang['Checking_ranks'] = 'V�rifie qu\'il n\'y a pas de rang invalide';
$lang['Invalid_ranks_found'] = 'Trouve des utilisateurs avec un rang invalide';
$lang['Removing_invalid_ranks'] = 'Retire les rangs invalides';
$lang['Checking_themes'] = 'V�rifie qu\'il n\'y a pas de configuration des th�mes invalide';
$lang['Updating_users_without_style'] = 'Mets � jour les utilisateurs sans th�me configur�';
$lang['Default_theme_invalid'] = '<b>Attention :</b> Le th�me par d�faut est invalide. Veuillez v�rifier votre configuration.';
$lang['Updating_themes'] = 'Met � jour les th�mes invalides vers le th�me %d';
$lang['Checking_theme_names'] = 'V�rifie qu\'il n\'a pas de donn�e invalide concernant le nom des th�mes';
$lang['Removing_invalid_theme_names'] = 'Retire les donn�es invalides concernant le nom des th�mes';
$lang['Checking_languages'] = 'V�rifie qu\'il n\'y a pas de configuration de langue invalide';
$lang['Invalid_languages_found'] = 'Trouve des utilisateurs avec une configuration de la langue invalide';
$lang['Default_language_invalid'] = '<b>Attention :</b> La langue par d�faut est invalide. Veuillez v�rifier votre configuration.';
$lang['English_language_invalid'] = '<b>Attention :</b> La langue par d�faut est invalide et les fichiers de langue anglaise n\'existent pas. Vous devez restaurer le r�pertoire <b>lang_english</b>.';
$lang['Changing_language'] = 'Change la langue de \'%s\' vers \'%s\'';
$lang['Remove_invalid_ban_data'] = 'Retire les donn�es de bannissement invalides';
// check_post
$lang['Checking_post_tables'] = 'V�rifie les tables des messages et des sujets';
$lang['Checking_invalid_forums'] = 'V�rifie qu\'il n\'y a pas de forum avec une cat�gorie invalide';
$lang['Invalid_forums_found'] = 'Trouve des forums avec une cat�gorie invalide';
$lang['Setting_category'] = 'D�place les forums dans la cat�gorie \'%s\'';
$lang['Checking_posts_wo_text'] = 'V�rifie qu\'il n\'y a pas de message sans texte';
$lang['Posts_wo_text_found'] = 'Trouve des messages sans texte';
$lang['Deleting_post_wo_text'] = '%d (Sujet : %s (%d); Utilisateur : %s (%d))';
$lang['Deleting_Posts'] = 'Supprime les donn�es des messages';
$lang['Checking_topics_wo_post'] = 'V�rifie qu\'il n\'y a pas de sujet sans message';
$lang['Topics_wo_post_found'] = 'Trouve des sujets sans message';
$lang['Deleting_topics'] = 'Supprime les donn�es des sujets';
$lang['Checking_invalid_topics'] = 'V�rifie qu\'il n\'y a pas de sujet avec un forum invalide';
$lang['Invalid_topics_found'] = 'Trouve des sujets avec un forum invalide';
$lang['Setting_forum'] = 'D�place les sujets dans le forum \'%s\'';
$lang['Checking_invalid_posts'] = 'V�rifie qu\'il n\'y a pas de message avec un sujet invalide';
$lang['Invalid_posts_found'] = 'Trouve des messages avec un sujet invalide';
$lang['Setting_topic'] = 'D�place les messages %s du sujet \'%s\' (%d) dans le forum \'%s\'';
$lang['Checking_invalid_forums_posts'] = 'V�rifie qu\'il n\'y a pas de message avec un forum invalide';
$lang['Invalid_forum_posts_found'] = 'Trouve des messages avec un forum invalide';
$lang['Setting_post_forum'] = '%d: D�place du forum \'%s\' (%d) vers \'%s\' (%d)';
$lang['Checking_texts_wo_post'] = 'V�rifie qu\'il n\'y a pas de texte sans message rattach�';
$lang['Invalid_texts_found'] = 'Trouve des textes sans message rattach�';
$lang['Recreating_post'] = 'Recr�e le message %d et le d�place dans le sujet \'%s\' situ� dans le forum \'%s\'<br />Extrait : %s';
$lang['Checking_invalid_topic_posters'] = 'V�rifie qu\'il n\'y a pas de sujet avec un utilisateur invalide';
$lang['Invalid_topic_poster_found'] = 'Trouve des sujets avec un utilisateur invalide';
$lang['Updating_topic'] = 'Met � jour le sujet %d (Utilisateur : %d -&gt; %d)';
$lang['Checking_invalid_posters'] = 'V�rifie qu\'il n\'y a pas de message avec un utilisateur invalide';
$lang['Invalid_poster_found'] = 'Trouve des messages avec un utilisateur invalide';
$lang['Updating_posts'] = 'Met � jour les messages';
$lang['Checking_moved_topics'] = 'V�rifie les sujets d�plac�s';
$lang['Deleting_invalid_moved_topics'] = 'Supprime les sujets d�plac�s invalides';
$lang['Updating_invalid_moved_topic'] = 'Met � jour les informations de d�placement invalides pour un sujet non d�plac�';
$lang['Updating_invalid_moved_topics'] = 'Met � jour les informations des d�placements invalides pour %d sujets non d�plac�s';
$lang['Checking_prune_settings'] = 'V�rifie qu\'il n\'y a pas de donn�e de d�lestage invalide';
$lang['Removing_invalid_prune_settings'] = 'Retire la configuration invalide pour le d�lestage';
$lang['Updating_invalid_prune_setting'] = 'Met � jour la configuration de d�lestage invalide d\'un forum';
$lang['Updating_invalid_prune_settings'] = 'Met � jour la configuration de d�lestage invalide pour %d forums';
$lang['Checking_topic_watch_data'] = 'V�rifie qu\'il n\'y a pas de sujet invalide surveill�s';
$lang['Checking_auth_access_data'] = 'V�rifie qu\'il n\'y a pas de donn�e d\'autorisation invalides pour les groupes';
$lang['Must_synchronize'] = 'Vous devez synchroniser les donn�es des messages avant d\'utiliser votre forum. Cliquez pour continuer.';
// check_vote
$lang['Checking_vote_tables'] = 'V�rifie les tables des sondages';
$lang['Checking_votes_wo_topic'] = 'V�rifie qu\'il n\'y a pas de sondage sans sujet correspondant';
$lang['Votes_wo_topic_found'] = 'Trouve des sondages sans sujet';
$lang['Invalid_vote'] = '%s (%d) - Date de d�but : %s - Date de fin : %s';
$lang['Deleting_votes'] = 'Supprime les sondages';
$lang['Checking_votes_wo_result'] = 'V�rifie les sondages sans r�sultat';
$lang['Votes_wo_result_found'] = 'Trouve des sondages sans r�sultat';
$lang['Checking_topics_vote_data'] = 'V�rifie les donn�es des sondages dans les tables des sujets';
$lang['Updating_topics_wo_vote'] = 'Met � jour les sujets affichant un sondage sans sondage correspondant';
$lang['Updating_topics_w_vote'] = 'Met � jour les sujets n\'affichant pas de sondage mais qui ont un sondage correspondant';
$lang['Checking_results_wo_vote'] = 'V�rifie les r�sultats sans sondage correspondant';
$lang['Results_wo_vote_found'] = 'Trouve des r�sultats sans sondage';
$lang['Invalid_result'] = 'Supprime le r�sultat : %s (Sondages : %d)';
$lang['Checking_voters_data'] = 'V�rifie qu\'il n\'y a pas de donn�e de sondage invalides';
// check_pm
$lang['Checking_pm_tables'] = 'V�rifie les tables des messages priv�s';
$lang['Checking_pms_wo_text'] = 'V�rifie qu\'il n\'y a pas de message priv� sans texte';
$lang['Pms_wo_text_found'] = 'Trouve des messages priv�s sans texte';
$lang['Deleting_pn_wo_text'] = '%d (Sujet: %s; �metteur: %s (%d); Destinataire: %s (%d))';
$lang['Deleting_Pms'] = 'Supprime les donn�es des messages priv�s';
$lang['Checking_texts_wo_pm'] = 'V�rifie le texte des messages priv�s qui seraient sans message';
$lang['Deleting_pm_texts'] = 'Supprime le texte des messages priv�s invalides';
$lang['Checking_invalid_pm_senders'] = 'V�rifie les messages priv�s qui pourraient avoir des �metteurs invalides';
$lang['Invalid_pm_senders_found'] = 'Trouve des messages priv�s avec un �metteur invalide';
$lang['Updating_pms'] = 'Met � jour les messages priv�s';
$lang['Checking_invalid_pm_recipients'] = 'V�rifie les messages priv�s qui pourraient avoir des destinataires invalides';
$lang['Invalid_pm_recipients_found'] = 'Trouve des messages priv�s avec un destinataire invalide';
$lang['Checking_pm_deleted_users'] = 'V�rifie les messages priv�s qui pourraient avoir un �metteur ou un destinataire qui aurait �t� supprim�';
$lang['Invalid_pm_users_found'] = 'A trouv� des messages priv�s dont l\'�metteur ou le destinataire a �t� supprim�';
$lang['Deleting_pms'] = 'Supprime les messages priv�s';
$lang['Synchronize_new_pm_data'] = 'Synchronise les compteurs des nouveaux messages priv�s';
$lang['Synchronizing_users'] = 'Met � jour les utilisateurs';
$lang['Synchronizing_user'] = 'Met � jour l\'utilisateur %s (%d)';
$lang['Synchronize_unread_pm_data'] = 'Synchronise les compteurs des messages priv�s non lus';
// check_search_wordmatch
$lang['Checking_search_wordmatch_tables'] = 'V�rifie la table identifiant les mots utilis�s par la recherche';
$lang['Checking_search_data'] = 'V�rifie qu\'il n\'y a pas de donn�e de recherches invalides';
// check_search_wordlist
$lang['Checking_search_wordlist_tables'] = 'V�rifie la table listant les mots utilis�s par la recherche';
$lang['Checking_search_words'] = 'V�rifie qu\'il n\'y a pas de mot inutile utilis�s par la fonction recherche';
$lang['Removing_part_invalid_words'] = 'Retire certaines parties des mots utilis�s par la recherche devenues inutiles';
$lang['Removing_invalid_words'] = 'Retire les mots utilis�s par la recherche devenus inutiles';
// rebuild_search_index
$lang['Rebuilding_search_index'] = 'Reconstruction de l\'indexation du moteur de recherche';
$lang['Deleting_search_tables'] = 'Vider des tables de recherche.';
$lang['Reset_search_autoincrement'] = 'Remise � zero des compteurs des tables de recherche ';
$lang['Preparing_config_data'] = 'R�glage des donn�es de configuration';
$lang['Can_start_rebuilding'] = 'Vous pouvez maintenant commencer par reconstruire l\'indexation du moteur de recherche';
$lang['Click_once_warning'] = '<b>Cliquez une seule fois sur le lien !</b> - Cela peut prendre du temps, soyez patient !';
// proceed_rebuilding
$lang['Preparing_to_proceed'] = 'Pr�paration des tables pour le processus';
$lang['Preparing_search_tables'] = 'Pr�parer des tables de recherche pour le processus';
// perform_rebuild
$lang['Click_or_wait_to_proceed'] = 'Cliquez ici pour lancer le processus ou attendre quelques secondes ';
$lang['Indexing_progress'] = '%d sur %d messages (%01.1f%%) ont �t� index�s. Dernier messages index� : %d';
$lang['Indexing_finished'] = 'La reconstruction de l\'indexation du moteur de recherche c\'est termin� avec succ�s ';
// synchronize_post
$lang['Synchronize_posts'] = 'Synchronise les donn�es des messages';
$lang['Synchronize_topic_data'] = 'Synchronise les sujets';
$lang['Synchronizing_topics'] = 'Met � jour les sujets';
$lang['Synchronizing_topic'] = 'Met � jour le sujet %d (%s)';
$lang['Synchronize_moved_topic_data'] = 'Synchronise les sujets d�plac�s';
$lang['Inconsistencies_found'] = 'Des incoh�rences ont �t� trouv�es dans votre base de donn�es. Veuillez %V�rifier les tables des messages et des sujets%s';
$lang['Synchronizing_moved_topics'] = 'Met � jour les sujets d�plac�s';
$lang['Synchronizing_moved_topic'] = 'Met � jour le sujet d�plac� %d -&gt; %d (%s)';
$lang['Synchronize_forum_topic_data'] = 'Synchronise les donn�es des sujets dans les forums';
$lang['Synchronizing_forums'] = 'Met � jour les forums';
$lang['Synchronizing_forum'] = 'Met � jour le forum %d (%s)';
$lang['Synchronize_forum_data_wo_topic'] = 'Synchronise les forums sans sujet';
$lang['Synchronize_forum_post_data'] = 'Synchronise les donn�es des messages dans les forums';
$lang['Synchronize_forum_data_wo_post'] = 'Synchronise les forums sans message';
// synchronize_user
$lang['Synchronize_post_counters'] = 'Synchronise les compteurs de messages';
$lang['Synchronize_user_post_counter'] = 'Synchronise les compteurs de messages des utilisateurs';
$lang['Synchronizing_user_counter'] = 'Met � jour l\'utilisateur %s (%d): %d -&gt; %d';
// synchronize_mod_state
$lang['Synchronize_moderators'] = 'Synchronise le statut de mod�rateur dans la table des utilisateurs';
$lang['Getting_moderators'] = 'Obtient la liste des mod�rateurs';
$lang['Checking_non_moderators'] = 'V�rifie que les utilisateurs avec le statut de mod�rateur ne mod�rent pas tous le forum';
$lang['Updating_mod_state'] = 'Met � jour le statut de mod�rateur des utilisateurs';
$lang['Changing_moderator_status'] = 'Change le statut de mod�rateur de l\'utilisateur %s (%d)';
$lang['Checking_moderators'] = 'V�rifie que les utilisateurs n\'ayant pas le statut de mod�rateur ne mod�rent pas un forum';
// reset_date
$lang['Resetting_future_post_dates'] = 'R�initialise les donn�es des derniers messages si ils sont enregistr�s avec une date future';
$lang['Checking_post_dates'] = 'V�rifie les dates des messages';
$lang['Checking_pm_dates'] = 'V�rifie les dates des messages priv�s';
$lang['Checking_email_dates'] = 'V�rifie les dates des derniers emails';
// reset_sessions
$lang['Resetting_sessions'] = 'R�initialise les sessions';
$lang['Deleting_session_tables'] = 'Supprime dans les tables appropri�es les sessions et les r�sultats des recherches';
$lang['Restoring_session'] = 'Restaure les sessions des utilisateurs actifs';
// check_db
$lang['Checking_db'] = 'V�rifie la base de donn�es';
$lang['Checking_tables'] = 'V�rifie les tables';
$lang['Table_OK'] = 'OK';
$lang['Table_HEAP_info'] = 'Commande non disponible pour les tables de type HEAP';
// repair_db
$lang['Repairing_db'] = 'R�pare la base de donn�es';
$lang['Repairing_tables'] = 'R�pare les tables';
// optimize_db
$lang['Optimizing_db'] = 'Optimise la base de donn�es';
$lang['Optimizing_tables'] = 'Optimise les tables';
$lang['Optimization_statistic'] = 'L\'optimisation � r�duit la taille des tables de %s � %s. Cela correspond � une r�duction de %s ou %01.2f%%.';
// reset_auto_increment
$lang['Reset_ai'] = 'R�initialise les valeurs auto incr�ment�es';
$lang['Ai_message_update_table'] = 'Table mise � jour';
$lang['Ai_message_no_update'] = 'Aucune mise � jour n\'est n�cessaire';
$lang['Ai_message_update_table_old_mysql'] = 'Table mise � jour'; // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
$lang['Converting_heap'] = 'Convertit la table session en HEAP';
// unlock_db
$lang['Unlocking_db'] = 'R�active la base de donn�es';

// Emergency Recovery Console
$lang['Forum_Home'] = 'Index du forum';
$lang['ERC'] = 'Console de r�cup�ration d\'urgence';
$lang['Submit_text'] = 'Envoyer';
$lang['Select_Language'] = 'S�lectionner une langue';
$lang['No_selectable_language'] = 'Aucune langue s�lectionnable n\'existe';
$lang['Select_Option'] = 'S�lectionner une option';
$lang['Option_Help'] = 'D�tails pour les options';
$lang['Authenticate_methods'] = 'Il y a deux m�thodes pour vous identifier';
$lang['Authenticate_methods_help_text'] = 'Vous devez vous identifier avant de pouvoir effectuer le moindre changement dans la configuration du forum. Il y a deux possibilit�s pour cela :
 La premi�re, vous pouvez vous identifier en entrant le nom d\'utilisateur et le mot de passe d\'un compte administrateur actif sur le forum (m�thode pr�f�r�e). La seconde, vous pouvez vous
  identifier en entrant le nom d\'utilisateur et le mot de passe correspondant au compte utilisant la base de donn�es,le forum utilise ceux-ci pour acc�der � la base de donn�es.';
$lang['Authenticate_user_only'] = 'Vous devez vous identifier avec un compte administrateur actif.';
$lang['Authenticate_user_only_help_text'] = 'Vous devez vous identifier avant de pouvoir effectuer le moindre changement dans la configuration du forum. Vous pouvez seulement vous identifier
 en entrant le nom et le mot de passe d\'un compte administrateur actif sur le forum.';
$lang['Admin_Account'] = 'Compte administrateur du forum';
$lang['Database_Login'] = 'Nom d\'utilisateur de la base de donn�es';
$lang['Username'] = 'Nom d\'utilisateur';
$lang['Password'] = 'Mot de passe';
$lang['Auth_failed'] = 'Identification �chou�e !';
$lang['Return_ERC'] = 'Revenir � la console de r�cup�ration d\'urgence';
$lang['cur_setting'] = 'Configuration actuelle';
$lang['rec_setting'] = 'Configuration recommand�e';
$lang['secure'] = 'S�curiser';
$lang['secure_yes'] = 'oui (https)';
$lang['secure_no'] = 'non (http)';
$lang['domain'] = 'Domaine';
$lang['port'] = 'Port';
$lang['path'] = 'Chemin';
$lang['Cookie_domain'] = 'Domaine du cookie';
$lang['Cookie_name'] = 'Nom du cookie';
$lang['Cookie_path'] = 'Chemin du cookie';
$lang['select_language'] = 'S�lectionner la nouvelle langue';
$lang['select_theme'] = 'S�lectionner le nouveau th�me';
$lang['reset_thmeme'] = 'Recr�er le th�me par d�faut';
$lang['new_admin_user'] = 'Utilisateur ayant des droits d\'administrateur';
$lang['dbms'] = 'Type de base de donn�es';
$lang['DB_Host'] = 'Nom du Serveur de Base de donn�es / SGBD';
$lang['DB_Name'] = 'Nom de votre Base de donn�es';
$lang['DB_Username'] = 'Nom d\'utilisateur de la base de donn�es';
$lang['DB_Password'] = 'Mot de passe de la base de donn�es';
$lang['Table_Prefix'] = 'Pr�fixe des tables dans la base de donn�es';
$lang['New_config_php'] = "Ceci est votre nouveau config.$phpEx";
// Options
$lang['cls'] = 'Vider toutes les sessions';
$lang['rdb'] = 'R�parer les tables de la base de donn�es';
$lang['rpd'] = 'R�initialiser les donn�es du script';
$lang['rcd'] = 'R�initialiser les donn�es des cookies';
$lang['rld'] = 'R�initialiser les donn�es des langues';
$lang['rtd'] = 'R�initialiser les donn�es des templates';
$lang['dgc'] = 'D�sactiver la compression GZip';
$lang['cbl'] = 'Vider la liste des bannis';
$lang['raa'] = 'Retirer tous les administrateurs';
$lang['mua'] = 'Accorder des droits d\'administrateur � un utilisateur';
$lang['rcp'] = 'Recr�er config.php';
// Info for options
$lang['cls_info'] = 'Quand vous effectuerez ceci toutes les sessions seront vid�es.';
$lang['rdb_info'] = 'Quand vous effectuez ceci les tables de la base de donn�es seront r�par�.';
$lang['rpd_info'] = 'Quand vous effectuerez ceci les donn�es de configuration seront mises � jour si la configuration recommand�e est s�lectionn�e.';
$lang['rcd_info'] = 'Quand vous effectuerez ceci les donn�es des cookies seront mises � jour. L\'option permettant d\'activer les cookies s�curis�s se trouve dans la partie \'R�initialiser les donn�es du script\'.';
$lang['rld_info'] = 'Quand vous effectuerez ceci la langue s�lectionn�e sera utilis�e sur tout le forum. Ceci inclut les utilisateurs s\'�tant identifi�s.';
$lang['rtd_info'] = 'Quand vous effectuerez ceci le style s�lectionn� sera alors utilis� par le forum. Ceci inclut les utilisateurs s\'�tant identifi�s ou bien le th�me par d�faut (subSilver) sera recr�� et utilis� par le forum et les utilisateurs.';
$lang['rtd_info_no_theme'] = 'Quand vous effectuerez ceci le th�me par d�faut (subSilver) sera recr�e et utilis� sur tout le forum. Ceci inclut les utilisateurs s\'�tant identifi�s.';
$lang['dgc_info'] = 'Quand vous effectuez ceci la compression GZip sera d�sactiv�.';
$lang['cbl_info'] = 'Quand vous effectuerez ceci la liste des utilisateurs bannis ainsi que celle des noms d\'utilisateurs interdits seront vid�es.';
$lang['raa_info'] = 'Quand vous effectuerez ceci tous les administrateurs redeviendront des utilisateurs normaux. Si vous utilisez un compte administrateur pour vous identifier, alors celui-ci gardera les droits d\'administrateur.';
$lang['mua_info'] = 'Quand vous effectuerez ceci l\'utilisateur s�lectionn� obtiendra les droits d\'un administrateur. L\'utilisateur sera aussi activ�.';
$lang['rcp_info'] = 'Quand vous effectuerez ceci un nouveau fichier config.php sera cr�� avec les donn�es entr�es.';
// Success messages for options
$lang['cls_success'] = 'Toutes les sessions ont �t� vid�es avec succ�s.';
$lang['rdb_success'] = 'Les tables de la base de donn�es ont �t� r�par�es.';
$lang['rpd_success'] = 'La configuration du forum a �t� mise � jour avec succ�s.';
$lang['rcd_success'] = 'Les donn�es des cookies ont �t� mises � jour avec succ�s.';
$lang['rld_success'] = 'Les donn�es de langue ont �t� mises � jour avec succ�s.';
$lang['rld_failed'] = "Les fichiers de langue requis (lang_main.$phpEx et lang_admin.$phpEx) n\'existent pas.";
$lang['rtd_restore_success'] = 'Le th�me par d�faut a �t� restaur� avec succ�s.';
$lang['rtd_success'] = 'Les donn�es du th�me ont �t� mises � jour avec succ�s.';
$lang['dgc_success'] = 'La compression GZIP a �t� d�sactiv� avec succ�s.';
$lang['cbl_success'] = 'Les listes des utilisateurs bannis ainsi que celles des nom d\'utilisateurs d�sactiv�s ont �t� vid�es avec succ�s.';
$lang['cbl_success_anonymous'] = 'La liste des bannis est maintenant vide. Le compte anonyme a �t� recr��. Il est recommand� d\'utiliser la fonction &quot;V�rifier les tables de groupes et d\'utilisateurs&quot; dans DB Maintenance.';
$lang['raa_success'] = 'Tous les administrateurs ont �t� retir�s avec succ�s.';
$lang['mua_success'] = 'L\'utilisateur s�lectionn� a maintenant des droits d\'administrateur.';
$lang['mua_failed'] = '<b>Erreur :</b> L\'utilisateur s�lectionn� n\'existe pas ou il a d�j� des droits d\'administrateur.';
$lang['rcp_success'] = "copiez ce code dans un fichier texte, puis renommez le en <b>config.$phpEx</b> et envoyez le dans le r�pertoire racine du forum. Vous pouvez aussi %st�l�charger%s ce fichier sur votre ordinateur.";
// Text for success messages
$lang['Removing_admins'] = 'Retire les administrateurs';
// Help Text
$lang['Option_Help_Text'] = '
<p>Si il vous est rapport� une erreur concernant la cr�ation de nouvelle session ou autre, vous devriez alors vider les donn�es des sessions en s�lectionnant <b>Vider toutes les sessions</b>.</p>
<p>Si vous �tes dans l\'incapacit� de vous connecter ou d\'acc�der au panneau d\'administration, il peut alors y avoir une erreur dans le chemin du script ou la configuration des cookies. Vous pouvez r�initialiser ceci gr�ce � <b>R�initialiser les donn�es du script</b> ou <b>R�initialiser les donn�es des cookies</b>. Vous pouvez aussi r�initialiser la configuration de la langue gr�ce � <b>R�initialiser les donn�es des langues</b> ou les donn�es des templates avec <b>R�initialiser les donn�es des templates</b>.</p>
<p>Si vous perdez le mot de passe de votre compte, vous pouvez attribuer les droits d\'administrateur � un utilisateur en s�lectionnant <b>Accorder des droits d\'administrateur � un utilisateur</b>. Ceci activera aussi l\'utilisateur que vous aurez cr�� auparavant permettant ainsi de s\'en servir aussit�t. Si vous �tes dans l\'incapacit� d\'ajouter de nouveaux membres, vous pouvez vider la liste des bannis en choisissant <b>Vider la liste des bannis</b>.</p>
<p>Si votre forum a �t� pirat�, il est recommand� de retirer tous les comptes administrateurs en s�lectionnant <b>Retirer tous les administrateurs</b>. (Les comptes eux m�mes ne seront pas d�truits mais se verront retir�s leurs droits.)</p>
<p>Si vous avez besoin de restaurer config.php vous pouvez donc le faire en s�lectionnant <b>Recr�er config.php</b>.</p>';
?>