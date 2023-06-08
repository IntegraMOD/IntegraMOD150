<?php
/***************************************************************************
 *                            lang_admin_attach.php [French]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     Translation          : Kooky < kooky06@free.fr >
 *
 *     $Id: lang_admin_attach.php,v 1.36 2003/08/30 15:47:39 acydburn Exp $^_^
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
/*$lang['Control_Panel'] = 'Panneau de Contr�le';
$lang['Shadow_attachments'] = 'Fichiers joints perdus';
$lang['Forbidden_extensions'] = 'Extensions interdites';
$lang['Extension_control'] = 'Extensions';
$lang['Extension_group_manage'] = 'Groupes d\'extensions';
$lang['Special_categories'] = 'Cat�gories sp�ciales';
$lang['Sync_attachments'] = 'Synchroniser les fichiers joints';
$lang['Quota_limits'] = 'Limites des Quotas';
*/
// Attachments -> Management
$lang['Attach_settings'] = 'Configuration des fichiers joints';
$lang['Manage_attachments_explain'] = 'Ici, vous pouvez configurer les options principales pour le Mod Attachement. Si vous cliquez sur le bouton <u>Tester les Options</u>, le Mod Attachement effectuera quelques tests du syst�me pour �tre s�r que le Mod fonctionnera correctement. Si vous rencontrez des probl�mes en uploadant des fichiers, veuillez utiliser ce test pour obtenir un message d\'erreur plus d�taill�.';
$lang['Attach_filesize_settings'] = 'Configuration de la taille des fichiers joints';
$lang['Attach_number_settings'] = 'Configuration du nombre de fichiers joints';
$lang['Attach_options_settings'] = 'Options des fichiers joints';

$lang['Upload_directory'] = 'R�pertoire d\'Upload';
$lang['Upload_directory_explain'] = 'Entrez le chemin relatif � votre r�pertoire d\'installation de phpBB2 vers le r�pertoire d\'upload des fichiers joints. Par exemple, entrez \'files\' si votre r�pertoire d\'installation de phpBB2 est situ� � http://www.votredomaine.com/phpBB2 et que le r�pertoire d\'upload des fichiers joints est situ� � http://www.votredomaine.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Ic�ne d\'un message avec un fichier joint';
$lang['Attach_img_path_explain'] = 'Cette image est affich�e � la suite du lien du fichier joint dans un message individuel. Laissez ce champ vide si vous ne souhaitez pas qu\'une ic�ne soit affich�e. Cette option sera remplac�e par les options dans la gestion des groupes d\'extensions.';
$lang['Attach_topic_icon'] = 'Ic�ne d\'un sujet avec un fichier joint';
$lang['Attach_topic_icon_explain'] = 'Cette image est affich�e avant le titre des sujets dans lesquels sont joints des fichiers. Laissez ce champ vide si vous ne souhaitez pas qu\'une ic�ne soit affich�e.';
$lang['Attach_display_order'] = 'Ordre d\'affichage des fichiers joints';
$lang['Attach_display_order_explain'] = 'Ici, vous pouvez choisir si les fichiers joints dans des messages et messages priv�s seront affich�s suivant la date du fichier par ordre d�croissant (nouveau fichier en premier) ou par ordre croissant (plus ancien fichier en premier).';
$lang['Show_apcp'] = 'Afficher le nouveau Panneau de Contr�le des fichiers joints';
$lang['Show_apcp_explain'] = 'Choisissez si vous souhaitez afficher le nouveau panneau de contr�le des fichiers joints (Oui) ou l\'ancienne m�thode avec les deux bo�tes de dialogue pour joindre des fichiers et les �diter (Non) � partir de votre formulaire de r�daction du message. La visualisation de ceci �tant tr�s dur � expliquer, par cons�quent le mieux est de l\'essayer par vous m�me.';

