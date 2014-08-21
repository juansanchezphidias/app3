<?php /* Smarty version Smarty-3.0.6, created on 2014-08-15 09:22:21
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\book.htm" */ ?>
<?php /*%%SmartyHeaderCode:3255853ee179d002b20-07330101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ab86343ecba0b1fabd560b83839224810f95cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\book.htm',
      1 => 1407937840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255853ee179d002b20-07330101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Lista de libros</h2>

<a href="book/add">Crear libro</a>

<table width="100%" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td><a href="?order=id">Id</a></td>
			<td><a href="?order=isbn">Isbn</a></td>
			<td><a href="?order=title">Titulo</a></td>
			<td>Sinopsis</td>
			<td></td>
			<td></td>
		</tr>
	</thead>

	<tbody>
		<?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('books')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value){
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('book')->value->id;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('book')->value->isbn;?>
</td>
			<td><a href="book/synopsis?book=<?php echo $_smarty_tpl->getVariable('book')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('book')->value->title;?>
</a></td>
			<td><?php echo $_smarty_tpl->getVariable('book')->value->synopsis;?>
</td>

			<td><a href="book/edit?book=<?php echo $_smarty_tpl->getVariable('book')->value->id;?>
">Editar</a></td>
			<td><a href="book/delete?book=<?php echo $_smarty_tpl->getVariable('book')->value->id;?>
" onclick="return confirm('Esta seguro?')" >Borrar</a></td>
		</tr>
		<?php }} ?>
	</tbody>
</table>