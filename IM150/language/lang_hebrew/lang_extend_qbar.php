<?php
/***************************************************************************
 *						lang_extend_qbar.php [Hebrew]
 *						--------------------
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_qbar']					= '����� Q/���� Q';

	// title
	$lang['Qbar_admin']							= '���� Q';
	$lang['Qbar_admin_explain']					= '��� ��� ���� ������ �� ����� ������ ��������� ��� �������� ���������.';
	$lang['Qbar_admin_panel']					= '��� ���� Q';
	$lang['Qbar_admin_panel_explain']			= '��� ��� ���� ����� �� ����� ���� Q ����� ����� ���� ������.';
	$lang['Qbar_admin_field']					= '��� ���� Q';
	$lang['Qbar_admin_field_explain']			= '��� ��� ���� ����� ������ ��� Q.';
	$lang['Qbar_admin_import']					= '��� ����';
	$lang['Qbar_admin_import_explain']			= '����� ������� �� ��� ����� �� ���� ����� Q ����.';
	$lang['Qbar_settings']						= '������';

	// qbar def
	$lang['Qbar_name']							= '�� ���� Q';
	$lang['Qbar_name_explain']					= '�� ���� �-Q ����� �� ���� ������ : ��� �� ������ �����.';
	$lang['Qbar_class']							= '�����';
	$lang['Qbar_class_explain']					= '����� � "����" ����� ��� ����, "�����" ������.';
	$lang['Qbar_display']						= '���';
	$lang['Qbar_display_explain']				= '��� ��� �� � "��" ��� ����� �� ���� �-q.';
	$lang['Qbar_cells']							= '������� �����';
	$lang['Qbar_cells_explain']					= '���� ������� ����� : �� ���� �������� ��� ��� ��, ���� ���� �����.';
	$lang['Qbar_in_table']						= '����� �����';
	$lang['Qbar_in_table_explain']				= '��� ������ �� � "��" ��� ����� ����� ���� ��������.';
	$lang['Qbar_style']							= '����� ������ ������';
	$lang['Qbar_style_explain']					= '�� ��� ���� ������ �����, ���� �-Q ���� �� ���� ������ ����� ������ ��.';
	$lang['Qbar_sub_template']					= '����� ���-���� �������';
	$lang['Qbar_sub_template_explain']			= '�� ��� ���� ��-����, ���� �-Q ���� �� ���� ������ ����� ���-���� ��. ����� � "���" ������ �� ���� ��� ��-���� ������, "��� ��� ����� �� ���� �-Q ��� ��-���� ���� ������ ������ ��.';

	// field def
	$lang['Qbar_field_name']					= '�� ����';
	$lang['Qbar_field_name_explain']			= '�� ���� ����� �� ���� ������ : ��� �� ���� �����.';
	$lang['Qbar_shortcut']						= '����� ���';
	$lang['Qbar_shortcut_explain']				= '����� ���� ��� �� ���� ������ �� ����� �������. ��� ���� ������ �����, �� ���� ����� ����. <br />(���� language/lang_<i>your_language</i>/lang_main.php)';

	$lang['Qbar_explain']						= '���� ����';
	$lang['Qbar_explain_explain']				= '���� ����� ���� ���� ������ ��� �� ����� ��� �� ������ �� �� ������� (������ title �� alt �� HTML). ��� ���� ������ �����, �� ���� �� ���� ����. <br />(���� language/lang_<i>your_language</i>/lang_main.php).';
	$lang['Qbar_alternate']						= '����� ��� �����';
	$lang['Qbar_alternate_explain']				= '����� ���� ������ ������ �-conjonction �� ����� ���� ����� �����, ���� ���� ������� ������ ���� �����. ��� ���� ������ ����� ����, �� ���� ����� ����. <br />(���� language/lang_<i>your_language</i>/lang_main.php).';
	$lang['Qbar_icon']							= '������';
	$lang['Qbar_icon_explain']					= '����� ������� �� ���� ����� �������. <br />(���� templates/<i>your_template</i>/<i>your_template</i>.cfg)';
	$lang['Qbar_use_value']						= '��� ����� ���';
	$lang['Qbar_use_value_explain']				= '��� �� �� ��� ���� ������ ����� ������ �����.';
	$lang['Qbar_use_icon']						= '��� ������';
	$lang['Qbar_use_icon_explain']				= '��� �� �� ��� ���� ������ ������� ������ �����.';
	$lang['Qbar_url']							= '����� �������';
	$lang['Qbar_url_explain']					= '�� ������� ����� ������� phpBB, ����� �� ������ �����, ���� ����� ������ ����.';
	$lang['Qbar_internal']						= '������ phpBB';
	$lang['Qbar_internal_explain']				= '����� "��", ������ ���� ������� phpBB, ����� �� �� ������� ���� ��� ������� ����� ������� ������ �� �-id �� ����� ������ ������.';
	$lang['Qbar_auth_logged']					= '�����';
	$lang['Qbar_auth_logged_explain']			= '��� �� ����� ����� �� ������ �� �� �� ����� ���� ����� : "�����" ���� ���� ��� ���.';
	$lang['Qbar_auth_admin']					= '��� ���� ����';
	$lang['Qbar_auth_admin_explain']			= '��� �� ����� ����� �� ������ �� �� ��� ������ ������ ����� : "�����" ���� ���� ��� ���.';
	$lang['Qbar_auth_pm']						= '����� ����� ������';
	$lang['Qbar_auth_pm_explain']				= '��� �� ����� �� ����� �� ������ �� �� ���� �� ����� ����� ������ ������ ����� : "�����" ���� ���� ��� ���.';
	$lang['Qbar_tree_id']						= '�� �����';
	$lang['Qbar_tree_id_explain']				= '��� �� ����� �� ����� �� ������ ������ ����� ������ �� ������ ������.';

	$lang['Qbar_auths']							= '�����';
	$lang['Qbar_private_messages']				= '����� ������ ������';

	// specific actions
	$lang['Qbar_delete_panel']					= '��� ���� Q';
	$lang['Qbar_delete_panel_confirm']			= '��� ���� ���� ���� ����� �� ���� �-Q <b>%s</b> ?';

	$lang['Qbar_delete_field']					= '��� �����';
	$lang['Qbar_delete_field_confirm']			= '��� ���� ���� ���� ����� �� ������ <b>%s</b> ����� �-Q %s ?';

	// error messages
	$lang['Qbar_error_panel_system']			= '��� �� ���� ����� �� ����� ����� ���� Q.';
	$lang['Qbar_error_panel_exists']			= '�� ���� �-Q ��� ����.';
	$lang['Qbar_error_panel_not_found']			= '�� ���� �-Q �� ����.';
	$lang['Qbar_error_panel_empty_name']		= '��� ���� ����� �� �� ���� �-Q.';
	$lang['Qbar_error_panel_empty_cells']		= '��� ���� ����� �� ���� ��������� ������� ��� ���� �� ��� ���� ����� �-Q ����.';

	$lang['Qbar_error_field_exists']			= '�� ���� ��� ����.';
	$lang['Qbar_error_field_not_found']			= '�� ���� �� ����.';
	$lang['Qbar_error_field_empty_name']		= '��� ���� ����� �� �� ����.';
	$lang['Qbar_error_field_system']			= '��� �� ���� ����� �� ����� ��� ������ ���� �-Q.';
	$lang['Qbar_error_field_empty_shortcut']	= '��� ���� ���� �� ����� ���� �� ��� ���� ����� ����.';
	$lang['Qbar_error_field_empty_icon']		= '��� ���� ���� �� ������� �� ��� ���� ����� ����.';
	$lang['Qbar_error_field_display_nothing']	= '��� ���� ����� ������ ������ �� ������� �� ������.';
	$lang['Qbar_error_field_empty_url']			= '��� ���� ���� �� ������ �� ������ ������ ������.';
	$lang['Qbar_error_field_external_url']		= '�� ����� ���� (http://) �� ��� ���� ������� phpBB.';

	// auths
	$lang['Qbar_auth_ignore']					= '�����';
	$lang['Qbar_auth_required']					= '����';
	$lang['Qbar_auth_prohibited']				= '����';
	$lang['Qbar_auth_pm_new']					= '������ ������ �����';
	$lang['Qbar_auth_pm_no_new']				= '��� ������ ������ �����';
	$lang['Qbar_auth_pm_unread']				= '������ ������ ��� �����';

	// classes
	$lang['Qbar_class_system']					= '�����';
	$lang['Qbar_class_bar']						= '����';
	$lang['Qbar_class_menu']					= '�����';
	$lang['Qbar_class_nav']						= '�����';
	$lang['Qbar_class_nav2']					= '����� 2';
	$lang['Qbar_class_list']					= '�����';

	// generic actions
	$lang['Create_field']						= '���� ��� ���';
	$lang['Create_panel']						= '���� ��� ���';

	// misc.
	$lang['Qbar_none']							= '---------- ��� ----------';
	$lang['Import']								= '���';
	$lang['Refresh']							= '����';
	$lang['Qbar_all']							= '---------- ��� -----------';
}

$lang['FAQ_explain']				= '����� ������.';
$lang['Memberlist_explain']			= '����� ������ �������.';
$lang['Usergroups_explain']			= '������ �� ������� ������.';
$lang['Profile_explain']			= '���� �� ������� ���.';
$lang['Private_Messaging_explain']	= '��� �� ������� ������� ���.';
$lang['Login_explain']				= '����� ��� ������ ������ �������� ������� ���.';
$lang['Register_explain']			= '�����.';
$lang['Logout_explain']				= '���� �� ������ ���.';
$lang['Admin_explain']				= '���� ���� ������ �����.';
$lang['Admin'] = 'g���� ����';
$lang['Forum']						= '�������';
$lang['Forum_index_explain']		= '������ ��������.';
$lang['Home']						= '���';
$lang['Home_explain']				= '���� ��� ����';
$lang['Album']						= '�����';
$lang['Album_explain']				= '��� ������� ������';
$lang['Calendar']					= '��� ���';
$lang['Calendar_explain']			= '���� ������� ������ ��������';
$lang['Statistics']					= '���������';
$lang['Statistics_explain']			= '��� ���������� ����';
$lang['Knowledgebase']				= '���� ������';
$lang['Knowledgebase_explain']		= '���� ������ ������ ����';
$lang['Acronyms']					= '���� �����';
$lang['Acronyms_explain']			= '��� �� ���� ������ ��� ������ ��������';
$lang['Digests']					= '�������';
$lang['Digests_explain']			= '���� ������ ����� ������� �� ��� ��';
$lang['Points_CP']					= '��� ���� �������';
$lang['Points_CP_explain']			= '�� ������ ��� ��� ����� ������';
$lang['Rules']						= '�����';
$lang['Rules_explain']				= '��� �� ���� ����';
$lang['Tour']						= '���� ������';
$lang['Tour_explain']				= '���� ������ ����';
$lang['Rate_menu']					= '������� �������';
$lang['Rate_explain']				= '������� �������� ������� ������ ��-��� ������ ������';
$lang['Ranks']						= '�������';
$lang['Ranks_explain']				= '��� ������� ������ ������';
$lang['Links']						= '�������';
$lang['Links_explain']				= '�������� �������';
$lang['Donate']						= 'Donate';
$lang['Donate_explain']				= 'Donate to '.$board_config['sitename'];
$lang['Donors']						= 'Donors';
$lang['Donors_explain']				= 'Users who have donated';
$lang['Personal_album']		= 'My Album';
$lang['Personal_album_explain']				= 'Your own personal album';
$lang['Personal_albums']		= 'Personal Albums';
$lang['Personal_albums_explain']				= 'All personal albums';
$lang['FAQ']				= 'FAQ';
$lang['Search_forums']				= 'Search Forums';
$lang['Search_forums_explain']				= 'Search through forums.';
$lang['Search_kb']				= 'Search KB';
$lang['Search_kb_explain']				= 'Search through Knowledge Base.';
$lang['Paypal_history']		= 'My PayPal History';
$lang['Paypal_history_explain']				= 'View your PayPal account history';
$lang['My_cookies']		= 'My Cookies';
$lang['My_cookies_explain']				= 'Manage your own cookies';
$lang['News_RSS']		= 'RSS Feed';
$lang['News_RSS_explain']				= 'News in RSS format';
$lang['Shoutbox']		= 'Shoutbox';
$lang['Shoutbox_explain']				= 'Full Page Shoutbox';
$lang['Sync_user_posts']		= 'Sync User Posts';
$lang['Sync_user_posts_explain']				= 'Rebuild user post count';
$lang['Tell_friend']		= 'Tell A Friend';
$lang['Tell_friend_explain']				= 'Tell your friends about thsi great site.';
$lang['Online_users']		= 'Online Users';
$lang['Online_users_explain']				= 'See who is online at this time.';
$lang['Bookmarks']					= '�������';
$lang['Bookmarks_explain']			= '��� ������� �� �������';
$lang['Exploit_attempts']					= 'Exploit Attempts';
$lang['Exploit_attempts_explain']			= 'See the list of blocked exploit attempts';
$lang['Search_dl']					= 'Search Downloads';
$lang['Search_dl_explain']			= 'Search trough downloads';
$lang['Staff']						= '���� ������';
$lang['Staff_explain']				= '��� �� ���� ���� ������';
?>