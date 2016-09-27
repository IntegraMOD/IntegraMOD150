<?php
/***************************************************************************
 *						lang_extend_lang_extend.php [English]
 *						-------------------------------------
 *	begin				: 29/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 16/10/2003
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

/***************************************************************************
 *
 *   german translation	:		clanpunisher
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking Versuch");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_lang_extend'] = 'Erweiterung f�r Sprachpakete';
	$lang['Lang_extend__custom'] = 'Angepasstes Sprachpaket';
	$lang['Lang_extend__phpBB'] = 'phpBB Sprachpaket';

	$lang['Languages'] = 'Sprachpakete';
	$lang['Lang_management'] = 'Management';
	$lang['Lang_extend'] = 'Spracherweiterungen Management';
	$lang['Lang_extend_explain'] = 'Hier kannst du Schl�sseleintr�ge zu den Sprachen hinzuf�gen oder bearbeiten.';
	$lang['Lang_extend_pack'] = 'Sprachpaket';
	$lang['Lang_extend_pack_explain'] = 'Dies ist der Name des Sprachpakets, das normalerweise auf den MOD verweisst.';

	$lang['Lang_extend_entry'] = 'Schl�sseleintrag';
	$lang['Lang_extend_entries'] = 'Schl�sseleintr�ge';
	$lang['Lang_extend_level_admin'] = 'Admin';
	$lang['Lang_extend_level_normal'] = 'Normal';

	$lang['Lang_extend_add_entry'] = 'F�ge einen neuen Schl�sseleintrag hinzu';

	$lang['Lang_extend_key_main'] = 'Prim�r Schl�sseleintrag';
	$lang['Lang_extend_key_main_explain'] = 'Dies ist der HHauptschl�ssel, normalerweise der einzigste';
	$lang['Lang_extend_key_sub'] = 'Sekund�r Schl�sseleintrag';
	$lang['Lang_extend_key_sub_explain'] = 'Der Sekund�re Schl�sseleintrag wird gew�hlich nicht gebraucht';
	$lang['Lang_extend_level'] = 'Recht des Schl�sseleintrags';
	$lang['Lang_extend_level_explain'] = 'Die Adminrechte k�nnen nur im Admin Konigurations-Panel benutzt werden. Normale Rechte k�nnen �berall benutzt werden.';

	$lang['Lang_extend_missing_value'] = 'Du musst mind. einen Englischen Begriff angeben.';
	$lang['Lang_extend_key_missing'] = 'Der Prim�re Schl�sseleintrag wurde nicht angegeben';
	$lang['Lang_extend_duplicate_entry'] = 'Dieser Eintrag existiert bereits (siehe Paket %)';

	$lang['Lang_extend_update_done'] = 'Der Eintrag wurde erfolgreich aktualisiert.<br /><br />Klicke %shier%s um zum Eintrag zur�ckzukehren.<br /><br />Klicke %shier%s um zu der Eintragsliste zur�ckkehren';
	$lang['Lang_extend_delete_done'] = 'Der Eintrag wurde erfolgreich gel�scht.<br />Beachte: Nur die angepassten Eintr�ge wurden gel�scht, nicht die Grundeintr�ge falls vorhanden.<br /><br />Klicke %shier%s um zu der Eintragsliste zur�ckzukehren';

	$lang['Lang_extend_search'] = 'Suche in den Schl�sseleintr�gen';
	$lang['Lang_extend_search_words'] = 'W�rter die gefunden werden';
	$lang['Lang_extend_search_words_explain'] = 'W�rter durch Leertaste trennen';
	$lang['Lang_extend_search_all'] = 'Alle W�rter';
	$lang['Lang_extend_search_one'] = 'Eines dieser';
	$lang['Lang_extend_search_in'] = 'Suche in';
	$lang['Lang_extend_search_in_explain'] = 'Suche genauer definieren';
	$lang['Lang_extend_search_in_key'] = 'Schl�ssel';
	$lang['Lang_extend_search_in_value'] = 'Werte';
	$lang['Lang_extend_search_in_both'] = 'Beide';
	$lang['Lang_extend_search_all_lang'] = 'Alle installierten Sprachen';

	$lang['Lang_extend_search_no_words'] = 'No words to search provided.<br /><br />Click %sHere%s to return to the pack list.';
	$lang['Lang_extend_search_results'] = 'Suchergebins';
	$lang['Lang_extend_value'] = 'Wert';
	$lang['Lang_extend_level_leg'] = 'Recht';

	$lang['Lang_extend_added_modified'] = '*';
	$lang['Lang_extend_modified'] = 'Bearbeitet';
	$lang['Lang_extend_added'] = 'Hinzugef�gt';
}

?>