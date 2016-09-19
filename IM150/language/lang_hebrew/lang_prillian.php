<?php
/***************************************************************************
 *                          lang_prillian.php [English]
 *                            -------------------
 *   begin                : Friday, Jan 31, 2003
 *   version              : 0.7.0
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
//
// This is optional, if you would like a _SHORT_ message output
// along with the phpBB copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = '';

// Do not change the next six lines.
// Avoid including the file more than once.
if ( defined('IN_PRILLIAN_LANG') )
{
	return;
}
define('IN_PRILLIAN_LANG', true);

// You may want to edit the following lines to match your website.
$lang['Launch_Prillian'] = '���� �� Prillian';  // Link for opening the IM Client
$lang['Prillian_FAQ'] = '������ �������';   // Title of the IM FAQ
$lang['Prillian'] = 'Prillian';  // Name of Prillian, used throughout the scripts

$lang['New_ims'] = '�� �� %d ������ ������� �����'; // You have 2 new IMs
$lang['New_im'] = '�� �� ����� ������ ����'; // You have 1 new IM
$lang['Unread_ims'] = '�� �� %d ������ ������� ��� �����'; // You have 2 new IMs
$lang['Unread_im'] = '�� �� ����� ������ ��� �����'; // You have 1 new IM

// Main IM Client/Who's Online window
$lang['Users_Online'] = '������� �������';
$lang['Buddies_Online'] = '����� �������';
$lang['Hidden_Users_Online'] = '������� ������� �������';
$lang['Guests_Online'] = '������ �������';
$lang['Close_windows'] = '���� ������';
$lang['Send_im'] = '��� ����� ������';
$lang['IM'] = '����� ������';
$lang['PM'] = '����� �����';
$lang['New_messages'] = '������ ����� ���� �����';


// Controls panels
$lang['Controls'] = '�����';
$lang['Check_IMs'] = '���� ������� �������';
$lang['Message_Log'] = '���� ������';
$lang['Alt_Message_Log'] = '��� ���� ������';
$lang['Alt_New_Messages'] = '���� ������� �����';
$lang['Alt_Home'] = '���� ��������';
$lang['Alt_Close_Windows'] = '���� �� �� ������� �������';
$lang['Alt_Prefs'] = '���� ������ ' . $lang['Prillian'];
$lang['Alt_Logout'] = '����� �������� �- ' . $lang['Prillian'];
$lang['Prillian_Help'] = '����';


// Sending/replying
$lang['phpBB_IM_default_subject'] = $lang['Message'];
$lang['Send_new_im'] = '��� ����� ������ ����';
$lang['Select_emoticon'] = '��� �������';
$lang['Save_reply_pm'] = '���� ����';
$lang['Save_close_pm'] = '���� �����';
$lang['Delete_reply_pm'] = '��� ����';
$lang['Delete_close_pm'] = '��� �����';
$lang['IM_Quick_reply'] = '����� �����';


// Error messages
$lang['Close_window_link'] = '<br /><br /><a href="javascript:window.close();">' . $lang['Close_window'] . '</a>';
$lang['IM_disabled'] = '�����, ��� ������� �������� ������ ������ ��.';
$lang['Ims_not_allowed'] = '�����, ��� ������� �������� ������ ������ ����� ��.';
$lang['Ims_not_allowed_fail'] = '�� ���� ����� �� ������� �������� ������ ����� �����.';
$lang['Cannot_send_im'] = '�����, ��� ������� �������� ������ ������ ���. �� ����� �� ������� ��������, ��� ���� ������ ���� � %s������%s ���.';
$lang['Cannot_send_im_admin'] = '�����, ��� ������� �������� ������ ������ ��� ��-��� ����� �����.';
$lang['Please_set_im_prefs'] = '����� �� ���� �� ������ ������� �������� ���. �� ��� ����� ��� ����� ��� %s���%s.';
$lang['Admin_override'] = '�����, ��� ����� ����� �� ������ ��� ���� ������ �� ������ �������� �� ������ ����� ���������. ��� �� ���� ����� �� ������� ��� ���� �������� ���������� ������.';
$lang['Too_many_ims'] = '�����, ��� ����� ����� ���� ���� ��� ������ ������� �������� ��. ��� ��� ����� ����.';
$lang['No_autoclose'] = '�� ��� ���� ����� ��, �� ������ ����� ����� �������� �� ' . $lang['Prillian'] . ' �� ���� �� ������ ���. ����� �������� ������ ����� ��-JavaScript �� ������ ��� ����. ��� ���� ���� ��.';
$lang['User_no_im'] = '��� �� ���� ����� ����� ������ ����� �����. ';
$lang['No_im_reply_info'] = '�� ���� ���� �� ���� ������. �� ����� ���� ������� ��� ����� ��������.';
$lang['No_Admins_Found'] = '�� ���� ����� �� ������� ������� �� ������ ����� �������.';
$lang['No_post_type'] = '�� ���� ����� �� ��� ������.';
$lang['Admin_no_user_from'] = '�� ���� ����� ���� ���� ����.';
$lang['Admin_no_user_to'] = '�� ���� ����� ���� ���� ����.';


// Site to Site
$lang['IM_no_users_online'] = '��� ������� �������.';
$lang['Online_at'] = '������� ������� � ';
$lang['User_from'] = '����� � ';


// Admin Site to Site
$lang['URL'] = '�����';
$lang['Extension'] = '����� �����';
$lang['Profile_path'] = '���� �������';
$lang['Extension_explain'] = '���� "php" ��-��� ����� ����';
$lang['Profile_path_explain'] = '���� "������" �� ��� ����� ����';


// Preferences editor
$lang['Prillian_Profile_updated'] = '������� ��� ������ ������.<br /><br />�� ����, ��� %s���%s ��� ����� ���� �� ���� ������� ��������.';

$lang['User_allow_ims'] = '���� ����� ������ ������� ������ ��';
$lang['User_allow_shout'] = '���� ������ ����� ������';
$lang['User_allow_chat'] = '���� ������ ����� ��\'��';
$lang['Always_add_sig_explain'] = '�� ������� ���� ����� ������� ���';
$lang['Refresh_rate'] = '��� ����� ���� ����';
$lang['Refresh_rate_explain1'] = '���� ����� ��� ������� ����� ������� ��������.';
$lang['Refresh_rate_explain2'] = '��� ��� ������� ����� ������� ��������.';
$lang['Success_close'] = '���� ������ ����� �������� ���� ����� �����';
$lang['Refresh_method'] = '��� ���� ����� ���� ������ �������';
$lang['Refresh_method_explain'] = '����� ����� �����';
$lang['JavaScript'] = 'JavaScript';
$lang['META_tag'] = '�� META'; 
$lang['Use_both_methods'] = '����� ������';
$lang['IM_auto_launch_pref'] = '���� ���� ���� ���� ���� ������� ������'; 
$lang['IM_auto_popup'] = '��� �������� ������ �����';
$lang['IM_list_new'] = '����� ������ ����� ��� ����� ����� �����';
$lang['Show_controls'] = '���� ��� �����';

// Do not change the [0], [1], etc. parts of the following
$lang['Controls_select'][0] = '�� ������';
$lang['Controls_select'][1] = '������� ����';
$lang['Controls_select'][2] = '�������� ����';
$lang['Controls_select'][3] = '�����';
$lang['Who_to_list'] = '����� ���� �������� ����� �����';
$lang['Online_Lists'][1] = '�� �������� ��������';
$lang['Online_Lists'][2] = '����� ��������';
$lang['Online_Lists'][3] = '����� ������� �������';
$lang['Online_Lists'][4] = '�� �������� ������� �������';

// Include any options you want in the refresh rate drop down list here
// They should be in this format:
// $lang['Refresh_times']['number of seconds'] = 'name in list';
// The number of seconds can be no longer than 5 digits, unless you alter
// the im_prefs database table.
$lang['Refresh_times'][60] = '���';
$lang['Refresh_times'][120] = '2 ����';
$lang['Refresh_times'][180] = '3 ����';
$lang['Refresh_times'][240] = '4 ����';
$lang['Refresh_times'][300] = '5 ����';

$lang['IM_play_sound'] = '���� ���� ������� �����';
$lang['Default_sound'] = '����� ����� ����� ����� �� ������';
$lang['Current_sound'] = '���� ��� �����';
$lang['IM_style'] = '����� ������ ��-��� ' . $lang['Prillian'];
$lang['Width'] = '����';
$lang['Height'] = '����';
$lang['Read_Message'] = '��� �����';
$lang['Send_Message'] = '��� �����';
$lang['Set_window_sizes'] = '��� ���� ����';
$lang['Set_window_sizes_explain'] = '�� ������ ��������';
$lang['Open_pms'] = '��� �/�� ����� ������ ������';
$lang['Auto_delete_ims'] = '���� ����� �������� �� ������ ������� ������ ������ �� ���� ������ �������';

// Admin preferences editor
$lang['Admin_allow_ims'] = '���� ������ ����� ����� ������ �������';
$lang['Admin_allow_shout'] = '���� ������ ������ ����� ������';
$lang['Admin_allow_chat'] = '���� ������ ������ ����� ��\'��';
$lang['IM_user_auto_launch'] = '���� ���� �������� ���� ������ ������ ������� ������ ��������';
$lang['Admin_user_added'] = '������ ���� ������� ���� �������.';
$lang['Admin_Set_window_sizes'] = '��� ���� ���� ����� ����';


// Admin Configuration
$lang['IM_auto_launch'] = '���� ���� �������� ���� ������� ������� ����� ������� ������'; 
$lang['IM_box_limit'] = '������ ������� ������� ��� �����';
$lang['IM_enable_flood'] = '���� ���� ����';
$lang['IM_override_settings'] = '���� �� ������ ������';
$lang['IM_override_settings_explain'] = '����� �� ����� �� ������ ������ ������ ������� ����� �� ������ ������� ��������� ���';
$lang['IM_enable_ims'] = '���� ����� ������ �������';
$lang['IM_enable_shoutbox'] = '���� ���� ������';
$lang['IM_enable_chatbox'] = '���� ���� �\'��';
$lang['IM_refresh_drop'] = '����� ������ ����� ������ ��� ������ �� ������';
$lang['IM_sound_name'] = '����� ���� ����';
$lang['IM_allow_sound'] = '���� �������� ������ ���� ���� ���� ������ �����';
$lang['IM_default_sound'] = '���� �������� ������ ���� �����';
$lang['IM_allow_different_style'] = '���� ' . $lang['Prillian'] . ' ������ ������ ���� ������� �� ��� ������';
$lang['Prillian_Config'] = '������ ������ �� ' . $lang['Prillian'];
$lang['Prillian_Config_explain'] = '����� ��� ����� �� ����� �� �� �������� ������ �������. �� ������ ��� ������ ������ ����� ���� ��������� �����. ������� ����� ������, ����� �������� �������� ������ �����.';
$lang['IM_session_length'] = '���� ���� ������ �� ���� ������� ��������';
$lang['IM_session_length_explain'] = '����� �� ������ ��� ����� �� ������ ���� ������. �� ����� ����� ��� ����� ���� ���� ������.';
$lang['IM_enable_imbox_limit'] = '���� �� ������ �� ����� �� ������� �������� ��� �����';


// Message Log
$lang['Messages_Sent_by'] = '������ ������ ��-��� ';
$lang['Messages_Received_by'] = '������ ������� ��-��� ';
$lang['Offsite_Messages_Sent_by'] = '������ ������ ���� ���� ��-��� ';
$lang['Offsite_Messages_Received_by'] = '������ ������� ���� ���� ��-��� ';
$lang['Received'] = '������';
$lang['Offsite_Received'] = '������ ���� ����';
$lang['Offsite_Sent'] = '����� ���� ����';
$lang['No_sent'] = '��� ������ �������� ������ ���.';
$lang['No_received'] = '��� ������ �������� ������� ���.';
$lang['Message_Log_admin_explain'] = '��� ��� ���� ����� �� ������� �������� ������ ������� ��-��� �������� ���.';



/* Entries Added in 0.7.0 */
$lang['Prill_new_posts'] = '������ ��� ������ ������';
$lang['No_prill_config'] = '�� ���� ����� ������ ����� ������ Prillian';
$lang['No_prill_prefs'] = '�� ���� ����� ������ ����� ������� �� ������� ��������';
$lang['No_prill_userprefs'] = '������ �� ���� ����� ������� �� ������� ��������';
$lang['Not_authed_im_delete'] = '�����, ��� �� ���� ����� ������ �����.';
$lang['Back_to_log'] = '%s���� ����� �������%s';
$lang['Mini_Client_Window'] = '��� ���� ���';
$lang['Use_frames'] = '����� ������� ����� ������� ��������';
$lang['Use_frames_explain'] = '����� ������� ���� �� ������ ���� ����� ������ �����.';
$lang['Use_frames_explain_admin'] = $lang['Use_frames_explain'] . ' �� ���� ����� �� �� ��� ����� ������ ��� ���� ����.';
$lang['Default_mode'] = '��� ������ ���� ����� ������� �������� �����';

