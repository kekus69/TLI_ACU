function verifAge()

{
var champ1 = document.getElementById('inscription-password');
var champ2 = document.getElementById('inscription-password2');
   if(champ1!=champ2)

   {
      message.innerHTML = "Passwords Do Not Match!"

      return false;

   }

   else

   {

      message.innerHTML = "Passwords Match!"

      return true;

   }

}
