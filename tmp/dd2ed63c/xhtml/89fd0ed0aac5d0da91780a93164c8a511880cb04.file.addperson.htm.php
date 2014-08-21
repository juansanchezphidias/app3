<?php /* Smarty version Smarty-3.0.6, created on 2014-08-16 12:16:49
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\category/addperson.htm" */ ?>
<?php /*%%SmartyHeaderCode:596353ef9201655262-41805597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89fd0ed0aac5d0da91780a93164c8a511880cb04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\category/addperson.htm',
      1 => 1408209354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596353ef9201655262-41805597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Agrega una persona a la categoria</h2>

<form method="post" action="?category=<?php echo $_smarty_tpl->getVariable('id_category')->value;?>
">
	
	<div class="field">
		<label>Persona</label>
		<select name='person'>
			<?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('persons')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
?>
			 <option  value="<?php echo $_smarty_tpl->getVariable('person')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('person')->value->nombre;?>
 <?php echo $_smarty_tpl->getVariable('person')->value->apellido;?>
</option>
			<?php }} ?>
		</select>
	</div>

	<input type="submit" value="Guardar" />

</form>