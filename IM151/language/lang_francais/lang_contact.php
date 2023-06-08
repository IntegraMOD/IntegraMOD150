<?php
/***************************************************************************
 *                          lang_contact.php [English]
 *                            -------------------
 *   begin                : Friday, Jan 31, 2003
 *   version              : 0.8.0
 *   date                 : 2003/12/23 23:21
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
// The file will be included separately of other language files as needed, but must
// be included after lang_main.php and/or lang_admin.php
//

// Do not change the next six lines.
// Avoid including the file more than once.
if ( defined('IN_CONTACT_LANG') )
{
	return;
}
define('IN_CONTACT_LANG', true);

// You may want to edit the following lines to match your website.
$lang['Buddy'] = 'Contact';
$lang['Ignore'] = 'Ignorer';
$lang['Disallow'] = 'Ne pas autoriser';
$lang['User_ignoring_you'] = 'Ce membre vous a mis sur sa liste d\'utilisateurs � ignorer.';
$lang['User_not_want_contact'] = 'Ce membre vous a mis sur sa liste d\'utilisateurs qui ne peuvent le contacter';
$lang['Buddies_online'] = 'Ces contacts sont maintenant connect�s';
$lang['Buddy_online'] = 'Ce contact est maintenant connect�';
$lang['Buddies_offline'] = 'Ces contacts sont maintenant d�connect�s';
$lang['Buddy_offline'] = 'Ce contact est maintenant d�connect�';
$lang['Listbox_Buddies'] = 'Vos contacts';
$lang['Online'] = 'Connect�(s)';
$lang['Offline'] = 'D�connect�(s)';
$lang['Buddies'] = 'Contact(s)';
$lang['Ignored_some_users'] = 'Des utilisateurs sur cette page ont �t� ignor�. %sVoir cette page avec ces utilisateurs ?%s';
$lang['Ignore_some_users'] = '%sVoir cette page sans les utilisateurs ignor�s ?%s';

// These will be used in the user profiles for links to do the indicated thing
// Also used as ALT text for images in several places.  %s will be replaced with a
// user's name
$lang['Add_to_buddy'] = 'Ajouter %s � votre liste de contact';
$lang['Remove_from_buddy'] = 'Retirer %s de votre liste de contact';
$lang['Add_to_ignore'] = 'Ajouter %s � votre liste de gens ignor�s';
$lang['Remove_from_ignore'] = 'Retirer %s de votre liste de gens ignor�s';
$lang['Add_to_disallow'] = 'Ajouter %s � la liste des gens non autoris�s � vous contacter';
$lang['Remove_from_disallow'] = 'Retirer %s de la liste des gens non autoris�s � vous contacter';


// Error Messages
$lang['No_alerts_updated'] = 'Aucun utilisateur sp�cifi� pour les mises � jour d\'alerte';
$lang['No_autoclose'] = 'Si vous voyez ce message, alors l\'option de fermeture automatique de fen�tre ne fonctionne pas avec votre navigateur. Une des causes possibles peut �tre la d�sactivation du Javascript dans votre navigateur. Veuillez fermer cette fen�tre.';

// Control Panel
$lang['Users_you_ignore'] = 'Utilisateurs que vous ignorez';
$lang['Users_you_disallow'] = 'Utilisateurs que vous n\'autorisez pas � vous contacter';
$lang['Users_buddy_you'] = 'Utilisateurs vous ayant dans leur liste de contacts';
$lang['Users_you_buddy'] = 'Vos contacts';
$lang['None_you_ignore'] = 'Vous n\'ignorez personne.';
$lang['None_you_disallow'] = 'Tous les utilisateurs peuvent vous contacter.';
$lang['None_buddy_you'] = 'Aucun utilisateur ne vous a mis dans sa liste de contacts.';
$lang['None_you_buddy'] = 'Vous n\'avez aucun contact.';
$lang['Add_a_user'] = 'Ajouter un utilisateur � cette liste ?';
$lang['Add_user'] = 'Ajouter';
$lang['Move_selected_users'] = 'D�placer les utilisateurs s�lectionn�s vers :';
$lang['Buddy_link'] = 'Contacts';
$lang['Buddied_link'] = 'Contact de...';
$lang['Ignore_link'] = 'Ignor�s';
$lang['Disallow_link'] = 'Non autoris�s';
$lang['Be_alerted'] = 'M\'avertir quand cet utilisateur se connecte';
$lang['Edit_alerts'] = 'Editer les options d\'alerte de connexion et de d�connexion';

// Success messages
$lang['Alerts_updated'] = 'Pr�f�rences d\'alerte mises � jour pour tous les contacts chang�s';
$lang['Alerts_oops'] = ' Mis � part ceux qui suivent, qui ne peuvent pas �tre trouv�s :<br />';
$lang['Moved_to_buddies'] = 'Les utilisateurs indiqu�s ont �t� d�plac�s dans votre liste de contacts.';
$lang['Moved_to_ignore'] = 'Les utilisateurs indiqu�s ont �t� d�plac�s dans votre liste de gens ignor�s.';
$lang['Moved_to_disallow'] = 'Les utilisateurs indiqu�s ont �t� d�plac�s dans votre liste de gens non autoris�s � vous contacter.';
$lang['Removed_selected_users'] = 'Les utilisateurs indiqu�s ont �t� supprim�.';
$lang['Buddy_updated'] = 'Liste de contacts mise � jour';
$lang['Ignore_updated'] = 'Liste des gens ignor�s mise � jour';
$lang['Disallow_updated'] = 'Liste des gens non autoris�s � vous contacter mise � jour';


// For Prillian
$lang['Close_window_link'] = '<br /><br /><a href="javascript:window.close();">' . $lang['Close_window'] . '</a>';

/* Entries Added in Prillian 0.7.0 & Contact List 0.3.0 */
$lang['No_ignore_admin'] = 'Vous avez tent� d\'ignorer ou de ne pas autoriser � vous contacter les administrateurs ou mod�rateurs suivants : %s. SVP, Modifiez les options sans essayer d\'ignorer ou de ne pas autoriser ces utilisateurs.<br />';
$lang['No_contact_add_self'] = 'Vous avez tent� de vous ajouter � une de vos liste de contacts. Ce n\'est pas autoris� ; SVP, Modifiez les options sans essayer de vous ajouter vous-m�me � vos liste de contacts.';
$lang['Add_Selected_as_Buddies'] = 'Ajouter les utilisateurs s�lectionn�s comme contact';
$lang['Add_contact_users_link'] = 'Ajouter de nouveaux contacts';
$lang['You_have_buddies'] = 'Vous avez %d contacts.';
$lang['You_have_buddy'] = 'Vous avez 1 contact.';
$lang['You_are_ignoring'] = 'Vous ignorez %d utilisateurs.';
$lang['You_are_ignoring_one'] = 'Vous ignorez 1 utilisateur.';
$lang['You_have_disallowed'] = 'Vous n\'autorisez pas %d utilisateurs � vous contacter.';
$lang['You_have_disallowed_one'] = 'Vous n\'autorisez pas 1 utilisateur � vous contacter.';
$lang['You_as_buddies'] = '%d utilisateurs vous a ajout� � sa liste de contacts.';
$lang['You_as_buddy'] = '1 utilisateur vous a ajout� � sa liste de contacts.';
$lang['Add_many_contacts_explain'] = 'Vous pouvez ajouter plusieurs utilisateurs � vos diff�rentes listes d\'ici. Tapez le nom de chaque utilisateur dans le champ ci-dessous. Chaque nom d\'utilisateur doit �tre sur une ligne s�par�e.';
$lang['Add_to_Buddy_List'] = 'Ajouter � la liste de contacts';
$lang['Add_to_Ignore_List'] = 'Ajouter � la liste de gens � ignorer';
$lang['Add_to_Disallow_List'] = 'Ajouter � la liste des gens non-autoris�s � me contacter';


