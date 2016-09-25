<?php /* Smarty version Smarty-3.1.6, created on 2014-06-27 23:45:37
         compiled from "../views/key/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29069716253adc9e13ad564-75405892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0969e5eb122bb57698741938cf37dce6d3c5f85e' => 
    array (
      0 => '../views/key/category.tpl',
      1 => 1403219975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29069716253adc9e13ad564-75405892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsBreadcrumb' => 0,
    'rsCategory' => 0,
    'importKey' => 0,
    'sumTaskByStatusInModeration' => 0,
    'sumTaskByStatusReWork' => 0,
    'templateWebPath' => 0,
    'rsGroupTask' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53adc9e1524b3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53adc9e1524b3')) {function content_53adc9e1524b3($_smarty_tpl) {?>

<div id="content">
    
  <div id="breadcrumb"><a href="/main/">Главная </a> / <a href="/project/<?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['project']['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['project']['name'];?>
</a> / <?php if ($_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id']){?> <a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['name'];?>
</a> / <?php }?> <?php echo $_smarty_tpl->tpl_vars['rsBreadcrumb']->value['category']['name'];?>
 </div>
    
   <!-- <?php if (!$_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id']){?> <h1> Категория  - "<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
" </h1> <?php }?> -->
   <!-- <?php if ($_smarty_tpl->tpl_vars['rsBreadcrumb']->value['parent']['id']){?> <h1> Подкатегория  - "<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
" </h1> <?php }?> -->
    
    
    <?php if ($_smarty_tpl->tpl_vars['importKey']->value){?>
       <?php echo $_smarty_tpl->tpl_vars['importKey']->value['message'];?>

    <?php }?>
   
   <?php if ($_smarty_tpl->tpl_vars['importKey']->value==null){?>
   
       <div class="categoryStat">
           <h2>Статистика по выбранному разделу</h2>
        <ul>
            <li><span class="label AddToWork">На проверке: <?php echo $_smarty_tpl->tpl_vars['sumTaskByStatusInModeration']->value;?>
</span></li>
            <li><span class="label ReWork">На доработке: <?php echo $_smarty_tpl->tpl_vars['sumTaskByStatusReWork']->value;?>
</span></li>
        </ul>
           
       </div>    
       <div class="categoryimport">
            <h2>Добавить новую группу ключей</h2>
            <form method="post" action="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/" enctype="multipart/form-data">
             <table>
                <tr>            
                    <td align="right">
                        <input type="hidden" name="categoryId" value="<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
" />
                        <input type="hidden" name="projectId" value="<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['project_id'];?>
" />
                    </td>
                    <td><input type="file" name="file" /></td>
                    <td><input class="button gray" img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/images/plus.png"  type="submit" name="addNewGroup" value="Добавить" /></td>
                </tr>
             </table>
            </form>
        </div>
   <?php }?>

        
    <?php if (!$_smarty_tpl->tpl_vars['rsGroupTask']->value){?>
              <div class="info divCenter">В данном разделе нет групп</div>
     <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['rsGroupTask']->value){?> 
        
        <form action="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/" method="post">
        <table class="table table-striped table-bordered">
            <tr>
              <td width="12px"> </td>
              <td>Задание </td>
              <td width="30px">YD</td>
              <td width="15px">TL</td>
              <td width="80px">Статус</td>            
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsGroupTask']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td width="12px"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!="1"&&$_smarty_tpl->tpl_vars['item']->value['status']!="2"){?> disabled <?php }?> name="task[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td> 
                <td><a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!="1"&&$_smarty_tpl->tpl_vars['item']->value['status']!="2"){?> class="linkdone"<?php }?> href="/task/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                <td width="30px"><?php echo $_smarty_tpl->tpl_vars['item']->value['yd'];?>
</td>
                <td width="15px"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                <td width="80px"><?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='1'){?><span class="label AddToWork" >На проверке</span></a><?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='2'){?><span class="label ReWork" >На доработке</span></a><?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!='1'&&$_smarty_tpl->tpl_vars['item']->value['status']!='2'){?><span class="label done" >Проверено</span></a><?php }?></td>         
            </tr>
            <?php } ?>
            
         </table>
            <input class="button gray" type="submit" name="submit" value="Удалить">
        </form>
    
    <?php }?>
    

</div>

<?php }} ?>