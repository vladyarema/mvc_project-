<?php /* Smarty version Smarty-3.1.6, created on 2014-07-15 11:52:02
         compiled from "../views/liricrm/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107900982953c4dda21b1b52-03244056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a6c3cf97403b240746346cd260dcaf361a9292' => 
    array (
      0 => '../views/liricrm/login.tpl',
      1 => 1405346600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107900982953c4dda21b1b52-03244056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53c4dda21dc46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c4dda21dc46')) {function content_53c4dda21dc46($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['resData']->value['success']==0){?>
    
    <?php echo $_smarty_tpl->tpl_vars['resData']->value['message'];?>

    
<?php }?>
<?php }} ?>