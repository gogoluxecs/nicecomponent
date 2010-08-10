<?php /* Smarty version Smarty3-RC3, created on 2010-08-10 16:39:08
         compiled from "/home/g2/project/org/local/php/nicecomponent/www/ncom/test/templates/get_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13423716314c61567c6622f1-47012948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb504163d53410ff51c2ce74666ee11f475ed46' => 
    array (
      0 => '/home/g2/project/org/local/php/nicecomponent/www/ncom/test/templates/get_single.tpl',
      1 => 1281447547,
    ),
  ),
  'nocache_hash' => '13423716314c61567c6622f1-47012948',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Get all tpl</h1>

<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
?>
	<?php echo $_smarty_tpl->tpl_vars['r']->value;?>

	<br />
<?php }} ?>

<hr />

