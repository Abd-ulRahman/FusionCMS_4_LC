<?php
$active_group = "cms";
$active_record = TRUE;

$db["cms"]["hostname"] = "127.0.0.1";      // Put your Hostname 
$db["cms"]["username"] = "root";           // Website database username  
$db["cms"]["password"] = "asnaeb";           // Website database password
$db["cms"]["database"] = "fusioncms";         // Website database name
$db["cms"]["port"] = 3306;
$db["cms"]["dbdriver"] = "mysqli";
$db["cms"]["dbprefix"] = "";
$db["cms"]["pconnect"] = TRUE;
$db["cms"]["db_debug"] = TRUE;
$db["cms"]["cache_on"] = FALSE;
$db["cms"]["cachedir"] = "";
$db["cms"]["char_set"] = "utf8";
$db["cms"]["dbcollat"] = "utf8_general_ci";
$db["cms"]["swap_pre"] = "";
$db["cms"]["autoinit"] = TRUE;
$db["cms"]["stricton"] = FALSE;

$db["account"]["hostname"] = "127.0.0.1";      // Put your hostname of server
$db["account"]["username"] = "root";           // Put your username of database for AzerothCore/Trinity Core 
$db["account"]["password"] = "asnaeb";           // Put your password of database for AzerothCore/Trinity Core 
$db["account"]["database"] = "z_auth_full";           // Put your password of database for AzerothCore/Trinity Core 
$db["account"]["port"] = 3306;
$db["account"]["dbdriver"] = "mysqli";
$db["account"]["dbprefix"] = "";
$db["account"]["pconnect"] = TRUE;
$db["account"]["db_debug"] = TRUE;
$db["account"]["cache_on"] = FALSE;
$db["account"]["cachedir"] = "";
$db["account"]["char_set"] = "utf8";
$db["account"]["dbcollat"] = "utf8_general_ci";
$db["account"]["swap_pre"] = "";
$db["account"]["autoinit"] = FALSE;
$db["account"]["stricton"] = FALSE;