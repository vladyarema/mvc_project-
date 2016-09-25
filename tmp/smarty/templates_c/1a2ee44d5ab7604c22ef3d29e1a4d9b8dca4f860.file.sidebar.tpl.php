<?php /* Smarty version Smarty-3.1.6, created on 2014-06-27 23:37:42
         compiled from "../views/key/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150703282153adc806ee9fd9-21604066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2ee44d5ab7604c22ef3d29e1a4d9b8dca4f860' => 
    array (
      0 => '../views/key/sidebar.tpl',
      1 => 1403184234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150703282153adc806ee9fd9-21604066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProjects' => 0,
    'item' => 0,
    'rsCategories' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53adc806f2ea7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53adc806f2ea7')) {function content_53adc806f2ea7($_smarty_tpl) {?> 
        
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