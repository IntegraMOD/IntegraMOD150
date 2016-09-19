// ** I18N 

// Calendar EN language 
// Author: Mihai Bazon, <mishoo@infoiasi.ro> 
// Encoding: any 
// Distributed under the same terms as the calendar itself. 

// For translators: please use UTF-8 if possible.  We strongly believe that 
// Unicode is the answer to a real internationalized world.  Also please 
// include your contact information in the header, as can be seen above. 

// full day names 
Calendar._DN = new Array 
("Dimanche", 
 "Lundi", 
 "Mardi", 
 "Mercredi", 
 "Jeudi", 
 "Vendredi", 
 "Samedi", 
 "Dimanche"); 

// Please note that the following array of short day names (and the same goes 
// for short month names, _SMN) isn't absolutely necessary.  We give it here 
// for exemplification on how one can customize the short day names, but if 
// they are simply the first N letters of the full name you can simply say: 
// 
//   Calendar._SDN_len = N; // short day name length 
//   Calendar._SMN_len = N; // short month name length 
// 
// If N = 3 then this is not needed either since we assume a value of 3 if not 
// present, to be compatible with translation files that were written before 
// this feature. 

// short day names 
Calendar._SDN = new Array 
("Dim", 
 "Lun", 
 "Mar", 
 "Mer", 
 "Jeu", 
 "Ven", 
 "Sam", 
 "Dim"); 

// full month names 
Calendar._MN = new Array 
("Janvier", 
 "F�vrier", 
 "Mars", 
 "Avril", 
 "Mai", 
 "Juin", 
 "Juillet", 
 "Ao�t", 
 "Septembre", 
 "Octobre", 
 "Novembre", 
 "D�cembre"); 

// short month names 
Calendar._SMN = new Array 
("Jan", 
 "F�v", 
 "Mar", 
 "Avr", 
 "Mai", 
 "Jun", 
 "Jul", 
 "Aou", 
 "Sep", 
 "Oct", 
 "Nov", 
 "D�c"); 

// tooltips 
Calendar._TT = {}; 
Calendar._TT["INFO"] = "A propos du calendrier"; 

Calendar._TT["ABOUT"] = 
"DHTML Date/Temps S�lecteur\n" + 
"(c) dynarch.com 2002-2003\n" + // don't translate this this ;-) 
"Pour obtenir la derni�re version visitez: http://dynarch.com/mishoo/calendar.epl\n" + 
"Distribu� sous la licence GNU LGPL.  Voir http://gnu.org/licenses/lgpl.html pour les d�tails." + 
"\n\n" + 
"S�lection de la date:\n" + 
"- Utilisez les boutons \xab, \xbb pour s�lectionner l'ann�e\n" + 
"- Utilisez les boutons " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " pour s�lectionner le mois\n" + 
"- Gardez le bouton de la souris enfonc� sur n'importe quels boutons ci-dessus pour une s�lection plus rapide."; 
Calendar._TT["ABOUT_TIME"] = "\n\n" + 
"S�lection du temps:\n" + 
"- Cliquez sur n'importe quelle partie du temps pour l'augmenter\n" + 
"- ou cliquez avec le bouton Shift enfonc� pour diminuer\n" + 
"- ou cliquez et glissez pour s�lection plus rapide."; 

Calendar._TT["PREV_YEAR"] = "Ann�e pr�c. (laissez appuy� pour le menu)"; 
Calendar._TT["PREV_MONTH"] = "Mois pr�c. (laissez appuy� pour le menu)"; 
Calendar._TT["GO_TODAY"] = "Allez � aujourd'hui"; 
Calendar._TT["NEXT_MONTH"] = "Mois prochain (laissez appuy� pour le menu)"; 
Calendar._TT["NEXT_YEAR"] = "Ann�e prochaine (laissez appuy� pour le menu)"; 
Calendar._TT["SEL_DATE"] = "Selectionnez une date"; 
Calendar._TT["DRAG_TO_MOVE"] = "Glissez pour d�placer"; 
Calendar._TT["PART_TODAY"] = " (aujourd'hui)"; 

// the following is to inform that "%s" is to be the first day of week 
// %s will be replaced with the day name. 
Calendar._TT["DAY_FIRST"] = "Afficher %s en premier"; 

// This may be locale-dependent.  It specifies the week-end days, as an array 
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1 
// means Monday, etc. 
Calendar._TT["WEEKEND"] = "0,6"; 

Calendar._TT["CLOSE"] = "Fermer"; 
Calendar._TT["TODAY"] = "Aujourd'hui"; 
Calendar._TT["TIME_PART"] = "(shift-)click ou glissez pour changer la valeur"; 

// date formats 
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d"; 
Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e"; 

Calendar._TT["WK"] = "sem"; 
Calendar._TT["TIME"] = "Heure:"; 