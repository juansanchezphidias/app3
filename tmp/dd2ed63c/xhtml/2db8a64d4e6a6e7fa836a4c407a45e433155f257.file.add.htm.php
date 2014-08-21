<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 11:39:10
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\book/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:1154453ea432ed3b272-29616837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2db8a64d4e6a6e7fa836a4c407a45e433155f257' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\book/add.htm',
      1 => 1407861317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154453ea432ed3b272-29616837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Crear un libro nuevo</h2>

<form method="post" action="">
	
	<div class="field">
		<label>Isbn</label>
		<input type="text" name="isbn" value="" />
	</div>

	<div class="field">
		<label>Titulo</label>
		<input type="text" name="title" value="" />
	</div>

	<div class="field">
		<label>Sinopsis</label>
		<input type="text" name="synopsis" value="" />
	</div>


	<input type="submit" value="Guardar" />

</form>