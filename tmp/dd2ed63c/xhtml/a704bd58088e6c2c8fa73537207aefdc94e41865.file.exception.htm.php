<?php /* Smarty version Smarty-3.0.6, created on 2014-08-12 11:29:48
         compiled from "C:\xampp\framework\interface\xhtml\exception.htm" */ ?>
<?php /*%%SmartyHeaderCode:670053ea40fca36aa1-90748375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a704bd58088e6c2c8fa73537207aefdc94e41865' => 
    array (
      0 => 'C:\\xampp\\framework\\interface\\xhtml\\exception.htm',
      1 => 1407762326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670053ea40fca36aa1-90748375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>

	.error {
		padding: 20px;
		border: 1px dotted #666;
		background: url('http://127.0.0.1/app3/interface/xhtml/img/error.png') no-repeat 10px 50%;
		padding-left: 80px;
	}

	.error h1 {
		margin: 0px;
		font-size: 20px;
	}


</style>

<div class="error">
	<h1><?php echo ucfirst(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('e')->value->getMessage()));?>
</h1>
</div>