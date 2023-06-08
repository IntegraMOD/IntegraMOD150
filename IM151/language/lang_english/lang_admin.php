<?php

/***************************************************************************
 *                            lang_admin.php [English]
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

// Admin menu titles
$lang['approve_admin_approval'] = 'Approval';
$lang['approve_admin_approve_index'] = 'Index'; 
$lang['approve_admin_user_moderation'] = 'Users'; 
$lang['approve_admin_topic_moderation'] = 'Topic'; 
$lang['approve_admin_post_moderation'] = 'Post'; 
$lang['approve_admin_forum_moderation'] = 'Forum'; 
$lang['approve_admin_edit_forums'] = 'Edit Forums';

$lang['Admin_Index'] = 'Admin Index';
$lang['Main_index'] = 'Forum Index';
$lang['Preview_forum'] = 'Preview Forum';
$lang['Portal_index'] = 'Portal';
$lang['Preview_portal'] = 'Preview Portal';

$lang['.: Security :.'] = '.: Security :.'; 
$lang['Info: gdlib'] = 'Info: gdlib'; 
$lang['Info: phpinfo'] = 'Info: phpinfo'; 
$lang['Member Tries'] = 'Member Tries'; 
$lang['Quick Search'] = 'Quick Search'; 
$lang['Special'] = 'Special'; 
$lang['Styles_Management'] = 'Styles Management'; 
$lang['Database cleaning'] = 'Database cleaning'; 
$lang['Forum_Tour'] = 'Forum Tour'; 
$lang['FT_empty_subject'] = 'No subject entered. Please go back!';
$lang['FT_empty_message'] = 'No text entered. Please go back!';
$lang['Confirm_delete_ft'] = 'Do you really wants to delete the following forum tour page?<br /><b>%s</b>';
$lang['New_forum_tour_page'] = 'Add new Forum Tour Page';
$lang['No_forum_pages'] = 'No Forum Tour Pages aviable';
$lang['Upload_Smilies'] = 'Upload Smilies'; 
$lang['Package_Module'] = 'Package Module'; 
$lang['Banner'] = 'Banner'; 
$lang['Menu'] = 'Menu'; 
$lang['IPN_LOG'] = 'IPN LOG'; 
$lang['PHP Info'] = 'PHP Info'; 
$lang['Admins & Mod\'s'] = 'Admins & Mod\'s';
$lang['APMR Admin'] = ' Redirect Admin PM\'s';
$lang['eXtreme Styles'] = 'eXtreme Styles';
$lang['FTR: Config'] = 'FTR Configuration';
$lang['FTR: Users'] = 'FTR Users';
$lang['FTR Admin'] = 'Force Topic Read';
$lang['IM_Portal'] = 'IM Portal';
$lang['Userlist'] = 'User list';
$lang['Subscription_Admin'] = 'Subscriptions';
$lang['News Admin'] = 'News Management';
$lang['Subscription'] = 'Subscription';
$lang['Permissions_List'] = 'Permissions List';
$lang['Currency_Management'] = 'Currency Management';
$lang['L_IPN_subscription'] = 'IPN subscription';
$lang['DB_Maintenance'] = 'DB Maintenance';
$lang['Manage_Bots'] = 'Bots Management';
$lang['Optimize_DB'] = 'Optimize DB';
$lang['PM_Settings'] = 'Welcome PM';
$lang['Rating_System'] = 'Rating System';
$lang['Rebuild Search'] = 'Rebuild Search';
$lang['Control_Panel'] = 'Control Panel';
$lang['Shadow_attachments'] = 'Shadow attachments';
$lang['Forbidden_extensions'] = 'Forbidden extensions';
$lang['Extension_control'] = 'Extension Management';
$lang['Extension_group_manage'] = 'Extension Group Management';
$lang['Special_categories'] = 'Special Categories';
$lang['Sync_attachments'] = 'Sync Attachments';
$lang['Quota_limits'] = 'Quota Limits';
$lang['Group_extend'] = 'Group extend';
$lang['Blocks Management'] = 'Blocks Management';
$lang['Blocks Variables'] = 'Block Variables';
$lang['Blocks_Position_Tag'] = 'Blocks Position Tags';
$lang['Delete_Cache_Files'] = 'Delete Cache Files';
$lang['Page_Management'] = 'Page Management';
$lang['Portal_Configuration'] = 'Portal Configuration';
$lang['Clear_Cache'] = 'Clear Cache';
$lang['Personal_Galleries'] = 'Personal Galleries';
$lang['Message Log'] = 'Message Log';
$lang['Network Messaging'] = 'Network Messaging';
$lang['User Admin'] = 'User Management';
$lang['Cron Configuration'] = 'Cron Configuration';
$lang['Package Module'] = 'Package Module';
$lang['Tools'] = 'Tools';
$lang['IP_Search'] = 'IP Search';
$lang['Points_Configuration'] = 'Points Configuration';

$lang['Configuration'] = 'Configuration';         
$lang['Permissions'] = 'Permissions';
$lang['Manage'] = 'Manage';
$lang['Disallow'] = 'Disallow Names';
$lang['Prune'] = 'Pruning';
$lang['Mass_Email'] = 'Mass Email';
$lang['Ranks'] = 'Ranks';

$lang['General'] = 'General Admin'; 
$lang['Users'] = 'User Admin';
$lang['Groups'] = 'Group Admin';
$lang['Forums'] = 'Forum Admin';
$lang['Styles'] = 'Styles Admin';
$lang['Mod_Complete_Import'] = 'Import Language Pack';
//// end admin menu titles

$lang['YES'] = 'Yes';
$lang['NO'] = 'No';
$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF'; 

$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Ban Control';
$lang['Word_Censor'] = 'Word Censors';
$lang['Export'] = 'Export';
$lang['Create_new'] = 'Create';
$lang['Add_new'] = 'Add';
$lang['Backup_DB'] = 'Backup Database';
$lang['Restore_DB'] = 'Restore Database';

//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'You are not authorised to administer this board';
$lang['Welcome_phpBB'] = 'Welcome to phpBB';
$lang['Welcome_IM'] = 'Welcome to IntegraMOD';
$lang['Admin_intro'] = 'Thank you for choosing IntegraMOD as your forum solution. This screen will give you a quick overview of all the various statistics of your board. You can get back to this page by clicking on the <u>Admin Index</u> link in the left pane. To return to the index of your board, click the phpBB logo also in the left pane. The other links on the left hand side of this screen will allow you to control every aspect of your forum experience. Each screen will have instructions on how to use the tools.';
//
$lang['Forum_stats'] = 'Forum Statistics';

$lang['Click_return_admin_index'] = 'Click %sHere%s to return to the Admin Index';

$lang['Statistic'] = 'Statistic';
$lang['Value'] = 'Value';
$lang['Number_posts'] = 'Number of posts';
$lang['Posts_per_day'] = 'Posts per day';
$lang['Number_topics'] = 'Number of topics';
$lang['Topics_per_day'] = 'Topics per day';
$lang['Number_users'] = 'Number of users';
$lang['Users_per_day'] = 'Users per day';
$lang['Board_started'] = 'Board started';
$lang['Avatar_dir_size'] = 'Avatar directory size';
$lang['Database_size'] = 'Database size';
$lang['Gzip_compression'] ='Gzip compression';
$lang['Not_available'] = 'Not available';

$lang['Viewing_Portal'] = 'Viewing Portal';

//
// DB Utils
//
$lang['Database_Utilities'] = 'Database Utilities';

$lang['Restore'] = 'Restore';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'This will perform a full restore of all phpBB tables from a saved file. If your server supports it, you may upload a gzip-compressed text file and it will automatically be decompressed. <b>WARNING</b>: This will overwrite any existing data. The restore may take a long time to process, so please do not move from this page until it is complete.';
$lang['Backup_explain'] = 'Here you can back up all your phpBB-related data. If you have any additional custom tables in the same database with phpBB that you would like to back up as well, please enter their names, separated by commas, in the Additional Tables textbox below. If your server supports it you may also gzip-compress the file to reduce its size before download.';

$lang['Backup_options'] = 'Backup options';
$lang['Start_backup'] = 'Start Backup';
$lang['Full_backup'] = 'Full backup';
$lang['Structure_backup'] = 'Structure-Only backup';
$lang['Data_backup'] = 'Data only backup';
$lang['Additional_tables'] = 'Additional tables';
$lang['Gzip_compress'] = 'Gzip compress file';
$lang['Select_file'] = 'Select a file';
$lang['Start_Restore'] = 'Start Restore';

$lang['Restore_success'] = 'The Database has been successfully restored.<br /><br />Your board should be back to the state it was when the backup was made.';
$lang['Backup_download'] = 'Your download will start shortly; please wait until it begins.';
$lang['Backups_not_supported'] = 'Sorry, but database backups are not currently supported for your database system.';

$lang['Restore_Error_uploading'] = 'Error in uploading the backup file';
$lang['Restore_Error_filename'] = 'Filename problem; please try an alternative file';
$lang['Restore_Error_decompress'] = 'Cannot decompress a gzip file; please upload a plain text version';
$lang['Restore_Error_no_file'] = 'No file was uploaded';


//
// Auth pages
//
$lang['Select_a_User'] = 'Select a User';
$lang['Select_a_Group'] = 'Select a Group';
$lang['Select_a_Forum'] = 'Select a Forum';
$lang['Auth_Control_User'] = 'User Permissions Control'; 
$lang['Auth_Control_Group'] = 'Group Permissions Control'; 
$lang['Auth_Control_Forum'] = 'Forum Permissions Control'; 
$lang['Auth_Control_Category'] = 'Category Permissions Control'; // Added by Permissions List MOD
$lang['Look_up_User'] = 'Look up User'; 
$lang['Look_up_Group'] = 'Look up Group'; 
$lang['Look_up_Forum'] = 'Look up Forum'; 

$lang['Group_auth_explain'] = 'Here you can alter the permissions and moderator status assigned to each user group. Do not forget when changing group permissions that individual user permissions may still allow the user entry to forums, etc. You will be warned if this is the case.';
$lang['User_auth_explain'] = 'Here you can alter the permissions and moderator status assigned to each individual user. Do not forget when changing user permissions that group permissions may still allow the user entry to forums, etc. You will be warned if this is the case.';
$lang['Forum_auth_explain'] = 'Here you can alter the authorisation levels of each forum. You will have both a simple and advanced method for doing this, where advanced offers greater control of each forum operation. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.';
$lang['Forum_auth_list_explain'] = 'This provides a summary of the authorisation levels of each forum. You can edit these permissions, using either a simple or advanced method by clicking on the forum name. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.'; // Added by Permissions List MOD
$lang['Cat_auth_list_explain'] = 'This provides a summary of the authorisation levels of each forum within this category. You can edit the permissions of individual forums, using either a simple or advanced method by clicking on the forum name. Alternatively, you can set the permissions for all the forums in this category by using the drop-down menus at the bottom of the page. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.'; // Added by Permissions List MOD

$lang['Simple_mode'] = 'Simple Mode';
$lang['Advanced_mode'] = 'Advanced Mode';
$lang['Moderator_status'] = 'Moderator status';

$lang['Allowed_Access'] = 'Allowed Access';
$lang['Disallowed_Access'] = 'Disallowed Access';
$lang['Is_Moderator'] = 'Is Moderator';
$lang['Not_Moderator'] = 'Not Moderator';

$lang['Conflict_warning'] = 'Authorisation Conflict Warning';
$lang['Conflict_access_userauth'] = 'This user still has access rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having access rights. The groups granting rights (and the forums involved) are noted below.';
$lang['Conflict_mod_userauth'] = 'This user still has moderator rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having moderator rights. The groups granting rights (and the forums involved) are noted below.';

$lang['Conflict_access_groupauth'] = 'The following user (or users) still have access rights to this forum via their user permission settings. You may want to alter the user permissions to fully prevent them having access rights. The users granted rights (and the forums involved) are noted below.';
$lang['Conflict_mod_groupauth'] = 'The following user (or users) still have moderator rights to this forum via their user permissions settings. You may want to alter the user permissions to fully prevent them having moderator rights. The users granted rights (and the forums involved) are noted below.';

$lang['Public'] = 'Public';
$lang['Private'] = 'Private';
$lang['Registered'] = 'Registered';
$lang['Administrators'] = 'Administrators';
$lang['Hidden'] = 'Hidden';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ALL';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIVATE';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'View';
$lang['Read'] = 'Read';
$lang['Post'] = 'Post';
$lang['Reply'] = 'Reply';
$lang['Edit'] = 'Edit';
$lang['Delete'] = 'Delete';
$lang['Sticky'] = 'Sticky';
$lang['Announce'] = 'Announce'; 
$lang['Vote'] = 'Vote';
$lang['Pollcreate'] = 'Poll create';

$lang['Permissions'] = 'Permissions';
$lang['Simple_Permission'] = 'Simple Permissions';
$lang['Permissions_List'] = 'Permissions List'; // Added by Permissions List MOD

$lang['User_Level'] = 'User Level'; 
$lang['Auth_User'] = 'User';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Usergroup memberships';
$lang['Pending_memberships'] = 'Pending memberships';
$lang['Usergroup_members'] = 'This group has the following members';
$lang['Pending_members'] = 'This group has the following pending members';

$lang['Forum_auth_updated'] = 'Forum permissions updated';
$lang['User_auth_updated'] = 'User permissions updated';
$lang['Group_auth_updated'] = 'Group permissions updated';

$lang['Auth_updated'] = 'Permissions have been updated';
$lang['Click_return_userauth'] = 'Click %sHere%s to return to User Permissions';
$lang['Click_return_groupauth'] = 'Click %sHere%s to return to Group Permissions';
$lang['Click_return_forumauth'] = 'Click %sHere%s to return to Forum Permissions';

//Don't know if this is still used? //OKKI
// Added by Permissions List MOD
$lang['Forum_auth_list_explain_ALL'] = 'Alle gebruikers';
$lang['Forum_auth_list_explain_REG'] = 'Alle geregistreerde gebruikers';
$lang['Forum_auth_list_explain_PRIVATE'] = 'Gebruikers met speciale Rechten';
$lang['Forum_auth_list_explain_MOD'] = 'Alleen moderators van dit forum';
$lang['Forum_auth_list_explain_ADMIN'] = 'Alleen Beheerders';

$lang['Forum_auth_list_explain_auth_view'] = '%s kan dit forum bekijken';
$lang['Forum_auth_list_explain_auth_read'] = '%s kan berichten in dit forum lezen';
$lang['Forum_auth_list_explain_auth_post'] = '%s kan berichten plaatsen in dit forum';
$lang['Forum_auth_list_explain_auth_reply'] = '%s kan berichten beantwoorden in dit forum';
$lang['Forum_auth_list_explain_auth_edit'] = '%s kan berichten aanpassen in dit forum';
$lang['Forum_auth_list_explain_auth_delete'] = '%s kan berichten verwijderen uit dit forum';
$lang['Forum_auth_list_explain_auth_sticky'] = '%s kan sticky onderwerpen maken in dit forum';
$lang['Forum_auth_list_explain_auth_announce'] = '%s kan aankondigingen maken in dit forum';
$lang['Forum_auth_list_explain_auth_vote'] = '%s kan stemmen in Opinieoonderzoeken in dit forum';
$lang['Forum_auth_list_explain_auth_pollcreate'] = '%s kan Opinieoonderzoeken maken in dit forum';
// End addition by Permissions List MOD


//
// Banning
//
$lang['Ban_control'] = 'Ban Control';
$lang['Ban_explain'] = 'Here you can control the banning of users. You can achieve this by banning either or both of a specific user or an individual or range of IP addresses or hostnames. These methods prevent a user from even reaching the index page of your board. To prevent a user from registering under a different username you can also specify a banned email address. Please note that banning an email address alone will not prevent that user from being able to log on or post to your board. You should use one of the first two methods to achieve this.';
$lang['Ban_explain_warn'] = 'Please note that entering a range of IP addresses results in all the addresses between the start and end being added to the banlist. Attempts will be made to minimise the number of addresses added to the database by introducing wildcards automatically where appropriate. If you really must enter a range, try to keep it small or better yet state specific addresses.';

$lang['Select_username'] = 'Select a Username';
$lang['Select_ip'] = 'Select an IP address';
$lang['Select_email'] = 'Select an Email address';

$lang['Ban_username'] = 'Ban one or more specific users';
$lang['Ban_username_explain'] = 'You can ban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser';

$lang['Ban_IP'] = 'Ban one or more IP addresses or hostnames';
$lang['IP_hostname'] = 'IP addresses or hostnames';
$lang['Ban_IP_explain'] = 'To specify several different IP addresses or hostnames separate them with commas. To specify a range of IP addresses, separate the start and end with a hyphen (-); to specify a wildcard, use an asterisk (*).';

$lang['Ban_email'] = 'Ban one or more email addresses';
$lang['Ban_email_explain'] = 'To specify more than one email address, separate them with commas. To specify a wildcard username, use * like *@hotmail.com';

$lang['Unban_username'] = 'Un-ban one or more specific users';
$lang['Unban_username_explain'] = 'You can unban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser';

$lang['Unban_IP'] = 'Un-ban one or more IP addresses';
$lang['Unban_IP_explain'] = 'You can unban multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser';

$lang['Unban_email'] = 'Un-ban one or more email addresses';
$lang['Unban_email_explain'] = 'You can unban multiple email addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser';

$lang['No_banned_users'] = 'No banned usernames';
$lang['No_banned_ip'] = 'No banned IP addresses';
$lang['No_banned_email'] = 'No banned email addresses';

$lang['Ban_update_sucessful'] = 'The banlist has been updated successfully';
$lang['Click_return_banadmin'] = 'Click %sHere%s to return to Ban Control';


//
// Configuration
//
$lang['General_Config'] = 'General Configuration';
$lang['Config_explain'] = 'The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side.';

$lang['Click_return_config'] = 'Click %sHere%s to return to General Configuration';

$lang['General_settings'] = 'General Board Settings';
$lang['Server_name'] = 'Domain Name';
$lang['Server_name_explain'] = 'The domain name from which this board runs';
$lang['Script_path'] = 'Script path';
$lang['Script_path_explain'] = 'The path where phpBB2 is located relative to the domain name';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = 'The port your server is running on, usually 80. Only change if different';
$lang['Site_name'] = 'Site name';
$lang['Site_desc'] = 'Site description';
$lang['Board_disable'] = 'Disable board';
$lang['Board_disable_explain'] = 'This will make the board unavailable to users. Administrators are able to access the Administration Panel while the board is disabled.';
$lang['Board_disable_msg'] = 'Disable board message';
$lang['Board_disable_msg_explain'] = 'This text will be showed if "Disable board" is on "Yes".';
$lang['Acct_activation'] = 'Enable account activation';
$lang['Acc_None'] = 'None'; // These three entries are the type of activation
$lang['Acc_User'] = 'User';
$lang['Acc_Admin'] = 'Admin';

$lang['Abilities_settings'] = 'User and Forum Basic Settings';
$lang['Max_poll_options'] = 'Max number of poll options';
$lang['Flood_Interval'] = 'Flood Interval';
$lang['Flood_Interval_explain'] = 'Number of seconds a user must wait between posts'; 
$lang['Board_email_form'] = 'User email via board';
$lang['Board_email_form_explain'] = 'Users send email to each other via this board';
$lang['Topics_per_page'] = 'Topics Per Page';
$lang['Posts_per_page'] = 'Posts Per Page';
$lang['Hot_threshold'] = 'Posts for Popular Threshold';
$lang['Default_style'] = 'Default Style';
$lang['Override_style'] = 'Override user style';
$lang['Override_style_explain'] = 'Replaces users style with the default';
$lang['Default_language'] = 'Default Language';
$lang['Date_format'] = 'Date Format';
$lang['System_timezone'] = 'System Timezone';
$lang['Enable_gzip'] = 'Enable GZip Compression';
$lang['Enable_debug'] = 'Enable Debug Mode';
$lang['Enable_prune'] = 'Enable Forum Pruning';
$lang['Allow_HTML'] = 'Allow HTML';
$lang['Allow_BBCode'] = 'Allow BBCode';
$lang['Allowed_tags'] = 'Allowed HTML tags';
$lang['Allowed_tags_explain'] = 'Separate tags with commas';
$lang['Allow_smilies'] = 'Allow Smilies';
$lang['Smilies_path'] = 'Smilies Storage Path';
$lang['Smilies_path_explain'] = 'Path under your phpBB root dir, e.g. images/smiles';
$lang['Allow_sig'] = 'Allow Signatures';
$lang['Max_sig_length'] = 'Maximum signature length';
$lang['Max_sig_length_explain'] = 'Maximum number of characters in user signatures';
$lang['Allow_name_change'] = 'Allow Username changes';

$lang['Avatar_settings'] = 'Avatar Settings';
$lang['Allow_local'] = 'Enable gallery avatars';
$lang['Allow_remote'] = 'Enable remote avatars';
$lang['Allow_remote_explain'] = 'Avatars linked to from another website';
$lang['Allow_upload'] = 'Enable avatar uploading';
$lang['Max_filesize'] = 'Maximum Avatar File Size';
$lang['Max_filesize_explain'] = 'For uploaded avatar files';
$lang['Max_avatar_size'] = 'Maximum Avatar Dimensions';
$lang['Max_avatar_size_explain'] = '(Height x Width in pixels)';
$lang['Avatar_storage_path'] = 'Avatar Storage Path';
$lang['Avatar_storage_path_explain'] = 'Path under your phpBB root dir, e.g. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar Gallery Path';
$lang['Avatar_gallery_path_explain'] = 'Path under your phpBB root dir for pre-loaded images, e.g. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Settings';
$lang['COPPA_fax'] = 'COPPA Fax Number';
$lang['COPPA_mail'] = 'COPPA Mailing Address';
$lang['COPPA_mail_explain'] = 'This is the mailing address to which parents will send COPPA registration forms';

$lang['Email_settings'] = 'Email Settings';
$lang['Admin_email'] = 'Admin Email Address';
$lang['Email_sig'] = 'Email Signature';
$lang['Email_sig_explain'] = 'This text will be attached to all emails the board sends';
$lang['Use_SMTP'] = 'Use SMTP Server for email';
$lang['Use_SMTP_explain'] = 'Say yes if you want or have to send email via a named server instead of the local mail function';
$lang['SMTP_server'] = 'SMTP Server Address';
$lang['SMTP_username'] = 'SMTP Username';
$lang['SMTP_username_explain'] = 'Only enter a username if your SMTP server requires it';
$lang['SMTP_password'] = 'SMTP Password';
$lang['SMTP_password_explain'] = 'Only enter a password if your SMTP server requires it';

$lang['Disable_privmsg'] = 'Private Messaging';
$lang['Inbox_limits'] = 'Max posts in Inbox';
$lang['Sentbox_limits'] = 'Max posts in Sentbox';
$lang['Savebox_limits'] = 'Max posts in Savebox';

$lang['Cookie_settings'] = 'Cookie settings'; 
$lang['Cookie_settings_explain'] = 'These details define how cookies are sent to your users\' browsers. In most cases the default values for the cookie settings should be sufficient, but if you need to change them do so with care -- incorrect settings can prevent users from logging in';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Cookie name';
$lang['Cookie_path'] = 'Cookie path';
$lang['Cookie_secure'] = 'Cookie secure';
$lang['Cookie_secure_explain'] = 'If your server is running via SSL, set this to enabled, else leave as disabled';
$lang['Session_length'] = 'Session length [ seconds ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Enable Visual Confirmation';
$lang['Visual_confirm_explain'] = 'Requires users enter a code defined by an image when registering.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Allow automatic logins';
$lang['Allow_autologin_explain'] = 'Determines whether users are allowed to select to be automatically logged in when visiting the forum';
$lang['Autologin_time'] = 'Automatic login key expiry';
$lang['Autologin_time_explain'] = 'How long a autologin key is valid for in days if the user does not visit the board. Set to zero to disable expiry.';
// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Search Flood Interval';
$lang['Search_Flood_Interval_explain'] = 'Number of seconds a user must wait between search requests. <b>INFO: This function is included in a better way in the CrackerTracker Security Center. We suggest you put this value to 0 and use the CrackerTracker Search Flood Protection with better usability in the CTracker Configuration dialog!</b>'; 

//
// Forum Management
//
$lang['Forum_admin'] = 'Forum Administration';
$lang['Forum_admin_explain'] = 'From this panel you can add, delete, edit, re-order and re-synchronise categories and forums';
$lang['Edit_forum'] = 'Edit forum';
$lang['Create_forum'] = 'Create new forum';
$lang['Create_category'] = 'Create new category';
$lang['Remove'] = 'Remove';
$lang['Action'] = 'Action';
$lang['Update_order'] = 'Update Order';
$lang['Config_updated'] = 'Forum Configuration Updated Successfully';
$lang['Edit'] = 'Edit';
$lang['Delete'] = 'Delete';
$lang['Move_up'] = 'Move up';
$lang['Move_down'] = 'Move down';
$lang['Resync'] = 'Resync';
$lang['No_mode'] = 'No mode was set';
$lang['Forum_edit_delete_explain'] = 'The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side';

$lang['Move_contents'] = 'Move all contents';
$lang['Forum_delete'] = 'Delete Forum';
$lang['Forum_delete_explain'] = 'The form below will allow you to delete a forum (or category) and decide where you want to put all topics (or forums) it contained.';

$lang['Status_locked'] = 'Locked';
$lang['Status_unlocked'] = 'Unlocked';
$lang['Forum_settings'] = 'General Forum Settings';
$lang['Forum_name'] = 'Forum name';
$lang['Forum_desc'] = 'Description';
$lang['Forum_status'] = 'Forum status';
$lang['Forum_pruning'] = 'Auto-pruning';

$lang['prune_freq'] = 'Check for topic age every';
$lang['prune_days'] = 'Remove topics that have not been posted to in';
$lang['Set_prune_data'] = 'You have turned on auto-prune for this forum but did not set a frequency or number of days to prune. Please go back and do so.';

$lang['Move_and_Delete'] = 'Move and Delete';

$lang['Delete_all_posts'] = 'Delete all posts';
$lang['Nowhere_to_move'] = 'Nowhere to move to';

$lang['Edit_Category'] = 'Edit Category';
$lang['Edit_Category_explain'] = 'Use this form to modify a category\'s name.';

$lang['Forums_updated'] = 'Forum and Category information updated successfully';

$lang['Must_delete_forums'] = 'You need to delete all forums before you can delete this category';

$lang['Click_return_forumadmin'] = 'Click %sHere%s to return to Forum Administration';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smiles Editing Utility';
$lang['smile_desc'] = 'From this page you can add, remove and edit the emoticons or smileys that your users can use in their posts and private messages.';

$lang['smiley_config'] = 'Smiley Configuration';
$lang['smiley_code'] = 'Smiley Code';
$lang['smiley_url'] = 'Smiley Image File';
$lang['smiley_emot'] = 'Smiley Emotion';
$lang['smile_add'] = 'Add a new Smiley';
$lang['Smile'] = 'Smile';
$lang['Emotion'] = 'Emotion';

$lang['Select_pak'] = 'Select Pack (.pak) File';
$lang['replace_existing'] = 'Replace Existing Smiley';
$lang['keep_existing'] = 'Keep Existing Smiley';
$lang['smiley_import_inst'] = 'You should unzip the smiley package and upload all files to the appropriate Smiley directory for your installation. Then select the correct information in this form to import the smiley pack.';
$lang['smiley_import'] = 'Smiley Pack Import';
$lang['choose_smile_pak'] = 'Choose a Smile Pack .pak file';
$lang['import'] = 'Import Smileys';
$lang['smile_conflicts'] = 'What should be done in case of conflicts';
$lang['del_existing_smileys'] = 'Delete existing smileys before import';
$lang['import_smile_pack'] = 'Import Smiley Pack';
$lang['export_smile_pack'] = 'Create Smiley Pack';
$lang['export_smiles'] = 'To create a smiley pack from your currently installed smileys, click %sHere%s to download the smiles.pak file. Name this file appropriately making sure to keep the .pak file extension.  Then create a zip file containing all of your smiley images plus this .pak configuration file.';

$lang['smiley_add_success'] = 'The Smiley was successfully added';
$lang['smiley_edit_success'] = 'The Smiley was successfully updated';
$lang['smiley_import_success'] = 'The Smiley Pack was imported successfully!';
$lang['smiley_del_success'] = 'The Smiley was successfully removed';
$lang['Click_return_smileadmin'] = 'Click %sHere%s to return to Smiley Administration';
$lang['Confirm_delete_smiley'] = 'Are you sure you want to delete this Smiley?';

//
// User Management
//
$lang['User_admin'] = 'User Administration';
$lang['User_admin_explain'] = 'Here you can change your users\' information and certain options. To modify the users\' permissions, please use the user and group permissions system.';

$lang['Look_up_user'] = 'Look up user';

$lang['Admin_user_fail'] = 'Couldn\'t update the user\'s profile.';
$lang['Admin_user_updated'] = 'The user\'s profile was successfully updated.';
$lang['Click_return_useradmin'] = 'Click %sHere%s to return to User Administration';

$lang['User_delete'] = 'Delete this user';
$lang['User_delete_explain'] = 'Click here to delete this user; this cannot be undone.';
$lang['User_deleted'] = 'User was successfully deleted.';

$lang['User_status'] = 'User is active';
$lang['User_allowpm'] = 'Can send Private Messages';
$lang['User_allowavatar'] = 'Can display avatar';

$lang['Admin_avatar_explain'] = 'Here you can see and delete the user\'s current avatar.';

$lang['User_special'] = 'Special admin-only fields';
$lang['User_special_explain'] = 'These fields are not able to be modified by the users.  Here you can set their status and other options that are not given to users.';


//
// Group Management
//
$lang['Group_administration'] = 'Group Administration';
$lang['Group_admin_explain'] = 'From this panel you can administer all your usergroups. You can delete, create and edit existing groups. You may choose moderators, toggle open/closed group status and set the group name and description';
$lang['Error_updating_groups'] = 'There was an error while updating the groups';
$lang['Updated_group'] = 'The group was successfully updated';
$lang['Added_new_group'] = 'The new group was successfully created';
$lang['Deleted_group'] = 'The group was successfully deleted';
$lang['New_group'] = 'Create new group';
$lang['Edit_group'] = 'Edit group';
$lang['group_name'] = 'Group name';
$lang['group_description'] = 'Group description';
$lang['group_moderator'] = 'Group moderator';
$lang['group_status'] = 'Group status';
$lang['group_open'] = 'Open group';
$lang['group_closed'] = 'Closed group';
$lang['group_hidden'] = 'Hidden group';
$lang['group_auto'] = 'Auto join group';
$lang['group_delete'] = 'Delete group';
$lang['group_delete_check'] = 'Delete this group';
$lang['submit_group_changes'] = 'Submit Changes';
$lang['reset_group_changes'] = 'Reset Changes';
$lang['No_group_name'] = 'You must specify a name for this group';
$lang['No_group_moderator'] = 'You must specify a moderator for this group';
$lang['No_group_mode'] = 'You must specify a mode for this group, open or closed';
$lang['No_group_action'] = 'No action was specified';
$lang['delete_group_moderator'] = 'Delete the old group moderator?';
$lang['delete_moderator_explain'] = 'If you\'re changing the group moderator, check this box to remove the old moderator from the group.  Otherwise, do not check it, and the user will become a regular member of the group.';
$lang['Click_return_groupsadmin'] = 'Click %sHere%s to return to Group Administration.';
$lang['Select_group'] = 'Select a group';
$lang['Look_up_group'] = 'Look up group';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forum Prune';
$lang['Forum_Prune_explain'] = 'This will delete any topic which has not been posted to within the number of days you select. If you do not enter a number then all topics will be deleted. It will not remove topics in which polls are still running nor will it remove announcements. You will need to remove those topics manually.';
$lang['Do_Prune'] = 'Do Prune';
$lang['All_Forums'] = 'All Forums';
$lang['Prune_topics_not_posted'] = 'Prune topics with no replies in this many days';
$lang['Topics_pruned'] = 'Topics pruned';
$lang['Posts_pruned'] = 'Posts pruned';
$lang['Prune_success'] = 'Pruning of forums was successful';


//
// Word censor
//
$lang['Words_title'] = 'Word Censoring';
$lang['Words_explain'] = 'From this control panel you can add, edit, and remove words that will be automatically censored on your forums. In addition people will not be allowed to register with usernames containing these words. Wildcards (*) are accepted in the word field. For example, *test* will match detestable, test* would match testing, *test would match detest.';
$lang['Word'] = 'Word';
$lang['Edit_word_censor'] = 'Edit word censor';
$lang['Replacement'] = 'Replacement';
$lang['Add_new_word'] = 'Add new word';
$lang['Update_word'] = 'Update word censor';

$lang['Must_enter_word'] = 'You must enter a word and its replacement';
$lang['No_word_selected'] = 'No word selected for editing';

$lang['Word_updated'] = 'The selected word censor has been successfully updated';
$lang['Word_added'] = 'The word censor has been successfully added';
$lang['Word_removed'] = 'The selected word censor has been successfully removed';

$lang['Click_return_wordadmin'] = 'Click %sHere%s to return to Word Censor Administration';
$lang['Confirm_delete_word'] = 'Are you sure you want to delete this word censor?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Here you can email a message to either all of your users or all users of a specific group.  To do this, an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time and you will be notified when the script has completed';
$lang['Compose'] = 'Compose'; 

$lang['Recipients'] = 'Recipients'; 
$lang['All_users'] = 'All Users';

$lang['Email_successfull'] = 'Your message has been sent';
$lang['Click_return_massemail'] = 'Click %sHere%s to return to the Mass Email form';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rank Administration';
$lang['Ranks_explain'] = 'Using this form you can add, edit, view and delete ranks. You can also create custom ranks which can be applied to a user via the user management facility';

$lang['Add_new_rank'] = 'Add new rank';

$lang['Rank_title'] = 'Rank Title';
$lang['Rank_special'] = 'Set as Special Rank';
$lang['Rank_minimum'] = 'Minimum Posts';
$lang['Rank_maximum'] = 'Maximum Posts';
$lang['Rank_image'] = 'Rank Image (Relative to phpBB2 root path)';
$lang['Rank_image_explain'] = 'Use this to define a small image associated with the rank';

$lang['Must_select_rank'] = 'You must select a rank';
$lang['No_assigned_rank'] = 'No special rank assigned';

$lang['Rank_updated'] = 'The rank was successfully updated';
$lang['Rank_added'] = 'The rank was successfully added';
$lang['Rank_removed'] = 'The rank was successfully deleted';
$lang['No_update_ranks'] = 'The rank was successfully deleted. However, user accounts using this rank were not updated.  You will need to manually reset the rank on these accounts';

$lang['Click_return_rankadmin'] = 'Click %sHere%s to return to Rank Administration';
$lang['Confirm_delete_rank'] = 'Are you sure you want to delete this rank?';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Username Disallow Control';
$lang['Disallow_explain'] = 'Here you can control usernames which will not be allowed to be used.  Disallowed usernames are allowed to contain a wildcard character of *.  Please note that you will not be allowed to specify any username that has already been registered. You must first delete that name then disallow it.';

$lang['Delete_disallow'] = 'Delete';
$lang['Delete_disallow_title'] = 'Remove a Disallowed Username';
$lang['Delete_disallow_explain'] = 'You can remove a disallowed username by selecting the username from this list and clicking delete';

$lang['Add_disallow'] = 'Add';
$lang['Add_disallow_title'] = 'Add a disallowed username';
$lang['Add_disallow_explain'] = 'You can disallow a username using the wildcard character * to match any character';

$lang['No_disallowed'] = 'No Disallowed Usernames';

$lang['Disallowed_deleted'] = 'The disallowed username has been successfully removed';
$lang['Disallow_successful'] = 'The disallowed username has been successfully added';
$lang['Disallowed_already'] = 'The name you entered could not be disallowed. It either already exists in the list, exists in the word censor list, or a matching username is present.';

$lang['Click_return_disallowadmin'] = 'Click %sHere%s to return to Disallow Username Administration';

/*
//
// Styles Admin
//
$lang['Styles_admin'] = 'Styles Administration';
$lang['Styles_explain'] = 'Using this facility you can add, remove and manage styles (templates and themes) available to your users';
$lang['Styles_addnew_explain'] = 'The following list contains all the themes that are available for the templates you currently have. The items on this list have not yet been installed into the phpBB database. To install a theme, simply click the install link beside an entry.';

$lang['Select_template'] = 'Select a Template';

$lang['Style'] = 'Style';
$lang['Template'] = 'Template';
$lang['Install'] = 'Install';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Edit Theme';
$lang['Edit_theme_explain'] = 'In the form below you can edit the settings for the selected theme';

$lang['Create_theme'] = 'Create Theme';
$lang['Create_theme_explain'] = 'Use the form below to create a new theme for a selected template. When entering colors (for which you should use hexadecimal notation) you must not include the initial #, i.e.. CCCCCC is valid, #CCCCCC is not';

$lang['Export_themes'] = 'Export Themes';
$lang['Export_explain'] = 'In this panel you will be able to export the theme data for a selected template. Select the template from the list below and the script will create the theme configuration file and attempt to save it to the selected template directory. If it cannot save the file itself it will give you the option to download it. In order for the script to save the file you must give write access to the webserver for the selected template dir. For more information on this see the phpBB 2 users guide.';

$lang['Theme_installed'] = 'The selected theme has been installed successfully';
$lang['Style_removed'] = 'The selected style has been removed from the database. To fully remove this style from your system you must delete the appropriate style from your templates directory.';
$lang['Theme_info_saved'] = 'The theme information for the selected template has been saved. You should now return the permissions on the theme_info.cfg (and if applicable the selected template directory) to read-only';
$lang['Theme_updated'] = 'The selected theme has been updated. You should now export the new theme settings';
$lang['Theme_created'] = 'Theme created. You should now export the theme to the theme configuration file for safe keeping or use elsewhere';

$lang['Confirm_delete_style'] = 'Are you sure you want to delete this style?';

$lang['Download_theme_cfg'] = 'The exporter could not write the theme information file. Click the button below to download this file with your browser. Once you have downloaded it you can transfer it to the directory containing the template files. You can then package the files for distribution or use elsewhere if you desire';
$lang['No_themes'] = 'The template you selected has no themes attached to it. To create a new theme click the Create New link on the left hand panel';
$lang['No_template_dir'] = 'Could not open the template directory. It may be unreadable by the webserver or may not exist';
$lang['Cannot_remove_style'] = 'You cannot remove the style selected since it is currently the forum default. Please change the default style and try again.';
$lang['Style_exists'] = 'The style name to selected already exists, please go back and choose a different name.';

$lang['Click_return_styleadmin'] = 'Click %sHere%s to return to Style Administration';

$lang['Theme_settings'] = 'Theme Settings';
$lang['Theme_element'] = 'Theme Element';
$lang['Simple_name'] = 'Simple Name';
$lang['Value'] = 'Value';
$lang['Save_Settings'] = 'Save Settings';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Background Image';
$lang['Background_color'] = 'Background Color';
$lang['Theme_name'] = 'Theme Name';
$lang['Link_color'] = 'Link Color';
$lang['Text_color'] = 'Text Color';
$lang['VLink_color'] = 'Visited Link Color';
$lang['ALink_color'] = 'Active Link Color';
$lang['HLink_color'] = 'Hover Link Color';
$lang['Tr_color1'] = 'Table Row Color 1';
$lang['Tr_color2'] = 'Table Row Color 2';
$lang['Tr_color3'] = 'Table Row Color 3';
$lang['Tr_class1'] = 'Table Row Class 1';
$lang['Tr_class2'] = 'Table Row Class 2';
$lang['Tr_class3'] = 'Table Row Class 3';
$lang['Th_color1'] = 'Table Header Color 1';
$lang['Th_color2'] = 'Table Header Color 2';
$lang['Th_color3'] = 'Table Header Color 3';
$lang['Th_class1'] = 'Table Header Class 1';
$lang['Th_class2'] = 'Table Header Class 2';
$lang['Th_class3'] = 'Table Header Class 3';
$lang['Td_color1'] = 'Table Cell Color 1';
$lang['Td_color2'] = 'Table Cell Color 2';
$lang['Td_color3'] = 'Table Cell Color 3';
$lang['Td_class1'] = 'Table Cell Class 1';
$lang['Td_class2'] = 'Table Cell Class 2';
$lang['Td_class3'] = 'Table Cell Class 3';
$lang['fontface1'] = 'Font Face 1';
$lang['fontface2'] = 'Font Face 2';
$lang['fontface3'] = 'Font Face 3';
$lang['fontsize1'] = 'Font Size 1';
$lang['fontsize2'] = 'Font Size 2';
$lang['fontsize3'] = 'Font Size 3';
$lang['fontcolor1'] = 'Font Color 1';
$lang['fontcolor2'] = 'Font Color 2';
$lang['fontcolor3'] = 'Font Color 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Polling Image Size [px]';
$lang['img_pm_size'] = 'Private Message Status size [px]';*/

