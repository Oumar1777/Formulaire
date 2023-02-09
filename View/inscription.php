<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/CSS/index.css?ts=<?=time()?>">
    <title>Connexion</title>
</head>
<body>
    <h1>Page d'inscription</h1>
    <div class="form">
        <form action="index.php?location=signUpCheck" method="post">
            <fieldset>
                <legend>Inscription</legend>
                <!--Nom d'utilisateur-->
                <label for="">Nom d'utilisateur</label><br>
                <input type="text" name="user" id="" placeholder="Nom d'utilisateur" required><br>

                <!--Email-->
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="monmail@exemple.com" value="<?= $_POST[''] ?? '' ?>" required><br>
                
                <!--Mot de passe-->
                <label for="">Mot de Passe:</label><br>
                <input type="password" name="password" id="" placeholder="Mot de passe" required><br>

                <div class="submit">
                <input type="reset" value="Annuler"><input type="submit" value="Connexion">
                </div>

                <?php if(isset($apercu)) :?>
                    <p><?=$apercu?></p>
                <?php endif ?>
            </fieldset>
            <p> Déjà un compte ? <a href="index.php?location=login">Connectez-vous</a> </p>
        </form>
    </div>
    
</body>
</html>