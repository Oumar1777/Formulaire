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
    <h1>Page de connexion</h1>
    <div class="form">
        <form action="index.php?location=loginCheck" method="post">
            <fieldset>
                <legend>Connexion</legend>
                
                <!--Email-->
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="monmail@exemple.com" value="<?= $_POST[''] ?? '' ?>" required><br>
                
                <!--Mot de passe-->
                <label for="">Mot de Passe:</label><br>
                <input type="password" name="password" id="" placeholder="Mot de passe" required><br>

                <div class="submit">
                    <!--Annuler-->
                <input type="reset" value="Annuler">
                    <!--Connexion-->
                <input type="submit" value="Connexion">
                </div>

                <?php if(isset($apercu)) :?>
                    <p><?=$apercu?></p>
                <?php endif ?>

            </fieldset>
            <p> Pas de compte ? <a href="index.php?location=signUp">Inscrivez-vous</a> </p>
        </form>
        <div class="image">
                <img src="Public/IMG/image.jpeg" alt="Ceci est une image">
            </div>
    </div>


</body>
</html>