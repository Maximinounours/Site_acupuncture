<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/register.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

{include file = 'menu.tpl'}

    <!-- Formulaire pour s'enregistrer-->

    <form action="">

        <div id="container">

            <h1>Créer un compte ACUPUNCTURA</h1>

            <hr>

            <label for="name">Prénom</label>
            <input type="text" name="name" placeholder="Prénom">

            <label for="firstname">Nom</label>
            <input type="text" name="firstname" placeholder="Nom">

            <label for="email">Adresse mail</label>
            <input type="text" name="email" placeholder="exemple@de.bosh.com">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe">

            <label for="rpt-password">Confirmer le mot de passe</label>
            <input type="password" name="rpt-password" placeholder="Répeter le mot de passe">

            <button type="submit" id="btn_register">Créer un compte</button>

            <hr>

            <div id="login">
            <p>Vous avez déjà un compte ? <a href="index.php?page=connexion"> Se connecter</a></p>

          </div>
        </div>
        
    </form>

	{include file="footer.tpl"}
</body>

</html>
