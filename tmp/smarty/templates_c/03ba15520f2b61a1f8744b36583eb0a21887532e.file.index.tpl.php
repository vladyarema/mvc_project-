<?php /* Smarty version Smarty-3.1.6, created on 2016-08-08 16:55:15
         compiled from "../views/liricrm\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2637157a89d53728fa2-13870055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03ba15520f2b61a1f8744b36583eb0a21887532e' => 
    array (
      0 => '../views/liricrm\\index.tpl',
      1 => 1405516452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2637157a89d53728fa2-13870055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a89d5374870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a89d5374870')) {function content_57a89d5374870($_smarty_tpl) {?><div class="indexLogo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/indexLogo.png" alt="LiRiCRM Logo"/>
</div>
<div class="indexForm">
     <form action="/user/login/" method="post">
            <input class="indexInput" type="text" name="email" placeholder="E-mail" size="40" />
            <input class="indexInput" type="password" name="password" placeholder="Пароль" size="40"/>   
            <span><a href="/registration/reg/">Регистрация</a> | <a href="/forgot/">Восстановление пароля</a> <br /></span>
            <input class="button blue" type="submit" name="submit" value="Войти" />
     </form>  
</div><?php }} ?>