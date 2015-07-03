<?php

// for Database
define("_DEBUG_MODE", false);
define("_DB_USER", "sample");
define("_DB_HOST", "password");
define("_DB_NAME", "sampledb");
define("_DSN", "_DB_TYPE".":host="._DB_HOST.";dbname="._DB_NAME.";charset=utf8");

// for members auth
define("_MEMBER_SESSNAME", "PHPSESSION_MEMBER");
define("_SYSTEM_SESSNAME", "PHPSESSION_SYSTEM");
define("_MEMBER_AUTHINFO", "userinfo");
define("_SYSTEM_AUTHINFO", "systeminfo");
define("_MEMBER_FLG", true);

// for function
define("_PHP_LIBS_DIR", _ROOT_DIR."../php_libs/");
define("_CLASS_DIR", _PHP_LIBS_DIR."class/");
define("_SCRIPT_NAME", $_SERVER['SCRIPT_NAME']);
define("_SMARTY_LIBS_DIR", _PHP_LIBS_DIR."smarty/libs/");
define("_SMARTY_TEMPLATES_DIR", _PHP_LIBS_DIR."smarty/templates/");
define("_SMARTY_TEMPLATES_C_DIR", _PHP_LIBS_DIR."smarty/templates_c");
define("_SMARTY_CONFIG_DIR", _PHP_LIBS_DIR."smarty/configs/");
define("_SMARTY_CACHE_DIR", _PHP_LIBS_DIR."smarty/cache/");

// load file
require_once("HTML/QuickForm.php");
require_once("HTML/QuickForm/Renderer/ArraySmarty.php");
require_once(_SMARTY_LIBS_DIR."Smarty.class.php");

// load class
require_once("_CLASS_DIR"."BaseController.php");
require_once("_CLASS_DIR"."BaseModel.php");
require_once("_CLASS_DIR"."Auth.php");
require_once("_CLASS_DIR"."KenController.php");
require_once("_CLASS_DIR"."KenModel.php");
require_once("_CLASS_DIR"."MemberController.php");
require_once("_CLASS_DIR"."MemberModel.php");
require_once("_CLASS_DIR"."PrememberController.php");
require_once("_CLASS_DIR"."PrememberModel.php");
require_once("_CLASS_DIR"."SystemController.php");
require_once("_CLASS_DIR"."SystemModel.php");

?>