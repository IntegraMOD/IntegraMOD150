<?php
/***************************************************************************
 *                      lang_prillian_faq.php [English]
 *                            -------------------
 *   begin                : Friday, May 30, 2003
 *   version              : 1.1.0
 *   date                 : 2003/12/23 23:23
 ***************************************************************************/

// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array('question', 'answer');
// If you want to separate a section enter
// $faq[] = array('--', 'Block heading goes here if wanted');
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put single quotes (') in your FAQ entries, if you absolutely must then
// escape them i.e.. \'something\' or use double quotes (") at the beginning and end
// of the entries (in which case you'll need to escape any double quotes in the
// entry).
//
// The FAQ items will appear on the FAQ page in the same order they are listed in 
// this file
//
// To mention Prillian by the name you've set in lang_prillian.php, use the variable
// $progname as it is used in the defaults
//

include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_prillian.' . $phpEx);


$progname = $lang['Prillian'];

$faq[] = array('--', 'General Questions');
$faq[] = array('What is ' . $progname . '?', $progname . ' is a web-based instant messenger client that we provide to our registered users so that they can easily and quickly contact each other. It is very similar to other instant messenger programs you may have used previously, but the users are generally limited to other members of this forum.');
$faq[] = array('Do I need to download software to use ' . $progname . '?', 'No, there is no software to download. The ' . $progname . ' software runs on this website. You can use and access the software through your web browser just like any normal web page or the forum itself.');
$faq[] = array('Do I need to register in the forums to use ' . $progname . '?', 'Yes. ' . $progname . ' is a part of the forums and uses the same user registration. It also uses parts of the private message system built into the forums. You cannot use the messenger until you have registered and logged in.');
$faq[] = array('Do I have to constantly stay at this site to use ' . $progname . '?', 'No, you do not. As long as you keep the ' . $progname . ' client window open, you can continue your web browsing as you normally would. Keep in mind that the messenger runs in your web browser, so if you exit your web browser completely, you will also exit the messenger.');
$faq[] = array('Are there any special settings my browser needs to use ' . $progname . '?', $progname . ' uses a great deal of JavaScript to provide control features and automatic opening of new windows. It is recommended that you have these options turned on for this web site. If you do not have these options turned on, you can still use the messenger. Some features may not work, however.');
$faq[] = array('How do I access ' . $progname . '?', 'First, make sure you have registered and logged in on the forums. On some forums, the board administrator can set ' . $progname . ' to open automatically when you visit the forum\'s index page. If the messenger does not open automatically, look for a link called "' . $lang['Launch_phpBB_IM'] . '," "' . $lang['Who_is_Online'] . '," or something similar. If there is a new instant message waiting for you, this link may state that you have a new IM. Click this link to open a new, specially sized browser window. This window, called the "IM Client," allows you to access ' . $progname . '.');
$faq[] = array('I did all that, but the window has some weird error message. Why?', 'There are several possible answers. It may be that the board administrator has temporarily disabled the software (possibly for an upgrade). It is also possible that the administrator has banned you from using the software. You didn\'t do anything naughty, did you?<br /><br />It is equally possible that you disabled the software previously yourself. In this case, the error message should contain a link to the preferences editor, where you can enable the software again.');
$faq[] = array('Okay, I have opened the IM Client. Now what?', 'From the IM Client window, you can do many things. You should see a list of users that are currently online. You can send these users an instant message. You can also send messages to other users, receive messages, view messages you have sent or received in the past, access the Contact List control panel, and, if the board administrator allows, access your messenger preferences.');
$faq[] = array('How do I receive messages?', 'The IM Client will automatically check for messages periodically. For more information, read the next section of this FAQ.');

$faq[] = array('--', 'Using the IM Client');
$faq[] = array('I see a lot of images in this window. What do they mean?', 'The controls of the IM Client allow you to access the messenger\'s features. Below is a listing of images you may see in the IM Client and what they represent. Keep in mind that these images may change if you alter the theme used by ' . $progname . ' is changed. You can also learn what an image represents by hovering your mouse cursor over the image in some browsers. There may also be a set of text links that have similar functions to these images, depending on your preferences.<br /><br /><table border="1" width="100%" cellpadding="5" cellspacing="0"><tr><td width="15%" align="center"><img src="' . $images['prill_buddies'] . '"></td><td class="gen">' . $lang['Alt_Contact_Man'] . '</td><td class="gen">This opens the Contact Management control panel in another browser window.</td></tr><tr><td align="center"><img src="' . $images['prill_closewin'] . '"></td><td class="gen">' . $lang['Alt_Close_Windows'] . '</td><td class="gen">Child windows can include open Read Message, Send Message, and Message Log windows.</td></tr><tr><td align="center"><img src="' . $images['prill_home'] . '"></td><td class="gen">' . $lang['Alt_Home'] . '</td><td class="gen">Open the forum index of this website in a browser window.</td></tr><tr><td align="center"><img src="' . $images['prill_prefs'] . '"></td><td class="gen">' . $lang['Alt_Prefs'] . '</td><td class="gen">Change settings that influence how the messenger operates. The board administrator can override these settings, in which case this image will not appear.</td></tr><tr><td align="center"><img src="' . $images['prill_message'] . '"></td><td class="gen">' . $lang['Send_Message'] . '</td><td class="gen">Click this to open the Send Message window.</td></tr><tr><td align="center"><img src="' . $images['prill_refresh'] . '"></td><td class="gen">' . $lang['Check_IMs'] . '</td><td class="gen">Reload or refresh the IM Client. This checks for new messages and updates the list of online users.</td></tr><tr><td align="center"><img src="' . $images['prill_logout'] . '"></td><td class="gen">' . $lang['Alt_Logout'] . '</td><td class="gen">In addition, this will close the IM Client and Child windows.</td></tr><tr><td align="center"><img src="' . $images['prill_log'] . '"></td><td class="gen">' . $lang['Alt_Message_Log'] . '</td><td class="gen">View a list of messages you have sent or received. You can also view individual messages from the Message Log.</td></tr><tr><td align="center"><img src="' . $images['prill_offsite'] . '"></td><td class="gen">Off-Site User</td><td class="gen">This user is from another site. In some browsers, you can hover your mouse cursor over the image to determine the user\'s site of origin.</td></tr><tr><td align="center"><img src="' . $images['prill_onsite'] . '"></td><td class="gen">On-Site User</td><td class="gen">This user is from this site, just like you.</td></tr><tr><td align="center"><img src="' . $images['prill_help'] . '"></td><td class="gen">Help</td><td class="gen">Access this FAQ page.</td></tr></table><br /><br />For more information on Off-Site and On-Site Users, see the section of this FAQ entitled "Site-to-Site Messaging."');
$faq[] = array('What other things are in the IM Client?', 'Depending on how the board administrator has set up the software, you may see a series of blocks of information about the users currently on the forums and messenger. This may include the number of users, hidden users, and guest users online.<br /><br />There will likely be one or two blocks of user names next to Off-Site or On-Site User icons and Send Message icons. These are users that are currently online. If an On-Site User\'s name is displayed <em>like this</em>, then that user is also using the messenger at that time. Any Off-Site Users displayed are also using the messenger at that time. If the moderators or administrators of this site are listed, their names will be in different colors to stand out from normal users. If you click the Send Message icon next to a user\'s name, the Send Message window will open with that user\'s name entered into the "username" field. You can click on any user\'s name to view that user\'s forum profile.');
$faq[] = array('How do I receive new messages?', 'Periodically, the IM Client will automatically reload to check for new messages and update the list of online users. When this happens, the IM Client, after fully reloading can display your messages in a couple of ways depending on your user preferences and web browser\'s JavaScript settings. The IM Client may automatically open new messages in new, small, Read Message windows. Also, the client may list new and unread messages in the IM Client window itself. If messages are listed in the IM Client, you will see a shortened version of the messages\' subjects and sender\'s name. Click on the message subject to open a message in a new Read Message window.<br /><br />Depending on your user preferences, the IM Client may check for new instant messages only or for instant messages and private messages. If, for some reason, the IM Client fails to reload automatically, you can click the Check for IMs link or icon to reload the IM Client manually.');
$faq[] = array('How do I delete old messages?', 'Depending on your user preferences, instant messages may automatically be deleted once they have been read and the IM Client reloads. You can also delete new and unread instant or private messages from the list in the IM Client. Private messages that you have already read cannot be deleted from the IM Client (unless listed in the IM Client and deleted before the IM Client reloads).');

$faq[] = array('--', 'User Preferences and Settings');
$faq[] = array('How do I change my settings?', 'All your settings are stored in the database. To alter them click the <u>Preferences</u> link or icon (generally shown at the bottom or top of the messenger client but this may not be the case). This will allow you to change all your settings.');
$faq[] = array('I clicked the link, but it says something about the administrator overriding something. What?', 'Board administrators have the option to override user preferences. When this option is enabled, user preferences cannot be changed except by a board administrator. You will not be able to access the preferences editor page to modify your settings.');
$faq[] = array('There are a lot of settings here. What do they all mean?', 'Many of the user preferences should be self explanatory. Below is a summary of some options that may require more details.<br /><br /><table border="1" width="100%" cellpadding="5" cellspacing="0"><tr><td class="gen" width="25%">Location of sound file</td><td class="gen">The sound file options allow you to play a new sound when you receive new messages. You may choose to play either the default sound provided by this website or a sound on your own computer. Click the "Browse..." button to specify a sound file on your own computer. The location of this sound file will be stored in this site\'s database. If you move the sound file at a later date, do not forget to update this setting.</td></tr><tr><td class="gen">List these users in the main window</td><td class="gen">The options here allow you to change which users are listed in the IM Client. You may choose to list all users on the forums, all users on the messenger, only buddies on the forums, or only buddies on the messenger.</td></tr><tr><td class="gen">Choose a method for displaying users online at other sites</td><td class="gen">These options allow you to specify how Off-Site Users are displayed in the IM Client. You may choose not to display them at all, to display them in a separate box from On-Site Users, or mixed in with the On-Site Users. Remember, Off-Site Users listed are always users on the messenger.</td></tr></table>');
$faq[] = array('Important Things to Know About Settings', 'There are a few things that it is important for you to know about the user preferences and settings. First, be careful when changing the Enable settings. Turning these settings off may prevent you from using parts of the messenger. Second, if you are going to play a sound on receiving of new messages, it is better to play a sound on your own computer. The sound will load (and therefore play) more quickly than it will if the messenger has to download it from the website.');


$faq[] = array('--', 'Posting Issues');
$faq[] = array('How do I send messages?', 'This is simple. Click the Send Message icon or link (either next to a user name or in the controls) to open the Send Message window. Here you will be able to type a message and send it to another user. If you wish to send a message to a user other than the one whose Send Message icon or link you clicked, you may change the name in the username field.<br /><br />Please note that you can only send a message to an Off-Site User on a particular site by clicking on the icon or link next to the name of an Off-Site user from the same site. Likewise, you can only send a message to an On-Site User by clicking the link or icon in the controls or next to an On-Site User. Replying to a message will allow you to send a message of the same type also.');
$faq[] = array('I\'m in the Send Message window. What is all this stuff?', 'The Send Message window has many features. Next to the Username field are two buttons that allow you to quickly find a user or buddy to which you can send a message. The Subject field is completely optional. There are BBCode and Font controls similar to those available when posting a topic, as well as options to disable them in a post. There may also be a drop down list of smilies. Finally, there is a "Save Message" checkbox, which will save a copy of the message in your private messages savebox when it is successfully sent.<br /><br />Some features may be disabled when sending a message to an Off-Site User.');
$faq[] = array('Can I use BBCode, Smileys, HTML, signatures, and Images in instant messages?', 'You may do so, if the board administrator allows such. The settings for these options are the same as those on the board (e.g., if you can use BBCode on the board, you can use it in instant messages).');


$faq[] = array('--', 'Reading Messages');
$faq[] = array('I\'m reading a message. What do some of these options mean?', 'There are two options in the Read Message window that may need to be explained: the "Save and Close" and "Save and Reply" buttons. Clicking either of these buttons will save a copy of it in your private messages savebox. This is useful if automatic deletion of read messages is turned on. The "Close" and "Reply" parts of these buttons should be easy to understand.<br /><br />Depending on the forum\'s set up, there may also be a quick reply form in this window.');
$faq[] = array('I keep getting unwanted messages!', $progname . ' includes an ignore system. You can ignore the user sending the messages or contact the board administrator, who can ban the user from the instant and/or private messaging systems.');

$faq[] = array('--', 'Site-to-Site Messaging');
$faq[] = array('What is Site-to-Site Messaging?', 'Site-to-Site Messaging is a special system that the messenger uses to allow users on multiple sites to communicate with each other. All Off-Site Users listed in the IM Client are actually people using a similar messenger on another site. These users may be able to see if you are online at this site. They may also be able to send you an instant message via Site-to-Site Messaging. You can send them a message as well.');
$faq[] = array('That sounds pretty cool, but I don\'t want to be part of it.', 'You can disable Site-to-Site Messaging in your user preferences.');
$faq[] = array('How do I send a message to someone on another site?', 'Click the Send Message icon or link near their name in the IM Client. When the Send Message window opens, type away! Some features may be disable in Site-to-Site Messages. Also, even though you can see who is online at another site, you may not be able to send them messages. You can only send messages to another site if that site has added this site to it\'s Site-to-Site database.');
$faq[] = array('Why are these features disabled?', 'The Site-to-Site Messaging system is still under development. Indeed, the entire messenger software is still under development.');

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array('--', $progname . ' Issues');
$faq[] = array('Who wrote this instant messenger software?', 'This software (in its unmodified form) is produced, released, and is copyrighted by <a href="http://darkmods.sourceforge.net/" target="_blank">Thoul</a>. It is based on and includes some code from the phpBB forum software, which (in its unmodified form) is produced, released, and is copyrighted by <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. Both are made available under the GNU General Public License and may be freely distributed; see the links for more details.');
$faq[] = array('Why isn\'t X feature available?', 'This software was written by and licensed through the phpBB Group (in the case of the forum software) and Thoul (in the case of the instant messenger). If you believe a feature needs to be added to the instant messenger software then please visit the darkmods.sourceforge.net website and see if anything has been said about it in the forums there. If not, post a feature request in the forums or via the Sourceforge interface.');
$faq[] = array('Whom do I contact about abusive and/or legal matters related to this instant messenger?', 'You should contact the administrator of this board. If you cannot find who that is, you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that Thoul has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting Thoul in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the darkmods.sourceforge.net website or the discrete software of the instant messenger itself. If you do email Thoul about any third party use of this software then you should not expect a response.');

//
// This ends the FAQ entries
//

?>