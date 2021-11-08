<?php

// On crée une classe qui va nous permettre de se connecter, et de sécuriser ladite connexion à la base de donnée avec d'autres classes dites 'enfants'

class Dbh {
    private $host = "localhost";
    private $port = 3306;
    private $user = "utilisateur";
    private $pwd = "calanque";
    private $dbName = "CleanMyCalanque";

    protected function connect() {

        $dsn = 'mysql:host=' . $this->host . ';dbport=' . $this->port . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);

        // On définit le paramètre de recherche par default en fetch_assoc pour que le résultat de la recherche soit un tableau clé-valeur, plus pratique à parcourir.
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // A laisser  ?
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

?>