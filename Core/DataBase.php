<?php 
namespace Core;
use PDO;
use PDOException;

class DataBase
{
    public $connect;

    public function __construct()
    {
        try {
            $config = require basePath('config.php');
            $dsn = 'mysql:'. http_build_query($config['dataBase'],' ',';');
            $this->connect = new PDO($dsn, $config['credentials']['userName'], $config['credentials']['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $exc) {
            echo "Error en la conexión: " . $exc->getMessage();
        }
    }
    
    public function getFormatJson($array)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($array);
    }
    public function queryReturnArray($sql, $params = [])
    {
        try {
            $statement = $this->connect->prepare($sql);
            $statement->execute($params);
            return $statement->fetchAll(PDO::FETCH_ASSOC) ;
        } catch (PDOException $exc) {
            var_dump($exc);
            return $exc;
        }
    }
    public function queryReturnBoolean($sql, $params = []) {
        try {
            $statement = $this->connect->prepare($sql);
            $statement->execute($params);
            $result = $statement->fetchColumn(); // Obtiene el valor de la primera columna
    
            return (bool) $result; // Convierte el resultado a booleano (true si existe, false si no)
        } catch (PDOException $exc) {
            var_dump($exc);
            return false; // En caso de error, devuelve false
        }
    }
    public function save($table, $params)
    {
        foreach ($params as $key => $value) {
            $arrayColumns[] = $key;
        }
        $columns = implode(', ', array_map(fn($item) => "`$item`", $arrayColumns));
        $values = implode(', ', array_map(fn($item) => ":$item", $arrayColumns));
        $sql = "INSERT INTO `$table` ($columns) VALUES ($values);";
        //Ejecutar la consulta directamente
        return $this->queryReturnBoolean($sql, $params);
    }
    public function edit($table, $params, $id,)
    {
        $set = implode(', ', array_map(fn($key) => "`$key`= :$key", array_keys($params), $params));
        $sql = "UPDATE `$table` SET $set WHERE id = $id;";
        return $this->queryReturnBoolean($sql, $params);
    }
    public function delete($table, $id)
    {
        $params = [
            ':id' => $id
        ];
        $sql = "DELETE FROM `$table` WHERE id = :id;";
        // Ejecutar la consulta directamente
        return $this->queryReturnBoolean($sql, $params);
    }
    public function truncate($table,)
    {
        $sql = "TRUNCATE TABLE `$table`;";
        return $this->queryReturnBoolean($sql);
    }
    public function get($table)
    {
        $sql = "SELECT * FROM $table;";
        return $this->queryReturnArray($sql);
    }
}


