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
    {foreach from=$list_news item=news}
      <tr>
        <td>{$news.name}</td>
        <td>{$news.mer}</td>
        <td>{$news.type}</td>
        <td>{$news.desc}</td>
      </tr>
{/foreach}
</tbody>
</thead>
</table>

</div>