$lang['Rank'] = 'Rank';
$lang['Never'] = 'Never';
$lang['Show'] = 'Show';

//
// Acronyms
//
$lang['Acronyms'] = 'Acronyms';

// Start add - Prune users MOD
$lang['Prune_users'] = 'Prune users';

// Start add - Yellow card admin MOD
$lang['Greencard'] = 'Un-ban'; 
$lang['Bluecard'] = 'Post report'; 

$lang['Rules'] = 'Rules';
$lang['board_faq'] = 'Board Faq';
$lang['bbcode_faq'] = 'BBcode Faq';
$lang['attachment_faq'] = 'Attachment Faq';
$lang['prillian_faq'] = 'Prillian Faq';
$lang['bid_faq'] = 'Buddy List Faq';
$lang['Faq_manager'] = 'Faq Admin';
$lang['Mass_Email_Users']='Mass Email and PMs';
$lang['PostDelayed'] = 'Delayed Topic';	// MOD: Delayed Topics
$lang['No_users_browsing'] = 'There are no users currently browsing this forum';
$lang['Posting_message'] = 'Posting a message';
$lang['Searching_forums'] = 'Searching forums';
$lang['Viewing_online'] = 'Viewing who is online';
$lang['Viewing_member_list'] = 'Viewing member list';
$lang['Viewing_priv_msgs'] = 'Viewing Private Messages';
$lang['Viewing_FAQ'] = 'Viewing FAQ';
$lang['Viewing_KB'] = 'Viewing KB';

