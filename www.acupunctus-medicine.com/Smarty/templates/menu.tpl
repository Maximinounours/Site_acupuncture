               <!-- Un petit menu avec les pages accessibles pratiques -->
               <div class="menu_simple" class='lignes'>
                <ul>
                    <li>
                        <a href="index.php?page=accueil">
                            <target=_ self></target> Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=contact">
                            <target=_ self></target> About us </a>
                    </li>
                    <li>
                            <a href="index.php?page=info">
                                <target=_ self></target> Information </a>
                    </li>

{if $utilisateur->getIsConnected()}
        <div id="pract" class="array">
            <div id="container">
                <p>Youa re already logged in</p>
                <form action="index.php" method="POST">

                    <button type="submit" id="btn_register"><p>Déconnexion</p></button>
                </form>
            </div>
        </div>

{else}

                    <li>
                        <a href="index.php?page=connexion">
                            <target=_ self></target> Connexion </a>
                    </li>
{/if}

                    <li>
                        <div id="image_logo">
                            <img src="./images/logo.png" alt="logo">
                        </div>
                    </li>

                </ul>   
            </div>
        </div>