// Do not change the [0], [1], etc. parts of the following
$lang['Default_mode_select'][0] = '��� ����� ������';
$lang['Default_mode_select'][1] = '��� ����';
$lang['Default_mode_select'][2] = '��� ���';

//Be careful! Do not uncomment the next line!
//$lang['Default_mode_select'][3] = 'Mini Mode';
$lang['Size'] = '����';
$lang['Color'] = '���';
$lang['Enabled_explain'] = '�� ���� ���, �������� ��� �� ����� ����� �� ��� ��.';
$lang['Profile_path_ex_expanded'] = '���� �� ����� ����� profile.php ���, ����� ������� ������ �� ��������. �� ������ ������� ������ �������� �� ������ ���� ���� �������� ��� ����� ����� �������� ����� ���. �� ����� �� ����� �����, ����, ����� �-"profile" ����� �-"profile.php"';
$lang['Network_autodetect'] = '����� ������� �� ��� ���';
$lang['Network_autodetect_explain'] = '���� �� ������ �� ������ ����, �-Prillian ���� ������ �-Prillian ������ ����� ������. �� ������ �����, Prillian ���� ������ �������� �� ���� ��� ������ ���� ���.<br /><br />���� ����� ������, ���� ���� ������ �� http:// �� ftp:// ������ ��� ����. ��� ���� ����� �����. �� ���� �����:<br />http://darkmods.sourceforge.net/mb/<br /><br />��� �� ����� ������:<br />darkmods.sourceforge.net/mb/<br />http://darkmods.sourceforge.net/<br />darkmods.sourceforge.net/mb<br />http://darkmods.sourceforge.net/mb/imclient.php<br />http://darkmods.sourceforge.net/mb/imclient.php/';
$lang['No_allow_url_fopen'] = '������ �-PHP �� allow_url_fopen ������� �������. �� ���� ������� �-PHP �� ������ ������ ������ ������. ������ ���, ��� �� ���� ������ ������ ����. ����� �� ����� ������ ��, ��� �� ���� ��� ���� ���� ���. �� ��� ���� ��� ����� ���� ����, ���� �� <a href="http://www.php.net/manual" target="_blank">����� �-PHP</a>, ������ ����� �������.<br /><br />���� ���� ���� ����� ��, ��� ���� ����� �� ������ ���� ������� �-Prillian ��� ������ �� ������ �-Prillian. ��� ���� ������ �� ������ ���� ����� ���� �� ����.';
$lang['ND_cannot_add'] = '���� ������ ������ �� ���� ������� ���� ���.';
$lang['ND_no_connect'] = '������ �� ���� ������ ���� ����� ����� ����� ��:';
$lang['ND_no_connect_explain'] = '��� ���� ������ �� ������ ����� �����, ����� ������ �� http:// �� ftp://. �� ���� ����� ����. �� ��� ��, ��� ��� ����� ����.<br /><br />�� ������ ����� ����� ����, ���� ������ ���� �� Prillian �� ������ ����� �����. ' . $lang['ND_cannot_add'];
$lang['ND_disabled'] = '������ ���� ���� ���� �����. ' . $lang['ND_cannot_add'];
$lang['ND_connected'] = '������ ����� ���� ����� ������!';
$lang['ND_enabled'] = '������ ���� ���� ���� �����.';
$lang['ND_version'] = '����� ���� �� Prillian ������ ���� �����, �� ����� ����� ������� ��� ����� ��� ������� ���� �����. ��� ����� ����� �� ����� ������� ���� ��.';
$lang['ND_060'] = '������ ���� �-Prillian 0.6.0 ����� ���� �����. Prillian 0.6.0 �� ���� ������ �������, ������� �� ���� ������ ��� �� ���� ���. ��� ���� ������ ���� �����, �� ��� ����. ��� ���� �� ����� �� ����� ����� �� ���� ����� ����� ����� ������� �� Prillian.';
$lang['ND_Unnamed_Site'] = '���� ������ ��� ��';
$lang['ND_data_error'] = '���� ��� ����� �� ����� ������ �������� ������ �� ��� ���� �����, �� ���� ������ ���� ��� ���� ���� �� ��� ��� ����� ������ ���� �����. ��� ���� ����� �� ����� ��� ���� ������ ���� ����� ����. ������ ����� ����� ���� ���� ��� ���� �� ���� ���.';
$lang['ND_Added_Success'] = '���� ���� ������ ���� ���!';
$lang['Allow_mode_switch'] = '���� �������� ����� ���� ���� ������ �������';