$lang['User_deleted_successfully'] = 'User(s) deleted successfully!';
$lang['User_add_group_successfully'] = 'User(s) added to group successfully!';
$lang['group_payment'] = 'payment group';
$lang['L_GROUP_PAYMENTS_LW'] = 'The payment to join this group: (in %s)<br>No need to set the following information when this group doesnot require payment to join.';

$lang['L_DONATION_SETTINGS'] = 'Donation Settings';
$lang['L_LW_HEADER_REMINDER'] = 'Enable Donation Reminder';
$lang['L_LW_HEADER_REMINDER_EXPLAIN'] = 'If set to yes, a message will be displayed in the header informing users of their current donation status.';
$lang['L_LW_DISPLAY_X_DONORS'] = 'Display how many last donors: ';
$lang['L_LW_DISPLAY_X_DONORS_EXPLAIN'] = 'Enter the number of newest donors you want to display.';
$lang['L_LW_DONATION_DESCRIPTION'] = 'The reason for donation: ';
$lang['L_LW_DONATION_DESCRIPTION_EXPLAIN'] = 'Your reason or description of donation, if no need, leave it blank.';
$lang['L_LW_DONATION_GOAL'] = 'You currently goal for donation: ';
$lang['L_LW_DONATION_GOAL_EXPLAIN'] = 'Enter the amount of cash you want to collect, if no goal, leave it as 0.';
$lang['L_LW_DONATION_START'] = 'Set the start time of current donation collection: ';
$lang['L_LW_DONATION_START_EXPLAIN'] = 'The time format must be yyyy/mm/dd, if no need, leave it blank.';
$lang['L_LW_DONATION_END'] = 'Set the end time of current donation collection: ';
$lang['L_LW_DONATION_END_EXPLAIN'] = 'The time format must be yyyy/mm/dd, if no need, leave it blank.';
$lang['L_LW_DONATION_POINTS'] = 'Set the points to give to donor per $1: ';
$lang['L_LW_DONATION_POINTS_EXPLAIN'] = 'IMPORTANT! If you donot have points MOD or you donot want to give points to donors, set this to 0.';
$lang['L_LW_PERSONAL_PAYPAL_ACCT'] = 'Your personal account in PayPal: ';
$lang['L_LW_PERSONAL_PAYPAL_ACCT_EXPLAIN'] = 'If you donot have personal account, enter the same account as your premier/business account.';
$lang['L_LW_BUSINESS_PAYPAL_ACCT'] = 'Your premier/business account in PayPal: ';
$lang['L_LW_BUSINESS_PAYPAL_ACCT_EXPLAIN'] = 'If you donot have premier/business account, enter the same account as your personal account.';
$lang['L_LW_PAYPAL_CURRENCY_CODE'] = 'The PayPal currency code your account support: ';
$lang['L_LW_PAYPAL_CURRENCY_CODE_EXPLAIN'] = 'For example if your account support US dollar, then enter USD.';
$lang['L_LW_POSTS_COUNTS'] = 'Set the posts count to give to donor per $1: ';
$lang['L_LW_POSTS_COUNTS_EXPLAIN'] = 'IMPORTANT! If you donot want to give posts count to donors, set this to 0. <br />you can only choose either points or posts count to give to donors.';
$lang['L_LW_TOP_DONORS'] = 'Display top donors: ';
$lang['L_LW_TOP_DONORS_EXPLAIN'] = 'If you want to display top donors, enter 1; If you want to display last donors, enter 0.';
//-- mod : Loewen Enterprise - Donation MOD v1.0.0.2 ----------------------------------------------------
//-- add
$lang['L_LW_DONATE_TOGRP_ONE'] = 'Enter the first group id to which the donor will join:';
$lang['L_LW_DONATE_TOGRP_ONE_EXPLAIN'] = 'Enter 0 to mean no first group to join.';
$lang['L_LW_TOGRPONE_AMOUNT'] = 'Enter the minimum amount donation for your user to join:';
$lang['L_LW_TOGRPONE_AMOUNT_EXPLAIN'] = 'The donor can only join the first group if he donated more than the amount specified.';
$lang['L_LW_DONATE_TOGRP_TWO'] = 'Enter the second group id to which the donor will join:';
$lang['L_LW_DONATE_TOGRP_TWO_EXPLAIN'] = 'Enter 0 to mean no second group to join.';
$lang['L_LW_TOGRPTWO_AMOUNT'] = 'Enter the minimum amount donation for your user to join:';
$lang['L_LW_TOGRPTWO_AMOUNT_EXPLAIN'] = 'The donor can only join the second group if he donated more than the amount specified.';

