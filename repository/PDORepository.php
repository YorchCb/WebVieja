<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDORepository
 *
 * @author fede
 */
abstract class PDORepository {
    
    const USERNAME = "root";
    const PASSWORD = "root";
	const HOST ="localhost";
	const DB = "project";
    
    
    private function getConnection(){
        $u=self::USERNAME;
        $p=self::PASSWORD;
        $db=self::DB;
        $host=self::HOST;
        $connection = new PDO("mysql:dbname=$db;host=$host", $u, $p);
        return $connection;
    }
    
    public function findAll($sql, $args, $mapper){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        $list = [];
        while($element = $stmt->fetch()){
            $list[] = $mapper($element);
        }
        return $list;
    }

    public function findId($table, $className, $mapper, $id) {
        $conn = $this->getConnection();
        $sql = 'select * from ' . $table . 'where id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            'id' => $id,
        ));
        $object = $mapper($stmt->fetchObject($className));
        return $object;
    }
}
