<div class="filters">

  <input type="text" id="pathologie" placeholder="Pathologie" />
  <input type="text" id="caracteristique" placeholder="Caractéristique" />
  <input type="text" id="symptome" placeholder="Symptôme" />
  <button>Effacer</button>

</div>
<table>
  <thead>
    <tr>
      <th>Catégorie de pathologie</th>
      <th>Caratéristiques possibles</th>
      <th>Symptômes</th>

    </tr>
  </thead>
  <tbody>

{foreach from=$list_news item=news}
	<tr data-pathologie="{$news.patho}" data-caracteristique="{$news.carac}" data-symptome="{$news.symptome}">
        <td>{$news.patho}</td>
        <td>{$news.carac}</td>
        <td>{$news.symptome}</td>
      </tr>
{/foreach}


   
  </tbody>
</table>
</div>
