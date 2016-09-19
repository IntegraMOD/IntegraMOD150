<?php 
/************************************************************* 
* MOD Title:   Prune users
* MOD Version: 1.4.2
* Translation: English
* Rev date:    19/12/2003 
* 
* Translator:  Niels < ncr@db9.dk > (Niels Chr. R�d) http://mods.db9.dk 
* 
**************************************************************/

/***************************************************************************
 *
 *   german translation	:		clanpunisher
 *
 ***************************************************************************/

// add to prune inactive
$lang['X_Days'] = '%d Tage';
$lang['X_Weeks'] = '%d Wochen';
$lang['X_Months'] = '%d Monate';
$lang['X_Years'] = '%d Jahre';

$lang['Prune_no_users']="Keine Benutzer gel�scht";
$lang['Prune_users_number']="Der/die folgende(n) %d Benutzer wurden gel�scht:";

$lang['Prune_user_list'] = 'Benutzer die gel�scht werden';
$lang['Prune_on_click'] = 'M�chtest du wirklich %d Benutzer l�schen?';
$lang['Prune_Action'] = 'Zur Ausf�hrung klicke den unteren Link';
$lang['Prune_users_explain'] = 'Auf dieser Seite kannst du inaktive Benutzer l�schen. Du kannst einen von 3 m�glichen Links ausf�hren: L�sche alte Benutzer die nie gepostet haben, l�sche Benutzer die sich nie eingelogt haben, L�sche Benutzer die ihren Account nicht aktiviert haben.<p/><b>Beachte:</b> Diese Aktionen kannst du nicht mehr r�ckg�ngig machen.';
$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'L�sche nicht postende Benutzer';
$lang['Prune_explain'][0] = 'Benutzer die bislang nicht einmal einen Beitrag abgegeben geschrieben haben, mit <b>Ausnahme</b> neuer Benutzer der letzten %d Tage';
$lang['Prune_commands'][1] = 'L�sche nie eingelogte Benutzer';
$lang['Prune_explain'][1] = 'Benutzer die sich noch nie eingelogt haben, mit <b>Ausnahme</b> neuer Benutzer der letzten %d Tage';
$lang['Prune_commands'][2] = 'L�sche nicht aktivierte Accounts';
$lang['Prune_explain'][2] = 'Benutzer deren Account nie aktiviert wurden, mit <b>Ausnahme</b> neuer Benutzer der letzten %d Tage';
$lang['Prune_commands'][3] = 'L�sche offline Benutzer';
$lang['Prune_explain'][3] = 'Benutzer die seit 60 Tagen nicht mehr onlien waren, mit <b>Ausnahme</b> neuer Benutzer der letzten %d Tage';
$lang['Prune_commands'][4] = 'L�sche nicht oft postende Benutzer';
$lang['Prune_explain'][4] = 'Benutzer die im Durchschnitt von 10 Tagen weniger als einen Beitrag haben, mit <b>Ausnahme</b> neuer Benutzer der letzten %d Tage'; 

?>