// These three will be used when there are images for the mode switches
//$lang['Alt_Main_Mode'] = 'Switch IM Client to Main Mode';
//$lang['Alt_Wide_Mode'] = 'Switch IM Client to Wide Mode';
//$lang['Alt_Mini_Mode'] = 'Switch IM Client to Mini Mode';
$lang['Alt_Main_Mode'] = '��� ����';
$lang['Alt_Wide_Mode'] = '��� ���';
$lang['Alt_Mini_Mode'] = '��� ���';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';

// Adapted from Enhanced Admin User Lookup
$lang['User_lookup_explain'] = '��� ���� ���� ������� ��-��� ���� ��� �� ���� �� ��������� ����. ��� ������ ������ ������, �� ������� ��������.';
$lang['One_user_found'] = '�� ����� ��� ����, ��� ����� ����� �����';
$lang['Click_goto_prefs'] = '��� %s���%s ��� ����� �� ������ ������';
$lang['Click_goto_log'] = '��� %s���%s ��� ����� ������� ������';
$lang['User_joined_explain'] = '������ ������� ���� �������� �� PHP <a href="http://www.php.net/strtotime" target="_other">strtotime()</a>';
$lang['Click_return_perms_admin'] = '��� %s���%s ��� ����� ����� ����� ������';