$lang['Max_filesize_attach'] = 'Taille d\'un fichier';
$lang['Max_filesize_attach_explain'] = 'Taille maximale pour les fichiers joints (en octets). Une valeur de 0 signifie \'illimit�e\'. Cette option est restreinte par la configuration de votre serveur. Par exemple, si votre configuration de PHP autorise seulement un maximum de 2 Mo en upload, ceci ne pourra pas �tre remplac� par le Mod.';
$lang['Attach_quota'] = 'Quota des fichiers joints';
$lang['Attach_quota_explain'] = 'Espace disque maximum pour TOUS les fichiers pouvant �tre joints sur votre serveur. Une valeur de 0 signifie \'illimit�e\'.';
$lang['Max_filesize_pm'] = 'Taille maximale des fichiers dans la Bo�te des Messages Priv�s';
$lang['Max_filesize_pm_explain'] = 'Espace disque maximum des fichiers pouvant �tre utilis�s pour la Bo�te des Messages Priv�s de chaque utilisateur. Une valeur de 0 signifie \'illimit�e\'.';
$lang['Default_quota_limit'] = 'Limite des Quotas par d�faut';
$lang['Default_quota_limit_explain'] = 'Ici, vous �tes autoris� � s�lectionner la limite des Quotas par d�faut assign�e automatiquement aux nouveaux utilisateurs enregistr�s et aux utilisateurs n\'ayant pas de limite de Quota d�finie. L\'option \'Aucune limite de Quota\' permet de ne pas utiliser les quotas des fichiers joints, au lieu d\'utiliser l\'option par d�faut vous pouvez la d�finir dans ce panneau de gestion.';

$lang['Max_attachments'] = 'Nombre maximum de fichiers joints';
$lang['Max_attachments_explain'] = 'Nombre maximum de fichiers joints autoris� dans un message.';
$lang['Max_attachments_pm'] = 'D�finir le nombre maximum de fichiers joints dans un Message Priv�';
$lang['Max_attachments_pm_explain'] = 'D�fini le nombre maximum de fichiers joints qu\'un utilisateur est autoris� � inclure dans un message priv�.';

$lang['Disable_mod'] = 'D�sactiver le Mod Attachement';
$lang['Disable_mod_explain'] = 'Cette option est essentiellement faite pour effectuer des tests avec de nouveaux templates ou th�mes, cela d�sactive toutes les fonctions des fichiers joints � l\'exception du Panneau d\'Administration.';
$lang['PM_Attachments'] = 'Autoriser les fichiers joints dans les Messages Priv�s';
$lang['PM_Attachments_explain'] = 'Autoriser/Interdire les fichiers joints dans les Messages Priv�s.';
$lang['Ftp_upload'] = 'Activer l\'Upload par FTP';
$lang['Ftp_upload_explain'] = 'Activer/D�sactiver l\'option d\'upload par FTP. Si vous l\'activez (Oui), vous devez d�finir les param�tres du FTP et le r�pertoire d\'upload qui sera utilis� pour les fichiers joints.';
$lang['Attachment_topic_review'] = 'Souhaitez-vous afficher les fichiers joints dans la Pr�visualisation  du message ?';
$lang['Attachment_topic_review_explain'] = 'Si vous choisissez Oui, tous les fichiers joints seront affich�s dans la Pr�visualisation du message lorsque vous posterez une r�ponse.';

$lang['Ftp_server'] = 'Serveur FTP d\'Upload';
$lang['Ftp_server_explain'] = 'Ici, vous pouvez entrer l\'adresse IP ou le nom de domaine du FTP du serveur utilis� pour uploader vos fichiers. Si vous laissez ce champ vide, le serveur sur lequel votre forum phpBB2 est install� sera utilis�. Veuillez noter qu\'il n\'est pas autoris� d\'ajouter ftp:// ou quelque chose de similaire � votre adresse, uniquement ftp.foo.com ou quelque chose de plus rapide, comme l\'adresse IP compl�te.';

$lang['Attach_ftp_path'] = 'Chemin de votre r�pertoire d\'upload du FTP';
$lang['Attach_ftp_path_explain'] = 'R�pertoire o� vos fichiers joints seront conserv�s. Ce r�pertoire n\'a pas besoin de permissions (CHMOD). Veuillez ne pas entrer votre adresse IP ou une adresse FTP ici, ce champ est uniquement pour le chemin vers le FTP.<br />Par exemple: /home/web/uploads';
$lang['Ftp_download_path'] = 'Chemin du FTP pour le t�l�chargement';
$lang['Ftp_download_path_explain'] = 'Entrez le chemin relatif � votre FTP, o� vos fichiers joints sont conserv�s.<br />Si vous utilisez un serveur FTP distant, veuillez entrer l\'url compl�te, par exemple http://www.monstockage.com/phpBB2/upload.<br />Si vous utilisez votre h�bergement local pour sauvegarder vos fichiers, vous pouvez entrer le chemin relatif vers votre r�pertoire phpBB2, par exemple \'upload\'.<br />Un slash invers� sera supprim�. Laissez ce champ vide, si le chemin du FTP n\'est pas accessible � partir d\'Internet. En laissant ce champ vide vous ne pourrez pas utiliser la m�thode de t�l�chargement physique.';
$lang['Ftp_passive_mode'] = 'Activer le Mode passif du FTP';
$lang['Ftp_passive_mode_explain'] = 'La commande PASV requiert que le serveur distant ouvre un port pour la connexion des informations et renvoie l\'adresse de ce port. Le serveur distant tient compte de ce port pour que le client se connecte � lui.';

