<?php /* Smarty version Smarty-3.0.6, created on 2014-08-19 14:31:38
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category.htm" */ ?>
<?php /*%%SmartyHeaderCode:337053f3a61a3b9bd8-31247135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702d82fe6f081b0172702c84f6636f4a4607d493' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category.htm',
      1 => 1408476609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337053f3a61a3b9bd8-31247135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Lista de categorias</h2>

<a href="category/add">Crear categoria</a>

<table width="100%" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td><a href="?order=id">Id</a></td>
			<td><a href="?order=name">Nombre</a></td>
			<td>Cantidad personas</td>
			<td></td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php if (is_array($_smarty_tpl->getVariable('categories')->value)&&count($_smarty_tpl->getVariable('categories')->value)>0){?>
			<?php  $_smarty_tpl->tpl_vars['item_category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item_category']->key => $_smarty_tpl->tpl_vars['item_category']->value){
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('item_category')->value->id;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('item_category')->value->name;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('item_category')->value->amount;?>
</td>
				<td><a href="category/edit?category=<?php echo $_smarty_tpl->getVariable('item_category')->value->id;?>
">Editar</a></td>
				<td><a href="category/details?category=<?php echo $_smarty_tpl->getVariable('item_category')->value->id;?>
"  >Subcategorias</a></td>
			</tr>
			<?php }} ?>
		<?php }else{ ?>
			<tr>
				<td>Sin datos</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		<?php }?>
	</tbody>
</table>
</table>