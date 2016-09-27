<?php
/***************************************************************************
 *						lang_extend_meta_tags.php [Hebrew]
 *						-----------------------------------------------
 *	begin				: 12/10/2004
 *	copyright		: paperclips
 *	email				: jm.lachance@gmail.com
 *
 *	version				: 1.0.0 - 11/10/2004
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
$lang['Click_return_admin_meta_tags'] = '��� %s���%s ��� ����� ������ ��� �-Meta';
$lang['Lang_extend_meta_tags'] = '��� Meta +';
$lang['Meta_tags_title'] = '��� Meta +';
$lang['Meta_tags_title_explain'] = '���� ��� ������ ��� �-Meta.  ���� ���� ������� �� ��� ����� �� ���� ��� ������ ����� ��� ����� ��� ������ �� ���� ��� ����� ����.<br/ >�� ����, ��� ���� ���� ��.<br/ >���� ��� �� ��������, ���� ���� ������� �������� ������ �������� ������ ����.  ';

$lang['Meta_parameters'] = '����� ���� �� ��� �-meta';
$lang['Meta_parameters_explain'] = ' ����� ������� ��� �-meta, ������ ���� ��� : <<b>meta name="xxx" content="xxx"</b>>';
$lang['Meta_keywords']  = 'META ����� ����';
$lang['Meta_keywords_explain']  = '- �������: ���� ������ ������ �� ����� ����� ������� ���� ���.<br />- ���� ����� �� ����� : 1000 �� 100 ����� ����.<br/ >- ����� ������, �� ����� ����� �� <a href="accent.htm">������ ��������</a> ���� ������� �-HTML. ������ ����  "�", ������ &amp&agrave; ����� HTML ������ �����.<br />- ��� �� ���� ����� ��� ����� �� ���� ����� (����� ������ �� ������ ���).<br />- ����� ����� ������� ��-��� ����, ���� �� ���� �����, �� ��� ������.';
$lang['Meta_description'] = 'META �����';
$lang['Meta_description_explain'] = '- ����� ���� ���.<br />- ���� ����� �� �����: 200<br />- ���� �������, ������� �������� �� �� ���� ���� ������.';
$lang['Meta_author']  = 'META ����';
$lang['Meta_author_explain']  = '- ����� ����� �� ���� ����.<br/ >- ��� �� ��� ������ ������� �����, ���� ��� �� ������ ����� ���� �����.<br/ >- �� ��� ����, ��� ���� ���� ��� ������ �������� ��-��� ����.';
$lang['Meta_identifier_url']  = 'META ���� �����';
$lang['Meta_identifier_url_explain']  = ' - ����� ����� �����.<br />- ���� �� ������ �� ���� ���� ���.<br />- ��� ���� ����� ����� ��� ����.';
$lang['Meta_reply_to']  = 'META ���� ��';
$lang['Meta_reply_to_explain']  = ' - ����� ���� �� ����� ��������� �� ���� ����.<br/ > ��� ���� ����� ��� ����.';
$lang['Meta_revisit_after']  = 'META ��� ���� ����';
$lang['Meta_revisit_after_explain']  = ' - ����� ���� �� ������ (����� �� �����) �� ������� ���� ��� ��� ���� ����� �������. - 15 ����" �� "30 ����" �� ������� ��� �����.';
$lang['Meta_category']  = 'META �������';
$lang['Meta_category_explain']  = ' - ����� ����� �� ������� ���� ���. ������ ��-��� ������ �������� ������� ����� ��-��� �������.';
$lang['Meta_generator']  = 'META ����';
$lang['Meta_generator_explain']  = '  - ���� �������� �� �� ����� ����� �� ��� ������ ������� ��� ����� �� �����.<br/ >- ���� ����� ������ ��-��� ��� ������ ��� ������ ����� ���. <br / >- ���� ���� �-meta �� ����� ����.';
$lang['Meta_copyright']  = 'META ������ ������';
$lang['Meta_copyright_explain']  = '- ���� �������� ����� ������ ������ ���� ����.<br /> - ��� ���� ����� ������ ������, ����� ����, ������, �� ���� ��� ��� ������� ������ ������������� ���.';
$lang['Meta_robots']  = 'META �������';
$lang['Meta_robots_explain']  = '- ����� ������� �� ���� ����� ��� ���� ����.<br/ >- all = ���� ������ ��� �� ���� ��� ����� (������ ����)<br />- none = ���� �� ������ �� ���� ��� �����<br />- index = ����� ��� �������<br />- noindex = ����� ��� �� ������� ��� ���� ����� ��� ������ ����� ���<br />- follow = ���� ���� �� ����� �� ������ ��� ����� ��� ��� ������ ���� ���� ���.<br />- nofollow = ���� �� ������ �� ������ ���� ���';
$lang['Meta_distribution']  = 'META ����';
$lang['Meta_distribution_explain']  = '- ���� ����� ������� �� ���� ���� ���� ���:<br/ >- ������� (�� ����)<br/ >- ����� (����� ����� �-IP ������ �� ���� ���)<br/ >- ����� ����� (�� ����� �������)';
$lang['Meta_date_creation']  = 'META ����� �����-yyyymmdd';
$lang['Meta_date_creation_explain']  = '- ����� ����� ���� ���';
$lang['Meta_date_revision']  = 'META ����� �����-yyyymmdd';
$lang['Meta_date_revision_explain']  = '- ����� ������ ������';
$lang['Meta_day'] = '��� :';
$lang['Meta_month'] = '���� :';
$lang['Meta_year'] = '��� :';

$lang['Meta_http_equiv_parameters'] = '���� �����';
$lang['Meta_http_equiv_parameters_explain'] = ' ������ ����� �� ���� ���� ��� : <<b>meta http-equiv="xxx" CONTENT="xxx"</b>> �� ��� �� ���� ������ ���� �� ���� ����, ���� ������ �����.';
$lang['Meta_refresh']  = 'META ����� 1';
$lang['Meta_refresh_explain']  = '- ����� ����� ������ ���� ������� ���� �������� ���� �� ����. ����� ��� ������ ������ ���� ������ "�����" ���� ������� �����. ���� �� ����� ������.';
$lang['Meta_redirect_url']  = 'META ����� 2';
$lang['Meta_redirect_url_explain']  = '- ����� ����� ������ ���� ������� ����� �������� ������ ������ �������.<br/ > ����� ���� ������ ��� ������ ������ ���� ������ "�����" ���� �������� �����.';
$lang['Meta_redirect_url_time']  = '����� (�����):';
$lang['Meta_redirect_url_adress']  = '�����:';
$lang['Meta_pragma']  = 'META Pragma';
$lang['Meta_pragma_explain']  = '- ���� �� ������ �� ����� ������ ����� �� ������.<br/ >- ��� ������ ��� ��, ���� <i>no-cache</i>, �� ��, ���� ���.';
$lang['Meta_language']  = 'META ���';
$lang['Meta_language_explain']  = '- fr : ������<br/ >- en : ������ ��������<br/ >- nl : �������<br/ >- de : ������<br/ >- es : ������<br/ >- it : �������<br/ >- pt : ���������<br/ >- il : �����<br/ >- �� ���� ��� ���� ����, �� �� ����� ������ ��� ��.';
}
?>