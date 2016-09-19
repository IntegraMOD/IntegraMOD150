<?php
/***************************************************************************
 *                                 lang_kb.php
 *                            -------------------
 *   begin                : Sunday, Mar 31, 2003
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_kb.php,v 1.0.0 2003/03/31 00:06:33 psotfx Exp $
 *
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
 
$lang['KB_title'] = 'Centre de Documentations';
$lang['Article'] = 'Article';
$lang['Category'] = 'Category';
$lang['Article_description'] = 'Description';
$lang['Article_type'] = 'Type';
$lang['Article_keywords'] = 'Mots-cl�s';
$lang['Articles'] = 'Articles';
$lang['Add_article'] = 'Ajouter un article';
$lang['Click_cat_to_add'] = 'Cliquez sur une cat�gorie pour ajouter un article';
$lang['KB_Home'] = 'Centre de Documentations :: Index';
$lang['No_articles'] = 'Pas d\'article';
$lang['Article_title'] = 'Nom de l\'article';
$lang['Article_text'] = 'Texte de l\'article';
$lang['Add_article'] = 'Envoyer l\'article';
$lang['Read_article'] = 'Lire l\'article';
$lang['Article_not_exsist'] = 'L\'article n\'existe pas';
$lang['Category_not_exsist'] = 'La cat�gorie n\'existe pas';

$lang['Edit'] = 'Editer';

$lang['Article_submitted_Approve'] = 'Article envoy� avec succ�s.<br />Un Administrateur v�rifiera votre article et d�cidera s\'il le laisse ou non � la vue des utilisateurs.';
$lang['Article_submitted'] = 'Article envoy� avec succ�s.<br />Un administrateur v�rifiera votre article et d�cidera s\'il le laisse � la vue des utilisateurs ou pas.';
$lang['Click_return_kb'] = 'Cliquez %sici%s pour retourner � la ' . $lang['KB_title'];

$lang['Article_Edited_Approve'] = 'Article �dit� avec succ�s.<br />Il a encore besoin d\'�tre approuv� avant que les utilisateurs puissent le voir.';
$lang['Article_Edited'] = 'Article �dit� avec succ�s.<br />Il devra �tre de nouveau v�rifi� avant que les utilisateurs puissent le voir.';
$lang['Edit_article'] = 'Editer l\'article';

$lang['KB_title'] = 'Base de connaissances';
$lang['KB_art_description'] = 'Ici, vous pouvez approuver les articles et ainsi permettre aux utilisateurs de les voir ou les supprimer.';
$lang['Art_man'] = 'Gestion des articles';
$lang['Cat_man'] = 'Gestion des cat�gories';
$lang['KB_cat_description'] = 'Ici vous pouvez ajouter, �diter ou supprimer une cat�gorie dans le Centre de Documentations';
$lang['Art_action'] = 'Action';

//approve
$lang['Art_edit'] = 'Articles �dit�s';
$lang['Art_not_approved'] = 'D�sapprouv�';
$lang['Art_approved'] = 'Approuv�';
$lang['Approve'] = 'Approuv�';
$lang['Un_approve'] = 'Refus�';
$lang['Article_approved'] = 'L\'article est maintenant approuv�.';
$lang['Article_unapproved'] = 'L\'article est maintenant refus�.';

//delete
$lang['Delete'] = 'Supprimer';
$lang['Confirm_art_delete'] = 'Etes-vous s�r de vouloir supprimer cet article?';
$lang['Confirm_art_delete_yes'] = '%sOui, je veux supprimer cet(ces) article%s';
$lang['Confirm_art_delete_no'] = '%sNon, je ne veux supprimer cet(ces) article%s';
$lang['Article_deleted'] = 'Article supprim� avec succ�s.';

$lang['Click_return_article_manager'] = 'Cliquez %sici%s pour retourner � la ' . $lang['Art_man'];

//cat manager
$lang['Create_cat'] = 'Cr�er une nouvelle cat�gorie:';
$lang['Create'] = 'Cr�er';
$lang['Cat_settings'] = 'Configuration des cat�gories';
$lang['Create_description'] = 'Ici, vous pouvez changer le nom de la cat�gorie et ajouter une description � la nouvelle cat�gorie.';
$lang['Cat_created'] = 'Cat�gorie cr��e avec succ�s.';
$lang['Click_return_cat_manager'] = 'Cliquez %sici%s pour retourner � la ' . $lang['Cat_man'];
$lang['Edit_description'] = 'Ici vous pouvez �diter la configuration des cat�gories';
$lang['Edit_cat'] = 'Editer une cat�gorie';
$lang['Cat_edited'] = 'Cat�gorie �dit�e avec succ�s.';
$lang['Parent'] = 'Parent';

$lang['Cat_delete_title'] = 'Supprimer une cat�gorie';
$lang['Cat_delete_desc'] = 'Ici, vous pouvez supprimer une cat�gorie et d�placer tous les articles qu\'elle contenait dans une autre cat�gorie';
$lang['Cat_deleted'] = 'Cat�gorie supprim�e avec succ�s.';
$lang['Delete_all_articles'] = 'Supprimer des articles';

//configuration
$lang['KB_config'] = 'Configuration de du Centre de Documentations';
$lang['Art_types'] = 'Types d\'articles';
$lang['KB_config_title'] = 'Configuration de la base de connaissances';
$lang['KB_config_explain'] = 'Changer la configuration de votre Centre de Documentations';
$lang['New_title'] = 'Autoriser les nouveaux articles';
$lang['New_explain'] = 'Permettre aux utilisateurs de poster de nouveaux articles';
$lang['Edit_name'] = 'Autoriser l\'�dition';
$lang['Edit_explain'] = 'Permettre aux utilisateurs d\'�diter leurs articles';
$lang['Notify_name'] = 'Pr�venez-moi par';
$lang['Notify_explain'] = 'Choisissez le moyen par lequel vous voulez �tre avertis des nouveaux articles';
$lang['PM'] = 'MP';
$lang['Click_return_kb_config'] = 'Cliquez %sici%s pour retourner sur la configuration de la base de connaissances';
$lang['Admin_id_name'] = 'ID administrateur';
$lang['Admin_id_explain'] = 'C\'est l\'ID de l\'utilisateur qui sera pr�venu des nouveaux messages.';
$lang['Approve_new_name'] = 'Approuver des nouveaux articles';
$lang['Approve_new_explain'] = 'Changez si les <b />nouveaux</b /> articles doivent �tre approuv�s ou pas';
$lang['Approve_edit_name'] = 'Approuver l\'�dition d\'articles';
$lang['Approve_edit_explain'] = 'Changez si les articles <b />�dit�s</b /> doivent �tre approuv�s ou pas';
$lang['Allow_anon_name'] = 'Permettre aux invit�s des poster des articles';
$lang['Allow_anon_explain'] = 'Changez si de <b />nouveaux</b /> articles peuvent �tre envoy�s par des invit�s';
$lang['Del_topic'] = 'Supprimer un sujet';
$lang['Del_topic_explain'] = 'Quand vous supprimez un article, voulez-vous que les sujets commentaires soient supprim�s aussi?';
$lang['Allow_comments'] = 'Autoriser les commentaires';
$lang['Allow_comments_explain'] = 'Autoriser les utilisateurs � ajouter des commentaires aux articles';
$lang['Forum_id'] = 'ID du Forum';
$lang['Forum_id_explain'] = 'C\'est le forum o� les commentaires des articles seront stock�s';

$lang['Allow_rating'] = 'Autoriser les notes';
$lang['Allow_rating_explain'] = 'Autoriser les utilisateurs � donner des notes � vos articles';

$lang['Allow_anonymos_rating'] = 'Autoriser les notes aux invit�s';
$lang['Allow_anonymos_rating_explain'] = 'Si la notation est activ�e, Autoriser les invit�s � donner des notes � vos articles';

$lang['KB_config_updated'] = 'Configuration du Centre de Documentations mise � jour avec succ�s.';

$lang['New_article'] = 'Nouvel article dans votre Centre de Documentations !';
$lang['Email_body'] = 'Un article a �t� post� dans votre Centre de Documentations.<br />\n<br />\nSvp, connectez-vous, allez au panneau d\'admin ensuite dans la Gestion des articles. Lisez l\'article ensuite approuvez-le ou supprimez-le.';

//Added by Haplo
$lang['Comments_show'] = 'Afficher les commentaires de l\'article';
$lang['Comments_show_explain'] = '- affiche aussi les commentaires sur la page de l\'article';
$lang['Comments_show_title'] = 'commentaires des utilisateurs';

$lang['Mod_group'] = 'Mod�rateur du Groupe du Centre de Documentation';
$lang['Mod_group_explain'] = '- avec des permissions d\'administrateurs du Centre de Documentations !';

$lang['Bump_post'] = 'Message de remont�e d\'articles';
$lang['Bump_post_explain'] = 'Quand un article est �dit�, une r�ponse est post�e dans le sujet de l\'article avertissant d\'une mise � jour de celui-ci.';

$lang['Stats_list'] = 'Montrer les statistiques du Centre de Documentation';
$lang['Stats_list_explain'] = 'Montrer les statistiques du Centre de Documentations dans l\'en-t�te (header).';

$lang['Header_banner'] = 'Montrer le logo "Documentations"';
$lang['Header_banner_explain'] = 'Montre le logo "Documentations dans l\'en-t�te (header).';

$lang['Comment_info'] = 'Options des commentaires';
$lang['Rating_info'] = 'Options de la notation';


//types
$lang['Types_man'] = 'Gestion des types';
$lang['KB_types_description'] = 'Ici, vous pouvez ajouter, �diter ou supprimer les diff�rents types d\'articles';
$lang['Create_type'] = 'Cr�er un nouveau type d\'articles:';
$lang['Type_created'] = 'Type d\'articles cr�� avec succ�s.';
$lang['Click_return_type_manager'] = 'Cliquez %sici%s pour retourner � la gestion des types d\'articles';

$lang['Edit_type'] = 'Editer un type d\'article';
$lang['Edit_type_description'] = 'Ici, vous pouvez �diter le nom d\'un type d\'article';
$lang['Type_edited'] = 'Type d\'articles �dit� avec succ�s.';

$lang['Type_delete_title'] = 'Supprimer un type';
$lang['Type_delete_desc'] = 'Ici vous pouvez changer le type d\'article, des articles qui ont le type que vous supprimez.';
$lang['Change_type'] = 'Changer le type d\'article en';
$lang['Change_and_Delete'] = 'Changer et supprimer';
$lang['Type_deleted'] = 'Type d\'articles supprim� avec succ�s.';

$lang['Pre_text_name'] = 'R�glement pour l\'envoi d\'articles';
$lang['Pre_text_header'] = 'Titre du R�glement d\'envoi d\'articles';
$lang['Pre_text_body'] = 'Contenu du R�glement d\'envoi d\'articles';
$lang['Pre_text_explain'] = ' R�glement d\'envoi d\'articles montr� aux utilisateurs au_dessus du Panneau d\'envoi.';
$lang['Show'] = 'Montrer';
$lang['Hide'] = 'Cacher';
$lang['Empty_category'] ='Vous devez choisir une cat�gorie';
$lang['Empty_type']='Vous devez choisir un type';
$lang['Empty_article_name'] = 'Vous devez indiquer un nom d\'article';
$lang['Empty_article_desc'] = 'Vous devez indiquer une description de l\'article';

$lang['Read_full_article'] = '>>Lire l\'article en entier';
$lang['Comments'] = 'Voir les commentaires';

$lang['No_add'] = 'Vous ne pouvez pas ajouter de nouvel article';
$lang['No_edit'] = 'Vous ne pouvez pas �diter cet article!';
$lang['Post_comments'] = 'Postez votre commentaires';

$lang['Category_sub'] = 'Sous-cat�gories';
$lang['Quick_stats'] = 'Statistiques rapides';

// added

$lang['Edited_Article_info'] = 'Article mis � jour...';
$lang['No_Articles'] = 'Cette cat�gorie est vide';
$lang['Not_authorized'] = 'Vous n\'�tes pas autoris� � faire cela';
$lang['TOC'] = 'Contenus';

// Rate
$lang['Votes_label'] = 'Notation ';
$lang['Votes'] = 'Vote(s)';
$lang['Rate'] = 'Noter l\' article';
$lang['ADD_RATING'] = '[Noter l\'article]';
$lang['Rerror'] = 'D�sol�, vous avez d�j� not� cet article.';
$lang['Rateinfo'] = 'Vous �tes sur le point de noter l\'article <i>{filename}</i>.<br />SVP, choisissez une note. 1 est la plus faible, 10 la meilleure.';
$lang['Rconf'] = 'Vous avez donn� � <i>{filename}</i> une note de {rate}.<br />Cela donne au fichier une nouvelle moyenne de {newrating}/10.';
$lang['R1'] = '1';
$lang['R2'] = '2';
$lang['R3'] = '3';
$lang['R4'] = '4';
$lang['R5'] = '5';
$lang['R6'] = '6';
$lang['R7'] = '7';
$lang['R8'] = '8';
$lang['R9'] = '9';
$lang['R10'] = '10';
$lang['Click_return_rate'] = 'Cliquez %sici%s pout retourner � l\'article';

// Print version
$lang['Print_version'] = '[Version Imprimable]';

// Stats
$lang['Top_toprated'] = 'Articles les mieux not�s';
$lang['Top_most_popular'] = 'Articles les plus vus';
$lang['Top_latest'] = ' Derniers articles';

// Votes check
$lang['Votes_check_ip'] = 'Notation valid�e par l\'IP';
$lang['Votes_check_ip_explain'] = 'Un seul vote par adresse IP est autoris�.';

$lang['Votes_check_userid'] = 'Notation valide par nom d\'utilisateur';
$lang['Votes_check_userid_explain'] = 'Les utilisateurs peuvent seulement voter une fois.';

$lang['Article_pag'] = 'Pagination des articles';
$lang['Article_pag_explain'] = 'Le nombre d\'article � afficher dans la cat�gorie (stats) avant qu\'une nouvelle page soit cr��e.';
?>