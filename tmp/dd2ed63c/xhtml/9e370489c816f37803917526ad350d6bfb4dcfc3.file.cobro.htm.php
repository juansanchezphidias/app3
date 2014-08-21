<?php /* Smarty version Smarty-3.0.6, created on 2014-08-14 16:24:51
         compiled from "C:\xampp\htdocs\app3\interface\xhtml\cobro.htm" */ ?>
<?php /*%%SmartyHeaderCode:2350453ed29235b6c21-80186231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e370489c816f37803917526ad350d6bfb4dcfc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app3\\interface\\xhtml\\cobro.htm',
      1 => 1408051489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2350453ed29235b6c21-80186231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_image')) include 'C:\xampp\framework\lib\Smarty3\plugins\function.html_image.php';
if (!is_callable('smarty_modifier_currency')) include 'C:\xampp\framework\lib\Smarty3\plugins\modifier.currency.php';
?>
<style type="text/css">
	.span0{ font-family: Verdana; font-size: 13px; font-weight: bold; line-height: 30px; white-space: nowrap;}
	.span1{ font-family: Verdana; font-size: 12px; line-height: 20px;}
	.pp0{ font-weight: bold; font-size: 11px; font-family: Verdana; line-height: 14px; padding-left: 1px; }
	.pp1{ font-weight: bold; font-size: 13px; font-family: Verdana; line-height: 16px; text-align: center; padding-right: 27px;  }
	.pp2{ font-weight: bold; font-size: 11px; font-family: Verdana; line-height: 14px; padding-left: 1px;  text-align: center; }
	.pp3{ font-size: 12px;  text-align: center; font-family: Verdana; line-height: 14px; }
	.pp4{ font-weight: bold; font-size: 10px;   font-family: Verdana; line-height: 14px; }
	.td0{ border-left: #000000 1px solid; border-top-width: 1px; border-top-style: solid; border-bottom-width: 1px; border-bottom-style: solid;vertical-align: bottom;width:40%;  height: 24px; }
	.td1{ border-right-width: 1px; border-right-style: solid; border-top-width: 1px; border-top-style: solid; border-bottom-width: 1px; border-bottom-style: solid; width: 60%;  vertical-align: bottom; height: 24px;}
	.td2{  border-top-width: 1px; border-top-style: solid; border-bottom-width: 1px; border-bottom-style: solid; width: 9%;  vertical-align: bottom; height: 24px;}
	.td3{  border-left: #000000 1px solid;  border-top-width: 1px; border-top-style: solid; border-bottom-width: 1px; border-bottom-style: solid; width: 7%;  vertical-align: bottom; height: 24px;}
	.td4{ border-right-width: 1px; border-right-style: solid;  border-top-width: 1px; border-top-style: solid; border-bottom-width: 1px; border-bottom-style: solid; width: 10%;  vertical-align: bottom; height: 24px;  text-align: center; }
	.td5{  border-left: #000000 1px solid;  width: 30%;  vertical-align: bottom; height: 20px;}
	.td6{ border-right-width: 1px; border-right-style: solid; width: 30%;  vertical-align: bottom; height: 20px; }



	div.principal {
		font-family: Verdana;
	}

	div.principal > * {
		float: left;
	}

	div.principal .image {
		width: 30%;
	}

	div.principal .header {
		width: 44%;
	}

	div.principal .information {
		width: 26%;
	}


	div.header p {
		margin: 0 0 5px 0;
		font-size: 14px;
	}

	div.header p.important {
		font-weight: bold;
	}

	div.content {
		font-family: Verdana;
	}
	div.content > * {
		float: left;
	}
	div.note span {
		font-size: 12px;
		font-family: Verdana;
		line-height: 30px; 
		padding-left: 1px;
	}

	div.principal .title {
		width: 100%;
	}

	div.points {
		height:1%;
		float:left;
		width:100%; 
		border-top-width: 1px;
		border-top-style:  dashed; 
	}

	div.barcode {
		font-family: Verdana;
	}

	div.barcode > * {
		float: left;
	}

	div.barcode .middle {
		width: 50%;
		text-align: center;
	}
	div.barcode .footer {
		width: 100%;
		text-align: center;
	}
	div.barcode .footer {
		width: 100%;
		text-align: center;
		float: left;
	}
	div.barcode .footer  > * {
		float: left;
	}

	div.barcode .footer .copySide {
		width: 17%;
		text-align: center;
	}

	div.barcode .footer .copyMiddle {
		width: 66%;
		text-align: center;
	}

	div.barcode span {
		font-weight: bold;
		font-size: 11px;
		font-family: Verdana;
		line-height: 14px; 
		padding-left: 1px;
	}

	div.removable {
		font-family: Verdana;
	}

	div.removable > * {
		float: left;
	}

	div.removable .details {
		width: 30%;
		text-align: center;
	}
	div.removable .figure {
		width: 70%;
		text-align: center;
	}
	div.removable .figure .middle {
		width: 50%;
		text-align: center;
		float: left;
	}
	div.removable .figure .entire {
		width: 100%;
		text-align: center;
		float: left;
	}
	div.removable span {
		font-weight: bold;
		font-size: 11px;
		font-family: Verdana;
		line-height: 14px; 
		padding-left: 1px;
		text-align: center;
		width: 100%;
	}
	table {
		width: 100%;
		font-family: Verdana;
		border: 1px solid black;		
		font-size: 11px;
	}

	table td.emphasis {
		background-color: #999;
	}


	table.grilla td {
		font-weight: bold;
		padding: 3px;
		border: 1px solid black;
	}

	table.grilla td:first-child {
		width: 30%;
		white-space: nowrap;
	}

	table.grilla td:nth-child(2) {
		width: 70%;
	}

	table.grilla span {
		margin-right: 30px;
	}



	table.encabezado {
		border: 2px  solid black;
		border-bottom: 0px solid; 
	}

	table.encabezado td {
		text-align: center;
		padding: 3px;
	}

	table.encabezado td.label {
		font-weight: bold;
	}

	table.debit {
		border: 2px solid black;
	}
	table.debit th {
		border-bottom: 2px solid; 
	}

	table.debit th:first-child {
		border-left:  1px solid;
	}

	table.debit th:nth-child(2) {
		border-right:  2px solid;
	}
	table.debit td {
		padding-left:10%;
		font-family: Verdana;
		padding-top:1px;
		padding-bottom:1px;
	}
	table.debit td:nth-child(2) {
		border-right:  2px solid;
	}

</style>



<div class="principal">

	<div class="image">
		<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/small_logo.png'),$_smarty_tpl);?>

	</div>

	<div class="header">
		<p class="important">British International School</p>
		<p>Nit. 800.197.143-2</p>
		<p>Km 6 Antigua Via Pto Colombia-PBX. 3598699</p>
		<p class="important">Recibo De Pago</p>
	</div>

	<div class="information">
		<table cellpadding="0" cellspacing="0" class="grilla">
			<tbody>
				<tr>
					<td>Banco</td>
					<td>Bancolombia</td>
				</tr>
				<tr>
					<td>Cuenta</td>
					<td>083-197143-08</td>
				</tr>
				<tr>
					<td>Ref Pago</td>
					<td>*<?php echo $_smarty_tpl->getVariable('debit')->value->reference;?>
*</td>
				</tr>
				<tr>
					<td>Mes</td>
					<td><?php echo $_smarty_tpl->getVariable('debit')->value->month;?>
</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

<div >
		<table cellpadding="0" cellspacing="0" class="encabezado">
			<tbody>
				<tr>
					<td class="label">Codigo</td>
					<td class="emphasis"><?php echo $_smarty_tpl->getVariable('student')->value->code;?>
</td>
					<td><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('student')->value->first_name, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('student')->value->first_name,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('student')->value->first_name));?>
 <?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('student')->value->last_name, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('student')->value->last_name,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('student')->value->last_name));?>
</td>
					<td class="label">Curso</td>
					<td><?php echo $_smarty_tpl->getVariable('student')->value->course;?>
</td>
					<td class="label">Fecha</td>
					<td><?php echo $_smarty_tpl->getVariable('debit')->value->date;?>
</td>
				</tr>
			</tbody>
		</table>
		<table cellpadding="0" cellspacing="0" class="debit">
			<thead>
				<tr>
					<th>Mes</th>
					<th>Valor</th>
					<th>Fecha</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<?php $_smarty_tpl->tpl_vars['line'] = new Smarty_variable(0, null, null);?>
				<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('debit')->value->interest, null, null);?>
				<?php  $_smarty_tpl->tpl_vars['concept'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('debit')->value->concepts; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['concept']->key => $_smarty_tpl->tpl_vars['concept']->value){
?>
					<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+$_smarty_tpl->getVariable('concept')->value->value, null, null);?>
					<tr>
						<td><?php echo $_smarty_tpl->getVariable('concept')->value->name;?>
</td>
						<td><?php echo smarty_modifier_currency($_smarty_tpl->getVariable('concept')->value->value);?>
</td>
						<?php if ($_smarty_tpl->getVariable('line')->value==1){?>
							<td></td>
							<td><?php echo smarty_modifier_currency(13698877);?>
</td>
						<?php }elseif($_smarty_tpl->getVariable('line')->value==3){?>
							<td ></td>
							<td>_____________</td>
						<?php }elseif($_smarty_tpl->getVariable('line')->value==5){?>
							<td>2014/05/10</td>
							<td><?php echo smarty_modifier_currency(13698877);?>
</td>
						<?php }elseif($_smarty_tpl->getVariable('line')->value==7){?>
							<td>2014/05/30</td>
							<td><?php echo smarty_modifier_currency(13730201);?>
</td>
						<?php }?>
					</tr>
					<?php $_smarty_tpl->tpl_vars['line'] = new Smarty_variable($_smarty_tpl->getVariable('line')->value+1, null, null);?>
				<?php }} ?>
			</tbody>
		</table>		
</div>
<div class="note">
	<span  ><b>Nota:</b> puede cancelar este recibo por www.britishschool.edu.co opcion pagos online</span>
</div>
<div class="barcode">
	<div class="middle">
		<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/barcode1.png'),$_smarty_tpl);?>
<br>
		<pre><span >Valor al Primer Corte         2014/05/10</span></pre>
	</div>
	<div  class="middle">
		<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/barcode2.png'),$_smarty_tpl);?>
<br>
		<pre><span >Valor al Segundo Corte        2014/05/30</span></pre>
	</div>
	<div  class="footer" >
		<div  class="copySide"><span >Copia Estudiante</span> </div>
		<div  class="copyMiddle" ><span >Pague Unicamente En Efectivo Sin Timbre de Caja No Tiene Validez</span></div>
		<div  class="copySide"><span >Copia Estudiante</span></div>
	</div>
</div>
 
<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, null);?>
<?php while ($_smarty_tpl->getVariable('counter')->value<=2){?>
<div class="points"> </div>
 
 <div  class="removable">
	<div  class="details">


		<table cellpadding="0" cellspacing="0" class="grilla">
			<tbody>
				<tr>
					<td><span>Banco</span> Bancolombia</td>
				</tr>
				<tr>
					<td><span>Cuenta</span> 083-197143-08</td>
				</tr>
				<tr>
					<td><span>Ref Pago</span> *<?php echo $_smarty_tpl->getVariable('debit')->value->reference;?>
*</td>
				</tr>
				<tr>
					<td><span>Codigo</span> <?php echo $_smarty_tpl->getVariable('student')->value->code;?>
</td>
				</tr>
				<tr>
					<td><span><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('student')->value->first_name, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('student')->value->first_name,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('student')->value->first_name));?>
 <?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('student')->value->last_name, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('student')->value->last_name,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('student')->value->last_name));?>
</span></td>
				</tr>
				<tr>
					<td>
					<span>Fecha limite</span>
					
					<?php if ($_smarty_tpl->getVariable('counter')->value===1){?> 
						2014/05/30
					<?php }else{ ?> 
						2014/05/10
					<?php }?>
					
					</td>
				</tr>
				<tr>
					<td>
					<span>Valor a Pagar</span>
					<?php if ($_smarty_tpl->getVariable('counter')->value===1){?> 
						<?php echo smarty_modifier_currency(13730201);?>

					<?php }else{ ?> 
						<?php echo smarty_modifier_currency(13698877);?>

					<?php }?>
					</td>
				</tr>
			</tbody>
		</table>


	</div>
	<div  class="figure">
			<div class="middle">
			<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/small_logo.png'),$_smarty_tpl);?>

			</div>
			<div class="middle">
				<span> Valor al 
					<?php if ($_smarty_tpl->getVariable('counter')->value===2){?> 
						Primer
					<?php }else{ ?> 
						Segunto
					<?php }?> 
					
					 Corte<br></br>Copia Banco<br>
				</span>
			</div>
			<div class="entire">
				<?php if ($_smarty_tpl->getVariable('counter')->value===1){?> 
					<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/barcode1.png'),$_smarty_tpl);?>

				<?php }else{ ?> 
					<?php echo smarty_function_html_image(array('file'=>'/app3/interface/xhtml/debit/img/barcode2.png'),$_smarty_tpl);?>

				<?php }?>
			</div>
	</div>
	<span >Pague Unicamente En Efectivo Sin Timbre de Caja No Tiene Validez<br></span>
</div>
<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->getVariable('counter')->value+1, null, null);?>
<?php }?>




