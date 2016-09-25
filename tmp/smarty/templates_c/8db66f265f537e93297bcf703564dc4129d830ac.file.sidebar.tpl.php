<?php /* Smarty version Smarty-3.1.6, created on 2014-06-19 15:23:55
         compiled from "../views/key\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1133853a2da9ad43377-93193052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db66f265f537e93297bcf703564dc4129d830ac' => 
    array (
      0 => '../views/key\\sidebar.tpl',
      1 => 1403184234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1133853a2da9ad43377-93193052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53a2da9adbb22',
  'variables' => 
  array (
    'rsProjects' => 0,
    'item' => 0,
    'rsCategories' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2da9adbb22')) {function content_53a2da9adbb22($_smarty_tpl) {?> 
        
        <div id="sidebar">
            <div class="menu">
                <div class="menuTitle">Проекты:</div>
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li><a href="/project/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php } ?>
                    </ul>
            </div>
                    
            <?php if ($_smarty_tpl->tpl_vars['rsCategories']->value){?>      
            <div class="menu">
                    <div class="menuTitle">Рубрики:</div>
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li class="catParent"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                        
                        
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['children']){?>
                            <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                               <li class="catChildren"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                            <?php } ?>    
                        <?php }?>
                        
                    <?php } ?>
                     </ul>
            </div>
            <?php }?>
            
            <div class="menu">
                <div class="menuTitle">Финансы:</div>
                    <ul>
                        <li><a href="#">Вывод средств</a></li>
                        <li><a href="#">История операций</a></li>
                    </ul>
            </div>
            <div class="menu">
                 <div class="menuTitle">Сообщения:</div>
                    <ul>
                        <li><a href="#">Системные</a> </li>
                        <li><a href="#">От пользователя</a> </li>
                    </ul>
            </div>
        </div><?php }} ?>