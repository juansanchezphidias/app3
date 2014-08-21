<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 10:33:38
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\person/editar.htm" */ ?>
<?php /*%%SmartyHeaderCode:2403153ea33d2bd7c79-78934841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a3ea208f8374fa9b772986691ca6a556b15aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\person/editar.htm',
      1 => 1407857589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2403153ea33d2bd7c79-78934841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Modificar persona</h2>

<form method="post" action="">
	
	<div class="field">
		<label>nombre</label>
		<input type="text" name="nombre" value="<?php echo $_smarty_tpl->getVariable('persona')->value->nombre;?>
" />
	</div>

	<div class="field">
		<label>apellido</label>
		<input type="text" name="apellido" value="<?php echo $_smarty_tpl->getVariable('persona')->value->apellido;?>
" />
	</div>

	<div class="field">
		<label>nacimiento</label>
		<input type="text" name="nacimiento" value="<?php echo $_smarty_tpl->getVariable('persona')->value->nacimiento;?>
" />
	</div>

	<div class="field">
		<label>email</label>
		<input type="text" name="email" value="<?php echo $_smarty_tpl->getVariable('persona')->value->email;?>
" />
	</div>

	<input type="submit" value="Guardar" />

</form>