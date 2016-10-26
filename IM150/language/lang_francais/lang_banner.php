<?php
/**************************************************************
*
*  MOD Title:   Complete banner
*  MOD Version: 1.3.5
*  Translation: French
*  Rev date:    28/04/2004
*
*  Translator:  kooky < n/a > (n/a) http://perso.edeign.com/kooky/
*
***************************************************************/

// this is the text showen in admin panel, depending on your template layout,
// you may change the text, so this reflect the placement in the templates
// these are only exampels, you may add more or remove some of them.

$lang['Banner_spot']['0'] = 'Banni�re principale'; // used for {BANNER_0_IMG} tag in the template files
$lang['Banner_spot']['1'] = 'Haut gauche 1'; // used for {BANNER_1_IMG} tag in the template files
$lang['Banner_spot']['2'] = 'Haut gauche 2'; // used for {BANNER_2_IMG} tag in the template files
$lang['Banner_spot']['3'] = 'Haut centr� 1'; // used for {BANNER_3_IMG} tag in the template files
$lang['Banner_spot']['4'] = 'Haut centr� 2'; // used for {BANNER_4_IMG} tag in the template files
$lang['Banner_spot']['5'] = 'Haut droit 1'; // used for {BANNER_5_IMG} tag in the template files
$lang['Banner_spot']['6'] = 'Haut droit 2'; // used for {BANNER_6_IMG} tag in the template files
$lang['Banner_spot']['7'] = 'Bas gauche 1'; // used for {BANNER_7_IMG} tag in the template files
$lang['Banner_spot']['8'] = 'Bas gauche 2'; // used for {BANNER_8_IMG} tag in the template files
$lang['Banner_spot']['9'] = 'Bas centr� 1'; // used for {BANNER_9_IMG} tag in the template files
$lang['Banner_spot']['10'] = 'Bas centr� 2'; // used for {BANNER_10_IMG} tag in the template files
$lang['Banner_spot']['11'] = 'Bas droit 1'; // used for {BANNER_11_IMG} tag in the template files
$lang['Banner_spot']['12'] = 'Bas droit 2'; // used for {BANNER_12_IMG} tag in the template files
$lang['Banner_spot']['13'] = 'Banni�re en haut des forums'; // used for {BANNER_13_IMG} tag in the template files
$lang['Banner_spot']['14'] = 'Banni�re en haut des sujets'; // used for {BANNER_14_IMG} tag in the template files
$lang['Banner_spot']['15'] = 'Banni�re en bas des sujets'; // used for {BANNER_15_IMG} tag in the template files
$lang['Banner_spot']['16'] = "Haut du Portail"; // used for {BANNER_16_IMG} tag in the template files
$lang['Banner_spot']['17'] = "Bas du Portail"; // used for {BANNER_17_IMG} tag in the template files
$lang['Banner_spot']['18'] = "Haut de l'index"; // used for {BANNER_18_IMG} tag in the template files
$lang['Banner_spot']['19'] = "Bas de l'index"; // used for {BANNER_19_IMG} tag in the template files
$lang['Banner_spot']['20'] = "Bloc de lien du portail 1"; // used for {BANNER_20_IMG} tag in the template files
$lang['Banner_spot']['21'] = "Bloc de lien du portail 2"; // used for {BANNER_21_IMG} tag in the template files
$lang['Banner_spot']['22'] = "Bloc de lien du portail 3"; // used for {BANNER_22_IMG} tag in the template files
$lang['Banner_spot']['23'] = "Bloc de lien du portail 4"; // used for {BANNER_23_IMG} tag in the template files

//
// please do not modify the text below (except if you are translating)
//
$lang['Banner_title'] = 'Administration des banni�res';
$lang['Banner_text'] = 'Ici, vous pouvez modifier les banni�res utilis�es sur ce site, elles peuvent �tre d�finies pour une dur�e voulue';
$lang['Add_new_banner'] = 'Nouvelle banni�re';
$lang['Banner_add_text'] = 'Ici, vous pouvez ajouter/�diter une banni�re';

$lang['Banner_example'] = 'Exemple';
$lang['Banner_example_explain'] = 'Cela pourrait �tre la mani�re dont une banni�re est affich�e.';
$lang['Banner_type_text'] = 'type';
$lang['Banner_type_explain'] = 'S�lectionner le type de lien pour votre banni�re';
//pre-defined types
$lang['Banner_type'][0] = 'Image';
$lang['Banner_type'][2] = 'Texte';
$lang['Banner_type'][4] = 'Code HTML personnalis�';
$lang['Banner_type'][6] = 'Flash';

$lang['Banner_name'] = 'Chemin de l\'image/Texte/Code';
$lang['Banner_name_explain'] = 'le chemin doit �tre relatif au r�pertoire de phpbb2 ou de l\'adresse compl�te (en incluant http://)';
$lang['Banner_size'] = 'Taille de l\'image';
$lang['Banner_size_explain'] = 'Si la taille est mise sur z�ro, l\'image sera mise par d�faut � sa taille originale (en pixels)';
$lang['Banner_width'] = 'Largeur';
$lang['Banner_height'] = 'Hauteur';

