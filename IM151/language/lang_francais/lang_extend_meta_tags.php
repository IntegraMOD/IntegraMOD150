<?php
/***************************************************************************
 *						lang_extend_meta_tags.php [English]
 *						-----------------------------------------------
 *	begin				: 12/10/2004
 *	copyright		: paperclips
 *	email				: jm.lachance@gmail.com
 *
 *	version				: 1.0.0 - 11/10/2004
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
$lang['Click_return_admin_meta_tags'] = 'Cliquez %sici%s pour retourner au menu d\'Administration des Meta Tags';
$lang['Lang_extend_meta_tags'] = 'Meta Tags +';
$lang['Meta_tags_title'] = 'Meta Tags +';
$lang['Meta_tags_title_explain'] = 'Bienvenue sur la gestion des meta tags. Ces champs vous permettent de donner aux moteurs de recherche une description plus compl�te de votre site web.<br/ >Vous devriez remplir ces champs avec soin.<br/ >En plus du r�f�rencement, ces champs permettent de definir certaines options comme les redirections automatiques.';

$lang['Meta_parameters'] = 'Liste compl�te des meta tags';
$lang['Meta_parameters_explain'] = 'R�sum� des principaux meta tags, avec la synthaxe : <<b>meta name="xxx" content="xxx"</b>>';
$lang['Meta_keywords']  = 'META Keywords';
$lang['Meta_keywords_explain']  = '- Indique aux moteurs de recherche des mots-clefs de votre site.<br />- Nombre maximum de charact�res: 1000 ou 100 mots-clefs.<br/ >- Lorsque vous comptez le nombre de caract�res, pensez � tenir compte des <a href="accent.htm">charact�res accentu�s</a> une fois que ceux-ci sont cod�s en HTML. Par exemple la lettre "�", cod�e &amp&agrave; en HTML, compte pour 8 charact�res.<br />- Vouc ne devriez pas r�p�ter plusieurs fois les m�mes mots-clefs (cela peut �tre p�nalisant sur certains moteurs de recherche).<br />- Les mots-clefs sont s�par�s � choix par une virgule, un espace ou une virgule et un espace.';
$lang['Meta_description'] = 'META Description';
$lang['Meta_description_explain'] = '- Description de votre site.<br />- Nombre maximum de charact�res: 200<br />- Evitez les accents, refus�s par certains moteurs de recherche.';
$lang['Meta_author']  = 'META Author';
$lang['Meta_author_explain']  = '- Identifie l\'auteur du site.<br/ >- En g�n�ral, pr�nom suivi du nom en majuscules.<br/ >- Vous pouvez mettre plusieurs auteurs s�par�s par des virgules.';
$lang['Meta_identifier_url']  = 'META Identifier-url';
$lang['Meta_identifier_url_explain']  = ' - Identification de l\'URL.<br />- Entrez l\'URL de votre page principale.<br />- Vous devez ne sp�cifier qu\'une seule valeur.';
$lang['Meta_reply_to']  = 'META Reply-to';
$lang['Meta_reply_to_explain']  = ' - Permet de sp�cifier l\'adresse email du webmaster.<br/ >- Une seule adresse est pr�f�rable.';
$lang['Meta_revisit_after']  = 'META Revisit-after';
$lang['Meta_revisit_after_explain']  = ' - Sp�cifie la fr�quence � laquelle le spider (robot du moteur de recherche) revient visiter votre site. - "15 days" ou "30 days" sont les meilleures valeurs.';
$lang['Meta_category']  = 'META Category';
$lang['Meta_category_explain']  = ' - Cat�gorie de votre site. Utilis� seulement par les moteurs de recherche qui classent les sites par cat�gorie.';
$lang['Meta_generator']  = 'META Generator';
$lang['Meta_generator_explain']  = '  - Typiquement le nom et la version de l\'outil ayant permis la cr�ation du site.<br/ >- Utilis� par les vendeurs pour tester la popularit� des programmes. <br / >- M�mes champs que pour publisher.';
$lang['Meta_copyright']  = 'META Copyright';
$lang['Meta_copyright_explain']  = '- Typiquement une information sur le copyright.<br /> - Vous pouvez mentionner ici copyright, marques d�pos�es, patentes, etc.';
$lang['Meta_robots']  = 'META Robots';
$lang['Meta_robots_explain']  = '- Contr�le des robots.<br/ >- all = indexation du site complet (valeur par d�faut)<br />- none = aucune indexation<br />- index = cette page est index�e<br />- noindex = cette page n\'est pas index�e, mais le robot continue de parcourir le site<br />- follow = Le robot suit les liens de cette page pour les ind�xer.<br />- nofollow = le robot ne suit pas les liens sur cette page.';
$lang['Meta_distribution']  = 'META Distribution';
$lang['Meta_distribution_explain']  = '- There are three classifications of distribution of your web content:<br/ >- Global (the entire web)<br/ >- Local (reserved for the local IP block of your site)<br/ >- IU (Internal Use, not for public distribution)';
$lang['Meta_date_creation']  = 'META Date-creation-yyyymmdd';
$lang['Meta_date_creation_explain']  = '- Date de cr�ation du site';
$lang['Meta_date_revision']  = 'META Date-revision-yyyymmdd';
$lang['Meta_date_revision_explain']  = '- Date de la derni�re mise � jour';
$lang['Meta_day'] = 'Jour :';
$lang['Meta_month'] = 'Mois :';
$lang['Meta_year'] = 'Ann�e :';

$lang['Meta_http_equiv_parameters'] = 'Autres tags';
$lang['Meta_http_equiv_parameters_explain'] = ' La synthaxe de ces champs est : <<b>meta http-equiv="xxx" CONTENT="xxx"</b>>. Si vous ne voulez pas les utiliser, laissez-les en blanc.';
$lang['Meta_refresh']  = 'META Refresh 1';
$lang['Meta_refresh_explain']  = '- Nombre de secondes avant que le navigateur ne recharge la page.';
$lang['Meta_redirect_url']  = 'META Refresh 2';
$lang['Meta_redirect_url_explain']  = '- Nombre de secondes avant que le navigateur ne continue sur la page suivante, pour laquelle l\'URL est sp�cifi�.';
$lang['Meta_redirect_url_time']  = 'D�lai (sec):';
$lang['Meta_redirect_url_adress']  = 'Adresse (URL):';
$lang['Meta_pragma']  = 'META Pragma';
$lang['Meta_pragma_explain']  = '- Emp�che que la page ne soit mise en cache dans le navigateur.<br/ >- Pour utiliser ce champ, entrez <i>no-cache</i>.';
$lang['Meta_language']  = 'META Language';
$lang['Meta_language_explain']  = '- fr : fran�ais<br/ >- en : anglais ou am�ricain<br/ >- de : hollandais<br/ >- es : espagnol<br/ >- it : italien<br/ >- pt : portugais<br/ >- Si votre site est en plusieurs langues, il est recommand� de ne pas utiliser ce champ.';
}
?>