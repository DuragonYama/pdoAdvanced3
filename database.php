<?php 

class Database {

  public $pdo;

    public function __construct($db = "InsertFunctie", $user = "root", $pwd = "", $host = "localhost")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    public function insertInto($naam, $email, $leeftijd) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO personen(naam, email, leeftijd) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$naam, $email, $leeftijd]);
      }
    }
}

$db = new Database();

?>