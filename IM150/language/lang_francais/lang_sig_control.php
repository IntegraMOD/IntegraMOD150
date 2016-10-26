<?php 
/************************************************************** 
* MOD Title:   Signatures control 
* MOD Version: 1.2.1
* Translation: English 
* Rev date:    14/08/2004 
* 
* Translator:  -=ET=- < space_et@tiscali.fr > (n/a) http://www.golfexpert.net/phpbb 
*              Narc0sis < corrosion69@hotmail.com > (n/a) http://www.deviantcore.com
* 
***************************************************************/ 

$lang['sig_settings'] = 'Param�tres des signatures'; 
$lang['sig_settings_explain'] = 'Attention: pour tous les champs num�riques (sauf pour la taille des polices), la valeur de "0" ou un champ vide signifie "illimit�"!'; 

$lang['sig_max_lines'] = 'Nombre maximum de lignes'; 
$lang['sig_wordwrap'] = 'Nombre maximum de charact�res sans espace'; 
$lang['sig_allow_font_sizes'] = 'Taille de la police [size]'; 
$lang['sig_allow_font_sizes_yes'] = 'libre'; 
$lang['sig_allow_font_sizes_max'] = 'limit�e'; 
$lang['sig_allow_font_sizes_imposed'] = 'impos�e'; 
$lang['sig_font_size_limit'] = 'Limitation ou imposition de la taille de la police'; 
$lang['sig_font_size_limit_explain'] = 'phpBB n\'autorise pas une taille de police sup�rieure � 29. De plus, si vous imposez une taille, elle ne devra pas �tre inf�rieure � 7'; 
$lang['sig_min_font_size'] = 'min /'; 
$lang['sig_max_font_size'] = 'taille max or impos�e'; 
$lang['sig_text_enhancement'] = 'Autoriser les param�tres de texte avanc�s'; 
$lang['sig_allow_bold'] = 'Gras [b]'; 
$lang['sig_allow_italic'] = 'Italique [i]'; 
$lang['sig_allow_underline'] = 'Soulign� [u]'; 
$lang['sig_allow_colors'] = 'Couleurs de police [color]'; 
$lang['sig_text_presentation'] = 'Autoriser pr�sentation'; 
$lang['sig_allow_quote'] = 'Citation [quote]'; 
$lang['sig_allow_code'] = 'Code [code]'; 
$lang['sig_allow_list'] = 'Liste [list]'; 
$lang['sig_allow_url'] = 'Autoriser des URLs [url]'; 
$lang['sig_allow_images'] = 'Autoriser des images [img]'; 
$lang['sig_max_images'] = 'Nombre maximum d\'images'; 
$lang['sig_max_img_size'] = 'Taille maximum des images'; 
$lang['sig_max_img_size_explain1'] = 'Normalement, la v�rification de la taille de l\'image ne devrait poser aucun probl�me. Cependant, si la taille ne peut pas �tre v�rifi�e, choisir si l\'image doit �tre accept�e par d�faut ou refus�e.'; 
$lang['sig_max_img_size_explain2'] = 'La v�rification de la taille de l\'image peut ne pas �tre possible sur ce forum (%s). Choisir si l\'image doit �tre accept�e par d�faut ou refus�e.'; 
$lang['sig_max_img_size_explain3'] = 'La v�rification de la taille de l\'image est en principe impossible sur ce forum (%s). Choisir si l\'image doit �tre accept�e par d�faut ou refus�e.'; 
$lang['sig_img_size_legend'] = '(h x l)'; 
$lang['sig_allow_on_max_img_size_fail'] = 'Autoriser si la v�rification est impossible'; 
$lang['sig_max_img_files_size'] = 'Taille totale maximum des fichiers images'; 
$lang['sig_max_img_av_files_size'] = 'Taille totale maximum des fichiers images+avatar'; 
$lang['sig_max_img_av_files_size_explain'] = 'Si une valeur est d�finie pour ce champ, une v�rification de la taille des fichiers des images contenues dans la signature et de l\'avatar sera effectu�e; les contr�les s�par�s ce des deux types de fichiers seront d�sactiv�s. Si aucune valeur (ou 0) n\'est selectionn�e, le contr�le global sera d�sactiv�.'; 
$lang['sig_Kbytes'] = 'Kb'; 
$lang['sig_exotic_bbcodes_disallowed'] = 'Interdire les autres BBCodes';
$lang['sig_exotic_bbcodes_disallowed_explain'] = 'Choisir les autres BBCodes qui doivent �tre interdits (p. ex.: fade,php,shadow)';
$lang['sig_allow_smilies'] = 'Autoriser Smilies';
$lang['sig_reset'] = 'Annuler la signature du membre';
$lang['sig_reset_explain'] = 'Efface la signature du profil de <span style="color: #800000">tous les membres!</span> Ceci permet d\'obliger les membres � en refaire une, qui puisse ensuite �tre contr�l�e.';
$lang['sig_reset_confirm'] = 'Etes-vous s�r de vouloir effacer la signature de tous les membres?';

