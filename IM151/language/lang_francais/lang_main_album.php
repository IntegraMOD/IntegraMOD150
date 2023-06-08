<?php
/*************************************************************************** 
*                          lang_main_album.php [French] 
*                              ------------------- 
*     begin                : Sunday, February 02, 2003 
*     copyright            : (C) 2003 Smartor 
*     email                : smartor_xp@hotmail.com 
* 
*     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $^_^ 
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

/*************************************************************************** 
* 
*     Translation          : Kooky < kooky06@hotmail.com > 
* 
***************************************************************************/ 
///
//--- Multiple File Upload mod : begin
//--- version : 1.0.3
include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_multiple_album.' . $phpEx);
//--- Multiple File Upload mod : end

$lang['PICVIEWPREVIOUS'] = '&laquo; Pr�c�dent';
$lang['PICVIEWALBUMNEXT'] = 'Suivant &raquo;';

// 
// Album Index 
// 
$lang['Photo_Album'] = 'Album Photos'; 
$lang['Pics'] = 'Photos'; 
$lang['Last_Pic'] = 'Derni�re photo'; 
$lang['Public_Categories'] = 'Cat�gories publiques'; 
$lang['No_Pics'] = 'Aucune Photo'; 
$lang['Users_Personal_Galleries'] = 'Galeries personnelles des utilisateurs'; 
$lang['Your_Personal_Gallery'] = 'Votre galerie personnelle'; 
$lang['Recent_Public_Pics'] = 'Photos publiques r�centes';

//$lang['Highest_Rated_Pics'] = 'Photos les mieux not�es';
//$lang['Random_Pics'] = 'Photos al�atoires';

$lang['Poster'] = 'Post� par';
$lang['Posted'] = 'Date';
$lang['View'] = 'Vu'; 
///
// 
// Category View 
// 
$lang['Category_not_exist'] = 'Cette cat�gorie n\'existe pas'; 
$lang['Upload_Pic'] = 'Uploader une photo'; 
$lang['Pic_Title'] = 'Titre'; 
// SANJI START ADD - Album Picture Id Display Add-On MOD
$lang['Pic']= 'Id'; 
// SANJI END

$lang['Album_upload_can'] = 'Vous <b>pouvez</b> uploader de nouvelles photos dans cette cat�gorie'; 
$lang['Album_upload_cannot'] = 'Vous <b>ne pouvez pas</b> uploader de nouvelles photos dans cette cat�gorie'; 
$lang['Album_rate_can'] = 'Vous <b>pouvez</b> noter les photos dans cette cat�gorie'; 
$lang['Album_rate_cannot'] = 'Vous <b>ne pouvez pas</b> noter les photos dans cette cat�gorie'; 
$lang['Album_comment_can'] = 'Vous <b>pouvez</b> poster des commentaires sur les photos dans cette cat�gorie'; 
$lang['Album_comment_cannot'] = 'Vous <b>ne pouvez pas</b> poster des commentaires sur les photos dans cette cat�gorie'; 
$lang['Album_edit_can'] = 'Vous <b>pouvez</b> �diter vos photos et commentaires dans cette cat�gorie'; 
$lang['Album_edit_cannot'] = 'Vous <b>ne pouvez pas</b> �diter vos photos et commentaires dans cette cat�gorie'; 
$lang['Album_delete_can'] = 'Vous <b>pouvez</b> supprimer vos photos et commentaires dans cette cat�gorie'; 
$lang['Album_delete_cannot'] = 'Vous <b>ne pouvez pas</b> supprimer vos photos et commentaires dans cette cat�gorie'; 
$lang['Album_moderate_can'] = 'Vous <b>pouvez</b> %smod�rer%s cette cat�gorie'; 

$lang['Edit_pic'] = 'Editer'; 
$lang['Delete_pic'] = 'Supprimer'; 
$lang['Rating'] = 'Note'; 
$lang['Comments'] = 'Commentaires'; 
$lang['New_Comment'] = 'Nouveau commentaire'; 