$lang['L_LW_TORANK_ID'] = 'Enter the rank id:';
$lang['L_LW_TORANK_ID_EXPLAIN'] = 'The rank id that your user\'s rank will be set to after donation.<br />Enter 0 if you donot want this feature.';


$lang['Donates'] = 'Donors Admin'; 
$lang['Currency_Management'] = 'Currency Management';
$lang['Donates_Add'] = 'Add new';


$lang['Users_Inactive'] = 'Inactive Users';
$lang['Users_Inactive_Explain'] = 'If in "Enable account activation" you have selected "User" or "Admin", in this list you will have the Users who have never been activated.<br /><br />By clicking on "Contact" you will send a contact e-mail to all the selected Users.<br />By clicking on "Activate" you will activate all the selected Users.<br />By clicking on "Delete" you will send an e-mail and delete all the selected Users.';
$lang['UI_Check_None'] = '"Enable account activation" is on <b>None</b>.';
$lang['UI_Check_User'] = '"Enable account activation" is on <b>User</b>';
$lang['UI_Check_Admin'] = '"Enable account activation" is on <b>Admin</b>.';
$lang['UI_User'] = 'User';
$lang['UI_Registration_Date'] = 'Registration Date';
$lang['UI_Last_Visit'] = 'Last Visit';
$lang['UI_Active'] = 'Active';
$lang['UI_Email_Sents'] = 'Email Sents';
$lang['UI_Last_Email_Sents'] = 'Last Email';
$lang['UI_CheckColor'] = 'Check';
$lang['UI_CheckAll'] = 'Check All';
$lang['UI_UncheckAll'] = 'Uncheck All';
$lang['UI_InvertChecked'] = 'Invert Checked';
$lang['UI_Contact_Users'] = 'Contact';
$lang['UI_Delete_Users'] = 'Delete';
$lang['UI_Activate_Users'] = 'Activate';
$lang['UI_select_user_first'] = 'You must to select a User before';
$lang['UI_return'] = 'Click %sHere%s to return to the Inactive Users';
$lang['UI_Deleted_Users'] = 'The Users has been removed';
$lang['UI_Activated_Users'] = 'The Users has been actived';
$lang['UI_Alert_Days'] = "days";
$lang['UI_with_zero_messages'] = "with zero messages";
$lang['UI_Alert_Every'] = "Every";
$lang['UI_Alert_UpTo'] = "Up to";
$lang['UI_Alert_Over'] = "Over";

