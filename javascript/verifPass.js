function verifpass(input) {
	  
if (input.value != document.getElementById('inscription-password').value) {

input.setCustomValidity('Les deux mots de passe ne correspondent pas.');

  } else {

// le champ est valide : on réinitialise le message d'erreur
	
	input.setCustomValidity('');

	  }

	}