/* Entries Changed in Prillian 0.7.0 & Contact List 0.3.0 */
/* Any of these that have contact in the $lang['name'] part used to have bid or
 buddy in place of contact. In some, that is the only change */
$lang['Contact_List_FAQ'] = 'Liste des contacts'; // Title of the FAQ

$lang['Contact_Management'] = 'Gestion des contacts';

// Error Messages
$lang['No_contact_mode'] = 'Aucun mode de contact d�fini';
$lang['No_contact_type'] = 'Aucun type de contact d�fini';
$lang['No_contact_action'] = 'Aucune action de contact d�finie';
$lang['No_contact_id'] = 'Aucune ID d\'utilisateur de contact d�finie';
$lang['Invalid_contact_action'] = 'La d�finition d\'action de contact est invalide';


// Control Panel
$lang['Contact_click_here'] = '%sG�rer la liste de contacts%s';


// Success messages
$lang['Confirm_contact_changes'] = 'Etes-vous s�r(e) de vouloir faire ces changements?';
$lang['No_Contact_changes'] = 'Aucun changement sp�cifi�';


//Private Message alerts
$lang['System_title'] = 'Syst�me de message de la liste de contacts';
$lang['Contact_Alert_PM'] = '[url=%s]%s[/url] vous a ajout� � sa liste de contacts. Pour g�rer votre liste de contacts, SVP [url=%s]cliquez ici[/url]. Ceci est un message automatique envoy� par le programme Prillian du forum. Il n\'est pas n�cessaire d\'y r�pondre.';

?>