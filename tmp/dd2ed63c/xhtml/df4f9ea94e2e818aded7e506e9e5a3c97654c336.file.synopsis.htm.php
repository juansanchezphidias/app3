<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 11:40:11
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\book/synopsis.htm" */ ?>
<?php /*%%SmartyHeaderCode:1316953ea436bdf4360-96777043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4f9ea94e2e818aded7e506e9e5a3c97654c336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\book/synopsis.htm',
      1 => 1407861607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1316953ea436bdf4360-96777043',
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