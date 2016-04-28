<form method="post">
   <select name="meridien" size="1">
      <optgroup label="-Selectionner un méridien-">
         <option selected>--</option>
            {foreach from=$list_der1 item=der1}
         <option value="{$der1.nom}">{$der1.nom} </option>
            {/foreach}
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
            <!--{foreach from=$list_der2 item=der2}
               <option value="{$der2.type}">{$der2.type} </option>
               {/foreach}-->
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
      {foreach from=$list_news item=news}
      <tr data-pathologie="{$news.patho}" data-caracteristique="{$news.sympt}">
         <td>{$news.patho}</td>
         <td>{$news.sympt}</td>
      </tr>
      {/foreach}
   </tbody>
</table>
