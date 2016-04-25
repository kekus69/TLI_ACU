function verifPseudo(champ)

{

   if(champ.value.length < 2 || champ.value.length > 25)

   {

      surligne(champ, true);
      alert("Votre pseudo doit contenir entre 3 et 25 caractères");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}