// Admin HTTP Referrers Mod
$lang['HTTP_Referers_Title'] = 'HTTP Referers';
$lang['HTTP_Referers_Explain'] = 'Here you can see and delete the Http Referers to the forum';
$lang['Referer_http'] = 'Referer';
$lang['Referer_hits'] = 'Hits';
$lang['referer_del_success'] = 'Http Referers were successfully removed.';
$lang['Confirm_delete_referer'] = 'Are you sure you want to delete this HTTP Referrer?';
$lang['Confirm_delete_referers'] = 'Are you sure you want to delete all HTTP Referrers?';
$lang['Click_return_referersadmin'] = 'Click %sHere%s to return to Http Referers Administration';
$lang['Referer_firstvisit'] = 'First visit';
$lang['Referer_lastvisit'] = 'Last visit';
$lang['Extra_priv'] ='Extra priveliges';
$lang['Extra_priv_explain'] ='Allow user to copy and right click';
$lang['Referer_urls_show'] = 'Show URL\'s';
$lang['Referer_urls_hide'] = 'Hide URL\'s';
$lang['Referer_ip'] = 'Last IP referred';
$lang['Referer_host'] = 'Referrer Host';
$lang['Referer_url'] = 'Referrer URL';
$lang['HTTP_Referers_Title'] = 'HTTP Referrers';
$lang['HTTP_Referers_Explain'] = 'Here you can see the HTTP Referrers of the forum and remove them.';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Your installation is up to date, no updates are available for your version of phpBB.';
$lang['Version_not_up_to_date'] = 'Your installation does <b>not</b> seem to be up to date. Updates are available for your version of phpBB, please visit <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> to obtain the latest version.';
$lang['Latest_version_info'] = 'The latest available version is <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'You are running <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Unable to open connection to phpBB Server, reported error is:<br />%s';
$lang['Socket_functions_disabled'] = 'Unable to use socket functions.';
$lang['Mailing_list_subscribe_reminder'] = 'For the latest information on updates to phpBB, why not <a href="http://www.phpbb.com/support/" target="_new">subscribe to our mailing list</a>.';
$lang['Version_information'] = 'Version Information';

