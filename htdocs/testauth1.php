<?php
define('_ROOT_DIR',__DIR__.'/');
require_once _ROOT_DIR.'../php_libs/init.php';

$smarty = new Smarty;
$smarty->template_dir = _SMARTY_TEMPLATES_DIR;
$smarty->compile_dir = _SMARTY_TEMPLATES_C_DIR;
$smarty->config_dir = _SMARTY_CONFIG_DIR;
$smarty->cache_dir = _SMARTY_CACHE_DIR;

session_start();

if (!empty($_POST['type']) && $_POST['type'] == 'authenticate') {
    // 認証
    if ($_POST['username'] == 'user' && $_POST['password'] == 'pass') {
        $_SESSION['id'] = 1;
    }
}else if (!empty($_GET['type']) && $_GET['type'] == 'logout') {
    $_SESSION = [];
}

if(!empty($_SESSION) && $_SESSION['id'] >= 1) {
	// after 認証
	$smarty->assign("title","会員ページ");
	$file = 'testauth.tpl';
}else{
	// 未認証
	$smarty->assign("title","ゲストページ");
	$smarty->assign("type","authenticate");
	$file = 'testlogin.tpl';

	$form = new HTML_QuickForm();
	$form->addElement('test','username','ユーザー名',['size' => 15, 'maxlength' => 50]);
	$form->addElement('password','password','パスワード',['size' => 15, 'maxlength' => 50]);
	$form->addElement('submit','submit','ログイン');
	$renderer=new HTML_QuickForm_Renderer_ArraySmarty($smarty);
	$form->accept($renderer);
	$smarty->assign("form", $renderer->toArray());
}

$smarty->display($file);
?>