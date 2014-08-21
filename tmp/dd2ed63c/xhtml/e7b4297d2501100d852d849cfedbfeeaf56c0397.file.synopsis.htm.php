<?php /* Smarty version Smarty-3.0.6, created on 2014-08-15 14:18:41
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category/synopsis.htm" */ ?>
<?php /*%%SmartyHeaderCode:2774053ee5d11021be0-60268628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b4297d2501100d852d849cfedbfeeaf56c0397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category/synopsis.htm',
      1 => 1407937840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774053ee5d11021be0-60268628',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_link')) include 'C:\xampp\framework\lib\Smarty3\plugins\function.link.php';
?><h1>Sinopsis del libro</h1>

<div class="field">
	<label>Titulo</label>
	<span><?php echo $_smarty_tpl->getVariable('book')->value->title;?>
</span>
</div>

<div class="field">
	<label>Sinopsis</label>
	<span><?php echo $_smarty_tpl->getVariable('book')->value->synopsis;?>
</span>
</div>


<a href="<?php echo smarty_function_link(array('to'=>'book'),$_smarty_tpl);?>
">Regresar</a> 
<a href="<?php echo smarty_function_link(array('to'=>'book/edit','book'=>$_smarty_tpl->getVariable('book')->value->id),$_smarty_tpl);?>
">Editar</a>
<a href="<?php echo smarty_function_link(array('to'=>'book/delete','book'=>$_smarty_tpl->getVariable('book')->value->id),$_smarty_tpl);?>
" onclick="return confirm('Seguro ?')">Borrar</a>