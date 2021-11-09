<?php

// On crée une classe qui va nous permettre de se connecter, et de sécuriser ladite connexion à la base de donnée avec d'autres classes dites 'enfants'

class Dbh {
    private $host = "db";
    private $user = "user";
    private $pwd = ".password";
    private $dbName = "calanques";

    protected function connect() {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);

        // On définit le paramètre de recherche par default en fetch_assoc pour que le résultat de la recherche soit un tableau clé-valeur, plus pratique à parcourir.
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // A laisser  ?
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

?>