<?php
/***************************************************************************
 *						lang_extend_announces.php [English]
 *						-------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.0 - 28/09/2003
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
	$lang['Lang_extend_announces'] = 'Ank�ndigungs-Einstellungen';
}

$lang['Board_announcement']						= 'Board Ank�ndigungen';
$lang['announcement_duration']					= 'Ank�ndigungsdauer';
$lang['announcement_duration_explain']			= 'Dies ist die Dauer in Tagen, wie lang eine Ank�ndigung bestehen bleibt. Benutzer -1 damit diese permanent gestezt wird';
$lang['Announce_settings']						= 'Ank�ndigungen';
$lang['announcement_date_display']				= 'Zeige Datums Ank�ndigung';
$lang['announcement_display']					= 'Zeige Ank�ndigungen auf der Index';
$lang['announcement_display_forum']				= 'Zeige Ank�ndigungen auf der Index Forumen';
$lang['announcement_split']						= 'Splitte den Ank�ndigungstyp in der Board-Ank�ndigungsbox';
$lang['announcement_forum']						= 'Display the forum name under the announcement title in the board announcement box';
$lang['announcement_prune_strategy']			= 'Ank�ndigungs-Prune Vorgehen';
$lang['announcement_prune_strategy_explain']	= 'Dies ist der Typ des Ank�ndigungs-Themas nach dem es gepruned wurde';

$lang['Global_announce']						= 'Allgemeine Ank�ndigung';
$lang['Sorry_auth_global_announce']				= 'Sorry, aber nur %s kann allgemeine Ank�ndigungen posten.';
$lang['Post_Global_Announcement']				= 'Allgemeine Ank�ndigung';
$lang['Topic_Global_Announcement']				= '<b>[ Global Announcement ]</b>';

$lang['Announces_from_to']						= '(from %s to %s)';

?>