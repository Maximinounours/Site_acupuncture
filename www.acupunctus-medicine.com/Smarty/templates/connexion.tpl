<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/structure.css">


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


{if $utilisateur->getIsConnected()}
        <div id="pract" class="array">
            <div id="container">
                <p>You are already logged in</p>
                <form action="index.php" method="POST">

                    <button type="submit" id="btn_register"><p>Déconnexion</p></button>
                </form>
            </div>
        </div>
{else}
            <div id="container">
                <form action="index.php?page=connexion" method="POST">
                    <label for="email"><p>Mail address</p></label>
                    <input type="text" name="login_email" placeholder="exemple@de.bosh.com">
            
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="login_password" placeholder="Password">

                    {if $wrong_password}
                    <p style="color: rgb(121, 16, 16);">Invalid password</p>
                    {/if}
                    {if $unknown_email}
                    <p style="color: rgb(121, 16, 16);">Unknown mail</p>
                    {/if}
            
                    <button type="submit" id="btn_register"><p>Log in</p></button>
            
                    <hr>

            
                    <div id="login">
                        <p>No account ? <a href="index.php?page=register"> Register</a></p> 
                    </div>
                </form>
{/if}
            </div>
        </div>
    </div>
       

	{include file="footer.tpl"}

</body>

</html>
