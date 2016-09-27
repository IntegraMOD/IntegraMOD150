<?php
/***************************************************************************
 *                        lang_smilies_upload.php [German]
 *                            -------------------
 *   begin                : Tuesday, Aug 19, 2003
 *   version              : 1.1.0
 *   date                 : 2003/08/27 19:12
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] .= '';

if ( defined('IN_SMILIESUPLOAD_LANG') )
{
	return;
}
define('IN_SMILIESUPLOAD_LANG', true);

$lang['SU_Upload_Smilies'] = 'Smilies hochladen';
$lang['SU_Upload_Explain'] = 'Du kannst dieses Programm verwenden um ein kleines Bild als Smilie oder Emoticon hochzuladen. Es kann nur eine Datei (Bild) aufeinmal hochgeladen werden und die Dateigr��e (das Bild) darf nicht gr��er als %s KB sein. Die Maximalh�he und Breite betr�gt %s x %s.';
$lang['SU_File'] = 'Bild von deinem Rechner hochladen';
$lang['SU_Sorry'] = 'Sorry, du kannst keine Dateien hochladen.';
$lang['SU_Upload_Name'] = 'Name f�r die hochgeladene Datei';
$lang['SU_Default_Name'] = 'Original Dateinamen verwenden';
$lang['SU_Name_Explain'] = 'Gib einen Namen f�r die hochgeladene Datei an. F�ge bitte keine Dateiendung mit an! (benutze z.B. "apfel", nicht "apfel.gif").';
$lang['SU_Upload_Succesful'] = 'Datei erfolgreich hochgeladen!';
$lang['SU_Upload_Failed'] = 'Datei hochladen fehlgeschlagen! Vergewissern Sie sich, dass die Rechte vom smilies Verzeichnis, auf Akten zu schreiben, erlaubt sind. (chmod 777)';
$lang['SU_Auto_Add'] = 'Automatisch hinzuf�gen zum Forum Smilies';
$lang['SU_Add_Successful'] = 'Smilies erfolgreich in die Datenbanktabelle eingef�gt!';
$lang['SU_Add_Failed'] = 'Die Smilies konnten nicht in der Datenbanktabelle eingef�gt werden!';
$lang['SU_filetype'] = 'Nur Dateien mit der endung JPEG, GIF oder PNG k�nnen hochgeladen werden.';
$lang['SU_filesize'] = 'Nur Dateien die kleiner als %s KB sind k�nnen hochgeladen werden.';
$lang['SU_File_Already'] = 'Eine Datei mit diesem Namen existiert bereits im Smilie Verzeichnis';
$lang['SU_CC_Fail'] = 'Konnte nicht �berpr�fen ob dieser Smiliecode schon existiert.';
$lang['SU_CC_Found'] = 'Es gibt schon einen Smilie mit dem automatisch entschlossen code.';
$lang['SU_Filename_failed'] = 'Konnte keinen neuen Dateinamen bestimmen';
$lang['SU_open_basedir'] = 'open_basedir ist gesetzt und deine PHP Version erm�glicht move_uploaded_file nicht.';
$lang['SU_Uploaded'] = 'Hochgeladene Smilies';
$lang['SU_Sorry_None'] = 'Du hast keine Smilies hochgeladen.';
$lang['SU_Delete_Successful'] = 'Datei %s gel�scht!';
$lang['SU_Delete_Failed'] = 'Konnte die Datei %s nicht l�schen!';
$lang['SU_Select_file'] = 'Bitte w�hle eine Datei zum hochladen!';
$lang['SU_CD_Fail'] = 'Konnte keine Eintr�ge in der Smilie-Datenbank l�schen';
$lang['SU_CD_Successful'] = 'Gel�schte Eintr�ge in der Smilie-Datenbank';
$lang['SU_Width_height'] = 'Diese Datei �berschreitet die Maximalgr��e. Die Bilder d�rfen nicht breiter als %s und h�her als %s sein.';
$lang['SU_No_Name'] = 'Du hast keinen Namen f�r die hochgeladene Datei angegeben.';

?>