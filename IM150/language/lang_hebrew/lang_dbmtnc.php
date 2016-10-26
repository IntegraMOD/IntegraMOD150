<?php

/***************************************************************************
 *                            lang_dbmtnc.php [English]
 *                              -------------------
 *   begin                : Fri Feb 07, 2003
 *   copyright            : (C) 2004 Philipp Kordowich
 *                          Parts: (C) 2002 The phpBB Group
 *
 *   part of DB Maintenance Mod 1.2.2
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
// Language file for DB Maintenance Mod
//

$lang['DB_Maintenance'] = '������ ���� ������';
$lang['DB_Maintenance_Description'] = '��� ��� ���� ����� �� ���� ������� ��� ���-������ �������.<br />
	<b>��� ��:</b> ��� ������ ���� ��� �� ������. ������ ��� ���� <b>�����</b> ���� �������.</br />
	<br />
	<b>�� ����� ���� ����� �� ���� ������� ��� ���� ������ ��� ��� ���������� ������� ����!</b>';
$lang['Function'] = '�������';
$lang['Function_Description'] = '�����';

$lang['Incomplete_configuration'] = '����� �-<b>%s</b> �� ����� ������� ������. ������ ���� ������� ���� ����� ���� ��� ����� ��.<br />
	���� ����� ����� ���� �� ������ �-SQL �������� ������� ������.';
$lang['dbtype_not_supported'] = '�����, ������� �� �� ����� ����� ������� ���';
$lang['no_function_specified'] = '��� ������� �������';
$lang['function_unknown'] = '�������� ������� ���� �����';
$lang['Old_MySQL_Version'] = '�����, ���� �-MySQL ��� �� ����� �������� ��. ��� ����� ����� 3.23.17 �� ���� ����.';

$lang['Back_to_DB_Maintenance'] = '���� ������� ���� �������';
$lang['Processing_time'] = '������ ���� ������� ���� %f ����� �������';

$lang['Lock_db'] = '���� �����';
$lang['Unlock_db'] = '����� �����';
$lang['Already_locked'] = '������ ��� �����';
$lang['Ignore_unlock_command'] = '������ ����� ���� ����� ����� ��. ������ �� ������ ������';
$lang['Delay_info'] = '���� ����� ����� ��� ����� ������� ���� ������� �������...';

$lang['Affected_row'] = '���� ��� ������';
$lang['Affected_rows'] = '%d ����� ������';
$lang['Done'] = '������';
// The following variable is used when nothing hat to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
$lang['Nothing_to_do'] = "<p class=\"gen\"><i>��� ��� ����� :-)</i></p>\n";

//
// Names for new records in several tables
//
$lang['New_cat_name'] = '�������� ������';
$lang['New_forum_name'] = '������� ������';
$lang['New_topic_name'] = '������� ������';
$lang['Restored_topic_name'] = '����� �����';
$lang['New_poster_name'] = '������ ������'; // Name for Poster of a restored post

//
// Functions available
//
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leef empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
//
$mtnc[] = array('statistic',
	'���������',
	'���� ���� �� ������ ����� �������.',
	'',
	0);
$mtnc[] = array('config',
	'������',
	'���� ������ �� ������ ���� �������.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'���� ������ ������� �������',
	'������ ����� �� ������ �������� �������� ������� ������ ���� ������ ������� ������.',
	'��� ����� �� �� ������� ��� �� ��� ������ ��. ����?',
	0);
$mtnc[] = array('check_post',
	'���� ������ ������ �������',
	'����� �� ����� �� �� ������ ������� �������� �������.',
	'��� ����� �� �� ������� ��� ����. ����?',
	0);
$mtnc[] = array('check_vote',
	'���� ������ ������',
	'������ ����� �� ������ ������� �������.',
	'��� ����� �� �� ����� ������� ��� ����� ������. ����?',
	0);
$mtnc[] = array('check_pm',
	'���� ������ ������ ������',
	'������ ����� �� ������ ������� ������� �������.',
	'������ ����� ����� ����� ���� ����� �� ����� ���� ������. ����?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'���� ���� ������ ����� �����',
	'������ ����� �� ���� ������ ������. ���� �� ������ ��������� ������.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'���� ���� ����� ����� �����',
	'������ ���� �� �� ������ �������� ������ ������ ������� ������.',
	'������� �� ����� ���� ��� �� ������. �� �� ����� ���� ����� �� ��� ����� �� ����� ��� �� ���� ���� �������. ����?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'������� ������� �������',
	'������ ������ �� ���� ������ ������ ������ �������� �������.',
	'����� �� ����� ���� ��� �� �� ������. �� ���� ���� ����� �� ����� ������ set_time_limit(), ����� �� ����� ����� ������ ��-��� PHP. �� ����� ������ �� ��� ��� ������ ������ ����� �� ��������. ����?',
	0);
$mtnc[] = array('synchronize_user',
	'������ ���� ����� �������',
	'����� �� ������ �� ���� ������ ��������.',
	'<b>��� ��:</b> ������ ������ �� ����� ����� ������� �����. ���� ���� ����� ��, ������ ������ ����� ������ ��� ���� ���� ������. Proceed?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'������ ��� ����',
	'����� �� ������ �� ��� ����� ����� ��������.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'����� ����� ������ �������',
	'������ ���� �� ����� ������ ������� �� ��� ���� �����. ������ ����� ������� ���� �������� ������ ����� ��� �� �� ����� ����� ����� ����� ���� ��� �� �� ��� ���� �������.',
	'�� ��� ����� ����� ���� ���� ������. ����?',
	0);
$mtnc[] = array('reset_sessions',
	'����� �� ������',
	'������ ����� �� �� ������ �������� ��-��� ����� ����� session.',
	'�� �������� ������� �������� ����� �� ����� ���� ������� ������ ����. ����?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('rebuild_search_index',
	'����� ������ ������ ���',
	'�������� �� ���� ���� �� ������� ������� ������. ��� �� ����� �������� �� ��� ����� ��������.',
	'������ ���� �� ������ ������ ���� ����� ���� ����. �� ���� ���� ��� ���� ������ ����� ��. ������ �� ���� ���� ���� ��. ����?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'������ ���� �� ������',
	'����� �������� �� �� ������ ���� �� ������ ������ �����.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'���� ���� ������',
	'���� �� ���� ������� �������.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'��� ���� ������',
	'���� �� �������. ������ ����� �� ���� ���� ������� ���� ����� ���� ������ ��� ����.',
	'',
	1);
$mtnc[] = array('repair_db',
	'��� ���� ������',
	'���� �� ���� ������� ���� ����� ������.',
	'��� ���� ���� ����� �� ���� �� ������ ����� ���� ����� ���� �������. ����?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'����� ����� ����� ��������',
	'������� �� ����� �� ����� ����� ��������. �� ���� ������ �� �� ���� ��� ����� ���� ����� ������ ����� �����.',
	'��� ��� ���� ���� ���� �� ����� ������ ��������? �� ����� ������ ��� ������� �� ����� ���� ������ �� �� ���� ����� ���� ����� ������ ����� �����.',
	0);
$mtnc[] = array('heap_convert',
	'����� ���� ����',
	'������� �� ����� �� ���� ����� ���� ���� HEAP. ����� �� ����� ���� ������ ����� �� phpBB ���. ��� ���� ������ �������� �� �� ���� ����� ��� ��� �� ���� ���� HEAP.',
	'��� ��� ���� ���� ����� �� �����?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'����� ����� ������',
	'����� �������� �� �� ��� ���� ����� ���� ����� ����� ���� ������ ����� ����� �����.',
	'',
	3);

//
// Function specific vars
//

// statistic
$lang['Statistic_title'] = '��������� ���� ������ ������';
$lang['Database_table_info'] = '��������� ���� ������� ���� ������ ����� �����: ��� ������� �� ���� �������, ���
	������� ������ ��-��� phpBB ������ ���� (������ �������) ���� �������� �� ������� �� ������ ������ (������ �������).';
$lang['Board_statistic'] = '��������� �����';
$lang['Database_statistic'] = '��������� ���� �������';
$lang['Version_info'] = '���� �����';
$lang['Thereof_deactivated_users'] = '��� �����';
$lang['Thereof_Moderators'] = '��� ������';
$lang['Thereof_Administrators'] = '��� ������ ������';
$lang['Users_with_Admin_Privileges'] = '������� �� ����� ���� ����';
$lang['Number_tables'] = '���� ������';
$lang['Number_records'] = '���� ������';
$lang['DB_size'] = '���� ���� �������';
$lang['Thereof_phpbb_core'] = '��� ������ phpBB �������';
$lang['Thereof_phpbb_advanced'] = '��� ������ phpBB �������';
$lang['Version_of_board'] = '���� ������';
$lang['Version_of_mod'] = '����� ������ ���� �������';
$lang['Version_of_PHP'] = '���� PHP';
$lang['Version_of_MySQL'] = '���� MySQL';
// config
$lang['Config_title'] = '������ ������ ���� �������';
$lang['Config_info'] = '��������� ����� ������� �� ������ �� �������� �� ������ ���� �������. ��� �� ������� ������ ������ ������ ������� ���� ������.';
$lang['General_Config'] = '������ ������';
$lang['Rebuild_Config'] = '������ ����� ���� �� ������ ������';
$lang['Current_Rebuild_Config'] = '������ ����� ���� �������';
$lang['Rebuild_Settings_Explain'] = '������ ��� ������� �� ������� ������� ���� ������� ���� ����� ������ ������ ����.';
$lang['Current_Rebuild_Settings_Explain'] = '������ ��� ������ ��-��� ������ ���� ������� ������ ������ �� ������ ���� �������. ��� ���� ������ ����� ������ ��� ����� ��������.';
$lang['Disallow_postcounter'] = '������� �� ����� ����� ������ �����';
$lang['Disallow_postcounter_Explain'] = '������ ���� �� ������� ������� ���� ������ ������. ��� ���� �� ����� ������� �� �� ��� �� ���� ������� ������ ����� ����� ������ ��������.';
$lang['Disallow_rebuild'] = '����� ���� �� ����� �� ������ ������';
$lang['Disallow_rebuild_Explain'] = '������ ���� �� ������ ���� �� ������ ������. ����� ������ ���� ����� ����� ������ ��� ���.';
$lang['Rebuildcfg_Timelimit'] = '��� ����� ����� ������ ���� (������)';
$lang['Rebuildcfg_Timelimit_Explain'] = '��� ����� ����� ���� ��� ���� ����� ���� (����� ����: 240). ��� �� ����� �� ��� ������ ����� �� ��� ���� ���� �����.';
$lang['Rebuildcfg_Timeoverwrite'] = '���� ������ �� ��� ���� ������ (������)';
$lang['Rebuildcfg_Timeoverwrite_Explain'] = '��� ����� ����� ���� ������ (����� ����: 0). �� 0 ������ �� ������ ����� ���� ������, �� ��� ��� ����� �� ���� ������.';
$lang['Rebuildcfg_Maxmemory'] = '���� ����� ����� ������ ���� (�-kByte)';
$lang['Rebuildcfg_Maxmemory_Explain'] = '���� ������ ����� ��������� ���� ��� (����� ����: 500). ���� ���� ���� ������� ���� ��� ��� ��, �� ���� ����� �������� ����� ���� ������.';
$lang['Rebuildcfg_Minposts'] = '������� ������ ������ ��� ���';
$lang['Rebuildcfg_Minposts_Explain'] = '������� ���� ������ ��������� ��� ��� (����� ����: 3). ����� �� ���� ������� ������ ��������� ��� ���.';
$lang['Rebuildcfg_PHP3Only'] = '����� �� ����� ������ �� PHP 3 ������ ��������';
$lang['Rebuildcfg_PHP3Only_Explain'] = '������ ���� ������� ������ ����� ������ �������� ���� PHP 4.0.5 �� ��� ���� ����. ��� ���� ����� �� ����� ������� �� ������� ���� ������� ����� ����� ������ �� ������.';
$lang['Rebuildcfg_PHP4PPS'] = '������ ��������� ��� ����� ���� ����� ����� ������� ������';
$lang['Rebuildcfg_PHP4PPS_Explain'] = '��� ����� �� ������ ����� ����� ������� ��� ����� ���� ����� ����� �������� ������� (����� ����: 8).';
$lang['Rebuildcfg_PHP3PPS'] = '������ ��������� ��� ����� ���� ����� ����� �������� ������';
$lang['Rebuildcfg_PHP3PPS_Explain'] = '��� ����� �� ������ ����� ����� ������� ��� ����� ���� ����� ����� �������� ������ (����� ����: 1).';
$lang['Rebuild_Pos'] = '����� ������ ��������';
$lang['Rebuild_Pos_Explain'] = 'ID �� ������ ������� �������� ������. -1 ���� ������ ���� �������.';
$lang['Rebuild_End'] = '����� ������ ������';
$lang['Rebuild_End_Explain'] = 'ID �� ������ ������� ������. 0 ���� ������ ���� �������.';
$lang['Dbmtnc_config_updated'] = '������� ������ ������';
$lang['Click_return_dbmtnc_config'] = '��� %s���%s ��� ����� �������';
// check_user
$lang['Checking_user_tables'] = '���� ������ ������� �������';
$lang['Checking_missing_anonymous'] = '���� ������� �������� ������';
$lang['Anonymous_recreated'] = '����� ������ ���� ����';
$lang['Checking_incorrect_pending_information'] = '���� ����� �������� ������';
$lang['Updating_invalid_pendig_user'] = '������ ����� �������� ������ ������ ���';
$lang['Updating_invalid_pendig_users'] = '������ ����� �������� ������ �-%d �������';
$lang['Updating_pending_information'] = '����� ����� �������� ������� ������� ������';
$lang['Checking_missing_user_groups'] = '���� �������� ���� ������ �� ����� ����� �����';
$lang['Found_multiple_SUG'] = '����� ������� �� ������ ������� ������ �� ������';
$lang['Resolving_user_id'] = '���� ������� �������';
$lang['Removing_groups'] = '���� ������';
$lang['Removing_user_groups'] = '���� ����� ������ �����';
$lang['Recreating_SUG'] = '���� ���� ������ ������� ������ ������';
$lang['Checking_for_invalid_moderators'] = '���� ������� ���� ����� ������';
$lang['Updating_Moderator'] = '����� ����� ������ ����� �����';
$lang['Checking_moderator_membership'] = '���� ����� ����� �������';
$lang['Updating_mod_membership'] = '����� ����� ����� �����';
$lang['Moderator_added'] = '����� ���� ������';
$lang['Moderator_changed_pending'] = '��� ����� ������� ����';
$lang['Remove_invalid_user_data'] = '���� ����� ����� ������ ����� ������ ��������';
$lang['Remove_empty_groups'] = '���� ������ �����';
$lang['Remove_invalid_group_data'] = '���� ����� ����� ������ ����� ������ ��������';
$lang['Checking_ranks'] = '���� ������� ������';
$lang['Invalid_ranks_found'] = '����� ������� �� ������� ������';
$lang['Removing_invalid_ranks'] = '���� ������� ������';
$lang['Checking_themes'] = '���� ������ ����� ������';
$lang['Updating_users_without_style'] = '����� ������� �� �� ���� ������';
$lang['Default_theme_invalid'] = '<b>�����:</b> ����� ����� ����� ����. ��� ���� �� ������� ���.';
$lang['Updating_themes'] = '����� ����� ������ ����� %d';
$lang['Checking_theme_names'] = '���� ���� �� ���� ����';
$lang['Removing_invalid_theme_names'] = '���� ���� �� ���� ����';
$lang['Checking_languages'] = '���� ������ ��� ������';
$lang['Invalid_languages_found'] = '����� ������� �� ������ ��� ������';
$lang['Default_language_invalid'] = '<b>�����:</b> ��� ����� ����� ������. ��� ���� �� ������� ���.';
$lang['English_language_invalid'] = '<b>�����:</b> ��� ����� ����� ������ ����� ���� ������� �� ������. ��� ���� ����� �� ������� <b>lang_english</b>.';
$lang['Changing_language'] = '���� ��� \'%s\' � \'%s\'';
$lang['Remove_invalid_ban_data'] = '���� ����� ����� ������';
// check_post
$lang['Checking_post_tables'] = '���� ������ ������ �������';
$lang['Checking_invalid_forums'] = '���� ������� �� ������� ������';
$lang['Invalid_forums_found'] = '����� ������� �� ������� ������';
$lang['Setting_category'] = '����� ������� �������� \'%s\'';
$lang['Checking_posts_wo_text'] = '���� ������ ��� ����';
$lang['Posts_wo_text_found'] = '����� ������ ��� ����';
$lang['Deleting_post_wo_text'] = '%d (������: %s (%d); �����: %s (%d))';
$lang['Deleting_Posts'] = '���� ����� �����';
$lang['Checking_topics_wo_post'] = '���� ������ ��� �����';
$lang['Topics_wo_post_found'] = '����� ������ ��� �����';
$lang['Deleting_topics'] = '���� ����� ����';
$lang['Checking_invalid_topics'] = '���� ������ �� ����� ����';
$lang['Invalid_topics_found'] = '����� ������ �� ����� ����';
$lang['Setting_forum'] = '����� ������ ������ \'%s\'';
$lang['Checking_invalid_posts'] = '���� ������ �� ���� ����';
$lang['Invalid_posts_found'] = '����� ������ �� ���� ����';
$lang['Setting_topic'] = '����� ������ %s ����� \'%s\' (%d) ������ \'%s\'';
$lang['Checking_invalid_forums_posts'] = '���� ������ �� ����� ����';
$lang['Invalid_forum_posts_found'] = '����� ������ �� ����� ����';
$lang['Setting_post_forum'] = '%d: ����� ������ \'%s\' (%d) � \'%s\' (%d)';
$lang['Checking_texts_wo_post'] = '���� ���� ����� ��� �����';
$lang['Invalid_texts_found'] = '����� ����� ��� ������';
$lang['Recreating_post'] = '���� ���� ����� %d ������ ���� ����� \'%s\' ������ \'%s\'<br />����: %s';
$lang['Checking_invalid_topic_posters'] = '���� ������ �� ������ ������';
$lang['Invalid_topic_poster_found'] = '����� ������ �� ������ ������';
$lang['Updating_topic'] = '����� ���� %d (����: %d -&gt; %d)';
$lang['Checking_invalid_posters'] = '���� ������ �� ������ ������';
$lang['Invalid_poster_found'] = '����� ������ �� ���� ����';
$lang['Updating_posts'] = '����� ������';
$lang['Checking_moved_topics'] = '���� ������ �������';
$lang['Deleting_invalid_moved_topics'] = '���� ������ ������� ������';
$lang['Updating_invalid_moved_topic'] = '����� ����� ������� ������ ����� ��� ��� �����';
$lang['Updating_invalid_moved_topics'] = '����� ����� ������� ������ �-%d ������ ��� ������';
$lang['Checking_prune_settings'] = '���� ����� ����� ������';
$lang['Removing_invalid_prune_settings'] = '���� ������ ����� ������';
$lang['Updating_invalid_prune_setting'] = '����� ������ ����� ������ �� ����� ���';
$lang['Updating_invalid_prune_settings'] = '����� ������ ����� ������ �� %d �������';
$lang['Checking_topic_watch_data'] = '���� ������ ������� ������';
$lang['Checking_auth_access_data'] = '���� ����� ���� ����� ������';
$lang['Must_synchronize'] = '��� ���� ������ �� ����� ������ ���� ������ ������. ��� ��� ������.';
// check_vote
$lang['Checking_vote_tables'] = '���� ������ ������';
$lang['Checking_votes_wo_topic'] = '���� ������ ��� ����� �����';
$lang['Votes_wo_topic_found'] = '����� ������ ��� ����';
$lang['Invalid_vote'] = '%s (%d) - ����� �����: %s - ����� ����: %s';
$lang['Deleting_votes'] = '���� ������';
$lang['Checking_votes_wo_result'] = '���� ������ ��� �����';
$lang['Votes_wo_result_found'] = '����� ������ ��� �����';
$lang['Checking_topics_vote_data'] = '���� ����� ����� ������ �������';
$lang['Updating_topics_wo_vote'] = '����� ������ ������ ������ ��� ����� ������';
$lang['Updating_topics_w_vote'] = '���� ������ �� ������� ������ ��� �� ����� ������';
$lang['Checking_results_wo_vote'] = '���� ������ ��� ����� ������';
$lang['Results_wo_vote_found'] = '����� ������ ��� ������';
$lang['Invalid_result'] = '���� �����: %s (������: %d)';
$lang['Checking_voters_data'] = '���� ����� ����� ������';
// check_pm
$lang['Checking_pm_tables'] = '���� ������ ������ ������';
$lang['Checking_pms_wo_text'] = '���� ������ ������ ��� ����';
$lang['Pms_wo_text_found'] = '����� ������ ������ ��� ����';
$lang['Deleting_pn_wo_text'] = '%d (����: %s; ����: %s (%d); ����: %s (%d))';
$lang['Deleting_Pms'] = '���� ����� ����� �����';
$lang['Checking_texts_wo_pm'] = '���� ���� ������ ������ ��� �����';
$lang['Deleting_pm_texts'] = '���� ���� ������ ������ ������';
$lang['Checking_invalid_pm_senders'] = '���� ������ ������ �� ������ ������';
$lang['Invalid_pm_senders_found'] = '����� ������ ������ �� ���� ����';
$lang['Updating_pms'] = '����� ������ ������';
$lang['Checking_invalid_pm_recipients'] = '���� ������ ������ �� ������ ������';
$lang['Invalid_pm_recipients_found'] = '����� ������ ������ �� ���� ����';
$lang['Checking_pm_deleted_users'] = '���� ������ ������ �� ������ �� ������ ������';
$lang['Invalid_pm_users_found'] = '����� ������ ������ �� ������ �� ������ ������';
$lang['Deleting_pms'] = '���� ������ ������';
$lang['Synchronize_new_pm_data'] = '������ ���� ������ ������ �����';
$lang['Synchronizing_users'] = '����� �������';
$lang['Synchronizing_user'] = '����� ����� %s (%d)';
$lang['Synchronize_unread_pm_data'] = '������ ���� ������ ������ ��� �����';
// check_search_wordmatch
$lang['Checking_search_wordmatch_tables'] = '����� ���� ������ �����';
$lang['Checking_search_data'] = '���� ����� ����� ������';
// check_search_wordlist
$lang['Checking_search_wordlist_tables'] = '���� ���� ������ �����';
$lang['Checking_search_words'] = '���� ����� ����� �������';
$lang['Removing_part_invalid_words'] = '���� ��� ������ ������ ��������';
$lang['Removing_invalid_words'] = '���� ����� ����� �������';
// rebuild_search_index
$lang['Rebuilding_search_index'] = '���� ���� ������ �����';
$lang['Deleting_search_tables'] = '����� ������ �����';
$lang['Reset_search_autoincrement'] = '���� ���� ������ �����';
$lang['Preparing_config_data'] = '����� ����� ������';
$lang['Can_start_rebuilding'] = '��� ���� ����� ������ �� ������ ���� �� ������ ������';
$lang['Click_once_warning'] = '<b>�� ����� �� ������ ��� ���!</b> - �� ���� ���� ���� ���� �� ���� ���� ���.';
// proceed_rebuilding
$lang['Preparing_to_proceed'] = '���� ������ ��� ����� ������';
$lang['Preparing_search_tables'] = '���� ������ ����� ��� ������';
// perform_rebuild
$lang['Click_or_wait_to_proceed'] = '��� ��� ��� ������ �� ���� ��� �����';
$lang['Indexing_progress'] = '%d ���� %d ������ (%01.1f%%) �������. ������ ������� ��������: %d';
$lang['Indexing_finished'] = '������ ���� �� ������� ������� ������';
// synchronize_post
$lang['Synchronize_posts'] = '������ ����� �����';
$lang['Synchronize_topic_data'] = '������ ������';
$lang['Synchronizing_topics'] = '����� ������';
$lang['Synchronizing_topic'] = '����� ���� %d (%s)';
$lang['Synchronize_moved_topic_data'] = '������ ������ �������';
$lang['Inconsistencies_found'] = '�� ������ ����� ������� �����. ��� %s���� �� ������ ������� ��������%s';
$lang['Synchronizing_moved_topics'] = '����� ������ �������';
$lang['Synchronizing_moved_topic'] = '����� ���� ������ %d -&gt; %d (%s)';
$lang['Synchronize_forum_topic_data'] = '������ ����� ���� �� �������';
$lang['Synchronizing_forums'] = '����� �������';
$lang['Synchronizing_forum'] = '����� ����� %d (%s)';
$lang['Synchronize_forum_data_wo_topic'] = '������ ������� ��� ����';
$lang['Synchronize_forum_post_data'] = '������ ����� ����� �� �������';
$lang['Synchronize_forum_data_wo_post'] = '������ ������� ��� �����';
// synchronize_user
$lang['Synchronize_post_counters'] = '������ ���� ������';
$lang['Synchronize_user_post_counter'] = '������ ���� ������ �� �������';
$lang['Synchronizing_user_counter'] = '����� ����� %s (%d): %d -&gt; %d';
// synchronize_mod_state
$lang['Synchronize_moderators'] = '������ ��� ���� ����� ��������';
$lang['Getting_moderators'] = '���� ������';
$lang['Checking_non_moderators'] = '���� ������� �� ��� ���� ��� ������ �� �����';
$lang['Updating_mod_state'] = '����� ��� ���� �� �������';
$lang['Changing_moderator_status'] = '����� ��� ���� �� ����� %s (%d)';
$lang['Checking_moderators'] = '���� ������� ��� ��� ���� ������� �����';
// reset_date
$lang['Resetting_future_post_dates'] = '���� ������ ����� ������ �����';
$lang['Checking_post_dates'] = '���� ����� ������';
$lang['Checking_pm_dates'] = '���� ����� ������ ������';
$lang['Checking_email_dates'] = '���� ����� ���� �������� �����';
// reset_sessions
$lang['Resetting_sessions'] = '���� �����';
$lang['Deleting_session_tables'] = '����� ���� ����� ������ �����';
$lang['Restoring_session'] = '����� ���� ������ �����';
// check_db
$lang['Checking_db'] = '���� ���� ������';
$lang['Checking_tables'] = '���� ������';
$lang['Table_OK'] = '�����';
$lang['Table_HEAP_info'] = '����� �� ����� ������� HEAP';
// repair_db
$lang['Repairing_db'] = '���� ���� ������';
$lang['Repairing_tables'] = '���� ������';
// optimize_db
$lang['Optimizing_db'] = '���� ���� ������';
$lang['Optimizing_tables'] = '���� ������';
$lang['Optimization_statistic'] = '���� ���� ����� �� ������ �-%s �� %s. �� ����� �� %s �� %01.2f%%.';
// reset_auto_increment
$lang['Reset_ai'] = '���� ����� ������� ��������';
$lang['Ai_message_update_table'] = '����� ������';
$lang['Ai_message_no_update'] = '��� ����� �����';
$lang['Ai_message_update_table_old_mysql'] = '����� ������'; // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
$lang['Converting_heap'] = '���� ���� ���� �-HEAP';
// unlock_db
$lang['Unlocking_db'] = '����� ����� ����� �������';

// Emergency Recovery Console
$lang['Forum_Home'] = '���� ���� �� ������';
$lang['ERC'] = '���� ���� ���� �����';
$lang['Submit_text'] = '���';
$lang['Select_Language'] = '��� ���';
$lang['No_selectable_language'] = '�� ����� ���';
$lang['Select_Option'] = '��� ������';
$lang['Option_Help'] = '������ �� �������';
$lang['Authenticate_methods'] = '���� ��� ����� ����';
$lang['Authenticate_methods_help_text'] = '��� ���� ���� ��� ����� �� ������� ������� ������. ���� ��� ����� ����� ���:
	������, ��� ���� ���� ��-��� ����� �� ������ �� �� ����� ���� ���� ���� �� ������ (���� ������). �����, ��� ����
	���� ��-��� ����� ��� ����� ������� �� ����� ���� ������� ����� ������ �����.';
$lang['Authenticate_user_only'] = '��� ���� ���� �� ����� ���� ���� ����';
$lang['Authenticate_user_only_help_text'] = '��� ���� ���� ��� ����� �� ������� ������� ������. ��� ���� ���� �� ��-���
	����� �� ����� ������ �� ����� ���� ���� ���� �� ������.';
$lang['Admin_Account'] = '����� ���� ���� �� �����';
$lang['Database_Login'] = '����� ���� ������';
$lang['Username'] = '�� �����';
$lang['Password'] = '�����';
$lang['Auth_failed'] = '������ ����!';
$lang['Return_ERC'] = '���� ����� ���� ���� �����';
$lang['cur_setting'] = '����� ������';
$lang['rec_setting'] = '����� ������';
$lang['secure'] = '������';
$lang['secure_yes'] = '�� (https)';
$lang['secure_no'] = '�� (http)';
$lang['domain'] = '����';
$lang['port'] = '�����';
$lang['path'] = '����';
$lang['Cookie_domain'] = '���� ������';
$lang['Cookie_name'] = '�� ������';
$lang['Cookie_path'] = '���� ������';
$lang['select_language'] = '��� ��� ����';
$lang['select_theme'] = '��� ���� ����';
$lang['reset_thmeme'] = '��� ���� ���� ����� ����';
$lang['new_admin_user'] = '����� ��� ����� ����� ���� ����';
$lang['dbms'] = '��� ���� ������';
$lang['DB_Host'] = '�� ��� ���� ������� / DSN';
$lang['DB_Name'] = '�� ���� ������� ���';
$lang['DB_Username'] = '�� ����� ����� �������';
$lang['DB_Password'] = '����� ����� �������';
$lang['Table_Prefix'] = '������ ������� ����� �������';
$lang['New_config_php'] = "��� ���� config.$phpEx ���� ���";
// Options
$lang['cls'] = '��� �� �� ������';
$lang['rdb'] = '��� ������ ���� ������';
$lang['rpd'] = '��� ����� ����';
$lang['rcd'] = '��� ����� ������';
$lang['rld'] = '��� ����� ���';
$lang['rtd'] = '��� ����� ����';
$lang['dgc'] = '��� ����� GZip';
$lang['cbl'] = '��� ����� ������';
$lang['raa'] = '��� �� �� ������� �������';
$lang['mua'] = '���� ������ ����� ���� ����';
$lang['rcp'] = '��� ���� �� config.php';
// Info for options
$lang['cls_info'] = '���� ����� �� ������ �����.';
$lang['rdb_info'] = '���� ����� �� ������� �� ���� ������� ������.';
$lang['rpd_info'] = '���� ����� �� ����� ������� ������� �� ������ ������� �����.';
$lang['rcd_info'] = '���� ����� ����� ������� �������. ������� �� ����� ������ ������� �� �� ����� ����� ��� \'��� ����� ����\'.';
$lang['rld_info'] = '���� ����� ���� ������ ����� �� ������ ��� ������ ������ ��� ����.';
$lang['rtd_info'] = '���� ����� ������ ����� ����� �� ������ ��� ������ ������ ��� ���� �� ����� ������ �����
	(subSilver) ������ ���� ������ ������ �������.';
$lang['rtd_info_no_theme'] = '���� ����� ���� ����� ����� (subSilver) ������ ���� ������ �� ������ ��� ������ ������ ��� ����.';
$lang['dgc_info'] = '���� ����� ����� �-GZip �����.';
$lang['cbl_info'] = '���� ����� �� ����� ������� ��� ����� �������� ����� ������ �����.';
$lang['raa_info'] = '���� ����� �� ������� ������� ����� �������� ������. �� ��� ����� ������ ���� ���� ��� ����, ������ ������
	������ ����� �� ��� ����� ����� ���.';
$lang['mua_info'] = '���� ����� ������ ����� ���� ����� ���� ����. ������ �� �����.';
$lang['rcp_info'] = '���� ����� config.php ��� ����� �� ������� �������.';
// Success messages for options
$lang['cls_success'] = '�� ������ ���� ������.';
$lang['rdb_success'] = '������� �� ���� ������� �����.';
$lang['rpd_success'] = '������ ������ ������ ������.';
$lang['rcd_success'] = '����� ������� ������ ������.';
$lang['rld_success'] = '����� ���� ������ ������.';
$lang['rld_failed'] = "���� ���� ������� (lang_main.$phpEx �- lang_admin.$phpEx) �� ������.";
$lang['rtd_restore_success'] = '����� ����� ����� ����� ������.';
$lang['rtd_success'] = '����� ������ ������ ������.';
$lang['dgc_success'] = '����� �-GZip ����� ������.';
$lang['cbl_success'] = '����� ������� ��������� ����� ������ ���� ������.';
$lang['cbl_success_anonymous'] = '����� ������� ��������� ����� ������ ���� ������. ������ �������
	���� ����. ���� ������ ������ �� ������ ������� ������ ����� ������, �� ����� ������ ���������
	&quot;���� ������ ������� �������&quot; ���� ����� �� ������ ���� �������.';
$lang['raa_success'] = '�� ������� ������� ����� ������.';
$lang['mua_success'] = '������ ����� �� ����� ����� ���� ����.';
$lang['mua_failed'] = '<b>�����:</b> ������ ����� �� ���� �� ��� �� ��� ����� ���� ����.';
$lang['rcp_success'] = "���� �� ����� ����� ����, ��� �� ��� �- <b>config.$phpEx</b> ����� ���� ������� ������ �� ������. ���
	���� ���� �� (���� ������ ������ ������) ���� <b>&lt;?php</b> ����� <b>?&gt;</b>.<br />
	��� ���� �� %s������%s �� ����� ����� ���.";
// Text for success messages
$lang['Removing_admins'] = '���� ������ ������';
// Help Text
$lang['Option_Help_Text'] = '<p>�� ��� ���� ���� ������ ����� ������ ����, ��� ���� ����� �� ����� ����� ��-���
	����� <b>��� �� �� ������</b>. �� �� �� ����� �� ���� ������� ���� �������, ��� ���� ���� �� ������� ��-��� �����
	<b>��� ������ ���� ������</b>.</p>
	<p>�� ��� �� ���� ������ �� ������ ���� ������ �����, ����� ����� ���� ����� ��� �� ������� ������� ���. ��� ����
	���� ���� �� <b>��� ����� ����</b> �� <b>��� ����� ������</b>. ��� ���� ���� �� �� ������ ���� ��-��� ����� <b>��� �����
	���</b> �� ����� ���� �� <b>��� ����� ����</b>.</p>
	<p>�� ���� ����� ���� ����� ����� �-GZip, ��� ���� ������ ���� ��-��� ����� <b>��� ����� GZip</b>.</p>
	<p>�� ����� �� ������ ������ ��� ��� ���� ����� ������ ����� ���� ���� ��-��� ����� <b>���� ������ ����� ���� ����</b>.
	������ �� ����� �� ������ �� ����� ������ ������ ����� ���� ���� ���. �� ��� �� ���� ������ ����� ���, �� ���� ����� ��
	����� ������� �� <b>��� ����� ������</b> (������ ����� �� �� ������ �������).</p>
	<p>�� ������ ��� �����, �� ����� ���� ���� �� �� ������� ������� ������� ��-��� ����� <b>��� �� �� ������� �������</b>. (������ ���� �� ���� ��� ������ �� �����.)</p>
	<p>�� ��� ���� ����� �� config.php ��� ��� ���� ����� ��� ��-��� ����� <b>��� ���� �� config.php</b>.</p>';
?>
