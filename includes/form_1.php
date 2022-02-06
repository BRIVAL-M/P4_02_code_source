<?php	
	if(isset($_POST['submit']))		
	{
		if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message']))
		{
			if(!empty($_POST['name']) AND !empty($_POST['email'])AND !empty($_POST['message']))
			{
				$name=htmlspecialchars($_POST['name']);
				$email=htmlspecialchars($_POST['email']);
				$message=htmlspecialchars($_POST['message']);

				echo " <h2>Bonjour <b> $name </b> ce n'est pas chouette !</br></br>Il semble que notre serveur rencontre des difficultés en ce moment.
				</br></br>Mais ne vous inquiétez pas, nous vous contacterons prochainement à cette adresse</br></br> <b> $email </b></h2>"
			}
		}
	}	
?>
