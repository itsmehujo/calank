<?php


class Sorties extends Dbh
{
    private $connection;
    public $data;
    public $sums = [];
    public $avgs = [];

    public function __construct ()
    {
        $this->connection = $this->connect();
    }

    public function getById ($id) {
        $sql = "SELECT * FROM sorties WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $this->data = $stmt->fetch();
    }
    public function getAll () {
        $sql = "SELECT * FROM sorties";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $this->data = $stmt->fetchAll();
    }
    public function insertIntoDB (string $lieu, string $date, int $cleaner, int $nb_sac, int $kilos, float $verre, float $plastique, float $carton, float $canette, float $tout_venant, float $encombrant, float $megots, float $bouchon, float $proto) {
        $sql = 'INSERT INTO sorties(lieu, date, cleaner, nb_sac, kilos, verre, plastique, carton, canette, tout_venant, encombrant, megots, bouchon, proto) VALUES (:lieu, :date, :cleaner, :nb_sac, :kilos, :verre, :plastique, :carton, :canette, :tout_venant, :encombrant, :megots, :bouchon, :proto)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':lieu', $lieu);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':cleaner', $cleaner);
        $stmt->bindParam(':nb_sac', $nb_sac);
        $stmt->bindParam(':kilos', $kilos);
        $stmt->bindParam(':verre', $verre);
        $stmt->bindParam(':plastique', $plastique);
        $stmt->bindParam(':carton', $carton);
        $stmt->bindParam(':canette', $canette);
        $stmt->bindParam(':tout_venant', $tout_venant);
        $stmt->bindParam(':encombrant', $encombrant);
        $stmt->bindParam(':megots', $megots);
        $stmt->bindParam(':bouchon', $bouchon);
        $stmt->bindParam(':proto', $proto);
        $stmt->execute();
        return $stmt->rowCount();
    }
    public function sum (string $column) {
        $sql = "SELECT SUM($column) as $column FROM sorties";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch()[$column];
    }
    public function avg (string $column) {
        $sql = "SELECT AVG($column) AS $column FROM sorties";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch()[$column];
    }
    public function doAll(string $func) {
        $columns = ['cleaner', 'nb_sac', 'kilos', 'verre', 'plastique', 'carton', 'canette', 'tout_venant', 'encombrant', 'megots' ,'bouchon', 'proto'];
        $data = [];
        if($func === 'sums') {
            foreach($columns as $column) {
                $result = $this->sum($column);
                $data[] = ['name' => $column, 'value' => $result];
            }
            $this->sums = $data;
        }
        else {
            foreach($columns as $column) {
                $result = $this->avg($column);
                $data[] = ['name' => $column, 'value' => $result];
            }
            $this->avgs = $data;
        }
    }
}