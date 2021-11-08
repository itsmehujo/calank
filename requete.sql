CREATE DATABASE CleanMyCalanque;

CREATE USER 'utilisateur'@'localhost' IDENTIFIED BY 'calanque';

GRANT ALL CleanMyCalanque.* TO 'utilisateur'@'localhost' IDENTIFIED BY 'calanque';

FLUSH PRIVILEGES;

USE CleanMyCalanque;

CREATE TABLE sorties(
    id INT AUTO_INCREMENT PRIMARY KEY,
    lieu VARCHAR(150),
    date DATE,
    cleaner INT,
    nb_sac INT,
    kilos INT,
    verre FLOAT,
    plastique FLOAT,
    carton FLOAT,
    canette FLOAT,
    tout_venant FLOAT,
    encombrant FLOAT,
    megots FLOAT,
    bouchon FLOAT,
    proto FLOAT

);