$lang['Not_rated'] = '<i>aucune note</i>'; 

// 
// Upload 
// 
$lang['Pic_Desc'] = 'Description'; 
$lang['Plain_text_only'] = 'Texte � caract�re simple uniquement'; 
$lang['Max_length'] = 'Longueur maximale (en caract�res)'; 
$lang['Upload_pic_from_machine'] = 'Uploader une photo � partir de votre ordinateur'; 
$lang['Upload_to_Category'] = 'Uploader vers une cat�gorie'; 
$lang['Upload_thumbnail_from_machine'] = 'Uploader cette miniature � partir de votre ordinateur (doit avoir le m�me type d\'extension que votre photo)'; 
$lang['Upload_thumbnail'] = 'Uploader une miniature'; 
$lang['Upload_thumbnail_explain'] = 'Cela doit-�tre le m�me type d\'extension que votre image'; 
$lang['Thumbnail_size'] = 'Taille de la miniature (en pixels)'; 
$lang['Filetype_and_thumbtype_do_not_match'] = 'Votre photo et votre miniature doivent avoir le m�me type d\'extension'; 

$lang['Upload_no_title'] = 'Vous devez entrer un titre pour votre photo'; 
$lang['Upload_no_file'] = 'Vous devez entrer votre chemin et votre nom de fichier'; 
$lang['Desc_too_long'] = 'Votre description est trop longue'; 

$lang['Max_file_size'] = 'Taille maximale du fichier (en octets)'; 
$lang['Max_width'] = 'Largeur maximale de l\'image (en pixels)'; 
$lang['Max_height'] = 'Hauteur maximale de l\'image (en pixels)'; 

$lang['JPG_allowed'] = 'Autoriser l\'upload de fichiers JPG'; 
$lang['PNG_allowed'] = 'Autoriser l\'upload de fichiers PNG'; 
$lang['GIF_allowed'] = 'Autoriser l\'upload de fichiers GIF'; 

$lang['Album_reached_quota'] = 'Ce syst�me a atteint le quota de photos. Maintenant vous ne pouvez plus uploader. Veuillez contacter l\'administrateur pour plus d\'informations'; 
$lang['User_reached_pics_quota'] = 'Vous avez atteint votre quota de photos. Maintenant vous ne pouvez plus uploader. Veuillez contacter l\'administrateur pour plus d\'informations'; 

$lang['Bad_upload_file_size'] = 'Votre fichier upload� est trop grand ou corrompu'; 
$lang['Not_allowed_file_type'] = 'Votre type de fichier n\'est pas autoris�'; 
$lang['Upload_image_size_too_big'] = 'La dimension de votre image est trop grande'; 
$lang['Upload_thumbnail_size_too_big'] = 'La dimension de votre miniature est trop grande'; 

$lang['Missed_pic_title'] = 'Vous devez entrer le titre de votre photo'; 

$lang['Album_upload_successful'] = 'Votre photo a �t� upload�e avec succ�s'; 
$lang['Album_upload_need_approval'] = 'Votre photo a �t� upload�e avec succ�s.<br /><br />Mais l\'option d\'Approbation des photos a �t� activ�e, ainsi votre photo doit �tre approuv�e par l\'administrateur ou un mod�rateur avant d\'�tre post�e'; 
$lang['Click_return_category'] = 'Cliquez %sici%s pour revenir � la cat�gorie'; 
$lang['Click_return_album_index'] = 'Cliquez %sici%s pour revenir � l\'index de l\'Album'; 

// View Pic 
$lang['Pic_not_exist'] = 'Cette photo n\'existe pas'; 

// Edit Pic 
$lang['Edit_Pic_Info'] = 'Editer les informations de la photo'; 
$lang['Pics_updated_successfully'] = 'Les informations de votre photo ont �t� mises � jour avec succ�s'; 