$lang['No_ftp_extensions_installed'] = 'Vous ne pouvez pas utiliser la m�thode d\'upload par FTP, car les extensions FTP ne sont pas compil�es dans votre installation de PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Ici, vous pouvez supprimer les informations des fichiers li�s � des messages lorsque les fichiers ont disparu de votre serveur, et supprimer les fichiers qui ne sont plus li�s � des messages. Vous pouvez t�l�charger ou voir un fichier en cliquant dessus; s\'il n\'y a aucun lien pr�sent, le fichier n\'existe plus.';
$lang['Shadow_attachments_file_explain'] = 'Supprimer tous les fichiers joints existant sur votre serveur et qui ne sont plus li�s � un message existant.';
$lang['Shadow_attachments_row_explain'] = 'Supprimer toutes les informations concernant les fichiers joints n\'existant plus sur votre serveur.';
$lang['Empty_file_entry'] = 'Entr�e du fichier vide';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Miniature r�initialis�e pour le fichier joint: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Synchronisation des fichiers joints termin�e.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Gestion des extensions';
$lang['Manage_extensions_explain'] = 'Ici, vous pouvez g�rer les extensions de vos fichiers. Si vous souhaitez autoriser/interdire l\'upload d\'une extension, veuillez utiliser la gestion des groupes d\'extensions.';
$lang['Explanation'] = 'Explication';
$lang['Extension_group'] = 'Groupe d\'extensions';
$lang['Invalid_extension'] = 'Extension invalide';
$lang['Extension_exist'] = 'L\'extension %s existe d�j�'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'L\'Extension %s est interdite, vous ne pouvez pas l\'ajouter aux extensions autoris�es'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Gestion des Groupes d\'extensions';
$lang['Manage_extension_groups_explain'] = 'Ici, vous pouvez ajouter, supprimer et modifier vos groupes d\'extensions, vous pouvez d�sactiver les groupes d\'extensions, leurs assigner une cat�gorie sp�ciale, modifier le m�canisme de t�l�chargement et vous pouvez d�finir une ic�ne d\'Upload qui sera affich�e en face d\'un fichier joint appartenant � ce groupe.';
$lang['Special_category'] = 'Cat�gorie Sp�ciale';
$lang['Category_images'] = 'Images';
$lang['Category_stream_files'] = 'Fichiers Stream';
$lang['Category_swf_files'] = 'Fichiers Flash';
$lang['Allowed'] = 'Autoris�';
$lang['Allowed_forums'] = 'Forums autoris�s';
$lang['Ext_group_permissions'] = 'Permissions du groupe';
$lang['Download_mode'] = 'Mode de t�l�chargement';
$lang['Upload_icon'] = 'Ic�ne d\'Upload';
$lang['Max_groups_filesize'] = 'Taille maximale';
$lang['Extension_group_exist'] = 'Le groupe d\'extensions %s existe d�j�'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Gestion des Cat�gories Sp�ciales';
$lang['Manage_categories_explain'] = 'Ici, vous pouvez configurer les cat�gories sp�ciales. Vous pouvez organiser les param�tres sp�ciaux et les conditions pour les cat�gories sp�ciales assign�es � un groupe d\'extensions.';
$lang['Settings_cat_images'] = 'Configurations pour la cat�gorie sp�ciale: Images';
$lang['Settings_cat_streams'] = 'Configurations pour la cat�gorie sp�ciale: Fichiers Stream';
$lang['Settings_cat_flash'] = 'Configurations pour la cat�gorie sp�ciale: Fichiers Flash';
$lang['Display_inlined'] = 'Afficher les images dans le message';
$lang['Display_inlined_explain'] = 'Choisissez si les images doivent �tre affich�es directement dans le message (Oui) ou affich�es comme un lien (Non) ?';
$lang['Max_image_size'] = 'Dimensions maximales de l\'image';
$lang['Max_image_size_explain'] = 'Ici, vous pouvez d�finir la dimension maximale autoris�e pour les images jointes (largeur x Hauteur en pixels).<br />Si elle est mise sur 0x0, cette option sera d�sactiv�e. Avec certaines images, cette option ne fonctionnera pas � cause de limitations dans PHP.';
$lang['Image_link_size'] = 'Dimensions de l\'image affich�e avec un lien';
$lang['Image_link_size_explain'] = 'Si la dimension d\'une image d�finie est atteinte, l\'image sera affich�e comme un lien, plut�t que de l\'afficher dans un message,<br />si \'Afficher l\'image dans le message\' est activ� (largeur x Hauteur en pixels).<br />Si elle est mise sur 0x0, cette option sera d�sactiv�e. Avec certaines images, cette option ne fonctionnera pas � cause de limitations dans PHP.';
$lang['Assigned_group'] = 'Groupe Assign�';

