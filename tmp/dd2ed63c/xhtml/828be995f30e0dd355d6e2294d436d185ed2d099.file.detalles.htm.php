<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 10:33:33
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\person/detalles.htm" */ ?>
<?php /*%%SmartyHeaderCode:2572653ea33cd2283e9-61010240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828be995f30e0dd355d6e2294d436d185ed2d099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\person/detalles.htm',
      1 => 1407857589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2572653ea33cd2283e9-61010240',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_link')) include 'C:\xampp\framework\lib\Smarty3\plugins\function.link.php';
?><h1>Detalles de la persona</h1>

<div class="field">
	<label>nombre</label>
	<span><?php echo $_smarty_tpl->getVariable('persona')->value->nombre;?>
</span>
</div>

<div class="field">
	<label>apellido</label>
	<span><?php echo $_smarty_tpl->getVariable('persona')->value->apellido;?>
</span>
</div>

<div class="field">
	<label>nacimiento</label>
	<span><?php echo $_smarty_tpl->getVariable('persona')->value->nacimiento;?>
</span>
</div>

<div class="field">
	<label>email</label>
	<span><?php echo $_smarty_tpl->getVariable('persona')->value->email;?>
</span>
</div>

<a href="<?php echo smarty_function_link(array('to'=>'person'),$_smarty_tpl);?>
">Regresar</a> 
<a href="<?php echo smarty_function_link(array('to'=>'person/editar','persona'=>$_smarty_tpl->getVariable('persona')->value->id),$_smarty_tpl);?>
">Editar</a>
<a href="<?php echo smarty_function_link(array('to'=>'person/borrar','persona'=>$_smarty_tpl->getVariable('persona')->value->id),$_smarty_tpl);?>
" onclick="return confirm('Seguro ?')">Borrar</a>