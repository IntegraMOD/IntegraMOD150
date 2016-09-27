<?php
/***************************************************************************
 *                            lang_admin_album.php [Deutsch]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_multiple_album.' . $phpEx);
//--- Multiple File Upload mod : end

//�bersetzung by clanpunisher
//
// Configuration
//
$lang['Album_config'] = 'Album Konfiguration';
$lang['Album_config_explain'] = 'Allgemeine Einstellungen des Photo-Albums �ndern';
$lang['Album_config_updated'] = 'Album Konfiguration wurde erfolgreich �bernommen';
$lang['Click_return_album_config'] = '%sHier%s klicken um zur Album Konfiguration zur�ckzukehren';
$lang['Max_pics'] = 'Maximale Anzahl an Bildern pro Kategorie (-1 = unendlich)';
$lang['User_pics_limit'] = 'Bilderbeschr�nkung pro Kategorie und Benutzer (-1 = unendlich)';
$lang['Moderator_pics_limit'] = 'Bilderbeschr�nkung pro Kategorie und Moderator (-1 = unendlich)';
$lang['Pics_Approval'] = 'Bilder Zustimmung von';
$lang['Rows_per_page'] = 'Reihenanzahl auf der Thumbnailseite';
$lang['Cols_per_page'] = 'Spaltenanzahl auf der Thumbnailseite';
$lang['Thumbnail_quality'] = 'Thumbnail Qualit�t (1-100)';
$lang['Thumbnail_cache'] = 'Thumbnail Cache';
$lang['Manual_thumbnail'] = 'Manuelles Thumbnail';
$lang['GD_version'] = 'Optimiert f�r die GD Version';
$lang['Pic_Desc_Max_Length'] = 'Bilderbeschreibung/Maximale Kommentarl�nge (bytes)';
$lang['Hotlink_prevent'] = 'Direktlink Schutz';
$lang['Hotlink_allowed'] = 'Berechtigte domains f�r Direktlinks (durch Kommata getrennt)';
$lang['Personal_gallery'] = 'Benutzer d�rfen eine Benutzer-Galerie erstellen';
$lang['Personal_gallery_limit'] = 'Bilderbeschr�nkung pro Benutzer-Galerie (-1 = unendlich)';
$lang['Personal_gallery_view'] = 'Wer darf eine Benutzer-Galerie betrachten';
$lang['Rate_system'] = 'Bewertung zulassen';
$lang['Rate_Scale'] ='Bewertungspunkte';
$lang['Comment_system'] = 'Kommentare zulassen';
$lang['Thumbnail_Settings'] = 'Thumbnail Einstellungen';
$lang['Extra_Settings'] = 'Extra Einstellungen';
$lang['Default_Sort_Method'] = 'Sortieren nach';
$lang['Default_Sort_Order'] = 'Auf- oder Absteigende Sortierung';
$lang['Fullpic_Popup'] = 'Originalbild als Popup anzeigen';


// Personal Gallery Page
$lang['Personal_Galleries'] = 'Benutzer-Galerien';
$lang['Album_personal_gallery_title'] = 'Benutzer-Galerie';
$lang['Album_personal_gallery_explain'] = 'Auf dieser Seite kannst du, Benutzergruppen angeben die Rechte zum erstellen und betrachten der Benutzer-Galerien haben d�rfen. Diese Einstellungen werden nur dann �bernommen, wenn du in der Konfiguration des Photo-Albums weiter unten bei dem Puknten "Benutzer d�rfen eine Benutzer-Galerie erstellen" bzw. "Wer darf eine Benutzer-Galerie betrachten" auf "Privat" eingestellt hast.';
$lang['Album_personal_successfully'] = 'Die Einstellungen wurden erfolgreich �bernommen';
$lang['Click_return_album_personal'] = 'Klicke %sHier%s um zu den Einstellungen der Benutzer-Galerie zur�ckzukehren';

//
// Categories
//
$lang['Album_Categories_Title'] = 'Album Kategorie Kontrolle';
$lang['Album_Categories_Explain'] = 'Auf dieser Seite kannst du deine Kategorie managen wie z.b. erstellen, bearbeiten, l�schen, sortieren, usw.';
$lang['Category_Permissions'] = 'Kategorie Berechtigungen';
$lang['Category_Title'] = 'Kategorie Titel';
$lang['Category_Desc'] = 'Kategorie Beschreibung';
$lang['View_level'] = 'Wer darf betrachten';
$lang['Upload_level'] = 'Wer darf uploaden';
$lang['Rate_level'] = 'Wer darf ein Rating abgeben';
$lang['Comment_level'] = 'Wer darf kommentieren';
$lang['Edit_level'] = 'Wer darf editieren';
$lang['Delete_level'] = 'Wer darf l�schen';
$lang['New_category_created'] = 'Die neue Kategorie wurde erfolgreich erstellt';
$lang['Click_return_album_category'] = '%sHier%s klicken um zum Album Kategorien Kontrolle zur�ckzukehren';
$lang['Category_updated'] = 'Diese Kategorie wurde erfolgreich ubernommen';
$lang['Delete_Category'] = 'Kategorie l�schen';
$lang['Delete_Category_Explain'] = 'Auf dieser Seite kannst du eine Kategorie l�schen und bestimmen wohin die Bilder sortiert werden sollen';
$lang['Delete_all_pics'] = 'Alle Bilder l�schen';
$lang['Category_deleted'] = 'Diese Kategorie wurde erfolgreich gel�scht';
$lang['Category_changed_order'] = 'Diese Kategorie wurde erfolgreich geordnet';

//
// Permissions
//
$lang['Album_Auth_Title'] = 'Album Berechtigungen';
$lang['Album_Auth_Explain'] = 'Hier kannst du bestimmen welche Benutzergruppe(n) Moderatoren f�r die jeweilige Albums Kategorie sein d�rfen bzw ob sie nur privaten Zugang haben d�rfen';
$lang['Select_a_Category'] = 'Kategorie ausw�hlen';
$lang['Look_up_Category'] = 'Kategorie betrachten';
$lang['Album_Auth_successfully'] = 'Berechtigungen wurden erfolgreich upgedated';
$lang['Click_return_album_auth'] = '%sHier%s klicken um zu den Album Berechtigungen zur�ckzukehren';

$lang['Upload'] = 'Upload';
$lang['Rate'] = 'Rating';
$lang['Comment'] = 'Kommentar';
$lang['View'] = 'View';

//
// Clear Cache
//
$lang['Clear_Cache'] = 'Cache l�schen';
$lang['Album_clear_cache_confirm'] = 'Wenn du in der Konfiguration des Photo Albums die Einstellungen deines Thumbnails ge�ndert und den Thumbnail Cache aktiviert hast,<br />musst du den Thumbnail Cache l�schen, damit neue erstellt werden k�nnen.<br /><br /> Willst du den Cache nun l�schen?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Dein Thumbnail Cache wurde erfolgreich gel�scht<br />&nbsp;';

/* BSRA Album Hierarchy Mod v1.0  START */
$lang['Parent_Category'] = 'Erwachsenen Kategorie (f�r diese Kategorie)';
$lang['Child_Category_Moved'] = 'Ausgew�hlte Kategorie Seleted category had child categories. The child categories got moved to the <B>%s</B> category.';
/* BSRA Album Hierarchy Mod v1.0 STOP  */
?>
