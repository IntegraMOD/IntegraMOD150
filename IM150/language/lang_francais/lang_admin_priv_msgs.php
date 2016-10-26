<?php
/***************************************************************************
*                            $RCSfile: lang_admin_priv_msgs.php,v $ [French]
*                            -------------------
*   begin                : Tue January 20 2002
*   copyright            : (C) 2002-2003 Nivisec.com
*   email                : support@nivisec.com
*
*   $Id: lang_admin_priv_msgs.php,v 1.8 2003/06/26 22:33:04 nivisec Exp $
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

/* General */
$lang['Deleted_Message'] = 'Messages priv�s effac�s - %s <br />'; // %s = PM title
$lang['Archived_Message'] = 'Messages priv�s archiv�s - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = '%s ne peut pas �tre effac�, il est estampill� comme une archive<br />'; // %s = PM title
$lang['Private_Messages'] = 'Messages priv�s';
$lang['Private_Messages_Archive'] = 'Archives des messages priv�s';
$lang['Archive'] = 'Archive';
$lang['To'] = 'A';
$lang['Subject'] = 'Sujet';
$lang['Sent_Date'] = 'Date d\'envoi';
$lang['Delete'] = 'Effacer';
$lang['From'] = 'De';
$lang['Sort'] = 'Rechercher';
$lang['Filter_By'] = 'Filtrer par';
$lang['PM_Type'] = 'Type de MP';
$lang['Status'] = 'Statut';
$lang['No_PMS'] = 'aucun MP ne correspond � vos crit�res de recherche';
$lang['Archive_Desc'] = 'Les messages priv�s que vous avez d�cid� d\'archiver sont list�s ici. Les utilisateurs ne sont plus capables d\'y acc�der (exp�diteur et destinataire), mais vous pouvez les voir et les effacer � tout moment.';
$lang['Normal_Desc'] = 'Tous les messages priv�s sur votre forum peuvent �tre administr�s d\'ici. Vous pouvez lire n\'importe lequel d\'entre eux et choisir de l\'effacer ou de l\'archiver (ou de le garder, mais les utilisateurs ne peuvent plus le voir).';
$lang['Version'] = 'Version';
$lang['Remove_Old'] = 'MP orphelin:</a><span class="gensmall"> les utilisateurs qui n\'existent plus peuvent avoir laiss� des MPs derri�re eux, cliquer effacera ces MPs.</span>';
$lang['Remove_Sent'] = 'Bo�te d\'envoi des messages priv�s:</a><span class="gensmall"> les messages priv�s dans la bo�te d\'envoi sont juste des copies du m�me message qui a �t� envoy�. Ils sont rest�s stock�s dans la bo�te aux lettres de l\'exp�diteur apr�s que le destinataire l\'ait lu, il n\'est pas n�cessaire de les conserver.</span>';
$lang['Affected_Rows'] = '%d entr�es connues effac�es<br>';
$lang['Removed_Old'] = 'Tous les MPs orphelins ont �t� effac�s<br>';
$lang['Removed_Sent'] = 'Tous les MPs envoy�s ont �t� effac�s<br>';
$lang['Utilities'] = 'Utilitaires de suppression en masse';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = 'Tous types'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = 'Lire les MPs'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = 'Nouveaux MPs'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = 'MPs envoy�s'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = 'MPs sauvegard�s (entrants)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = 'MPs sauvegard�s (sortants)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = 'MPs non lus'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = 'Erreur de recherche d\'une table requise.';
$lang['Error_Posts_Text_Table'] = 'Erreur de recherche d\'une table de texte de messages priv�s.';
$lang['Error_Posts_Table'] = 'Erreur de recherche d\'une table de messages priv�s.';
$lang['Error_Posts_Archive_Table'] = 'Erreur de recherche d\'une table d\'archive de messages priv�s.';
$lang['No_Message_ID'] = 'Aucun nom d\'utilisateur n\'est sp�cifi�.';


/*Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

?>