/* Entries Changed in 0.7.0 */

// Controls panels
$lang['Alt_Contact_Man'] = '��� ������ ���'; // Was $lang['Alt_Buddy_Man']

// Preferences editor
$lang['Wide_Client_Window'] = '��� ���� ���'; // Was $lang['Whos_Online_Window']
$lang['Main_Window'] = '��� ���� ����';

/* Any of these that have network in the $lang['name'] part used to have s2s in
 place of network. In some, that is the only change */
// Network Messaging
$lang['Network_disabled'] = '�����, ��� ������ ���� ���� ������ ��.';
$lang['Network_no_username'] = '������ ���� �� ���� �� �� ������ �� �-id �� ������ ���.';
$lang['Network_no_siteurl'] = '������ ���� �� ���� �� ����� ���� �� ���� ����� ��� ���� �� ������.';
$lang['Network_no_siteid'] = '������ ���� �� ���� �� �-id �� ���� ����� ��� ���� �� ������.';
$lang['Network_Users_online'] = '������� ������� ������ �����';
$lang['No_network_type'] = '�� ���� ����� ���.';
$lang['Invalid_network_type'] = '�� ���� ����� ��� ����.';
$lang['Network_not_in_db'] = '�����, ��� ���� ��� ����� ��� ���� �� ������ ��� �� ������ ������ �������� ���� ����� ��� ���� ����� �� ������.';
$lang['Send_a_new_network'] = '��� ����� ��� ����';
$lang['Reply_to_a_network'] = '��� ������ ���';
$lang['Network_Flood_Error'] = '������ ���� �� ���� ���� �� ������ ���� ��� �� �� ��� �������. ��� ��� ���� ��� ���.';

