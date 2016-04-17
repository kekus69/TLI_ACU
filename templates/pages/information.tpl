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
	<tr data-pathologie={$news.patho_espace} data-caracteristique={$news.exemple_espace} data-exemple={$news.carac_espace}>
        <td>{$news.patho}</td>
        <td>{$news.exemple}</td>
        <td>{$news.carac}</td>
      </tr>
{/foreach}


   
  </tbody>
</table>

