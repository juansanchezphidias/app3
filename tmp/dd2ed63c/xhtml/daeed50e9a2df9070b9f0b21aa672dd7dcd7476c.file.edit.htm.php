<?php /* Smarty version Smarty-3.0.6, created on 2014-08-17 11:47:02
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2633353f0dc868e88a9-89955667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daeed50e9a2df9070b9f0b21aa672dd7dcd7476c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category/edit.htm',
      1 => 1408294020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2633353f0dc868e88a9-89955667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Modificar categoria</h2>

<form method="post" action="">
	
	<div class="field">
		<label>Nombre</label>
		<input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('category')->value->name;?>
" />
	</div>
	<input type="submit" value="Guardar" />

</form>