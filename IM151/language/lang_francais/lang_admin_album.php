<?php
/*************************************************************************** 
*                            lang_admin_album.php [French] 
*                              ------------------- 
*     begin                : Sunday, February 02, 2003 
*     copyright            : (C) 2003 Smartor 
*     email                : smartor_xp@hotmail.com 
* 
*     $Id: lang_admin_album.php,v 1.0.6 2003/03/05 00:21:55 ngoctu Exp $^_^ 
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

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_multiple_album.' . $phpEx);
//--- Multiple File Upload mod : end

// 
// Configuration 
// 
$lang['Album_config'] = 'Configuration de l\'Album'; 
$lang['Album_config_explain'] = 'Ici, vous pouvez changer les options principales de votre Album Photos'; 
$lang['Album_config_updated'] = 'La configuration de l\'Album a �t� mise � jour avec succ�s'; 
$lang['Click_return_album_config'] = 'Cliquez %sici%s pour revenir � la configuration de l\'Album'; 
$lang['Max_pics'] = 'Nombre maximum de photos pour chaque cat�gorie (-1 = illimit�)'; 
$lang['User_pics_limit'] = 'Nombre limite de photos par cat�gorie pour chaque utilisateur (-1 = illimit�)'; 
$lang['Moderator_pics_limit'] = 'Nombre limite de photos par cat�gorie pour chaque mod�rateur (-1 = illimit�)'; 
$lang['Pics_Approval'] = 'Approbation des photos'; 
$lang['Rows_per_page'] = 'Nombre de lignes sur la page des miniatures'; 
$lang['Cols_per_page'] = 'Nombre de colonnes sur la page des miniatures'; 
$lang['Thumbnail_quality'] = 'Qualit� des miniatures (1-100)'; 
$lang['Thumbnail_cache'] = 'Cache des miniatures'; 
$lang['Manual_thumbnail'] = 'Option manuelle des miniatures'; 
$lang['GD_version'] = 'Optimisation pour la version de la librairie GD'; 
$lang['Pic_Desc_Max_Length'] = 'Longueur maximale de la description/commentaire de la photo (en caract�res)'; 
$lang['Hotlink_prevent'] = 'Pr�vention des liens directs'; 
$lang['Hotlink_allowed'] = 'Autoriser des domaines pour les liens directs (s�parer par une virgule)'; 
$lang['Personal_gallery'] = 'Autoriser la cr�ation d\'une galerie personnelle par les utilisateurs'; 
$lang['Personal_gallery_limit'] = 'Nombre limite de photos pour chaque galerie personnelle (-1 = illimit�)'; 
$lang['Personal_gallery_view'] = 'Qui peut voir les galeries personnelles'; 
$lang['Rate_system'] = 'Autoriser le syt�me de notation'; 
$lang['Rate_Scale'] = 'Echelle de notation'; 
$lang['Comment_system'] = 'Autoriser le syst�me de commentaire'; 
$lang['Thumbnail_Settings'] = 'Options des miniatures'; 
$lang['Extra_Settings'] = 'Options sp�ciales'; 
$lang['Default_Sort_Method'] = 'M�thode de tri par d�faut'; 
$lang['Default_Sort_Order'] = 'Ordre de tri par d�faut'; 
$lang['Fullpic_Popup'] = 'Voir la photo compl�te dans une fen�tre'; 


// Personal Gallery Page 
$lang['Personal_Galleries'] = 'Galeries Personnelles'; 
$lang['Album_personal_gallery_title'] = 'Galeries Personnelles'; 
$lang['Album_personal_gallery_explain'] = 'Sur cette page, vous pouvez choisir quels groupes sont autoris�s � cr�er et voir les galeries personnelles. Ces options s\'appliquent uniquement lorsque vous r�glez "Autoriser la cr�ation d\'une galerie personnelle pour les utilisateurs" ou "Qui peut voir les galeries personnelles" sur "PRIVE" dans l\'�cran de configuration de l\'Album.'; 
$lang['Album_personal_successfully'] = 'Les options ont �t� mises � jour avec succ�s'; 
$lang['Click_return_album_personal'] = 'Cliquez %sici%s pour revenir aux options des Galeries Personnelles'; 

// 
// Categories 
// 
$lang['Album_Categories_Title'] = 'Contr�le des cat�gories de l\'Album'; 
$lang['Album_Categories_Explain'] = 'Sur cette �cran, vous pouvez g�rer vos cat�gories: cr�er, modifier, supprimer, ordonner, etc.'; 
$lang['Category_Permissions'] = 'Permissions de la cat�gorie'; 
$lang['Category_Title'] = 'Titre de la cat�gorie'; 
$lang['Category_Desc'] = 'Description de la cat�gorie'; 
$lang['View_level'] = 'Voir'; 
$lang['Upload_level'] = 'Uploader'; 
$lang['Rate_level'] = 'Noter'; 
$lang['Comment_level'] = 'Commenter'; 
$lang['Edit_level'] = 'Editer'; 
$lang['Delete_level'] = 'Supprimer'; 
$lang['New_category_created'] = 'La nouvelle cat�gorie a �t� cr��e avec succ�s'; 
$lang['Click_return_album_category'] = 'Cliquez %sici%s pour revenir � la gestion des cat�gories de l\'Album'; 
$lang['Category_updated'] = 'Cette cat�gorie a �t� mise � jour avec succ�s'; 
$lang['Delete_Category'] = 'Supprimer la cat�gorie'; 
$lang['Delete_Category_Explain'] = 'Le formulaire ci-dessous vous autorise � supprimer une cat�gorie et � d�cider o� vous souhaitez placer les photos qu\'elle contient.'; 
$lang['Delete_all_pics'] = 'Supprimer toutes les photos'; 
$lang['Category_deleted'] = 'Cette cat�gorie a �t� supprim�e avec succ�s'; 
$lang['Category_changed_order'] = 'Cette cat�gorie a chang� d\'ordre avec succ�s'; 

// 
// Permissions 
// 
$lang['Album_Auth_Title'] = 'Permissions de l\'Album'; 
$lang['Album_Auth_Explain'] = 'Ici, vous pouvez choisir quels groupes peuvent �tre mod�rateur pour chaque cat�gorie de l\'Album ou seulement en tant qu\'acc�s priv�.'; 
$lang['Select_a_Category'] = 'S�lectionner une cat�gorie'; 
$lang['Look_up_Category'] = 'Consulter la cat�gorie'; 
$lang['Album_Auth_successfully'] = 'Les permissions ont �t� mises � jour avec succ�s'; 
$lang['Click_return_album_auth'] = 'Cliquez %sici%s pour revenir aux permissions de l\'Album'; 

$lang['Upload'] = 'Uploader'; 
$lang['Rate'] = 'Noter'; 
$lang['Comment'] = 'Commentaire'; 
$lang['View'] = 'Vu';

// 
// Clear Cache 
// 
$lang['Clear_Cache'] = 'Vider le cache'; 
$lang['Album_clear_cache_confirm'] = 'Si vous utilisez l\'option du cache des miniatures, vous devez vider votre cache des miniatures apr�s avoir modifi� vos options des miniatures dans la configuration de l\'Album pour qu\'elles soient g�n�r�es � nouveau.<br /><br /> Voulez-vous le vider maintenant ?'; 
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Votre cache des miniatures a �t� vid� avec succ�s<br />&nbsp;'; 

/* BSRA Album Hierarchy Mod v1.0  START */
$lang['Parent_Category'] = 'Cat�gorie Parente (pour cette cat�gorie)';
$lang['Child_Category_Moved'] = 'La cat�gorie s�lectionn�e a des cat�gories-filles. Les cat�gories-filles ont �t� d�plac�es vers la cat�gorie <B>%s</B>.';
/* BSRA Album Hierarchy Mod v1.0 STOP  */
?>
