<?php
/***************************************************************************
 *                            lang_admin_statistics.php [English]
 *                              -------------------
 *     begin                : Fri Jan 24 2003
 *     copyright            : (C) 2003 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
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

$lang['LEFT_Package_Module'] = 'Ensemble des modules';
$lang['Install_module'] = 'Installer un module';
$lang['Manage_modules'] = 'Gestion des modules';
$lang['Stats_configuration'] = 'Configuration';
$lang['Edit_module'] = 'Editer un module';
$lang['Stats_langcp'] = 'Gestion des langages';

// Package Module
$lang['Package_module'] = 'Ensemble des modules';
$lang['Package_module_explain'] = 'Ici, vous pouvez combiner vos fichiers de 3 modules en un pack de module de distribution.';
$lang['Select_info_file'] = 'S�lectionner un fichier information';
$lang['Select_lang_file'] = 'S�lectionner un fichier de langue';
$lang['Select_module_file'] = 'S�lectionner le fichier php d\'un module';
$lang['Package_name'] = 'Nom du pack';
$lang['Create'] = 'Cr�er';

// Install Module
$lang['Install_module_explain'] = 'Ici, vous pouvez installer un nouveau module. Vous pouvez faire cela de deux fa�ons. La premi�re consiste � uploader votre pack de module avec le formulaire fourni ci-dessous. Si l\'upload ne fonctionne pas, vous pouvez uploader le pack de module vers votre r�pertoire ./modules/pakfiles, il sera affich� automatiquement ici. Pour plus d\'informations sur l\'installation d\'un pack de module, vous pouvez regarder la documentation incluse.<br />Apr�s avoir choisi d\'installer un pack de module, vous serez guid� vers certaines informations concernant le module que vous avez choisi. Veuillez vous assurer que les informations sont correctes et que vous remplissez les conditions minimum (par exemple, la bonne version du Mod Statistiques). Vous pouvez aussi choisir le langage que vous souhaitez installer avec. Apr�s avoir tout v�rifi� et que vous �tes pr�t � l\'installer, cliquez sur le bouton \'Installation\'.<br />L\'installation par d�faut laisse le module d�sactiv�, vous devez l\'activer pour qu\'il soit affich� sur la page de statistiques.';
$lang['Select_module_pak'] = 'S�lectionner un pack de module';
$lang['Upload_module_pak'] = 'Uploader un pack de module';
$lang['Inst_module_already_exist'] = 'Le module \'%s\' existe d�j�.<br />Si vous souhaitez mettre � jour ce module, vous devez aller dans la gestion des modules et le mettre � jour.<br />Si vous souhaitez le r�installer compl�tement, vous devez d\'abord d�sinstaller l\'ancien.';
$lang['Incorrect_update_module'] = 'Le pack s�lectionn� n\'est pas une mise � jour du module s�lectionn�. Veuillez vous assurer que vous avez s�lectionn� le bon pack.';

$lang['Module_name'] = 'Nom du module';
$lang['Module_description'] = 'Description du module';
$lang['Module_version'] = 'Version du module';
$lang['Required_stats_version'] = 'Version minimum du Mod Statistiques requise';
$lang['Installed_stats_version'] = 'Version du Mod Statistiques install�e';
$lang['Module_author'] = 'Auteur du module';
$lang['Author_email'] = 'Email de l\'auteur';
$lang['Module_url'] = 'Site web du module/auteur';
$lang['Update_url'] = 'Site web des mises � jour du module (v�rifiez les derni�res mises � jour)';
$lang['Provided_language'] = 'Langage disponible';
$lang['Install_language'] = 'Langage � installer';
$lang['Module_installed'] = 'Ce module a �t� install� avec succ�s.';
$lang['Module_updated'] = 'Ce module a �t� mis � jour avec succ�s.';

// Manage Modules
$lang['Manage_modules_explain'] = 'Ici, vous pouvez g�rer vos modules. Vous pouvez les �diter, les supprimer, modifier l\'ordre, les activer et les d�sactiver. Si vous souhaitez configurer votre module (choisir les permissions, �diter les variables de langue, etc...), vous devez l\'�diter.<br />Si vous cliquez sur le nom d\'un module, vous apercevrez une pr�visualisation de ce module.';
$lang['Deactivate'] = 'D�sactiver';
$lang['Activate'] = 'Activer';

// Delete Module
$lang['Confirm_delete_module'] = 'Etes-vous s�r de vouloir supprimer ce module ?';

// Configuration
$lang['Msg_config_updated'] = '- La configuration du Mod Statistiques a �t� mise � jour avec succ�s.';
$lang['Msg_reset_view_count'] = '- Le compteur de visites a �t� remis � z�ro avec succ�s.';
$lang['Msg_reset_install_date'] = '- La date d\'installation a �t� mise sur la date d\'aujourd\'hui.';
$lang['Msg_reset_cache'] = '- Tous les caches ont �t� vid�s avec succ�s.';
$lang['Msg_purge_modules'] = '- Le r�pertoire des modules a �t� supprim� avec succ�s.';
$lang['Config_title'] = 'Configuration des statistiques';
$lang['Config_explain'] = 'Ici, vous pouvez configurer le Mod Statistiques.';
$lang['Messages'] = 'Messages';
$lang['Return_limit'] = 'Limite de r�p�tition';
$lang['Return_limit_explain'] = 'Nombre de rangs � inclure pour chaque classement.';
$lang['Reset_settings_title'] = 'R�initialiser les options';
$lang['Reset_view_count'] = 'R�initialiser le compteur de visites';
$lang['Reset_view_count_explain'] = 'Remettre le compteur de visites en bas de la page de statistiques � z�ro.';
$lang['Reset_install_date'] = 'R�initialiser la date d\'installation';
$lang['Reset_install_date_explain'] = 'Remettre la date d\'installation � la date d\'aujourd\'hui.';
$lang['Reset_cache'] = 'Vider le cache';
$lang['Reset_cache_explain'] = 'Vider toutes les donn�es actuelles du cache pour tous les modules et contenus des templates.';
$lang['Purge_module_dir'] = 'Vider le r�pertoire des modules';
$lang['Purge_module_dir_explain'] = 'Supprimer compl�tement le r�pertoire des modules, tous les sous-r�pertoires ainsi que tous les fichiers seront supprim�s. Veuillez utiliser cette option seulement si vous �tes s�r de ce que vous fa�tes et de l\'effet que cela aura sur vos statistiques.';

// Edit Module
$lang['Msg_changed_update_time'] = '- Le temps de mise � jour � �t� modifi� avec succ�s.';
$lang['Msg_cleared_module_cache'] = '- Le cache des modules a �t� vid� avec succ�s.';
$lang['Msg_module_fields_updated'] = '- Les champs d�finis des modules ont �t� mis � jour avec succ�s.';

$lang['Module_select_title'] = 'S�lectionner un module';
$lang['Module_select_explain'] = 'Ici, vous pouvez s�lectionner le module que vous souhaitez �diter.';
$lang['Edit_module_explain'] = 'Ici, vous pouvez configurer le module. Ci-dessous, vous pouvez apercevoir certaines informations, dans la fen�tre Messages l� o� tous les messages mis � jour sont affich�s. Ci-desous, vous trouverez �galement la zone de configuration et celle de mise � jour du module. Dans la zone de mise � jour, veuillez s�lectionner un pack de module \'ou\' uploadez un pack de module, surtout pas les deux en m�me temps.<br />La zone de configuration peut changer d\'un module � un autre, certains disposent d\'options sp�ciales de configuration; l\'auteur consid�re qu\'elles pourraient vous �tre utiles.';
$lang['Module_informations'] = 'Informations du module';
$lang['Module_languages'] = 'Langages rattach�s � ce module';
$lang['Preview_module'] = 'Pr�visualiser ce module';
$lang['Module_configuration'] = 'Configuration du module';
$lang['Update_time'] = 'Temps de mise � jour (en minutes)';
$lang['Update_time_explain'] = 'Intervalle de temps (en minutes) du rafra�chissement des donn�es du cache avec de nouvelles donn�es. Chaque \'X\' minutes, le module est r�actualis�.<br />Depuis que les statistiques utilisent un syst�me de priorit�, cette dur�e peut �tre plus importante que \'X\' minutes, mais cela ne peut pas d�passer plus d\'une journ�e.';
$lang['Module_status'] = 'Statut du module';
$lang['Active'] = 'Actif';
$lang['Not_active'] = 'D�sactiv�';
$lang['Clear_module_cache'] = 'Vider le cache des modules';
$lang['Clear_module_cache_explain'] = 'Videz le cache du module et remettez � z�ro ses priorit�s. La prochaine fois que la page de statistiques sera appel�e, ce module sera recharg�.';
$lang['Update_module'] = 'Mettre � jour ce module';
$lang['No_module_packages_found'] = 'Aucun pack de module n\'a �t� trouv�';

// Permissions
$lang['Msg_permissions_updated'] = '- Permissions mises � jour';
$lang['Permissions'] = 'Permissions';
$lang['Set_permissions_title'] = 'Ici, vous pouvez choisir les permissions pour voir un module. Seuls les utilisateurs (anonyme, membre, mod�rateur et webmaster) et groupes autoris�s/list�s ici peuvent voir le module sur la page de statistiques.';
$lang['Perm_all'] = 'Anonyme';
$lang['Perm_reg'] = 'Membre';
$lang['Perm_mod'] = 'Mod�rateur';
$lang['Perm_admin'] = 'webmaster';
$lang['Perm_group'] = 'Groupes';
$lang['Added_groups'] = 'Groupes ajout�s';
$lang['Perm_add_group'] = 'Ajouter un groupe';
$lang['Perm_remove_group'] = 'Supprimer un groupe';
$lang['Perm_groups_title'] = 'Groupes autoris�s � voir le module';
$lang['No_groups_selected'] = 'Aucun groupe n\'a �t� s�lectionn�';
$lang['No_groups_to_add'] = 'Il n\'y a plus aucun groupe � ajouter';

// Language CP
$lang['Language_key'] = 'Variable de langue';
$lang['Language_value'] = 'Valeur';
$lang['Update_all_lang'] = 'Mettre � jour toutes les entr�es';
$lang['Add_new_key'] = 'Ajouter une nouvelle variable';
$lang['Create_new_lang'] = 'Cr�er un nouveau langage';
$lang['Delete_language'] = 'Supprimer';
$lang['Language_cp_title'] = 'Panneau de contr�le des langages';
$lang['Language_cp_explain'] = 'Ici, vous pouvez g�rer toutes les variables et packs de langues pour chaque module, les ordonner, etc... Vous pouvez �galement importer ou exporter des packs de langages.';
$lang['Export_lang_module'] = 'Exporter la langue de ce module';
$lang['Export_language'] = 'Exporter ce langage';
$lang['Export_everything'] = 'Exporter tout';
$lang['Import_new_language'] = 'Importer un langage';
$lang['Import_new_language_explain'] = 'Ici, vous pouvez uploader (ou s�lectionner) le pack de langue que vous souhaitez installer. Apr�s avoir upload� (ou s�lectionn�) un pack de langue, vous apercevrez certaines informations le concernant. C\'est seulement apr�s avoir regard� ces informations que le pack sera install�.';
$lang['Select_language_pak'] = 'S�lectionner un pack de langue';
$lang['Upload_language_pak'] = 'Uploader un pack de langue';

$lang['Language'] = 'Langue';
$lang['Modules'] = 'Modules';
$lang['Language_pak_installed'] = 'Le pack de langue a �t� install� avec succ�s.';	

?>