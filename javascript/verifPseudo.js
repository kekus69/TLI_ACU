function verifPseudo(input)

{

   if(input.value.length < 3 || input.value.length > 25)

   {

      
      input.setCustomValidity("Votre pseudo doit contenir entre 3 et 25 caractères");

	  

  } else {

// le champ est valide : on réinitialise le message d'erreur
	
	input.setCustomValidity('');

	  }

	}
