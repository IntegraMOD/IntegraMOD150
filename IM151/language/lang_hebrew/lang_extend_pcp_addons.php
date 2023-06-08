<?php
/***************************************************************************
 *						lang_extend_pcp_addons.php [Hebrew]
 *						------------------------------------
 *	begin				: 30/10/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.0 - 30/10/2003
 *
 ***************************************************************************
 *
 *								Customs lang key entries
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
	$lang['Lang_extend_pcp_addons'] = '������ ���� ����� �������';
}

// START - SEND PM ON REGISTER MOD - AbelaJohnB 
$lang['register_pm_subject'] = '���� ��� �-%s'; 
$lang['register_pm'] = '����!<br /><br />���� ��� �-%s. <br /><br />��� ������ ���� ���� ����� ��� ���� ��! <br /><br />����� ����� ����� ������� �� ����� �� ���� ���� ����! <br /><br />~����!<br />���� %s '; 
// END - SEND PM ON REGISTER MOD - AbelaJohnB 

$lang['gallery'] = '������ �����';
$lang['PCP_topics_last'] = '������ �������';
$lang['PCP_topics_last_per_page'] = '���� ������ ������� ������� ��� ���� ��� ���� �� ��� �����';
$lang['PCP_topics_last_visit'] = '��� ������ ������';

$lang['gal_pic_in'] = ' ������ ���� ';
$lang['gal_pic'] = ' ������';
$lang['user_photo'] = '����� ������� ������';
$lang['user_photo_explain'] = '�� ���� ����� �������� ������ ���. <a href="album_personal.php">���� �����</a> ���� ���� � <a href="profile.php?mode=profil">������ ���</a>';

$lang['country_explain'] 	= '��� �� ������ ��� ��� ��� ������ ��� ������ ������� ��� ������ �������';
$lang['profil_country']		= '��� ������';
$lang['profil_state']		= '��� ������';
$lang['state_explain'] 	        = '��� �� ���� ��� ��� ��� ������ ��� ������ ������� ��� ����� �������';

$lang['Holidays'] = '������';
$lang['On_Holidays'] = '������';
$lang['No_holidays_specify'] = '�� ����';
// skype :: added :: start
$lang['SKYPE'] = '����\'� Skype';
// skype :: added :: end

$lang['FDOW']	= '��� ����� �� �����'; // calendar fix
?>