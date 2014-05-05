    <?php

    session_start();

    $BDD = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    ?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ecole Test</title>
    </head>
 
    <body>
        <div id="bloc_page">
            <header>
			<table width="940 px">
			<tr>
			<td width="200">
                <div id="titre_principal">
                    <img src="images/logo.jpg" alt="Logo" id="logo" />
                </div>                 
            </td>
			<td>
			<div id="banniere_image">
                <div id="banniere_description">
                    Ecole Test               
                </div>
            </div>
			</tr>
			</table>
			<div style="text-align:right; margin-right : 25px;" height="20">
			<form method="post" action="">
				<div> <input type="submit" name="OK">
				nom d'utilisateur 
				<input type="text" name="user">
				mot de passe 
				<input type="password" name="password">
				</div>
			</div>
			</header>
            <table width="940 px">
			<tr>
			<td width="200">
			<nav>
				<ul>
                    <li><a href="index.html">Enfants</a></li>
                </ul>
            <nav>
			</td>
			<td width="540">           
            <section>
                <article>
                    <h1 style="text-align:center">Bienvenue</h1>
					<p style="text-align:center">Pour vous inscrire</p>
                </article>                
            </section>  
			</td>
			</tr>
        </div>
    </body>
</html>