// Admin Network Messaging
$lang['Network_title'] = '���� ������ ����';
$lang['Network_explain'] = '����� ��, ��� ���� ������, �����, ������ �� ������ ��������� ��� ������ ����� ��� ������� �� ������ ���� �� Prillian.';
$lang['Network_add'] = '���� ��� ���';
$lang['Network_del_success'] = '���� ���� ������. �������� ��� �� ������ ���� ����� �� ���� �-Prillian �� ����.';
$lang['Click_return_network'] = '��� %s���%s ��� ����� ������ ����.';
$lang['Network_config'] = '������ ����';
$lang['Network_add_success'] = '���� ���� ���� ������.';

// Admin preferences editor
$lang['Admin_allow_network'] = '���� ������ ������ ������ ����';

// Preferences editor
$lang['User_allow_network'] = '���� ����� ���� ������ ��';
$lang['Network_user_list'] = '��� ���� ����� �������� �������� ������ ������';

// Do not change the [0], [1], etc. parts of the following
$lang['network_lists'][0] = '�� �����';
$lang['network_lists'][1] = '��� �� ������� ���� ��';
$lang['network_lists'][2] = '��� ����� �������� ���� ��';

// Admin Configuration
$lang['IM_allow_network'] = '���� ����� ����� ����';
/* End of the s2s -> network changes */



/*
The following entries were removed in 0.7.0

$lang['PUU_Constant']
$lang['PPU_Constant']
$lang['PUU_Constant_explain']
$lang['PPU_Constant_explain']
*/
?>