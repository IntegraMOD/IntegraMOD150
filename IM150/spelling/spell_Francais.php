<?php
  // --------------------------------------------------------------------
  // phpSpell Language Template
  //
  // This is (c)Copyright 2002, 2003, Team phpSpell.
  // --------------------------------------------------------------------

  // --------------------------
  // Table Name
  // --------------------------
  $DB_TableName=$table_prefix."spelling_words";

  // Language Text
  $Language_Text = array('%d mots scann�s.   Trouv� %d mots � corriger.');
  $Language_Javascript = array('V�rification du document...','Aucune erreur','OK','Annuler','V�rification termin�e','Corriger','Tout','Ignorer','Ajouter','Sugg�rer','D�finition','Th�saurus','Correction du mot','Aucune suggestion');

  // Prefix Database name for MSSQL tables
//  if ($dbms == "mssql") {
//    $DB_TableName = $dbname.".".$DB_TableName;
//  }

  // ---------------------------------------
  // PSPELL Support - Use English Dictionary
  // ---------------------------------------
  $Spell_Config["PSPELL_LANGUAGE"] = "fr";
  // --------------------------------------------------------------------
  // Example translation table:
  //     $Translation_Table = array("�", "�", "�");
  //     $Replacement_Table = array("a", "an", "sth");
  //     $Language_Translation_Character_List = "���";
  // --------------------------------------------------------------------
  // for every "�" it finds in a word it will replace it with a "a"
  // for every "�" it finds it will replace it with a "sth"
  // for every "�" it finds it will replace it with a "an"
  // --------------------------------------------------------------------
  // Put the character(s) to be translated into the Translation_Table
  // Put the replacement character(s) into the replacement table
  // --------------------------------------------------------------------
  // The replacement string should be equivelent to the ENGLISH PHONETIC
  // sound.  So if you were to take a word with "�" in it; how would you
  // phonetically spell the word in english.  If the "�" sounds like a "A"
  // in english then "A" would be the replacement character.
  // If it sounds like "th" then you would use "th" as the characters.
  // always replace Larger groups first.  (i.e. if "�" sounds differently
  // than "�" then in the translation table you would have the "�" listed
  // before the "�".  So that way when it would replaced the "�" before it
  // replaced it twice with "�".
  // --------------------------------------------------------------------
  // Any letters you do not translate will be IGNORED for
  // when it attempts to find spelling matches!!!
  // --------------------------------------------------------------------
  $Translation_Table = array();
  $Replacement_Table = array();

  // --------------------------------------------------------------------
  // Put the list of valid characters in your language in this list
  // --------------------------------------------------------------------
  $Language_Character_List = "abcdefghijklmnopqrstuvwxyz������������'";
  $Language_Common_Words = ",je,tu,il,elle,nous,vous,ils,elles,le,la,les,un,une,des,suis,es,est,�tes,sommes,sont,ai,avons,avez,ont,vais,vas,va,allons,allez,vont,sais,sait,savons,savez,savent,peux,peut,pouvons,pouvez,peuvent,mais,o,et,donc,or,ni,car,sur,sous,dans,avec,ici,sans,mon,ma,ton,ta,son,sa,ses,ton,ta,tes,nos,vos,leur,leurs,oui,non,voyage,aujourd'hui,autre,m�me,l\',d\',qu\',a,�,de,dedans,hors,cela,qui,quoi,quand,du,";

  // --------------------------------------------------------------------
  // Translation function
  // --------------------------------------------------------------------
  function Translate_Word($Word) {
    return ($Word);
  }

  // --------------------------------------------------------------------
  // Phonetic work function
  // --------------------------------------------------------------------
  function Word_Sound_Function($Word) {
    return (metaphone($Word));
  }


  function Language_Decode(&$Data)
  {
    // MS Internet Explorer Hack -- IE sends utf8-unicode for upper (ascii 128+) characters
     if (strpos(@$_SERVER['HTTP_USER_AGENT'], 'MSIE') > 0 || strpos(@$_SERVER['ALL_HTTP'], 'MSIE') > 0) {
       if (function_exists('utf8_decode')) $Data = utf8_decode($Data);
     }
     return ($Data);
  }

  function Language_Encode(&$Data)
  {
    return ($Data);
  }

  function Language_Lower(&$Data)
  {
    return(strtolower($Data));
  }

  function Language_Upper(&$Data)
  {
    return(strtoupper($Data));
  }

?>