$lang['Image_create_thumbnail'] = 'Cr�er une miniature';
$lang['Image_create_thumbnail_explain'] = 'Toujours cr�er une miniature. Cette option passe outre presque toutes les configurations des cat�gories sp�ciales, � l\'exception des dimensions maximales d\'une image. Avec cette option une miniature sera affich�e dans le message, l\'utiliateur pourra cliquer dessus pour ouvrir l\'image r�elle.<br />Veuillez noter que cette option requiert que ImageMagick soit install�, s\'il n\'est pas install� ou si le Safe-Mode est activ�, l\'extension GD de PHP sera utilis�e. Si le type d\'image n\'est pas support� par PHP, cette option ne sera pas utilis�e.';
$lang['Image_min_thumb_filesize'] = 'Taille minimale d\'une miniature';
$lang['Image_min_thumb_filesize_explain'] = 'Si une image est plus petite que la taille d�finie, aucune miniature ne sera cr��e, car elle sera trop petite.';
$lang['Image_imagick_path'] = 'Programme ImageMagick (chemin complet)';
$lang['Image_imagick_path_explain'] = 'Entrez le chemin vers le programme ImageMagick, normalement /usr/bin/convert (dans windows C:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Rechercher ImageMagick';

$lang['Use_gd2'] = 'Utiliser la librairie GD2';
$lang['Use_gd2_explain'] = 'PHP est autoris� � compiler les images avec les librairies GD1 ou GD2. Pour cr�er correctement des miniatures sans ImageMagick, le Mod Attachement utilise 2 m�thodes diff�rentes bas�es sur votre choix ici. Si vos miniatures ont une mauvaise qualit� ou sont d�form�es, essayez de changer cette option.';
$lang['Attachment_version'] = 'Attachment Mod Version %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Gestion des extensions interdites';
$lang['Manage_forbidden_extensions_explain'] = 'Ici, vous pouvez ajouter ou supprimer les extensions interdites. Les extensions php, php3 et php4 sont interdites par d�faut pour des raisons de s�curit�, vous ne pouvez pas les supprimer.';
$lang['Forbidden_extension_exist'] = 'L\'extension interdite %s existe d�j�'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'L\'extension %s est d�finie dans vos extensions autoris�es, veuillez la supprimer ensuite vous pourrez l\'ajouter ici.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permissions du groupe d\'extensions -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Ici, vous pouvez restreindre le groupe d\'extensions s�lectionn� � des forums de votre choix (d�fini dans la bo�te de dialogue des forums autoris�s). Par d�faut les groupes d\'extensions sont autoris�s sur tous les forums o� l\'utilisateur peut joindre des fichiers (de la m�me fa�on que le Mod Attachement a fonctionn� depuis le d�but). Ajoutez uniquement les forums o� vous souhaitez autoriser le groupe d\'extensions (les extensions comprises par ce groupe), l\'option par d�faut TOUS LES FORUMS dispara�tra lorsque vous ajouterez des forums � la liste. Vous pourrez revenir � l\'option TOUS LES FORUMS � n\'importe quel moment donn�. Si vous ajoutez un forum � votre site et que les permissions sont r�gl�es sur TOUS LES FORUMS rien ne sera chang�. Mais si vous modifiez et limitez l\'acc�s � certains forums, vous devrez revenir ici afin d\'ajouter votre nouveau forum cr��. Cela serait facile de le faire automatiquement, mais cela vous obligerait � �diter un grand nombre de fichiers, c\'est pourquoi cette m�thode a �t� choisie. Veuillez garder � l\'esprit que tous vos forums seront list�s ici.';
$lang['Note_admin_empty_group_permissions'] = 'NOTE:<br />Avec la liste des forums ci-dessous vos utilisateurs peuvent joindre normalement des fichiers, mans tant qu\'aucun groupe d\'extensions n\'est autoris� � �tre joint ici, vos utilisateurs ne pourront joindre aucun fichier. S\'ils essaient, ils auront un message d\'erreur. Peut-�tre que vous souhaitez r�gler la permission de \'Joindre des fichiers\' sur ADMIN pour ces forums.<br /><br />';
$lang['Add_forums'] = 'Ajouter les forums';
$lang['Add_selected'] = 'Ajouter la s�lection';
$lang['Perm_all_forums'] = 'TOUS LES FORUMS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'G�rer les limites de Quotas des fichiers joints';
$lang['Manage_quotas_explain'] = 'Ici, vous pouvez ajouter/supprimer/modifier les limites de Quotas. Vous pourrez assigner ces limites de quotas � des utilisateurs et des groupes par la suite. Pour assigner une limite de Quota � un utilisateur, vous devez aller dans le panneau de gestion des utilisateurs, s�lectionnez l\'utilisateur et vous verrez les options en bas de page. Pour assigner une limite de Quota � un groupe, allez dans le panneau de gestion des groupes, s�lectionnez le groupe � �diter, et vous verrez les options de configuration. Si vous souhaiter voir quels sont les utilisateurs et groupes assign�s � une limite sp�cifique de Quota, cliquez sur \'Voir\' � gauche de la description du Quota.';
$lang['Assigned_users'] = 'Utilisateurs assign�s';
$lang['Assigned_groups'] = 'Groupes assign�s';
$lang['Quota_limit_exist'] = 'La limite de Quota %s existe d�j�.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Panneau de Contr�le des fichiers joints';
$lang['Control_panel_explain'] = 'Ici, vous pouvez voir et g�rer tous les fichiers joints en fonction des utilisateurs, fichiers joints, t�l�chargements, etc...';
$lang['File_comment_cp'] = 'Commentaire';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Utilisez * comme un joker pour des recherches partielles';
$lang['Size_smaller_than'] = 'Taille du fichier joint inf�rieure � (en octets)';
$lang['Size_greater_than'] = 'Taille du fichier joint sup�rieure � (en octets)';
$lang['Count_smaller_than'] = 'Nombre de t�l�chargements inf�rieur �';
$lang['Count_greater_than'] = 'Nombre de t�l�chargements sup�rieur �';
$lang['More_days_old'] = 'Ancien de plus de (en jours)';
$lang['No_attach_search_match'] = 'Aucun fichier joint ne correspond � vos crit�res de recherche';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Nombre de fichiers joints';
$lang['Total_filesize'] = 'Taille totale des fichiers joints';
$lang['Number_posts_attach'] = 'Nombre de messages avec des fichiers joints';
$lang['Number_topics_attach'] = 'Nombre de sujets avec des fichiers joints';
$lang['Number_users_attach'] = 'Nombre d\'utilisateurs ayant joint des fichiers';
$lang['Number_pms_attach'] = 'Nombre total de fichiers joints dans les Messages Priv�s';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistiques des fichiers joints pour %s'; // replace %s with username
$lang['Size_in_kb'] = 'Taille (Ko)';
$lang['Downloads'] = 'T�l�chargements';
$lang['Post_time'] = 'Date';
$lang['Posted_in_topic'] = 'Sujet';
$lang['Submit_changes'] = 'Envoyer';

