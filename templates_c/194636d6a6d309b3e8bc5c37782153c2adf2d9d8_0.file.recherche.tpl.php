<?php
/* Smarty version 3.1.28, created on 2016-04-28 15:34:45
  from "/var/www/html/TLI_ACU/templates/pages/recherche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572211759019b6_86479886',
  'file_dependency' => 
  array (
    '194636d6a6d309b3e8bc5c37782153c2adf2d9d8' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/recherche.tpl',
      1 => 1461850475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572211759019b6_86479886 ($_smarty_tpl) {
?>
<form method="post">
   <select name="meridien" size="1">
      <optgroup label="-Selectionner un méridien-">
         <option selected>--</option>
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
      </optgroup>
   </select>
   <select name="type" size="1">
      <optgroup label="-Selectionner un type de pathologie-">
         <option selected>--</option>
         <option value="me">Méridien Externe
         <option value="mi">Méridien Interne
         <option value="lp">Voie Luo Pleine
         <option value="lv">Voie Luo Vide
         <option value="j">Jing Jin
         <option value="tfp">Zang Plein
         <option value="tfv">Zang Vide
         <option value="tfc">Zang Chaud
         <option value="tff">Zang Froid
         <option value="tfpc">Fu Plein et Chaud
         <option value="tfvf">Fu Vide et Froid
         <option value="l2p">Voie Grand Luo Pleine
         <option value="l2v">Voie Grans Luo Vide
         <option value="tfv-">Zang Yin Vide
         <option value="tfv+">Zang Yang Vide
         <option value="tfvfs">Fu Supérieur Vide et Froid
         <option value="tfpcs">Fu Supérieur Plein et Chaud
         <option value="tfvfm">Fu Moyen Vide et Froid
         <option value="tfpcm">Fu Moyen Plein et Chaud
         <option value="tfvfi">Fu Inférieur Vide et Froid
         <option value="tfpci">Fu Inférieur Plein et Chaud
         <option value="mv">Pathologie Générale
         <option value="mvi">Pathologie de la Branche Inférieure
         <option value="mvp">Pathologie de la Branche Postérieure
         <option value="mva">
            Pathologie de la Branche Antérieure
            <!--<?php
$_from = $_smarty_tpl->tpl_vars['list_der2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_der2_1_saved_item = isset($_smarty_tpl->tpl_vars['der2']) ? $_smarty_tpl->tpl_vars['der2'] : false;
$_smarty_tpl->tpl_vars['der2'] = new Smarty_Variable();
$__foreach_der2_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_der2_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['der2']->value) {
$__foreach_der2_1_saved_local_item = $_smarty_tpl->tpl_vars['der2'];
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['der2']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['der2']->value['type'];?>
 </option>
               <?php
$_smarty_tpl->tpl_vars['der2'] = $__foreach_der2_1_saved_local_item;
}
}
if ($__foreach_der2_1_saved_item) {
$_smarty_tpl->tpl_vars['der2'] = $__foreach_der2_1_saved_item;
}
?>-->
      </optgroup>
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
$__foreach_news_2_saved_item = isset($_smarty_tpl->tpl_vars['news']) ? $_smarty_tpl->tpl_vars['news'] : false;
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable();
$__foreach_news_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_news_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$__foreach_news_2_saved_local_item = $_smarty_tpl->tpl_vars['news'];
?>
      <tr data-pathologie="<?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
" data-caracteristique="<?php echo $_smarty_tpl->tpl_vars['news']->value['sympt'];?>
">
         <td><?php echo $_smarty_tpl->tpl_vars['news']->value['patho'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['news']->value['sympt'];?>
</td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_2_saved_local_item;
}
}
if ($__foreach_news_2_saved_item) {
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_2_saved_item;
}
?>
   </tbody>
</table>
<?php }
}
