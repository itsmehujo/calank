CREATE DATABASE CleanMyCalanque;
CREATE USER calanque IDENTIFIED BY 'password';
GRANT ALL ON CleanMyCalanque.* TO calanque;
FLUSH PRIVILEGES;
