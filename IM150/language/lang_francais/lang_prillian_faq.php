<?php
/***************************************************************************
 *                      lang_prillian_faq.php [French]
 *                            -------------------
 *   begin                : Friday, May 30, 2003
 *   version              : 1.1.0
 *   date                 : 2003/12/23 23:23
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array('question', 'answer');
// If you want to separate a section enter
// $faq[] = array('--', 'Block heading goes here if wanted');
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put single quotes (') in your FAQ entries, if you absolutely must then
// escape them i.e.. \'something\' or use double quotes (") at the beginning and end
// of the entries (in which case you'll need to escape any double quotes in the
// entry).
//
// The FAQ items will appear on the FAQ page in the same order they are listed in
// this file
//
// To mention Prillian by the name you've set in lang_prillian.php, use the variable
// $progname as it is used in the defaults
//
//

if (!defined('IN_PHPBB'))
{
	die('Hacking attempt');
}

include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_prillian.' . $phpEx);


$progname = $lang['Prillian'];
//
$faq[] = array("--", "Questions G�n�rales");
$faq[] = array("C'est quoi Prillian ?", "Prillian est une messagerie instantan�e inclus au forum qui permet � nos utilisateurs enregistr�s de pouvoir se contacter facilement et rapidement. C'est tr�s similaire � d'autres programmes de messageries que vous avez utilis� pr�c�demment, mais l'usage de Prillian est en g�n�ral limit� aux autres membres du forum ");
$faq[] = array("J'ai besoin de t�l�charger un programme pour utiliser Prillian ?", "Non, il n'y a pas de programme � t�l�charger Prillian est activ� sur ce forum. Vous pouvez acc�der et utiliser le programme par votre navigateur exactement comme une page web normale ou le forum lui-m�me.");
$faq[] = array("Je dois m'enregistrer pour utiliser Prillian ?", "Oui. Prillian fait partie du forum et utilise le m�me syst�me d'enregistrement. Il utilise �galement une partie du syst�me de messagerie priv�e du forum. Vous ne pourrez utiliser la messagerie que si vous �tes enregistr� et connect�.");
$faq[] = array("Je dois rester constamment sur le site pour utiliser Prillian ?", "Non, ce n'est n�cessaire. Aussi longtemps que vous gardez la fen�tre de Prillian ouverte, vous pouvez continuer normalement � surfer sur le Web. Gardez � l'esprit que le programme est ouvert dans votre navigateur, si vous fermez celui-ci vous fermerez Prillian �galement.");
$faq[] = array("Mon navigateur a-t-il besoin d'options particuli�res pour utiliser Prillian ?", "Prillian utilise beaucoup de JavaScript pour les options de contr�le et d'ouverture de nouvelles fen�tres. Il est donc recommand� que vous ayez ces options activ�es pour notre forum. Si ces options ne sont pas activ�es, vous pouvez encore utiliser la messagerie. Cependant, quelques fonctions ne marcheront pas.");
$faq[] = array("Comment acc�der � Prillian ?", "D'abord il faut �tre membre et connect� sur le forum. Sur certains forums, l'administrateur peut configurer Prillian pour s'ouvrir automatiquement quand vous arrivez sur l'index du forum. Si la messagerie ne s'ouvre pas automatiquement recherchez un lien appel� \"Ouvrir  Prillian\" ou \"Qui est en ligne\" ou quelque chose de similaire. Si un nouveau message vous attend, ce lien doit afficher que vous avez un nouveau message . Cliquez sur ce lien pour ouvrir une nouvelle fen�tre de navigateur pr�format�e. Cette fen�tre appel� le \"Client MI,\" vous autorise � acc�der � Prillian.");
$faq[] = array("J'ai fait tout �a, mais la fen�tre m'affiche des messages d'erreurs �tranges. Pourquoi ?", "Il y a plusieurs raisons possibles. l'administrateur du forum peut avoir temporairement d�sactiv� le programme (par exemple pour une mise � jour). Il est �galement possible qu'il vous ait banni de la liste des utilisateurs autoris�s de Prillian. Vous n'avez rien � vous reprocher ? Il est �galement possible que vous ayez d�sactiv� vous-m�me le programme. Dans ce cas le message d'erreur doit afficher un lien vers l'�diteur des pr�f�rences, o� vous pouvez r�activer le programme.");
$faq[] = array("OK, j'ai ouvert la Messagerie Instantan�e. Et maintenant je fais quoi ?", "De Prillian vous pouvez faire plusieurs choses. Vous pouvez voir une liste des membres qui sont en ligne en ce moment. Vous pouvez �galement leur envoyer un message instantan�. Vous pouvez aussi envoyer des messages aux autres membres, en recevoir, voir les messages que vous avez re�u ou envoy� dans le pass�, acc�der au panneau de contr�le de la liste de contacts, et, si l'administrateur l'autorise, acc�der aux pr�f�rences de votre messagerie.");
$faq[] = array("Comment puis-je recevoir des messages ?", "La messagerie v�rifie automatiquement et p�riodiquement s'il y a des messages. Pour plus d'informations, lisez la section suivante de cette FAQ");
//
$faq[] = array("--", "Utiliser la Messagerie Instantan�e");
//
$faq[] = array('Je vois beaucoup d\'images dans cette fen�tre. Qu\'est ce qu\'elle veulent dire ?", "Les contr�les de Prillian pour acc�der aux options de messageries. Voici en dessous une liste des images que vous pouvez voir dans la messagerie et ceux qu\'elles repr�sentent. Gardez � l\'esprit que ces images peuvent changer si vous alt�rez le th�me utilis� par ' . $progname . '. Vous pouvez �galement apprendre ce que repr�sente une image en passant dessus avec le curseur de votre souris (dans certains navigateurs seulement). Il y a aussi un set de liens-textes qui ont des fonctions similaires � ces images, en fonction de vos pr�f�rences.
<br /><br />
<table border="1" width="100%" cellpadding="5" cellspacing="0"><tr><td width="15%" align="center">
<img src="' . $images['prill_buddies'] . '">
</td><td class="gen">
' . $lang['Alt_Contact_Man'] . '
</td><td class="gen">
Ceci ouvre le panneau \"Gestion des contacts\" dans une autre fen�tre de votre navigateur.
</td></tr><tr><td align="center">
<img src="' . $images['prill_closewin'] . '">
</td><td class="gen">' . $lang['Alt_Close_Windows'] . '
</td><td class="gen">
Les fen�tres-filles peuvent inclure les  fen�tres des messages lus ouverts,des messages envoy�s et des messages enregistr�s.
</td></tr><tr><td align="center">
<img src="' . $images['prill_home'] . '">
</td><td class="gen">
' . $lang['Alt_Home'] . '
</td><td class="gen">
Ouvre l\'index du forum de ce site dans une autre fen�tre du navigateur .
</td></tr><tr><td align="center">
<img src="' . $images['prill_prefs'] . '">
</td><td class="gen">
' . $lang['Alt_Prefs'] . '
</td><td class="gen">
Change les options qui influe sur la mani�re dont la messagerie instantan�e agit. L\'administrateur du forum peut passer outre � ces options, dans ce cas cette image n\'appara�tra pas.
</td></tr><tr><td align="center">
<img src="' . $images['prill_message'] . '">
</td><td class="gen">
' . $lang['Send_Message'] . '
</td><td class="gen">
Cliquez ici pour ouvrir la fen�tre \"Envoyer un message\".
</td></tr><tr><td align="center">
<img src="' . $images['prill_refresh'] . '">
</td><td class="gen">
' . $lang['Check_IMs'] . '
</td><td class="gen">
Recharge ou rafra�chit la messagerie.  Cela mettra � jour les nouveaux messages et la liste des utilisateurs connect�s.
</td></tr><tr><td align="center">
<img src="' . $images['prill_logout'] . '">
</td><td class="gen">
' . $lang['Alt_Logout'] . '
</td><td class="gen">
Cela fermera � la fois Prillian et  les fen�tres-filles.
</td></tr><tr><td align="center">
<img src="' . $images['prill_log'] . '">
</td><td class="gen">
' . $lang['Alt_Message_Log'] . '
</td><td class="gen">
Voir une liste des messages que vous avez envoy� ou re�u. Vous pouvez aussi voir les messages individuels enregistr�s.
</td></tr><tr><td align="center">
<img src="' . $images['prill_offsite'] . '">
</td><td class="gen">
Utilisateurs \"Hors-Forum\"
</td><td class="gen">
Cet utilisateur est d\'un autre site/forum. Dans certains navigateurs, en passant le curseur de votre souris sur l\'image vous pouvez apercevoir le site d\'origine de l\'utilisateur.
</td></tr><tr><td align="center">
<img src="' . $images['prill_onsite'] . '">
</td><td class="gen">
Utilisateur \"Sur Le Forum\"
</td><td class="gen">
Cet utilisateur est membre du forum comme vous.
</td></tr><tr><td align="center">
<img src="' . $images['prill_help'] . '">
</td><td class="gen">
Aide
</td><td class="gen">
Acc�der � cette page de FAQ.
</td></tr></table><br /><br />
Pour plus d\'informations sur les utilisateurs \"Hors-Forum et \"Sur Le Forum\", voir la section de cette FAQ intitul�e \"Messagerie Site � Site\"');
//
$faq[] = array("Quelles sont les autres options de la Messagerie Instantan�e ?", "En fonction de la mani�re dont l'administrateur a configur� Prillian, vous pouvez voir une s�rie de blocs d'informations sur les utilisateurs sur le forum ou utilisant la messagerie instantan�e. Cela inclue le nombre de membres connect�s, d'invisibles et d'invit�s.
<br />
<br />Il y aura probablement un ou deux blocs de noms d'utilisateurs pr�s des ic�nes des Hors-Forum, Sur Le Forum et  Envoyer un message. Il y a des membres qui sont actuellement connect�s. Si un nom d'utilisateur Sur Le Forum est affich� <em>comme ceci</em> alors cet utilisateur utilise aussi la messagerie instantan�e en ce moment. Si les mod�rateurs ou les administrateurs du site sont list�s, leurs noms auront des couleurs diff�rentes pour les distinguer des simples utilisateurs. Si vous cliquez sur l'ic�ne \"Envoyer un Message\" pr�s du nom d'un utilisateur, la fen�tre \"Envoyer un message\" s'ouvrira  avec le nom de cet utilisateur dans le champ \"Nom d'utilisateur\". Vous pouvez cliquer sur le nom d'un utilisateur pour voir son profil du forum.");
$faq[] = array("Comment puis-je recevoir de nouveaux messages ?", "R�guli�rement, Prillian se rechargera automatiquement pour mettre � jour les nouveaux messages et la liste des utilisateurs en ligne. Quand cela arrivera, Prillian apr�s s'�tre compl�tement recharg� peut afficher vos messages de deux mani�res diff�rentes en fonction de vos pr�f�rences utilisateur et des options Javascripts de votre navigateur. Prillian peut automatiquement ouvrir les nouveaux messages dans de nouvelles petites fen�tres \"Lire le message\". Il peut aussi afficher les nouveaux messages et les messages non-lus dans la fen�tre Prillian elle-m�me. Si les messages s'affichent dans Prillian, vous verrez une version r�duite du sujets des messages et du nom de l'exp�diteur. Cliquez sur le sujet du message pour ouvrir un message dans une nouvelle fen�tre \"Lire le message\".
<br />
<br />En fonction de vos pr�f�rences utilisateur, Prillian peut v�rifier les nouveaux messages instantan�s seulement ou pour les messages instantan�s et les messages priv�s. Si, pour une raison quelconque, Prillian �choue � se recharger automatiquement, vous pouvez cliquer sur le bouton ou le lien \"V�rifier les messages instantan�s\" pour recharger Prillian manuellement.");
$faq[] = array("Comment puis-je effacer les anciens messages ?", "En fonction des pr�f�rences utilisateurs, les messages instantan�s peuvent �tre automatiquement effac�s une fois lus et au rechargement de Prillian. Vous pouvez �galement effacer les nouveaux et non lus messages priv�s et instantan�s de la liste dans la messagerie instantan�e. Les messages priv�s que vous avez d�j� lu ne peuvent pas �tre effac�s � partir de la messagerie instantan�e (� moins qu'il ne soient list�s dans la messagerie instantan�e et effac�s avant le rafra�chissement ).");

$faq[] = array("--", "Options et Pr�f�rences des Utilisateurs");
$faq[] = array("Comment puis-je changer mes options ?", "Toutes vos options sont stock�es dans la base de donn�s. Pour les modifier cliquez le lien ou l'ic�ne <u>Pr�f�rences</u>  (Montr�s en g�n�ral en haut ou en bas de Prillian but �a peut ne pas �tre le cas). Cela vous autorise � changer toutes vos options");
$faq[] = array("J'ai cliqu� sur le lien, mais il m'affiche quelque chose � propos de la priorit� administrateur. Ca veut dire quoi ?", "Les administrateurs du forum ont la possibilit� de passer outre aux pr�f�rences utilisateur. Quand cette option est activ�e, les pr�f�rences utilisateur ne peuvent �tre chang�es except� par l'administrateur du forum. Vous ne pourrez pas acc�der � l'�diteur des pr�f�rences pour modifier vos options de messagerie.");
$faq[] = array("Il y a beaucoup d'options ici. Qu'est ce qu'elles veulent dire ?", "Beaucoup des pr�f�rences utilisateur s'expliquent par elles-m�me. Ci-dessous voici un sommaire de quelques options qui n�cessitent plus de d�tails.
<br />
<br /><table border=\"1\" width=\"100%\" cellpadding=\"5\" cellspacing=\"0\"><tr><td class=\"gen\" width=\"25%\">Localisation du fichier son</td><td class=\"gen\">Les options du fichier son vous autorise � jouer un nouveau son quand vous recevez des nouveaux messages. Vous pouvez choisir de jouer soit le son par d�faut fourni par le forum, soit un son de votre propre PC. Cliquez sur le bouton \"Parcourir...\" pour sp�cifier le chemin d'un fichier son sur votre PC. La localisation du fichier son sera not�e dans la base de donn�es du forum. Si vous d�cidez de d�placer le fichier son, n'oubliez pas de mettre � jour les options.</td></tr><tr><td class=\"gen\">Lister ces utilisateurs dans la fen�tre principale</td><td class=\"gen\">Ces options vous autorise � changer les utilisateurs list�s dans Prillian. Vous pouvez choisir de lister tous les utilisateurs sur les forums, tous les utilisateurs sur la messagerie, seulement les amis sur les forums, ou seulement les amis sur la messagerie.</td></tr><tr><td class=\"gen\">Choisir une m�thode pour afficher les utilisateurs connect�s sur d'autres forums</td><td class=\"gen\">Ces options vous autorise � d�finir comment les utilisateurs Hors-Forum sont affich�s sur Prilllian.Vous pouvez choisir de ne pas les afficher du tout, de les afficher dans un tableau s�par� des utilisateurs Sur le Forum, ou m�lang�s avec eux. Rappelez-vous, les utilisateurs Hors-Forum sont toujours des utilisateurs sur Prillian.</td></tr></table>");
$faq[] = array("Points importants � connaitre � propos des options.", "Il y a des choses importantes qu'il faut que vous sachiez � propos des pr�f�rences utilisateurs et des options. D'abord, faites attention quand vous changez \"Activer les options\". D�sactiver ces options vous emp�chera d'utiliser une partie de la messagerie. Deuxi�mement, si vous voulez qu'un son soit jou� quand vous recevez des nouveaux messages, il est mieux que ce soit un son de votre propre PC. Le son se chargera (et donc se jouera) plus rapidement que si la messagerie doit le t�l�charger du forum.");

$faq[] = array("--", "Probl�mes de Postage");
$faq[] = array("Comment puis-je envoyer des messages ?", "C'est simple. Cliquez sur l'ic�ne ou le lien \"Envoyer un message\" (soit pr�s du nom de l'utilisateur soit dans les options) pour ouvrir la fen�tre \"Envoyer un message\". L�, vous aurez la possibilit� de taper un message et de l'envoyer � un autre utilisateur. Si vous d�sirez envoyer un message � un autre utilisateur qu'� celui pour lequel vous aviez cliqu� sur l'ic�ne ou le lien \"Envoyer un message\", vous devez changer le nom dans le champ du nom d'utilisateur.
<br />SVP, veuillez noter que vous ne pouvez envoyer un message � un utilisateur Hors-Forum sur un forum particulier qu'en cliquant sur l'ic�ne ou le lien pr�s du nom d'un utilisateur Hors-Forum du m�me site. De la m�me mani�re, vous ne pouvez envoyer un message � un utilisateur Sur Le Forum sur un forum particulier qu'en cliquant sur l'ic�ne ou le lien pr�s du nom d'un utilisateur Sur Le Forum. R�pondre � un message vous autorise � envoyer un message du m�me type �galement.");
$faq[] = array("Je suis dans la fen�tre \"Envoyer un message\". C'est quoi toutes ces options ?", "La fen�tre \"Envoyer un message\" a beaucoup d'options. Pr�s du nom d'utilisateur, il y a deux boutons qui vous autorise � trouver rapidement un utilisateur ou un ami � qui vous pouvez envoyer un message. Le champ du sujet est optionnel. Il y a un choix de BBCode et de police similaire � celui de phpBB, ainsi que des options pour les d�sactiver dans les messages. Il y a �galement une liste d�filante de Smileys. Enfin, il y a une option � cocher \"Sauvegarder le message\", qui sauvegardera une copy du message dans votre messagerie priv�e quand il sera envoy� avec succ�s.
<br />
<br />Quelques options peuvent �tre d�sactiv�es quand vous envoyez un message � un utilisateur Hors-Forum.");
$faq[] = array("Puis-je utiliser les BBcodes, les Smileys, le HTML, les signatures et les images dans les messages instantan�s ?", "Vous le pouvez, si l'administrateur l'autorise. Les r�glages pour ces options sont les m�me que celles sur le forum (en g�n�ral, si vous pouvez utiliser les BBcodes sur le forum, vous pouvez les utiliser dans les messages instantan�s.)");

$faq[] = array("--", "Lecture des Messages");
$faq[] = array("Je lis un message. Que veulent dire quelques-unes de ces options ?", "Il y a deux options dans la fen�tre \"Envoyer un message\" qui ont besoin d'�tre expliqu�s : Les boutons \"Sauvegarder et fermer\" et \"Sauvegarder et r�pondre\". Cliquez sur un de ces deux boutons sauvegardera une copie du message re�u dans votre messagerie priv�e. C'est utile si la suppression automatique des messages lus est activ�e. Les parties \"Fermer\" et \"R�pondre\" de ces boutons sont facile � comprendre.
<br />
<br />En fonction de la configuration du forum, il peut aussi y avoir un champ \"R�ponse rapide\" dans cette fen�tre.");
$faq[] = array("Je continue � recevoir des messages non d�sir�s !", "Prillian comprend un syst�me pour ignorer. Vous pouvez ignorer l'utilisateur envoyant les messages incrimin�s ou contacter l'administrateur du forum, qui peut interdire � l'utilisateur l'usage des syst�me de  messagerie priv�e et instantan�e");

$faq[] = array("--", "Messagerie Site � Site");
$faq[] = array("C'est quoi la messagerie Site � Site ?", "La messagerie Site � Site est un syst�me sp�cial que Prillian utilise pour autoriser les utilisateurs d'autres forums � communiquer entre eux. Tous les utilisateurs Hors-Forum list�s dans Prillian sont en fait des gens utilisant une messagerie similaire sur un autre forum. Ils ont �galement la possibilit� de vous envoyer un message instantan� via la messagerie Site � Site. Vous pouvez de la m�me mani�re leur envoyer un message.");
$faq[] = array("Ca � l'air bien, mais �a ne m'int�resse pas vraiment.", "Vous pouvez d�sactiver la messagerie Site � Site dans vos pr�f�rences utilisateur.");
$faq[] = array("Comment envoyer un message � quelqu'un sur un autre site ?", "Cliquez sur l'ic�ne ou le lien \"Envoyer un message\" pr�s de leur nom dans Prillian. Quand la fen�tre \"Envoyer un message\" s'ouvre, tapez simplement ! Quelques options peuvent �tre d�sactiv�es dans les messages Site � Site. Ainsi, m�me si vous pouvez voir les utilisateurs connect�s d'autres sites, vous ne pourrez pas leur envoyer de messages. Vous pouvez seulement envoyer des messages si ce site/forum � ajouter ce forum � sa base de donn�es \"Site � Site\".");
$faq[] = array("Pourquoi ces options sont-elles d�sactiv�es ?", "Le syst�me de messagerie Site � Site est encore en d�veloppement. En fait, tout le programme de messagerie est encore en d�veloppement");

$faq[] = array("--", "Probl�mes avec Prillian");
$faq[] = array("Qui a �crit ce programme de messagerie instantan�e ?", "Ce programme (dans sa forme non-modifi�e) est produit, fourni et copyright de et par <a href=\"http://darkmods.sourceforge.net/\" target=\"_blank\">Thoul</a>. Il est bas� et inclus du code de programmation du forum phpBB, qui (dans sa forme non-modifi�e) est produit, fourni et copyright du et par le <a href=\"http://www.phpbb.com/\" target=\"_blank\">groupe phpBB</a>.
<br />Les deux programmes sont sous la licence g�n�rale publique GNU et peuvent �tre distribu�s gratuitement; voir les liens pour plus de d�tails.");
$faq[] = array("Pourquoi telle option n'est pas disponible ?", "Ce programme a �t� �crit et est sous licence du groupe phpBB (dans le cas du programme de forum) et Thoul ( dans le cas de la messagerie instantan�e). Si vous pensez qu'une option m�riterait d'�tre ajout�e au programme Prillian alors visitez le site web darkmods.sourceforge.net et v�rifiez qu'elle n'ait pas d�j� �t� soumise sur les forums. Si ce n'est pas le cas, postez une demande d'option dans les forums ou sur Sourceforge.");
$faq[] = array("Qui dois-je contacter en cas d'abus et/ou d'utilisation ill�gale de Prillian ?", "Vous devriez contacter l'administrateur du forum. Si vous ne pouvez trouvez qui il est, essayez alors de joindre un des mod�rateurs du forum et demandez-lui qui contacter pour un abus avec Prillian. Si vous n'avez toujours pas de r�ponse, contactez alors, le propri�taire du nom de domaine ( trouvez-le grace � un recherche Whois), et si le forum se trouve sur un h�bergeur gratuit (en g�n�ral yahoo, free.fr, f2s.com, etc.), la direction ou le service client�le. Notez que Thoul n'a absolument aucun contr�le et ne peut en aucun cas �tre tenu pour responsable sur la mani�re dont le forum incrimin� et Prillian sont g�r�s.
<br />Il est totalement inutile de contacter Thoul � propos d'actions ill�gales et abusives avec Prillian, si cela n'est pas directement li� au site web darkmods.sourceforge.net ou � un probl�me technique avec Prillian lui-m�me. Si vous envoyez un email � Thoul en relation avec des probl�mes non-li�s avec ses aspects techniques, n'esp�rez aucune r�ponse de sa part.");



?>