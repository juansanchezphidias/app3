<?php /* Smarty version Smarty-3.0.6, created on 2014-08-16 08:55:03
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\person.htm" */ ?>
<?php /*%%SmartyHeaderCode:909753ef62b7be2b09-15045705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e9d82555525a551f64269d53113c1c1ea1dc9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\person.htm',
      1 => 1407937840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909753ef62b7be2b09-15045705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Esta es una lista de personas</h2>

<a href="person/nueva">Crear persona</a>

<table width="100%" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td><a href="?order=id">id</a></td>
			<td><a href="?order=nombre">nombre</a></td>
			<td><a href="?order=apellido">apellido</a></td>
			<td><a href="?order=nacimiento">nacimiento</a></td>
			<td><a href="?order=email">email</a></td>
			<td></td>
			<td></td>
		</tr>
	</thead>

	<tbody>
		<?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value){
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('persona')->value->id;?>
</td>
			<td><a href="person/detalles?persona=<?php echo $_smarty_tpl->getVariable('persona')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('persona')->value->nombre;?>
</a></td>
			<td><?php echo $_smarty_tpl->getVariable('persona')->value->apellido;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('persona')->value->nacimiento;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('persona')->value->email;?>
</td>

			<td><a href="person/editar?persona=<?php echo $_smarty_tpl->getVariable('persona')->value->id;?>
">Editar</a></td>
			<td><a href="person/borrar?persona=<?php echo $_smarty_tpl->getVariable('persona')->value->id;?>
" onclick="return confirm('Esta seguro?')" >Borrar</a></td>
		</tr>
		<?php }} ?>
	</tbody>
</table>