$lang['Banner_activated'] = 'Activ�e';
$lang['Banner_activate'] = 'Activer la banni�re';
$lang['Banner_comment'] = 'Commentaire';
$lang['Banner_description'] = 'Description de l\'image';
$lang['Banner_description_explain'] = 'Ce texte est affich� lorsque la souris passe au-dessus de l\'image';
$lang['Banner_url'] = 'Adresse de redirection';
$lang['Banner_url_explain'] = 'Adresse/URL du site de redirection, lors du clic avec la souris, ouverture avec http://<br />(l\'adresse de redirection sera uniquement activ�e si le type de lien est une image ou du texte)';
$lang['Banner_owner'] = 'Mod�rateur des banni�res';
$lang['Banner_owner_explain'] = 'Cet utilisateur peut g�rer la banni�re - (pas encore fonctionnel)';
$lang['Banner_placement'] = 'Placement';
$lang['Banner_clicks'] = 'Clics';
$lang['Banner_clicks_explain'] = '(le compteur sera uniquement activ� si le type de lien est une image ou du texte)';
$lang['Banner_view'] = 'Vus';
$lang['Banner_weigth'] = 'Fr�quence des banni�res';
$lang['Banner_weigth_explain'] = 'Fr�quence d\'affichage de la banni�re, relatif aux autres banni�res actives au m�me moment. (1-99)';
$lang['Show_to_users'] = 'Montrer aux utilisateurs';
$lang['Show_to_users_explain'] ='S�lectionner quels types d\'utilisateurs peuvent �tre autoris�s � voir les banni�res';
$lang['Show_to_users_select'] = 'L\'utilisateur doit �tre %s � %s'; //%s are supstituded with dropdown selections
$lang['Banner_level']['-1'] = 'Invit�';
$lang['Banner_level']['0'] = 'Enregistr�';
$lang['Banner_level']['1'] = 'Mod�rateur';
$lang['Banner_level']['2'] = 'Admin';
$lang['Banner_level_type']['0'] = '�gal';
$lang['Banner_level_type']['1'] = 'inf�rieur ou �gal';
$lang['Banner_level_type']['2'] = 'sup�rieur ou �gal';
$lang['Banner_level_type']['3'] = 'aucun';

$lang['Time_interval'] = 'Intervalle de temps';
$lang['Time_interval_explain'] = 'Appliquer uniquement � chaque date, jour de la semaine ou/et heure';
$lang['Start'] = 'd�but';
$lang['End'] = 'fin';
$lang['Year'] = 'ann�e';
$lang['Month'] = 'mois';
$lang['Date'] = 'date';
$lang['Weekday'] = 'jour';
$lang['Hour'] = 'heure';
$lang['Min'] = 'min';
$lang['Time_type'] = 'Type d\'heure';
$lang['Time_type_explain'] = 'S�lectionner si les informations sont un intervalle de temps ou une date d\'intervalle (<i>vous pourrez encore appliquer un intervalle de temps si vous s�lectionnez une dur�e voulue</i>)';
$lang['Not_specify'] = 'Non specifi�';
$lang['No_time'] = 'Aucune heure';
$lang['By_time'] = 'par heure';
$lang['By_week'] = 'par jour';
$lang['By_date'] = 'par date';

// messages
$lang['Missing_banner_id'] = 'L\'ID de la banni�re a �t� perdu';
$lang['Missing_banner_owner'] = 'Vous devez s�lectionner un propri�taire de banni�re';
$lang['Missing_time'] = 'Lorsque vous d�finissez une banni�re sur une dur�e voulue, vous devez fournir un intervalle de temps.';
$lang['Missing_date'] = 'Lorsque vous d�finissez une banni�re � partir d\'une date, vous devez au moins fournir une date et un intervalle de temps.';
$lang['Missing_week'] = 'Lorsque vous d�finissez une banni�re � partir d\'un jour de la semaine, vous devez au moins fournir un jour de la semaine et un intervalle de temps.';

$lang['Banner_removed'] = 'La banni�re a �t� supprim�e';
$lang['Banner_updated'] = 'La banni�re a �t� mise � jour';
$lang['Banner_added'] = 'La banni�re a �t� ajout�e';
$lang['Click_return_banneradmin'] = 'Cliquez %sici%s pour revenir � la gestion des banni�res';

$lang['No_redirect_error'] = 'Si votre page ne s\'affiche pas rapidement, veuillez cliquer <b><a href="%s" id="jumplink" name="jumplink">ici<a></b> pour aller � l\'adresse voulue';
$lang['Left_via_banner'] = 'Quitter via la banni�re';

$lang['Banner_filter'] = 'Filtre des banni�res';
$lang['Banner_filter_explain'] = 'Cacher cette banni�re apr�s que l\'utilisateur ait cliqu� dessus.';
$lang['Banner_filter_time'] = 'Dur�e du clic inactive';
$lang['Banner_filter_time_explain'] = 'Nombre de secondes avant que la banni�re devienne inactive apr�s qu\'un utilisateur ait cliqu� dessus. Si le filtre des banni�res est activ�, la banni�re ne sera pas affich�e � cet instant.';

?>