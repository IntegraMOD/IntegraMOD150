<?php
/***************************************************************************
 *						lang_extend_pcp_management.php [Hebrew]
 *						---------------------------------------
 *	begin				: 08/10/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 0.0.4 - 24/10/2003
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
	$lang['Lang_extend_pcp_management'] = '����� ��� ����� �������';

	// menu
	$lang['PCP_management'] = '��� ���� �������';
	$lang['PCP_00_tableslinked'] = '������ ������';
	$lang['PCP_01_valueslist'] = '������ �����';
	$lang['PCP_02_classesfields'] = '������';
	$lang['PCP_03_userfields'] = '����� ����';
	$lang['PCP_04_usermaps'] = '����� ����';

	// objects
	$lang['PCP_tableslinked'] = '������ ������';
	$lang['PCP_tableslinked_explain'] = '������� ������� ��-��� ��� ����� ������� ������ ����� ������� �����/����� �����.';

	$lang['PCP_valueslist'] = '������ �����';
	$lang['PCP_valueslist_explain'] = '����� ����� �������� ��-��� ��� ����� �������.';

	$lang['PCP_classesfields'] = '������';
	$lang['PCP_classesfields_explain'] = '��� ���� ����� �� ����� �� ���� �������.';

	$lang['PCP_userfields'] = '����� ����';
	$lang['PCP_userfields_explain'] = '��� ���� ���� �� ����� �������� ��-��� ��� ����� �������.';

	$lang['PCP_usermaps'] = '����� ����';
	$lang['PCP_usermaps_explain'] = '��� ���� ���� �� ���� ����� �������� ������� ������.';

	// fields
	$lang['PCP_field_name'] = '�� ����';
	$lang['PCP_field_name_explain'] = '��� ��� �� �� ���� ������ ������� �-php.';
	$lang['PCP_field_name_short'] = '���';
	$lang['PCP_field_desc'] = '�����';
	$lang['PCP_field_image'] = '�����';
	$lang['PCP_field_class'] = '�����';
	$lang['PCP_field_type'] = '���';
	$lang['PCP_field_get_mode'] = '��� ���';
	$lang['PCP_field_functions'] = '��������';
	$lang['PCP_field_maps_usage'] = '����� �����';

	$lang['PCP_field_sql_actions'] = '������ SQL';
	$lang['PCP_field_add'] = '���� ��� ���';

	// fields edit
	$lang['PCP_userfields_edit'] = '����� ����';
	$lang['PCP_userfields_edit_explain'] = '��� ���� ����� �� ����� ���.';

	$lang['PCP_field_definition_part'] = '����� ����';
	$lang['PCP_field_output_part'] = '���';
	$lang['PCP_field_input_part'] = '�����';
	$lang['PCP_field_buddylist_part'] = '����� �����/����� �����';

	$lang['PCP_field_lang_key'] = '���� ����';
	$lang['PCP_field_lang_key_explain'] = '��� ����� ����� ������ ����� ����. ��� ���� ������ ����� �� ����� ������ $lang[] (��� <i>your_language</i>/lang_main.php).';
	$lang['PCP_field_lang_key_short'] = '����';
	$lang['PCP_field_explain'] = '���� ����';
	$lang['PCP_field_explain_explain'] = '��� ���� ���� ����� ������ �����. ��� ���� ������ ����� �� ����� ������ $lang[] (��� <i>your_language</i>/lang_main.php).';
	$lang['PCP_field_image_explain'] = '��� ���� ����� ��� ����� ����� �� ���� ����� $image[] (��� <i>your_template</i>/<i>your_template</i>.cfg).';
	$lang['PCP_field_title'] = '����� ������';
	$lang['PCP_field_title_explain'] = '����� ����� ����� ��� ����� �����. ��� ���� ������ ����� �� ����� ������ $lang[] (��� <i>your_language</i>/lang_main.php).';
	$lang['PCP_field_class_explain'] = '��� �� ���� ���� ����� �� ���� ����. ����� ����� ���� ��� ����.';
	$lang['PCP_field_type_explain'] = '��� ��� �� ��� ����.';

	$lang['PCP_field_sql_def'] = '����� SQL';
	$lang['PCP_field_sql_def_explain'] = '����� SQL �� ���� ���� ������ ������ ������/����� ������ ������.';

	$lang['PCP_field_get_mode_explain'] = '��� ��� �� ���� ��� ���� �����. �� ��� ����� ��������� ������� ��� ���� �����, ���� ���� ��� �����.';
	$lang['PCP_field_values_list'] = '����� �����';
	$lang['PCP_field_values_list_explain'] = '��� ��� �� ���� �� ����� ������. ����� ������ ����� ���� ������ ����� ��� LIST_*.';
	$lang['PCP_field_default'] = '��� ����� ����';
	$lang['PCP_field_default_explain'] = '��� ���� ����.';
	$lang['PCP_field_auth'] = '��� ����';
	$lang['PCP_field_auth_explain'] = '��� ��� �� ��� ����� ��������� ������ ��� ���� ���� ��.';
	$lang['PCP_field_get_func'] = '��� �������';
	$lang['PCP_field_get_func_explain'] = '��� ��� �� �� �������� ������� ������ ��� ������ �� ���� �� ����.';
	$lang['PCP_field_chk_func'] = '���� �������';
	$lang['PCP_field_chk_func_explain'] = '��� ��� �� �� �������� ������� ������ ��� ����� �� ����� �� ���� ���� ������.';
	$lang['PCP_field_dsp_func'] = '��� �������';
	$lang['PCP_field_dsp_func_explain'] = '��� ��� �� �� �������� ������� ������ ����� ���� �� ����.';
	$lang['PCP_field_link'] = '�����';
	$lang['PCP_field_link_explain'] = '�� ����� ����� ����� ����� �������. ��� ���� ������ �-[cst.*], [view.*] �-[user.*] ��� ���� �� �������� �� ������� ������. ���� :<br />&lt;a href="./profile.[php]?mode=viewprofile&[cst.POST_USERS_URL]=[view.user_id]" class="gen"&gt;%s&lt;/a&gt;';

	$lang['PCP_field_leg'] = '��� �� �����';
	$lang['PCP_field_leg_explain'] = '��� ��� ��� ��� ����� �� ���� ����.';
	$lang['PCP_field_leg_short'] = '����';
	$lang['PCP_field_txt'] = '��� �� ��� �����';
	$lang['PCP_field_txt_explain'] = '��� ��� ��� ��� ����� �� ��� ����� �� ����.';
	$lang['PCP_field_txt_short'] = '����';
	$lang['PCP_field_img'] = '��� �� ��� ������';
	$lang['PCP_field_img_explain'] = '��� ��� ��� ��� ����� �� ��� ������ �� ����.';
	$lang['PCP_field_img_short'] = '�����';
	$lang['PCP_field_use_link'] = '����� ������';
	$lang['PCP_field_use_link_explain'] = '��� ��� ��� ��� ������ �� ������ ���� ����� �/�� ������.';
	$lang['PCP_field_use_link_short'] = '�����';
	$lang['PCP_field_crlf'] = '���� ��� ����';
	$lang['PCP_field_crlf_explain'] = '��� ��� ��� ��� ����� �� ����� ���� ������.';
	$lang['PCP_field_style'] = '��� Span';
	$lang['PCP_field_style_explain'] = '����� HTML ����� ��� ����� ��� ������ ����� ����� �� ������. <i>sprintf(�����, �����)</i> �����, �� ��� ���� ������ � %s ��� ���� �� ����� ������ �����.<br />������: &lt;i&gt;%s&lt/i&gt; ���� �� ������ ��������.';
	$lang['PCP_field_input_id'] = '�� ��� �������';
	$lang['PCP_field_input_id_explain'] = '�� ���� �� ���� ���� ����� ���, ��� ����� ��� ��� ������ ����� �������.';
	$lang['PCP_field_user_only'] = '�� ���� ������';
	$lang['PCP_field_user_only_explain'] = '����� �� ��� ���� ��� ������� ������ �/�� �������. ��� ���� ������ ��� ��� ���� �� ��� ���� �������� �� ��� �����.';
	$lang['PCP_field_system'] = '��� �����';
	$lang['PCP_field_system_explain'] = '����� �� ���� ����� ��� �� ����� ���� ������, ����� �� �� �� ��� ������ ��� ��� ���� �������. �� ����� ���� ������ ��������. ����� ��� �������� �� �������, �� ���� ������� �����, ��� ���� ������� �����.';
	$lang['PCP_field_ind'] = '����� ������';
	$lang['PCP_field_ind_explain'] = '������� �����/����� ����� : ���� ����� ���� ���� �������� ������.';
	$lang['PCP_field_dft'] = '���� ��-��� ����� ����';
	$lang['PCP_field_dft_explain'] = '������� �����/����� ����� : ����� ������ ���� ���� ������ ������/������ �����.';
	$lang['PCP_field_rqd'] = '���� �� ������';
	$lang['PCP_field_rqd_explain'] = '������� �����/����� ����� : �� ����� �� ������ �� ���� ������ �����/����� �����.';
	$lang['PCP_field_hidden'] = '���� �� ���� ������';
	$lang['PCP_field_hidden_explain'] = '������� �����/����� ����� : �� ���� ������ ������ ���� ������ sql ��� ����� ������ �����/����� �����.';

	$lang['PCP_system_values'] = '���� ����� ������';

	$lang['PCP_userfields_field_pick_up'] = '���� ���';
	$lang['PCP_userfields_lang_key_pick_up'] = '���� ���� ���';

	// fields delete
	$lang['PCP_userfields_delete'] = '��� ���';

	// SQL actions
	$lang['PCP_SQL_create_field'] = '��� %s���%s ��� ����� ��� ����� ��������.<br /><br />';
	$lang['PCP_SQL_modify_field'] = '��� %s���%s ��� ����� ��� ����� ��������.<br /><br />';
	$lang['PCP_SQL_delete_field'] = '��� �� ���� ����� �������� ?';

	$lang['PCP_SQL_create_field_title'] = '��� ��� ����� ��������';
	$lang['PCP_SQL_edit_field_title'] = '��� ��� ����� ��������';
	
	$lang['PCP_SQL_field_name'] = '�� ����';
	$lang['PCP_SQL_field_name_explain'] = '�� ������ �� �����.';
	$lang['PCP_SQL_field_type'] = '���';
	$lang['PCP_SQL_field_type_explain'] = '��� ������ �� �����';
	$lang['PCP_SQL_field_length'] = '����';
	$lang['PCP_SQL_field_length_explain'] = '���� ������ �� �����.';
	$lang['PCP_SQL_field_unsigned'] = '�� ����';
	$lang['PCP_SQL_field_unsigned_explain'] = '���� ����� ����.';
	$lang['PCP_SQL_null'] = '��� ������';
	$lang['PCP_SQL_default'] = '��� ����� ����';
	$lang['PCP_SQL_null_value'] = '���';

	// tables linked
	$lang['PCP_tableslinked_name_short'] = '����';
	$lang['PCP_tableslinked_name'] = '�� ����� ������';
	$lang['PCP_tableslinked_name_explain'] = '�� �� ���� �� ����� ����� ������� SQL ����� �� ���� ��� ����� �������, ������ ��-��� [].<br />(����: ���� �������� ����� ��-��� [USERS])';
	$lang['PCP_tableslinked_id_short'] = 'Id';
	$lang['PCP_tableslinked_id'] = 'id �� �-SQL';
	$lang['PCP_tableslinked_id_explain'] = '���� SQL, ����� ��-��� ������ SQL.<br />(���� : "u" ����� ���� ��� �-id �� �-SQL ����� ��������)';
	$lang['PCP_tableslinked_join'] = 'SQL join';
	$lang['PCP_tableslinked_join_explain'] = '����� FROM ������ ������� SQL.<hr />&nbsp;����� [cst.<i>���� ����</i>] ��� ������ �� �� ����� �������.<br />(���� : [cst.USERS_TABLE] �-phpbb_users).<hr />&nbsp;Use [<i>�� ������ ������</i>] ��� ���� �� �-id �� �-SQL.<br />(����: [USERS].username)<hr />������: [cst.USERS_TABLE] AS [USERS]';
	$lang['PCP_tableslinked_where'] = 'SQL where';
	$lang['PCP_tableslinked_where_explain'] = '����� WHERE ������ ������� SQL.<br />����� [<i>�� ������ ������</i>] ��� ����� �� �-id �� �-SQL.<br />(����: [USERS].username <> \'\')';
	$lang['PCP_tableslinked_order'] = 'SQL order by';
	$lang['PCP_tableslinked_order_explain'] = '����� ORDER BY ������ ������� SQL.<br />����� [<i>�� ������ ������</i>] ��� ����� �� �-id �� �-SQL.<br />(����: [USERS].username)';
	$lang['PCP_tableslinked_sql_desc'] = '������ SQL';

	$lang['PCP_tableslinked_add'] = '���� ���� ������ ����';

	// tables linked edit
	$lang['PCP_tableslinked_linked_edit'] = '���� ���� ������';
	$lang['PCP_tableslinked_linked_edit_explain'] = '��� ��� ���� ����� �� ����� ���� ������.';

	// values list
	$lang['PCP_valueslist_name'] = '��';
	$lang['PCP_valueslist_name_explain'] = '�� �� ���� �� ����� ������ ������� SQL ������ �� ���� ��� ����� �������, ������ ��-��� [].';
	$lang['PCP_valueslist_func'] = '�������';
	$lang['PCP_valueslist_func_explain'] = '��� ��� �� �� �������� ������� ������� ������ ����� ������.';
	$lang['PCP_valueslist_table'] = '����';
	$lang['PCP_valueslist_table_explain'] = '�� ����� ������ ������ ������ ����� ������ ���� ��.';
	$lang['PCP_valueslist_values'] = '�����';

	$lang['PCP_valueslist_item_val'] = '���';
	$lang['PCP_valueslist_item_txt'] = '����';
	$lang['PCP_valueslist_item_img'] = '�����';

	$lang['PCP_valueslist_add'] = '���� ����� ����� ����';

	// values list edit
	$lang['PCP_valueslist_edit'] = '���� ����� �����';
	$lang['PCP_valueslist_edit_explain'] = '��� ��� ���� ����� �� ����� �� ����� ������.';
	$lang['PCP_valueslist_keyfield'] = '���� ���';
	$lang['PCP_valueslist_keyfield_explain'] = '��� �� ���� �� ���� �� �� �����.';
	$lang['PCP_valueslist_txtfield'] = '���� ����';
	$lang['PCP_valueslist_txtfield_explain'] = '��� �� ���� �� ����� �����.';
	$lang['PCP_valueslist_imgfield'] = '����� ����';
	$lang['PCP_valueslist_imgfield_explain'] = '��� �� ���� �� ������ �����.';

	$lang['PCP_valueslist_add_item'] = '���� ��� ���';
	$lang['PCP_valueslist_del_item'] = '��� �����';

	// classes fields
	$lang['PCP_classesfields_name'] = '�� ������';
	$lang['PCP_classesfields_name_explain'] = '�� �� ���� �� ������� �� ����.';
	$lang['PCP_classesfields_config'] = '��� ������';
	$lang['PCP_classesfields_config_explain'] = '��� ��� �� ���� ������ ��-��� ������� ������� �� ������ ��� ����� �� �� �� ������ �� ����� �� ����� �� ��� ��������.';
	$lang['PCP_classesfields_admin'] = '��� ���� ����';
	$lang['PCP_classesfields_admin_explain'] = '��� ��� �� ���� ������ ��-��� ������ ������� ������� ��� ����� �� �� �� ������ �� ����� �� ����� �� ������ ������.';
	$lang['PCP_classesfields_user'] = '��� �����';
	$lang['PCP_classesfields_user_explain'] = '��� ��� �� ��� ������ ������ ������ ����� ����� �� �� �� ����� ��.';
	$lang['PCP_classesfields_sql_def'] = '����� SQL';
	$lang['PCP_classesfields_sql_def_explain'] = '���� ����� �-sql ������ �� ������� ������ ������/����� �����.';

	$lang['PCP_classesfields_add'] = '���� ����� ���';

	// classes fields edit
	$lang['PCP_classesfields_edit'] = '���� �����';
	$lang['PCP_classesfields_edit_explain'] = '��� ��� ���� ����� �� ����� ����� ���.';

	// usermaps
	$lang['PCP_usermaps_root'] = '����';

	$lang['PCP_usermaps_name'] = '�� ���';
	$lang['PCP_usermaps_name_explain'] = '�� �� ���� �� ���� �������.';
	$lang['PCP_usermaps_split'] = '����� ����';
	$lang['PCP_usermaps_split_explain'] = '��� �� ������ ������ ����.';
	$lang['PCP_usermaps_sub'] = '��-����';
	$lang['PCP_usermaps_add'] = '���� ��� ����';
	$lang['PCP_usermaps_custom'] = '������ ������';
	$lang['PCP_usermaps_custom_explain'] = '��� ��� �� ��� ���� ������ ������� ���� ����� ����� ��� ��.';
	$lang['PCP_custom_none'] = '������ �����';
	$lang['PCP_custom_input'] = '������ ����� �����';
	$lang['PCP_custom_output'] = '������ ��� �����';

	$lang['PCP_usermaps_fields'] = '����';

	// usermaps edit
	$lang['PCP_usermaps_edit'] = '���� ���';
	$lang['PCP_usermaps_edit_explain'] = '��� ��� ���� ����� �� ����� ���.';
	$lang['PCP_usermaps_title'] = '����� ����';
	$lang['PCP_usermaps_title_explain'] = '����� ���� ����� ���� �����. ��� ���� ����� ��� �����, �� ����� �� ��� ��� ����� �� ������ ����.';
	$lang['PCP_usermaps_parent'] = '��� ��';
	$lang['PCP_usermaps_parent_explain'] = '��� ��� ����� ��� ��� �� �����.';

	$lang['PCP_usermaps_add_titlefield'] = '���� ��� ����� ���';
	$lang['PCP_usermaps_add_field'] = '���� ��� ���';

	// usermaps field edit
	$lang['PCP_usermaps_title_edit'] = '���� ��� �����';
	$lang['PCP_usermaps_title_edit_explain'] = '��� ��� ���� ����� �� ����� �� ���� ������ ������ ����.';
	$lang['PCP_usermaps_field_edit'] = '���� ���';
	$lang['PCP_usermaps_field_edit_explain'] = '��� ��� ���� ����� �� ����� �� ���� ������ ����.';

	// error msgs
	$lang['PCP_err_field_already_exists'] = '��� �� ��� ����.';
	$lang['PCP_err_field_name_not_valid'] = '�� ���� ��� �� ��� ����.';
	$lang['PCP_err_field_lang_key_missing'] = '���� ���� ����.';
	$lang['PCP_err_field_class_unknown'] = '����� �� �����.';
	$lang['PCP_err_field_type_unknown'] = '��� �� ����.';
	$lang['PCP_err_field_get_mode_unknown'] = '���� ��� �� ����.';
	$lang['PCP_err_field_values_list_unknown'] = '����� ����� �� �����.';
	$lang['PCP_err_field_auth_unknown'] = '��� ���� �� �����.';

	$lang['PCP_err_field_values_list_missing'] = '����� ������ ����� �� ��� ����� ����� ��� LIST_*.';
	$lang['PCP_err_field_values_list_presents'] = '��� �� ���� ������ ������ ������ �� ��� �� ����� ����� ��� LIST_*.';
	$lang['PCP_err_field_get_mode_presents'] = '��� �� ���� ����� ���� ��� ���� ����� ����� ������ ��������.';
	$lang['PCP_err_field_dsp_func_not_valid'] = '��������� ������ ��� �� ����.';
	$lang['PCP_err_field_dsp_func_unknown'] = '�������� ������ ���� �����.';
	$lang['PCP_err_field_get_func_not_valid'] = '��������� ����� ��� �� ����.';
	$lang['PCP_err_field_chk_func_not_valid'] = '��������� ������ ��� �� ����.';
	$lang['PCP_err_field_get_chk_func_missing'] = '��� ���� ���� �� �� �������� ������ ��� �� �������� �����.';

	$lang['PCP_err_sql_delete_not_allow'] = '��� �� ���� ����� ��� �� ����� ��������.';
	$lang['PCP_err_sql_edit_not_allow'] = '��� �� ���� ����� �� ����� ��� � ����� ��������.';
	$lang['PCP_err_sql_decimal_not_allow'] = '��� �� ���� ����� �������� ��� ����� ���� ������.';
	$lang['PCP_err_sql_decimal_too_high'] = '����� ������� �� ���� ����� ���� �� ���� ����� ����.';
	$lang['PCP_err_sql_length_missing'] = '���� ���� ����.';
	$lang['PCP_err_sql_unsigned_not_allow'] = '�� ���� ������ �� �� ����� �������.';
	$lang['PCP_err_sql_default_null_not_allow'] = '��� ����� ����� �� ���� ����� ��� �� ���� �� ���� ����� �����.';
	$lang['PCP_err_sql_failed'] = '����� SQL �� ����� :';

	$lang['PCP_err_tableslinked_already_exists'] = '�� ����� ������ ��� ����.';
	$lang['PCP_err_tableslinked_name_not_valid'] = '�� ����� ������ �� ��� ����.';
	$lang['PCP_err_tableslinked_sql_id_not_valid'] = '�-id �� ����� ������ �� ��� ����.';
	$lang['PCP_err_tableslinked_sql_join_missing'] = '����� ������� ������ ����.';

	$lang['PCP_err_valueslist_already_exists'] = '�� ����� ������ ��� ����.';
	$lang['PCP_err_valueslist_name_not_valid'] = '�� ����� ������ �� ��� ����.';
	$lang['PCP_err_valueslist_func_not_valid'] = '�� �������� ����� ������ �� ��� ����.';
	$lang['PCP_err_valueslist_no_data'] = '��� ��� ������ ������.';

	$lang['PCP_err_classesfields_already_exists'] = '�� ������� ��� ����.';
	$lang['PCP_err_classesfields_name_not_valid'] = '�� ������� �� ��� ����.';
	$lang['PCP_err_classesfields_config_field_not_valid'] = '��� ������� �� ��� ����.';
	$lang['PCP_err_classesfields_admin_not_valid'] = '��� ����� ����� �� ��� ����.';
	$lang['PCP_err_classesfields_user_not_valid'] = '��� ������ �� ��� ����.';

	$lang['PCP_err_usermaps_already_exists'] = '���� ��� �����.';
	$lang['PCP_err_usermaps_name_not_valid'] = '�� ���� �� ��� ����.';
	$lang['PCP_err_usermaps_not_empty'] = '���� ��� ���� ������ ������� ���� ���� ���� �����. ��� ��� ���� ����� ��� ���� ���.';
	$lang['PCP_err_usermaps_field_already_in_map'] = '��� �� ��� ���� ����.';

	// global message, return path
	$lang['PCP_field_created'] = '����� ���� �����.<br /><br />%s��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_field_modified'] = '����� ���� �����.<br /><br />%s��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_field_delete'] = '��� ���� ���� ���� ����� �� ������ <b>%s</b> ?';
	$lang['PCP_field_deleted'] = '����� ���� �����.<br /><br />��� %s���%s ��� ����� ������ �����.';

	$lang['PCP_sql_field_created'] = '���� ���� ������ ����� ��������.<br /><br />��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_sql_field_modified'] = '���� ����� ������ ����� ��������.<br /><br />��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_sql_field_deleted'] = '���� ���� ������ ����� ��������.<br /><br />��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_sql_field_deleted_short'] = '���� ���� ������ ����� ��������.';

	$lang['PCP_tableslinked_created'] = '����� ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������� ������.';
	$lang['PCP_tableslinked_modified'] = '������ ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������� ������.';
	$lang['PCP_tableslinked_deleted'] = '����� ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������� ������.';

	$lang['PCP_valueslist_created'] = '����� ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������.';
	$lang['PCP_valueslist_modified'] = '����� ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������.';
	$lang['PCP_valueslist_deleted'] = '����� ����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ ������.';

	$lang['PCP_classesfields_created'] = '����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ �������.';
	$lang['PCP_classesfields_modified'] = '����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ �������.';
	$lang['PCP_classesfields_deleted'] = '����� ������ �����.<br /><br />��� %s���%s ��� ����� ������ �������.';

	$lang['PCP_usermaps_created'] = '����� ���� �����.<br /><br />��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_usermaps_modified'] = '����� ���� �����.<br /><br />��� %s���%s ��� ����� ������ �����.';
	$lang['PCP_usermaps_deleted'] = '����� ���� �����.<br /><br />��� %s���%s ��� ����� ������ �����.';

	// generic
	$lang['PCP_config_values'] = '���� ������';
	$lang['PCP_view_user_values'] = '����� ��� �����';
	$lang['PCP_user_values'] = '����� ���� �����';

	$lang['Refresh'] = '����';
	$lang['Create'] = '���';
	$lang['Suggest'] = '���';
	$lang['More'] = '���...';

	$lang['Auth_GUEST'] = '�� ���';
	$lang['Auth_USER'] = '����� ����';
	$lang['Auth_ADMIN'] = '������ ���� ����';
	$lang['Auth_BOARD_ADMIN'] = '����� ����� �� ������';

	$lang['Up'] = '^';
	$lang['Down'] = 'v';

	$lang['Linefeed'] = '---';

	// PCP Extra :: Added :: Start
	$lang['PCP_field_required'] = '��� ����';
	$lang['PCP_field_required_explain'] = '����� �� ��� ����� ������� ����� �� ���� ����.';
	$lang['Auth_GUEST_ONLY'] = '���� ����';
	$lang['PCP_field_visibility'] = '���� ������';
	$lang['PCP_field_visibility_explain'] = '��� ������, �� ����� �� ������� �������.';
	$lang['PCP_field_inputstyle'] = '���� ����� ����';
	$lang['PCP_field_inputstyle_explain'] = '�-board_config_body.tpl ��� ���� �� �-html �� ����� ��� &lt;!-- BEGIN inputstyle --&gt; �-&lt;!-- END inputstyle --&gt; ���� inputstyle ��� ��� ������ ���. ���� ��� ������ ����� ���� "field".';
	// PCP Extra :: Added :: End
}

?>