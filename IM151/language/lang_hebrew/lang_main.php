<?php
/***************************************************************************
 *                            lang_main.php [Hebrew]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
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

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'Rtl';
$lang['LEFT'] = 'right';
$lang['RIGHT'] = 'left';
$lang['DATE_FORMAT'] =  'd/m/Y �- H:i:s'; // This should be changed to the default date format for your language, php date() format
$lang['Ignore'] = '�����';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = '�����';
$lang['Category'] = '�������';
$lang['Topic'] = '����';
$lang['Topics'] = '������';
$lang['Replies'] = '������';
$lang['Views'] = '�����';
$lang['Post'] = '�����';
$lang['Posts'] = '������';
$lang['Posted'] = '����';
$lang['Username'] = '�� �����';
$lang['Password'] = '�����';
$lang['Email'] = '���� ��������';
$lang['Poster'] = '����';
$lang['Author'] = '����';
$lang['Time'] = '���';
$lang['Hours'] = '����';
$lang['Message'] = '�����';

$lang['1_Day'] = '��� ���';
$lang['7_Days'] = '7 ����';
$lang['2_Weeks'] = '2 ������';
$lang['1_Month'] = '���� ���';
$lang['3_Months'] = '3 ������';
$lang['6_Months'] = '6 ������';
$lang['1_Year'] = '��� ���';

$lang['Go'] = '����';
$lang['Jump_to'] = '���� �';
$lang['Submit'] = '�����';
$lang['Reset'] = '�����';
$lang['Cancel'] = '�����';
$lang['Preview'] = '����� ������';
$lang['Confirm'] = '�����';
$lang['Spellcheck'] = '����� ����';
$lang['Yes'] = '��';
$lang['No'] = '��';
$lang['Enabled'] = '����';
$lang['Disabled'] = '����';
$lang['Error'] = '�����';

$lang['Next'] = '���';
$lang['Previous'] = '�����';
$lang['Goto_page'] = '���� �����';
$lang['Joined'] = '�����';
$lang['IP_Address'] = '����� IP';

$lang['Select_forum'] = '��� �����';
$lang['View_latest_post'] = '��� ������ �������';
$lang['View_newest_post'] = '��� ������ �����';
$lang['Page_of'] = '���� <b>%d</b> ���� <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = '���� ICQ';
$lang['AIM'] = '����� AIM';
$lang['MSNM'] = 'MSN ����\'�';
$lang['YIM'] = 'Yahoo ����\'�';

$lang['Forum_Index'] = '������ �������� �� %s';  // eg. sitename Forum Index, %s can be removed if you prefer
//
$lang['Post_new_topic'] = '��� ���� ���';
$lang['Reply_to_topic'] = '��� �����';
$lang['Reply_with_quote'] = '��� �� �����';

$lang['Click_return_topic'] = '��� %s���%s ��� ����� �����'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '��� %s���%s ��� ����� ���';
$lang['Click_return_forum'] = '��� %s���%s ��� ����� ������';
$lang['Click_view_message'] = '��� %s���%s ��� ����� �������';
$lang['Click_return_modcp'] = '��� %s���%s ��� ����� ���� ����� �������';
$lang['Click_return_group'] = '��� %s���%s ��� ����� ����� ������';

$lang['Admin_panel'] = '���� ���� ������';

$lang['Board_disable'] = '�����, ��� �������� �� ������ ����.  ��� ��� ����� ����.';
$lang['View_post'] = '��� ������';
$lang['Acronym'] = '���� �����';

$lang['Total_votes'] = '���� ������ : ';
$lang['Voted_show'] = '������ : '; // it means :  users that voted  (the number of voters will follow)
$lang['Results_after'] = '������� ������ ���� ����� ������';
$lang['Poll_expires'] = '���� ������ ���� : ';
$lang['Minutes'] = '����';
$lang['Max_vote'] = '������ �������';
$lang['Max_vote_explain'] = '[ ���� 1 ��� ����� ����� ��� ���� ]';
$lang['Max_voting_1_explain'] = '��� ��� �� ';
$lang['Max_voting_2_explain'] = ' ������';
$lang['Max_voting_3_explain'] = ' (����� ������� ��� �����)';
$lang['Vhide'] = '����';
$lang['Hide_vote'] = '������';
$lang['Tothide_vote'] = '����� ������';
$lang['Hide_vote_explain'] = '[ ���� �� ���� ���� ]';

//
// Global Header strings
//
$lang['Registered_users'] = '������� ������:';
$lang['Browsing_forum'] = '������� ������ ������ ��:';
$lang['Online_users_zero_total'] = '���� <b>0</b> ������� ������� ��� ��� :: ';
$lang['Online_users_total'] = '���� <b>%d</b> ������� ������� ��� ��� :: ';
$lang['Online_user_total'] = '���� ����� ����� ��� ��� ��� :: ';
$lang['Reg_users_zero_total'] = '0 ������, ';
$lang['Reg_users_total'] = '%d ������, ';
$lang['Reg_user_total'] = '���� ���, ';
$lang['Hidden_users_zero_total'] = '0 ������� �-';
$lang['Hidden_user_total'] = '����� ��� �-';
$lang['Hidden_users_total'] = '%d ������� �-';
$lang['Guest_users_zero_total'] = '0 ������';
$lang['Guest_users_total'] = '%d ������';
$lang['Guest_user_total'] = '���� ���';
$lang['Record_online_users'] = '���� �������� ��� ���� ���� ����� �� ����� ��� <b>%s</b> �-%s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s���� ����%s';
$lang['Mod_online_color'] = '%s����%s';

$lang['You_last_visit'] = '����� ������� �-%s'; // %s replaced by date/time
$lang['Current_time'] = '���� ����� ��� %s'; // %s replaced by time

$lang['Search_new'] = '��� ������� ��� ������ ������';
$lang['Search_your_posts'] = '��� ���������';
$lang['Search_unanswered'] = '��� ������� ��� �����';

$lang['Register'] = '�����';
$lang['Profile'] = '������';
$lang['Edit_profile'] = '���� �� ������� ���';
$lang['Search'] = '�����';
$lang['Memberlist'] = '����� �����';
$lang['FAQ'] = '����� ������';
$lang['KB_title'] = '������';
$lang['BBCode_guide'] = '����� BBCode';
$lang['Usergroups'] = '������ �������';
$lang['Last_Post'] = '����� ������';
$lang['Moderator'] = '����';
$lang['Moderators'] = '������';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '�������� ���� <b>0</b> ������ ��� ���'; // Number of posts
$lang['Posted_articles_total'] = '�������� ���� <b>%d</b> ������ ��� ���'; // Number of posts
$lang['Posted_article_total'] = '�������� ���� ����� ��� ��� ���'; // Number of posts
$lang['Registered_users_zero_total'] = '���� <b>0</b> ������� ������'; // # registered users
$lang['Registered_users_total'] = '���� <b>%d</b> ������� ������'; // # registered users
$lang['Registered_user_total'] = '���� ����� ���� ���'; // # registered users
$lang['Newest_user'] = '������ ����� ��� ��� ��� <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = '��� ������ ����� ��� ������ ������';
$lang['No_new_posts'] = '��� ������ �����';
$lang['New_posts'] = '������ �����';
$lang['New_post'] = '����� ����';
$lang['No_new_posts_hot'] = '��� ������ ����� [ ������� ]';
$lang['New_posts_hot'] = '������ ����� [ ������� ]';
$lang['No_new_posts_locked'] = '��� ������ ����� [ ���� ]';
$lang['New_posts_locked'] = '������ ����� [ ���� ]';
$lang['Forum_is_locked'] = '������ ����';


//
// Login
//
$lang['Enter_password'] = '��� ���� �� �� ������ ������� ��� ��� ������.';
$lang['Login'] = '�����';
$lang['Logout'] = '�����';

$lang['Forgotten_password'] = '����� �� ������ ���';

$lang['Log_me_in'] = '������� ��������';

$lang['Error_login'] = '����� �� ����� �� ����� ������, �� ����� ������.';


//
// Index page
//
$lang['Index'] = '������';
$lang['No_Posts'] = '��� ������';
$lang['No_forums'] = '������ �� ��� �������';

$lang['Private_Message'] = '����� �����';
$lang['Private_Messages'] = '������ ������';
$lang['Who_is_Online'] = '�� �����';

$lang['Mark_all_forums'] = '��� �� �� �������� ������';
$lang['Forums_marked_read'] = '�� �������� ����� ������';


//
// Viewforum
//
$lang['Topic_Announcement'] = '<b>[ ����� ]</b>';
$lang['Topic_Sticky'] = '<b>[ ���� ]</b>';
$lang['Topic_Moved'] = '<b>[ ����� ]</b>';
$lang['Topic_Poll'] = '<b>[ ��� ]</b>';

//
// Viewtopic
//

$lang['Guest'] = '����';
$lang['Post_subject'] = '����� ������';
$lang['Submit_vote'] = '��� �����';
$lang['View_results'] = '��� �������';
$lang['View_Topic'] = '��� �����';

$lang['No_newer_topics'] = '��� ������ ���� ����� ������ ��';
$lang['No_older_topics'] = '��� ������ ���� ����� ������ ��';
$lang['Topic_post_not_exist'] = '����� �� ������ ����� ���� ������';
$lang['No_posts_topic'] = '��� ������ ������ ����� ��';

$lang['Display_posts'] = '��� ������ ������';
$lang['All_Posts'] = '�� �������';
$lang['Newest_First'] = '������� �����';
$lang['Oldest_First'] = '������� �����';

$lang['Back_to_top'] = '���� ���� �����';

$lang['Read_profile'] = '��� ������� ������'; 
$lang['Send_email'] = '��� ���� ������';
$lang['Visit_website'] = '��� ���� �����';
$lang['ICQ_status'] = '��� ICQ';
$lang['Edit_delete_post'] = '����/��� ����� ��';
$lang['View_IP'] = '��� ������ IP �� �����';
$lang['Delete_post'] = '��� ����� ��';

$lang['wrote'] = '���'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '�����'; // comes before bbcode quote output.
$lang['Code'] = '���'; // comes before bbcode code output.
$lang['PHPCode'] = 'PHP'; // PHP MOD

$lang['Edited_time_total'] = '���� ������� ��-��� %s �-%s; ���� ��� ��� ��� ���'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = '���� ������� ��-��� %s �-%s; ���� %d ����� ��� ���'; // Last edited by me on 12 Oct 2001; edited 2 times in total

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '���� ������';

$lang['Options'] = '��������';

$lang['Post_Announcement'] = '�����';
$lang['Post_Sticky'] = '����';

$lang['Flood_Error'] = '��� �� ���� ����� ����� ����� ���� ��� �� �� ��� ������ �������; ��� ��� ���� ��� ���.';
$lang['Empty_subject'] = '��� ���� ����� ����� ���� ��� ���� ���� ���.';
$lang['Empty_message'] = '��� ���� ������ ����� ���� ��� ����.';
$lang['Forum_locked'] = '����� �� ����: ��� �� ���� �����, �����, �� ����� ������.';
$lang['Topic_locked'] = '���� �� ����: ��� �� ���� ����� ������ �� ����� ������.';

$lang['Button_locked'] = 'Locked';

$lang['No_post_id'] = '��� ���� ����� ����� ������';
$lang['Edit_own_posts'] = '�����, ��� ��� ���� ����� �� �������� ����.';
$lang['Empty_poll_title'] = '��� ���� ������ ����� ���� ���.';
$lang['To_few_poll_options'] = '��� ���� ������ ����� ��� �������� ���.';
$lang['To_many_poll_options'] = '����� ������ ���� ��� �������� ���.';

$lang['Update'] = '����';
$lang['Delete'] = '���';
$lang['Days'] = '����'; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['HTML_is_ON'] = 'HTML <u>����</u>';
$lang['HTML_is_OFF'] = 'HTML <u>����</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>����</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>����</u>';
$lang['Smilies_are_ON'] = '������� <u>������</u>';
$lang['Smilies_are_OFF'] = '������� <u>������</u>';

$lang['Attach_signature'] = '��� ����� (�� ������� ���� ����� �������)';
$lang['Delete_post'] = '��� ����� ��';

$lang['Stored'] = '������ ����� ������.';
$lang['Deleted'] = '������ ����� ������.';
$lang['Poll_delete'] = '���� ��� ���� ������.';
$lang['Vote_cast'] = '������ ������.';

$lang['Topic_reply_notification'] = '���� ��� ����� �����';

$lang['bbcode_b_help'] = '���� �����: [b]����[/b]  (alt+b)';
$lang['bbcode_i_help'] = '���� ����: [i]����[/i]  (alt+i)';
$lang['bbcode_u_help'] = '���� �� �� ����: [u]����[/u]  (alt+u)';
$lang['bbcode_q_help'] = '���� �����: [quote]����[/quote]  (alt+q)';
$lang['bbcode_c_help'] = '���� ���: [code]���[/code]  (alt+c)';
$lang['bbcode_l_help'] = '�����: [list]����[/list] (alt+l)';
$lang['bbcode_o_help'] = '����� ������: [list=]����[/list]  (alt+o)';
$lang['bbcode_p_help'] = '����� �����: [img( | =left | =right )]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = '����� �����: [url]http://url[/url] �� [url=http://url]���� �����[/url]  (alt+w)';
$lang['bbcode_a_help'] = '���� �� �� ��� �-bbCode �������';
$lang['bbcode_s_help'] = '��� ����: [color=red]����[/color]  ���: ��� ���� �� ������ ���� ����=#FF0000';
$lang['bbcode_f_help'] = '���� ����: [size=x-small]���� ���[/size]';

$lang['Emoticons'] = '�������';
$lang['More_emoticons'] = '��� ���� �������';

$lang['Font_color'] = '��� ����';
$lang['color_default'] = '����� ����';
$lang['color_dark_red'] = '���� ���';
$lang['color_red'] = '����';
$lang['color_orange'] = '����';
$lang['color_brown'] = '���';
$lang['color_yellow'] = '����';
$lang['color_green'] = '����';
$lang['color_olive'] = '���';
$lang['color_cyan'] = '����';
$lang['color_blue'] = '����';
$lang['color_dark_blue'] = '���� ���';
$lang['color_indigo'] = '���� ���';
$lang['color_violet'] = '����';
$lang['color_white'] = '���';
$lang['color_black'] = '����';

$lang['Font_size'] = '���� ����';
$lang['font_tiny'] = '�����';
$lang['font_small'] = '���';
$lang['font_normal'] = '����';
$lang['font_large'] = '����';
$lang['font_huge'] = '���';

$lang['Close_Tags'] = '���� ����';
$lang['Styles_tip'] = '���: ���� ������ ������� ������� ����� ��-��� ������.';

//
// CBACK SupportTicket System
//
$lang['cst_phpbbversion'] = 'Your phpBB Version:';

$lang['cst_errmessage'] = 'You didn\'t enter a title for your post. Please press the Back Button of your browser to correct this.';
$lang['cst_errmessage1'] = 'You didn\'t enter a URL to your board. Please press the Back Button of your browser to correct this.';
$lang['cst_phpbbtype'] = 'phpBB Type:';
$lang['cst_standard'] = 'Standard phpBB ';
$lang['cst_premod'] = 'Integramod 132';
$lang['cst_premod1'] = 'Integramod 140';
$lang['cst_premod2'] = 'Integramod 141';
$lang['cst_anddist'] = 'phpBB / IMPortal';

$lang['cst_mods'] = 'Do you have MODs (Modifications) installed at your forum?';
$lang['cst_yes'] = 'Yes';
$lang['cst_no'] = 'No';

$lang['cst_knowledge'] = 'Your knowledge:';
$lang['cst_beginner'] = 'Beginner';
$lang['cst_basicknow'] = 'Basic Knowledge';
$lang['cst_extended'] = 'Advanced Knowledge';
$lang['cst_profi'] = 'Professional';

$lang['cst_beforeerr'] = 'What was done before the problem appeared?';
$lang['cst_selfsolution'] = 'What was done to try to solve the problem?';
$lang['cst_boardlink'] = 'Board URL:';
$lang['cst_phpver'] = 'PHP Version:';
$lang['cst_sqlver'] = 'MySQL Version:';

$lang['cst_head_msg'] = 'Description and Message';
$lang['cst_optional'] = 'not required';
$lang['cst_head'] = 'This Assistant helps you to give the support staff information to help you. Please fill out as many fields you can. Only with this information is it possible to help you quickly and efficiently.   To qualify for support, you will need to give your "Board URL".';
//
//
//
//
// Private Messaging
//
$lang['Private_Messaging'] = '������ ������';

$lang['Login_check_pm'] = '���� �� ������� ������� ���';
$lang['New_pms'] = '<b>%d ������ �����</b>'; // You have 2 new messages
$lang['New_pm'] = '<b>����� ��� ����</b>'; // You have 1 new message
$lang['No_new_pm'] = '��� ������ �����';
$lang['Unread_pms'] = '%d ������ ��� �����';
$lang['Unread_pm'] = '����� ��� ��� �����';
$lang['No_unread_pm'] = '��� ������ ��� �����';
$lang['You_new_pm'] = '����� ����� ���� ������ �� ����� ����� ����� ���';
$lang['You_new_pms'] = '������ ������ ����� ������� �� ����� ����� ����� ���';
$lang['You_no_new_pm'] = '��� ������ ������ ����� �������� ��';

$lang['Unread_message'] = '����� ��� �����';
$lang['Read_message'] = '����� ������';

$lang['Read_pm'] = '��� �����';
$lang['Post_new_pm'] = '��� �����';
$lang['Post_reply_pm'] = '��� ������';
$lang['Post_quote_pm'] = '��� �����';
$lang['Edit_pm'] = '���� �����';

$lang['Inbox'] = '���� ����';
$lang['Outbox'] = '���� ����';
$lang['Savebox'] = '���� ����';
$lang['Sentbox'] = '���� �����';
$lang['Flag'] = '���';
$lang['Subject'] = '�����';
$lang['From'] = '���';
$lang['To'] = '��';
$lang['Date'] = '�����';
$lang['Mark'] = '���';
$lang['Sent'] = '����';
$lang['Saved'] = '����';
$lang['Delete_marked'] = '��� �������';
$lang['Delete_all'] = '��� ���';
$lang['Save_marked'] = '���� �������'; 
$lang['Save_message'] = '���� �����';
$lang['Delete_message'] = '��� �����';

$lang['Display_messages'] = '��� ������ ������'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '�� �������';

$lang['No_messages_folder'] = '��� �� ������ ������� ��';

$lang['PM_disabled'] = '������� ������� ������ ������ ��.';
$lang['Cannot_send_privmsg'] = '�����, ��� ����� ����� ���� ��� ������ ������ ������.';
$lang['No_to_user'] = '��� ���� ����� �� ����� ����� ���� ������.';
$lang['No_such_user'] = '�����, ��� ������ �� ����.';

$lang['Disable_HTML_pm'] = '��� HTML ������ ��';
$lang['Disable_BBCode_pm'] = '��� BBCode ������ ��';
$lang['Disable_Smilies_pm'] = '��� ������� ������ ��';

$lang['Message_sent'] = '������ �����.';

$lang['Click_return_inbox'] = '��� %s���%s ��� ����� ����� ����� ����� ���';
$lang['Click_return_index'] = '��� %s���%s ��� ����� �������';

$lang['Send_a_new_message'] = '��� ����� ����� ����';
$lang['Send_a_reply'] = '��� ������ ������';
$lang['Edit_message'] = '���� ����� �����';

$lang['Notification_subject'] = '������ ����� ����� ����!';

$lang['Find_username'] = '��� �� �����';
$lang['Find'] = '���';
$lang['No_match'] = '�� ����� ������.';

$lang['No_post_id'] = '��� ����� �� �-ID ������';
$lang['No_such_folder'] = '������� �� �����';
$lang['No_folder'] = '�� ������ ������';

$lang['Mark_all'] = '��� ���';
$lang['Unmark_all'] = '��� ����� �� ���';

$lang['Confirm_delete_pm'] = '��� ���� ���� ���� ����� ����� ��?';
$lang['Confirm_delete_pms'] = '��� ���� ���� ���� ����� ������ ���?';

$lang['Inbox_size'] = '���� ����� ����� ��� ���� %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '���� ����� ����� ��� %d%% ����'; 
$lang['Savebox_size'] = '���� ����� ����� ��� %d%% ����'; 

$lang['Click_view_privmsg'] = '��� %s���%s ��� ���� ����� ����� ����� ���';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '���� ������� :: %s'; // %s is username 
$lang['About_user'] = '��� �� %s'; // %s is username

$lang['Preferences'] = '������';
$lang['Items_required'] = '������ �������� �� * ������ ��� �� �� ����� ����.';
$lang['Registration_info'] = '���� �����';
$lang['Profile_info'] = '���� ������';
$lang['Profile_info_warn'] = '���� �� ���� ������ �������';
$lang['Avatar_panel'] = '��� ���� ����� ������';
$lang['Avatar_gallery'] = '������ ����� ������';

$lang['Website'] = '��� �������';
$lang['Location'] = '�����';
$lang['Contact'] = '����� ���';
$lang['Email_address'] = '����� ���� ��������';
$lang['Email'] = '��� ����';
$lang['Send_private_message'] = '��� ����� �����';
$lang['Hidden_email'] = '[ ����� ]';
//$lang['Search_user_posts'] = '��� �� �� ������� �� ����� ��';
$lang['Interests'] = '�������';
$lang['Occupation'] = '�����'; 
$lang['Poster_rank'] = '����� �����';

$lang['Total_posts'] = '���� ������';
$lang['User_post_pct_stats'] = '%.2f%% ��� ���'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f ������ ����'; // 1.5 posts per day
$lang['Search_user_posts'] = '��� �� �� ������� �� %s'; // Find all posts by username

$lang['No_user_id_specified'] = '�����, ��� ������ �� ����.';
$lang['Wrong_Profile'] = '��� �� ���� ����� ������ ��� ���.';

$lang['Only_one_avatar'] = '���� ����� ��� ��� �� ��� ���� ����';
$lang['File_no_data'] = '����� ������ ���� ���� ��� ������';
$lang['No_connection_URL'] = '�� ���� ������ ������ �����';
$lang['Incomplete_URL'] = '������ ������ ���� ����';
$lang['Wrong_remote_avatar_format'] = '������ �� ���� ����� ����� ���� ����';
$lang['No_send_account_inactive'] = '�����, ��� �� ���� ���� �� ������ ���� ������� ���� ���� ����. ��� ��� �� ����� ����� �� ������ ����� ����.';

$lang['Always_smile'] = '���� ���� �������';
$lang['Always_spellcheck'] = '���� ���� �� ����� ���� ������';
$lang['Always_html'] = '���� ���� HTML';
$lang['Always_bbcode'] = '���� ���� BBCode';
$lang['Always_add_sig'] = '��� ���� �� ������ ���';
$lang['Always_notify'] = '���� �� ���� �������';
$lang['Always_notify_explain'] = '���� ���� ���� ����� ���� ����� �����. ���� ����� ��� ����� �� ���� ���� ��� ����.';

$lang['Board_style'] = '����� ������';
$lang['Board_lang'] = '��� ������';
$lang['No_themes'] = '��� ����� ����� �������';
$lang['Timezone'] = '����� ���';
$lang['Date_format'] = '����� ������';
$lang['Date_format_explain'] = '������ ������ ���� �������� �� PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>';
$lang['Signature'] = '�����';
$lang['Signature_explain'] = '��� ���� �� ������ ������� ���� ����. ���� ����� �� %d �����';
$lang['Public_view_email'] = '���� ���� �� ����� ����� ��������� ���';
//
$lang['Current_password'] = '����� ������';
$lang['New_password'] = '����� ����';
$lang['Confirm_password'] = '����� �����';
$lang['Confirm_password_explain'] = '��� ���� ���� �� ������ ������� �� ��� ���� ����� ���� �� ����� �� ����� ����� ��������� ���';

if($userdata['session_logged_in']){ 
    $lang['password_if_changed'] = '��� ���� ���� �� ������ ���� �� ��� ���� ����� ����'; 
    $lang['password_confirm_if_changed'] = '��� ���� ���� �� ������ �� ��� ���� �� ��� ����.'; 
} else { 
    $lang['password_if_changed'] = '���� ��� ������ ��� ������ ������� ������ ������.'; 
    $lang['password_confirm_if_changed'] = ''; 
} 


$lang['PS_security_title']			= '��� ���� �����';
$lang['PS_security_question'] 		= '���� ������';
$lang['PS_security_question_exp'] 	= '����� ���� �� ������ ���� ������ ����� ������� ������� ������.';
$lang['PS_security_answer']			= '����� ������';
$lang['PS_security_answer_exp']		= '���� ������ ����� ����. ���� ��� ����� �� ����� ������, ���� ���� ������ �� ���� ����� ������� ������� ������ ������.';
$lang['PS_security_error']			= '�����';
$lang['PS_security_info']			= '����';
$lang['PS_security_one']			= '����� ������� ������ ���� ���� ������.';
$lang['PS_security_a_exp']			= '<br>���� ����� \'�������\' �� ����� ������� ���. ���� ���� ��� ��� ����� ����� ������� �� ��� ��� �� ���� ���� ���� ��� ���. ��� ���� ����� �� ����� �� ������ ������� (����� ����� ������ ���) ��� ��� ���� ����';
$lang['PS_security_locked']			= '�����, ����� �� ��� �� ���� ������� ��������. ������ ���� �����. �� ��� ����� ����, ��� ���� ��� ����� ����� ������ �� ����� �-id ���.<br><br>��� <a href="login_security.'. $phpEx .'?phpBBSecurity=retreive&sid='. $userdata['session_id'] .'">���</a> ��� ����� �� ����� ������.';
$lang['PS_security_force']			= '�����, ����� �� ������ ���� ���� ������ ������ ��� �������� ����� �������. ��� ���� ����� ������� ��� ���� �� ������ ���� ������ ���� ������. ����!<br><br>��� <b><a href="profile.'. $phpEx .'?mode=register&sub=registering&sid='. $userdata['session_id'] .'">���</a></b> ��� ����� ������� ���.';
$lang['PS_admin_one']				= '������� �������';
$lang['PS_admin_one_exp']			= '<br>��� ���� ������ ���� ����� ���� ����� ������ ���� ����� ������.';
$lang['PS_admin_two']				= '����� ����� ����';
$lang['PS_admin_two_exp']			= '<br>�� �� ���� � \'����\' ���� �� ������ ���� ����� ����� ���� ������ ��-��� ����.';
$lang['PS_admin_three']				= '���� ����';
$lang['PS_admin_three_exp']			= '<br>��� ����� ����� ����� ����� ����� �� ���� �\'����\' ���.';
$lang['PS_admin_err_one']			= '����� ����� ����� ����� ����� ���� �-0. ��� ���� ���� ���.';
$lang['PS_admin_err_two']			= '���� ������ ����� ����, �� ��� ��� id �� ���� ����. ��� ���� ���� ���.';
$lang['PS_admin_error_three']		= '�-id �� ����� ����� ���� ����� ��� �����. ��� ���� ���� ���.';
$lang['PS_admin_error_four']		= '�-id ���� ����� ��� ����� �-0.  ��� ���� ���� ���.';
$lang['PS_admin_error_five']		= '����� �������� ����� ����� ��� �����.  ��� ���� ���� ���.';
$lang['PS_admin_current']			= '���� ���� �����: %A%';
$lang['PS_admin_default']			= '��� ���';
$lang['PS_login_title']				= '����� phpBB';
$lang['PS_login_header']			= '����� phpBB';
$lang['PS_login_username']			= '���� �� �� ������ ���';
$lang['PS_login_email']				= '���� �� ����� ��������� ������ �� ����� ��';
$lang['PS_login_step_one']			= '��� ���: ����� ���� �����';
$lang['PS_login_step_two']			= '��� ���: ����� ���� ������';
$lang['PS_login_step_failed']		= '�����, ����� ������ ����.';
$lang['PS_login_button']			= '���';
$lang['PS_login_validated']			= '���� ������� �� ����� ������. ��� ���� ������ �����.';
$lang['PS_profile_explain']			= '�� ���� ���� ����� ���� ���� ����. ��� �� ���� ����� ��� ������. ����� ����� �� ������ ������ ��� ����� ����, ���� ����� �����. �� ��� �� �� ������, �� �� ����� ����� �� ����� ���.';
$lang['PS_forgot_sq']				= '<a href="login_security.'. $phpEx .'?phpBBSecurity=forgot&sid='. $userdata['session_id'] .'">���� �� ����� ������� ���?</a>';
$lang['PS_forgot_exp']				= '�� ���� �� ����� ������� ���, ����� ����� ��� �� ������� ������� ��� ������ ���� �� ���� ������ ���. ����� ������ ��� ��� '. $board_config['board_email'] .'. �� ��� �� ���� ����� �� ������� ������� ���� ��, ��� ��������� �� ������� ������� ������� ���� ��������. ���� ����� ����, ����� ����� ����� ����� ��� ����� ������ ����� ��� ���.';
$lang['PS_user_lock']				= '��� ����';
$lang['PS_user_lock_exp']			= '�� ������ ����, ��� ��� ������� ���� ������, ��� ����� ������ �� ���� ������ ���.';
$lang['PS_user_reset']				= '����� ���� ������';
$lang['PS_user_reset_exp']			= '�����: �� ���� ���, ������ ����� ������ ���� ���. ������ ���� �� ������ ������ �������� ���.';
$lang['PS_user_status_l']			= '����� �� ���� ����. ����� ���� �� <b>����� �� �����</b> ������.';
$lang['PS_user_status_u']			= '����� �� ������ ������ ����. ����� ���� �� <b>����</b> �� ������.';
$lang['PS_pm_subject']				= '������ ����.';
$lang['PS_pm_message']				= 
'������ ���� ����. ���� ������.

������ ����: %U%
IP ��� ���� ����: %I%

���� ����� ��������, �� �����. �� �� �� ���� IP �����, ���� �� �-IP ��� �� ������ ��������� ����� �������.';
$lang['PS_auto_message']			= '����� �� ������ ���� ������ ���� ��.  �� �� ���� �� ���� �� ���� ���� �����, ��� ��� ��� �� ����� ����� �� ������.<br /><br /><b>����� ����� �� ������:</b> ';
$lang['PS_admin_ban']				= '����� ��������';
$lang['PS_admin_ban_exp']			= '<br>������ ����� �������� �� IP ����� ������ ������� �����. ������ �� ����� �� �� ��������� ������. �� ��� ���� ������ ��������� ������, ��� ��� � \'����\' ����� �� ������� ������.';
$lang['PS_admin_sessions']			= '������� ������� ��������';
$lang['PS_admin_sessions_exp']		= '<br>�� ���� �������� ��� ����� ���� ���� ���� ����� ��, ���� ��� �������� ���� ��.';
$lang['PS_clike']					= '����� Clike';
$lang['PS_union']					= '����� Union';
$lang['PS_sql']						= '����� ����� SQL';
$lang['PS_ddos']					= '����� DDoS';
$lang['PS_caught_left']				= 'IP';
$lang['PS_caught_c_left']			= '���� �-';
$lang['PS_caught_c_right']			= '���� �-';
$lang['PS_caught_right']			= '�������';
$lang['PS_caught_msg']				= '��� ������� �� ��� ���� ����� ����.';
$lang['PS_special']					= '����� phpBB :: ���� �������';
$lang['PS_special_admins']			= '���� �� ������ ������ ��������';
$lang['PS_special_admins_exp']		= '<br>���� �� ���� ��� ������ ������ �������� ����� ���� ���. �� �� ��� �� ���� ������ ����� ���� ���� ����� ����.';
$lang['PS_special_admins_total']	= '<br>�� �� ���� %X% ������� ������� ������ ���� \'���� ����\' ���� ��������.';
$lang['PS_special_admins_offset']	= '<font color="red"> ����� �� ������ ���� ��� �� ���� ������ ������ ����� �������� ��������!</font>';
$lang['PS_special_mods']			= '���� �� ������ ��������';
$lang['PS_special_mods_exp']		= '<br>���� �� ���� ��� ������ �������� ����� ���� ���. �� �� ��� �� ���� ������ ����� ���� ����� ����.';
$lang['PS_special_mods_total']		= '<br>�� �� ���� %X% ������� ������� ������ ���� \'����\' ����� ��������.';
$lang['PS_special_mods_offset']		= '<font color="red"> ����� �� ������ ���� ��� �� ���� ������ ����� �������� ��������!</font>';
$lang['PS_use_special']				= '���� �� ������� ���� ����� ����';
$lang['PS_use_special_exp']			= '<br>����� ���, �� ����� ������ ������ �� ������ ������ ��������.';
$lang['PS_fopen_fwrite']			= '����� ����� �����';
$lang['PS_system']					= '����� ����� Perl';
$lang['PS_chr']						= '����� ����� �����';
$lang['PS_cback']					= '����� Sanity Mix Worm';
$lang['PS_allow_user_change']		= '���� �������� ����� �� ���� ������� ����. <b>�� �����.</b>';
$lang['PS_notify_admin_by_pm']		= '����� �����';
$lang['PS_notify_admin_by_em']		= '���� ��������';
$lang['PS_option_ban']				= '����';
$lang['PS_option_block']			= '����';
$lang['PS_option_ignore']			= '�����';
$lang['PS_option_warning']			= '<b>�����:</b> ����� �� ��� ������ � \'�����\' ����� ��� ��� ������ ����� ������ ���� ���. ��� �����.';
$lang['PS_list_choice_one']			= '��';
$lang['PS_list_choice_two']			= '��';
$lang['PS_list_one']				= '��� ����� ������ <b>DDoS</b>?';
$lang['PS_list_two']				= '��� ����� ������ <b>Clike</b>?';
$lang['PS_list_three']				= '��� ����� ������ <b>UNION</b>?';
$lang['PS_list_four']				= '��� ����� ������ <b>Sanity Mix Worm</b>?';
$lang['PS_list_five']				= '��� ����� ������ <b>����� SQL</b>?';
$lang['PS_list_six']				= '��� ����� ������ <b>����� Perl</b>?';
$lang['PS_list_seven']				= '��� ����� ������ <b>����� �����</b>?';
$lang['PS_list_eight']				= '��� ����� ������ <b>�����/����� ����</b>?';
$lang['PS_blocked_line']			= '<span dir="ltr"><b>&nbsp;����� phpBB &copy;&nbsp;</b> ���� %T% ������� �����.</span>';
$lang['PS_blocked_line2']			= '<a href="login_security.php?phpBBSecurity=caught" class="copyright">����</a> ��-��� ����� phpBB � <a href="http://phpbb-amod.com" class="copyright" target="_blank">phpBB-Amod</a>';


#==== Added in 1.0.2
$lang['PS_die_msg_cookies']			= '���� ����� ���� ������ �� ������ �� ������ ���. ��� ��� �� ������� ��� ������ ���.';
$lang['PS_die_msg_banned']			= '����� ���� ��.';
$lang['PS_die_msg_ddos']			= '����� ���� ������ ������ ������ DDoS. �� ��� ���� ���-�� �� ���� ���� �� �� ���� ����� ���.';
$lang['PS_die_msg_encoded']			= '����� ���� ������ ������ ����� ������� ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_union']			= '����� ���� ������ ������ ����� ���� union ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_clike']			= '����� ���� ������ ������ ����� ���� clike ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_sql']				= '����� ���� ������ ������ sql ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_fwrite']			= '����� ���� ������ ������ ����� ���� ����� ����� ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_perl']			= '����� ���� ������ ������ ����� ���� ����� perl ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_cback']			= '����� ���� ������ ������ ����� ���� sanity mix worm ���� �� &amp; ��� ����� ����� ����� ����� ���� ���� �����.';
$lang['PS_die_msg_agent']			= '����� ���� ���� ������� ���� ������ ��� �����.';
$lang['PS_die_msg_referer']			= '����� ���� ���� �������� �������� ��� �����.';
$lang['PS_die_msg_staff']			= '����� ���� ��� �� ���� ����� �����, ��� ������� ������� �� ����� �� ����� ��� ���� ������.';

$lang['PS_die_msg_email']			= '�� ��� ���� ������ ����� �� ���� ����� ����, ��� ��� ��� �� ����� ����� � %����%.';

$lang['PS_admin_submit']			= '���� ������';
$lang['PS_admin_submit_special']	= '���� ������ �������';
$lang['PS_admin_config_saved']		= '������� ������.';
$lang['PS_admin_special_saved']		= '������� �������� ������.';
$lang['PS_return_config']			= '��� %s<b>���</b>%s ��� ����� ����� �������.';
$lang['PS_return_special']			= '��� %s<b>���</b>%s ��� ����� ����� ������� ��������.';
$lang['PS_admin_not_authed']		= '�����, ��� �� ���� �����/����� ���� ������.';
$lang['PS_admin_grant_access']		= '��� ��� ���� ����� ������ ������ ��� ����� ��� ���� ����� ����� ��.';
$lang['PS_admin_deny_access']		= '��� ��� ���� ����� ������ ������ ��� ����� ��� �� ����� ����� ����� ��.';
$lang['PS_block_agents']			= '����� ����� ������';
$lang['PS_block_agents_exp']		= '��� ���� ���� �� ��� ���� ���� ������. ����� ��� ���� ���� ����� ��� ������ �� <b>Firefox</b>, ��� ��� ������ ������ Firefox ����.';
$lang['PS_unblock_agents']			= '����� ����� ����� ������';
$lang['PS_block_referers']			= '���� �����';
$lang['PS_block_referers_exp']		= '��� ���� ���� �� ��� ���� ���� ������. ����� ��� ���� ���� ����� ��� ������ �� <b>search.yahoo.com</b> ���, ��� ��� ������ ����� ��� ��� ����� ���� ����.';
$lang['PS_unblock_referers']		= '���� ����� �����';
$lang['PS_per_page']				= '��� ������� ��� ���� ����� ����� ������';
$lang['PS_ddos_level']				= '��� ���� �-DDoS:';
$lang['PS_ddos_high']				= '����';
$lang['PS_ddos_medium']				= '�������';
$lang['PS_ddos_low']				= '�����';

$lang['PS_members_title']			= '���� ����� �� �� ��� ����� ������ ������ ����.';
$lang['PS_members_pt_check']		= '����� ����� [b]������ ����[/b], �����:';
$lang['PS_members_pt_check_yc']		= '���� ������� ���� ����:';
$lang['PS_members_pt_check_nc']		= '���� ������� �� ���� ������ IP.';
$lang['PS_user_exploits']			= '������� ������ ����';

$lang['PS_users_tries']				= '������� ������ �� %N%';
$lang['PS_users_id']				= 'Id';
$lang['PS_users_ip']				= 'Ip';
$lang['PS_users_link']				= '�����';
$lang['PS_users_reason']			= '����';
$lang['PS_users_date']				= '�����';

$lang['PS_search_title']			= '��� �� ���� �������';
$lang['PS_search_ip']				= '��� ���� IP';
$lang['PS_search_submit']			= ' ���� ����� ';
$lang['PS_search_partial']			= '����� �����';
$lang['PS_search_exact']			= '����� �������';
$lang['PS_search_unban']			= '���� ����� IP ��';
$lang['PS_search_banned']			= '���� ����';

$lang['PS_backup_on']				= '����� ���� ������� ����';
$lang['PS_backup_folder']			= '������ ���� �� �������';
$lang['PS_backup_folder_exp']		= '������� <b>�����</b> ������� ������ �� ������ ���, ��� <b>�����</b> ����� ���� <i>������</i> -> 777';
$lang['PS_backup_filename']			= '�� ������ ������� ���� �������';
$lang['PS_backup_filename_exp']		= '<i>�����:</i> �����';
$lang['PS_backup_time']				= '��� �� ��� ������ ������';
$lang['PS_backup_total']			= '��� ������� ������: %N%';
$lang['PS_backup_remove']			= '��� ���� �����';

$lang['Avatar'] = '��� ����';
$lang['Avatar_explain'] = '���� ����� ����� ���� ��� ����� �������. ���� ����� ����� ��� ���� ��� ���, ����� �� ���� ����� ���� �-%d �������, ����� �� ���� ����� ���� �-%d �������, ����� ����� �� ���� �-%d KB.';
$lang['Upload_Avatar_file'] = '���� ��� ���� ������ ���';
$lang['Upload_Avatar_URL'] = '���� ��� ���� ������';
$lang['Upload_Avatar_URL_explain'] = '���� �� ������ �� ������ ����� �� ����� ���� �����, ������ ����� ���� ��.';
$lang['Pick_local_Avatar'] = '��� ��� ���� ��������';
$lang['Link_remote_Avatar'] = '����� ���� ���� ���� ����';
$lang['Link_remote_Avatar_explain'] = '���� �� ������ �� ������ ����� �� ����� ���� ����� ���� ������� ����.';
$lang['Avatar_URL'] = '����� ������ ���� �����';
$lang['Select_from_gallery'] = '��� ��� ���� ��������';
$lang['View_avatar_gallery'] = '��� �������';

$lang['Select_avatar'] = '��� ��� ����';
$lang['Return_profile'] = '��� ��� ����';
$lang['Select_category'] = '��� �������';

$lang['Delete_Image'] = '��� �����';
$lang['Current_Image'] = '����� ������';

$lang['Notify_on_privmsg'] = '���� �� ����� ����� ����';
$lang['Popup_on_privmsg'] = '���� ���� ��� ����� ����� ����'; 
$lang['Popup_on_privmsg_explain'] = '��� ����� ������ ����� ���� ��� ��� ����� ���� ���� ������ ������ ����� ������.';
$lang['Hide_user'] = '���� �� ��� ������ ���';

$lang['Profile_updated'] = '������� ��� �����';

$lang['Password_mismatch'] = '�������� ������ ���� ������.';
$lang['Current_password_mismatch'] = '������ ������� ������ �� ����� ������ �������� ����� �������.';
$lang['Password_long'] = '������ ����� ����� ���� �-32 �����.';
$lang['Username_taken'] = '�����, ��� �� ����� �� ��� ����.';
$lang['Username_invalid'] = '�����, ��� �� ����� �� ���� ����� ������ ��� \'.';
$lang['Username_disallowed'] = '�����, ��� �� ����� �� �� �����.';
$lang['Username_numeric'] = '�����, ��� �� ������ �� ���� ����� ����.';
$lang['Email_taken'] = '�����, ��� ����� ����� ��������� ����� ��� ������ ���.';
$lang['Email_banned'] = '�����, ��� ����� ����� ��������� �����.';
$lang['Email_invalid'] = '�����, ��� ����� ����� ��������� ������.';
$lang['Signature_too_long'] = '������ ��� ����� ���.';
$lang['Fields_empty'] = '��� ���� ���� �� ����� �������.';
$lang['Avatar_filetype'] = '��� ���� ���� ����� ���� ����� .jpg, .gif �� .png';
$lang['Avatar_filesize'] = '���� ���� ����� ���� ����� ���� ����� ���� �-%d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = '���� ����� ���� ����� ���� �-%d ������� ���� �-%d ������� ����'; 

$lang['Welcome_subject'] = '���� ��� �������� �� %s'; // Welcome to my.com forums
$lang['New_account_subject'] = '����� ����� ���';
$lang['Account_activated_subject'] = '������ �����';

$lang['Account_added'] = '���� ������. ������ ����. ��� ���� ������ �� �� ������ ������� ���';
$lang['Account_inactive'] = '������ ����. �� ����� �� ���� ����� �������. ���� ������ ����� ������ ����� ��������� ���. ���� �� ���� ����� ��������� ��� ����� ����';
$lang['Account_inactive_admin'] = '������ ����. �� ����� �� ���� ����� ������� ��-��� ������� �������. ����� ���� ����� ��� ���� ��� ���� ������ �����';
$lang['Account_active'] = '������ �����. ���� ������';
$lang['Account_active_admin'] = '������ �����';
$lang['Reactivate'] = '���� ���� �� ������!';
$lang['Already_activated'] = '��� ����� �� ������';
$lang['COPPA'] = '������ ���� ��� ���� ���� �����. ���� �� ���� ����� ��������� ��� ������.';

$lang['Wrong_activation'] = '���� ������ ������ �� ���� ��� ������ �������.';
$lang['Send_password'] = '��� ��� ����� ����'; 
$lang['Password_updated'] = '����� ���� �����; ���� �� ���� ����� ��������� ��� ������.';
$lang['No_email_match'] = '����� ����� ��������� ������ �� ����� ���� ������ ��� ������.';
$lang['New_password_activation'] = '����� ����� ����';
$lang['Password_activated'] = '������ ����� ����. ��� ������, ����� ������ ������ ����� ������.';

$lang['Send_email_msg'] = '��� ����� ���� ��������';
$lang['No_user_specified'] = '�� ����� �����';
$lang['User_prevent_email'] = '����� �� �� ������� ���� ����. ��� ����� �� ����� �����.';
$lang['User_not_exist'] = '������ �� ����';
$lang['CC_email'] = '��� ���� �� ������ �����';
$lang['Email_message_desc'] = '����� �� ���� ����� ����, �� �� ����� �� HTML �� BBCode. ����� ����� ������ �� ����� ������ ����� ��������� ���.';
$lang['Flood_email_limit'] = '��� �� ���� ����� ����� ����� ���� ��. ��� ��� ����� ����.';
$lang['Recipient'] = '����';
$lang['Email_sent'] = '������ �����.';
$lang['Send_email'] = '��� �����';
$lang['Empty_subject_email'] = '��� ���� ����� ����� ������.';
$lang['Empty_message_email'] = '��� ���� ������ ����� ������.';


//
// Visual confirmation system strings
//
//$lang['Confirm_code_wrong'] = '��� ������ ������ ����';
//$lang['Too_many_registers'] = '���� �� ���� ������� ������ ������ ��. ��� ��� ����� ����.';
//$lang['Confirm_code_impaired'] = '�� ��� �� ���� ����� �� ���� ������ ��� ��� �� %s����� �����%s �����.';
//$lang['Confirm_code'] = '��� �����';
//$lang['Confirm_code_explain'] = '���� �� ���� ����� ��� ���� ���� ����. ���� ���� ������� ������� ������ ������ ���� �� �� ���� �����.';



//
// Memberslist
//
$lang['Select_sort_method'] = '��� ���� �����';
$lang['Sort'] = '���';
$lang['Sort_Top_Ten'] = '���� ������� �������';
$lang['Sort_Joined'] = '����� �������';
$lang['Sort_Username'] = '�� �����';
$lang['Sort_Location'] = '�����';
$lang['Sort_Posts'] = '���� ������';
$lang['Sort_Email'] = '���� ��������';
$lang['Sort_Website'] = '��� �������';
$lang['Sort_Ascending'] = '��� ����';
$lang['Sort_Descending'] = '��� ����';
$lang['Order'] = '���';


//
// Group control panel
//
$lang['Remove_selected'] = '��� ������';
$lang['Add_member'] = '���� ���';
$lang['None'] = '���';

//
// Search
//
$lang['Sort_by'] = '��� ���';
//
$lang['No_search_match'] = '��� ������ �� ������ �������� ��������� ������ ���';
$lang['Close_window'] = '���� ����';

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�����, ��� �� %s ������ ����� ������ ������ ��.';
$lang['Sorry_auth_sticky'] = '�����, ��� �� %s ������ ����� ������ ������ ������ ��.'; 
$lang['Sorry_auth_read'] = '�����, ��� �� %s ������ ����� ������ ������ ��.'; 
$lang['Sorry_auth_post'] = '�����, ��� �� %s ������ ����� ������ ������ ��.'; 
$lang['Sorry_auth_reply'] = '�����, ��� �� %s ������ ����� ������� ������ ��.';
$lang['Sorry_auth_edit'] = '�����, ��� �� %s ������ ����� ������ ������ ��.'; 
$lang['Sorry_auth_delete'] = '�����, ��� �� %s ������ ����� ������ ������ ��.';
$lang['Sorry_auth_vote'] = '�����, ��� �� %s ������ ������ ������ ������ ��.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>������� ��������</b>';
$lang['Auth_Registered_Users'] = '<b>������� ������</b>';
$lang['Auth_Users_granted_access'] = '<b>������� ���� ���� ������</b>';
$lang['Auth_Moderators'] = '<b>������</b>';
$lang['Auth_Administrators'] = '<b>������ ������</b>';

$lang['Not_Moderator'] = '��� �� ���� ����� ��.';
$lang['Not_Authorised'] = '�� �����';
$lang['Admin_reauthenticate'] = '��� ���� �� ������ ��� ���� ���� �� ���� ����.';

$lang['You_been_banned'] = '����� ������ ��.<br />��� ��� �� ���� ���� �� ����� ����� �� ������ ����� ����.';


//
// Viewonline
//
$lang['Online_explain'] = '������� ���� ������� �� ������ �������� ���� ���� ����� ��������';

$lang['Forum_Location'] = '����� ������';
$lang['Last_updated'] = '����� �������';

$lang['Forum_index'] = '������ ������';
$lang['Logging_on'] = '�����';
$lang['Viewing_profile'] = '���� �������';

//
// Moderator Control Panel
//

$lang['Select'] = '���';
$lang['Move'] = '����';
$lang['Lock'] = '���';
$lang['Unlock'] = '���� �����';

$lang['Topics_Moved'] = '������� ����� ������.';

//
// Timezones ... for display on each page
//
$lang['All_times'] = '�� ������ �� %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 ����';
$lang['-11'] = 'GMT - 11 ����';
$lang['-10'] = 'GMT - 10 ����';
$lang['-9'] = 'GMT - 9 ����';
$lang['-8'] = 'GMT - 8 ����';
$lang['-7'] = 'GMT - 7 ����';
$lang['-6'] = 'GMT - 6 ����';
$lang['-5'] = 'GMT - 5 ����';
$lang['-4'] = 'GMT - 4 ����';
$lang['-3.5'] = 'GMT - 3.5 ����';
$lang['-3'] = 'GMT - 3 ����';
$lang['-2'] = 'GMT - 2 ����';
$lang['-1'] = 'GMT - ���';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + ���';
$lang['2'] = '���� �����';
$lang['3'] = 'GMT + 3 ����';
$lang['3.5'] = 'GMT + 3.5 ����';
$lang['4'] = 'GMT + 4 ����';
$lang['4.5'] = 'GMT + 4.5 ����';
$lang['5'] = 'GMT + 5 ����';
$lang['5.5'] = 'GMT + 5.5 ����';
$lang['6'] = 'GMT + 6 ����';
$lang['6.5'] = 'GMT + 6.5 ����';
$lang['7'] = 'GMT + 7 ����';
$lang['8'] = 'GMT + 8 ����';
$lang['9'] = 'GMT + 9 ����';
$lang['9.5'] = 'GMT + 9.5 ����';
$lang['10'] = 'GMT + 10 ����';
$lang['11'] = 'GMT + 11 ����';
$lang['12'] = 'GMT + 12 ����';
$lang['13'] = 'GMT + 13 ����';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ����';
$lang['tz']['-11'] = 'GMT - 11 ����';
$lang['tz']['-10'] = 'GMT - 10 ����';
$lang['tz']['-9'] = 'GMT - 9 ����';
$lang['tz']['-8'] = 'GMT - 8 ����';
$lang['tz']['-7'] = 'GMT - 7 ����';
$lang['tz']['-6'] = 'GMT - 6 ����';
$lang['tz']['-5'] = 'GMT - 5 ����';
$lang['tz']['-4'] = 'GMT - 4 ����';
$lang['tz']['-3.5'] = 'GMT - 3.5 ����';
$lang['tz']['-3'] = 'GMT - 3 ����';
$lang['tz']['-2'] = 'GMT - 2 ����';
$lang['tz']['-1'] = 'GMT - ���';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + ���';
$lang['tz']['2'] = '���� �����';
$lang['tz']['3'] = 'GMT + 3 ����';
$lang['tz']['3.5'] = 'GMT + 3.5 ����';
$lang['tz']['4'] = 'GMT + 4 ����';
$lang['tz']['4.5'] = 'GMT + 4.5 ����';
$lang['tz']['5'] = 'GMT + 5 ����';
$lang['tz']['5.5'] = 'GMT + 5.5 ����';
$lang['tz']['6'] = 'GMT + 6 ����';
$lang['tz']['6.5'] = 'GMT + 6.5 ����';
$lang['tz']['7'] = 'GMT + 7 ����';
$lang['tz']['8'] = 'GMT + 8 ����';
$lang['tz']['9'] = 'GMT + 9 ����';
$lang['tz']['9.5'] = 'GMT + 9.5 ����';
$lang['tz']['10'] = 'GMT + 10 ����';
$lang['tz']['11'] = 'GMT + 11 ����';
$lang['tz']['12'] = 'GMT + 12 ����';
$lang['tz']['13'] = 'GMT + 13 ����';

$lang['datetime']['Sunday'] = '�����';
$lang['datetime']['Monday'] = '���';
$lang['datetime']['Tuesday'] = '�����';
$lang['datetime']['Wednesday'] = '�����';
$lang['datetime']['Thursday'] = '�����';
$lang['datetime']['Friday'] = '����';
$lang['datetime']['Saturday'] = '���';
$lang['datetime']['Sun'] = '�\'';
$lang['datetime']['Mon'] = '�\'';
$lang['datetime']['Tue'] = '�\'';
$lang['datetime']['Wed'] = '�\'';
$lang['datetime']['Thu'] = '�\'';
$lang['datetime']['Fri'] = '�\'';
$lang['datetime']['Sat'] = '�\'';
$lang['datetime']['January'] = '�����';
$lang['datetime']['February'] = '������';
$lang['datetime']['March'] = '���';
$lang['datetime']['April'] = '�����';
$lang['datetime']['May'] = '���';
$lang['datetime']['June'] = '����';
$lang['datetime']['July'] = '����';
$lang['datetime']['August'] = '������';
$lang['datetime']['September'] = '������';
$lang['datetime']['October'] = '�������';
$lang['datetime']['November'] = '������';
$lang['datetime']['December'] = '�����';
$lang['datetime']['Jan'] = '01';
$lang['datetime']['Feb'] = '02';
$lang['datetime']['Mar'] = '03';
$lang['datetime']['Apr'] = '04';
$lang['datetime']['May'] = '05';
$lang['datetime']['Jun'] = '06';
$lang['datetime']['Jul'] = '07';
$lang['datetime']['Aug'] = '08';
$lang['datetime']['Sep'] = '09';
$lang['datetime']['Oct'] = '10';
$lang['datetime']['Nov'] = '11';
$lang['datetime']['Dec'] = '12';

// calendar pcp stuff
$lang['Sunday'] = '�����';
$lang['Monday'] = '���';

//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = '�����';
$lang['Personal_Gallery_Of_User'] = '������� ������ �� %s';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '����';
$lang['Critical_Information'] = '���� �����';

$lang['General_Error'] = '����� �����';
$lang['Critical_Error'] = '����� �����';
$lang['An_error_occured'] = '������ �����';
$lang['A_critical_error'] = '������ ����� �����';

$lang['Topic_description'] = '����� ����� ���';
$lang['Description'] = '����� �����';

// 
// Begin Approve_Posts_Mod Block : 22
// 

//stuff user sees
$lang['approve_topic_has_awaiting'] = '����� �� ������ �������� ������';
$lang['approve_topic_is_awaiting'] = '����� ����� ������';
$lang['approve_post_is_awaiting'] = '������ ������ ������';

$lang['approve_posts_error_obtain'] = '�� ���� ���� ���� ����� ������';
$lang['approve_posts_error_delete'] = '�� ���� ����� ���� ����� ������';
$lang['approve_posts_error_insert'] = '�� ���� ������ ���� ����� ������';

$lang['approve_notify_subject'] = '��� �����';
$lang['approve_notify_link'] = '���� ����� ���� ������� ������ ����. ��� ����� �� ��� ���: ';
$lang['approve_notify_approve_link'] = '��� ���� ����� �� ��� ���: ';
$lang['approve_notify_message'] = '������ ����� ����.';
$lang['approve_notify_message_exceeded'] = '���� ������...';
$lang['approve_notify_poster'] = '*** ����� �� ������ ��� ����� ����� ����� ������ �� ������. ***';
$lang['approve_notify_user_link'] = '������ �����. ��� ����� ������ ��, ��� ���:';
$lang['approve_notify_user_topic'] = '�� ������� ��� ����� �� �����.';
$lang['approve_notify_auto_app'] = '����� ����� �������.';
$lang['approve_notify_auto_app_msg'] = '��� ����� �������� ���� ����� �������� �������.';
$lang['approve_notify_auto_app_rem'] = '����� �� ���� ����� �������.';
$lang['approve_notify_auto_app_rem_msg'] = '��� �� ����� �������� ���� ���� ����� �������� �������.';
$lang['approve_notify_moderation'] = '����� �����.';
$lang['approve_notify_moderation_msg'] = '��� ����� ����� ���� ����� �������� �������.';
$lang['approve_notify_moderation_rem'] = '����� �� ���� �����.';
$lang['approve_notify_moderation_rem_msg'] = '��� �� ����� ���� ���� ����� �������� �������.';
$lang['approve_notify_post_approved'] = '������ �����!.';

$lang['approve_topic_all_current'] = '��� �� �� ������� �������� ����� ��';
$lang['approve_topic_all_future'] = '����� ������� ��� ������� �������� ����� ��';
$lang['approve_topic_all_future_rem'] = '��� ����� ������� ��� ������� �������� ����� ��';
$lang['approve_topic_moderate'] = '��� ���� �� ��� ������� ��������';
$lang['approve_topic_moderate_rem'] = '��� ����� ����';
$lang['approve_post_approve'] = '��� ����� ��';
$lang['approve_topic_approve'] = '��� ���� ��';
$lang['approve_user_auto_approve'] = '��� �������� ����� ��';
$lang['approve_user_auto_approve_rem'] = '��� ����� �������';
$lang['approve_user_moderate'] = '��� ����� ��';
$lang['approve_user_moderate_rem'] = '��� �����';

//stuff admin sees
$lang['approve_admin_enable'] = '���� ����� �������:';
$lang['approve_admin_posts'] = '��� ������';
$lang['approve_admin_users_enable'] = '���:';
$lang['approve_admin_users_all'] = '�� �������� ��������';
$lang['approve_admin_users_mod'] = '�������� �������� ������� ����';
$lang['approve_admin_posts_topics'] = '��� �:';
$lang['approve_admin_posts_enable'] = '������ �����';
$lang['approve_admin_poste_enable'] = '������ ������';
$lang['approve_admin_topics_enable'] = '������ �����';
$lang['approve_admin_topice_enable'] = '������ ������';
$lang['approve_admin_hide_topics_enable'] = '���� ������ ��� �����:';
$lang['approve_admin_hide_posts_enable'] = '���� ������ ��� �����:';
$lang['approve_admin_button_find'] = '��� �������';
$lang['approve_admin_button_add'] = '���� �����';
$lang['approve_admin_button_rem'] = '��� �����';
$lang['approve_admin_moderators'] = '������:';
$lang['approve_admin_forums'] = '�������';
$lang['approve_admin_users'] = '�������';
$lang['approve_admin_author'] = '����';
$lang['approve_admin_subject'] = '�����';
$lang['approve_admin_empty'] = '--���--';
$lang['approve_admin_remove'] = '���';
$lang['approve_admin_approve'] = '���';
$lang['approve_admin_add_approved_submit'] = '����� �������';
$lang['approve_admin_add_moderated_submit'] = '���';
$lang['approve_admin_page'] = '����: ';
$lang['approve_admin_remove_moderation'] = '��� �����';
$lang['approve_admin_remove_approval'] = '��� �����';

//Admin menu titles moved to lang_admin.php'; 

$lang['approve_admin_notify_user_enable'] = '����� ����� ������ ������:';
$lang['approve_admin_notify_admin_enable'] = '����� ����:';
$lang['approve_admin_notify_type'] = '���� ���: ';
$lang['approve_admin_notify_pm_enable'] = '����� �����';
$lang['approve_admin_notify_email_enable'] = '���� ��������';
$lang['approve_admin_notify_message_enable'] = '���� ����� ������: ';
$lang['approve_admin_notify_message_length'] = '���� ����� (0 = ���)';
$lang['approve_admin_notify_posts_topics'] = '���� �:';
$lang['approve_admin_notify_posts_enable'] = '������ �����';
$lang['approve_admin_notify_poste_enable'] = '������ ������';
$lang['approve_admin_notify_topics_enable'] = '������ �����';
$lang['approve_admin_notify_topice_enable'] = '������ ������';
$lang['approve_admin_notify_user_invalid'] = '���� ����� �� ������.<br/>������ ��� ����: ';
$lang['approve_admin_notify_user_empty'] = '���� ����� �� ������.<br/>��� ���� ����� ����� ���� ��� ������.';

$lang['approve_admin_username'] = '�� �����';
$lang['approve_admin_users_moderated_users'] = '������� �������';
$lang['approve_admin_users_auto_approved'] = '������� �� ����� �������';
$lang['approve_admin_users_of'] = '������� <b>%d</b>-<b>%d</b> ���� <b>%d</b>'; // Replaces with: Users 1-2 of 2 for example
$lang['approve_admin_users_id_remove_error'] = '�-id �� ������ ����� ����.';
$lang['approve_admin_users_moderation_removed'] = '������ "%s" ���� ������.';
$lang['approve_admin_users_approval_removed'] = '������ "%s" ���� ������ �������.';
$lang['approve_admin_users_approval_added'] = '������ "%s" ���� ������ �������.';
$lang['approve_admin_users_moderated_added'] = '������ "%s" ���� ������.';
$lang['approve_admin_add_approved_user'] = '���� ����� ������ �������';
$lang['approve_admin_add_moderated_user'] = '���� ����� �����';

$lang['approve_admin_topics_title'] = '����� �����';
$lang['approve_admin_approve_topic'] = '��� ����';
$lang['approve_admin_topics_moderated_topics'] = '������ �������';
$lang['approve_admin_topics_awaiting'] = '������ �������� ������';
$lang['approve_admin_topics_auto_approved'] = '������ �� ����� �������';
$lang['approve_admin_topics_of'] = '������ <b>%d</b>-<b>%d</b> ���� <b>%d</b>'; // Replaces with: Topics 1-2 of 2 for example
$lang['approve_admin_topics_id_remove_error'] = '�-id �� ����� ����� ����.';
$lang['approve_admin_topics_moderation_removed'] = '����� "%s" ���� ������.';
$lang['approve_admin_topics_approval_removed'] = '����� "%s" ���� ������ �������.';
$lang['approve_admin_topics_approval_added'] = '����� "%s" ���� ������ �������.';
$lang['approve_admin_topics_moderated_added'] = '����� "%s" ���� ������.';
$lang['approve_admin_topics_approved'] = '����� "%s" ����.';

$lang['approve_admin_approve_post'] = '��� �����';
$lang['approve_admin_posts_awaiting'] = '������ �������� ������';
$lang['approve_admin_posts_of'] = '������ <b>%d</b>-<b>%d</b> ���� <b>%d</b>'; // Replaces with: Posts 1-2 of 2 for example
$lang['approve_admin_posts_id_remove_error'] = '�-id �� ������ ������ ������.';
$lang['approve_admin_posts_approved'] = '������ "%s" �� "%s" �����.'; //Replaces with: The post "blah" by "mr.man" has been approved.

$lang['approve_admin_forums_moderated'] = '������� ��� �����';
$lang['approve_admin_Stored_replacement'] = $lang['Stored'] . '<br/><br/> ��� ����� ������ ������ ���� ���� ���� ����. <br/> �� ���� �� ������ ���� ���� ���.';
// 
// End Approve_Posts_Mod Block : 22
//

$lang['Home'] = '���';

// Start add - Fully integrated shoutbox MOD
$lang['Shoutbox'] = '���� ������';
$lang['Shoutbox_date'] = ' d/m/Y �- H:i:s';
$lang['Shout_censor'] = '����� ����� !';
$lang['Shout_refresh'] = '����';
$lang['Shout_text'] = '����� ���';
$lang['Viewing_Shoutbox']= '���� ����� ������';
$lang['Censor'] ='����';
$lang['This_posts_IP'] = '����� IP �� ����� ��';
$lang['Other_IP_this_user'] = '������ IP ����� �� ����� ��';
$lang['Users_this_IP'] = '������� �������� ������ IP ��';
$lang['IP_info'] = '���� IP';
$lang['Lookup_IP'] = '��� ����� IP';
$lang['Disable_HTML_post'] = '��� HTML ������ ��';
$lang['Disable_BBCode_post'] = '��� BBCode ������ ��';
$lang['Disable_Smilies_post'] = '��� ������� ������ ��';
$lang['Smilies'] = '�������';

// End add - Fully integrated shoutbox MOD

$lang['Message_preview'] = '����� ������ ����� ������';

// Start add - Yellow card admin MOD
$lang['Rules_ban_can'] = '��� <b>����</b> ����� ������� ����� ������ ��'; 
$lang['Rules_greencard_can'] = '��� <b>����</b> ����� ����� �������� ������ ��'; 
$lang['Rules_bluecard_can'] = '��� <b>����</b> ����� �� ����� ������� ������ ��'; 

$lang['Viewing_RULES'] = '���� ������';
$lang['Forum_Rules'] = '�����';

$lang['cookies_link'] = '����� ������� ���';

// RATING MOD
$lang['Rating'] = '�����';
$lang['No_rating'] = '��� �����';
$lang['Ratings_by'] = '������� ����� ��-��� %s';
$lang['Rated_posts_by'] = '������� �� %s �����';
$lang['Latest_ratings'] = '������� �������';
$lang['Highest_ranked_topics'] = '������ ���� ����� ����';
$lang['Highest_ranked_posts'] = '������ ���� ����� ����';
$lang['Highest_ranked_posters'] = '������ ���� ����� ����';

$lang['Staff'] = '���� ����';

//
// Bookmark Mod
//
$lang['More_bookmarks'] = '��� �������...'; // For mozilla navigation bar

//-----------------------------------------------------------------------------
// MOD: Delayed Topics
$lang['Delayed_Post_Alt'] = '���� ���� (����� %s)';	// %s replaced by delivery date
$lang['Sorry_auth_delayedpost'] = '����� ��� �� %s ������ ����� ������ ������';

// MOD: Delayed Topics {end}
//-----------------------------------------------------------------------------
// Logo Selector MOD
$lang['Logo_settings'] = '������ ����';
$lang['Logo_explain'] = '��� ���� ����� �� ���� ������� �������� �� ������ ���, ����� ���� ����� ������ ����� ����� ������.';
$lang['Logo_path'] = '���� ������ �����';
$lang['Logo_path_explain'] = '���� ��� ������� ������ �� phpBB ���, ������ images/logo';
$lang['Logo'] = '��� ����';
$lang['Logo_dimensions'] = '����� �����';
$lang['Logo_dimensions_explain'] = '(���� x ���� ��������) ';
$lang['PS_admin_ban']				= '����� ��������';
$lang['PS_admin_ban_exp']			= '<br>������ ����� �������� �� IP ����� ������ ������ Clike, ����� SQL, DDoS �� UNION.';
$lang['PS_admin_sessions']			= '������� ������� ��������';
$lang['PS_admin_sessions_exp']		= '<br>�� ���� �������� ����� ���� ���� ���� ����� ��, ���� ��� �������� �� ���� ��.';
$lang['PS_clike']					= '����� Clike';
$lang['PS_union']					= '����� Union';
$lang['PS_sql']						= '����� ����� SQL';
$lang['PS_ddos']					= '����� DDoS';
$lang['PS_caught_left']				= 'IP';
$lang['PS_caught_c_left']			= '���� �-';
$lang['PS_caught_c_right']			= '���� �-';
$lang['PS_caught_right']			= '�������';
$lang['PS_caught_msg']				= '��� ������� ��-��� ���� ����� ����.';
$lang['PS_special']					= '����� phpBB :: ���� �������';
$lang['PS_special_admins']			= '���� �� ������ ������ �������';
$lang['PS_special_admins_exp']		= '<br>���� �� ���� ��� ������ ������ �������� ����� ���� ���. �� �� ��� �� ���� ������ ����� ���� ���� ����� ����.';
$lang['PS_special_admins_total']	= '<br>�� �� ���� %X% ������� ������� ������ ���� \'���� ����\' ���� ��������.';
$lang['PS_special_admins_offset']	= '<font color="red"> ����� �� ������ ���� ��� �� ���� ������ ������ ����� �������� ��������!</font>';
$lang['PS_special_mods']			= '���� �� ������ ��������';
$lang['PS_special_mods_exp']		= '<br>���� �� ���� ��� ������ �������� ����� ���� ���. �� �� ��� �� ���� ������ ����� ���� ����� ����.';
$lang['PS_special_mods_total']		= '<br>�� �� ���� %X% ������� ������� ������ ���� \'����\' ����� ��������.';
$lang['PS_special_mods_offset']		= '<font color="red"> ����� �� ������ ���� ��� �� ���� ������ ����� �������� ��������!</font>';
$lang['PS_use_special']				= '���� �� ������� ���� ����� ����';
$lang['PS_use_special_exp']			= '<br>����� ���, �� ����� ������ ������ �� ������ ������ ��������.';

$lang['LW_USER_ACCT_ERROR'] = '��� �� ID = %d �� ����.';
$lang['LW_WELCOME_REGISTERED'] = '���� ������. ������ ����.';
$lang['LW_TRANSACTION_RECORDS'] = '������ ������';
$lang['LW_EXPIRE_MEMBER_REMINDER'] = '����� ��� ������ �-<b>%s</b>';
$lang['LW_EXPIRE_TRIAL_REMINDER'] = '������ ������ ��� ���� <b>%d</b> ����';
$lang['LW_WELCOME_REGIST_TRIAIL'] = '���� ��� %s, ����� ���� ����� ��� �������� ��� ���� %d ���� ������ �����. <br>��� �� �� ���� ������ ������ �������� ����, ����� ���� ��� ����� ����� ��� %s.';
$lang['LW_AMOUNT_TO_PAY_EXPLAIN'] = '�� ����� ������ ����� ���� ���� ��� ��������, ������ �������.';
$lang['LW_TRIAL_PERIOD'] = '����� ������ ���� ���� ���� ���, <br>������ �� ����, ���� �� ���� ����: ';
$lang['LW_OUR_SUBSCRIPTION_FEE'] = '����� �����: ';
$lang['LW_OUR_PAYPAL_CURRENCY_CODE'] = '��� ����� �� ����� �-PayPal ��� �����: ';
$lang['LW_OUR_PAYPAL_ACCT'] = '����� �-PayPal ��� ����� ����� ������: ';
$lang['LW_PAYPAL_ACCT_SETTINGS_TITLE'] = '������ PayPal IPN';
$lang['LW_ACCT_DISPLAY_FROM'] = '��� ������� �� ����� ����� ������: ';
$lang['LW_ALL_RECORDS'] = '�� ��������';
$lang['LW_NO_RECORDS'] = '��� �����';
$lang['LW_ACCT_CREDIT'] = '�����';
$lang['LW_ACCT_DEBIT'] = '����';
$lang['NP_DATE'] = '�����';
$lang['LW_ACCT_CURRENCY'] = '����';
$lang['LW_ACCT_AMOUNT'] = '����';
$lang['LW_ACCT_PLUS_MINUS'] = '����� / ����';
$lang['LW_ACCT_TXNID'] = 'PayPal TXN ID';
$lang['LW_ACCT_STATUS'] = '���';
$lang['LW_ACCT_COMMENT'] = '����';
$lang['LW_NO_PRIVILEGE'] = '��� �� �� ����� ������� ����� ����� ��.';
$lang['LW_Click_view_ACCT_RECORDS'] = '��� %s���%s ��� ����� ������� ������ ������ �� ������ ���';
$lang['LW_PAYMENT_DONE'] = '����� ������ ���� ������.';
$lang['LW_PAYMENT_PENDDING'] = '����! ������ ��� ����� ������, ������ ������ �������� ���� ������ ����� ���� ���� �� ������ ���. <br>������ �� ���� ������ ���� ������ ����� ��������� ��� ���: %s ��-��� PayPal.';
$lang['LW_PAYMENT_DENIED'] = '������ ������� ��� ����, ��� ��� �� ����� ����� ���� �� �� �� �����.';
$lang['LW_PAYMENT_FAILED'] = '������ ������� ��� ����, ��� ��� ����� ����.';
$lang['LW_UPDATE_USER_ACCT_ERROR'] = '����� ������ ����� ����, ��� ��� �� ����� ����� ����.';
$lang['LW_AMOUNT_TO_PAY'] = '���� ����: ';
$lang['LW_ACCT_DEPOSIT_INTO'] = '���';
$lang['LW_TOPUP_CONFIRM_TITLE'] = '����� ������ ���';
$lang['Account_not_exist_lw'] = '������ ������ �� ����.';
$lang['Account_activated_lw'] = '������ ��� ��� ���� ����� ��� ��������.';
$lang['Click_return_login_lw'] = '��� %s���%s ��� ������ �����.';
$lang['Click_return_activate_lw'] = '��� %s���%s ��� ���� ����� ����� ������� ������.';
$lang['Disabled_account_lw'] = '������ �� �����.';
$lang['LW_PAYPAL_ACCT_ERROR'] = '��� ������� ����� PayPal �� ���� �� ����� ������, ��� ��� �� ����� ����� ���� ������ ���� ��.';
$lang['LW_PAYMENT_DATA_ERROR'] = '���� ����� ������ ����.';
$lang['LW_YOU_ARE_VIP'] = '���� ��� %s, ��� <b>��� ���� ����</b> ����.';
$lang['L_LW_PAYMENTS'] = '�����';
$lang['LW_LOGIN_TO_PAY'] = '����� �� �� ������ ������� ���, ��� ����� ����� ������ �� ��� �� ���� ��. �����!';
$lang['LW_PAY_FOR_WHICH_MONTH'] = '������ � <b>%s</b> � <b>%s</b>';

$lang['Sorry_auth_paid_read'] = '�����, ��� �� <b>����� �����</b> ������ ����� ������ ������ ��.'; 
$lang['LW_Welcome_Nopaid_Member'] = '���� ��� %s, ��� ��� ������� ����.'; 
$lang['Sorry_auth_paid_post'] = '�����, ��� �� <b>����� �����</b> ������ ����� ������ ������ ��.'; 
$lang['L_LW_PAID_GROUP_NAME'] = '�� ������ ������ ����� ��� ������: '; 
$lang['LW_SELECT_A_GROUP'] = '��� ����� ��� ������'; 
$lang['L_LW_GROUP_TO_PAY'] = '������ ���� ���� ������: '; 
$lang['LW_TOPUP_TITLE'] = '����� ������ �����';
$lang['L_LW_GROUP_DESCRIPTION'] = '����� ������: ';
$lang['L_LW_FOR_JOIN_GROUP'] = '��� ������ ������: ';
$lang['L_LW_FOR_UPGRADE_GROUP'] = '��� ����� ������: ';
$lang['L_LW_FOR_EXTEND_GROUP'] = '��� ������ ����� ������: ';
$lang['L_LW_USER_EXTEND_SAME_GROUP'] = '��� ���� ������ �� ������ �������.';
$lang['L_LW_USER_JOIN_GROUP'] = '��� ���� ����� ������ ��.';
$lang['L_LW_USER_UPGRADE_GROUP'] = '��� ���� ����� �� ������ ������� ���.';
$lang['L_LW_USER_DOWNGRADE_GROUP'] = '��� �� ���� ������ �� ������ ���, ���� ������� ������� ��� ������.';
$lang['L_LW_UPGRADE_REMIND'] = '���� �����: ';

$lang['Click_return_subscribe_lw'] = '��� %s���%s ��� ����� ����� ��������. ����� ���� ����� �����.';
$lang['L_LW_GROUP_ALREADY_JOIN'] = '������ ���� ���� ��: '; 
$lang['L_LW_GROUP_VIEW_DETAIL'] = '��� ����� ����� ����� ��: '; 
$lang['LW_PAYMENT_SUBSCRIPTION'] = '������ ��� ������ �����.'; 

$lang['LW_ANONYMOUS_DONOR'] = '������';
$lang['LW_MORE_DONORS'] = '��� ��� �������';
$lang['LW_CURRENT_DONORS'] = '��� ������� ����� �������';
$lang['L_LW_LAST_DONORS'] = '%s ������� ��������';
$lang['L_LW_TOP_DONORS_TITLE'] = '%s ������� �������';
$lang['L_LW_DONORS_NAME'] = '�� �����';
$lang['LW_DONORS_DISPLAY_FROM'] = '��� ������: ';
$lang['LW_NO_DONORS_YET'] = '���� ��� ����� ������';
$lang['LW_WE_HAVE_COLLECT'] = '����� <b>%.2f</b> ������� �� <b>%s</b>.';
$lang['LW_WANT_ANONYMOUS'] = '��� ���� ����� ������.';
$lang['L_LW_DONATE_WAY'] = '���� �����: ';
$lang['LW_DONATION_TO_POINTS'] = '���� �����! ������, ��� ����� ������ �� ���� ������� ��� �-%d';
$lang['LW_DONATION_TO_WHO'] = '���� �-%s , ����!';
$lang['LW_DONATE_TITLE'] = '�����';
$lang['LW_AMOUNT_TO_DONATE'] = '���� ������: ';
$lang['LW_AMOUNT_TO_DONATE_EXPLAIN'] = '���� �����, ������ ��� ���� ��� ����� ������ ���� ����� ���� ����. ����!';
$lang['LW_DONATE_CONFIRM_TITLE'] = '��� �� ���� ������ ���';
$lang['LW_ACCT_DONATE_INTO'] = '����';
$lang['LW_DONATE_DONE'] = '���� �����. ������ ����� ��� ��� ����� ��� ���� ������ ����.';
$lang['LW_DONATE_PENDDING'] = '���� �����. ������ ����� ��� ��� ����� ��� ���� ������ ����.';
$lang['LW_DONATE_DENIED'] = '����� ������ ����� ���� ��� �����, ��� ��� �� ����� ����� ���� �� �� �� �����. ����!';
$lang['LW_DONATE_FAILED'] = '������ �����, ��� ��� ����� ����. ����!';
$lang['LW_ACCT_DONATE_US'] = '����';
$lang['LW_CURRENCY_TO_PAY'] = '��� �� ��� �����: ';
$lang['LW_CURRENCY_TO_PAY_EXPLAIN'] = '���� ����� �� %s.';
$lang['LW_PAYMENT_DATA_ERROR'] = '���� ����� ������ ����.';
$lang['LW_DONATION_TO_POSTS'] = '���� �����! ������, ��� ����� ������ �� ���� ������� ��� �-%d';
$lang['LW_DONATION_TO_HELP'] = '��� ���� ��� ������!';
$lang['L_LW_MONEY'] = '���� ����'; 
$lang['L_LW_DATE'] = '����� ������';
$lang['LW_DONATE_EXPLAIN'] = '��� ��� ��� ����� ���'; 
///
// Please note: %sHERE%s is used to dynamically building the A HREF tag, do not remove the percent signs (%) around HERE!
$lang['dhtml_faq_noscript'] = "����� �� ������ ���� ������� ��� �� ���� �-javascript �� ���� ���� ������� ������ ���.<br /><br />��� %s���%s ��� ����� ����� �-HTML ������ �� ������ �������.";
// added by edwin :: required fields
$lang['Required_force']	= '�����, ����� �� ������ ���� ���� ������ ������ ��� �������� ���� ������ ������. <br />���� ��� ����� �� ����� �������� �� %s, ��� ���� ����� ����� ����. <br />����!<br /> <br />��� �� ���� ����� ���� ��� ������ ����:<br />%s';
// added by edwin :: registration
$lang['Profile_updated_inactive'] = '������� ��� �����. �� ����� ����� �������, ��� ������ �� ���� ����. ���� �� ���� ����� ��������� ��� ��� ����� ��� ������ �� ������ ����.';
$lang['Profile_updated_inactive_admin'] = '������� ��� �����. �� ����� ����� �������, ��� ������ �� ���� ����. ���� ������ ����� ����� ���� ����.';
$lang['Click_return_portal'] = '��� %s���%s ��� ����� ������';
$lang['PS_security_a_exp_empty'] = '����� �� ����� ���� ����, �� �� ��� �� ���� ���� ���� ��� ���. ���� �� ���� ���� ���� ����� ����� ������ �� ��� ���� ���� ����� ������.';
$lang['PS_security_a_exp_submitted'] = '���� ����� ������� �� ������ ��� ������ ����, �� �� ��� �� ���� ���� ���� ��� ���. �� ���� ����� ����, ����� ����� ��� �� ����� ����� �� ��� ��.';

// BEGIN Style Select MOD
$lang['Style_select_manage'] = '��� �� ������ �����';
$lang['Style_select_explain'] = '����� ����� �� ��� ���� ���� �� ���� ���� ������ �����';
$lang['Style_select_author'] = '����';
$lang['Style_select_version'] = '����';
$lang['Style_select_website'] = '��� �������';
$lang['Style_select_viewings'] = '�����';
$lang['Style_select_dlurl'] = '����� �����';
$lang['Style_select_dls'] = '���� �� ���';
$lang['Style_select_loaclurl'] = '��� �����';
$lang['Style_select_ludls'] = '��� ����� �� ���';
$lang['Click_return_style_sel_admin'] = '��� %s���%s ��� ����� ������ ������ �����';
$lang['Style_select_update'] = '������� ������ ������';
// END Style Select MOD

// FIND - newsfeeds
$lang['Check_All'] = '��� ���';
$lang['UnCheck_All'] = '��� ����� �� ���';
$lang['News_Read_More'] = '��� ���...';
$lang['News_source'] = '����: ';
// end FIND - newsfeeds

$lang['Portal'] = '�����'; 

$lang['By'] = '��-���'; // picture {By} user :: Topic {By} user
$lang['Country'] = '�����';

$lang['No_r_click'] = 'No Right Click Is Allowed'; 
$lang['No_copy'] = 'Copy Is Not Allowed';
//+MOD: DHTML Collapsible Forum Index MOD
$lang['CFI_options'] = "C.F.I.";
$lang['CFI_options_ex'] = "Collapsible Forum Index Options";
$lang['CFI_close'] = "Close";
$lang['CFI_delete'] = "Delete Saved State";
$lang['CFI_restore'] = "Restore Saved State";
$lang['CFI_save'] = "Save State";
$lang['CFI_Expand_all'] = "Expand All";
$lang['CFI_Collapse_all'] = "Collapse All";
//-MOD: DHTML Collapsible Forum Index MOD
//
// That's all, Folks!
// -------------------------------------------------

?>