$lang['Ban'] = 'Ban'; // added by edwin
//
//IntegraMOD News Check
//
$lang['Connect_socket_error_integra'] = 'Unable to open connection to the IntegraMOD server: <br />%s';
$lang['integra_news'] = 'IntegraMOD News';

// Auto Language Detection
$lang['Auto_language_detection'] = 'Auto language detection';
$lang['auto_lang_title'] = 'Automatic language detection for guests';
$lang['auto_lang_edit_selected'] = 'Edit Selected';
$lang['auto_lang_explain'] = 'On this page you can configure the automatic language detection feature.  For possible language code settings check out the language preferences section within your browser. The values to use look like en, en-us, de, fr, etc.';
$lang['auto_lang_language_check'] = 'Selection';
$lang['auto_lang_language_code'] = 'Language code';
$lang['auto_lang_language_select'] = 'Associated language';
$lang['auto_lang_empty_lc'] = 'Please provide a language code';
$lang['auto_lang_exists_lc'] = 'The language code <strong>%s</strong> is existing already'; // %s inserts the language code
$lang['auto_lang_notexists_lc'] = 'The language code <strong>%s</strong> does not exist'; // %s Inserts the language code
$lang['auto_lang_not_exist'] = 'The language <strong>%s</strong> does not exist on this phpBB Board.';
$lang['auto_lang_invalid_characters'] = 'Please use alphanumerical characters and the minus (-) symbol only for the language code';

