<?php /* Smarty version Smarty-3.0.6, created on 2014-08-19 14:29:13
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category/details.htm" */ ?>
<?php /*%%SmartyHeaderCode:2613353f3a5891bca88-61167953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d39303311d8e52ed2b0e881b61a2ef4c5efe4f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category/details.htm',
      1 => 1408476545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613353f3a5891bca88-61167953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_link')) include 'C:\xampp\framework\lib\Smarty3\plugins\function.link.php';
?><h1>Destalles de la categoria</h1>

<div class="field">
	<label>Nombre:</label>
	<span><?php echo $_smarty_tpl->getVariable('category')->value->name;?>
</span>
</div>

<h2>Lista de sub categorias</h2>

<a href="add?category=<?php echo $_smarty_tpl->getVariable('category')->value->id;?>
">Crear sub categoria</a>

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
				<td><a href="edit?category=<?php echo $_smarty_tpl->getVariable('item_category')->value->id;?>
">Editar</a></td>
				<td><a href="details?category=<?php echo $_smarty_tpl->getVariable('item_category')->value->id;?>
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
<br></br>
<h2>Lista de personas</h2>

<a href="addPerson?category=<?php echo $_smarty_tpl->getVariable('category')->value->id;?>
">Agregar persona</a>

<table width="100%" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
		</tr>
	</thead>
	<tbody>
		<?php if (is_array($_smarty_tpl->getVariable('persons')->value)&&count($_smarty_tpl->getVariable('persons')->value)>0){?>
			<?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('persons')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('person')->value->nombre;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('person')->value->apellido;?>
</td>
			</tr>
			<?php }} ?>
		<?php }else{ ?>
			<tr>
				<td>Sin datos</td>
				<td></td>
			</tr>
		<?php }?>
	</tbody>
</table>
<br></br>
<a href="<?php echo smarty_function_link(array('to'=>'category'),$_smarty_tpl);?>
">Principal/</a>
<?php if (is_array($_smarty_tpl->getVariable('breadcrumbs')->value)&&count($_smarty_tpl->getVariable('breadcrumbs')->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['item_bread'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumbs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item_bread']->key => $_smarty_tpl->tpl_vars['item_bread']->value){
?>
		<a href="details?category=<?php echo $_smarty_tpl->tpl_vars['item_bread']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_bread']->value['name'];?>
/</a> 
	<?php }} ?>
<?php }?>
 