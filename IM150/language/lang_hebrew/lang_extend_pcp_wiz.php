<?php
/***************************************************************************
 *						lang_extend_pcp_wiz.php [Hebrew]
 *						---------------------------------------
 *	begin				: 21/03/2005 (dd/mm/yyyy)
 *	copyright		: Ptirhiik / ednique
 *	email				: ptirhiik@clanmckeen.com / edwin@ednique.com
 *
 *	version			: 0.0.1 - 21/03/2005
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
	// addded by edwin :: PCP Wiz
	$lang['PCP_10_wizard'] = '��� ��� ����� �������';
	$lang['PCP_10_wizard_explain'] = '��� ������ ����� �� ����� ��� ����� ������� ��� ���� ��. ��� ����� ���� ���� ���.';
	$lang['Wiz_mode_error'] = '���� <span class="explaintitle">%s</span> �� ����.';
	$lang['Wiz_buddylist'] = '����� ����� �����';
	$lang['Wiz_buddylist_description'] = '��� ��� ���� ����� �� ����, ������ ����� �� ���� ������ �� ���� ����� ������ ������/����� ��������/����� ������.';
	$lang['Wiz_buddylist_explain'] = '<span class="explaintitle">�� ���</span>: ��� �� ��� ��� ����� �� ���� ���� ��������.<br><span class="explaintitle">���</span>: ��� ���� ���� ����� ������� ������. ��� �� ����� ��� ������ �� �����.<br><span class="explaintitle">����� ����</span>: ���� ������ ����� �� ��� ���� �����, ��� �� ���� ������ ����.<br><span class="explaintitle">����</span>: ���� ��� �� ��� ����� ���� ������.<br><span class="explaintitle">����� �������</span>: ��� �� ���� ����� ��-��� ��������.<br><span class="explaintitle">�����</span>: ��� �� ���� ���� ������. ���� ���� ��� ����� �� ��� ���� ���� ����� ������ ������/����� �������� �����.<br><span class="explaintitle">�����</span>: ����� �� ����� �� ����� �� �������� ��� ������ ���� ��� ������ �� �������� ������ �� ��. ��� ������� ����� �������� ����� ��� �� ����� �����.<br>';
	$lang['Default'] = '����� ����';
	$lang['Forced'] = '����';
	$lang['Selectable'] = '����� �������';
	$lang['Update_success'] = '���� ��� ����� ������� ����� ������.';
	$lang['Wiz_addremovefields'] = '���� / ��� ���� ����';
	$lang['Wiz_addremovefields_description'] = '��� ��� ���� ������ �� ����� ���� ����� ��� ����� �� ��� ����.';
	$lang['Wiz_addremovefields_explain'] = '<span class="explaintitle">��� ����</span>: ��� �� ����� ���� ���� ����� ����� ������ ������ ���� �� ����� ������. ����� ������ ����� �� ����� �����. ����� ������ �� ����� ����� ��� ��� ���� ����� ���� �� ��� ��� ��� ����� ���� �� ������ �������� �� ��� �� ���� �����.<br><span class="explaintitle">��� ���� ����</span>: ���� �� �� �����. ��� ���� ��� ��� �� ����� �� ��� ����� �� ���� ���� ����� ������ �����.<br><span class="explaintitle">��� ���� ����</span>: ���� �� �� �����. ��� ���� ��� ��� �� ����� �� ��� ����� �� ���� ���� ���� ���� ������ �����.<br><span class="explaintitle">���� ������</span>: ��� ��� ���� ���� ����� ����� ������ �� �� ����� ������� ��� ����� ����� �����. ��� ���� ����� 1 �� ���� ���� ��� ������ ���� ����� ����� ��-��� ����� ������ "SHIFT + �����", "CTRL + �����" �� ����� "����� + �����".<br><span class="explaintitle">������</span>: ��� "->" ��� ������ ���� ����� ���� ������ ����� ����� ������� �������. ��� "<-" ��� ����� ���� ������ ���� ������ ����� ����� ������� �������.<br><span class="explaintitle">���� ������</span>: ��� ��� ���� ���� ����� ����� ������ �� �� ����� ������ ����� �����. ��� ���� ����� 1 �� ���� ���� ��� ����� ���� ������ ����� ��-��� ����� ������ "SHIFT + �����", "CTRL + �����" �� ��-��� ����� "����� + �����".<br><span class="explaintitle">���� �����/����</span>: ���� ��� ���� ��� �� ���� ���� ����� ����� ������� ��� ���� ������ ����� ������� ��� ������ ���� ����� �� ���� �����. ����� ����� ����� ����� ����� ���.<br><span class="explaintitle">�����</span>: ����� �� ����� �� ����� �� �������� ��� ����� ���� ����� ��� ��� ���� ����� �� ���� ���� ����� ������ ����� �����.<br><span class="explaintitle">??</span>: ���� ��� ���� ��� ��� ����� ������ ��� ���� �� ����� ��, ���� ��� ����� �� ���� ���� �� ���� ���. ��� ���� �� ������ ���, ����� ���� ��� ������ ��� �����, ����� �� ���� ��� ���� ����� ������.<br>';
	$lang['Map_selected'] = '���� �� ����� <strong>%s</strong>';
	$lang['Move_up'] = '���� �����';
	$lang['Move_down'] = '���� ����';
	$lang['Wiz_showfieldinfo'] = '���� ����';
	$lang['Wiz_showfieldinfo_description'] = '��� ��� ���� �� ���� ���� �����.';
	$lang['Wiz_showfieldinfo_explain'] = '<span class="explaintitle">������</span>: ��� �� ����� ����� ��� ����� �� ���� ���� ��� ����� ����.<br><span class="explaintitle">�� ����</span>: ��� �� �� ���� ��� ����� �� ���� ���� ��������.<br>';
	$lang['Pages'] = '������';
	$lang['Select_page'] = '��� ����:';
	$lang['Select'] = '���';
	$lang['Available_fields'] = '���� ������';
	$lang['Action'] = '�����';
	$lang['Selected_fields'] = '���� ������';
	$lang['Default_Output'] = '����� ����� ����';
	$lang['Always_display'] = '��� ����';
	$lang['Wiz_outputlist'] = '��� ���� ����';
	$lang['Wiz_outputlist_description'] = '��� ��� ���� ����� �� ���� ���� ����� ����� ������.';
	$lang['Wiz_outputlist_explain'] = '<span class="explaintitle">��� ����</span>: ��� �� ����� ���� ���� ����� ����� ������ ������ ���� �� ������ ���. ����� ������ ������ �� ����� �����. ����� ������ �� ����� ����� ��� ��� ���� ���� ����� �� ��� ��� ��� ����� ���� �� ���� ������� �� ��� �� ���� �����.<br><span class="explaintitle">���� / ��� ���� ����</span>: ��� ���� ��� ��� �� ����� �� ��� ������ ���� �� ����� ���� ����� ����.<br><span class="explaintitle">���</span>: �� ���� ������ �� ����. ��� �� ��� ��� ����� �� ���� ���� ��������.<br><span class="explaintitle">��������</span>: ��� ��� ���� ����� �� ��������� ��� ���.<br><span class="explaintitle">����</span>: ��� ���� �� ��� ����� �� ���� ����. ����� ��� ������ ����� ��� ���� ��� �� ����.<br><span class="explaintitle">����</span>: ��� ���� �� ��� ����� �� ���� ����� ����.<br><span class="explaintitle">�����</span>: ��� ���� �� ��� ����� �� ���� ������.<br><span class="explaintitle">����</span>: ��� ���� �� ���� ����� �� �� ���� ��� �� ����� ������ ����� ��� ������ ����� ��� ������.<br><span class="explaintitle">����� HTML</span>: ��� ��� ���� ������ ��� ��� HTML ��� ����� �� ������. ���� ��� �� �� ����. ��� ���� ���� <em>%s</em> ����� �-HTML ��� ���� ���� ���� ����. ����� �� � <em>%s</em> ��� ��� ����� � <em>%</em> ����� �-HTML ���.<br><span class="explaintitle">������� �����</span>: ��� ��� ���� ����� ������� ����� ����� ������ ������. �� ��� �� ���� ���, ��� ���� ����� <em>��� ����� ����</em>. ���� ����� ����� �������� ������� ���, �� �������� ���� ������ �� <em>pcp_output_</em> ������� �� �������� ���� ������ ����� ��.<br><span class="explaintitle">��� ����</span>: ������ �� ���� ��� ���� ����. ���� ������ ��� <em>��</em> �� <em>����� ����</em> ������� ��� ����� ������, ����� ����� ����� ����� �� ��� ����. ��� <em>��� ����</em> ��� ����� ���� �� ����. ����: ��� <em>��� ���� �� ����� ����� ��������� ���</em> ���� �� ����� ����� ���������.<br><span class="explaintitle">�����</span>: �� �����, ��� ���� ���� ������� �� ��� ������ ��������, �� �� ���� �� ���� ����� ��� �� ���� ���.<br><span class="explaintitle">�����</span>: ����� �� ����� �� ����� �� �������� ��� ������ ���� �� �������� ������ �� ��.<br>';
	$lang['Display_when'] = '��� ����';
	$lang['Nextline'] = '����';
	$lang['Html_style'] = '����� HTML';
	$lang['Extra'] = '����';
	$lang['Example'] = '�����';
	$lang['Confirm_message'] = '��� ���� ���� ������ ��������� ���?\\n\\n����� = ��, ����� ��������� ���.\\n\\n����� = ��, �� �� ����� ����� �����.';
	$lang['Wiz_inputlist'] = '��� ���� ����';
	$lang['Wiz_inputlist_description'] = '��� ��� ���� ����� �� ���� ���� ���� ���� ����� ������.';
	$lang['Wiz_inputlist_explain'] = '<span class="explaintitle">��� ����</span>: ��� �� ����� ���� ���� ����� ����� ������ ������ ���� �� ������ ���. ����� ������ ������ �� ����� �����. ����� ������ �� ����� ����� ��� ��� ���� ���� ����� �� ��� ��� ��� ����� ���� �� ���� ������� �� ��� �� ���� �����.<br><span class="explaintitle">���� / ��� ���� ����</span>: ��� ���� ��� ��� �� ����� �� ��� ������ ���� �� ����� ���� ����� ����.<br><span class="explaintitle">���</span>: �� ���� ������ �� ����. ��� �� ��� ��� ����� �� ���� ���� ��������.<br><span class="explaintitle">��� ����</span>: ������ ��� ����� ������� ��� ���� ��� ����� �� ��� ����. <em>���� ����</em> ���� ���� �� ������� ������� ����� ������ ����� ������. <br><span class="explaintitle">��������</span>: ��� ��� ���� ����� �� ��������� ��� ���.<br><span class="explaintitle">��� ����</span>: ��� ���� �� ��� ����� �� ���� ����. ���� ����� ����� �������� ������ ��� ������ ��� �� �� ����� ����� �������� ��� �� �� �� ������ �� ����.<br><span class="explaintitle">��� ������</span>: ��� ���� �� ��� ����� �� �������� �� ��� ����. �� ���� ������ ����� ����� �� ������� ��� �� ������. ������: <em>(��� ������ ����)</em><br><span class="explaintitle">����� TPL</span>: ���� ��� ��� ��� ��� ��� ��� ������ ��� ��� ���� ��� ������. ��� ������ ���� ����� ������ �-board_config_body.tpl ����� � <em>&lt;!-- BEGIN inputstyle --&gt;</em> �- <em>&lt;!-- END inputstyle --&gt;</em> ��-HTML ������ ����� ���� ��. ���� ��� ������ ���� ���� <em>���</em>.<br><span class="explaintitle">���</span>: ��� ��� ����� ������ ���� ���.<br><span class="explaintitle">���� ����</span>: �� ���� ���� ���� �� ����� ���� ���� ���.<br><span class="explaintitle">����� �����</span>: �� ���� ���� ����� ����� ���� ���. ��� ���� �� ������ �� <em>����� ������</em><br><span class="explaintitle">������ ����</span>: �� ���� ����� ���� ��� ��� ����� �� ���� ���. ��� ���� �� ������ �� <em>����� ������</em><br><span class="explaintitle">����� ���������</span>: ��� ����� ����� ������� get �������� chk ��� ����� ����� ��� ��.<br><span class="explaintitle">����</span>: ���� ���� �����, ��� ���� ��� �������� ������.<br><span class="explaintitle">����� �����</span>: ��� �� ����� ������ �������.<br><span class="explaintitle">������� Get</span>: ��� �� �������� ����� ����. ��� ������� ���� �� ��� ���� <em>mods_get_YOURNAME</em> �� <em>mods_settings_get_YOURNAME</em> ���� ������ ����� ��.<br><span class="explaintitle">������� Check</span>: ��� �� �������� ������ ����. ��� ������� ���� �� ��� ���� <em>mods_check_YOURNAME</em> �� <em>mods_settings_check_YOURNAME</em> ���� ������ ����� ��.<br><span class="explaintitle">�����</span>: ��� ���� ����� ������� �� ��� ������ ��������, �� �� ���� �� ������� ������� �� �� ���� ���.<br><span class="explaintitle">�����</span>: ����� �� ����� �� ����� �� �������� ��� ������ ���� �� �������� ������ �� ��.<br>';
	$lang['Tpl_style'] = '����� TPL';
	$lang['Textmode'] = '���� ����';
	$lang['Dropmode'] = '����� �����';
	$lang['Radiomode'] = '������ ����';
	$lang['Functmode'] = '����� ���������';
	$lang['File_permissions'] = '����� %s ��� �� ������ ������� ������� <strong>(666)</strong>.';
	$lang['Wiz_validate'] = '��� ���� ��� ����� �������';
	$lang['Wiz_validate_description'] = '������ ���� �� ���� ��� ����� ������� ������� ������ ��� �� ������.';
	$lang['Missing_param'] = '����';
	$lang['Move2map'] = '���� 2 ����';
	$lang['Move2field'] = '���� 2 ����';
	$lang['Maptitle_missing'] = '��� ���� ����� ����.';
	$lang['Wiz_fields'] = '��� ����';
	$lang['Wiz_fields_description'] = '��� ��� ���� ����� �� ���� ���� �������� ������ ���� ����� ����� �������.';
	$lang['Wiz_fields_explain'] = '<span class="explaintitle">��� ���</span>: ��� �� ���� ���� ���� ����� ����� ������ ������ ���� �� ������ ���. ����� ����� ������ �� ���� �����. ����� ������ �� ����� ����� ��� ��� ���� ���� ����� �� ��� ��� ��� ����� ���� �� ������ �������� �� ��� �� ���� �����.<br><span class="explaintitle">���� ����</span>: ��� ��� ��� ��� �� ����� �� ��� ����� ����� ���� ����� ��� ������.<br><span class="explaintitle">��� ��� ���</span>: �� ����� ����� �������� ��� ������ ���� ����� ������� ������ ����� ������ ������. ��� �� ���� ���� ���� ������ ���� �� ������ ���.<br><span class="explaintitle">���� ����</span>: ���� �� ���� ���� ����� ������ ����� ����.<br><span class="explaintitle">��� ����</span>: ������ �� ���� ��� ���� ����. ���� ������ ��� <em>��</em> �� <em>����� ����</em> ������� ��� ����� ������, ����� ����� ����� ����� �� ��� ����. ��� <em>��� ����</em> ��� ����� ���� �� ����. ����: ��� <em>��� ���� �� ����� ����� ��������� ���</em> ���� �� ����� ����� ���������.<br><span class="explaintitle">���</span>: ��� ��� ����� ���� ���� ���. ��� ��� ������� ���� ���� ��� �����. ���� ������ ������, ��� ���� �� ���� ������ ����� �������. ��� ���� �������� �� ���� ������ �����.<br><span class="explaintitle">��� ����</span>: ������ ��� ����� ������� ��� ���� ��� ����� �� ��� ����. <em>���� ����</em> ���� ���� �� ������� ������� ����� ������ ����� ������.<br><span class="explaintitle">���� ����</span>: ������ ����� ���. ��� ���� ������ ���� ���� ���� ����� ���� ��� ��� �������� ��� ���� ��� ��� ������ ������.<br><span class="explaintitle">�����</span>: ���� �� ���� ������ ������ <em>fisubice.cfg</em>. ���� ����� <em>�����</em> ������� � <em>��� ���� ����</em> ���� ��, ����� �� ���� �� <em>����� ����� ����</em> ���� � <em>������� �����</em>.<br><span class="explaintitle">����� ������</span>: ����� ����� ����� ����� ��� ������.<br><span class="explaintitle">�����</span>: ����� �� ����� �� ����� �� �������� ��� ������ ���� �� �������� ������ �� ��.<br>';
	$lang['Select_field'] = '��� ���:';
	$lang['Field_selected'] = '���� �� ���� <strong>%s</strong>';
	$lang['Select_new_field'] = '��� ��� ���:';
	$lang['Newfield_selected'] = '���� �� ���� ���� <strong>%s</strong>';
	$lang['Required_Error'] = '����� �������� �� %s ������. ��� ���� ����� �� �����.';
	$lang['Wiz_autocorrect'] = '<a href="%s">��� ��� ��� ���� �������� �� ���� ��� ����� ������� ���.</a><br>���� ����� ����� ������� /profilcp/def/ �� ������ ������ ��� ������� ���.';
	$lang['Not_in_fields'] = '���� %s �� ����� �-def_userfields...';
	$lang['Wiz_fieldimport'] = '��� ����';
	$lang['Wiz_fieldimport_description'] = '��� ��� ���� ���� �� ������ ���� ������� ��� ���� �� ������.';
	$lang['Wiz_import_explain'] = '������ ��� ����� ����� �� ���� ��� ����� ������� ���� ����� ����� �����.<br>���� �� ����� �� ����� ���, �� ��� ���� ����� �� ���� ���� ��� ���� �� ������ ������� ����. �� ��� �� �� ������ ����� ���� ���� ����� ���� �� ����� �����.<br>�� ����� ��� ����� �� �������� <strong>validate</strong> ���� ����� ���� ��� ����� ������� ��� ��� ���� ����� ������� ������ ��������.<br>����� ������ �� ����� ������� � <strong>����� ����� �����/����� �������/����� �����</strong>, ��� ���� ����� � <strong>����� ����� ����� �����</strong> ������ �� ���� ���� (�� ���� ����� ���).<br> <strong>���� �����</strong> ����� ������� /profilcp/def/ �� ������ ������ ��� ������� ���. ��� ����� ����, ��� ���� ���� ����� ����� ������ ��.';
	$lang['Type'] = '���';
	$lang['Definition'] = '�����';
	$lang['Type_lists_title'] = '����� ������';
	$lang['Type_lists_explain'] = '��� ���� ����� ���� ��� ���� ���� �� ����� <strong>values_list</strong> ��� ����� ������ ��� values_list, ����� <strong>new_lists</strong>. <strong>$ �� ������</strong> ����� ���� ���� ����. ���� ��� ���� ����� ���� �����, ���� ����� ������ �� ������ ������ ������. �����:<pre>
new_lists = array(
		\'list_im_versions\' => array(
				\'values\' => array(
					0 => array(\'txt\' => \'1.2.x\', \'img\' => \'\'),
					1 => array(\'txt\' => \'1.3.1\', \'img\' => \'\'),
					2 => array(\'txt\' => \'1.3.2\', \'img\' => \'\'),
					3 => array(\'txt\' => \'1.3.2c\', \'img\' => \'\'),
					4 => array(\'txt\' => \'1.3.2d\', \'img\' => \'\'),
					5 => array(\'txt\' => \'1.3.2e\', \'img\' => \'\'),
					6 => array(\'txt\' => \'1.4.0\', \'img\' => \'\'),
				),
			),
		);</pre>';
	$lang['Type_classes_title'] = '������<BR /> � <em>��� ����</em>';
	$lang['Type_classes_explain'] = '��� ���� ����� �� ���� ��� ���� ���� �� ����� <strong>classes_fields</strong> ��� ����� ������ ��� classes_fields, ����� <strong>new_classes</strong>. <strong>$ �� ������</strong> ����� ���� ���� ���� ��������. ���� ��� ���� ����� ���� �����, ���� ����� ������ �� ������ ������ ������. �����:
<pre>
new_classes = array(
		\'imversion\' => array(
				\'config_field\'	=> \'user_viewimversion\',
				\'admin_field\'	=> \'\',
				\'user_field\'	=> \'user_viewimversion\',
				\'sql_def\'		=> \'
				[USERS].user_id = [view.user_id] OR ( ( [BUDDY_MY].buddy_ignore <> 1 OR
			 	[BUDDY_MY].buddy_ignore IS NULL ) AND ( [board.user_viewimversion] <> 0 OR 
			 	[board.user_viewimversion_over] <> 1 ) AND ( [BUDDY_OF].buddy_visible = 1 OR ( 
			 	[USERS].user_viewimversion = 1 OR ([board.user_viewimversion] = 1 AND 
			 	[board.user_viewimversion_over] = 1) ) OR ( [BUDDY_OF].buddy_ignore = 0 AND ( 
			 	[USERS].user_viewimversion = 2 OR ([board.user_viewimversion] = 2 AND 
			 	[board.user_viewimversion_over] = 1) ) ) ) )\',
			),
		);
</pre>';
	$lang['Type_fields_title'] = '����';
	$lang['Type_fields_explain'] = '��� ���� ����� �� ���� ��� ���� ���� �� ����� <strong>user_fields</strong> ��� ����� ������ ��� user_fields, ����� <strong>new_fields</strong>. <strong>$ �� ������</strong> ����� ���� ���� ���� ��������. ���� ��� ���� ����� ���� �����, ���� ����� ������ �� ������ ������ ������. �����:
<pre>
new_fields = array(
		\'user_viewimversion\' => array(
				\'lang_key\'     => \'Public_view_imversion\',
				\'class\'        => \'generic\',
				\'type\'         => \'TINYINT\',
				\'get_mode\'     => \'LIST_RADIO\',
				\'values\'       => \'list_yes_no_friend\',				
		),
		\'user_imversion\' => array(
				\'lang_key\'     => \'Im_version\',
				\'class\'        => \'imversion\',
				\'type\'         => \'VARCHAR\',
				\'dsp_func\'     => \'pcp_output_imversion\',
		),
);
</pre>';
	$lang['Type_deletes_title'] = '��� ������, ������ �����';
	$lang['Type_deletes_explain'] = '��� ���� ����� ���� ���� <strong>deletes</strong> ����� ������. <strong>$ �� ������</strong> ���� ���� ���� ����. �����:
<pre>
deletes = array(
	\'lists\' => array(
		\'list_im_versions\',
	),
	\'classes\' => array(
		\'imversion\',
	),
	\'fields\' => array(
		\'user_viewimversion\',
		\'user_imversion\', 
	),
);
</pre>';
	$lang['Wiz_pageimport'] = '��� ������';
	$lang['Wiz_pageimport_description'] = '��� ��� ���� ���� ������ ���� ������� ����� ���� �����.';
	$lang['Type_newpages_title'] = '���� ������ / ������ �����';
	$lang['Type_newpages_explain'] = '��� ���� ����� �� ���� ��� ���� ���� �� ����� <strong>user_maps</strong> ��� ����� ������ ��� user_maps, ����� <strong>new_pages</strong>. <strong>$ �� ������</strong> ���� ���� ���� ����. ���� ��� ���� ���� ���� ����, ���� ���� ������ �� ������� ������ ������. �����:
<pre>
new_pages = array(	
	\'DEMO\' => array(
		\'title\'		=> \'Demo\',
	),
	\'DEMO.info\' => array(
		\'title\'		=> \'Demo_Info\',
		\'fields\'	=> array(
			\'user_photo\' => array(
				\'txt\'          => true,
				\'img\'          => true,
				\'crlf\'         => true,
				\'style\'        => \'<div class="gensmall">%s</div>\',
			),
		),
	),
);
</pre>
';
	$lang['Type_delpages_title'] = '��� ������';
	$lang['Type_delpages_explain'] = '��� ���� ����� ���� ������ ������, ����� <strong>del_pages</strong> ��� �����. <strong>$ �� ������</strong> ���� ���� ���� ����. �����:
<pre>
del_pages = array(	
	\'DEMO\',
);
</pre>';
	$lang['Type_newpagefields_title'] = '���� ������ ����� / ���� ���� ����';
	$lang['Type_newpagefields_explain'] = '��� ���� ����� �� ���� ��� ����� �� ����� <strong>user_maps</strong> ��� ����� ������ ��� user_maps, ����� <strong>new_pagefields</strong> ���� ���� ������ ���� ��� ����� <strong>position</strong> ��� ����. ��� <strong>�����, ���� �� �� ���</strong> ���� �����. �-position ����� ���� ����� ������ ����� ���� �����. <strong>$ �� ������</strong> ���� ���� ���� ����. ���� ����� ��� ���� ����, ���� ������ �� ������� ������ ������. �����:
<pre>
new_pagefields = array(	
	\'DEMO.info\'  => array(
		\'position\' => \'user_photo\', // choose begin, end or a fieldname
		\'fields\'	 => array(
			\'user_avatar\' => array(
				\'img\'          => true,
			),
			\'user_warning\' => array(
				\'img\'          => true,
			),
		),
	),
);</pre>';
	$lang['Type_delpagefields_title'] = '��� ���� ����';
	$lang['Type_delpagefields_explain'] = '��� ���� ����� �� ���� ��� ����� �� ����� <strong>user_maps</strong> ��� ����� ������ ��� user_maps, ����� <strong>del_pagefields</strong>. <strong>$ �� ������</strong> ���� ���� ���� ����. �����:
<pre>
del_pagefields = array(	
	\'DEMO.info\'  => array(
		\'fields\'	 => array(
			\'user_avatar\' => array(
			),
		),
	),
);</pre>';
	$lang['Wiz_import_error'] = '����� ������ ����� �� <strong>%s</strong>';
	$lang['Wiz_backups'] = '�������';
	$lang['Wiz_backups_description'] = '��� ��� ���� ����� �� ���� ��� ����� ������� ������ �� ����� �����.';
	$lang['Wiz_backups_explain'] = '<span class="explaintitle">���</span>: ���� �� ������ ��� ����� �� ������.<br><span class="explaintitle">�����</span>: �� ����� �� �����.<br><span class="explaintitle">����</span>: ����� �� ����� ����� ���� ����� ����� �������.<br><span class="explaintitle">���</span>: ���� �� ������ �����.<br><span class="explaintitle">���</span>: ���� �� ������ �����.<br><span class="explaintitle">��� �����!</span>: ���� ����� �� �� /profilcp/def/def_userfields.php ��� �� /profilcp/def/def_usermaps.php.<br>';
	$lang['Restore'] = '����';
	$lang['File_deleted'] = '����� ���� ������: %s';
	$lang['File_restored'] = '����� ����� ������: %s';
	$lang['backupnow'] = '��� �����!';
	$lang['Backups_created'] = '����� ������ ����';
}

?>