<?php /* Smarty version Smarty-3.1.6, created on 2014-06-19 15:22:09
         compiled from "../views/key\project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:607553a2da9ae43a08-42111783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc060bd5aca0e68cf820f0b75cf235f8b83b82f8' => 
    array (
      0 => '../views/key\\project.tpl',
      1 => 1403184127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '607553a2da9ae43a08-42111783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53a2da9aecebe',
  'variables' => 
  array (
    'rsProject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2da9aecebe')) {function content_53a2da9aecebe($_smarty_tpl) {?>

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