// lang validation
$lang['Lang_validate'] = 'Validate Language Keys';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Allowed login attempts';
$lang['Max_login_attempts_explain'] = 'The number of allowed board login attempts.';
$lang['Login_reset_time'] = 'Login lock time';
$lang['Login_reset_time_explain'] = 'Time in minutes the user have to wait until he is allowed to login again after exceeding the number of allowed login attempts.';

$lang['Photo_settings'] = 'Photo Settings';
$lang['Max_filesize_photo'] = 'Maximum Photo File Size';
$lang['Max_filesize_photo_explain'] = 'For uploaded photo files';

$lang['Allow_local_photo'] = 'Enable gallery photos';
$lang['Allow_remote_photo'] = 'Enable remote photos';
$lang['Allow_remote_photo_explain'] = 'Photos linked to from another website';
$lang['Allow_upload_photo'] = 'Enable photo uploading';
$lang['Photo_dir_size'] = 'Photo directory size';
$lang['Max_photo_size'] = 'Maximum Photo Dimensions';
$lang['Max_photo_size_explain'] = '(Height x Width in pixels)';
$lang['Photo_storage_path'] = 'Photo Storage Path';
$lang['Photo_storage_path_explain'] = 'Path under your phpBB root dir, e.g. images/photos';
$lang['Photo_gallery_path'] = 'Photo Gallery Path';
$lang['Photo_gallery_path_explain'] = 'Path under your phpBB root dir for pre-loaded images, e.g. images/photos/gallery';
$lang['User_allowphoto'] = 'Can display photo';
$lang['Admin_photo_explain'] = 'Here you can see and delete the user\'s current photo.';

