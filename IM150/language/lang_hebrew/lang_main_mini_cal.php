<?php
/***************************************************************************
 *                            lang_main_mini_cal.php
 *                            ----------------------
 *   Author  		: 	netclectic - Adrian Cockburn - phpbb@netclectic.com
 *   Created 		: 	Thursday, Jan 30, 2003
 *	 Last Updated	:	Tuesday, Nov 25, 2003
 *
 *	 Version		: 	MINI_CAL - 2.0.2
 *
 ***************************************************************************/

$lang['Mini_Cal_calendar'] = '��� ���';
$lang['Mini_Cal_add_event'] = '���� �����';
$lang['Mini_Cal_events'] = '������� �����';
$lang['Mini_Cal_no_events'] = '���';


// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';


// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa'; 
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su'; 

//           !!!! DO NOT CHANGE IT ANYMORE DEPENDING ON THE FDOW !!!!
$lang['mini_cal']['day'][1] = '�\''; 
$lang['mini_cal']['day'][2] = '�\''; 
$lang['mini_cal']['day'][3] = '�\''; 
$lang['mini_cal']['day'][4] = '�\''; 
$lang['mini_cal']['day'][5] = '�\''; 
$lang['mini_cal']['day'][6] = '�\''; 
$lang['mini_cal']['day'][7] = '�\''; 

$lang['mini_cal']['month'][1] = '01'; 
$lang['mini_cal']['month'][2] = '02'; 
$lang['mini_cal']['month'][3] = '03'; 
$lang['mini_cal']['month'][4] = '04'; 
$lang['mini_cal']['month'][5] = '05'; 
$lang['mini_cal']['month'][6] = '06'; 
$lang['mini_cal']['month'][7] = '07'; 
$lang['mini_cal']['month'][8] = '08'; 
$lang['mini_cal']['month'][9] = '09'; 
$lang['mini_cal']['month'][10] = '10'; 
$lang['mini_cal']['month'][11] = '11'; 
$lang['mini_cal']['month'][12] = '12'; 

$lang['mini_cal']['long_month'][1] = '�����'; 
$lang['mini_cal']['long_month'][2] = '������'; 
$lang['mini_cal']['long_month'][3] = '���'; 
$lang['mini_cal']['long_month'][4] = '�����'; 
$lang['mini_cal']['long_month'][5] = '���'; 
$lang['mini_cal']['long_month'][6] = '����'; 
$lang['mini_cal']['long_month'][7] = '����'; 
$lang['mini_cal']['long_month'][8] = '������'; 
$lang['mini_cal']['long_month'][9] = '������'; 
$lang['mini_cal']['long_month'][10] = '�������'; 
$lang['mini_cal']['long_month'][11] = '������'; 
$lang['mini_cal']['long_month'][12] = '�����'; 
?>