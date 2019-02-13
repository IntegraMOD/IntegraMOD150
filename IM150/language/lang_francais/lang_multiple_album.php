<?php
/***************************************************************************
 *                          lang_multiple_album.php [English]
 *                          ------------------------------------------------
 *     begin                : Wednesday, July 28, 2004
 *     copyright            : (C) 2004 IdleVoid
 *     email                : idlevoid@slater.dk
 *
 *     version              : 1.0.3 28/07/2004
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

//--- Admin configuration
//--- version : 1.0.0
$lang['Max_Files_To_Upload'] = 'Nombre maximum de fichiers qu\'un utilisateur peut envoyer en m�me temps';
//--- version : 1.0.3
$lang['Album_upload_settings'] = 'Options d\'upload de l\'Album';
$lang['Max_pregenerated_fields'] = 'Nombre maximum de champs � pr�g�n�rer';
$lang['Dynamic_field_generation'] = 'Activer l\'ajout dynamique de champs d\'upload';
$lang['Pre_generate_fields'] = 'Pr�g�n�rer les champs d\'upload';
$lang['Propercase_pic_title'] = 'Titre de photo respectant la casse. En g�n�ral <i>\'Voici un Titre de Photo\'</i><br>Le configurer sur \'NON\' l\'affichera comme ceci <i>\'Voici un titre de Photo\'</i>';


//--- Upload page
//--- version : 1.0.1
$lang['Add_File'] = 'Entr�e fichier suppl�mentaire';
//--- version : 1.0.2
//--- NOTE : keep the <br> part of the messages PLEASE !
$lang['File_thumbnail_count_mismatch'] = 'Le nombre de photos upload�es et de miniatures ne correspond pas';
$lang['No_thumbnail_for_picture_found'] = 'Il n\'y a aucune miniature trouv�e pour la photo upload�e (nomm�e : %s)';
$lang['No_picture_for_thumbnail_found'] = 'Il n\'y a aucune photo trouv�e pour la miniature upload�e (nomm�e : %s)';
$lang['Unknown_file_and_thumbnail_error_mismatch'] = 'Une erreur inconnue est survenue lors de l\'upload de la photo et de la miniature<br>Photo nomm�e : %s et miniature nomm�e : %s<br>';
$lang['Picture_exceeded_maximum_size_INI'] = 'La photo nomm�e \'%s\' est trop grande. La photo ne sera pas upload�e.<br>';
$lang['Thumbnail_exceeded_maximum_size_INI'] = 'La miniature nomm�e \'%s\' est trop grande. La photo et la miniature ne seront pas upload�es.<br>'; ;
$lang['Execution_time_exceeded_skipping'] = 'La dur�e maximale pour l\'ex�cution du script a �t� d�pass�e. Les fichiers suivant n\'ont pas �t� upload�s :<br>';
$lang['Skipping_uploaded_picture_file'] = '%s<br/>';
$lang['Skipping_uploaded_picture_and_thumbnail_file'] = '%s (miniature: %s)<br/>';
$lang['Album_upload_not_successful'] = 'Aucune de vos photos n\'a pu �tre upload�e<br/><br/>';
$lang['Album_upload_partially_successful'] = 'Seule une partie de vos photos a pu �tre upload�e<br/><br/>';
$lang['No_pictures_selected_for_upload'] = 'Aucune photo s�lectionn�e pour l\'upload ou erreur inconnue';

$lang['Bad_upload_file_size'] = 'Votre fichier upload� (%s) est trop lourd ou corrompu';

$lang['Album_upload_successful'] = 'Votre/vos photo(s) ont �t� upload�s avec succ�s !';
$lang['Album_upload_need_approval'] = 'Votre/vos photo(s) ont �t� upload�s avec succ�s !<br /><br />Mais l\'option d\'Approbation des photos a �t� activ�e, aussi elle(s) doi(ven)t �tre approuv�e(s) par un administrateur ou un mod�rateur avant d\'�tre affich�e(s)';

//--------------------
?>