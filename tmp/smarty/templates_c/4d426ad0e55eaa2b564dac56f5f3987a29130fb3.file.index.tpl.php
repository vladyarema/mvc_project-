<?php /* Smarty version Smarty-3.1.6, created on 2014-06-19 14:42:04
         compiled from "../views/key\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2052953a2da9c4adb37-19445995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d426ad0e55eaa2b564dac56f5f3987a29130fb3' => 
    array (
      0 => '../views/key\\index.tpl',
      1 => 1403175711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052953a2da9c4adb37-19445995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53a2da9c53663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2da9c53663')) {function content_53a2da9c53663($_smarty_tpl) {?>

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
                     <form action="/user/login/" method="post">
                            <input class="indexInput" type="text" name="email" placeholder="E-mail" size="40" />
                            <input class="indexInput" type="password" name="password" placeholder="Пароль" size="40"/>   
                            <span><a href="/registration/reg/">Регистрация</a> | <a href="/user/forgot/">Восстановление пароля</a> <br /></span>
                            <input class="button blue" type="submit" name="submit" value="Войти" />
                     </form>  
                </div>
            </div><!--End Content -->
        </div><!-- End wrapp -->
        
        <div id="footerIndex">
            
        </div>

    </body>    
</html><?php }} ?>