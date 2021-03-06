<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/connexion.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
   {include file="menu.tpl"}

    <!-- Formulaire pour s'enregistrer-->

    <form action="">

        <div id="container">

            <h1>Connexion</h1>

            <hr>

            <label for="email">Adresse mail</label>
            <input type="text" name="email" placeholder="exemple@de.bosh.com">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe">

            <button type="submit" id="btn_register">Se connecter</button>

            <hr>

            <div id="register">
            <p>Pas de compte ? <a href="index.php?page=register"> Créer un compte</a></p>
            
          </div>
        </div>

    </form>


	{include file="footer.tpl"}
</body>

</html>
