<?php /* Smarty version Smarty3-RC3, created on 2010-08-10 15:38:08
         compiled from "/home/g2/project/org/local/php/nicecomponent/www/ncom/test/templates/get_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18166727324c614830aab808-89819073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c490399cb740a0df850127911d515634675bafb7' => 
    array (
      0 => '/home/g2/project/org/local/php/nicecomponent/www/ncom/test/templates/get_all.tpl',
      1 => 1281443860,
    ),
  ),
  'nocache_hash' => '18166727324c614830aab808-89819073',
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

