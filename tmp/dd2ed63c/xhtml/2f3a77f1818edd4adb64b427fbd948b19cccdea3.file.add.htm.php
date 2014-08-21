<?php /* Smarty version Smarty-3.0.6, created on 2014-08-15 16:50:32
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:3114553ee80a82680e3-09570968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3a77f1818edd4adb64b427fbd948b19cccdea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category/add.htm',
      1 => 1408139420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114553ee80a82680e3-09570968',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Crear una nueva categoria principal</h2>

<form method="post" action="?id_category=<?php echo $_smarty_tpl->getVariable('id_category')->value;?>
">
	
	<div class="field">
		<label>Nombre</label>
		<input type="text" name="name" value="" />
	</div>

	<input type="submit" value="Guardar" />

</form>