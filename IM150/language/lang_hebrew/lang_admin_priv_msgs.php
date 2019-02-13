<?php
/***************************************************************************
*                            $RCSfile: lang_admin_priv_msgs.php,v $
*                            -------------------
*   begin                : Tue January 20 2002
*   copyright            : (C) 2002-2003 Nivisec.com
*   email                : support@nivisec.com
*
*
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

/* General */
$lang['Deleted_Message'] = '������ ������ ����� - %s <br />'; // %s = PM title
$lang['Archived_Message'] = '������ ������ ����� ������� - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = '�� ���� ����� �� %s, ��� ������ ������� �� �� <br />'; // %s = PM title
$lang['Private_Messages'] = '������ ������';
$lang['Private_Messages_Archive'] = '������ ������ ������';
$lang['Archive'] = '������';
$lang['To'] = '���';
$lang['Subject'] = '�����';
$lang['Sent_Date'] = '����� �����';
$lang['Delete'] = '���';
$lang['From'] = '���';
$lang['Sort'] = '����';
$lang['Filter_By'] = '��� ��-���';
$lang['PM_Type'] = '��� ����� �����';
$lang['Status'] = '���';
$lang['No_PMS'] = '��� ������ ������ �������� ��������� ����� ��� �����';
$lang['Archive_Desc'] = '������� ������� ����� ������ ������ ������ ���.  �������� �� ����� ���� ����� ���� (������� ��������), ��� ��� ���� ����� �� ����� ���� ��� ���.';
$lang['Normal_Desc'] = '�� ������� ������� ������ ��� ������ ����� ������� ���.  ��� ���� ����� �� �� ����� ������ ��� ����� �� ������ ������� (�����, ��� �������� �� ����� �����) �� ������� �� ��.';
$lang['Version'] = '����';
$lang['Remove_Old'] = '������ ������ �������:</a> <span class="gensmall">������� ����� ������ ���� ������� �� ������� ������� ����, ��� �� ���� ����.</span>';
$lang['Remove_Sent'] = 'Sent Box PMs:</a> <span class="gensmall">������ ������ ����� ������ ���� ������ �� ���� ����� ������ �����, ��� ������� ����� ��� ������� ���� ��� �� ������ ������.  �� �� ������ ����.</span>';
$lang['Affected_Rows'] = '%d ������ ������ �����<br>';
$lang['Removed_Old'] = '����� �� ������� ������� ��������<br>';
$lang['Removed_Sent'] = '����� �� ������� ������� ������<br>';
$lang['Utilities'] = '������ �����';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = '�� ������'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = '������ ������ ������'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = '������ ������ �����'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = '������ ������ ������'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = '������ ������ ������ (������)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = '������ ������ ������ (������)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = '������ ������ ��� �����'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = '����� ������� ����� ������.';
$lang['Error_Posts_Text_Table'] = '����� ������� ���� ���� ������� �������.';
$lang['Error_Posts_Table'] = '����� ������� ���� ������� �������.';
$lang['Error_Posts_Archive_Table'] = '����� ������� ���� ������ ������� �������.';
$lang['No_Message_ID'] = '��� ����� �� �-ID ������.';


/*Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

?>