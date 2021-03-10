<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/structure.css">
    <link rel="stylesheet" href="css/register.css">


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
            <h2>Create an account Acupunctus Medecine</h2>
        </div>
        <div id="pract" class="array">
            <div id="container">
                <form action="">
        
                    <label for="name"><p>First Name</p></label>
                    <input type="text" name="name" placeholder="First Name">
        
                    <label for="firstname"><p>Last Name</p></label>
                    <input type="text" name="firstname" placeholder="Last name">
        
                    <label for="email"><p>Mail Address</p></label>
                    <input type="text" name="email" placeholder="exemple@de.bosh.com">
        
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="password" placeholder="Password">
        
                    <label for="rpt-password"><p>Confirm Password</p></label>
                    <input type="password" name="rpt-password" placeholder="Confirm password">
        
                    <button type="submit" id="btn_register">Register</button>
        
                    <hr>
        
                    <div id="login">
                    <p>Already have an account ? <a href="index.php?page=connexion"> Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
	{include file="footer.tpl"}


</body>

</html>