//
// That's all Folks!
// -------------------------------------------------

//
// Reports
//
$lang['Report_config_explain'] = 'On this page you can change the general configuration of the report feature.';
$lang['Report_subject_auth'] = 'Individual permissions';
$lang['Report_subject_auth_explain'] = 'If this setting is enabled, moderators can only view reports they can edit. For example a post report will be hidden if the user isn\'t a moderator of the forum the post belongs to.';
$lang['Report_modules_cache'] = 'Cache modules in a file';
$lang['Report_modules_cache_explain'] = 'Note: The cache directory must be set to <em>CHMOD 777</em> (full write permissions).';
$lang['Report_notify'] = 'Email notification';
$lang['Report_notify_change'] = 'on status changes and new reports';
$lang['Report_notify_new'] = 'on new reports';
$lang['Report_list_admin'] = 'Admin-only report list';
$lang['Report_new_window'] = 'Open subjects in a new window';
$lang['Report_new_window_explain'] = 'This setting also affects direct links to the reports at the view topic page.';
$lang['Report_config_updated'] = 'The configuration was updated.';
$lang['Click_return_report_config'] = 'Click %sHere%s to return to the configuration.';

$lang['Modules_reasons'] = 'Modules &amp; Reasons';
$lang['Report_admin_explain'] = 'On this page you can install new report modules and edit or uninstall currently installed modules. In addition you can set up predefined reasons for every report module.';
$lang['Report_module'] = 'Report module';
$lang['Installed_modules'] = 'Installed modules';
$lang['No_modules_installed'] = 'No modules installed';
$lang['Reasons'] = 'Reasons (%d)';
$lang['Sync'] = 'Sync';
$lang['Uninstall'] = 'Uninstall';
$lang['Install2'] = 'Install';
$lang['Inactive_modules'] = 'Inactive modules';
$lang['No_modules_inactive'] = 'No inactive modules';
$lang['Report_module_not_exists'] = 'The selected module doesn\'t exist.';
$lang['Click_return_report_admin'] = 'Click %sHere%s to return to the Modules &amp; Reasons administration.';

$lang['Back_modules'] = 'Back to the modules';
$lang['Report_reason'] = 'Report reason';
$lang['No_reasons'] = 'No reasons for this module';
$lang['Add_reason'] = 'Add reason';
$lang['Edit_reason'] = 'Edit reason';
$lang['Reason_desc_explain'] = 'If the description matches with a language variable, the variable will be used instead.';
$lang['Reason_desc_empty'] = 'You have to enter a report reason.';
$lang['Report_reason_added'] = 'The report reason was added.';
$lang['Report_reason_edited'] = 'The report reason was edited.';
$lang['Delete_reason'] = 'Delete reason';
$lang['Delete_report_reason_explain'] = 'Are you sure you want to delete the selected report reason?';
$lang['Report_reason_deleted'] = 'The report reason was deleted.';
$lang['Report_reason_not_exists'] = 'The selected report reason doesn\'t exist.';
$lang['Click_return_report_reasons'] = 'Click %sHere%s to return to the report reasons administration.';

$lang['Report_module_synced'] = 'The module was synced.';

$lang['Uninstall_report_module'] = 'Uninstall module';
$lang['Uninstall_report_module_explain'] = 'Are you sure you want to uninstall the selected report module? <br />Note: All reports in the module will be deleted, too.';
$lang['Report_module_uninstalled'] = 'The module was uninstalled.';

$lang['Install_report_module'] = 'Install module';
$lang['Edit_report_module'] = 'Edit module';
$lang['Report_prune'] = 'Prune reports';
$lang['Report_prune_explain'] = 'Cleared reports and reports marked for deletion will be deleted automatically after <var>x</var> days. Set to <em>zero</em> to disable the feature.';
$lang['Write'] = 'Write';
$lang['Report_auth'] = array(
	REPORT_AUTH_USER => 'Users',
	REPORT_AUTH_MOD => 'Moderators',
	REPORT_AUTH_CONFIRM => 'Moderators (after confirmation)',
	REPORT_AUTH_ADMIN => 'Administrators');
$lang['Report_auth_notify_explain'] = 'Moderators will only be notified if they can view and edit the report.';
$lang['Report_auth_delete_explain'] = 'If you select <em>Moderators (after confirmation)</em>, deletions have to be confirmed by an administrator.';
$lang['Report_module_installed'] = 'The module was installed.';
$lang['Report_module_edited'] = 'The module was edited.';