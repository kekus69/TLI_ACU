<?php
/* Smarty version 3.1.28, created on 2016-03-21 00:23:43
  from "/var/www/html/projet/templates/indextest.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56ef30ff514e28_02402028',
  'file_dependency' => 
  array (
    '3fef0813726e00457117c5313d3a389df6e8ed55' => 
    array (
      0 => '/var/www/html/projet/templates/indextest.tpl',
      1 => 1458516033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56ef30ff514e28_02402028 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_125194330356ef30ff505135_43823300',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_201275056756ef30ff50ec90_31547417',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:indextest.tpl */
function block_125194330356ef30ff505135_43823300($_smarty_tpl, $_blockParentStack) {
?>
alors?<?php
}
/* {/block 'title'} */
/* {block 'content'}  file:indextest.tpl */
function block_201275056756ef30ff50ec90_31547417($_smarty_tpl, $_blockParentStack) {
?>
test test<?php
}
/* {/block 'content'} */
}
