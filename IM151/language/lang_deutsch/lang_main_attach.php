<?php
/***************************************************************************
 *                            lang_main_attach.php [German]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     modified		    : Mahdi (08.01.2005)
 *
 *     $Id: lang_main_attach.php,v 1.27 2003/01/16 11:11:56 acydburn Exp $
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

//
// Attachment Mod Main Language Variables
//
//modified by clanpunisher
// Auth Related Entries
$lang['Rules_attach_can'] = '<b>Berechtigt f�r:</b> Dateieanh�nge';
$lang['Rules_attach_cannot'] = '<b>Nicht berechtigt f�r:</b> Dateianh�nge';
$lang['Rules_download_can'] = '<b>Berechtigt f�r:</b> Dateidownload';
$lang['Rules_download_cannot'] = '<b>Nicht berechtigt f�r:</b> Dateidownload';
$lang['Sorry_auth_view_attach'] = 'Sorry, du hast kein Recht diese Dateien herrunterzuladen noch einzusehen';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Beschreibung'; // used in Administration Panel too...
$lang['Downloaded'] = 'Heruntergeladen';
$lang['Download'] = 'Download'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Dateigr��e';
$lang['Viewed'] = 'betrachtet';
$lang['Download_number'] = '%d mal(e)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Diese Dateiendung \'%s\' ist deaktiviert, dein Anhang wird nicht angezeigt.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Verwaltung der Dateianh�nge';
$lang['Attach_posting_cp_explain'] = 'Wenn du auf "neuer Dateianhang" klickst, erscheint ein Feld zum hinzuf�gen der Anh�nge.<br />Wenn du auf bereits gepostete Anh�nge klickst, kannst du eine Liste bereits angeh�ngter Dateien einsehen und bist in der Lage diese zu bearbeiten.<br />Falls du diese ersetzen m�chtest (Upload neue Version) eines Anhangs musst du beide links anklicken. F�ge den Anhang wie gewohnt hinzu, danach klickst du nicht auf Datei Anhang hinzuf�gen sondern auf Upload Neue Version des Anhangeintrags, dass du updaten m�chtest.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Neuer Dateianhang';
$lang['Add_attachment_title'] = 'Neuer Dateianhang';
$lang['Add_attachment_explain'] = 'Wenn du keinen Dateianhang ver�ffentlichen m�chtest, lass dieses Feld leer';
$lang['File_name'] = 'Dateiname';
$lang['File_comment'] = 'Dateibeschreibung';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Dateianh�nge bearbeiten';
$lang['Options'] = 'Optionen';
$lang['Update_comment'] = 'Update Beschreibung';
$lang['Delete_attachments'] = 'L�sche Dateianhang';
$lang['Delete_attachment'] = 'L�sche Dateianhang';
$lang['Delete_thumbnail'] = 'L�sche Vorschaubild';
$lang['Upload_new_version'] = 'Lade neuere Version hoch';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s ist ein unzul�ssiger Dateiname'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Der Dateianhang ist zu gro�.<br />Konnte nicht die maximale Gr��e erhalten definiert in PHP.<br />Der Attachment Mod ist nicht imstande die maximale Uploadgr��e festzustellen, die in der php.ini definiert wurde.';
$lang['Attachment_php_size_overrun'] = 'Der Dateianhang ist zu gro�.<br />maximale Uploadgr��e: %d MB.<br />Merken Sie bitte, da� diese Gr��e in der php.ini definiert wird , dies hei�t, da� es von PHP eingestellt wird und der Attachment Mod nicht diesen Wert �berschreiten kann.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Die Erweiterung %s wird nicht erlaubt.'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Ihnen wird nicht erlaubt, Dateien mit der Verl�ngerung %s innerhalb dieses Forums bekanntzugeben'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Der Dateianhang ist zu gro�.<br />maximale Gr��e: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Sorry, aber die maximale Dateigr��e f�r alle Dateianh�nge ist erreicht. Treten Sie bitte mit dem Board- Administrator in Verbindung wenn Sie Fragen haben.';
$lang['Too_many_attachments'] = 'Der Dateianhang kann nicht hinzugef�gt werden seit die max. Anzahl der %d Dateianh�nge in diesem Beitrag erreicht wurde.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Die Dateianh�nge/Bilder m�ssen kleiner als %d Pixel gro� sein.'; 
$lang['General_upload_error'] = 'Upload Fehler: Der Dateianhang konnte nicht zu %s hochladen werden.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Du musst einen Wert in \'hinzuf�gen\' eintragen in der Dateianhang-Box';
$lang['Error_missing_old_entry'] = 'Es ist nicht m�glich den Dateianhang zu aktualisieren, der alte Dateianhang konnte nicht gefunden werden';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Sorry, aber die maximale Dateigr��e f�r alle Anh�nge in deinem PM-Fach ist erreicht worden. L�sche bitte einige von deinen empfangenen/gesendeten Dateien.';
$lang['Attach_quota_receiver_pm_reached'] = 'Sorry, aber die maximale Dateigr��e f�r alle Anh�nge im PM-Fach von \' %s \' ist erreicht worden. Informiere ihn bitte, oder warte bis er/sie einige von seinen Dateien gel�scht hat.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Du hast keine Datei f�r Download/Ansicht ausgew�hlt.';
$lang['Error_no_attachment'] = 'Die ausgew�hlte Datei existiert nicht mehr';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Bist du dir, dass du die markierte(n) Datei(n) l�schen m�chtest?';
$lang['Deleted_attachments'] = 'Die markierten Dateien wurden gel�scht';
$lang['Error_deleted_attachments'] = 'Die Dateien konnten nicht gel�scht werden.';
$lang['Confirm_delete_pm_attachments'] = 'Bist du dir sicher, dass du die markierte(n) Datei(n) aus deinem PM-Fach l�schen m�chtest?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Diese Anhangs-Funktion ist deaktiviert.';

$lang['Directory_does_not_exist'] = 'Dieses Verzeichnis \'%s\' ist nicht vorhanden oder konnte nicht gefunden werden.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Bitte �berpr�fe ob \'%s\' ein Verzeichnis ist.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Das Verzeichnis \'%s\' hat keine Schreibrechte. Du musst ein upload Verzeichnis erstellen und die Verzeichnisberechtigung auf chmod 777 ab�ndern.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Kann nicht zum FTP-Server \'%s\' verbinden. Bitte �berpr�fe die FTP-Einstellungen.';
$lang['Ftp_error_login'] = 'Kann nicht zum FTP-Server verbinden. Der Benutzername \'%s\' oder das Passwort ist falsch. Bitte �berpr�fe die FTP-Einstellungen.';
$lang['Ftp_error_path'] = 'Kein Zugang zum FTP-Verzeichnis \'%s\'. Bitte �berpr�fe die FTP-Einstellungen.';
$lang['Ftp_error_upload'] = 'Kann keine Dateien in das FTP-Verzeichnis \'%s\' hochladen. Bitte �berpr�fe die FTP-Einstellungen.';
$lang['Ftp_error_delete'] = 'Kann keine Dateien aus dem FTP-Verzeichnis \'%s\' l�schen . Bitte �berpr�fe die FTP-Einstellungen.<br />Ein anderer Grund f�r diese Fehler k�nnte das Nichtvorhandensein des Dateianhangs sein, bitte �berpr�fe das in deinem Shadow Aanhang.';
$lang['Ftp_error_pasv_mode'] = 'Aktiviere/Deaktiviere den FTP passiv-Modus';

// Attach Rules Window
$lang['Rules_page'] = 'Dateianhang- Regeln';
$lang['Attach_rules_title'] = 'Erlaubte Dateierweiterungs- Gruppen und ihre Gr��en';
$lang['Group_rule_header'] = '%s -> Maximum Upload Gr��e: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'erlaubte Dateierweiterungen  und Gr��en';
$lang['Note_user_empty_group_permissions'] = 'Hinweis:<br />Ihnen wird normalerweise erlaubt, Dateien innerhalb dieses Forums anzubringen, <br />aber keine Erweiterungs- Gruppe darf hier angebracht werden, <br />Sie sind nicht imstande, alles anzubringen. Wenn Sie es dennoch versuchen, <br />empfangen Sie eine Fehlermeldung.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Upload Quote';
$lang['Pm_quota'] = 'PM Quote';
$lang['User_upload_quota_reached'] = 'Sorry, du hast deine maximale Upload- bzw Quoten- Begrenzung auf %d %s erreicht'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Benutzer ACP';
$lang['UACP'] = 'Benutzer ACP';
$lang['User_uploaded_profile'] = 'hochgeladen: %s';
$lang['User_quota_profile'] = 'Quote: %s';
$lang['Upload_percent_profile'] = '%d%% gesamt';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Suche Anh�nge';
$lang['Test_settings'] = 'Teste Einstellungen';
$lang['Not_assigned'] = 'Nicht zugewiesen';
$lang['No_file_comment_available'] = 'Kein Dateikomentar vorhanden';
$lang['Attachbox_limit'] = 'Deine Dateianhang-Box ist zu %d%% voll';
$lang['No_quota_limit'] = 'Kein Quotenlimit';
$lang['Unlimited'] = 'Unendlich';

?>