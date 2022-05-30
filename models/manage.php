<?php


class Manage {
    
    protected function db_connect() {
        $server ='db.3wa.io';
        $login = 'aureliechalandre';
        $pwd = '9d2c0f68a24a822688b18de77930d779';
        $base ='aureliechalandre_locarando' ;

        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
     }
    
    protected function getQuery($query,$data =[]) {
        $db = $this->db_connect();
        $stmt= $db->prepare($query);
        $stmt->execute($data);
        return $stmt;
    }
}