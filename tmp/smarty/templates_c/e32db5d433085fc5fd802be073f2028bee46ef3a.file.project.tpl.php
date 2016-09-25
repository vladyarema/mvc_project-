<?php /* Smarty version Smarty-3.1.6, created on 2014-06-27 23:37:45
         compiled from "../views/key/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156211864053adc809894123-57859323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e32db5d433085fc5fd802be073f2028bee46ef3a' => 
    array (
      0 => '../views/key/project.tpl',
      1 => 1403184127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156211864053adc809894123-57859323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53adc8098c2e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53adc8098c2e1')) {function content_53adc8098c2e1($_smarty_tpl) {?>

<div id ="content">
    <h1>  Страница Проекта  - <b><?php echo $_smarty_tpl->tpl_vars['rsProject']->value['name'];?>
</b> </h1>
    
    <div class="projectAddNew">
        <h2>Создание нового раздела</h2>
        
    </div>
    
    <div class="projectDescription">
        <h2>Описание проекта</h2>
        <?php echo $_smarty_tpl->tpl_vars['rsProject']->value['description'];?>

    </div>
    
    
</div>

<?php }} ?>