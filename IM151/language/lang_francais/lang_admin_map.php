<?php
/***************************************************************************
 *
 *   MOD                  : Map MOD
 *   file                 : lang_admin_map.php (french)
 *   copyright            : (C) 2003 Michael Keppler
 *   web                  : www.bananeweizen.de
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

// panel names shown in ACP
$lang['Map'] = 'Gestion des Cartes';
$lang['map_panel_configuration'] = 'Configuration';
$lang['map_panel_locations'] = 'Gestion de ville';
$lang['map_panel_maps'] = 'Gestion des Cartes';
$lang['map_panel_wrong'] = 'liste de coordonn�es';
$lang['map_panel_search'] = 'Importer des donn�s de villes';

// panel "configuration"
$lang['map_config'] = 'Configuration de la carte';
$lang['map_config_explain'] = 'C\'est ici que vous pouvez changer la configuration de la carte utiliser.';
$lang['map_settings'] = 'Option de la carte';
$lang['map_flag_settings'] = 'Options de Localisation du drapeau ';
$lang['map_flag_explain'] = 'Nom relatif au dossier phpBB, le nom du dossier d\'image';
$lang['map_flag_self'] = 'Drapeau pour utilisateur';
$lang['map_flag_highlight'] = 'Drapeau pour utilistateur selectionner';
$lang['map_flag'] = 'Drapeau pour les autres membres';
$lang['map_offset_x'] = 'Drapeau horizontal excentr� ';
$lang['map_offset_y'] = 'Drapeau vertical excentr� ';
$lang['map_offset_explain'] = 'Augmentez l\'excentrage si votre drapeau ne se dirige pas au coin gauche inf�rieur de l\'image de drapeau.';
$lang['map_other_settings'] = 'Autres Options';
$lang['map_users_near'] = 'Nombre d\'utilisateurs dans la table de distance (avec la carte)';
$lang['map_config_updated'] = 'Configuration de carte mise � jour.';
$lang['map_image_types'] = 'EX : images/map/ <br>Formats autoris�s: JPEG, PNG.';
$lang['map_border_explain'] = 'Ins�rez les degr�s en tant que valeur de virgule flottante.<br>EX:2.48';
$lang['map_border_unit'] = 'degr�s';
$lang['map_click_return_map_config'] = 'Cliquez %sici%s pour retourner � la configuration de carte.';
$lang['map_max_width'] = 'Largeur maximum de carte ';
$lang['map_max_height'] = 'Hauteur maximum de carte';
$lang['map_max_width_explain'] = 'Le zoom sur la carte, sera montr�e pas plus grand qu\'indiqu� ici.';
$lang['map_zoom_settings'] = 'Options des Zooms et des mouvements';
$lang['map_move_percent'] = '% de la carte � mettre en scroll';
$lang['map_move_percent_explain'] = 'Avec 20% vous devez faire 5 scroll pour d�placer compl�tement la carte de gauche � droite ';
$lang['map_cluster_distance'] = 'Distance minimum entre les drapeaux (Pixel)';
$lang['map_cluster_distance_explain'] = 'Si les drapeaux de deux utilisateurs ou plus ont une distance de Pixel plus petite que cette valeur alors les deux utilisateurs auront le meme drapeaux d\'assigner.';
$lang['map_cluster_settings'] = 'Options des faisceaux';
$lang['map_users_near_more'] = 'Nombre d\'utilisateurs dans la table de distance (sans carte)';
$lang['map_auth_view_config'] = 'Qui peut regarder la carte ?';
$lang['map_flag_multiple'] = 'Drapeau pour les membres group�s';

// panel "maps"
$lang['map_map'] = 'Gestion des Cartes';
$lang['map_map_explain'] = 'C\'est ici que vous pouvez �diter les cartes disponibles.';
$lang['map_edit'] = 'Editer une carte';
$lang['map_edit_profil'] = 'Editer votre profil';
$lang['map_add_map'] = 'Ajouter une carte';
$lang['map_name'] = 'Nom de la carte';
$lang['map_name_explain'] = 'Ce nom est montr� dans la liste de choix de carte.';
$lang['map_filename'] = 'Nom de fichier';
$lang['map_default'] = 'Carte par D�faut';
$lang['map_become_default'] = 'Pays par d�faut ';
$lang['map_picture'] = 'Fichier image de carte';
$lang['map_picture_explain'] = 'Nom de l\'image relative au dossier phpBB';
$lang['map_east'] = 'Longitude orientale ';
$lang['map_west'] = 'Longitude occidentale ';
$lang['map_north'] = 'Latitude nordique ';
$lang['map_south'] = 'Latitude m�ridionale ';
$lang['map_import_map'] = 'Carte d\'importation avec les coordonn�es';

// panel "additional locations"
$lang['map_locations'] = 'Villes';
$lang['map_locations_explain'] = 'C\' est ici que vous pouvez ajouter des lieu avec les noms et les coordonn�es qui seront automatiquement montr�s sur la carte.<br />Attention : Les lieu qui seront ajout�s, ne le seront que ur une <b>simple</b > carte seulement. (mais vous pouvez les copier d\'une carte � l\'autre).';

$lang['map_location_settings'] = 'Lieu' ;
$lang['map_delete_location'] =  'Effacer ';
$lang['map_font_settings'] =  'Options de rendement ';
$lang['map_location_updated'] = 'Le lieu a �t� mis � jour avec succ�s.';
$lang['map_click_return_location'] = 'Cliquez %sici%s pour retourner � l\'administration des lieu additionnels.';
$lang['map_location_name'] = 'Nom';
$lang['map_edit_location'] = '�ditez un lieu ';
$lang['map_add_location'] = 'Ajoutez un lieu ';
$lang['map_new_location'] =  'Nouveaux lieu ';
$lang['map_location_update'] =  'Mise � jour ';
$lang['map_map_updated'] = 'La carte a �t� mise � jour avec succ�s.';
$lang['map_click_return_map'] = 'Cliquez %sici%s pour retourner aux cartes.';
$lang['map_location_link'] = 'Lien';
$lang['map_location_url'] = 'URL';
$lang['map_location_url_explain'] = 'En pla�ant une URL il sera possible de cliquer sur le lieu sur la carte.<br />Soiyez s�r d\'inclure "HTTP ://" ou d\'autre type de protocol.<br />Laissez blanc pour aucun lien hyper.';
$lang['map_location_target'] =  'Cible du lien';

$lang['map_location_target_explain'] = 'Vous pouvez indiquer le nom d\'une autre fen�tre pour que le lien s\'ouvre dans une fenetre differentes.<br />Laissez blanc pour que le lien s\'ouvre dans la m�me fen�tre.';
$lang['map_location_icon'] = 'Ic�ne';
$lang['map_location_icon_explain'] = 'Vous pouvez placer une ic�ne pour que le lieu soit montr� sur les nouveaux dossiers d\'ic�ne de map.<br />Dans images/map/icons.';
$lang['map_location_copy'] = 'Copie d\'une autre carte';
$lang['map_location_no_icon'] = 'Pas ic�ne';

// panel "wrong coordinates"
$lang['map_wrong'] = 'Erreur de coordonn�e';
$lang['map_wrong_explain'] = 'Cette liste montre les coordonn�es de toutes les personnes qui sont sur la carte par d�faut.';
$lang['Member']= 'Membre';

// panel "search places"
$lang['map_search_places'] = 'lieu � rechercher';
$lang['map_search_places_explain'] = 'Vos utilisateurs peuvent employer une recherche de lieut pour d�terminer leurs coordonn�es g�ographiques. Vous pouvez contr�ler les lieu qui peuvent �tre recherch�s.';
$lang['map_num_places'] = 'Nombre des lieu';
$lang['map_country'] =  'Pays ';
$lang['map_import'] =  'Pays d\'importation';
$lang['map_import_explain'] =  'Vous pouvez importer des donn�s de villes � partir des dossiers situ�s dans admin/map_mod/ ';
$lang['map_rename'] = 'Renommez';
?>
