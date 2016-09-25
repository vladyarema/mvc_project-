<?php /* Smarty version Smarty-3.1.6, created on 2014-07-15 11:51:53
         compiled from "../views/liricrm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192754497853c3e529d3b355-20984492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb0900c48a51f0663881bdd8fc53559f9dd2022' => 
    array (
      0 => '../views/liricrm/index.tpl',
      1 => 1405410709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192754497853c3e529d3b355-20984492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53c3e529d645e',
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c3e529d645e')) {function content_53c3e529d645e($_smarty_tpl) {?><div class="indexLogo">
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