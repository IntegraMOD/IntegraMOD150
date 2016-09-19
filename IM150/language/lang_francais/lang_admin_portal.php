<?php
/***************************************************************************
 *                       lang_admin_portal.php [English]
 *                            -------------------
 *   begin                : Saturday, July 10, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website              : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *
 *   note: removing the original copyright is illegal even you have modified
 *         the code.  Just append yours if you have modified it.
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// IM Portal http://www.integramod.com
//
$lang['BP_Title'] = 'Balise de positionnement des blocs';
$lang['BP_Explain'] = 'Sur cette page, vous pouvez ajouter, �diter et effacer le positionnement des blocs utilis�s sur le portail. Les positionnements par d�faut sont \'en-t�te\', \'pied de page\', \'droite\' et \'centre\'. Ces positionnements correspondent � la disposition utilis�e pour une page par d�faut du portail. Seules des positionnements existants par page de portail doivent �tre ajout�s ici. Les cl�s de positionnement qui n\'existent pas dans une disposition par d�faut n\'appara�tront pas sur le portail. Chaque balise de positionnement et de caract�re doit �tre unique pour chaque page du portail.';
$lang['BP_Position'] = 'Position du caract�re';
$lang['BP_Key'] = 'Cl� de balise de positionnement';
$lang['BP_Layout'] = 'Page du portail';
$lang['BP_Add_Position'] = 'Ajouter un nouveau positionnement';
$lang['No_bp_selected'] = 'Aucun positionnement s�lectionn� pour l\'�dition';
$lang['BP_Edit_Position'] = 'Editer le positionnement du bloc';
$lang['Must_enter_bp'] = 'Vous devez choisir une cl� de balise de positionnement, une position de caract�re et une page de portail !';
$lang['BP_updated'] = 'Positionnement du bloc mis � jour';
$lang['BP_added'] = 'Positionnement du bloc ajout�';
$lang['Click_return_bpadmin'] = 'Cliquez %sici%s pour retourner � l\'administration des positionnement des blocs';
$lang['BP_removed'] = 'Positionnement du bloc retir�';
$lang['Portal_wide'] = 'Portail �tendu';

$lang['No_layout_selected'] = 'Aucune page du portail s�lectionn�e pour l\'�dition';
$lang['Layout_Title'] = 'Page du portail';
$lang['Layout_Explain'] = 'Sur cette page, vous pouvez ajouter, �diter et effacer la disposition des informations pour vos pages du portail. Diff�rentes pages du portail peuvent utiliser la m�me disposition. Le fichier de template s�lectionn� doit se trouver dans le r�pertoire de votre template. Vous n\'�tes pas autoris� � supprimer la page par d�faut du portail (page d\'accueil). Supprimer une page du portail supprime aussi les positionnements de blocs correspondants et tous les blocs qui y sont rattach�s.';
$lang['Layout_Name'] = 'Nom';
$lang['Layout_Template'] = 'Fichier de template';
$lang['Layout_Edit'] = 'Editer la page du portail';
$lang['Layout_Page'] = 'ID de la page';
$lang['Layout_View'] = 'Vue par';
$lang['Layout_Forum_wide'] = 'Blocs �tendus ?';
$lang['Must_enter_layout'] = 'Vous devez entrer un nom et un fichier de template';
$lang['Layout_updated'] = 'Page du portail mise � jour';
$lang['Click_return_layoutadmin'] = 'Cliquez %sici%s pour retourner � l\'administration des pages du portail';
$lang['Layout_added'] = 'Page du portail ajout�e';
$lang['Layout_removed'] = 'Page du portail retir�e';
$lang['Layout_Add'] = 'Ajouter une page de portail';
$lang['Layout_BP_added'] = 'Fichier de configuration de disposition disponible : Balises de positionnement de bloc automatiquement ajout�';
$lang['Layout_default'] = 'Disposition par d�faut';
$lang['Layout_make_default'] = 'En faire la disposition par d�faut';

$lang['Blocks_Title'] = 'Administration des blocs';
$lang['Blocks_Explain'] = 'Sur cette page, vous pouvez ajouter, �diter, effacer et d�placer les blocs pour chaque page de portail disponible. Un fichier template de bloc doit obligatoirement exister pour chaque bloc ajout�. Quand un fichier de bloc est sp�cifi�, l\'affichage rempli n\'est pas pris en compte par le moteur du portail.';
$lang['Choose_Layout'] = 'Choisir une page de portail';
$lang['B_Title'] = 'Titre du bloc';
$lang['B_Position'] = 'Position du bloc';
$lang['B_Active'] = 'Actif ?';
$lang['B_Display'] = 'Affichage';
$lang['B_HTML'] = 'HTML';
$lang['B_BBCode'] = 'BBCode';
$lang['B_Type'] = 'Type';
$lang['B_Border'] = 'Montrer les bordures';
$lang['B_Titlebar'] = 'Montrer la barre de titre';
$lang['B_Background'] = 'Montrer la couleur de fond';
$lang['B_Local'] = 'Localiser la barre de titre';
$lang['B_Cache'] = 'Mettre en cache ?';
$lang['B_Cachetime'] = 'Dur�e du cache';
$lang['B_Groups'] = 'Groupes d\'utilisateurs';
$lang['B_All'] = 'Tous';
$lang['B_Guests'] = 'Seulement les invit�s';
$lang['B_Reg'] = 'Membres';
$lang['B_Mod'] = 'Mod�rateurs';
$lang['B_Admin'] = 'Administrateurs';
$lang['B_None'] = 'Aucun';
$lang['B_Layout'] = 'Page du portail';
$lang['B_Page'] = 'ID de la page';
$lang['B_Add'] = 'Ajouter des blocs';
$lang['Yes'] = 'Oui';
$lang['No'] = 'Non';
$lang['B_Text'] = 'Texte';
$lang['B_File'] = 'Fichier du bloc';
$lang['B_Move_Up'] = 'Remonter';
$lang['B_Move_Down'] = 'Descendre';
$lang['B_View'] = 'Vue par';
$lang['No_blocks_selected'] = 'Aucun bloc s�lectionn�';
$lang['B_Content'] = 'Contenu';
$lang['B_Blockfile'] = 'Fichier du bloc';
$lang['Block_Edit'] = 'Edition du bloc';
$lang['Block_updated'] = 'Bloc mis � jour';
$lang['Must_enter_block'] = 'Vous devez entrer un titre de bloc';
$lang['Block_added'] = 'Bloc ajout�';
$lang['Click_return_blocksadmin'] = 'Cliquez %sici%s pour retourner � l\'administration des blocs';
$lang['Block_removed'] = 'Bloc retir�';
$lang['B_BV_added'] = 'Fichier de configuration de bloc disponible. Variables du bloc automatiquement ajout�es.';

$lang['BV_Title'] = 'Variables des blocs';
$lang['BV_Explain'] = 'Sur cette page, vous pouvez ajouter, �diter, effacer des variables de configuration utilis�s par les blocs dans le portail. Ces variables peuvent �tre configur�es par la page de Configuration du portail, ce qui vous permettra de personnaliser votre portail.';
$lang['BV_Label'] = 'Label';
$lang['BV_Sub_Label'] = 'Infos';
$lang['BV_Name'] = 'Nom de configuration';
$lang['BV_Options'] = 'Options';
$lang['BV_Values'] = 'Valeur';
$lang['BV_Type'] = 'Type de contr�le';
$lang['BV_Block'] = 'Bloc';
$lang['BV_Add_Variable'] = 'Ajouter une variable de bloc';
$lang['No_bv_selected'] = 'Aucune variable de bloc s�lectionn�e';
$lang['BV_Edit_Variable'] = 'Editer la variable de bloc';
$lang['Must_enter_bv'] = 'Vous devez entrer un label et un champ de configuration';
$lang['BV_updated'] = 'Variable de bloc mise � jour';
$lang['BV_added'] = 'Variable de bloc ajout�e';
$lang['Click_return_bvadmin'] = 'Cliquez %sici%s pour retourner � l\'administration des variables des blocs';
$lang['Config_Name_Explain'] = 'Il ne doit pas y avoir d\'espace';
$lang['Field_Options_Explain'] = 'Obligation de listes � menus d�roulants et<br />boutons radios (s�parez par des virgules).';
$lang['Field_Values_Explain'] = 'Obligation de listes � menus d�roulants et<br />boutons radios (s�parez par des virgules).';
$lang['BV_removed'] = 'Variable de bloc retir�e';

$lang['Config_updated'] = 'Configuration du portail mise � jour';
$lang['Click_return_config'] = 'Cliquez %sici%s pour retourner � l\'administration du portail';
$lang['Portal_Config'] = 'Configuration de l\'IM Portal';
$lang['Portal_Explain'] = 'De cette page, vous pouvez d�finir toutes les configurations n�cessaires pour votre portail. Les variables de blocs affich�s sur cette page peuvent �tre cr��s/mises � jour dans la page de configuration des variables de blocs';
$lang['Portal_General_Config'] = 'Configuration g�n�rale';
$lang['Default_Portal'] = 'Portail par d�faut';
$lang['Default_Portal_Explain'] = 'Page d\'accueil (Portail principal)';
$lang['Cache_Enabled'] = 'Activer le syst�me de cache';
$lang['Cache_Enabled_Explain'] = 'Pour un chargement plus rapide des informations sur le portail';
$lang['Portal_Header'] = 'Activer l\'en-t�te sur toute la largeur du portail';
$lang['Portal_Header_Explain'] = 'Toujours montrer le panneau de gauche';
$lang['Portal_Tail'] = 'Activer le pied de page sur toute la largeur du portail';
$lang['Portal_Tail_Explain'] = 'Toujours montrer le panneau de droite';
$lang['Confirm_delete_item'] = 'Etes-vous s�r de vouloir effacer ce bloc';
$lang['Cache_cleared'] = 'Fichiers du cache effac�s';

$lang['bbcode_b_help'] = 'Texte gras: [b]texte[/b] (alt+b)';
$lang['bbcode_i_help'] = 'Texte italique: [i]texte[/i] (alt+i)';
$lang['bbcode_u_help'] = 'Texte soulign�: [u]texte[/u] (alt+u)';
$lang['bbcode_q_help'] = 'Citation: [quote]texte cit�[/quote] (alt+q)';
$lang['bbcode_c_help'] = 'Afficher du code: [code]code[/code] (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]texte[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Liste ordonn�e: [list=]texte[/list] (alt+o)';
$lang['bbcode_p_help'] = 'Ins�rer une image: [img]http://image_url/[/img] (alt+p)';
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