<?php /* Smarty version Smarty-3.1.6, created on 2016-09-21 21:24:53
         compiled from "../views/project\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:940157a89f9fe33845-02314132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3af4deb3e7cf83708fa1aa293a5fb925adae21' => 
    array (
      0 => '../views/project\\index.tpl',
      1 => 1474485890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940157a89f9fe33845-02314132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a89f9fe810e',
  'variables' => 
  array (
    'message' => 0,
    'result' => 0,
    'res' => 0,
    'rs' => 0,
    'outgo' => 0,
    'value' => 0,
    'a' => 0,
    'income' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a89f9fe810e')) {function content_57a89f9fe810e($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <header>Шапка сайта</header>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <?php if ($_smarty_tpl->tpl_vars['message']->value['status']==1){?>
                <div class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value['status']==1){?>
                <div class="error"><?php echo $_smarty_tpl->tpl_vars['result']->value['message'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==1){?>
                <div class="error"><?php echo $_smarty_tpl->tpl_vars['res']->value['message'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rs']->value['status']==1){?>
                <div class="error"><?php echo $_smarty_tpl->tpl_vars['rs']->value['message'];?>
</div>
            <?php }?>
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Доход</a></li>
                    <li><a href="#tab-2" data-toggle="tab">Расход</a></li>
                </ul>
            </div>


            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1"> 
                    <form action="/" class="text-center" method="post">
                        <input type="text" name="prise" placeholder="Цена">
                        <select name="group">
                            <option value='0' selected="selected">Выберите группу</option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['outgo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                <option name='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                            <?php } ?>
                        </select>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">добавить группу</button>
                        <input type="text" name="keywords" placeholder="Ключевые слова">
                        <button name="button" class="btn btn-info">Добавить</button>
                        <input type="hidden" name="id_group" value="1" />
                    </form>
                    <div class="col-sm-1">
                        <p>№</p>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value+1; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
                        <?php } ?>
                    </div>
                    <div class="col-sm-2">
                        <p>Сумма</p>
                    </div>
                    <div class="col-sm-2">
                        <p>Группа</p>
                    </div>
                    <div class="col-sm-2">
                        <p>Дата</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Подгруппа</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <form action="/" class="text-center" method="post">
                        <input type="text" name="prise" placeholder="Цена">
                        <select name="group">
                            <option value='0' selected="selected">Выберите группу</option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['income']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                <option name='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                            <?php } ?>

                        </select>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal-1">Добавить группу</button>
                        <input type="text" name="keywords" placeholder="Ключевые слова">
                        <button name="button" class="btn btn-info">Добавить</button>
                        <input type="hidden" name="id_group" value="2">
                    </form>
                </div>
                <!-- содержание всплывающего окна --> 
                <div class="modal fade" id="modal-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h4 class="modal-title">Новая группа</h4>
                            </div>
                            <div class="modal-body">
                                <form action="/" method="post" class="display_block">
                                    <input type="text" name="name" placeholder="Имя группы">
                                    <input type="text" name="description" placeholder="Описание группы">
                                    <select name="group">
                                        <option selected="selected" value="0">Выберите группу</option>
                                        <option name="0" value="1">Доход</option>
                                        <option name="1" value="2">Расход</option>
                                    </select>
                                    <input name="submit" type="submit" class="btn btn-success" value="добавить группу">
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">отмена</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- конец всплывающего окна -->
            </div>

        </div>
        <div class="col-sm-1"></div>

    </div>
</div>
<?php }} ?>