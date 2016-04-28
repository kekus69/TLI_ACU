<?php
/* Smarty version 3.1.28, created on 2016-04-28 18:10:33
  from "/var/www/html/TLI_ACU/templates/pages/recherche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572235f98ca5f6_69462298',
  'file_dependency' => 
  array (
    '194636d6a6d309b3e8bc5c37782153c2adf2d9d8' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/recherche.tpl',
      1 => 1461859826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572235f98ca5f6_69462298 ($_smarty_tpl) {
?>

<form title="filter" method="post">
	<select title="Meridien" name="meridien" size="1">
		<option disabled selected>Selectionner un méridien</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['list_der1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_der1_0_saved_item = isset($_smarty_tpl->tpl_vars['der1']) ? $_smarty_tpl->tpl_vars['der1'] : false;
$_smarty_tpl->tpl_vars['der1'] = new Smarty_Variable();
$__foreach_der1_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_der1_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['der1']->value) {
$__foreach_der1_0_saved_local_item = $_smarty_tpl->tpl_vars['der1'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['der1']->value['nom'];?>
"><?php echo $_smarty_tpl->tpl_vars['der1']->value['nom'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['der1'] = $__foreach_der1_0_saved_local_item;
}
}
if ($__foreach_der1_0_saved_item) {
$_smarty_tpl->tpl_vars['der1'] = $__foreach_der1_0_saved_item;
}
?>
	</select>

	<select title="Pathologie" name="type" size="1">
		<option disabled selected>Selectionner un type de pathologie</option>
		<option value="j">Jing Jin</option>
		<option value="l2">Voie Grand Luo</option>
		<option value="l">Voie Luo</option>
		<option value="m">Méridien</option>
		<option value="tf">Organe/visere</option>
		<option value="mv">Merveilleux vaisseaux</option>
	</select>
	<select title="Caracteristiques" name="carac" size="1">
		<option disabled selected>Selectionner une caracteristique
		<option value="c">chaud
		<option value="f">froid
		<option value="p">plein
		<option value="v">vide
		<option value="i">interne
		<option value="e">externe
	</select>

	<input type="submit" value="Filtrer"/>

</form>

<table>
  <thead>
    <tr>
      <th>Pathologie</th>
      <th>Symptômes</th>
    </tr>
  </thead>
  <tbody>

<?php
$_from = $_smarty_tpl->tpl_vars['list_news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_1_saved_item = isset($_smarty_tpl->tpl_vars['news']) ? $_smarty_tpl->tpl_vars['news'] : false;
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable();
$__foreach_news_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_news_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$__foreach_news_1_saved_local_item = $_smarty_tpl->tpl_vars['news'];
?>
	<tr data-pathologie="<?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
" data-symptome="<?php echo $_smarty_tpl->tpl_vars['news']->value['sympt'];?>
">
        	<td><?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
</td>
        	<td><?php echo $_smarty_tpl->tpl_vars['news']->value['sympt'];?>
</td> 
      	</tr>
<?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_1_saved_local_item;
}
}
if ($__foreach_news_1_saved_item) {
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_1_saved_item;
}
?>


   
  </tbody>
</table>

<?php }
}
