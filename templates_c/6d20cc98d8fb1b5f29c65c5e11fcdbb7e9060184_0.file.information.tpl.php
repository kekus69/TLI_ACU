<?php
/* Smarty version 3.1.28, created on 2016-04-11 23:32:18
  from "/var/www/html/TLI_ACU/templates/pages/information.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570c17e23863e1_10887853',
  'file_dependency' => 
  array (
    '6d20cc98d8fb1b5f29c65c5e11fcdbb7e9060184' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/information.tpl',
      1 => 1460410332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570c17e23863e1_10887853 ($_smarty_tpl) {
?>
<div>

Information


<table>
<thead>
  <tr>
    <th>name</th>
    <th>mer id</th>
    <th>type</th>
    <th>desc</th>
  </tr>
  </thead>
<tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['list_news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_0_saved_item = isset($_smarty_tpl->tpl_vars['news']) ? $_smarty_tpl->tpl_vars['news'] : false;
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable();
$__foreach_news_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_news_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$__foreach_news_0_saved_local_item = $_smarty_tpl->tpl_vars['news'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['mer'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['type'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['desc'];?>
</td>
      </tr>
<?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_local_item;
}
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_item;
}
?>
</tbody>
</thead>
</table>

</div>
<?php }
}
