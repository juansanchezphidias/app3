<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 11:33:31
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\book/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1560553ea41db595566-43708384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f0907df753d8a0247b1442c901fe3c6f5840ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\book/edit.htm',
      1 => 1407860928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560553ea41db595566-43708384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Modificar libro</h2>

<form method="post" action="">
	
	<div class="field">
		<label>Isbn</label>
		<input type="text" name="isbn" value="<?php echo $_smarty_tpl->getVariable('book')->value->isbn;?>
" />
	</div>

	<div class="field">
		<label>Title</label>
		<input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('book')->value->title;?>
" />
	</div>

	<div class="field">
		<label>Sinopsis</label>
		<input type="text" name="synopsis" value="<?php echo $_smarty_tpl->getVariable('book')->value->synopsis;?>
" />
	</div>

	<input type="submit" value="Guardar" />

</form>