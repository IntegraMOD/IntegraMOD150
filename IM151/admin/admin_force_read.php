<?php
//////////////////////////////////////////////////////////////////////////// 
///                           ___                 
///                          /  /\                ___     
///    ###       ###        /  /::\              /  /\    
///  ##    ####     ##     /  /:/\:\            /  /:/    
/// ##    ##   ##    ##   /  /:/~/::\          /__/::\    
/// ##    ##         ##  /__/:/ /:/\:\         \__\/\:\__ 
/// ##    ##   ##    ##  \  \:\/:/__\/  /���/     \  \:\/\
///  ##    ####     ##    \  \::/                  \__\::/
///    ###       ###       \  \:\                  /__/:/ 
///                         \  \:\                 \__\/  
///                          \__\/                
//////////////////////////////////////////////////////////////////////////// 

/***************************************************************************
 *                             admin_force_read.php
 *                            ----------------------
 *		Version			: 1.0.2
 *		Email			: austin_inc@hotmail.com
 *		Site			: phpbb-amod.com
 *		Copyright		: aUsTiN-Inc 2003/4
 *
 ***************************************************************************/
 
define('IN_PHPBB', 1);
	
if( !empty($setmodules) )
{
	$module['FTR Admin']['FTR: Config']	= append_sid("admin_force_read.$phpEx?mode=config");
	$module['FTR Admin']['FTR: Users']	= append_sid("admin_force_read.$phpEx?mode=users");
	return;
}

