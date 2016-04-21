<div class="filters">

  <input type="text" id="pathologie" placeholder="Pathologie" />
  <input type="text" id="caracteristique" placeholder="Caractéristiques" />
  <input type="text" id="exemple" placeholder="Exemple" />
  <button>Reset</button>

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

{foreach from=$list_news item=news}
	<tr data-pathologie="{$news.patho}" data-caracteristique="{$news.carac}" data-exemple="{$news.exemple}">
        <td>{$news.patho}</td>
        <td>{$news.carac}</td>
        <td>{$news.exemple}</td>
      </tr>
{/foreach}


   
  </tbody>
</table>