$lang['sig_reset_successful'] = 'Les signatures de tous les membres ont �t� effac�es avec succ�s.';
$lang['sig_reset_failed'] = 'Erreur: les signatures des membres n\'ont pas �t� effac�es.';

$lang['sig_config_error'] = 'Les param�tres des signatures ne sont pas valides.'; 
$lang['sig_config_error_int'] = 'Les valeurs pour ces champs ne sont pas des entiers positifs (ou la taille des polices est sup�rieure � 29):'; 
$lang['sig_config_error_min_max'] = 'Vous n\'avez pas choisi des valeurs minimales et maximales coh�rentes pour la taille des polices (min: %s / max: %s). La taille maximum doit �tre plus grande que la taille minimum.'; 
$lang['sig_config_error_imposed'] = 'Vous avez choisi d\'imposer une taille pour les polices, mais cette derni�re n\'est pas valable (%). Le minimum est 7, le maximum 29.'; 

$lang['sig_allow_signature'] = 'Peut afficher une signature';
$lang['sig_yes_not_controled'] = 'Oui, sans v�rification';
$lang['sig_yes_controled'] = 'Oui, mais apr�s v�rification';

$lang['sig_explain'] = 'Une signature est un petit texte que vous pouvez ajouter au bas de vos messages.';
$lang['sig_explain_limits'] = 'La limite est de %s charact�res%s%s%s.'; 
$lang['sig_explain_max_lines'] = ' sur %s ligne(s)'; // Be careful to the space at the begining! 
$lang['sig_explain_font_size_limit'] = ' (taille de %s � %s)'; // Be careful to the space at the begining! 
$lang['sig_explain_font_size_max'] = ' (taille maximum %s)'; // Be careful to the space at the begining! 
$lang['sig_explain_no_image'] = ' et sans image'; // Be careful to the space at the begining! 
$lang['sig_explain_images_limit'] = ' et avec %s image(s) dont la taille maximum de chaque image est de %sx%s pixels pour un maximum par signature de %s Kb'; // Be careful to the space at the begining! 
$lang['sig_explain_unlimited_images'] = ' avec autant d\'images que vous voulez, mais dont la taille maximum de chaque image est de %sx%s pixels pour un maximum par signature de %s Kb'; // Be careful to the space at the begining! 
$lang['sig_explain_avatar_included'] = ', avatar inclus'; 
$lang['sig_explain_wordwrap'] = 'Votre texte est limit� � %s charact�res (sans les espaces).'; 

$lang['sig_BBCodes_are_OFF'] = 'BBCodes sont <u>OFF</u>'; 
$lang['sig_bbcodes_on'] = '%sBBCodes%s ON: '; 
$lang['sig_bbcodes_off'] = '%sBBCodes%s OFF: '; 
$lang['sig_none'] = 'aucun'; 
$lang['sig_all'] = 'tous'; 

$lang['sig_error'] = 'Votre signature n\'est pas valable.'; 
$lang['sig_error_max_lines'] = 'Votre texte comprend %s lignes, alors que seules %s lignes sont autoris�es.'; 
$lang['sig_error_wordwrap'] = 'Votre texte comprend %s groupe(s) of plus de %s charact�res sans espace, alors que cela est interdit.'; 
$lang['sig_error_bbcode'] = 'Vous avez utilis� ce(s) BBCode(s) interdit(s): %s'; 
$lang['sig_error_font_size_min'] = 'Vous avez utilis� une taille de police %s alors que le minimum autoris� est de %s.'; 
$lang['sig_error_font_size_max'] = 'Vous avez utilis� une taille de police %s alors que le maximum autoris� est de %s.'; 
$lang['sig_error_num_images'] = 'Vous avez utilis� %s image(s) alors que le maximum autoris� est de %s.'; 
$lang['sig_error_images_size'] = 'L\'image %s est trop grande.<br />Sa taille est de %s pixels de haut et %s de large, alors que le maximum autoris� est de %s de haut et %s de large.'; 
$lang['sig_unlimited'] = 'illimit�'; 
$lang['sig_error_images_size_control'] = 'Impossible de v�rifier la taille de l\'image: %s<br />Soit il n\'y a aucune image � cette adresse, soit le forum n\'est pas capable de la v�rifier - et vous ne pouvez donc pas l\'utiliser.'; 
$lang['sig_error_avatar_local'] = 'Il y a un probl�me avec le fichier: %s<br />Il est impossible de v�rifier sa taille.'; 
$lang['sig_error_avatar_url'] = 'Cet URL doit �tre erron�: %s<br />Il n\'y a aucun avatar � cette adresse.'; 
$lang['sig_error_img_files_size'] = 'La taille totale des fichiers images est de %s Kb, alors que le maximum autoris� est de %s Kb.'; 
$lang['sig_error_img_av_files_size'] = 'La taille totale des images utilis�es dans votre signature (%s Kb) et de votre avatar (%sKb) est sup�rieure � la limite de %s Kb autoris�e.'; 

?>