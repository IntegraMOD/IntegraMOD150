<?php
/***************************************************************************
 *                            lang_admin_album.php [Hebrew]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
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

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_multiple_album.' . $phpEx);
//--- Multiple File Upload mod : end

//
// Configuration
//
$lang['Album_config'] = '������ ������';
$lang['Album_config_explain'] = '��� ���� ����� �� ������� ������� �� ����� ������� ��� ���';
$lang['Album_config_updated'] = '������ ������ ������ ������';
$lang['Click_return_album_config'] = '��� %s���%s ��� ����� ������� ������';
$lang['Max_pics'] = '������ ������� ��� ������� (-1 = ���� �����)';
$lang['User_pics_limit'] = '����� ������ ��� ������� ��� ����� (-1 = ���� �����)';
$lang['Moderator_pics_limit'] = '����� ������ ��� ������� ��� ���� (-1 = ���� �����)';
$lang['Pics_Approval'] = '����� ������';
$lang['Rows_per_page'] = '���� ����� ����� ������� ������';
$lang['Cols_per_page'] = '���� ������ ����� ������� ������';
$lang['Thumbnail_quality'] = '����� ����� ���� (1-100)';
$lang['Thumbnail_cache'] = '����� ������ �����';
$lang['Manual_thumbnail'] = '����� ���� �����';
$lang['GD_version'] = '����� ����� �-GD';
$lang['Pic_Desc_Max_Length'] = '���� ����� ������/���� ������ (bytes)';
$lang['Hotlink_prevent'] = '����� ������� ����';
$lang['Hotlink_allowed'] = '������ �������� �������� ���� (������� ��-��� ����)';
$lang['Personal_gallery'] = '������� �������� ����� ������ �����';
$lang['Personal_gallery_limit'] = '����� ������ ��� ������ ����� (-1 = ���� �����)';
$lang['Personal_gallery_view'] = '�� ���� ����� �������� ������';
$lang['Rate_system'] = '���� ����� �������';
$lang['Rate_Scale'] =' ���� �������';
$lang['Comment_system'] = '���� ����� ������';
$lang['Thumbnail_Settings'] = '������ ����� ����';
$lang['Extra_Settings'] = '������ ������';
$lang['Default_Sort_Method'] = '��� ���� ����� ����';
$lang['Default_Sort_Order'] = '��� ����� ����� ����';
$lang['Fullpic_Popup'] = '��� ������ ����� ����� ����';


// Personal Gallery Page
$lang['Personal_Galleries'] = '������� ������';
$lang['Album_personal_gallery_title'] = '������ �����';
$lang['Album_personal_gallery_explain'] = '����� ��, ��� ���� ����� ���� ������ ������� ����� ����� ������ �������� ������. ������ ��� ������� �� ���� ��� ���� "����" � "������� �������� ����� ������ ������" �� "�� ���� ����� ������� ������" ���� ������ ������';
$lang['Album_personal_successfully'] = '������� ������ ������';
$lang['Click_return_album_personal'] = '��� %s���%s ��� ����� ������� �������� �������';

//
// Categories
//
$lang['Album_Categories_Title'] = '���� �������� �����';
$lang['Album_Categories_Explain'] = '���� �� ��� ���� ���� �� ��������� ���: �����, �����, �����, �����, ������.';
$lang['Category_Permissions'] = '����� ��������';
$lang['Category_Title'] = '����� ��������';
$lang['Category_Desc'] = '����� ��������';
$lang['View_level'] = '��� ����';
$lang['Upload_level'] = '���� ���';
$lang['Rate_level'] = '��� ���';
$lang['Comment_level'] = '��� ���';
$lang['Edit_level'] = ' ���� ���';
$lang['Delete_level'] = '��� ���';
$lang['New_category_created'] = '�������� ����� ����� ������';
$lang['Click_return_album_category'] = '��� %s���%s ��� ����� ������ �������� ������';
$lang['Category_updated'] = '�������� ������ ������';
$lang['Delete_Category'] = '��� �������';
$lang['Delete_Category_Explain'] = '����� ��� ����� �� ����� ������� ������� ���� ��� ���� ���� �� �� ������� ���� �����';
$lang['Delete_all_pics'] = '��� �� �� �������';
$lang['Category_deleted'] = '�������� ����� ������';
$lang['Category_changed_order'] = '��� �������� ���� ������';

//
// Permissions
//
$lang['Album_Auth_Title'] = '����� ������';
$lang['Album_Auth_Explain'] = '��� ��� ���� ����� ���� ������ ������� ������ ����� ������� ��� ������� ����� �� �� ���� ���� �����';
$lang['Select_a_Category'] = '��� �������';
$lang['Look_up_Category'] = '��� �������';
$lang['Album_Auth_successfully'] = '������ ������ ������';
$lang['Click_return_album_auth'] = '��� %s���%s ��� ����� ������ ������';

$lang['Upload'] = '����';
$lang['Rate'] = '���';
$lang['Comment'] = '���';
$lang['View'] = '�����';

//
// Clear Cache
//
$lang['Clear_Cache'] = '��� ������';
$lang['Album_clear_cache_confirm'] = '�� ��� ����� ������� ������ ������ ����� ��� ���� ����� �� ����� ������� ������ ��� ���� ����� ������ ������� ������ ��� ������� ������ ��� ���� ����.<br /><br /> ��� ���� ����� ���� �����?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />����� ������� ������ ��� ���� ������<br />&nbsp;';

/* BSRA Album Hierarchy Mod v1.0  START */
$lang['Parent_Category'] = '������� �� (�������� ��)';
$lang['Child_Category_Moved'] = '�������� ������ ���� �������� ����. �������� ����� ������ �������� <B>%s</B>.';
/* BSRA Album Hierarchy Mod v1.0 STOP  */
?>