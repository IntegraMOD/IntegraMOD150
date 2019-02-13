<?php
/***************************************************************************
 *						lang_extend_profile_control_panel.php [English]
 *						-----------------------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.2 - 28/09/2003
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
	$lang['Lang_extend_profile_control_panel'] = '����� ��� ���� ���� �������';
}

// who's online
$lang['Admin_founder_online_color']			= '%s����� ������%s';
$lang['Jadmin_online_color']			        = '%s���� ���� ����%s';
$lang['User_online_color']					= '%s�����%s';

// topic or privmsg display

$lang['Add_friend']							= '���� ������ ������ ���';
$lang['Add_to_friend_list']					= '���� ������ ������ ���';

$lang['Remove_friend']						= '��� ������ ������ ���';
$lang['Remove_from_friend_list']			= '��� ������ ������ ���';



$lang['Add_to_ignore_list']					= '���� ������ �������� ���';
$lang['Remove_from_ignore_list']			= '���� ������ �������� ���';
$lang['Happy_birthday']						= '��� ����� ��� !';
$lang['Ignore_choosed']						= '���� ������ ������ ��';
$lang['Online']								= '�����';
$lang['Offline']							= '�����';
$lang['Hidden']								= '�����';
$lang['Gender']								= '���';
$lang['Male']								= '���';
$lang['Female']								= '����';
$lang['No_gender_specify']					= '�� ����';
$lang['Age']								= '���';
$lang['Do_not_allow_pm']					= '����� �� �� ���� ������ ������';

// main entry (profile.php)
$lang['Click_return_profilcp']			    = '��� %s���%s ��� ����� �%s';

// birthday popup (profile_birthday.php)
$lang['Birthday']							= '��� �����';
$lang['birthday_msg']						= '���� %s, <br /><br /><br /> %s ��� ���� ���� ��� ����� ��� !';

// home panel (profilcp_home.php)
$lang['profilcp_index_shortcut']			= '���';
$lang['profilcp_index_pagetitle']			= '�� ���� �� ������� �����';

// home panel : mini buddy list (functions_profile.php)
$lang['Friend_list']						= '����� �����';
$lang['Friend_list_of']						= '��� ��';
$lang['Ignore_list']						= '����� �������';
$lang['Ignore_list_of']						= '����� ��-���';
$lang['Nobody']								= '�� ���';
$lang['Always_visible']						= '���� ���� ������ ��';
$lang['Not_always_visible']					= '����� �� �� ���� ���� ������ ���� ���� ���� �����';

// home panel : watched topics (functions_profile.php)
$lang['Stop_watching_selected_topics']		= '���� ����� ��� ������� �������';
$lang['New_subscribed_topic']				= '������ ������';
$lang['Submit_period']						= '��� ������ ���';

// buddy list (profilcp_buddy.php)
$lang['profilcp_buddy_shortcut']			= '����� ����� �����';
$lang['profilcp_buddy_pagetitle']			= '����� ����� �����';
$lang['profilcp_buddy_friend_shortcut']		= '����� �����';
$lang['profilcp_buddy_friend_pagetitle']	= '���� �� ����� ������ ���';
$lang['profilcp_buddy_ignore_shortcut']		= '����� �������';
$lang['profilcp_buddy_ignore_pagetitle']	= '���� �� ����� �������� ���';
$lang['profilcp_buddy_list_shortcut']		= '�� ������';
$lang['profilcp_buddy_list_pagetitle']		= '����� �����';
$lang['Click_return_privmsg']				= '��� %s���%s ��� ����� ������ ������';
$lang['profilcp_buddy_could_not_add_user']	= '������ ����� �� ����.';
$lang['profilcp_buddy_could_not_anon_user']	= '��� �� ���� ���� ����� ������ ����.';
$lang['profilcp_buddy_add_yourself']		= '��� �� ���� ������ �� ���� ������ ������ ���';
$lang['profilcp_buddy_already']				= '������ ��� ������ ������ ���';
$lang['profilcp_buddy_ignore']				= '����� ���� ������ : ����� �� ����� ���';
$lang['profilcp_buddy_you_admin']			= '���� ���� �� ����, ��� �� ���� ������ ������';
$lang['profilcp_buddy_admin']				= '��� �� ���� ������ ������� ������ �� ������';
$lang['User_fields']						= '����� ���� �����';
$lang['Friend']								= '���';
$lang['Comp_LE']							= '���� �-';
$lang['Comp_EQ']							= '���� �-';
$lang['Comp_NE']							= '���� �-';
$lang['Comp_GE']							= '���� �-';
$lang['Comp_IN']							= '����';
$lang['Comp_NI']							= '�� ����';
$lang['Sort_none']							= '�� �����';
$lang['date_entry']							= 'YYYYMMDD';

// update profile (profilcp_profil.php)
$lang['profilcp_profil_shortcut']			= '������';
$lang['profilcp_profil_pagetitle']			= '����� ������';
$lang['profilcp_prefer_shortcut']			= '������� ���';
$lang['profilcp_prefer_pagetitle']			= '������ ������� ���';
$lang['profilcp_signature_shortcut']		= '�����';
$lang['profilcp_signature_pagetitle']		= '�����';
$lang['profilcp_avatar_shortcut']			= '��� ����';
$lang['profilcp_avatar_pagetitle']			= '��� ����';
$lang['profilcp_digests_shortcut']			= '������';
$lang['profilcp_digests_pagetitle']			= '������';
// update profile : preferences - functions (mod_profile_control_panel.php)
$lang['Other']								= '���...';
$lang['Friend_only']						= '����� ����';

// update profile : public informations : web info (mod_profile_control_public_web.php)
$lang['profilcp_profil_base_shortcut']		= '���� ������';
$lang['Web_info']							= '���� ���';

// update profile : public informations : real info (mod_profile_control_public_real.php)
$lang['Real_info']							= '���� ����';
$lang['Realname']							= '�� �����';
$lang['Date_error']							= '��� %d, ���� %d, ��� %d �� �� ����� ���';

// update profile : public informations : messengers info (mod_profile_control_public_messengers.php)
$lang['Messengers']							= '����\'���';

// update profile : public informations : contact info (mod_profile_control_public_contact.php)
$lang['Home_phone']							= '����� ����';
$lang['Home_fax']							= '��� ����';
$lang['Work_phone']							= '����� ������';
$lang['Work_fax']							= '��� ������';
$lang['Cellular']							= '������';
$lang['Pager']								= 'Pager';

// update profile : preferences - preferences panel ("Your profile")
$lang['Profile_control_panel']				= '������ ������';

// update profile : preferences - i18n panel (mod_profile_control_panel_international.php)
$lang['Profile_control_panel_i18n']			= '�������';
$lang['summer_time']						= '��� ��� ������ ���� ��� ?';

// update profile : preferences - notification panel (mod_profile_control_panel_notification.php)
$lang['Profile_control_panel_notification']	= '�����';

// update profile : preferences - posting panel (mod_profile_control_panel_posting.php)
$lang['Profile_control_panel_posting']		= '�����';

// update profile : preferences - privacy panel (mod_profile_control_panel_privacy.php)
$lang['Profile_control_panel_privacy']		= '������';
$lang['View_user']							= '���� ���� �����';
$lang['Public_view_pm']						= '��� ����� �����';
$lang['Public_view_website']				= '��� �� ���� ���� ���';
$lang['Public_view_messengers']				= '��� �� ������ �����\'��� ���';
$lang['Public_view_real_info']				= '��� �� ����� ����� ���';

// update profile : preferences - reading panel (mod_profile_control_panel_reading.php)
$lang['Profile_control_panel_reading']		= '�����';
$lang['Public_view_avatar']					= '��� ����� ������';
$lang['Public_view_sig']					= '��� ������';
$lang['Public_view_img']					= '��� ������';

// update profile : preferences - profile preferences
$lang['profile_prefer']						= '�������� ������';

// update profile : preferences - system panel (mod_profile_control_panel_system.php)
$lang['Profile_control_panel_system']		= '�����';
$lang['summer_time_set']					= '��� ���� ��� ���� ��� ? (���� ��� ���� ������)';
$lang['Forum_rules']						= '���� �� ���� ������ ������';

// update profile : preferences - admin part (mod_profile_control_panel_admin.php)
$lang['profilcp_admin_shortcut']			= '����� ����';
$lang['User_deleted']						= '������ ���� ������.';
$lang['User_special']						= '���� ������� ������� ������ ����';
$lang['User_special_explain']				= '���� ��� ���� ������ ������ ��-��� ��������.  ��� ���� ����� �� ���� ���� ��������� ����� ����� ������ ���.';
$lang['User_status']						= '������ ����';
$lang['User_allow_email']					= '���� ����� ������ ����';
$lang['User_allow_pm']						= '���� ����� ������ ������';
$lang['User_allow_website']					= '���� ������ �� ���� ���� ���';
$lang['User_allow_messenger']				= '���� ���� �� ������ �����\'��� ���';
$lang['User_allow_real']					= '���� ������ �� ����� ����� ���';
$lang['User_allowavatar']					= '���� ����� ��� ����';
$lang['User_allow_sig']						= '���� ����� �� ������ ���';
$lang['Rank_title']							= '����� �����';
$lang['User_delete']						= '��� ����� ��';
$lang['User_delete_explain']				= '��� ��� ��� ����� ����� ��; �� ���� ����� �� ������.';
$lang['No_assigned_rank']					= '��� ����� ����� �����';
$lang['User_self_delete']					= '��� ���� ����� �� ������ ��� ����� ����� ����� �� ������';

// update profile : signature (profilcp_profile_signature.php)
$lang['profilcp_sig_preview']				= '����� ������ �� ������';

// display profile (profilcp_public.php)
$lang['profilcp_public_shortcut']			= '������';
$lang['profilcp_public_pagetitle']			= '���� �������';
$lang['profilcp_public_base_shortcut']		= '���� �����';
$lang['profilcp_public_base_pagetitle']		= '���� ������ �������';
$lang['profilcp_public_groups_shortcut']	= '������';
$lang['profilcp_public_groups_pagetitle']	= '������ ������ �� ���� ���';

// update profile : preferences - home panel (mod_profile_control_panel_home.php)
$lang['Profile_control_panel_home']			= '�� ���� �� �������';
$lang['Profile_control_panel_home_buddy']	= '����� ����� �����';
$lang['Buddy_friend_display']				= '��� �� ����� ������ ��� ��� ����';
$lang['Buddy_ignore_display']				= '��� �� ����� �������� ��� ��� ����';
$lang['Buddy_friend_of_display']			= '��� ����� "��� ��" ��� ����';
$lang['Buddy_ignored_by_display']			= '��� ����� "����� ��-���" ��� ����';

$lang['Profile_control_panel_home_privmsg']	= '������ ������';
$lang['Privmsgs_per_page']					= '���� ������ ������ ������� ��� ���� ��� ����';

$lang['Profile_control_panel_home_wtopics']	= '������ �������';
$lang['Watched_topics_per_page']			= '���� �� ������ ������� ������� ��� ���� ��� ����';

// display profile : base info (profilcp_public_base.php)
$lang['Unavailable']						= '�� ����';
$lang['Last_visit']							= '��� ������ ������';
$lang['User_pics']							= '������ ������';
$lang['User_post_stats']					= '%s ������, %.2f%% ��� ���, %.2f ������ ����';
$lang['User_posts']							= '������ �����';
$lang['Most_active_topic']					= '����� ��� ����';
$lang['Most_active_topic_stat']				= '%s ������, %.2f%% �� �����, %.2f%% �� ������';
$lang['Most_active_forum']					= '������ ��� ����';
$lang['Most_active_forum_stat']				= '%s ������, %.2f%% �� ������, %.2f%% ��� ���';

// register (profilcp_register.php)
$lang['profilcp_register_shortcut']			= '�����';
$lang['profilcp_register_pagetitle']		= '���� �����';
$lang['profilcp_email_title']				= '����� ���� ��������';
$lang['profilcp_email_confirm']				= '��� �� ����� ����� ��������� ���';
$lang['anti_robotic']						= '���� �����';
$lang['anti_robotic_explain']				= '���� �� ����� ��� ����� ���� ��-��� ������ �����';
$lang['profilcp_password_explain']			= '��� ���� ���� �� ������ ������� �� ��� ���� ����� ����';
$lang['Agree_rules']						= '��-��� ����� ���� ��, ��� ����� ���� ���� ������, ������ ����';
$lang['profilcp_username_missing']			= '�� ������ ����';
$lang['profilcp_email_not_matching']		= '������ ����� ��������� ���� ������';
$lang['Robot_flood_control']				= '���� ������ �� ����� ��� ������';
$lang['Disagree_rules']						= '����� ����� ����� �� ���� ������ ������ ��, �� ��� �� ���� �����.';

$lang['Always_set_bm'] = '��� ������� �������� ���� ��� ����';

// PCP Extra :: Added :: Start
$lang['Required_Error'] = '���� "%s" ����';
$lang['Required_field'] = '&nbsp;<font color=red>*</font>';
$lang['Required_explain'] = '&nbsp;<font color=red>*</font> = ��� ����.';
$lang['Email_confirm'] = '�� ����� �� ����� ����� ��������� ���, ����� ������ ���� �� ������ ��� ������ ����� ������ ����� ��������� ����� ���.';
$lang['Email_confirm_admin'] = '�� ����� �� ����� ����� ��������� ���, ����� ����� ����� ������ �� ������ ����.';
$lang['Email_confirm_guest'] = '����� ���� ������ �� ��� ������ �� ������';
$lang['Email_confirm_guest_admin'] = '���� ����� ������ �� ���� ������ ��� ����� ��-��� ����� �����';
$lang['Visible_friends'] = '<br><i>(���� ������ ��-��� ����� ����)</i>';
$lang['Visible_all'] = '<br><i>(���� ������ ��-��� �� ��������)</i>';
$lang['Visible_admin'] = '<br><i>(���� ������ ��-��� ������� ������� ����)</i>';
$lang['Visible_board_email_all'] = '<br><i>(������ ���� �������� ���� ������� ��� �������� ������� ����� �� ����� ��� ������)</i>';
$lang['Visible_board_email_friends'] = '<br><i>(������ ���� �������� ���� ������� ������ ���� ������ ����� �� ������ ��� ������)</i>';
$lang['Preferences'] = '������';
$lang['Privmsgs'] = '������ ������';
$lang['Buttons'] = '�������';
$lang['Left'] = '����';
$lang['Viewtopic'] = '��� �����';
// PCP Extra :: Added :: End
// Digests PCP :: Added :: Start
$lang['profilcp_digests_shortcut']			= '�������';
$lang['profilcp_digests_pagetitle']			= '�������';
// Digests PCP :: Added :: End
// Warning PCP :: Added :: Start
$lang['Warnings'] = '������� ������: %d'; //shown beside users post, if any warnings given to the user
$lang['user_warnings'] = '������� ������'; // field label
$lang['Banned'] = '���� ����';//shown beside users post, if user are banned
// Warning PCP :: Added :: End
// Auto Summer time :: Added :: Start
$lang['summer_time_auto_set'] = '���� �������� ����� ����?';
// Auto Summer time :: Added :: End
//  Mini Cal PCP :: Added :: Start
$lang['mini_cal_version_mycal'] = '��� ���� ���';
$lang['mini_cal_version_plus'] = '��� ���� ���+';
$lang['mini_cal_version_topic'] = '���� ��� ���';
$lang['mini_cal_version_snail'] = '��� ��� �� Websnail Pro';
$lang['mini_cal_version_snaillite'] = '��� ��� �� Websnail Lite';
$lang['mini_cal_version_none'] = '��� ��� ��� ���� ������';
$lang['mini_cal_calendar_version'] = '��� ��� ����� ����';
$lang['mini_cal_calendar_version_explain'] = '����� ����� ������ ��� ��� ��� �����, �� ����.';
$lang['mini_cal_limit'] = '����� ��� ��� ���';
$lang['mini_cal_limit_explain'] = '����� �� ���� �������� ������� ���� ���� ����. �� ������� ��� ���!';
$lang['mini_cal_days_ahead'] = '���� ����� �� ��� ���� ����';
$lang['mini_cal_days_ahead_explain'] = '����� �� ���� ����� ����� ���� ��� �������� ����� �����. ��� �-0 (���) ����� �����. �� ������� ��� ���!';
$lang['mini_cal_search_posts'] = '��� ��� ������';
$lang['mini_cal_search_events'] = '��� ��� �������';
$lang['mini_cal_date_search'] = '����� ����� ���� ���� ����';
$lang['mini_cal_date_search_explain'] = '����� ���� ��� ����� ���� ���� ����� ���� �� ����� ���� ����. "��� ��� �������" �� �� ������� ��� ���!';
$lang['mini_cal_fdow'] 				= '���� ������ �� ����� ���� ���� ����'; 
$lang['mini_cal_fdow_explain'] 			= '���� ������ �� �����: - 0=�����, 1=���...6=���.'; 
$lang['mini_cal_link_class'] = '����� ����� ���� ���� ����';
$lang['mini_cal_link_class_explain'] = '����� �� ����� �-css ������ ������� ��� ��� ���� ����.';
$lang['mini_cal_today_class'] = '����� ���� ���� ���� ����';
$lang['mini_cal_today_class_explain'] = '����� �� ����� �-the ������ ������ �� ���� ���� ���� ����.';
$lang['mini_cal_auth'] = '���� ��� ��� ���';
$lang['mini_cal_auth_explain'] = '����� �� ��� ����� ������ ��� ����� �������� ��������. �� ���� ���� ����� ������ ������.';
//  Mini Cal PCP :: Added :: End
// signature control
$lang['sig_yes_not_controled'] = '�� �� �g����';
$lang['sig_yes_controled'] = '�� �g����';
// right click
$lang['Extra_priv_explain'] ='���� ������ ������ ������ ����� ��g��';
// phpbb security admin
$lang['Force_security'] ='Force Security';
$lang['Force_security_explain'] ='Check this box and the user will be forced to re-activate his acount using the security question and answer.';
$lang['Reset_security'] ='Reset Security';
$lang['Reset_security_explain'] ='Check this box if the user locked himself out by mistyping his password too many times. This will reset the counter to 0.';
$lang['Clear_security'] ='Clear Security';
$lang['Clear_security_explain'] ='Check this box and the security question and answer of this user will be reset. The user will NOT be able to browse the forums untill he/she re-enters them.';
?>
