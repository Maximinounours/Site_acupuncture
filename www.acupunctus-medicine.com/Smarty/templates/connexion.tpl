<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/structure.css">
    <link rel="stylesheet" href="css/connexion.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
  {include file = 'menu.tpl'}

    <!-- Formulaire pour s'enregistrer-->
    <div id="wrapper">
        <div id="contact"> 
            <h2> Connexion </h2>
            
        </div>
        <div id="pract" class="array">
            <div id="container">
                <form action="">
                    <label for="email"><p>Mail address</p></label>
                    <input type="text" name="email" placeholder="exemple@de.bosh.com">
            
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="password" placeholder="Password">
            
                    <button type="submit" id="btn_register"><p>Log in</p></button>
            
                    <hr>
            
                    <div id="register">
                        <p>No account ? <a href="index.php?page=register"> Register</a></p> 
                    </div>
                </form>
            </div>
        </div>
    </div>
       

	{include file="footer.tpl"}

</body>

</html>
