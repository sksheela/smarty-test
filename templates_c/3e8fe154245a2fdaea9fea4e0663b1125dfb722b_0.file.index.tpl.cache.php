<?php
/* Smarty version 3.1.30, created on 2022-09-23 12:36:02
  from "C:\xampp\htdocs\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_632d8c12e42d05_05072317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8fe154245a2fdaea9fea4e0663b1125dfb722b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index.tpl',
      1 => 1663929339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d8c12e42d05_05072317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\templates_c\\3e8fe154245a2fdaea9fea4e0663b1125dfb722b_0.file.index.tpl.cache.php',
    'uid' => '3e8fe154245a2fdaea9fea4e0663b1125dfb722b',
    'call_name' => 'smarty_template_function_menu_1067927297632d8c12d1c291_67601790',
  ),
));
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_spacify')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_mb_wordwrap')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\shared.mb_wordwrap.php';
$_smarty_tpl->compiled->nocache_hash = '1067927297632d8c12d1c291_67601790';
?>
<html>
 <head>
 </head>
 <body>
   <h1>Name : <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
</h1>
   


Hello <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
, glad to see you can make it.
<br />

This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.

This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.<br/><br/>
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br /><br/><br/>

<?php echo $_smarty_tpl->tpl_vars['Contact']->value[0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contact']->value[1];?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contact']->value[2][0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contact']->value[2][1];?>
<br /><br/>

<?php echo @constant('MY_CONST_VAL');?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>
<br/><br/>

<?php echo ($_smarty_tpl->tpl_vars['articleTitle2']->value).(' yesterday.');?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle3']->value;?>

<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['articleTitle3']->value, $tmp);?>

<?php echo mb_strlen($_smarty_tpl->tpl_vars['articleTitle3']->value, 'UTF-8');?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle4']->value;?>

<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['articleTitle4']->value, $tmp)+1);?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle5']->value;?>

<?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['articleTitle5']->value, $tmp);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle6']->value;?>

<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['articleTitle6']->value, $tmp);?>
<br/><br/>


<?php echo smarty_modifier_date_format(time());?>

<?php echo smarty_modifier_date_format(time(),"%D");?>

<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);?>
<br/><br/>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articleTitle7']->value)===null||$tmp==='' ? 'no title' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myTitle']->value)===null||$tmp==='' ? 'no title' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? 'No email address available' : $tmp);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle7']->value;?>

'Stiff Opposition Expected to Casketless Funeral Plan'

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle7']->value, ENT_QUOTES, 'UTF-8', true);?>

&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle7']->value, ENT_QUOTES, 'UTF-8', true);?>
    
&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;

<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle7']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 
&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;

<a href="?title=<?php echo rawurlencode($_smarty_tpl->tpl_vars['articleTitle7']->value);?>
">click here</a>
<a
href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a>

<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['articleTitle7']->value);?>

\'Stiff Opposition Expected to Casketless Funeral Plan\'

<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hexentity");?>
</a>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, 'mail');?>
    
<a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a>

<?php echo smarty_modifier_escape('mail@example.com', 'mail');?>

smarty [AT] example [DOT] com<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle9']->value;?>


<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['articleTitle9']->value);?>


<?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['articleTitle9']->value);?>


<?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['articleTitle9']->value);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle10']->value;?>

<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle10']->value, 'UTF-8');?>
<br/><br/>

<?php echo nl2br($_smarty_tpl->tpl_vars['articleTitle11']->value);?>





<?php echo $_smarty_tpl->tpl_vars['articleTitle12']->value;?>

<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle12']->value,"/[\r\t\n]/"," ");?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle13']->value;?>

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle13']->value,'Garden','Vineyard');?>

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle13']->value,' ','   ');?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle14']->value;?>

<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle14']->value);?>

<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle14']->value,"^^");?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['number']->value;?>

<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>

<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle15']->value;?>

<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['articleTitle15']->value);?>

<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['articleTitle15']->value);?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle16']->value;?>

<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['articleTitle16']->value);?>
 
<?php echo strip_tags($_smarty_tpl->tpl_vars['articleTitle16']->value);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle17']->value;?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30,'');?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30,"---");?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30,'',true);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30,"...",true);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle17']->value,30,'..',true,true);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle18']->value;?>

Germans use &quot;&Uuml;mlauts&quot; and pay in &euro;uro

<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['articleTitle18']->value, ENT_QUOTES);?>

Germans use "&Uuml;mlauts" and pay in &euro;uro

<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['articleTitle18']->value, 'UTF-8', 'HTML-ENTITIES');?>

Germans use "Ümlauts" and pay in €uro<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle19']->value;?>

<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle19']->value, 'UTF-8');?>



<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle20']->value;?>


<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle20']->value,30,"\n",false);?>


<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle20']->value,20,"\n",false);?>


<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle20']->value,30,"<br />\n",false);?>


<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle20']->value,26,"\n",true);?>
<br/><br/>

<?php echo $_smarty_tpl->tpl_vars['articleTitle21']->value;?>

<?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle21']->value, 'UTF-8'));?>

<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle21']->value, 'UTF-8')));?>

<?php echo smarty_modifier_spacify(smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle21']->value, 'UTF-8'),30));?>

<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle21']->value, 'UTF-8')),30,". . .");?>
<br/><br/>






<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));
?>


<?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), false);?>

<?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), false);?>
 <br/><br/>

<ul>
<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php }
}
?>

</ul><br/>


<ul>
<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (3) : 3-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),3);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 3, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php }
}
?>

</ul>

<br/>


<ul>
<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php }} else { ?>
  no iteration
<?php }
?>

</ul>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
   <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_4_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_6_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<br/><br/>



  <?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_7_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
      
      <?php continue 1;?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  
<br/><br/>




 </body>
</html><?php }
/* smarty_template_function_menu_1067927297632d8c12d1c291_67601790 */
if (!function_exists('smarty_template_function_menu_1067927297632d8c12d1c291_67601790')) {
function smarty_template_function_menu_1067927297632d8c12d1c291_67601790($_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
  <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
      <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), false);?>

    <?php } else { ?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
<?php
}}
/*/ smarty_template_function_menu_1067927297632d8c12d1c291_67601790 */
}
