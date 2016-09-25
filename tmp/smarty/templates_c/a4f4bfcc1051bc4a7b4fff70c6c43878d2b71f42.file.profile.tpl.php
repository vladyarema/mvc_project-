<?php /* Smarty version Smarty-3.1.6, created on 2014-06-19 17:32:02
         compiled from "../views/key\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2710853a302725a7d62-76398552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f4bfcc1051bc4a7b4fff70c6c43878d2b71f42' => 
    array (
      0 => '../views/key\\profile.tpl',
      1 => 1403096933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2710853a302725a7d62-76398552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53a3027265efe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a3027265efe')) {function content_53a3027265efe($_smarty_tpl) {?>
<div id="content">
<h1>Регистрационные данные</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <td align="right">ФИО:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['patronymic'];?>
</td>
        </tr>
        <tr>
            <td align="right">E-mail:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
        </tr>
        <tr>
            <td align="right">WMR:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['wmr'];?>
</td>
        </tr>
        <tr>
            <td align="right">Skype:</td>
            <td><input class="regInput" name="skype" type="text" size="25" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['skype'];?>
" /></td>
        </tr>
        <tr>
            <td align="right">ICQ:</td>
            <td><input class="regInput" name="icq" type="text" size="25" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['icq'];?>
" /></td>
        </tr>
        <tr>
            <td align="right">Мобильный Телефон:</td>
            <td><input class="regInput" name="phone" type="text" size="25" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" /></td>
        </tr>
        <?php if (($_smarty_tpl->tpl_vars['user']->value['group']=='1'||$_smarty_tpl->tpl_vars['user']->value['group']=='4')){?>
        <tr>
            <td align="right">Партнерский код: </td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['refCode'];?>
</td>
        </tr>
        <?php }?>
    </table>
        
<form action="#" method="post">    
   <table class="table table-striped table-bordered">
        <tr>
            <td align="right">Пароль:</td>
            <td><input class="regInput" name="password1" type="text" size="25" value="" /></td>
        </tr>
        <tr>
            <td align="right">Повторить пароль:</td>
            <td><input class="regInput" name="password2" type="text" size="25" value="" /></td>
        </tr>
        <tr>
            <td align="right"></td>
            <td><input class="button blue" type="submit" name="submit" value="Обновить" /></td>
        </tr>
   </table>    
</form>
        
 
</div><?php }} ?>