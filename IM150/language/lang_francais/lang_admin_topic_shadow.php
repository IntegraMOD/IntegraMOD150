<?php
/***************************************************************************
*                            $RCSfile: lang_admin_topic_shadow.php,v $
*                            -------------------
*   copyright            : (C) 2002-2003 Nivisec.com
*   email                : support@nivisec.com
*
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

/* If you are translating this, please email a copy to me! */
/* admin@nivisec.com is fine to use */

/* General */
$lang['Del_Before_Date'] = 'Les sujets traceurs avant le %s ont �t� supprim�s<br />'; // %s = insertion of date
$lang['Deleted_Topic'] = 'Sujet traceur %s supprim�<br />'; // %s = topic name
$lang['Affected_Rows'] = '%d enregistrements concern�s<br />'; // %d = affected rows (not avail with all databases!)
$lang['Delete_From_Date'] = 'Tous les sujets traceurs cr��s avant la date saisie seront supprim�s.';
$lang['Delete_Before_Date_Button'] = 'Supprime tout avant "Date"';
$lang['No_Shadow_Topics'] = 'Aucun sujet traceur n\'a �t� trouv�.';
$lang['Topic_Shadow'] = 'Sujet traceur';
$lang['TS_Desc'] = 'Autorise la suppression des sujets traceurs sans d�truire les messages. Les sujets traceurs sont cr��s quand vous d�placez un message vers un autre forum et que vous choisissez de laisser un lien vers ce nouveau message dans le forum original.';
$lang['Month'] = 'Mois';
$lang['Day'] = 'Jour';
$lang['Year'] = 'Ann�e';
$lang['Clear'] = 'Annule';
$lang['Resync_Ran_On'] = 'Re-synchronisation effectu�e sur %s<br />'; // %s = insertion of forum name
$lang['All_Forums'] = 'Tous les forums';
$lang['Version'] = 'Version';

$lang['Title'] = 'Titre';
$lang['Moved_To'] = 'D�plac� vers';
$lang['Moved_From'] = 'D�plac� depuis';
$lang['Delete'] = 'Supprime';

/* Modes */
$lang['topic_time'] = 'Heure du sujet';
$lang['topic_title'] = 'Titre du sujet';

/* Errors */
$lang['Error_Month'] = 'Le mois doit �tre compris entre 1 et 12';
$lang['Error_Day'] = 'Le jour doit �tre compris entre 1 et 31';
$lang['Error_Year'] = 'L\'ann�e doit �tre comprise entre 1970 et 2038';
$lang['Error_Topics_Table'] = 'Erreur d\'acc�s la table des sujets';

//Special Cases, Do not change for another language
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['Nivisec_Com'] = 'Nivisec.com';



?>