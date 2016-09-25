<?php /* Smarty version Smarty-3.1.6, created on 2014-07-14 15:52:04
         compiled from "../views/key/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77949994453ad7e7f7b95b0-67688758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e893d895bc9a3e817acd188b3d8130c3fdacc8e8' => 
    array (
      0 => '../views/key/index.tpl',
      1 => 1405338723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77949994453ad7e7f7b95b0-67688758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53ad7e7f7fa4d',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ad7e7f7fa4d')) {function content_53ad7e7f7fa4d($_smarty_tpl) {?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
        
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/liri.png" type="image/x-icon" />
    </head>
    <body>
        
        <div id="headerIndex">

        </div>
        
        <div id="wrapIndex">    
            <div id="contentIndex">  
                <div class="indexLogo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/indexLogo.png" alt="LiRiCRM Logo"/>
                </div>
                <div class="indexForm">
                     <form action="/profile/login/" method="post">
                            <input class="indexInput" type="text" name="email" placeholder="E-mail" size="40" />
                            <input class="indexInput" type="password" name="password" placeholder="Пароль" size="40"/>   
                            <span><a href="/registration/reg/"><!-- Регистрация</a> | <a href="/user/forgot/">Восстановление пароля</a> <br /> --></span>
                            <input class="button blue" type="submit" name="submit" value="Войти" />
                     </form>  
                </div>
            </div><!--End Content -->
        </div><!-- End wrapp -->
        
        <div id="footerIndex">
            
        </div>

    </body>    
</html><?php }} ?>