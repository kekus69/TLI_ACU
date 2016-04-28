
<form title="filter" method="post">
	<select title="Meridien" name="meridien" size="1">
		<option disabled selected>Selectionner un méridien</option>
		{foreach from=$list_der1 item=der1}
		<option value="{$der1.nom}">{$der1.nom}</option>
		{/foreach}
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

{foreach from=$list_news item=news}
	<tr data-pathologie="{$news.patho}" data-symptome="{$news.sympt}">
        	<td>{$news.patho}</td>
        	<td>{$news.sympt}</td> 
      	</tr>
{/foreach}


   
  </tbody>
</table>