// Delete Pic 
$lang['Album_delete_confirm'] = 'Etes-vous s�r de vouloir supprimer cette photo ?'; 
$lang['Pics_deleted_successfully'] = 'Cette photo a �t� supprim�e avec succ�s'; 

// 
// ModCP 
// 
$lang['Approval'] = 'Approbation'; 
$lang['Approve'] = 'Approuver'; 
$lang['Unapprove'] = 'D�sapprouver'; 
$lang['Status'] = 'Statut'; 
$lang['Locked'] = 'Verrouiller'; 
$lang['Not_approved'] = 'D�sapprouv�'; 
$lang['Approved'] = 'Approuv�'; 
$lang['Move_to_Category'] = 'D�placer vers cette cat�gorie'; 
$lang['Pics_moved_successfully'] = 'Votre photo a �t� d�plac�e avec succ�s'; 
$lang['Pics_locked_successfully'] = 'Votre photo a �t� verrouill�e avec succ�s'; 
$lang['Pics_unlocked_successfully'] = 'Votre photo a �t� d�verrouill�e avec succ�s'; 
$lang['Pics_approved_successfully'] = 'Votre photo a �t� approuv�e avec succ�s'; 
$lang['Pics_unapproved_successfully'] = 'Votre photo a �t� d�sapprouv�e avec succ�s'; 

// 
// Rate 
// 
$lang['Current_Rating'] = 'Note actuelle'; 
$lang['Please_Rate_It'] = 'Veuillez la noter'; 
$lang['Already_rated'] = 'Vous avez d�j� not� cette photo'; 
$lang['Album_rate_successfully'] = 'La photo a �t� not�e avec succ�s'; 

// 
// Comment 
// 
//$lang['Post_your_comment'] = 'Postez votre commentaire'; 
$lang['Comment_no_text'] = 'Veuillez entrer votre commentaire'; 
$lang['Comment_too_long'] = 'Votre commentaire est trop long'; 
$lang['Comment_delete_confirm'] = 'Etes-vous s�r de vouloir supprimer ce commentaire ?'; 
$lang['Pic_Locked'] = 'D�sol�, mais cette photo a �t� verrouill�e. Par cons�quent, vous ne pouvez plus poster de commentaire pour cette photo'; 

// 
// Personal Gallery 
// 
$lang['Personal_Gallery_Explain'] = 'Vous pouvez voir les galeries personnelles des autres membres en cliquant sur le lien dans leur profil'; 
$lang['Personal_gallery_not_created'] = 'La galerie personnelle de %s est vide ou n\'a pas �t� cr��e'; 
$lang['Not_allowed_to_create_personal_gallery'] = 'D�sol�, mais l\'administrateur de ce site ne vous a pas autoris� � cr�er votre galerie personnelle'; 
$lang['Click_return_personal_gallery'] = 'Cliquez %sici%s pour revenir � la galerie personnelle'; 

//
// Search
//
$lang['Search_for'] = 'Chercher le champ';
$lang['That_contains'] = 'contenant';
$lang['Name'] = 'Nom';
$lang['Image_description'] = 'Description';
$lang['Highest_rated'] = 'Photos les mieux not�es';
$lang['Random_pic'] = 'Photos al�atoires';
$lang['Album_sub_categories'] = 'Sous-cat�gories de l\'album';
$lang['Pic_Category'] = 'Cat�gorie de la photo';
$lang['Search_found'] = 'La recherche a retourn�';
$lang['Matches'] = 'correspondance(s)';
$lang['Posted_at'] = 'Post� �';
$lang['Submitted_by'] = 'Post� par';
$lang['Submitted_on'] = 'Post� le';
$lang['Click_pic'] = 'Cliquez sur l\'image pour la voir plus grande';

$lang['Last_Comments'] = 'Dernier commentaire';
$lang['No_Comment_Info'] = "Aucun commentaire";
$lang['Mod_CP'] = 'Album - Panneau de contr�le du mod�rateur';

$lang['Post_your_comment'] = 'Poster votre commentaire';
?>
