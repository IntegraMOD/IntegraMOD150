<?php
/***************************************************************************
 *                          lang_contact.php [Hebrew]
 *                            -------------------
 *   begin                : Friday, Jan 31, 2003
 *   version              : 0.8.0
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
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = '';

// Do not change the next six lines.
// Avoid including the file more than once.
if ( defined('IN_CONTACT_LANG') )
{
	return;
}
define('IN_CONTACT_LANG', true);

// You may want to edit the following lines to match your website.
$lang['Buddy'] = '���';
$lang['Ignore'] = '�����';
$lang['Disallow'] = '�� �����';
$lang['User_ignoring_you'] = '������ �� ���� ������ �������� ���.';
$lang['User_not_want_contact'] = '������ �� ���� ������ ��� ������ ���.';
$lang['Buddies_online'] = '����� ��� ������';
$lang['Buddy_online'] = '��� �� �����';
$lang['Buddies_offline'] = '����� ��� ������� �����';
$lang['Buddy_offline'] = '��� �� ����� �����';
$lang['Listbox_Buddies'] = '������ ���';
$lang['Online'] = '�����';
$lang['Offline'] = '�����';
$lang['Buddies'] = '�����';
$lang['Ignored_some_users'] = '��� ������� ����� �� �������. %s��� ����� �� �� ���� �������?%s';
$lang['Ignore_some_users'] = '%s��� ����� �� ��� �������� ��������?%s';

// These will be used in the user profiles for links to do the indicated thing
// Also used as ALT text for images in several places.  %s will be replaced with a
// user's name
$lang['Add_to_buddy'] = '���� �� %s ������ ������ ���';
$lang['Remove_from_buddy'] = '��� �� %s ������ ������ ���';
$lang['Add_to_ignore'] = '���� �� %s ������ �������� ���';
$lang['Remove_from_ignore'] = '��� �� %s ������ �������� ���';
$lang['Add_to_disallow'] = '���� �� %s ������ ���� ����� ����� ���';
$lang['Remove_from_disallow'] = '��� �� %s ������ ���� ����� ����� ���';


// Error Messages
$lang['No_alerts_updated'] = '��� ������� ������ ����� �������';
$lang['No_autoclose'] = '�� ��� ���� ����� ��, �� ������ ����� ����� �������� �� ����� ������ ���. ����� ������� ������ ����� �-JavaScript ���� ������ ���. �� ����� ���� ��.';

// Control Panel
$lang['Users_you_ignore'] = '������� ���� ��� �����';
$lang['Users_you_disallow'] = '������� ���� �� ����� ��� ����� ��� ����';
$lang['Users_buddy_you'] = '������� ������� ���� ����';
$lang['Users_you_buddy'] = '������ ���';
$lang['None_you_ignore'] = '��� �� ����� ��� ��� ���������.';
$lang['None_you_disallow'] = '��� ����� ����� ��� �� �� ��������.';
$lang['None_buddy_you'] = '��� ������� ������� ���� ����.';
$lang['None_you_buddy'] = '��� �� �����.';
$lang['Add_a_user'] = '���� ����� ������ ��?';
$lang['Add_user'] = '���� �����';
$lang['Move_selected_users'] = '���� �� �������� ������� �:';
$lang['Buddy_link'] = '�����';
$lang['Buddied_link'] = '��� ��...';
$lang['Ignore_link'] = '�������';
$lang['Disallow_link'] = '�� ������';
$lang['Be_alerted'] = '���� �� ���� ����� �� �����';
$lang['Edit_alerts'] = '���� ������ ���� ������� ��������';

// Success messages
$lang['Alerts_updated'] = '������ ������� ������ ��� �������� �����';
$lang['Alerts_oops'] = ' ��� �������, ��� ���� ����� ����:<br />';
$lang['Moved_to_buddies'] = '�������� ������� ������ ������ ������ ���.';
$lang['Moved_to_ignore'] = '�������� ������� ������ ������ �������� ���.';
$lang['Moved_to_disallow'] = '�������� ������� ������ ������ ����� ������ ���.';
$lang['Removed_selected_users'] = '�������� ������� �����.';
$lang['Buddy_updated'] = '����� ������ ������';
$lang['Ignore_updated'] = '����� �������� ������';
$lang['Disallow_updated'] = '����� ����� ������ ������';


// For Prillian
$lang['Close_window_link'] = '<br /><br /><a href="javascript:window.close();">' . $lang['Close_window'] . '</a>';

/* Entries Added in Prillian 0.7.0 & Contact List 0.3.0 */
$lang['No_ignore_admin'] = '����� ������ �� �� ����� �� ������� ������� �� ������� �����: %s. ��� ���� �� �������� ��� ������ ������ �� �� ����� �� ���� �������.<br />';
$lang['No_contact_add_self'] = '����� ������ �� ���� ���� ������ ���� ���.  �� �� ������; ��� ���� �� �������� �� ������ ������ �� ���� ������ ���� ���.';
$lang['Add_Selected_as_Buddies'] = '���� �� ������� ������';
$lang['Add_contact_users_link'] = '���� ���� ��� �����';
$lang['You_have_buddies'] = '�� �� %d �����.';
$lang['You_have_buddy'] = '�� �� ��� ���.';
$lang['You_are_ignoring'] = '��� ����� �-%d �������.';
$lang['You_are_ignoring_one'] = '��� ����� ������ ���.';
$lang['You_have_disallowed'] = '��� �� ����� �-%d ������� ����� ��� ����.';
$lang['You_have_disallowed_one'] = '��� �� ����� ������ ��� ����� ��� ����.';
$lang['You_as_buddies'] = '%d ������� ����� ������.';
$lang['You_as_buddy'] = '����� ��� ���� ����.';
$lang['Add_many_contacts_explain'] = '��� ���� ������ ��� ������� ������� ������, �������, �� ����� ������ ��� ���.  ���� �� ��� �� �� ����� ���� ���� ������ ����� ����� ����.  �� �� ����� ���� ����� ����� �����.';
$lang['Add_to_Buddy_List'] = '���� ������ ������';
$lang['Add_to_Ignore_List'] = '���� ������ ��������';
$lang['Add_to_Disallow_List'] = '���� ������ ����� ������';


/* Entries Changed in Prillian 0.7.0 & Contact List 0.3.0 */
/* Any of these that have contact in the $lang['name'] part used to have bid or
 buddy in place of contact. In some, that is the only change */
$lang['Contact_List_FAQ'] = '������ ����'; // Title of the FAQ

$lang['Contact_Management'] = '����� ����� ���';

// Error Messages
$lang['No_contact_mode'] = '��� ��� ��� �����';
$lang['No_contact_type'] = '��� ��� ��� �����';
$lang['No_contact_action'] = '��� ����� ��� ������';
$lang['No_contact_id'] = '��� id �� ����� ���';
$lang['Invalid_contact_action'] = '����� ���� ������� ������';


// Control Panel
$lang['Contact_click_here'] = '%s��� ����� ���%s';


// Success messages
$lang['Confirm_contact_changes'] = '��� ���� ���� ���� ���� ������� ���?';
$lang['No_Contact_changes'] = '��� ������� �������';


//Private Message alerts
$lang['System_title'] = '����� ����� ����� ���';
$lang['Contact_Alert_PM'] = '[url=%s]%s[/url] ����� ���� ������ ���� ���.  ��� ���� �� ����� ���� ���, [url=%s]��� ���[/url]. ���� ����� �������� ������ ��-��� ����� ������; ��� �� ���� ����� ������ ��.';

?>