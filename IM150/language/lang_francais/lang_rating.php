<?php 
/*************************************************************************** 
*                              lang_rating.php v1.1.0 
*                            ------------------- 
*   begin                : Friday, Jan 17, 2003 
*   copyright            : (C) 2002 Web Centre Ltd 
*   email                : phpbb@mywebcommunities.com 
* 
***************************************************************************/ 

$lang['Rating_page_title'] = 'Noter un message'; 
$lang['Die_rate_private'] = 'Vous ne pouvez pas noter des messages dans les forums priv�s'; 
$lang['Die_login_to_rate'] = 'Ce message est dans un forum restreint aux utilisateurs enregistr�s. Vous devez �tre connect�s pour acc�der aux notes.'; 
$lang['Die_rate_only_first'] = 'Vous ne pouvez noter que le premier message de chaque sujet'; 
$lang['User_suspended'] = 'Les notations pour cet utilisateur ont �t� suspendues par l\'administrateur'; 
$lang['Cannot_rate_own'] = 'Vous ne pouvez pas noter vos propres messages'; 
$lang['Not_yet_rated'] = 'Ce message n\'a pas encore �t� not�'; 
$lang['Rating_anon_user'] = 'Utilisateur enregistr�'; 
$lang['Must_be_logged_to_rate'] = 'Vous devez �tre connect� pour noter ce message'; 
$lang['Days_registered_before_rating'] = 'Vous devez �tre enregistr� depuis %s avant de pouvoir noter les messages'; 
$lang['Posts_before_rating'] = 'Vous devez avoir post� %s avant de pouvoir noter d\'autres messages'; 
$lang['User_rating_limit'] = 'Vous avez d�j� not� %s de cet utilisateur dans les derni�res 24 heures, ce qui est la limite impos�e par l\'administrateur'; 
$lang['Daily_rating_limit'] = 'Vous avez d�j� not� %s dans les derni�res 24 heures, ce qui est la limite impos�e par l\'administrateur'; 
$lang['Already_rated'] = 'Vous avez d�j� not� ce message'; 
$lang['No_rating_permission_post'] = 'Vous n\'avez pas la permission de noter ce message'; 
$lang['No_rating_permission'] = 'Vous n\'avez pas la permission de noter les messages'; 
$lang['Your_rating'] = 'Votre note pour ce message'; 
$lang['Rating_visible'] = 'Votre note sera visible par les autres utilisateurs'; 
$lang['Rating_visible_forced']  = 'NOTE: les notation anonymes ne sont plus autoris�es. Si vous cliquez sur le bouton, toutes vos notations seront visibles par les autres utilisateurs'; 
$lang['Rate_anonymously'] = 'Noter anonymement (s\'applique � toutes vos notations)'; 
$lang['Return_to_post'] = 'Retourner au message'; 
$lang['Close_window'] = 'Fermer cette fen�tre'; 
$lang['Poster_rank'] = 'Rang de l\'auteur'; 
$lang['Topic_rank'] = 'Rang du sujet'; 
$lang['Post_rank'] = 'Rang du message'; 
$lang['Rated_by'] = 'Not� par'; 
$lang['Rated_on'] = 'le'; 
$lang['No_rating'] = 'Pas de note'; 
$lang['Unrated'] = 'Pas not�'; 
$lang['No_rank'] = 'Pas de rang'; 
$lang['Rating_sample_post'] = 'Message exemple'; 
$lang['Topic_starter'] = 'Sujet de d�part'; 
$lang['Rating_deactivated'] = 'D�sol�, le syst�me de notation est actuellement d�sactiv�'; 
$lang['No_ratings'] = 'Pas de note'; 
$lang['Total_points'] = 'Nombre total de points'; 
$lang['Average_points'] = 'Moyenne'; 
$lang['Rate_it'] = 'Noter'; 
$lang['Rating_config_gen'] = 'Configuration g�n�rale'; 
$lang['Rating_overview_text'] = '<b>Aper�u</b>: Les utilisateur peuvent noter chaque message individuellement, en s�lectionnant parmi un intervalle d\'options, chacune �tant associ�e � une valeur en points. Le classement g�n�ral de chaque message est calcul� en totalisant (ou en faisant la moyenne de) toutes les notes individuelles pour ce message, et en donnant un rang depuis la "table des totaux". Les classements g�n�raux des sujets et des utilisateurs sont �galement calcul�s de la m�me mani�re (toutes les notes des messages dans un sujet particulier / par un utilisateur particulier).'; 
$lang['Rating_settings_title'] = 'Param�tres g�n�raux pour votre syst�me de notation'; 
$lang['Rating_settings_text'] = '<b>Noter le premier sujet seulement</b>: Autorise seulement le premier message de chaque sujet � �tre not�<br /> 
<b>Nbre mini messaget</b>: Nombre minimum de messages post�s avant de pouvoir noter<br /> 
<b>Delai mini d\'enregistrement</b>: Nombre de jours qui doivent s\'�tre �coul�s apr�s l\'enregistrement avant de pouvoir noter<br /> 
<b>M�thode de pond�ration</b>: Si cette option est activ�e, un utilisateur ne peut s�lectionner parmi les notes que celles dont son propre compte �gale ou d�passe la valeur pr�sente dans la colonne "D�clenchement de la pond�ration" (voir table ci-dessous)<br /> 
<b>Notes quotidiennes maxi</b>: Limite le nombre de notes qu\'un utilisateur peut donner par p�riode de 24 heures<br /> 
<b>Notes quotidiennes maxi par utilisateur</b>: Limite le nombre de notes qu\'un utilisateur peut donner aux message d\'un m�me utilisateur par p�riode de 24 heures<br /> 
<b>Autorise � cacher le nom</b>: Autorise un utilisateur � appara�tre comme "Anonyme" dans la liste des personnes ayant not� un message<br /> 
<b>M�thode globale de notation</b>: Sp�cifie si la note totale est bas�e sur la somme ou la moyenne de toutes les notes individuelles'; 
$lang['Rating_options'] = 'Options de notation'; 
$lang['Points'] = 'Points'; 

