<?php
/* Smarty version 3.1.28, created on 2016-04-23 02:13:36
  from "/var/www/html/TLI_ACU/templates/pages/information.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571abe30551ba8_25029863',
  'file_dependency' => 
  array (
    '6d20cc98d8fb1b5f29c65c5e11fcdbb7e9060184' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/information.tpl',
      1 => 1461370409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571abe30551ba8_25029863 ($_smarty_tpl) {
?>
<div class="filters">

  <input type="text" id="pathologie" placeholder="Pathologie" />
  <input type="text" id="caracteristique" placeholder="Caractéristiques" />
  <input type="text" id="exemple" placeholder="Exemple" />
  <button>Effacer</button>

</div>
<table>
  <thead>
    <tr>
      <th>Catégorie de pathologie</th>
      <th>Caratéristiques possibles</th>
      <th>Exemple</th>

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
	<tr data-pathologie="<?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
" data-caracteristique="<?php echo $_smarty_tpl->tpl_vars['news']->value['carac'];?>
" data-exemple="<?php echo $_smarty_tpl->tpl_vars['news']->value['exemple'];?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['carac'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['news']->value['exemple'];?>
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
</table>
<?php }
}
