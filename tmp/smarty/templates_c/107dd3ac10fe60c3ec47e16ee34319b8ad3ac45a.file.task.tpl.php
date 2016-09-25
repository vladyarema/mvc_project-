<?php /* Smarty version Smarty-3.1.6, created on 2014-06-27 23:52:45
         compiled from "../views/key/task.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45627552953adcb8d9c3bd1-86315533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107dd3ac10fe60c3ec47e16ee34319b8ad3ac45a' => 
    array (
      0 => '../views/key/task.tpl',
      1 => 1403219998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45627552953adcb8d9c3bd1-86315533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsBreadcrumb' => 0,
    'rsTask' => 0,
    'rsKey' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53adcb8da2be1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53adcb8da2be1')) {function content_53adcb8da2be1($_smarty_tpl) {?>


<div id ="content">
    
     <a href="/">Главная </a> / <a href="/project/<?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['project']['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['project']['name'];?>
</a> / <?php if ($_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id']){?> <a href="/zapros/category/<?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['name'];?>
</a> / <?php }?> <a href="/zapros/category/<?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['category']['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['category']['name'];?>
</a> /
    <h1> Группа - "<?php echo $_smarty_tpl->tpl_vars['rsTask']->value['name'];?>
" </h1>
     
     <table class="table table-striped table-bordered">     
         <tr>
            <td>Запрос</a></td>
            <td width="30px">YD</td>
            <td width="30px">RK</td>
            <td width="30px">CPC</td>
            <td width="100px">Конкуренция</td>
            <td width="15px">IN</td>
            <td width="15px">TL</td>
            
        </tr>
     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
         <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['zapros'];?>
</a></td>
            <td width="30px"><?php echo $_smarty_tpl->tpl_vars['item']->value['YD'];?>
</td>
            <td width="30px"><?php echo $_smarty_tpl->tpl_vars['item']->value['RK'];?>
</td>
            <td width="30px"><?php echo $_smarty_tpl->tpl_vars['item']->value['CPC'];?>
</td>
            <td width="100px"><?php echo $_smarty_tpl->tpl_vars['item']->value['answer'];?>
</td>
            <td width="15px"><?php echo $_smarty_tpl->tpl_vars['item']->value['index_yd'];?>
</td>
            <td width="15px"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
            
        </tr>
     <?php } ?>
     </table>
          
          
        
</div>
 <?php }} ?>