$lang['Rating_label'] = 'Description'; 
$lang['Weighting_threshold'] = 'D�clenchement de la pond�ration'; 
$lang['Rating_who'] = 'Qui'; 
$lang['Rating_used'] = 'Utilis�e'; 
$lang['Rating_delete'] = 'Supprime'; 
$lang['Rating_update'] = 'Met � jour'; 
$lang['Rating_update_config'] = 'Met � jour la configuration'; 
$lang['Rating_add'] = 'Ajoute'; 
$lang['Rating_option_title'] = 'D�termine l\'intervalle de note qu\'un utilisateur peut donner � un message'; 
$lang['Rating_option_text'] = '<b>Points</b>: Utilis�s pour calculer la note totale pour les messages, sujets et utilisateurs<br /> 
<b>Pond�ration</b>: Voir "M�thode de pond�ration" dans la configuration g�n�rale<br /> 
<b>Qui</b>: Utilis� pour limiter les options en fonction du statut de l\'utilisateur<br /> 
<b>Utilis�e</b>: Nombre de fois qu\'une option a �t� utilis�e � aujourd\'hui<br />'; 
$lang['Rating_ranks'] = 'Affichage des rangs des messages et sujets'; 
$lang['User_ranks_title'] = 'Affichage des rangs des utilisateurs'; 
$lang['Board_rank'] = 'Rang forum'; 
$lang['Rating_applies_to'] = 'S\'applique �'; 
$lang['Rating_sum'] = 'Somme de d�clenchement'; 
$lang['Rating_average'] = 'Moyenne'; 
$lang['Rating_max'] = 'Maximum'; 
$lang['Rating_icon'] = 'Ic�ne'; 
$lang['Rating_rank_title'] = 'Calcul et pr�sentation des rangs g�n�raux'; 
$lang['Rating_rank_text'] = '<b>Moyenne</b>: La moyenne de toutes les notes individuelles est calcul�e et le rang dont la moyenne est <b>la plus proche</b> est s�lectionn�<br /> 
<b>Somme de d�clenchement</b>: Toutes les notes individuelles sont ajout�es et parmi les rangs dont le total <b>�gale ou d�passe</b> la valeur dans la colonne "Somme de d�clenchement", le rang avec la somme la plus �lev�e est s�lectionn�'; 
$lang['Rating_admin_page_title'] = 'Configuration du syst�me de notation'; 
$lang['Must_be_an_integer'] = 'doit �tre un entier'; 
$lang['Invalid_point_value'] = 'Les valeurs de points doivent �tre un entier entre -127 et 128'; 
$lang['Invalid_threshold_value'] = 'La valeur de d�clenchement doit �tre un entier entre 0 et 30000'; 
$lang['Invalid_average_threshold'] = 'La moyenne doit �tre un entier entre -127 et 128'; 
$lang['Invalid_sum_threshold'] = 'La somme de d�clenchement doit �tre un entier entre -2000000000 et 2000000000'; 
$lang['Weighting_method_posts'] = 'Nombre de messages'; 
$lang['Rating_user_type_all'] = 'Tous les utilisateurs'; 
$lang['Rating_user_type_mods'] = 'Tous les mod�rateurs'; 
$lang['Rating_user_type_forum'] = 'Mod�rateurs du forum'; 
$lang['Rating_user_type_admin'] = 'Administrateur uniquement'; 
$lang['Rating_remove_confirm'] = 'Les notes existantes vont �tre supprim�es. Etes-vous s�r de vouloir supprimer cette option ?'; 
$lang['Rating_recalc_confirm'] = 'Les notes existantes vont �tre recalcul�es. Etes-vous s�r de vouloir supprimer ce rang ?'; 
$lang['Rating_admin_errors'] = 'Il y a eu des probl�mes avec les informations que vous avez soumises. Lisez le message ci-dessous, faites les corrections n�cessaires et envoyez � nouveau les informations:'; 
$lang['As_rated_by'] = 'not� par'; 
$lang['As_rated_by_you'] = 'not� par vous'; 
$lang['Ratings_posts_by'] = 'messages par'; 
$lang['Ratings_posts_by_you'] = 'vos messages'; 
$lang['Recalc_text'] = 'Certaines actions peuvent n�cessiter un recalcul manuel des notes, comme par exemple la suppression de messages d�j� not�s. Pour lancer ce recalcul, cliquez sur le bouton ci-dessous'; 
$lang['Recalc_button'] = 'Recalculer toutes les notes'; 
$lang['Recalc_confirm'] = 'Etes-vous certain? Cela peut prendre beaucoup de temps sur des gros forums.'; 
$lang['Ratedby_hidden'] = 'L\'administrateur a choisi de cacher les noms de ceux qui notent les messages'; 
$lang['Rating_screen_type'] = 'Type d\'�cran'; 
$lang['Rating_in'] = 'dans'; // As in "posts IN this forum" 
$lang['Rating_all_forums'] = 'Tous les forums'; 
$lang['Rating_make_neutral'] = 'Etre neutre envers les notes donn�es par %s'; 
$lang['Rating_is_neutral'] = 'Vous �tes actuellement neutre envers les notes donn�es par %s'; 
$lang['Rating_make_buddy'] = 'Favorise les notes donn�es par %s'; 
$lang['Rating_is_buddy'] = 'Vous favorisez actuellement les notes donn�es par %s'; 
$lang['Rating_buddy'] = 'Vos notes sont actuellement favoris�es par %s'; 
$lang['Rating_ignored'] = 'Vos notes sont actuellement ignor�es par %s'; 
$lang['Rating_make_ignored'] = 'Ignorer les notes donn�es par %s' ; 
$lang['Rating_is_ignored'] = 'Vous ignorez actuellement les notes donn�es par %s'; 
$lang['Rating_bias'] = 'Orientation'; 
$lang['Rating_bias_off'] = 'Les options d\'orientation ne sont pas disponibles actuellement'; 
$lang['Rating_bias_loggedoff'] = 'Vous devez �tre connect� pour utiliser le syst�me d\'orientation des notes'; 
$lang['Rating_all_but_ignore'] = 'Toutes sauf celles que j\'ignore'; 
$lang['Rating_everyone'] = 'Tout le monde'; 
$lang['Rating_buddies_only'] = 'Mes amis seulement'; 
$lang['Rating_include_by'] = 'Inclus les notes donn�es par'; 
$lang['Rating_yourself'] = 'vous-m�me'; 
$lang['Rating_bias_prompt'] = 'Orientation demand�e par'; 
$lang['Rating_bias_when'] = 'Quand'; 
$lang['Rating_current'] = 'Note actuelle'; 
$lang['Rating_buddies_only'] = 'Amis seulement'; 
$lang['Rating_ignores_only'] = 'Ignor�s seulement'; 
$lang['Rating_post_removed'] = 'un message qui n\'existe plus'; 
$lang['Rating_this_post'] = 'ce message'; 
$lang['Rating_this_user'] = 'cet utilisateur'; 
$lang['Rating_of'] = 'note de'; 
$lang['Rating_awarded_to'] = 'donn�e �'; 
$lang['Rating_my_bias_title'] = 'Mon orientation par rapport aux notes donn�es par les autres utilisateurs'; 
$lang['Rating_their_bias_title'] = 'L\�orientation des autres utilisateurs par rapport � mes notes'; 
$lang['Rating_no_bias'] = 'Pas d\�orientation pour le moment'; 


