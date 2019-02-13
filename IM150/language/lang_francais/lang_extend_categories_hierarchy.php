<?php
/***************************************************************************
 *						lang_extend_categories_hierarchy.php [French]
 *						------------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 10/11/2003
 *	translation Author	: Ptirhiik
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_categories_hierarchy']		= 'Hi�rarchie des cat�gories';

	$lang['Category_attachment']					= 'Rattach� �';
	$lang['Category_desc']							= 'Description';
	$lang['Category_config_error_fixed']			= 'Une erreur d\'arborescence a �t� corrig�e : v�rifiez votre hi�rarchie';
	$lang['Attach_forum_wrong']						= 'Vous ne pouvez pas attacher un forum � un autre forum';
	$lang['Attach_root_wrong']						= 'Vous ne pouvez pas attacher un forum � la racine du forum';
	$lang['Forum_name_missing']						= 'Vous devez donner un nom au forum';
	$lang['Category_name_missing']					= 'Vous devez donner un nom � la cat�gorie';
	$lang['Only_forum_for_topics']					= 'Les sujets ne peuvent se trouver que dans un forum';
	$lang['Delete_forum_with_attachment_denied']	= 'Vous ne pouvez pas supprimer un forum poss�dant des sous-niveaux';

	$lang['Category_delete']						= 'Supprimer une cat�gorie';
	$lang['Category_delete_explain']				= 'Le formulaire ci-dessous vous permet de supprimer une cat�gorie et de choisir o� vous d�sirez transf�rer son contenu.';

	// forum links type
	$lang['Forum_link_url']							= 'URL du lien';
	$lang['Forum_link_url_explain']					= 'Vous pouvez renseigner ici une URI vers un programme pr�sent dans les r�pertoires de phpBB, ou une URL compl�te.';
	$lang['Forum_link_internal']					= 'programme phpBB';
	$lang['Forum_link_internal_explain']			= 'Choisissez oui si le lien pointe vers un programme se trouvant dans les r�pertoires de phpBB';
	$lang['Forum_link_hit_count']					= 'Compter les appels';
	$lang['Forum_link_hit_count_explain']			= 'Choisissez oui si vous voulez afficher sur l\'index du forum le nombre de fois o� le lien a �t� utilis�. Si vous choisissez non, le comptage ne sera pas effectu�.';
	$lang['Forum_link_with_attachment_deny']		= 'Vous ne pouvez pas affecter un lien � un forum si celui-ci a des sous-niveaux';
	$lang['Forum_link_with_topics_deny']			= 'Vous ne pouvez pas affecter un lien � un forum si celui-ci a des sujets';
	$lang['Forum_attached_to_link_denied']			= 'Vous ne pouvez pas attacher de forums ou des cat�gories � un forum affect� � un lien';

	$lang['Manage_extend']							= 'Gestion +';
	$lang['No_subforums']							= 'Pas de sous-forum';
	$lang['Forum_type']								= 'Choisissez le type de forum d�sir�';
	$lang['Presets']								= 'Presets';
	$lang['Refresh']								= 'R�-afficher';
	$lang['Position_after']							= 'Positionner ce forum apr�s';
	$lang['Link_missing']							= 'Le lien est manquant';
	$lang['Category_with_topics_deny']				= 'Des sujets sont toujours pr�sents dans ce forum. Vous ne pouvez pas le tranformer en cat�gorie.';
	$lang['Recursive_attachment']					= 'Vous ne pouvez pas rattacher un forum � l\'un de ses sous-niveaux (attachement r�cursif).';
	$lang['Forum_with_attachment_denied']			= 'Vous ne pouvez pas transformer une cat�gorie servant de rattachement � des forums.';
	$lang['icon']									= 'Ic�ne';
	$lang['icon_explain']							= 'Cette �cone sera affich�e sur l\'index devant le nom du forum. Vous pouvez utiliser ici une URL ou une URI directe, ou encore une cl� du tableau $images[] (se r�ferrer � <i>votre_template</i>/<i>votre_template</i>.cfg).';

}

$lang['Category_locked'] 			= 'Cette cat�gorie est verrouill�, vous ne pouvez pas poster, ni r�pondre, ni �diter les sujets.';
$lang['Forum_link']					= 'Redirection';
$lang['Forum_link_visited']			= 'Ce lien a �t� visit� %d fois';
$lang['Redirect']					= 'Redirection';
$lang['Redirect_to']				= 'Si votre navigateur n\'accepte pas les redirections par meta tag, cliquez %s<b>ici</b>%s pour �tre redirig�';

$lang['Hierarchy_setting']			= 'Param�trage de la hi�rarchie';
$lang['Use_sub_forum']				= 'Niveau de compression de l\'index';
$lang['Index_packing_explain']		= 'Choisissez le niveau de compression d�sir� pour l\'index : Aucun=tous les niveaux sont affich�s, Moyen=un sous-niveau est affich�, Complet=seul le niveau courant est affich�';
$lang['Medium']						= 'Moyen';
$lang['Full']						= 'Complet';
$lang['Split_categories']			= 'S�parer les cat�gories sur l\'index';
$lang['Use_last_topic_title']		= 'Afficher le titre du sujet du dernier message d\'un forum sur l\'index';
$lang['Last_topic_title_length']	= 'Longueur du titre du sujet affich�';
$lang['Sub_level_links']			= 'Lien vers les niveaux inf�rieurs';
$lang['Sub_level_links_explain']	= 'Ajoute un lien vers les forums ou cat�gories du niveau inf�rieur � la description du forum ou de la cat�gorie sur l\'index';
$lang['With_pics']					= 'Avec une image';
$lang['Display_viewonline']			= 'Afficher les statistiques du forum';
$lang['Never']						= 'Jamais';
$lang['Root_index_only']			= 'Uniquement sur l\'index racine';
$lang['Always']						= 'Toujours';
$lang['Subforums']					= 'Sous-forums';

//-- mod : today at/yesterday at for cat/hie -------------------------------------------------------
//-- add
$lang['Today_at'] = '<b>Aujourd\'hui</b> � %s'; // %s is the time
$lang['Future'] = '[ <b>Futur</b> ]<br /> %s'; // %s is the time 
$lang['Yesterday_at'] = '<b>Hier</b> � %s'; // %s is the time
//-- end mod : today at/yesterday at for ptirhiik mods ---------------------------------------------

?>