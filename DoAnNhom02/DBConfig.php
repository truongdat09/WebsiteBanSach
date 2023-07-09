<?php
class DBConfig
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host = "localhost", $username = "root", $password = "", $database = "dtb_ban_sach_3")
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kết nối thất bại " . $e->getMessage());
        }
    }
    
    public function isConnected()
    {
        return $this->connection !== null;
    }

    public function executeQuery($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("Kết nói thất bại " . $e->getMessage());
        }
    }

    public function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $this->executeQuery($query, $data);
    }

    public function update($table, $data, $condition)
    {
        $setValues = '';
        foreach ($data as $key => $value) {
            $setValues .= "$key = :$key, ";
        }
        $setValues = rtrim($setValues, ", ");

        $query = "UPDATE $table SET $setValues WHERE $condition";
        $this->executeQuery($query, $data);
    }

    public function delete($table, $condition)
    {
        $query = "DELETE FROM $table WHERE $condition";
        $this->executeQuery($query);
    }

    public function select($table, $condition = '', $params = [])
    {
        $query = "SELECT * FROM $table";
        if (!empty($condition)) {
            $query .= " WHERE $condition";
        }

        $statement = $this->executeQuery($query, $params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getMaxBookCode($table, $codeColumn)
    {
        $query = "SELECT MAX($codeColumn) AS max_code FROM $table";
    
        $statement = $this->executeQuery($query);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $result['max_code'] ?? null;
    }

    public function getQuantity ($table, $codeColumn, $condition)
    {
        $query = "SELECT $codeColumn AS Quantity FROM $table WHERE $condition";
    
        $statement = $this->executeQuery($query);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $result['Quantity'] ?? null;
    }

    

}
?>