<?php /* Smarty version Smarty-3.1.6, created on 2014-07-15 12:03:43
         compiled from "../views/key/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28873410953adc806ea56f9-90755600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14755690be6f725efab095ae2b88d1dc8eeba147' => 
    array (
      0 => '../views/key/header.tpl',
      1 => 1405411232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28873410953adc806ea56f9-90755600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53adc806ee3d8',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53adc806ee3d8')) {function content_53adc806ee3d8($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
         
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="/js/zapros.js"></script>
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/liri.png" type="image/x-icon" />

    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div id="logo"><a href="/main/"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/logo_zapros.png" alt="logo"/></a></div>
       
                <div id="profile">
                    <span><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span>
                    <ul>
                        <li><a href="/profile/">Профиль</a></li>
                        <li><a href="/logout/">Выход</a></li>
                    </ul>
                    
                    <div class="profileBalance">Баланс: 0.00 рублей</div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>