$lang['Rating system active']							= 'Syst�me de note actif...';  
$lang['Weighting method'] 								= 'M�thode de pond�ration...';
$lang['Users can change ratings'] 				= 'Les utilisateurs peuvent changer leurs notes';
$lang['Max daily ratings (0=unlimited)'] 	= 'Nombre de notations quotidiennes maximum (0=illimit�)';
$lang['Show who rated'] 									= 'Indiquer qui a not�';
$lang['Allow users to hide name'] 				= 'Permettre aux utilisateurs de cacher leur nom';
$lang['Rate first post only'] 						= 'Noter seulement le premier message';
$lang['Overall ranking method: posts'] 		= 'M�thode de classement: messages';
$lang['Overall ranking method: topics'] 	= 'M�thode de classement: sujets';
$lang['Overall ranking method: users']		= 'M�thode de classement: utilisateurs';
$lang['Max daily ratings per user'] 			= 'Nombre quotidien maximum de notation par utilisateur';
$lang['Open in new window'] 							= 'Ouvrir dans une nouvelle fen�tre';
$lang['Min. post count'] 									= 'Nombre de message minimum';
$lang['Min. days registered'] 						= 'Nombre de jours enregistr�';
$lang['Bias system active'] 							= 'Syst�me de mesure de l\'orientation activ�';
$lang['Show bias usernames?'] 						= 'Montrer les utilisateurs avec orientation?';
$lang['Show dropdown in viewtopic?']			= 'Montrer la liste d�roulante dans viewtopic?';
$lang['Show dropdown in viewforum?'] 			= 'Montrer la liste d�roulante dans viewforum?';

?>
