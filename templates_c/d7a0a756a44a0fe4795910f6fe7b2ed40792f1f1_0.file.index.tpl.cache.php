<?php
/* Smarty version 3.1.30, created on 2022-09-23 14:18:03
  from "C:\xampp\htdocs\smarty_test\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_632da3fbadaba7_55688966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a0a756a44a0fe4795910f6fe7b2ed40792f1f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_test\\templates\\index.tpl',
      1 => 1663935480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632da3fbadaba7_55688966 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_table')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_table.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.counter.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_radios')) require_once 'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_radios.php';
$_smarty_tpl->compiled->nocache_hash = '766580055632da3fba5aba1_54978789';
?>
<html>
 <head>
 </head>
 <body>
  
<h1><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</h1>


<h4>Question No.3 </h4>


<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>


<table border="1">
<tbody>
<tr><td>1</td><td>2</td><td>3</td></tr>
<tr><td>4</td><td>5</td><td>6</td></tr>
</tbody>
</table>
<br/>

 <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

<br/>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_1_saved = $_smarty_tpl->tpl_vars['val'];
?>
<li><?php echo $_smarty_tpl->tpl_vars['val']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</li>
   <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>

<br/>


<h5>Question No 4 Counter vs Cycle</h5>
<p>Counter</p>

<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

<br/>
<p>Cycle</p>


<?php
$__section_rows_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rows']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows'] : false;
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total != 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
   <td><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
</tr>
<?php
}
}
if ($__section_rows_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = $__section_rows_0_saved;
}
?>


<h4>Question No.9</h4>


<?php echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

<br/><br/>
   
   <?php echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_radios']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


     <br/><br/>

     

 </body>
</html><?php }
}