$phpbb_root_path = '../';
require($phpbb_root_path . 'extension.inc');
require('pagestart.' . $phpEx);

	if( isset($_POST['mode']) || isset($_GET['mode']) )
		{
	$mode = ( isset($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
		}
	else if( isset($_POST['config']) )
		{
	$mode = "config";
		}
	else if( isset($_POST['logs']) )
		{
	$mode = "users";
		}			
	else
		{
	$mode = "";
		}

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_ftr.'.$phpEx);


	$update = ( isset($_POST['update']) ? $_POST['update'] : '' ) ;
		
	if ( $mode == "delete_user" )
		{
	( !$_GET['user'] ) ? $who = $_GET['user'] : $who = $_GET['user'];
	
	$q = "DELETE FROM ". $table_prefix ."force_read_users
		  WHERE user = '". $who ."'";
	$r = $db -> sql_query($q);
	
	message_die(GENERAL_MESSAGE, $lang['Ftr_user_deleted'], $lang['Ftr_msg_success']);
		}
		
	if($mode == "users")
		{
		
	$start 	= ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;
	$show	= $board_config['topics_per_page'];		
		
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_admin_users'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";
	
	$sql = "SELECT COUNT(user) AS total
			FROM ". $table_prefix ."force_read_users";
	if ( !($result = $db->sql_query($sql)) )
		{
	message_die(GENERAL_ERROR, $lang['Ftr_total_user_error'], '', __LINE__, __FILE__, $sql);
		}

	if($total = $db->sql_fetchrow($result))
		{
	$total_users 	= $total['total'];
	$pagination 	= generate_pagination("admin_force_read.$phpEx?mode=users", $total_users, $show, $start). '&nbsp;';
		}
	else
		{
	$pagination = '&nbsp;';
	$total_users = $show;
		}
	
	$page_number = sprintf($lang['Page_of'], ( floor( $start / $show ) + 1 ), ceil( $total_users / $show ));
	

	echo "<table border='1' width='100%' class='forumline' valign='top' align='center'>";
	echo "	<tr>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";			
	echo "				$page_number";
	echo "			</span>";	
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";			
	echo "				$pagination";
	echo "			</span>";	
	echo "		</td>";
	echo "	</tr>";		
	echo "</table>";
	echo "<br><br>";	
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 	
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_username'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_post_date_time'];
	echo "			</span>";
	echo "		</td>";
	echo "	</tr>";  
				
	$q1 = "SELECT *
		   FROM ". $table_prefix ."force_read_users
		   GROUP BY user
		   ORDER BY time ASC
		   LIMIT $start, $show";
	$r1 		= $db -> sql_query($q1);
	while($row1 = $db -> sql_fetchrow($r1))
		{
	$user	= $row1['user'];
	$read	= $row1['read'];
	$time	= $row1['time'];
	$time 	= strftime("%b. %d, %Y @ %H:%M:%S", $time);	
	
	$q = "SELECT username
		  FROM ". USERS_TABLE ."
		  WHERE user_id = '$user'";
	$r 		= $db -> sql_query($q);
	$row 	= $db -> sql_fetchrow($r);
	$name	= $row['username'];
		
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				<a href='". append_sid($_SERVER['PHP_SELF'] ."?mode=delete_user&user=". $user) ."'>$name</a>";
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				$time";
	echo "			</span>";
	echo "		</td>";			
	echo "	</tr>";		
			}	
	echo "</table>"; 					
		}
	elseif($mode == "config")
		{
		if ( $update == "new_effected" )
			{
		( !$_POST['effected'] ) ? $new = $_POST['effected'] : $new = $_POST['effected'];
		( !$new ) ? $new = "0" : $new = $new;
		
		$q = "UPDATE ". $table_prefix ."force_read
			  SET effected = '". $new ."'";
		$r =  $db -> sql_query($q);
		
		( !$new ) ? $msg = $lang['Ftr_effected_1'] : $msg = $lang['Ftr_effected_2'];
				
		message_die(GENERAL_MESSAGE, $msg, $lang['Ftr_msg_success']);		
			}
			
		if ( $update == "activate" )
			{
		( !$_POST['deactivate'] ) ? $new = $_POST['deactivate'] : $new = $_POST['deactivate'];
		( !$new ) ? $new = "0" : $new = $new;
				
		$q = "UPDATE ". $table_prefix ."force_read
			  SET active = '". $new ."'";
		$r =  $db -> sql_query($q);
			
		( !$new ) ? $msg = $lang['Ftr_active_1'] : $msg = $lang['Ftr_active_2'];
							
		message_die(GENERAL_MESSAGE, $msg, $lang['Ftr_msg_success']);							
			}
			
		if($update == "delete_users")
			{
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_admin_user_delete'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";

	$q1 = "TRUNCATE ". $table_prefix ."force_read_users";
	$r1 =  $db -> sql_query($q1);
		
	message_die(GENERAL_MESSAGE, $lang['Ftr_user_del_success'], $lang['Ftr_msg_success']);					
			}
		elseif($update == "save_config")
			{
	$topic 	= $_POST['topic'];
	$msg	= $_POST['message'];
	
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_save_config'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";
	
	$q1 = "UPDATE ". $table_prefix ."force_read
		   SET topic_number = '$topic', message = '$msg'";
	$r1 =  $db -> sql_query($q1);
		
	message_die(GENERAL_MESSAGE, $lang['Ftr_save_config_success'], $lang['Ftr_msg_success']);		
				}
		elseif($update == "change_config")
			{
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_select_forum'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";
	$change_config_2 = append_sid("admin_force_read.$phpEx?mode=config");
	echo "<form name='change_settings_2' method='post' action='$change_config_2'>";		
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_forum_choose'];
	echo "			</span>";
	echo "		</td>";	
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";	
	echo "				<select size='1' name='change_config_2'>";
	echo "					<option selected value=''>". $lang['Ftr_default'] ."</option>";
	
	$q1 = "SELECT forum_id, forum_name
		   FROM ". FORUMS_TABLE ."";
	$r1 		= $db -> sql_query($q1);
	while($row1 = $db -> sql_fetchrow($r1))
		{
	$id	 		= $row1['forum_id'];
	$name		= $row1['forum_name'];

	echo "					<option value='$id' name='change_config_2'>$name</option>";								
		}
	echo "				</select>";
	echo "			</span>";
	echo "		</td>";	
	echo "	</tr>";
	echo "</table>"; 
	echo "<br>";
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='center' valign='middle' width='100%' class='row2'>";
	echo "			<input type='hidden' name='update' value='change_config_2'>";	
	echo "			<input type='submit' class='mainoption' value=". $lang['Ftr_select_button'] ." onchange='document.change_settings_2.submit()'>";
	echo "		</td>";	
	echo "	</tr>";	
	echo "</table>";
	echo "</form>"; 							
				}
		elseif($update == "change_config_2")
			{
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_set_config'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";
	$forum_to_use = $_POST['change_config_2'];
	$save_config = append_sid("admin_force_read.$phpEx?mode=config");
	echo "<form name='save' method='post' action='$save_config'>";	
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_topic_choose'];
	echo "			</span>";
	echo "		</td>";	
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";	
	echo "				<select size='1' name='topic'>";
	echo "					<option selected value=''>". $lang['Ftr_default2'] ."</option>";
	
	$q1 = "SELECT topic_id, topic_title
		   FROM ". TOPICS_TABLE ."
		   WHERE forum_id = '$forum_to_use'";
	$r1 		= $db -> sql_query($q1);
	while($row1 = $db -> sql_fetchrow($r1))
		{
	$id	 		= $row1['topic_id'];
	$name		= $row1['topic_title'];

	echo "					<option value='$id' name='topic'>$name</option>";								
					}
	echo "				</select>";
	echo "			</span>";
	echo "		</td>";
	echo "	</tr>";
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_message'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";		
	echo "			<textarea id='message' name='message' cols='50' rows='5'></textarea>";
	echo "		</td>";			
	echo "	</tr>";
	echo "</table>"; 
	echo "<br>";
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='center' valign='middle' width='100%' class='row2'>";
	echo "			<input type='hidden' name='update' value='save_config'>";	
	echo "			<input type='submit' class='mainoption' value=". $lang['Ftr_save_button'] ." onchange='document.save.submit()'>";
	echo "		</td>";	
	echo "	</tr>";	
	echo "</table>";
	echo "</form>"; 							
			}																	
		else
			{		
	echo "<table width='100%' border='0' class='forumline' cellspacing='2' align='center' valign='middle'>";
	echo "	<tr>";
    echo "		<th class='thHead' colspan='2'>";
	echo "			". $lang['Ftr_config'];
	echo "		</th>";
	echo "	</tr>";				
	echo "</table>"; 
	echo "<br><br>";
		
	$q1 = "SELECT *
		   FROM ". $table_prefix ."force_read";
	$r1 		= $db -> sql_query($q1);
	$row1 		= $db -> sql_fetchrow($r1);
	$topic	 	= $row1['topic_number'];
	$msg		= $row1['message'];
	$active		= $row1['active'];
	$effected	= $row1['effected'];
			
	$q1 = "SELECT topic_title
		   FROM ". TOPICS_TABLE ."
		   WHERE topic_id = '$topic'";
	$r1 		= $db -> sql_query($q1);
	$row1 		= $db -> sql_fetchrow($r1);
	$topic_name	= $row1['topic_title'];

	$delete = append_sid("admin_force_read.$phpEx?mode=config");		
	echo "<form name='delete_u' method='post' action='$delete'>";				
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_post_changed'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<input type='hidden' name='update' value='delete_users'>";	
	echo "			<input type='submit' class='mainoption' value=".$lang['Ftr_delete_button']." onchange='document.delete_u.submit()'>";
	echo "		</td>";	
	echo "	</tr>";  
	echo "</table>"; 
	echo "</form>";
	echo "<br>";		
	$change_config = append_sid("admin_force_read.$phpEx?mode=config");		
	echo "<form name='change_settings' method='post' action='$change_config'>";				
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_current_topic'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				$topic_name";
	echo "			</span>";
	echo "		</td>";	
	echo "	</tr>";  	   	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='33%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_current_message'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='left' valign='middle' width='33%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				$msg";
	echo "			</span>";
	echo "		</td>";	
	echo "	</tr>";
	echo "</table>"; 
	echo "<br>";
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='center' valign='middle' width='100%' class='row2'>";
	echo "			<input type='hidden' name='update' value='change_config'>";	
	echo "			<input type='submit' class='mainoption' value=". $lang['Ftr_change_button'] ." onchange='document.change_settings.submit()'>";
	echo "		</td>";	
	echo "	</tr>";	
	echo "</table>";
	echo "</form>"; 
			
	if($active == "1")
		{
	$on 	= "checked='checked'";
	$off 	= "";
		}
	else
		{
	$on 	= "";
	$off 	= "checked='checked'";		
		}
					
	echo "<form name='change_active' method='post' action='$change_config'>";				
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_deactivate'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<input type='radio' value='0' name='deactivate' $off>&nbsp;". $lang['Ftr_deactivate_y'];
	echo "			<input type='radio' value='1' name='deactivate' $on>&nbsp;". $lang['Ftr_deactivate_n'];
	echo "		</td>";	 
	echo "		<td align='center' valign='middle' width='100%' class='row2'>";
	echo "			<input type='hidden' name='update' value='activate'>";	
	echo "			<input type='submit' class='mainoption' value=". $lang['Ftr_change_button'] ." onchange='document.change_active.submit()'>";
	echo "		</td>";	
	echo "	</tr>";	
	echo "</table>";
	echo "</form>"; 
	
	if($effected == "1")
		{
	$on 	= "checked='checked'";
	$off 	= "";
		}
	else
		{
	$on 	= "";
	$off 	= "checked='checked'";		
		}
					
	echo "<form name='change_effected' method='post' action='$change_config'>";				
	echo "<table width='100%' border='0' class='forumline' cellspacing='1' align='center' valign='middle'>";	
	echo "	<tr>"; 
	echo "		<td align='left' valign='middle' width='50%' class='row2'>";
	echo "			<span class='genmed'>";
	echo "				". $lang['Ftr_whos_effected'];
	echo "			</span>";
	echo "		</td>";
	echo "		<td align='center' valign='middle' width='50%' class='row2'>";
	echo "			<input type='radio' value='0' name='effected' $off>&nbsp;". $lang['Ftr_whos_effected_n'];
	echo "			<input type='radio' value='1' name='effected' $on>&nbsp;". $lang['Ftr_whos_effected_a'];
	echo "		</td>";	 
	echo "		<td align='center' valign='middle' width='100%' class='row2'>";
	echo "			<input type='hidden' name='update' value='new_effected'>";	
	echo "			<input type='submit' class='mainoption' value=". $lang['Ftr_change_button'] ." onchange='document.change_effected.submit()'>";
	echo "		</td>";	
	echo "	</tr>";	
	echo "</table>";
	echo "</form>"; 			
		}	   
	}		
					
/*
If this is removed, dont bother asking for any assistance from me.
Give credit where credit is due.
*/
	echo "<table width='100%' border='0' align='center'>";
	echo "	<tr>";  
	echo "		<td align='center'>";
	echo "			<span class='gen'>";
	echo "				<a href='http://phpbb-amod.com/' target='_blank'>";
	echo "					<font class='gensmall'>";
	echo "							&copy; aUsTiN-Inc";
	echo "					</font>";
	echo "				</a>";	
	echo "			</span>";
	echo "		</td>";  				
	echo "	</tr>";
	echo "</table>"; 
		
include('page_footer_admin.' . $phpEx);
?>
