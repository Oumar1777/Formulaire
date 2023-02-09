<?php
    function dataBaseConnexion()
    {
        try
        {
            $data_base= new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

            return $data_base;
        }
        catch(Exception $e)
        {
            die("Erreur : ".$e->getMessage());
        }
    }

    function inscription($username, $email, $password)
    {
        $data_base= dataBaseConnexion();
        $inscription= $data_base->prepare("INSERT INTO members (username,mail,password) VALUES(?, ?, ?) ");
        $inscription->execute([$username, $email, $password]);

        return $inscription;
    }

    function emailCheck($email)
    {
        $data_base= dataBaseConnexion();
        $mail= $data_base->prepare("SELECT id, mail, password, username FROM members WHERE mail= ?");
        $mail->execute([$email]);

        $email= $mail->fetch();

        return $email;
    }

?>

