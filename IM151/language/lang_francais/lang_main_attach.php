<?php
/***************************************************************************
 *                            lang_main_attach.php [French]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     Translation          : Kooky < kooky06@free.fr >
 *
 *     $Id: lang_main_attach.php,v 1.27 2003/01/16 11:11:56 acydburn Exp $^_^
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = 'Vous <b>pouvez</b> joindre des fichiers';
$lang['Rules_attach_cannot'] = 'Vous <b>ne pouvez pas</b> joindre des fichiers';
$lang['Rules_download_can'] = 'Vous <b>pouvez</b> t�l�charger des fichiers';
$lang['Rules_download_cannot'] = 'Vous <b>ne pouvez pas</b> t�l�charger des fichiers';
$lang['Sorry_auth_view_attach'] = 'D�sol�, mais vous n\'�tes pas autoris� � voir ou t�l�charger ce fichier';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Description'; // used in Administration Panel too...
$lang['Downloaded'] = 'T�l�charg�';
$lang['Download'] = 'T�l�charger'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Taille du fichier';
$lang['Viewed'] = 'Vu';
$lang['Download_number'] = '%d fois'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'L\'extension \'%s\' a �t� d�sactiv�e par le webmaster, par cons�quent ce fichier ne peut-�tre affich�.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Panneau de Contr�le des fichiers joints';
$lang['Attach_posting_cp_explain'] = 'Si vous cliquez sur <u>Joindre un fichier</u>, vous apercevrez une bo�te de dialogue pour joindre des fichiers.<br />Si vous cliquez sur <u>Fichiers envoy�s</u>, vous apercevrez une liste des fichiers d�j� joints et vous pourrez les �diter.<br />Si vous souhaitez remplacer un fichier joint (<u>Envoyer une nouvelle version</u>), vous devrez cliquer sur ces deux liens. Joignez le fichier comme vous le feriez normalement, par la suite ne cliquez surtout pas sur <u>Joindre un fichier</u>, cliquez plut�t sur <u>Envoyer une nouvelle version</u> en face du fichier que vous souhaitez mettre � jour.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Joindre un fichier';
$lang['Add_attachment_title'] = 'Joindre un fichier';
$lang['Add_attachment_explain'] = 'Si vous ne voulez pas joindre un fichier � votre message, laissez ces champs vides';
$lang['File_name'] = 'Nom du fichier';
$lang['File_comment'] = 'Commentaire';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Fichiers envoy�s';
$lang['Options'] = 'Options';
$lang['Update_comment'] = 'Mettre � jour le commentaire';
$lang['Delete_attachments'] = 'Supprimer les fichiers joints';
$lang['Delete_attachment'] = 'Supprimer le fichier joint';
$lang['Delete_thumbnail'] = 'Supprimer la miniature';
$lang['Upload_new_version'] = 'Envoyer une nouvelle version';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s est un nom de fichier non valable'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Le fichier joint est trop gros.<br />Impossible d\'obtenir la taille maximale d�finie dans PHP.<br />Le MOD Attachement ne peut pas d�terminer la taille maximale d\'Upload dans le fichier php.ini.';
$lang['Attachment_php_size_overrun'] = 'Le fichier joint est trop gros.<br />Taille maximale d\'Upload: %d Mo.<br />Veuillez noter que cette taille est d�finie dans le fichier php.ini, ce qui signifie qu\'elle est r�gl�e par PHP et que le MOD Attachement ne peut pas modifier cette valeur.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'L\'extension %s n\'est pas autoris�e'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Vous n\'�tes pas autoris� � joindre des fichiers avec l\'extension %s dans ce forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Le fichier joint est trop gros.<br />Taille maximale: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'D�sol�, mais la taille maximale de l\'ensemble des fichiers joints a �t� atteinte. Veuillez contacter le webmaster si vous avez des questions.';
$lang['Too_many_attachments'] = 'Ce fichier ne peut-�tre ajout� car le nombre maximum de %d fichiers joints dans ce message a �t� atteint'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'L\'image jointe doit-�tre inf�rieure �: %d x %d (largeur x Hauteur en pixels)';
$lang['General_upload_error'] = 'Erreur d\'Upload: impossible d\'envoyer le fichier joint vers %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Vous devez entrer les valeurs dans le champ \'Joindre un fichier\'';
$lang['Error_missing_old_entry'] = 'Impossible de mettre � jour le fichier joint, l\'ancien fichier n\'a pas �t� trouv�';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'D�sol�, mais la taille maximale pour l\'ensemble des fichiers joints dans votre Bo�te des Messages Priv�s a �t� atteinte. Veuillez supprimer quelques-uns de vos fichiers re�us ou envoy�s.';
$lang['Attach_quota_receiver_pm_reached'] = 'D�sol�, mais la taille maximale pour l\'ensemble des fichiers joints dans la Bo�te des Messages Priv�s de \'%s\' a �t� atteinte. Veuillez le-lui faire savoir, ou attendez jusqu\'� ce qu\'il/elle ait supprim� quelques-uns de ses fichiers joints.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Vous n\'avez pas s�lectionn� un fichier joint � t�l�charger ou � visualiser.';
$lang['Error_no_attachment'] = 'Le fichier joint s�lectionn� n\'existe plus';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Etes vous s�r de vouloir supprimer les fichiers s�lectionn�s ?';
$lang['Deleted_attachments'] = 'Les fichiers s�lectionn�s ont �t� supprim�s.';
$lang['Error_deleted_attachments'] = 'Impossible de supprimer les fichiers.';
$lang['Confirm_delete_pm_attachments'] = 'Etes vous s�r de vouloir supprimer tous les fichiers joints dans ce Message Priv� ?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'La fonction fichier joint est d�sactiv�e.';

$lang['Directory_does_not_exist'] = 'Le r�pertoire \'%s\' n\'existe pas ou ne peut pas �tre trouv�.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Veuillez v�rifier si \'%s\' est un r�pertoire.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Le r�pertoire \'%s\' n\'est pas inscriptible. Vous devez cr�er le chemin d\'envoi et changer ses droits d\'acc�s en �criture CHMOD 777 (ou changez les propri�t�s de votre serveur httpd sur tous) pour envoyer des fichiers.<br />Si vous avez uniquement acc�s par FTP, changez les \'attributs\' du r�pertoire en rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Impossible de se connecter au serveur FTP: \'%s\'. Veuillez v�rifier vos param�tres FTP.';
$lang['Ftp_error_login'] = 'Impossible de se connecter au serveur FTP. Le nom d\'utilisateur \'%s\' ou le mot de passe est incorrect. Veuillez v�rifier vos param�tres FTP.';
$lang['Ftp_error_path'] = 'Impossible d\'acc�der au r�pertoire du FTP: \'%s\'. Veuillez v�rifier vos param�tres FTP.';
$lang['Ftp_error_upload'] = 'Impossible d\'envoyer des fichiers vers le r�pertoire du FTP: \'%s\'. Veuillez v�rifier vos param�tres FTP.';
$lang['Ftp_error_delete'] = 'Impossible de supprimer les fichers du r�pertoire FTP: \'%s\'. Veuillez v�rifier vos param�tres FTP.<br />Une autre raison pour cette erreur pourrait-�tre la non existence du fichier joint, veuillez v�rifier d\'abord dans les fichiers joints perdus.';
$lang['Ftp_error_pasv_mode'] = 'Impossible d\'activer/d�sactiver le mode passif du FTP';

// Attach Rules Window
$lang['Rules_page'] = 'R�gles des fichiers joints';
$lang['Attach_rules_title'] = 'Groupes d\'extensions autoris�s et leur taille';
$lang['Group_rule_header'] = '%s � Taille maximale d\'un envoi: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Extensions et tailles autoris�es';
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />Normalement, vous �tes autoris� � joindre des fichiers dans ce forum, <br />mais tant qu\'aucun groupe d\'extensions n\'est autoris� � �tre joint ici, <br />vous ne pouvez joindre aucun fichier. Si vous essayez, <br />vous aurez un message d\'erreur.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Quota d\'Upload';
$lang['Pm_quota'] = 'Quota des MP';
$lang['User_upload_quota_reached'] = 'D�sol�, mais vous avez atteint votre limite maximale de quota d\'Upload de %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'PCA utilisateur';
$lang['UACP'] = 'Panneau de Contr�le des Attachements de l\'utilisateur';
$lang['User_uploaded_profile'] = 'Upload�: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% du total';

// Common Variables
$lang['Bytes'] = 'Octets';
$lang['KB'] = 'Ko';
$lang['MB'] = 'Mo';
$lang['Attach_search_query'] = 'Rechercher des fichiers joints';
$lang['Test_settings'] = 'Tester les Options';
$lang['Not_assigned'] = 'Non Assign�';
$lang['No_file_comment_available'] = 'Aucun commentaire disponible';
$lang['Attachbox_limit'] = 'Votre Bo�te d\'Attache est pleine � %d%%';
$lang['No_quota_limit'] = 'Aucune limite de quotas';
$lang['Unlimited'] = 'Illimit�';

?>