// Sort Types
$lang['Sort_Attachments'] = 'Fichiers joints';
$lang['Sort_Size'] = 'Taille';
$lang['Sort_Filename'] = 'Nom du fichier';
$lang['Sort_Comment'] = 'Commentaire';
$lang['Sort_Extension'] = 'Extension';
$lang['Sort_Downloads'] = 'T�l�chargements';
$lang['Sort_Posttime'] = 'Date';
$lang['Sort_Posts'] = 'Messages';

// View Types
$lang['View_Statistic'] = 'Statistiques';
$lang['View_Search'] = 'Rechercher';
$lang['View_Username'] = 'Nom d\'utilisateur';
$lang['View_Attachments'] = 'Fichiers joints';

// Successfully updated
$lang['Attach_config_updated'] = 'La configuration des fichiers joints a �t� mise � jour avec succ�s';
$lang['Click_return_attach_config'] = 'Cliquez %sici%s pour revenir � la configuration des fichiers joints';
$lang['Test_settings_successful'] = 'Tests des options termin�es, la configuration semble �tre correcte.';

// Some basic definitions
$lang['Attachments'] = 'Fichiers joints';
$lang['Attachment'] = 'Fichier joint';
$lang['Extensions'] = 'Extensions';
$lang['Extension'] = 'Extension';

// Auth pages
$lang['Auth_attach'] = 'Joindre';
$lang['Auth_download'] = 'T�l�charger';

?>
